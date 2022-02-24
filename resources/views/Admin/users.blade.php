@extends('layouts.admin')
@section('title', 'Users')
@section('content')
<div class="container-fluid">
    <div class="col-lg-12 table-border border-light bg_table shadow-sm p-3 ">
        <h1>Users List</h1>
        <table id="example1" class="table table-bordered table-hover ">
            <thead>
            <tr>
                <th>SL No.</th>
                <th>User ID</th>
                <th>Sponsor ID</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Email Address</th>
                <th>Mobile</th>
                <th>Action</th> 
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>007</td>
                <td>507</td>
                <td>Nafiz</td>
                <td>nafizislam</td>
                <td>nafiz007@gmail.com</td>
                <td>01*********</td>
                <td></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection