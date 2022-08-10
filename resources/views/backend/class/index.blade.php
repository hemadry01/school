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
                <h3 class="box-title">Class</h3>
                <a href="{{route("classes.create")}}" style="float: right" class="btn btn-rounded btn-success mb-5">Add Class</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th width="5%">SL</th>
                              <th>Class</th>
                              <th>Class Numeric</th>
                              <th>Teacher Name</th>
                              <th>Note</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($classes as $key=>$class )


                          <tr>
                              <td>{{$key+1}}</td>
                              <td>{{$class->class_name}}</td>
                              <td>{{$class->class_numeric}}</td>
                              <td>{{$class->teacher->name}}</td>
                              <td>{{$class->note}}</td>
                              <td>
                                <a href="{{route("classes.edit",$class->id)}}" class="btn btn-warning btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
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
