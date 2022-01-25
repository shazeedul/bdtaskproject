@extends('layouts.admin')
@section('title', 'Manage Order')
@section('content')


<div class="container-fluid">
    <div class="content-wrapper">
        <div class="col-lg-12 table-border border-light bg_table shadow-sm p-3 ">
            <h1>Manage Product</h1>

            <a href="{{route('addproduct')}}"><button class="btn bg-info mb-4 mt-4">Add Product</button></a>

            <div class="row d-flex justify-content-between">

                <input class="form-control col-lg-4 mb-2" id="myInput" type="text" placeholder="Search..">

                <button class="btn bg-success mb-2">Save</button>

            </div>
            <table class="table table-white   table-hover">
                <thead class="">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Catagory</th>
                        <th scope="col">Model</th>
                        <th scope="col">Pur Price</th>
                        <th scope="col">Offer Price</th>
                        <th scope="col">BL Price</th>
                        <th scope="col">Status</th>
                        <th scope="col">action</th>




                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">1</label>
                            </div>
                        </td>
                        <td>Tv-Symphony-Galaxy j7</td>
                        <td> Tv </td>
                        <td> Galaxy j7 </td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td>Inactive</td>
                        <td>
                            <div class="dropdown align-right">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Edit
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Active</a>
                                    <a class="dropdown-item" href="#">Update</a>
                                    <a class="dropdown-item" href="#">Delete</a>

                                </div>
                            </div>
                        </td>



                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2">2</label>
                            </div>
                        </td>
                        <td> Tv-Samsung-65UH8500</td>
                        <td> Tv</td>
                        <td> 65UH8500</td>
                        <td> <input type="number" class="col-lg-5"> </td>
                        <td> <input type="number" class="col-lg-5"> </td>
                        <td> <input type="number" class="col-lg-5"> </td>
                        <td>Inactive</td>
                        <td>
                            <div class="dropdown align-right">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Edit
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Active</a>
                                    <a class="dropdown-item" href="#">Update</a>
                                    <a class="dropdown-item" href="#">Delete</a>

                                </div>
                            </div>
                        </td>



                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                <label class="custom-control-label" for="customCheck3">3</label>
                            </div>
                        </td>
                        <td>Tv-Samsung-65UH8500</td>
                        <td>Tv</td>
                        <td> 65UH8500</td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td>Inactive</td>
                        <td>
                            <div class="dropdown align-right">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Edit
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Active</a>
                                    <a class="dropdown-item" href="#">Update</a>
                                    <a class="dropdown-item" href="#">Delete</a>

                                </div>
                            </div>
                        </td>



                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                <label class="custom-control-label" for="customCheck4">4</label>
                            </div>
                        </td>
                        <td>Shoes-Nike-A5</td>
                        <td> Shoes </td>
                        <td> A5</td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td>Inactive</td>
                        <td>
                            <div class="dropdown align-right">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Edit
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Active</a>
                                    <a class="dropdown-item" href="#">Update</a>
                                    <a class="dropdown-item" href="#">Delete</a>

                                </div>
                            </div>
                        </td>




                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                <label class="custom-control-label" for="customCheck5">5</label>
                            </div>
                        </td>
                        <td>Tv-Samsung-65UH8500</td>
                        <td> Tv </td>
                        <td> 65UH8500</td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td>Inactive</td>
                        <td>
                            <div class="dropdown align-right">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Edit
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Active</a>
                                    <a class="dropdown-item" href="#">Update</a>
                                    <a class="dropdown-item" href="#">Delete</a>

                                </div>
                            </div>
                        </td>



                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                <label class="custom-control-label" for="customCheck5">6</label>
                            </div>
                        </td>
                        <td>Shoes-Samsung-65UH8500</td>
                        <td>
                            Shoes
                        </td>
                        <td> 65UH8500</td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td>Inactive</td>
                        <td>
                            <div class="dropdown align-right">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Edit
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Active</a>
                                    <a class="dropdown-item" href="#">Update</a>
                                    <a class="dropdown-item" href="#">Delete</a>

                                </div>
                            </div>
                        </td>



                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck6">
                                <label class="custom-control-label" for="customCheck6">7</label>
                            </div>
                        </td>
                        <td>Shoes-Walton-55UH7700</td>
                        <td> Shoes </td>
                        <td> 55UH7700</td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td>Inactive</td>
                        <td>
                            <div class="dropdown align-right">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Edit
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Active</a>
                                    <a class="dropdown-item" href="#">Update</a>
                                    <a class="dropdown-item" href="#">Delete</a>

                                </div>
                            </div>
                        </td>



                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                <label class="custom-control-label" for="customCheck7">8</label>
                            </div>
                        </td>
                        <td> Tv-Samsung-OLED65G6P</td>
                        <td> Tv </td>
                        <td> OLED65G6P</td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td>Inactive</td>
                        <td>
                            <div class="dropdown align-right">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Edit
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Active</a>
                                    <a class="dropdown-item" href="#">Update</a>
                                    <a class="dropdown-item" href="#">Delete</a>

                                </div>
                            </div>
                        </td>



                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck8">
                                <label class="custom-control-label" for="customCheck8">9</label>
                            </div>
                        </td>
                        <td>Shoes-Nike-Galaxy j7</td>
                        <td> Shoes</td>
                        <td> OLED65G6P</td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td>Inactive</td>
                        <td>
                            <div class="dropdown align-right">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Edit
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Active</a>
                                    <a class="dropdown-item" href="#">Update</a>
                                    <a class="dropdown-item" href="#">Delete</a>

                                </div>
                            </div>
                        </td>



                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck9">
                                <label class="custom-control-label" for="customCheck9">10</label>
                            </div>
                        </td>
                        <td>Laptop-Apple-2021</td>
                        <td> laptop</td>
                        <td> Galaxy j7</td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td>Inactive</td>
                        <td>
                            <div class="dropdown align-right">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Edit
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Active</a>
                                    <a class="dropdown-item" href="#">Update</a>
                                    <a class="dropdown-item" href="#">Delete</a>

                                </div>
                            </div>
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
                            Shoes
                        </td>
                        <td> 2021</td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td>Inactive</td>
                        <td>
                            <div class="dropdown align-right">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Edit
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Active</a>
                                    <a class="dropdown-item" href="#">Update</a>
                                    <a class="dropdown-item" href="#">Delete</a>

                                </div>
                            </div>
                        </td>



                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck11">
                                <label class="custom-control-label" for="customCheck11">12</label>
                            </div>
                        </td>
                        <td>Tv</td>
                        <td> TV </td>
                        <td> 2021</td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td> <input type="text" class="col-lg-5"> </td>
                        <td>Inactive</td>
                        <td>
                            <div class="dropdown align-right">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Edit
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Active</a>
                                    <a class="dropdown-item" href="#">Update</a>
                                    <a class="dropdown-item" href="#">Delete</a>

                                </div>
                            </div>
                        </td>


                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection('content')