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
            <h1>Category Management</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <a class="btn btn-success" href="{{ route('category.create') }}"> Create New Category</a>
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
                <h3 class="card-title">Category List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th width="280px">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($categories as $category)
                  <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $category->catg_name }}</td>
                    <td>{{ $category->catg_desc }}</td>
                    
                  
                  <td>
                   <form action="{{ route('category.destroy',$category->catg_code) }}" method="POST">
                      <a class="btn btn-info" href="{{ route('category.show',$category->catg_code) }}">Show</a>
                      {{-- @can('category-edit') --}}
                      <a class="btn btn-primary" href="{{ route('category.edit',$category->catg_code) }}">Edit</a>
                     {{--   @endcan --}}


                       @csrf
                       @method('DELETE')
                      {{--  @can('category-delete') --}}
                       <button type="submit" class="btn btn-danger" onclick="return confirm('Are you Sure ! On delete this category, product associated with this category will also delete?')">Delete</button>
                       {{-- @endcan --}}
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

{!! $categories->render() !!}


@endsection

