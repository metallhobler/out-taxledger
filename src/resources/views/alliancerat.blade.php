@extends('web::layouts.grids.12')

@section('title', 'Alliance wide ratting tax'))

@section('full')
    <div class="card">
        <div class="card-header">
            <h4>Alliance Taxes</h4>
        </div>
        <div class="card-body">

        @foreach ($periods->chunk(12) as $chunk)
            <ul class="nav nav-pills justify-content-between">

            @foreach ($chunk as $period)
                <li class="nav-item">
                @if(date('Y', strtotime($period->year . '-01-01')) == (request()->route()->parameter('year') ?: carbon()->isoFormat('YYYY')) && date('m', strtotime($period->year . '-' . $period->month . '-01')) == (request()->route()->parameter('month') ?: carbon()->isoFormat('MM')))
                    <a href="{{ route('seat-outsmarted::alliancerat', [
                        $corporation,
                        date('Y', strtotime($period->year. '-01-01')),
                        date('m', strtotime($period->year . '-' . $period->month . '-01'))
                    ]) }}" class="nav-link active">{{ date("M Y", strtotime(sprintf('%d-%d-01', $period->year, $period->month))) }}</a>
                @else
                    <a href="{{ route('seat-outsmarted::alliancerat', [
                        $corporation,
                        date('Y', strtotime($period->year. '-01-01')),
                        date('m', strtotime($period->year . '-' . $period->month . '-01'))
                    ]) }}" class="nav-link">{{ date("M Y", strtotime(sprintf('%d-%d-01', $period->year, $period->month))) }}</a>
                @endif
                </li>
            @endforeach

            </ul>
        @endforeach
        </div>

        <div class="card-body">
            <table class="table" id="events">
                <thead>
                <tr>
                    <th>{{ trans_choice('web::seat.corporation', 1) }}</th>
                    <th>{{ trans_choice('web::seat.total', 1) }}</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($entries as $entry)
                        <tr>
                        <td data-order="{{ $entry->second_party->name }}">
                            @php
                                $corp_info = \Seat\Eveapi\Models\Corporation\CorporationInfo::find($entry->corporation_id);
                            @endphp
                            @if($corp_info)
                                {{ $corp_info->name }}
                            @else
                                <p>UNKNOWN</p>
                            @endif
                        </td>
                        
                        <td data-order="{{ $entry->total }}">{{ number_format($entry->total) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer">
        <i>Total: {{ number_format($entries->sum('total')) }}</i>
    </div>
@stop

