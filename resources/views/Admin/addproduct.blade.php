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
                    <form method="POST" enctype="multipart/form-data" action="{{route('addproduct')}}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6 mb-3">
                                <label for="productname" class="col-sm-6 font-weight-bold col-form-label">
                                    <h5>Product Name </h5>
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" required class="col-lg-10 form-control" id="productname" placeholder="Product Name" name="p_name">
                                </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                <label for="catagoryname" class="col-sm-6 font-weight-bold col-form-label">
                                    <h5> Catagory Name <sup>*</sup> </h5>
                                </label>
                                <div class="col-sm-10">
                                    <select class="col-lg-8 form-control" required id="catagoryname" name="p_category">
                                        @foreach ($category as $value)
                                            <option value="{{ $value->id }}">{{ $value->c_name }}</option>
                                        @endforeach
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
                                    <input type="text" required class="col-lg-8 form-control" id="buyingprice" placeholder="Buying Price" name="b_price">
                                </div>
                            </div>
                            <div class="col">
                                <label for="mrpprice" class="col-sm-6 font-weight-bold col-form-label">
                                    <h5>MRP Price </h5>
                                </label>
                                <div class="col-sm-12">
                                    <input type="text" required class="col-lg-8 form-control" id="mrpprice" placeholder="MRP Price" name="mrp_price">
                                </div>
                            </div>
                            <div class="col">
                                <label for="sellingprice" class="col-sm-6 font-weight-bold col-form-label">
                                    <h5>Selling Price </h5>
                                </label>
                                <div class="col-sm-12">
                                    <input type="text" required class="col-lg-8 form-control" id="sellingprice" placeholder="Selling Price" name="s_price">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row ">
                            <div class="col">
                                <label for="quantity" class="col-sm-2 font-weight-bold col-form-label">
                                    <h5>Quantity</h5>
                                </label>
                                <div class="col-sm-4">
                                    <input type="number" required min="0" class="col-lg-8 form-control" id="quantity" placeholder="quantity" name="quantity">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group row ">
                                <div class="col">
                                    <label for="offerlimit" class="col-sm-4 font-weight-bold col-form-label">
                                        <h5>Image <sup>*</sup> </h5>
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="file" required accept="image/png, image/gif, image/jpeg" class="col-lg-10 form-control" id="image" placeholder="Image" name="image">
                                    </div>
                                </div>
                            </div>
            
                            <div class="form-group row ">
                                <div class="col">
                                    <label for="productdetails" class="col-sm-2 font-weight-bold col-form-label">
                                        <h5>Short Product Details</h5>
                                    </label>
                                    <textarea required class="col-lg-7 form-control" id="summernote2" name="s_description">
                                        Place <em>some</em> <u>text</u> <strong>here</strong>
                                    </textarea>
                                    <label for="productdetails" class="col-sm-2 font-weight-bold col-form-label">
                                        <h5>Long Product Details</h5>
                                    </label>
                                    <textarea required class="col-lg-7 form-control" id="summernote1" name="l_description">
                                        Place <em>some</em> <u>text</u> <strong>here</strong>
                                    </textarea>
                                </div>
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