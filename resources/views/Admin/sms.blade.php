@extends('layouts.admin')
@section('title', 'SMS Settings')
@section('content')
<div class="container-fluid">
    <div class="row card m-4 shadow p-3">
        <div class="col-md-12 col-lg-12">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fs-17 font-weight-600 mb-0">SMS Gateway</h6>
                        </div>
                        <div class="text-right">
                            <div class="actions">
                                <a href="#" class="action-item"><i class="ti-reload"></i></a>
                            </div>
                        </div>
                    </div>
                </div>            
                <div class="card-body">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <form action="" enctype="multipart/form-data">
                                <input type="hidden" name="csrf_test_name" value="" />
                            <div class="form-group row">
                                <label for="gatewayname" class="col-xs-3 col-sm-3 col-form-label">Gateway <i class="text-danger">*</i></label>
                                <div class="col-xs-9 col-sm-9">
                                    <select class="form-control basic-single" name="gatewayname" id="gatewayname" required>
                                        <option>Select Option</option>
                                        <option value="budgetsms" Selected >BudgetSMS</option>
                                        <option value="infobip" >Infobip</option>
                                        <option value="nexmo" >Nexmo</option>
                                    </select>
                                </div>
                            </div>                        
                            <div class="form-group row">
                                <label for="title" class="col-xs-3 col-sm-3 col-form-label">Title <i class="text-danger">*</i></label>
                                <div class="col-xs-9 col-sm-9">
                                    <input name="title" type="text" class="form-control" id="title" placeholder="Title" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="host" class="col-xs-3 col-sm-3 col-form-label">Host <i class="text-danger">*</i></label>
                                <div class="col-xs-9 col-sm-9">
                                    <input name="host" type="text" class="form-control" id="host" placeholder="Host" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="username" class="col-xs-3 col-sm-3 col-form-label">Username <i class="text-danger">*</i></label>
                                <div class="col-xs-9 col-sm-9">
                                    <input name="username" type="text" class="form-control" id="title" placeholder="Username" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="userid" class="col-xs-3 col-sm-3 col-form-label">User ID <i class="text-danger">*</i></label>
                                <div class="col-xs-9 col-sm-9">
                                    <input name="userid" type="text" class="form-control" id="userid" placeholder="User ID" value="" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="apkid" class="col-xs-3 col-sm-3 col-form-label">APK ID <i class="text-danger">*</i></label>
                                <div class="col-xs-9 col-sm-9">
                                    <input name="apkid" type="text" class="form-control" id="apkid" placeholder="APK ID" value="" required>
                                </div>
                            </div>            
                            <div align='center'>
                                <button type="submit" class="btn btn-success">Save</button>
                            </form>                       
                        </div>
                            

                            <div class="form-group row">
                                <div class="col-xs-12">
                                <br>
                                <br>
                                    <p>For SMS Gateway Use <a href="" target="_blank"><b>budgetsms</b></a>/<a href="" target="_blank"><b>infobip</b></a>/<a href="" target="_blank"><b>nexmo</b></a></p>
                                </div>
                            </div>
                    </div>
                        <div class="col-md-6 col-sm-6">
                        <form action="" enctype="multipart/form-data">
                                <input type="hidden" name="" value="" />                   
                            <div class="form-group row">
                                <div class="col-xs-12">
                                    <h3 class="text-center">Test Your SMS</h3>
                                </div>
                            </div>                        
                        
                            <div class="form-group row">
                                <label for="mobile_num" class="col-xs-3 col-sm-3 col-form-label">Mobile No. <i class="text-danger">*</i></label>
                                <div class="col-xs-9 col-sm-9">
                                    <input type="text" class="form-control" name="mobile_num" id="mobile_num" placeholder="e. 880xxxxxxxxxx">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="test_message" class="col-xs-3 col-sm-3 col-form-label">Message <i class="text-danger">*</i></label>
                                <div class="col-xs-9 col-sm-9">
                                    <textarea rows="5" class="form-control" name="test_message" id="test_message" placeholder="Test Message"></textarea>
                                </div>
                            </div>
                            <div class="form-group row" align='center'>
                                <div class="col-xs-12 col-sm-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">Send</button>
                                </div>
                        </form>                     
                        </div>
                        
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>

    <script src="https://phpcryptomarket.bdtask.com/demo-v4.0/app/Modules/Setting/Assets/Admin/js/custom.js?v=1.3" type="text/javascript"></script>
    <script src="https://phpcryptomarket.bdtask.com/demo-v4.0/public/assets/js/main_custom.js?v=5.9" type="text/javascript"></script>

        
        

    <!-- DEBUG-VIEW ENDED 5 APPPATH/Modules/Setting/Views/Admin/sms_gateway.php -->
    <!-- DEBUG-VIEW START 6 APPPATH/Config/../Views/admin/footer.php -->
    </div>
    </div>
</div>
@endsection