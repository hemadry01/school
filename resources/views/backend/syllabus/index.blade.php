@extends('admin.admin_master')
@section('admin')


    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
		<section class="content">

            <div class="row">

              <div class="col-12">
                <div class="box">
                  <div class="box-header with-border">
                    <a href="{{route("syllabus.create")}}" >Add Sylladus</a>
                    <div class="box-controls pull-right">
                      <div class="lookup lookup-circle lookup-right">
                        <input type="text" name="s">
                      </div>
                    </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body no-padding">
                      <div class="table-responsive">
                        <table class="table table-hover">
                          <tr>
                            <th width="5%">SL</th>
                            <th>File</th>
                            <th>Description</th>
                            <th>Class</th>
                            <th>Uploder</th>
                            <th>File</th>
                            <th>Action</th>
                          </tr>

                            @foreach ( $syllabus as $key=>$sya )
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$sya->title}}</td>
                                <td>{{$sya->desciription}}</td>
                                <td>{{$sya->class->class_name}}</td>
                                <td>{{$sya->user_id}}</td>
                                <td>{{$sya->file}}</td>
                                <td>

                                    <a href="{{route("syllabue.downlode",$sya->file)}}" class="btn btn-success btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="Download"><i class="fa fa-download"></i></a>
                                    <a href="{{route("syllabus.edit",$sya->id)}}" class="btn btn-warning btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>

                                </td>
                            </tr>
                            @endforeach


                        </table>
                      </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
            </div>
            <!-- /.row -->

          </section>
          <!-- /.content -->

        </div>
    </div>


@endsection
