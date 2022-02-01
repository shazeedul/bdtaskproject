@extends('layouts.admin')
@section('title', 'Add Product')
@section('content')

    <div class="container-fluid">
        
        <div class="row">
            <div class="d-flex justify-content-center m-4">
                <div class="card p-5 col-lg-10 align-text-bottom bg_product shadow">
                    <div class="card-header">
                        <h3>Add Product</h3>
                    </div>
                    <form method="POST" enctype="multipart/form-data" name="addproduct">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6 mb-3">
                                <label for="productid" class="col-sm-6 font-weight-bold col-form-label">
                                    <h5>Product Id </h5>
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="col-lg-10 form-control" id="productid" placeholder="Product code">
                                </div>
                                <label for="catagoryname" class="col-sm-6 font-weight-bold col-form-label">
                                    <h5> Catagory Name <sup>*</sup> </h5>
                                </label>
                                <div class="col-sm-10">
                                    <select class="col-lg-8 form-control" id="catagoryname">
                                        <option value="" disabled selected hidden>Choose Category...</option>
                                        <option>Dean Propsting</option>
                                        <option>Jonathan Dann</option>
                                        <option>Sara Horder</option>
                                        <option>Cooper Selfe</option>
                                        <option>Taylah Sulman</option>
                                    </select>
                                </div>
                                <label for="modelname" class="col-sm-6 font-weight-bold col-form-label">
                                    <h5> Model Name <sup>*</sup> </h5>
                                </label>
                                <div class="col-sm-10">
                                    <select class="col-lg-8 form-control" id="modelname">
                                        <option value="" disabled selected hidden>Choose Model...</option>
                                        <option>Galaxy J3</option>
                                        <option>Samsung S10</option>
                                        <option>Galaxy J7</option>
                                        <option>Symphony L4</option>
                                        <option>Realme</option>
                                    </select>
                                </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                <label for="productname" class="col-sm-6 font-weight-bold col-form-label">
                                    <h5>Product Name </h5>
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="col-lg-10 form-control" id="productname" placeholder="Product Name">
                                </div>
                                <label for="brandname" class="col-sm-6 font-weight-bold col-form-label">
                                    <h5> Brand Name <sup>*</sup> </h5>
                                </label>
                                <div class="col-sm-10">
                                    <select class="col-lg-8 form-control" id="brandname">
                                        <option value="" disabled selected hidden>Choose Brand...</option>
                                        <option>Nike</option>
                                        <option>Samsung</option>
                                        <option>Walton</option>
                                        <option>Symphony</option>
                                        <option>Taylah Sulman</option>
                                    </select>
                                </div>
                              </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="buyingprice" class="col-sm-6 font-weight-bold col-form-label">
                                    <h5>Buying Price </h5>
                                </label>
                                <div class="col-sm-12">
                                    <input type="text" class="col-lg-8 form-control" id="buyingprice" placeholder="Buying Price">
                                </div>
                            </div>
                            <div class="col">
                                <label for="mrpprice" class="col-sm-6 font-weight-bold col-form-label">
                                    <h5>MRP Price </h5>
                                </label>
                                <div class="col-sm-12">
                                    <input type="text" class="col-lg-8 form-control" id="mrpprice" placeholder="MRP Price">
                                </div>
                            </div>
                            <div class="col">
                                <label for="sellingprice" class="col-sm-6 font-weight-bold col-form-label">
                                    <h5>Selling Price </h5>
                                </label>
                                <div class="col-sm-12">
                                    <input type="text" class="col-lg-8 form-control" id="sellingprice" placeholder="Selling Price">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="quantity" class="col-sm-2 font-weight-bold col-form-label">
                                <h5>Quantity</h5>
                            </label>
                            <div class="col-sm-4">
                                <input type="number" min="0" class="col-lg-8 form-control" id="quantity" placeholder="quantity">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label for="Offer" class="col-sm-2 font-weight-bold col-form-label">
                                <h5> Offer <sup>*</sup> </h5>
                            </label>
                            <div class="col-sm-4">
                                <select class="col-lg-8 form-control" id="Offer">
                                    <option value="" disabled selected hidden>Choose Offer...</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group row ">
                                <label for="offerlimit" class="col-sm-2 font-weight-bold col-form-label">
                                    <h5>Image <sup>*</sup> </h5>
                                </label>
                                <div class="col-sm-10">
                                    <input type="file" accept="image/png, image/gif, image/jpeg" class="col-lg-10 form-control" id="image" placeholder="Image">
                                </div>
                            </div>
            
                            <div class="form-group row ">
                                <label for="productdetails" class="col-sm-2 font-weight-bold col-form-label">
                                    <h5>Product Details</h5>
                                </label>
                                <textarea class="col-lg-7 form-control" id="summernote1">
                                    Place <em>some</em> <u>text</u> <strong>here</strong>
                                </textarea>
                                <label for="productdetails" class="col-sm-2 font-weight-bold col-form-label">
                                    <h5>Product Details</h5>
                                </label>
                                <textarea class="col-lg-7 form-control" id="summernote2">
                                    Place <em>some</em> <u>text</u> <strong>here</strong>
                                </textarea>
                                
                            </div>
                        </div>

                        

                        <div class="form-row">
                            <div class="col d-flex justify">
                                <div class="button-group">
                                    <button type="submit" class="btn btn-danger mr-3">Reset</button>
                                    <button type="submit" class="btn btn-success">save</button>
                                </div>
                            </div>
                        </div>
                        
                      </form>
                </div>
            </div>
        </div>
        

        




    </div>
    <script src="../../plugins/summernote/summernote-bs4.min.js"></script>
@endsection