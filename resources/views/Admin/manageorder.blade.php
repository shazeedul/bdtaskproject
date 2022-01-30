@extends('layouts.admin')
@section('title', 'Manage Order')
@section('content')

<div class="container-fluid">
    <div class="col-lg-12 table-border border-light bg_table shadow-sm p-3 ">
        <h1>Manage order List</h1>
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