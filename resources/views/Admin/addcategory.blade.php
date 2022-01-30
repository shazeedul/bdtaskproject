@extends('layouts.admin')
@section('title', 'Manage Order')
@section('content')




    <div class="container-fluid">
        <div class="row pt-2 pl-5 pb-2 ">
            <h1>Add Catagory</h1>
        </div>
        <div class=" m-4 border p-3">

            
            <div class="form-group row  ">
                <label for="colFormLabel" class="col-sm-2 font-weight-bold col-form-label">
                    <h5>Catagory Name </h5>
                </label>
                <div class="col-lg-10">
                    <input type="text" class=" form-control" id="colFormLabel" placeholder="Catagory Name">
                </div>
            </div>
            <div class="form-group row  ">
                <label for="colFormLabe2" class="col-sm-2 font-weight-bold col-form-label">
                    <h5>Parent Catagory </h5>
                </label>
                <div class="col-lg-10">
                    <select class="col-lg-10 form-control" id="colFormLabe2">
                        <option value="" disabled selected hidden>Choose Category...</option>
                        <option>Parent Category</option>
                        <option>Parent Category</option>
                        <option>Parent Category</option>
                        <option>Parent Category</option>
                        <option>Parent Category</option>
                    </select>

                </div>
            </div>
            <div class="d-flex flex-row-reverse">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="col-lg-12 table-border border-light bg_table shadow-sm p-3 ">
            <h1>Manage Catagory List</h1>
            <table id="example1" class="table table-bordered table-hover ">
                <thead class="">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Catagory Name</th>
                        <th scope="col">Is Active</th>
                        <th scope="col">Action</th>


                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" >
                                <label class="custom-control-label" for="customCheck1">1</label>
                            </div>
                        </td>
                        <td>Fashion</td>
                        <td>Active </td>
                        <td>
                            <button class="btn btn-success" type="submit">Active</button>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-pen-alt"></i></button>
                            <button class="btn btn-danger" type="submit"><i
                                    class="fas fa-trash-alt"></i></button>
                        </td>


                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2">2</label>
                            </div>
                        </td>
                        <td>Gadget</td>
                        <td>Inactive </td>
                        <td>
                            <button class="btn btn-success" type="submit">Active</button>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-pen-alt"></i></button>
                            <button class="btn btn-danger" type="submit"><i
                                    class="fas fa-trash-alt"></i></button>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                <label class="custom-control-label" for="customCheck3">3</label>
                            </div>
                        </td>
                        <td>T-shirt</td>
                        <td>
                            Active
                        </td>
                        <td>
                            <button class="btn btn-success" type="submit">Active</button>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-pen-alt"></i></button>
                            <button class="btn btn-danger" type="submit"><i
                                    class="fas fa-trash-alt"></i></button>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                <label class="custom-control-label" for="customCheck4">4</label>
                            </div>
                        </td>
                        <td>E-electronic</td>
                        <td> <span>Inactive</span> </td>
                        <td>
                            <button class="btn btn-success" type="submit">Active</button>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-pen-alt"></i></button>
                            <button class="btn btn-danger" type="submit"><i
                                    class="fas fa-trash-alt"></i></button>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                <label class="custom-control-label" for="customCheck5">5</label>
                            </div>
                        </td>
                        <td>Desktop</td>
                        <td> Active </td>
                        <td>
                            <button class="btn btn-success" type="submit">Active</button>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-pen-alt"></i></button>
                            <button class="btn btn-danger" type="submit"><i
                                    class="fas fa-trash-alt"></i></button>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                <label class="custom-control-label" for="customCheck5">6</label>
                            </div>
                        </td>
                        <td>AC</td>
                        <td>
                            Inactive
                        </td>
                        <td>
                            <button class="btn btn-warning" type="submit">Inactive</button>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-pen-alt"></i></button>
                            <button class="btn btn-danger" type="submit"><i
                                    class="fas fa-trash-alt"></i></button>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck6">
                                <label class="custom-control-label" for="customCheck6">7</label>
                            </div>
                        </td>
                        <td>Laptop</td>
                        <td> Active </td>
                        <td>
                            <button class="btn btn-success" type="submit">Active</button>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-pen-alt"></i></button>
                            <button class="btn btn-danger" type="submit"><i
                                    class="fas fa-trash-alt"></i></button>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                <label class="custom-control-label" for="customCheck7">8</label>
                            </div>
                        </td>
                        <td>Washing-machine</td>
                        <td> Inactive </td>
                        <td>
                            <button class="btn btn-warning" type="submit">Inactive</button>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-pen-alt"></i></button>
                            <button class="btn btn-danger" type="submit"><i
                                    class="fas fa-trash-alt"></i></button>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck8">
                                <label class="custom-control-label" for="customCheck8">9</label>
                            </div>
                        </td>
                        <td>Mobile-phone</td>
                        <td> Active </td>
                        <td>
                            <button class="btn btn-success" type="submit">Active</button>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-pen-alt"></i></button>
                            <button class="btn btn-danger" type="submit"><i
                                    class="fas fa-trash-alt"></i></button>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck9">
                                <label class="custom-control-label" for="customCheck9">10</label>
                            </div>
                        </td>
                        <td>Refrigerator</td>
                        <td>Inactive </td>
                        <td><button class="btn btn-warning" type="submit">Inactive</button>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-pen-alt"></i></button>
                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                            </button>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck10">
                                <label class="custom-control-label" for="customCheck10">11</label>
                            </div>
                        </td>
                        <td>Shoes</td>
                        <td>
                            Active
                        </td>
                        <td>
                            <button class="btn btn-primary bg-success" type="submit">Active</button>
                            <button class="btn btn-primary" type="submit"><i class="fas fa-pen-alt"></i></button>
                            <button class="btn btn-primary bg-danger" type="submit"><i
                                    class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <td>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck11">
                            <label class="custom-control-label" for="customCheck11">12</label>
                        </div>
                    </td>
                    <td>Tv</td>
                    <td>Active </td>
                    <td><button class="btn btn-success" type="submit">Active</button>
                        <button class="btn btn-primary" type="submit"><i class="fas fa-pen-alt"></i></button>
                        <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>




@endsection