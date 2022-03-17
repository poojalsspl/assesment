@extends('layouts.admin')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif --}}


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product Management</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Product List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Prize</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Details</th>
                    <th width="280px">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($products as $product)
                  <tr>@php $i = 1;@endphp
                    <td>{{ ++$i }}</td>
                    <td>{{ $product->pro_name }}</td>
                    <td>{{ $product->pro_price }}</td>
                    <td><img src="{{ $product->image }}" width="100px"></td>
                    <td>{{ $product->category->catg_name}}</td>
                    <td>{{ $product->pro_desc }}</td>
                  <td>
                   <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                      <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                      {{-- @can('product-edit') --}}
                      <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                      {{--  @endcan --}}


                       @csrf
                       @method('DELETE')
                      {{--  @can('product-delete') --}}
                       <button type="submit" class="btn btn-danger" onclick="return confirm('Are you Sure ! You want to delete ?')">Delete</button>
                      {{--  @endcan --}}
                  </form>
                  </td>
                  </tr>
                   @endforeach
                  
                 
                  
                </table>
              <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

{!! $products->links() !!}


@endsection

