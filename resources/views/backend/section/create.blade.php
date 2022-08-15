@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">
      <!-- Main content -->
      <section class="content">
        <div class="row">

            <div class="box">
                <div class="box-header with-border">
                  <h5 class="box-title">Add Section Information</h5>
                  <a href="{{route("sections.index")}}" style="float: right" class="btn btn-rounded btn-success mb-5">Section</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col">
                        <form action="{{route('sections.store')}}" method="POST">
                            @csrf

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="block" for="class_name">Section <span class="text-danger">*</span></label>
                                            <div class="controls">
                                                <input type="text" name="section_name" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="block" for="class_numeric">Category<span class="text-danger">*</span></label>
                                          <div class="controls">
                                              <input type="text" name="category" class="form-control"> <div class="help-block"></div></div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                </div> <!-- End row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="block" for="capacity">Capacity<span class="text-danger">*</span></label>
                                          <div class="controls">
                                              <input type="number" name="capacity" class="form-control"> <div class="help-block"></div></div>
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
                                        <label class="block" for="teacher_id">Teacher Name<span class="text-danger">*</span></label>
                                            <div class="controls">
                                                <select name="teacher_id" id="teacher_id" class="form-control">
                                                    <option value="">Select Teacher</option>
                                                    @foreach ($teachers as $id=>$value)
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
                                        <label class="block" for="note">Note</label>
                                        <div class="controls">
                                            <textarea type="text" name="note" class="form-control" ></textarea> <div class="help-block"></div></div>
                                      </div>
                                  </div><!-- End Col md-6 -->
                                </div> <!-- End row-->
                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-success" value="Add Section">

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
