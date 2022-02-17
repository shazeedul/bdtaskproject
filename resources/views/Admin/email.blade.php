@extends('layouts.admin')
@section('title', 'Email Settings')
@section('content')
<div class="container-fluid">
    <div class="row card m-4 shadow p-3">
        <div class="col-md-12 col-lg-12">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fs-17 font-weight-600 mb-0">Email Gateway</h6>
                        </div>
                        <div class="text-right">
                            <div class="actions">
                                <a href=" " class="action-item"><i class="ti-reload"></i></a>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="card-body">
                    <div class="row">
                        
                        <div class="col-md-6"> 
                            <form action="" enctype="multipart/form-data" >
                                <input type="hidden" name="csrf_test_name" value="" />                    
                                
                            <div class="form-group row">
                                <label for="email_title" class="col-xs-3 col-sm-3 col-form-label">Title <i class="text-danger">*</i></label>
                                <div class="col-xs-9 col-sm-9">
                                    <input name="email_title" type="text" class="form-control" id="email_title" placeholder="Title" value="" required>
                                </div>
                            </div>                                         
                            <div class="form-group row">
                                <label for="email_protocol" class="col-xs-3 col-sm-3 col-form-label">Protocol <i class="text-danger">*</i></label>
                                <div class="col-xs-9 col-sm-9">
                                    <input name="email_protocol" type="text" class="form-control" id="email_protocol" placeholder="Protocol" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email_host" class="col-xs-3 col-sm-3 col-form-label">Host <i class="text-danger">*</i></label>
                                <div class="col-xs-9 col-sm-9">
                                    <input name="email_host" type="text" class="form-control" id="email_host" placeholder="Host" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email_port" class="col-xs-3 col-sm-3 col-form-label">Port <i class="text-danger">*</i></label>
                                <div class="col-xs-9 col-sm-9">
                                    <input name="email_port" type="text" class="form-control" id="email_port" placeholder="Port" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email_user" class="col-xs-3 col-sm-3 col-form-label">Username <i class="text-danger">*</i></label>
                                <div class="col-xs-9 col-sm-9">
                                    <input name="email_user" type="text" class="form-control" id="email_user" placeholder="Username" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email_password" class="col-xs-3 col-sm-3 col-form-label">Password <i class="text-danger">*</i></label>
                                <div class="col-xs-9 col-sm-9">
                                    <input name="email_password" type="password" class="form-control" id="email_password" placeholder="Password" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email_mailtype" class="col-xs-3 col-sm-3 col-form-label">Mail Type <i class="text-danger">*</i></label>
                                <div class="col-xs-9 col-sm-9">
                                    <input name="email_mailtype" type="text" class="form-control" id="email_mailtype" placeholder="Mail Type" value="" required>
                                </div>
                            </div>
                            <div align="center">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                            </form>                       
                            <div class="row">
                                <div class="col-sm-3">
                                    
                                </div>
                                <div class="col-sm-9" >
                                    <div class="notice-board">
                                        <p>Note: If problem with google smtp then please use another third party smtp server
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <div class="col-md-6">
                            <form action="https://phpcryptomarket.bdtask.com/demo-v4.0/backend/setting/test_email" enctype="multipart&#x2F;form-data" method="post" accept-charset="utf-8">
                                <input type="hidden" name="csrf_test_name" value="e497dd0a1a9094182772f204029c6079" />                        <h3 class="text-center">Test Your SMTP Email Server</h3>
    
                            <div class="form-group row">
                                <label for="email_to" class="col-xs-3  col-sm-3 col-form-label">To<i class="text-danger">*</i></label>
                                <div class="col-xs-9 col-sm-9">
                                    <input name="email_to" type="email" class="form-control" id="email_to" placeholder="e. example@mail.com" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email_sub" class="col-xs-3 col-sm-3 col-form-label">Subject<i class="text-danger">*</i></label>
                                <div class="col-xs-9 col-sm-9">
                                    <input name="email_sub" type="text" class="form-control" id="email_sub" placeholder="e. Test Mail" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email_message" class="col-xs-3 col-sm-3 col-form-label">Message<i class="text-danger">*</i></label>
                                <div class="col-xs-9 col-sm-9">
                                    <textarea rows="5" class="form-control" name="email_message" id="email_message"></textarea>
                                </div>
                            </div>
                            <div class="form-group row" align="center">
                                <div class="col-xs-9 col-sm-12 col-md-offset-3" >
                                    <button type="submit" class="btn btn-success">Send</button>
                                </div>
                            </div>
                            </form>                   
                        </div>
                    </div> 
                </div>
        </div>
    </div>
    <!-- DEBUG-VIEW ENDED 5 APPPATH/Modules/Setting/Views/Admin/email_gateway.php -->
    <!-- DEBUG-VIEW START 6 APPPATH/Config/../Views/admin/footer.php -->
    </div>
    </div>
</div>
@endsection