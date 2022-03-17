@extends('layouts.admin')


@section('content')


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


        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->


          
            <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    {{ $product->pro_name }}
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPrize">Prize</label>
                    {{ $product->pro_price }}
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputCatg">Category</label>
                    {{ $product->catg_code }}
                  </div>
                  <div class="form-group">
                    <label for="exampleInputCatg">Image</label>
                    <img src="/uploads/{{ $product->image }}" width="500px">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputDetl">Detail</label>
                    {{ $product->pro_desc }}
                  </div>
                  
                  
                  
                </div>
                <!-- /.card-body -->
                
              
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



@endsection