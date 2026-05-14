@extends('web::layouts.grids.12')

@section('title', 'Alliance wide ratting tax'))

@section('full')
    <div class="card">
        <div class="card-header">
            <h4>Create Event</h4>
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
    </div>

        <div class="card">
            <div class="card-header">
                <h3>Corp Mining Events</h3>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-9" style="height:50px"></div>
                        <div class="col-3">
                            <div class="btn-group float-right">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Filter</div>
                                </div>
                                <select class="form-control status-dropdown" style="width:112px; display:inline">
                                    <option value="">all</option>
                                    <option value="1">new</option>
                                    <option value="2">running</option>
                                    <option value="3">completed</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table" id="events">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Start</th>
                        <th>Event</th>
                        <th>Duration</th>
                        <th>Tax Rate</th>
                        <th>Total Income ISK</th>
                        <th>Tracking</th>
                        <th>Status</th>
                        <th>Actions</th>
                        <th>Hidden</th>
                    </tr>
                    </thead>
                    <tbody><p>
                    @php
                     print_r($entries)   
                    @endphp
                    </p></tbody>
                </table>
                <div class="modal fade" id="modal_detail" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-yellow">
                                <h4 class="modal-title" id="contract-detail">Event Details</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop

