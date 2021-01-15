@extends('layouts.adminApp')

@section('content')
 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>City</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">City</li>
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
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create
                
                </h3>
                <a href="{{route('city.create')}}"><button class="btn btn-sm btn-warning float-right">Add</button></a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                 <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($cities as $city)
                    <tr>
                      <td><p>{{$city->id}}</p></td>
                      <td><p>{{$city->name}}</p></td>
                      <td>
                      <a href="{{route('city.edit',$city->id)}}"><button type="button" class="btn btn-info btn-sm">Edit</button></a>
                      <form method="post" action="{{route('city.destroy',$city->id)}}">
                      @csrf
                      @method("DELETE")
                      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                      </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection