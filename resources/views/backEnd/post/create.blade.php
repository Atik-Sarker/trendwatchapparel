@extends('layouts.master')

@section('head_style')

@show
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
          
          <div class="col-lg-8 mx-auto">
                <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Create Product</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
              <form class="form-horizontal" action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="card-body">

                      <div class="form-group">
                          <div class="col-sm-10">
                          <label class="col-sm-3 control-label">Selete Category</label>
                          <select class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" style="width: 100%;" name="category">
                            <option selected>Select One</option>
                            @foreach ($categorys as $category)
                             <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                          </select>
                          </div>
                          @if ($errors->has('category'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('category') }}</strong>
                        </span>
                        @endif
                        </div>

                    <div class="form-group">
                      <label for="category" class="col-sm-3 control-label">Product Image</label>
  
                      <div class="col-sm-10">
                        <input type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" id="image" name="image" value="{{ old('image') }}">
                      
                        @if ($errors->has('image'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('image') }}</strong>
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
                                    <input type="radio" class="form-check-input{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" id="Active" value="{{ old('category') ? old('category') : true }}">
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
                                    <input type="radio" class="form-check-input{{ $errors->has('status') ? ' is-invalid' : '' }}" name="status" id="Deactivate" value="{{ old('category') ? old('category') : false }}">
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
