@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">
      <!-- Main content -->
      <section class="content">
        <div class="row">

            <div class="box">
                <div class="box-header with-border">
                  <h5 class="box-title">Add Subject Information</h5>
                  <a href="{{route("subjects.index")}}" style="float: right">Subject</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col">
                        <form action="{{route('subjects.store')}}" method="POST">
                            @csrf

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="block" for="class_id">Class Nane <span class="text-danger">*</span></label>
                                            <div class="controls">
                                                <select name="class_id" id="class_id" class="form-control">
                                                    <option value="">Select Class</option>
                                                    @foreach ($classes as $id=>$value)
                                                       <option value="{{$id}}">{{$value}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="block" for="teacher_id">Teacher Name<span class="text-danger">*</span></label>
                                          <select name="teacher_id" id="teacher_id" class="form-control">
                                                <option value=""></option>
                                                @foreach ($teachers as $id=>$value )
                                                    <option value="{{$id}}">{{$value}}</option>
                                                @endforeach
                                          </select>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                </div> <!-- End row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="block" for="type">Type<span class="text-danger">*</span></label>
                                          <div class="controls">
                                              <select name="type" id="type" class="form-control">
                                                    <option value="">Select Type</option>
                                                    <option value="Optional">Optional</option>
                                                    <option value="Mandatory">Mandatory</option>
                                              </select>
                                          </div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                </div> <!-- End row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="block" for="pass_mark">Pass Mark<span class="text-danger">*</span></label>
                                              <div class="controls">
                                                <input type="text" name="pass_mark" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                              </div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                </div> <!-- End row -->

                                <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="block" for="final_mark">Final Mark<span class="text-danger">*</span></label>
                                            <div class="controls">
                                                <input type="text" name="final_mark" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                            </div>
                                        </div>
                                  </div><!-- End Col md-6 -->
                                </div> <!-- End row -->

                                <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                            <label class="block" for="subject_name">Subject Name</label>
                                            <div class="controls">
                                                <input type="text" name="subject_name" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                            </div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                </div> <!-- End row-->

                                <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                            <label class="block" for="subject_author">Subject Author</label>
                                            <div class="controls">
                                                <input type="text" name="subject_author" class="form-control" > <div class="help-block"></div>
                                            </div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                </div> <!-- End row-->

                                <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                            <label class="block" for="subject_code">Subject Code</label>
                                            <div class="controls">
                                                <input type="text" name="subject_code" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                            </div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                </div> <!-- End row-->
                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-success" value="Add Subject">

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
