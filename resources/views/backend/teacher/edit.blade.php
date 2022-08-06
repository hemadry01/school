@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">
      <!-- Main content -->
      <section class="content">
        <div class="row">

            <div class="box">
                <div class="box-header with-border">
                  <h5 class="box-title">Update Teacher Information</h5>
                  <a href="{{route("teachers.index")}}" style="float: right" class="btn btn-rounded btn-success mb-5">Teacher's List</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col">
                        <form action="{{route("teachers.update",$teacher->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <h5>Name <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="name" class="form-control" value="{{old('name',isset($teacher)?$teacher->name:"")}}" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                            </div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                    <div class="col-6">
                                        <div class="form-group">
                                            <h5>Designation <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="designation" class="form-control" value="{{old('designation',isset($teacher)?$teacher->designation:"")}}" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                            </div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                </div><!--End row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <h5>Date of Birth<span class="text-danger">*</span> </h5>
                                          <div class="controls">
                                              <input type="date" name="dob" class="form-control" value="{{old('dob',isset($teacher)?$teacher->dob:"")}}"> <div class="help-block"></div></div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Religion</h5>
                                            <div class="controls">
                                                <input type="text" name="religion" class="form-control" value="{{old('religion',isset($teacher)?$teacher->religion:"")}}" > <div class="help-block"></div></div>
                                          </div>
                                    </div><!-- End Col md-6 -->
                                </div> <!-- End row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <h5>Phone </h5>
                                          <div class="controls">
                                              <input type="text" name="phone" class="form-control" value="{{old('phone',isset($teacher)?$teacher->phone:"")}}"> <div class="help-block"></div></div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Address</h5>
                                            <div class="controls">
                                                <input type="text" name="address" class="form-control" value="{{old('address',isset($teacher)?$teacher->address:"")}}"> <div class="help-block"></div></div>
                                          </div>
                                    </div><!-- End Col md-6 -->
                                </div> <!-- End row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <h5>Joining Date <span class="text-danger">*</span></h5>
                                          <div class="controls">
                                              <input type="date" name="joining_date" class="form-control" value="{{old('joining_date',isset($teacher)?$teacher->joining_date:"")}}"> <div class="help-block"></div></div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Photo</h5>
                                            <div class="controls">
                                                <input type="file" name="photo" class="form-control" value="{{old('phone',isset($teacher)?$teacher->phone:"")}}" > <div class="help-block"></div></div>
                                          </div>
                                    </div><!-- End Col md-6 -->
                                </div> <!-- End row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <h5>Email<span class="text-danger">*</span> </h5>
                                          <div class="controls">
                                              <input type="text" name="email" class="form-control" value="{{old('email',isset($teacher)?$teacher->email:"")}}"> <div class="help-block"></div></div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <h5>Gender</h5>
                                          <div class="controls">
                                                <select name="gender" id="gender" class="form-control">
                                                    <option value="male" {{ $teacher->gender == "male" ? 'selected' : '' }}>Male</option>
                                                    <option value="female" {{ $teacher->gender == "female" ? 'selected' : '' }}>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                </div> <!-- End row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <h5>UserName<span class="text-danger">*</span> </h5>
                                          <div class="controls">
                                              <input type="text" name="user_name" class="form-control" value="{{old('user_name',isset($teacher)?$teacher->user_name:"")}}"> <div class="help-block"></div></div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                </div> <!-- End row -->

                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-success" value="Update Teacher">

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
