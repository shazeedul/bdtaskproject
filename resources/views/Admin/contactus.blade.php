@extends('layouts.admin')
@section('title', 'Contact us')
@section('content')
<div class="container-fluid">
    <div class="row card m-4 shadow p-3">
        <div class="col-md-12 col-lg-12">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="fs-17 font-weight-600 mb-0">Edit Contact</h3>
                        </div>
                        <div class="text-right">
                            <div class="actions">
                                <a href="" class="action-item"><i class="ti-reload"></i></a>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="card-body">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="border_preview">
                    <form action="" enctype="multipart/form-data" action="">
                        @csrf              
                        <input type="hidden" name="article_id" value="44" style="display:none;" />
     
                        <div class="form-group row">
                            <label for="phone" class="col-sm-2 col-form-label">Phone <i class="text-danger">*</i></label>
                            <div class="col-sm-10">
                                <input name="phone" value="{{$editContact->phone}}" class="form-control" placeholder="Phone" type="text" id="phone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <textarea name="address" class="form-control editor" placeholder="Address" type="text" id="address">{{$editContact->address}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="officetime" class="col-sm-2 col-form-label">Office Time</label>
                            <div class="col-sm-10">
                                <textarea id="officetime" name="officetime" class="form-control editor" placeholder="Office Time" type="text" >{{$editContact->officetime}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email <i class="text-danger">*</i></label>
                            <div class="col-sm-10">
                                <input name="email" value="{{$editContact->email}}" class="form-control" placeholder="Email" type="email" id="email">
                            </div>
                        </div>
                        
                        
                        <div class="row" >
                            <div class="col-sm-12 col-sm-offset-3" align="center">
                                <a href="" class="btn btn-primary  w-md m-b-5">Cancel</a>
                                <button type="submit" class="btn btn-success  w-md m-b-5">Update</button>
                            </div>
                        </div>
                    </form>                
                    </div>
                    </div>
                </div>
            
        </div>
    </div>
    
    
    <!-- DEBUG-VIEW ENDED 5 APPPATH/Modules/CMS/Views/Admin/article/contact.php -->
    <!-- DEBUG-VIEW START 6 APPPATH/Config/../Views/admin/footer.php -->
    </div>
    </div>
</div>

<script src="{{asset('/plugins/summernote/summernote.min.js')}}"></script>
<script src="{{asset('/plugins/summernote/summernote-bs4.min.js')}}"></script>
@endsection