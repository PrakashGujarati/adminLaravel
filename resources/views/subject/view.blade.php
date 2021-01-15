@extends('layouts.adminApp')

@section('content')
 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Subject</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Subject</li>
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
                <a href="{{route('subject.create')}}"><button class="btn btn-sm btn-warning float-right">Add</button></a>
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
                      <th>Program</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($cities as $subject)
                    <tr>
                      <td><p>{{$subject->id}}</p></td>
                      <td><p>{{$subject->name}}</p></td>
                      <td><p>{{$subject->program}}</p></td>
                      <td>
                      <a href="{{route('subject.edit',$subject->id)}}"><button type="button" class="btn btn-info btn-sm">Edit</button></a>
                      <form method="post" action="{{route('subject.destroy',$subject->id)}}">
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