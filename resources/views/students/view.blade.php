@extends('layouts.adminApp')

@section('content')
 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Students</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Students</li>
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
                <a href="{{route('student.create')}}"><button class="btn btn-sm btn-warning float-right">Add</button></a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                 <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Roll</th>
                      <th>Name</th>
                      <th>Enrollment</th>                      
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>City</th>
                      <th>ID</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($students as $student)
                    <tr>
                      <td><p>{{$student->roll_no}}</p></td>
                      <td><p>{{$student->name}}</p></td>
                      <td><p>{{$student->enrollment_no}}</p></td>
                      <td><p>{{$student->email}}</p></td>
                      <td><p>{{$student->mobile}}</p></td>
                      <td><p>{{$student->city->name}}</p></td>
                      <td><p>{{$student->idcard->number}}</p></td>
                      <td>
                      <a href="{{route('student.edit',$student->id)}}"><button type="button" class="btn btn-info btn-sm">Edit</button></a>
                      <form action="{{route('student.destroy',$student->id)}}" method="POST">
                      @csrf
                      @method("DELETE")
                      <button class="btn btn-danger btn-sm">Dele</button>
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