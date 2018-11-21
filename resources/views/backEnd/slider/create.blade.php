@extends('layouts.master')

@section('head_style')

@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-lg-8 mx-auto ">
                <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Create Slider</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
              <form class="form-horizontal" action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="card-body">

                    <div class="form-group">
                      <label for="slider_title" class="col-sm-3 control-label">Slider Title</label>
  
                      <div class="col-sm-10">
                        <input type="text" class="form-control{{ $errors->has('slider_title') ? ' is-invalid' : '' }}" id="slider_title" name="slider_title" value="{{ old('slider_title') }}">
                      
                        @if ($errors->has('slider_title'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('slider_title') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                  
                    <div class="form-group">
                      <label for="slider_image" class="col-sm-3 control-label">Slider Image</label>
  
                      <div class="col-sm-10">
                        <input type="file" class="form-control{{ $errors->has('slider_image') ? ' is-invalid' : '' }}" id="slider_image" name="slider_image" value="{{ old('slider_image') }}">
                      
                        @if ($errors->has('slider_image'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('slider_image') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                  
                    <!-- checkbox -->
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" id="Active" value="{{ old('status') ? old('category') : 1 }}">
                                    <label class="form-check-label"  for="Active">Active</label>
                                  </div>
                                </div>
                                @if ($errors->has('status'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" id="Deactivate" value="{{ old('status') ? old('category') : 0 }}">
                                    <label class="form-check-label"  for="Deactivate">Deactivate</label>
                                  </div>
                                </div>
                            </div>
                            @if ($errors->has('status'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('status') }}</strong>
                            </span>
                            @endif
                        </div>
                      </div>
                  <!-- checkbox -->
                  </div>

                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Submit</button>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>
          </div>
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection
