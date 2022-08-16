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
                    <a href="{{route("subjects.create")}}" >Add Subject</a>
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
                            <th>Subject Name</th>
                            <th>Subject Author</th>
                            <th>Subject Code</th>
                            <th>Teacher</th>
                            <th>Pass Mark</th>
                            <th>Final Mark</th>
                            <th>Type</th>
                            <th>Action</th>
                          </tr>

                            @foreach ( $subjects as $key=>$subject )
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$subject->subject_name}}</td>
                                <td>{{$subject->subject_author}}</td>
                                <td>{{$subject->subject_code}}</td>
                                <td>{{$subject->teacher->name}}</td>
                                <td>{{$subject->pass_mark}}</td>
                                <td>{{$subject->final_mark}}</td>
                                <td>
                                    @if($subject->type=="Mandatory")
                                        <span class="badge badge-primary">{{$subject->type}}</span>
                                   @else
                                        <span class="badge badge-secondary">{{$subject->type}}</span>
                                    @endif
                                </td>
                                <td>

                                    <a href="{{route("subjects.edit",$subject->id)}}" class="btn btn-warning btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
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
