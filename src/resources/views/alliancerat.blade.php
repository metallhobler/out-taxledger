@extends('web::layouts.grids.12')

@section('title', 'Alliance wide ratting tax'))

@section('full')
    <div class="card">
        <div class="card-header">
            <h4>Alliance Taxes</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('corpminingtax.createevent') }}" method="post" id="new-event" name="new-event">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="col">
                        <label for="duration">Year</label>
                        <input type="number" class="form-control" id="year" name="year">
                    </div>
                    <div class="col">
                        <label for="taxrate">Month</label>
                        <input type="number" class="form-control" id="month" name="month">
                    </div>
                </div>
                <div class="form-row">
                    <button type="submit" class="btn btn-primary" id="send">Show</button>
                </div>
            </form>
        </div>
        
        <div class="card-body">
            <table class="table" id="events">
                <thead>
                <tr>
                    <th>{{ trans_choice('web::seat.name', 1) }}</th>
                    <th>{{ trans_choice('web::seat.total', 1) }}</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($entries as $entry)
                        <tr>
                        <td data-order="{{ $entry->second_party->name }}">
                            @switch($entry->second_party->category)
                            @case('character')
                                @include('web::partials.character', ['character' => $entry->second_party])
                            @break
                            @case('corporation')
                                @include('web::partials.corporation', ['corporation' => $entry->second_party])
                            @break
                            @case('alliance')
                                @include('web::partials.alliance', ['alliance' => $entry->second_party])
                            @break
                            @endswitch
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

