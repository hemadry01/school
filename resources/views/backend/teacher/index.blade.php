@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->
      <
      <!-- Main content -->
      <section class="content">
        <div class="row">

          <div class="col-12">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Teacher's List</h3>
                <a href="{{route("teachers.create")}}" style="float: right" class="btn btn-rounded btn-success mb-5">Add Teacher</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th>Photo</th>
                              <th>Name</th>
                              <th>Designation</th>
                              <th>Email</th>
                              <th>phone</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($teachers as $key=>$teacher )


                          <tr>
                              <td>{{$key+1}}</td>
                              <td>

                                <img width="60" src="{{asset($teacher->photo)}}" alt="photo">
                              </td>
                              <td>{{$teacher->name}}</td>
                              <td>{{$teacher->designation}}</td>
                              <td>{{$teacher->email}}</td>
                              <td>{{$teacher->phone}}</td>
                              <td>
                                <a href="{{route("teachers.show",$teacher->id)}}" class="btn btn-success btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="View"><i class="fa fa-check-square-o"></i></a>
                                <a href="{{route("teachers.edit",$teacher->id)}}" class="btn btn-warning btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                <a href="{{route('delete.teacher',$teacher->id)}}" class="btn btn-danger btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                              </td>

                          </tr>

                          @endforeach
                      </tbody>
                    </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->

    </div>
</div>


@endsection
