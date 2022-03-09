@extends('layouts.admin')
@section('title', 'Subscriber')
@section('content')
<div class="container-fluid">
    <div class="col-lg-12 table-border border-light bg_table shadow-sm p-3 ">
        <h1>Ticket List</h1>
        <table id="example1" class="table table-bordered table-hover ">
            <thead>
                <tr>
                    <th>Ticket Number</th>
                    <th>Subject</th>
                    <th>Last Response</th>
                    <th>Priority</th>
                    <th style="text-align: center;">Status</th>
                    <th style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>900671</td>
                    <td>Domain expired error</td>
                    <td>30-01-2022</td>
                    <td>High</td>
                    <td style="text-align: center;"><p class="label label-secondary"><strong>Closed</strong></p></td>
                    <td style="text-align: center">View Details</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection