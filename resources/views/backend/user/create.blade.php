@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">
      <!-- Main content -->
      <section class="content">
        <div class="row">

            <div class="box">
                <div class="box-header with-border">
                  <h5 class="box-title">Add User Information</h5>
                  <a href="{{route("teachers.index")}}" style="float: right" class="btn btn-rounded btn-success mb-5">User's List</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col">
                        <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <h5>Name <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="name" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div>
                                            </div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <h5>Date of Birth<span class="text-danger">*</span> </h5>
                                          <div class="controls">
                                              <input type="date" name="dob" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                </div><!--End row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <h5>Gender</h5>
                                          <div class="controls">
                                                <select name="gender" id="gender" class="form-control">
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Religion</h5>
                                            <div class="controls">
                                                <input type="text" name="religion" class="form-control" > <div class="help-block"></div></div>
                                          </div>
                                    </div><!-- End Col md-6 -->
                                </div> <!-- End row -->

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <h5>Email<span class="text-danger">*</span> </h5>
                                          <div class="controls">
                                              <input type="text" name="email" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <h5>Phone<span class="text-danger">*</span> </h5>
                                          <div class="controls">
                                              <input type="text" name="phone" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                        </div>
                                    </div><!-- End Col md-6 -->

                                </div> <!-- End row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Address</h5>
                                            <div class="controls">
                                                <input type="text" name="address" class="form-control" > <div class="help-block"></div></div>
                                          </div>
                                    </div><!-- End Col md-6 -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <h5>Joining Date <span class="text-danger">*</span></h5>
                                          <div class="controls">
                                              <input type="date" name="joining_date" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                        </div>
                                    </div><!-- End Col md-6 -->

                                </div> <!-- End row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Photo</h5>
                                            <div class="controls">
                                                <input type="file" name="image" class="form-control" > <div class="help-block"></div></div>
                                          </div>
                                    </div><!-- End Col md-6 -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <h5>Role<span class="text-danger">*</span></h5>
                                          <div class="controls">
                                                <select name="role" id="role" class="form-control" required="" data-validation-required-message="This field is required">
                                                    <option value="">Select Role</option>
                                                    <option value="moderator">Moderator</option>
                                                    <option value="receptionist">Receptionist</option>
                                                    <option value="librarian">Librarian</option>
                                                    <option value="accountant">Accountant</option>
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
                                              <input type="text" name="user_name" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Password<span class="text-danger">*</span> </h5>
                                            <div class="controls">
                                                <input type="password" name="password" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                          </div>
                                    </div><!-- End Col md-6 -->
                                </div> <!-- End row -->

                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-success" value="Add User">

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
