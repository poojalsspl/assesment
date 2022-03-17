@extends('layouts.admin')

@section('content')

{{-- @if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif  --}}


<!-- Content Wrapper. Contains page content -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1>Validation</h1> --}}
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              {{-- <form id="quickForm"> --}}
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" id="productForm">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text" name="pro_name" class="form-control" placeholder="Product Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPrize">Prize</label>
                    <input type="text" name="pro_price" class="form-control" placeholder="Product Prize">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputCatg">Category</label>
                    <select class="form-control" name="catg_code">
                      <option value="">Select Category</option>
                      @foreach($categories as $cat)
                      <option value="{{$cat->catg_code}}">{{$cat->catg_name}}</option>
                      @endforeach
                    </select>
                  </div><div class="form-group">
                    <label for="exampleInputImage">Image</label>
                    <input type="file" name="image" class="form-control" placeholder="Product Image">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputDetl">Detail</label>
                    <textarea class="form-control" style="height:150px" name="pro_desc" placeholder="Detail"></textarea>
                  </div>  
                  
                  
                  
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>

                </div>
              {!! Form::close() !!}
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  {{-- <script src="https://code.jquery.com/jquery-1.9.1.js"></script> --}}
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    
    $(document).ready(function () {
      
       $("#productForm").validate({
        // console.log(testt);
        });
      });

  </script>


@endsection