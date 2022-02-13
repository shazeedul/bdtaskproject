@extends('layouts.admin')
@section('title', 'Users')
@section('content')


    <div class="container-fluid">
        <div class="col-lg-12 table-border border-light bg_table shadow-sm p-3 ">
            <h1>Users List</h1>
            <table id="example1" class="table table-bordered table-hover ">
                <thead>
                    <tr>
                        <td>Full Name</td>
                        <td>Email</td>
                        <td>Address</td>
                    </tr>
                </thead>
                    <td>Nafiz</td>
                    <td>nafiz007@gmail.com</td>
                    <td>243/1 uttara, dhaka</td>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>



@endsection