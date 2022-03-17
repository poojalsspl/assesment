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
              <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
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
                <h3 class="card-title">Show User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->


          
            <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputFname">First Name</label>
                    {{ $user->f_name }}
                  </div>
                  <div class="form-group">
                    <label for="exampleInputLname">Last Name</label>
                    {{ $user->l_name }}
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    {{ $user->email }}
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword2">Roles</label>
                    @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                            <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                    @endif
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