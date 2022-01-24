@extends('layouts.admin')
@section('title', 'Add Product')
@section('content')

<div class="container-fluid">
    <div class="content-wrapper">
        <div class="row pt-2 pl-5 pb-2 bg-white">
            <h1>Add Product</h1>
        </div>
        <div class="d-flex justify-content-center m-4">
            <div class="p-5 col-lg-10 align-text-bottom bg_product shadow">
                <div class="row">
                    <a href="{{route('manageproduct')}}"><button class="btn btn-success mb-4"><i class="fas fa-list-ul"></i></button></a>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabel" class="col-sm-2 font-weight-bold col-form-label">
                        <h5>Product Code <sup>*</sup> </h5>
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="col-lg-8 form-control" id="colFormLabel" placeholder="Product code">
                    </div>
                </div>
                <div class="form-group row ">
                    <label for="productname" class="col-sm-2 font-weight-bold col-form-label">
                        <h5>Product Name <sup>*</sup> </h5>
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="col-lg-8 form-control" id="productname" placeholder="Product Name">
                    </div>
                </div>
                <div class="form-group row ">
                    <label for="catagoryname" class="col-sm-2 font-weight-bold col-form-label">
                        <h5> Catagory Name <sup>*</sup> </h5>
                    </label>
                    <div class="col-sm-10">
                        <select class="col-lg-8 form-control" id="catagoryname">
                            <option>Dean Propsting</option>
                            <option>Jonathan Dann</option>
                            <option>Sara Horder</option>
                            <option>Cooper Selfe</option>
                            <option>Taylah Sulman</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row ">
                    <label for="brandname" class="col-sm-2 font-weight-bold col-form-label">
                        <h5> Brand Name <sup>*</sup> </h5>
                    </label>
                    <div class="col-sm-10">
                        <select class="col-lg-8 form-control" id="brandname">
                            <option>Nike</option>
                            <option>Samsung</option>
                            <option>Walton</option>
                            <option>Symphony</option>
                            <option>Taylah Sulman</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row ">
                    <label for="modelname" class="col-sm-2 font-weight-bold col-form-label">
                        <h5> Model Name <sup>*</sup> </h5>
                    </label>
                    <div class="col-sm-10">
                        <select class="col-lg-8 form-control" id="modelname">
                            <option>Galaxy J3</option>
                            <option>Samsung S10</option>
                            <option>Galaxy J7</option>
                            <option>Symphony L4</option>
                            <option>Realme</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row ">
                    <label for="price" class="col-sm-2 font-weight-bold col-form-label">
                        <h5>Price <sup>*</sup> </h5>
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="col-lg-8 form-control" id="price" placeholder="Price">
                    </div>
                </div>

                <div class="form-group row ">
                    <label for="um" class="col-sm-2 font-weight-bold col-form-label">
                        <h5>U/M <sup>*</sup> </h5>
                    </label>
                    <div class="col-sm-10">
                        <select class="col-lg-8 form-control" id="um">
                            <option>demo um</option>
                            <option>demo um</option>
                            <option>demo um</option>
                            <option>demo um</option>
                            <option>demo um</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row ">
                    <label for="productdetails" class="col-sm-2 font-weight-bold col-form-label">
                        <h5>Product Details</h5>
                    </label>
                    <textarea class="col-lg-7 form-control" id="productdetails" placeholder="Product Details">

                </textarea>
                </div>
                <div class="row d-flex justify">
                    <div class="button-group">
                        <button type="submit" class="btn btn-danger mr-3">Reset</button>
                        <button type="submit" class="btn btn-success">save</button>
                    </div>

                </div>
            </div>
        </div>




    </div>
</div>

@endsection('content')