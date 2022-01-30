@extends('layouts.admin')
@section('title', 'New Order')
@section('content')

<div class="container-fluid">
          
        <!-- Modal -->
        <div class="modal fade" id="newOrderAction" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    
                    <div class="form-group row ">
                        <label for="productname" class="col-sm-2 font-weight-bold col-form-label">
                            <h5>Product Name </h5>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" class="col-lg-8 form-control" id="productname" placeholder="Product Name">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="price" class="col-sm-2 font-weight-bold col-form-label">
                            <h5>Price</h5>
                        </label>
                        <div class="col-sm-10">
                            <input type="number" min="0" class="col-lg-8 form-control" id="price" placeholder="Price">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="quantity" class="col-sm-2 font-weight-bold col-form-label">
                            <h5>Quantity</h5>
                        </label>
                        <div class="col-sm-10">
                            <input type="number" min="0" class="col-lg-8 form-control" id="quantity" placeholder="quantity">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label for="Status" class="col-sm-2 font-weight-bold col-form-label">
                            <h5>Status</h5>
                        </label>
                        <div class="col-sm-10">
                            <select class="col-lg-8 form-control" id="Status">
                                <option value="" disabled selected hidden>Choose Status...</option>
                                <option>Received</option>
                                <option>Pending</option>
                                <option>Delivered</option>
                            </select>
                        </div>
                    </div>
                       
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            </div>
        </div>    
        <div class="col-lg-12 table-border border-light bg_table shadow-sm p-3 ">
            <h1>New order List</h1>
            
            <table id="example1" class="table table-bordered table-hover ">
                <thead>
                    <tr>
                        <th scope="col">Orders ID</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Order At</th>
                        <th scope="col">Last Updated</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col" class="text-center">Address</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="custom-control">
                                <label >1</label>
                            </div>
                        </td>
                        <td>Fashion</td>
                        <td>$30.8</td>
                        <td>18 Jan, 2022</td>
                        <td>Yesterday</td>
                        <td>01254381903</td>
                        <td>314/2 Uttara, Dhaka</td>
                        <td> <span class="bg-warning p-1 rounded">pending...</span> </td>
                        <td>
                            <div class="dropdown align-right">
                                <a href="#"><button class="btn btn-danger" type="button" id="eyeButton" data-toggle="modal" data-target="#newOrderAction">
                                    <i class="fas fa-eye"></i>
                                </button>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control">
                                <label >2</label>
                            </div>
                        </td>
                        <td>Gadget</td>
                        <td>$100.8</td>
                        <td>18 Jan, 2022</td>
                        <td>16 Jan, 2022</td>
                        <td>01254381903</td>
                        <td>314/2 Uttara, Dhaka</td>
                        <td> <span class="bg-warning p-1 rounded">pending...</span> </td>
                        <td>
                            <div class="dropdown align-right">
                                <a href="#"><button class="btn btn-danger" type="button" id="eyeButton" data-toggle="modal" data-target="#newOrderAction">
                                    <i class="fas fa-eye"></i>
                                </button>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control">
                                <label>3</label>
                            </div>
                        </td>
                        <td>T-shirt</td>
                        <td>$20.8</td>
                        <td>18 Jan, 2022</td>
                        <td>15 Jan, 2022</td>
                        <td>01254381903</td>
                        <td>314/2 Uttara, Dhaka</td>
                        <td> <span class="bg-warning p-1 rounded">pending...</span> </td>
                        <td>
                            <div class="dropdown align-right">
                                <a href="#"><button class="btn btn-danger" type="button" id="eyeButton" data-toggle="modal" data-target="#newOrderAction">
                                    <i class="fas fa-eye"></i>
                                </button>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control">
                                <label>4</label>
                            </div>
                        </td>
                        <td>E-electronic</td>
                        <td>$20.8</td>
                        <td>18 Jan, 2022</td>
                        <td>14 Jan, 2022</td>
                        <td>01254381903</td>
                        <td>314/2 Uttara, Dhaka</td>
                        <td> <span class="bg-warning p-1 rounded">pending...</span> </td>
                        <td>
                            <div class="dropdown align-right">
                                <a href="#"><button class="btn btn-danger" type="button" id="eyeButton" data-toggle="modal" data-target="#newOrderAction">
                                    <i class="fas fa-eye"></i>
                                </button>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control">
                                <label>5</label>
                            </div>
                        </td>
                        <td>E-electronic</td>
                        <td>$20.8</td>
                        <td>18 Jan, 2022</td>
                        <td>14 Jan, 2022</td>
                        <td>01254381903</td>
                        <td>314/2 Uttara, Dhaka</td>
                        <td> <span class="bg-warning p-1 rounded">pending...</span> </td>
                        <td>
                            <div class="dropdown align-right">
                                <a href="#"><button class="btn btn-danger" type="button" id="eyeButton" data-toggle="modal" data-target="#newOrderAction">
                                    <i class="fas fa-eye"></i>
                                </button>
                                </a>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control">
                                <label>6</label>
                            </div>
                        </td>
                        <td>E-electronic</td>
                        <td>$20.8</td>
                        <td>18 Jan, 2022</td>
                        <td>14 Jan, 2022</td>
                        <td>01254381903</td>
                        <td>314/2 Uttara, Dhaka</td>
                        <td> <span class="bg-warning p-1 rounded">pending...</span> </td>
                        <td>
                            <div class="dropdown align-right">
                                <a href="#"><button class="btn btn-danger" type="button" id="eyeButton" data-toggle="modal" data-target="#newOrderAction">
                                    <i class="fas fa-eye"></i>
                                </button>
                                </a>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control">
                                <label>7</label>
                            </div>
                        </td>
                        <td>E-electronic</td>
                        <td>$20.8</td>
                        <td>18 Jan, 2022</td>
                        <td>14 Jan, 2022</td>
                        <td>01254381903</td>
                        <td>314/2 Uttara, Dhaka</td>
                        <td> <span class="bg-warning p-1 rounded">pending...</span> </td>
                        <td>
                            <div class="dropdown align-right">
                                <a href="#"><button class="btn btn-danger" type="button" id="eyeButton" data-toggle="modal" data-target="#newOrderAction">
                                    <i class="fas fa-eye"></i>
                                </button>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control">
                                <label>8</label>
                            </div>
                        </td>
                        <td>E-electronic</td>
                        <td>$20.8</td>
                        <td>18 Jan, 2022</td>
                        <td>14 Jan, 2022</td>
                        <td>01254381903</td>
                        <td>314/2 Uttara, Dhaka</td>
                        <td> <span class="bg-warning p-1 rounded">pending...</span> </td>
                        <td>
                            <div class="dropdown align-right">
                                <a href="#"><button class="btn btn-danger" type="button" id="eyeButton" data-toggle="modal" data-target="#newOrderAction">
                                    <i class="fas fa-eye"></i>
                                </button>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control">
                                <label >9</label>
                            </div>
                        </td>
                        <td>E-electronic</td>
                        <td>$20.8</td>
                        <td>18 Jan, 2022</td>
                        <td>14 Jan, 2022</td>
                        <td>01254381903</td>
                        <td>314/2 Uttara, Dhaka</td>
                        <td> <span class="bg-warning p-1 rounded">pending...</span> </td>
                        <td>
                            <div class="dropdown align-right">
                                <a href="#"><button class="btn btn-danger" type="button" id="eyeButton" data-toggle="modal" data-target="#newOrderAction">
                                    <i class="fas fa-eye"></i>
                                </button>
                                </a>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control">
                                <label>10</label>
                            </div>
                        </td>
                        <td>E-electronic</td>
                        <td>$20.8</td>
                        <td>18 Jan, 2022</td>
                        <td>14 Jan, 2022</td>
                        <td>01254381903</td>
                        <td>314/2 Uttara, Dhaka</td>
                        <td> <span class="bg-warning p-1 rounded">pending...</span> </td>
                        <td>
                            <div class="dropdown align-right">
                                <a href="#"><button class="btn btn-danger" type="button" id="eyeButton" data-toggle="modal" data-target="#newOrderAction">
                                    <i class="fas fa-eye"></i>
                                </button>
                                </a>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control">
                                <label>11</label>
                            </div>
                        </td>
                        <td>E-electronic</td>
                        <td>$20.8</td>
                        <td>18 Jan, 2022</td>
                        <td>14 Jan, 2022</td>
                        <td>01254381903</td>
                        <td>314/2 Uttara, Dhaka</td>
                        <td> <span class="bg-warning p-1 rounded">pending...</span> </td>
                        <td>
                            <div class="dropdown align-right">
                                <a href="#"><button class="btn btn-danger" type="button" id="eyeButton" data-toggle="modal" data-target="#newOrderAction">
                                    <i class="fas fa-eye"></i>
                                </button>
                                </a>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control">
                                <label>12</label>
                            </div>
                        </td>
                        <td>E-electronic</td>
                        <td>$20.8</td>
                        <td>18 Jan, 2022</td>
                        <td>14 Jan, 2022</td>
                        <td>01254381903</td>
                        <td>314/2 Uttara, Dhaka</td>
                        <td> <span class="bg-warning p-1 rounded">pending...</span> </td>
                        <td>
                            <div class="dropdown align-right">
                                <a href="#"><button class="btn btn-danger" type="button" id="eyeButton" data-toggle="modal" data-target="#newOrderAction">
                                    <i class="fas fa-eye"></i>
                                </button>
                                </a>
                            </div>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
</div>
@endsection