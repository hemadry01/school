@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">
      <!-- Main content -->
      <section class="content">
        <div class="row">

            <div class="box">
                <div class="box-header with-border">
                  <h5 class="box-title">Add Syllabus Information</h5>
                  <a href="{{route("syllabus.index")}}" style="float: right">Syllabus</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col">
                        <form action="{{route('syllabus.store')}}" method="POST" enctype="multipart/form-data" >
                            @csrf

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="block" for="class_name">Title <span class="text-danger">*</span></label>
                                            <div class="controls">
                                                <input type="text" name="title" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="block" for="class_numeric">Description<span class="text-danger">*</span></label>
                                          <div class="controls">
                                              <input type="text" name="desciription" class="form-control"> <div class="help-block"></div></div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                </div> <!-- End row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="block" for="class_id">Class<span class="text-danger">*</span></label>
                                              <div class="controls">
                                                  <select name="class_id" id="class_id" class="form-control">
                                                      <option value="">Select Class</option>
                                                      @foreach ($classes as $id=>$value)
                                                         <option value="{{$id}}">{{$value}}</option>
                                                      @endforeach
                                                  </select>
                                              </div>
                                          </div>
                                    </div><!-- End Col md-6 -->
                                  </div> <!-- End row -->

                                <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="block" for="note">File</label>
                                        <div class="controls">
                                            <input type="file" name="file" class="form-control" />
                                        </div>
                                      </div>
                                  </div><!-- End Col md-6 -->
                                </div> <!-- End row-->
                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-success" value="Add Syllabus">

                                </div>

                          </form>

                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.box-body -->
              </div>

        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->

    </div>
</div>


@endsection
