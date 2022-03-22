@extends('layouts.admin')
@section('title', 'APP Settings')
@section('content')

<div class="container-fluid">
    <div class="row card m-4 shadow p-3">
        <div class="col-md-12 col-lg-12">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fs-17 font-weight-600 mb-0">Application Setting</h6>
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
                            <form action="{{route('appsettings')}}" method="POST" class="form-inner" enctype="multipart/form-data"  >
                                @csrf
                                <input type="hidden"/>                       
                                
    
                                <div class="form-group row">
                                    <label for="title" class="col-sm-3 col-form-label">Application Title <i class="text-danger">*</i></label>
                                    <div class="col-sm-9">
                                        <input name="title" type="text" class="form-control" id="title" placeholder="Application Title" value="{{$appSettings->title}}">
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label for="address" class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input name="address" type="text" class="form-control" id="address" placeholder="Address"  value="{{$appSettings->address}}">
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 col-form-label">Email Address</label>
                                    <div class="col-sm-9">
                                        <input name="email" type="text" class="form-control" id="email" placeholder="Email Address"  value="{{$appSettings->email}}">
                                    </div>
                                </div>
     
                                <div class="form-group row">
                                    <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                                    <div class="col-sm-9">
                                        <input name="phone" type="text" class="form-control" id="phone" placeholder="Phone"  value="{{$appSettings->phone}}" >
                                    </div>
                                </div>
                                <!-- if setting favicon is already uploaded -->
                                <div class="form-group row">
                                    <label for="faviconPreview" class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <img width="70" height="70" src="{{ asset('storage/app-image/'.$appSettings->fav_img) }}" alt="Favicon" class="img-thumbnail" />
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="favicon" class="col-sm-3 col-form-label">Favicon </label>
                                    <div class="col-sm-9">
                                        <input type="file" name="fav_img" id="favicon">
                                        <input type="hidden" name="old_image_one" value="{{$appSettings->fav_img}}">
                                       <div class="text-danger">32x32 px(jpg, jpeg, png, gif, ico)</div>
                                    </div>
                                </div>
                                
                                <!-- if setting Web logo is already uploaded -->
                                <div class="form-group row">
                                    <label for="logoPreview" class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <img width="70" height="70" src="{{ asset('storage/app-image/'.$appSettings->site_logo) }}" alt="Picture" class="img-thumbnail" />
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="logo_web" class="col-sm-3 col-form-label">WebSite Logo</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="site_logo" id="logo_web">
                                        <input type="hidden" name="old_image_two" value="{{$appSettings->site_logo}}">
                                        <div class="text-danger">163x50 px(jpg, jpeg, png, gif, ico)</div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="left_to_right" class="col-sm-3 col-form-label">Admin Align</label>
                                    <div class="col-sm-9">
                                        <select name="site_align" class="form-control">
                                            <option value="RTL">Right to Left</option>
                                            <option value="LTR" selected="selected">Left to Right</option>
                                        </select>
                                    </div>
                                </div> 
    
                                <div class="form-group row">
                                    <label for="office_time" class="col-sm-3 col-form-label">Office Time</label>
                                    <div class="col-sm-9">
                                        <textarea name="office_time" class="form-control"  placeholder="Office Time" maxlength="255" rows="7" >{{$appSettings->office_time}}</textarea>
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label for="copyright_text" class="col-sm-3 col-form-label">Footer Text</label>
                                    <div class="col-sm-9">
                                        <textarea name="copyright_text" class="form-control"  placeholder="Footer Text" maxlength="140" rows="7">{{$appSettings->copyright_text}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row" align="center">
                                    <div class="col-sm-offset-3 col-sm-12">
                                        <div class="ui buttons">
                                            <button type="reset" class="btn btn-info m-2">Reset</button>
                                            <button type="submit" class="btn btn-success m-2">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
    
                        </div>
                        <div class="col-md-3"></div>
                     </div>
                </div>
        </div>
    </div>
</div>





@endsection