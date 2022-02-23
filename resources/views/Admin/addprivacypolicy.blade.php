@extends('layouts.admin')
@section('title', 'Privacy Policy')
@section('content')
<div class="container-fluid">
    <div class="row card m-4 shadow p-3">
        <div class="col-md-12 col-lg-12">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="fs-17 font-weight-600 mb-0">Edit Policy</h3>
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
                    <form method="POST" enctype="multipart/form-data" action="">
                        @csrf
                                    
                        <input type="hidden" name="article_id" value="44" style="display:none;" />
     
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Privacy Policy Headings <i class="text-danger">*</i></label>
                            <div class="col-sm-10">
                                <input name="name"  class="form-control" placeholder="Headline" type="text" id="headline">
                            </div>
                        </div>
                      
                        <div class="form-group row">
                            <label for="description" class="col-sm-2 col-form-label">Paragraph</label>
                            <div class="col-sm-10">
                                <textarea id="summernote2" name="description" class="form-control editor" placeholder="Phone" type="text" id="description"></textarea>
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
    
    
    </div>
    </div>
</div>
@endsection