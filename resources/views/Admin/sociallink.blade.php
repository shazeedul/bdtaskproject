@extends('layouts.admin')
@section('title', 'Social Link')
@section('content')

<div class="container-fluid">
    <div class="row card m-4 shadow p-3">
        <div class="col-md-12 col-lg-12">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h3 class="fs-17 font-weight-600 mb-0">Social Link</h3>
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
                        <form method="POST" action="{{route('sociallink')}}">
                            @csrf
                            <div class="form-group">
                                <label for="facebook">Facebook URL:</label>
                                <div class="col-sm-10">
                                    <input type="url" value="{{$sociallink->facebook}}" class="form-control form-control-md" id="facebook" name="facebook" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="twitter">Twitter URL:</label>
                                <div class="col-sm-10">
                                    <input type="url" value="{{$sociallink->twitter}}" class="form-control form-control-md" id="twitter" name="twitter" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="linkedin">Linkdin URL:</label>
                                <div class="col-sm-10">
                                    <input type="url" value="{{$sociallink->linkedin}}" class="form-control form-control-md" id="linkedin" name="linkedin"required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="instagram">Instagram URL:</label>
                                <div class="col-sm-10">
                                    <input type="url" value="{{$sociallink->instagram}}" class="form-control form-control-md" id="instagram" name="instagram"required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pinterest">Pinterest URL:</label>
                                <div class="col-sm-10">
                                    <input type="url" value="{{$sociallink->pinterest}}" class="form-control form-control-md" id="pinterest" name="pinterest" required>
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
@endsection