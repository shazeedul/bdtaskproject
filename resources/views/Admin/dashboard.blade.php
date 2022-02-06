@extends('layouts.admin')
@section('title', 'Dashboard') 
@section('content')

<div class="container-fluid">
    <!-- total overview -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>150</h3>
            <p>New Order</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>53 <sup style="font-size: 20px">%</sup>
            </h3>
            <p>Total Sale</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>44</h3>
            <p>Total Customer</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>65</h3>
            <p>Total Product</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- total sale -->
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header border-0">
            <div class="d-flex justify-content-between">
              <h3 class="card-title">Total Users</h3>
            </div>
          </div>
          <div class="card-body">
            <div class="d-flex">
              <p class="d-flex flex-column">
                <span class="text-bold text-lg">820</span>
                <span>Visitors Over Time</span>
              </p>
              <p class="ml-auto d-flex flex-column text-right">
                <span class="text-success">
                  <i class="fas fa-arrow-up"></i> 12.5% </span>
                <span class="text-muted">Since last week</span>
              </p>
            </div>
            <!-- /.d-flex -->
            <div class="position-relative mb-4">
              <canvas id="visitors-chart" height="200"></canvas>
            </div>
            <div class="d-flex flex-row justify-content-end">
              <span class="mr-2">
                <i class="fas fa-square text-primary"></i> This Week </span>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card -->
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header border-0">
            <div class="d-flex justify-content-between">
              <h3 class="card-title">Total Sales</h3>
            </div>
          </div>
          <div class="card-body">
            <div class="d-flex">
              <p class="d-flex flex-column">
                <span class="text-bold text-lg">$18,230.00</span>
                <span>Sales Over Time</span>
              </p>
              <p class="ml-auto d-flex flex-column text-right">
                <span class="text-success">
                  <i class="fas fa-arrow-up"></i> 33.1% </span>
                <span class="text-muted">Since last month</span>
              </p>
            </div>
            <div class="position-relative mb-4">
              <canvas id="sales-chart" height="200"></canvas>
            </div>
            <div class="d-flex flex-row justify-content-end">
              <span class="mr-2">
                <i class="fas fa-square text-primary"></i> This year </span>
            </div>
          </div>
        </div>
        <!-- /.card -->
      </div>
    </div>
    <div class="container-fluid">
      <div class="col-lg-12 table-border border-light bg_table shadow-sm p-3 ">
        <h1>Latest Product List</h1>
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
            @foreach ($product as $value)
            <tr>
              <td>#{{ $value->id }}</td>
              <td>{{ $value->p_name }}</td>
              <td>{{ $value->c_name }}</td>
              <td>{{ $value->b_price }}</td>
              <td>{{ $value->mrp_price }}</td>
              <td>{{ $value->s_price }}</td>
              <td><img src="{{ asset('storage/product-image/'.$value->image) }}" width="50" height="50"></td>
              <td>{{ $value->quantity }}</td>
              <td class="project-actions text-right">
                <a class="btn btn-primary btn-sm" href="#">
                  <i class="fas fa-folder"></i> View </a>
                <a class="btn btn-info btn-sm" href="#">
                  <i class="fas fa-pencil-alt"></i> Edit </a>
                <a class="btn btn-danger btn-sm" href="#">
                  <i class="fas fa-trash"></i> Delete </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>


@endsection