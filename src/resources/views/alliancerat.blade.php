@extends('web::layouts.grids.12')

@section('title', 'Alliance wide ratting tax'))

@section('full')
    <div class="card">
        <div class="card-header">
            <h4>Alliance Taxes</h4>
        </div>

        <div class="card-body">
            <table class="table" id="events">
                <thead>
                <tr>
                    <th>{{ trans_choice('web::seat.alliance', 1) }}</th>
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
                        
                        <td data-order="{{ $entry->total }}">{{ number_format($entry->total) }}
                            @php
                             print_r($entry)   
                            @endphp
                        </td>
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

