@extends('layouts.admin')
@section('title', 'Manage Order')
@section('content')


<div class="container-fluid">
    <div class="content-wrapper">
        <div class="row pt-2 pl-5 pb-2 ">
            <h1>Add Catagory</h1>
        </div>
        <div class=" m-4 border p-3">

            <div class="row ">
                <a href="{{route('managecategory')}}"><button class="btn btn-success mb-4"><i
                            class="fas fa-list-ul"></i></button></a>
            </div>
            <div class="form-group row  ">
                <label for="colFormLabel" class="col-sm-2 font-weight-bold col-form-label">
                    <h5>Catagory Name </h5>
                </label>
                <div class="col-lg-10">
                    <input type="text" class=" form-control" id="colFormLabel" placeholder="Catagory Name">
                </div>
            </div>
            <div class="d-flex flex-row-reverse">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </div>

    </div>
</div>

@endsection('content')