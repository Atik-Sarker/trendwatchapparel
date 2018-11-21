@extends('layouts.master')


@section('content')
<style>
    .table i{
        font-size: 20px;
    }
</style>

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
                  <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
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
              <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">All Category</h3>      
                        <div class="card-tools">
                          <div class="button-group button-group-sm" style="width: 150px;">
                            <a href="{{ route('categoryAdd') }}" class="btn btn-primary float-right"> Add New </a>
                          </div>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body table-responsive p-0">
                        <table class="table table-striped">
                          <tr>
                            <th>NO.</th>
                            <th>Name</th>
                            <th>Created_at</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                          </tr>
                          @foreach ($categories as $category)
                          <tr>
                              <td>{{$loop->index +1}}</td>
                              <td>{{$category->name}}</td>
                              <td>{{$category->created_at->diffForHumans()}}</td>
                              <td>
                                
                                @if($category->status)
                                <form action="{{ route('category.status', $category->id) }}" method="POST">
                                  @csrf
                                  <input type="hidden" value="0" name="status">
                                  
                                  <button type="submit" class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="click here to unpublished"><i class="fa fa-thumbs-up" aria-hidden="true"></i></button>
                                </form>
                                @else
                                <form action="{{ route('category.status', $category->id) }}" method="POST">
                                  @csrf
                                  <input type="hidden" value="1" name="status">
                                  
                                  <button type="submit" class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="click here to publish"><i class="fa fa-thumbs-down" aria-hidden="true"></i></button>
                                </form>
                                @endif
                                
                              </td>
                              
                              <td class="text-center">                                   
                                  <a href="{{ route('category.edit', $category->id) }}" class="btn btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                  
                                  <form id="delete-form-{{ $category->id }}" action="{{ route('category.destroy',$category->id) }}" method="get"  style="display: none">

                                      @csrf
                                      {{ method_field('DELETE') }}
                                  </form>
                                  <a href="" onclick="
                                  if (confirm('Are you sure, You want to delete this?'))
                                  {
                                  event.preventDefault();document.getElementById('delete-form-{{ $category->id }}').submit()
                                  }
                                  else
                                  {
                                  event.preventDefault();
                                  }
                                  " class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                              </td>
                          </tr>
                          @endforeach                        
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
              </div>             
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
      </div>
       
@endsection

 