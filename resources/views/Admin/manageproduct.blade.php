@extends('layouts.admin')
@section('title', 'Manage Order')
@section('content')


    <div class="container-fluid">
        <div class="col-lg-12 table-border border-light bg_table shadow-sm p-3 ">
            <h1>Manage Product List</h1>
            <table id="example1" class="table table-bordered table-hover ">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Catagory</th>
                        <th scope="col">Buying Price</th>
                        <th scope="col">MRP Price</th>
                        <th scope="col">Selling Price</th>
                        <th scope="col">Image</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1;
                    @endphp
                    @foreach ($product as $value)
                        <tr>
                            <td>#{{ $i++}}</td>
                            <td>{{ $value->p_name }}</td>
                            <td>{{ $value->c_name }}</td>
                            <td>{{ $value->b_price }}</td>
                            <td>{{ $value->mrp_price }}</td>
                            <td>{{ $value->s_price }}</td>
                            <td><img src="{{ asset('storage/product-image/'.$value->image) }}" width="50" height="50"></td>
                            <td>{{ $value->quantity }}</td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-eye">
                                    </i>
                                </a>
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



@endsection