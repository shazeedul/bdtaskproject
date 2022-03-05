@extends('layouts.admin')
@section('title', 'Add Category')
@section('content')
    <div class="container-fluid">
        <div class="row pt-2 pl-5 pb-2 ">
            <h1>Add Catagory</h1>
        </div>
        <div class="card m-4 shadow p-3">
            <form action="{{route('addcategory')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group row  ">
                    <label for="colFormLabel" class="col-sm-2 font-weight-bold col-form-label">
                        <h5>Catagory Name </h5>
                    </label>
                    <div class="col-lg-6">
                        <input type="text" class=" form-control" id="colFormLabel" placeholder="Catagory Name" name="c_name">
                    </div>
                </div>
                <div class="form-group row  ">
                    <label for="colFormLabe2" class="col-sm-2 font-weight-bold col-form-label">
                        <h5> Catagory Type </h5>
                    </label>
                    <div class="col-lg-8">
                        <select class="col-lg-8 form-control" id="colFormLabe2" name="category">
                            <option value="0">Parent Category</option>
                            @foreach ($category as $value)
                                <option value="{{$value->id}}">{{$value->c_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="article1_en" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file" required class="col-lg-10 form-control" id="image" placeholder="Image" name="image">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabe2" class="col-sm-2 font-weight-bold col-form-label">
                        <h5> Status </h5>
                    </label>
                    <div class="form-group ">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="1" name="status" checked="">
                            <label class="form-check-label">Active</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="0" name="status">
                            <label class="form-check-label">In Active</label>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row-reverse">
                    <button type="submit" class="btn btn-dark m-4 ">Add</button>
                </div>
            </form>
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
                        <th scope="col">Parent Category</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>


                    </tr>
                </thead>
                <tbody>
                    @php $i=1;
                    @endphp
                    @foreach ($m_category as $value)
                    <tr>
                        <td>#{{ $i++}}</td>
                        <td>{{$value->c_name}}</td>
                        <td>
                            @if ($value->category)
                                @foreach ($m_category as $category_name)
                                    @if ($category_name->id==$value->category)
                                        {{ $category_name->c_name}}
                                    @endif
                                @endforeach
                            @else
                                Parent Category
                            @endif
                        </td>
                        <td><img src="{{ asset('storage/c-image/'.$value->image) }}" width="50" height="50"></td>
                        <td>
                            <button class="btn btn-success" type="submit" {{ $value->status }}>Active</button>
                            <a class="btn btn-primary" href="{{route('editcategory', ['id'=>$value->id])}}"><i class="fas fa-pen-alt"></a></i>
                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>




@endsection