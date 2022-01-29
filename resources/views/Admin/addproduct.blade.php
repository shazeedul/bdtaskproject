@extends('layouts.admin')
@section('title', 'Add Product')
@section('content')

    <div class="container-fluid">
        <div class="row pt-2 pl-5 pb-2 bg-white">
            <h1>Add Product</h1>
        </div>
        <div class="d-flex justify-content-center m-4">
            <div class="p-5 col-lg-10 align-text-bottom bg_product shadow">
                
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
                            <option value="" disabled selected hidden>Choose Category...</option>
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
                            <option value="" disabled selected hidden>Choose Brand...</option>
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
                            <option value="" disabled selected hidden>Choose Model...</option>
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

                <div class="form-group row ">
                    <label for="buyingprice" class="col-sm-2 font-weight-bold col-form-label">
                        <h5>Buying Price <sup>*</sup> </h5>
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="col-lg-8 form-control" id="buyingprice" placeholder="Buying Price">
                    </div>
                </div>
                <div class="form-group row ">
                    <label for="mrpprice" class="col-sm-2 font-weight-bold col-form-label">
                        <h5>MRP Price <sup>*</sup> </h5>
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="col-lg-8 form-control" id="mrpprice" placeholder="MRP Price">
                    </div>
                </div>
                <div class="form-group row ">
                    <label for="sellingprice" class="col-sm-2 font-weight-bold col-form-label">
                        <h5>Selling Price <sup>*</sup> </h5>
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="col-lg-8 form-control" id="sellingprice" placeholder="Selling Price">
                    </div>
                </div>

                <div class="form-group row ">
                    <label for="offerlimit" class="col-sm-2 font-weight-bold col-form-label">
                        <h5>Offer Limit <sup>*</sup> </h5>
                    </label>
                    <div class="col-sm-10">
                        <input type="number" min="0" class="col-lg-8 form-control" id="offerlimit" placeholder="Offer Limit">
                    </div>
                </div>
                <div class="form-group row ">
                    <label for="offerlimit" class="col-sm-2 font-weight-bold col-form-label">
                        <h5>Image <sup>*</sup> </h5>
                    </label>
                    <div class="col-sm-10">
                        <input type="file" accept="image/png, image/gif, image/jpeg" class="col-lg-8 form-control" id="offerlimit" placeholder="Offer Limit">
                    </div>
                </div>

                <div class="form-group row ">
                    <label for="productdetails" class="col-sm-2 font-weight-bold col-form-label">
                        <h5>Product Details</h5>
                    </label>
                    <textarea class="col-lg-7 form-control" id="summernote">
                        Place <em>some</em> <u>text</u> <strong>here</strong>
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
    <script src="../../plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function () {
          // Summernote
          $('#summernote').summernote()
          
      
          
        })
      </script>
@endsection