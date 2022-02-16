@extends('layouts.admin')
@section('title', 'Manage Order')
@section('content')
<div class="container-fluid">
    <div class="row pt-2 pl-5 pb-2 ">
        <h1>Add Catagory</h1>
    </div>
    <div class="card m-4 shadow p-3">
        <form action="{{route('editcategory', ['id'=>$e_category->id])}}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            @csrf
            <div class="form-group row  ">
                <label for="colFormLabel" class="col-sm-2 font-weight-bold col-form-label">
                    <h5>Catagory Name </h5>
                </label>
                <div class="col-lg-6">
                    <input type="text" class=" form-control" value="{{$e_category->c_name}}" id="colFormLabel" placeholder="Catagory Name" name="c_name">
                </div>
            </div>
            <div class="form-group row  ">
                <label for="colFormLabe2" class="col-sm-2 font-weight-bold col-form-label">
                    <h5> Catagory Type </h5>
                </label>
                <div class="col-lg-8">
                    <select class="col-lg-8 form-control" id="colFormLabe2" name="category">
                        <option value="{{$e_category->id}}">{{$e_category->category}}</option>
                        @foreach ($e_category as $value)
                            {{-- <option value="{{$value->id}}">{{$value->c_name}}</option> --}}
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabe2" class="col-sm-2 font-weight-bold col-form-label">
                    <h5> Status </h5>
                </label>
            <div class="form-group ">
                <div class="form-check">
                        <input class="form-check-input" type="radio" value="1" name="status" checked="">
                        <label class="form-check-label">Active</label>
                </div>
                <div class="form-check">
                        <input class="form-check-input" type="radio" value="0" name="status">
                        <label class="form-check-label">In Active</label>
                </div>
            </div>
            </div>
            <div class="d-flex flex-row-reverse">
                <button type="submit" class="btn btn-dark m-4 ">Add</button>
            </div>
        </form>
    </div>
</div>





@endsection