@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">
      <!-- Main content -->
      <section class="content">
        <div class="row">

            <div class="box">
                <div class="box-header with-border">
                  <h5 class="box-title">Add Parent Information</h5>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col">
                        <form action="{{route('parents.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <h5>Guardian Name <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="guardian_name" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                    </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <h5>Father Name </h5>
                                          <div class="controls">
                                              <input type="text" name="father_name" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <h5>Mother Name </h5>
                                          <div class="controls">
                                              <input type="text" name="mother_name" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                        </div>
                                    </div>
                                </div> <!-- End Col md-6 -->
                                <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <h5>Father Profession </h5>
                                        <div class="controls">
                                            <input type="text" name="father_profession" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <h5>Mother Profession </h5>
                                        <div class="controls">
                                            <input type="text" name="mother_profession" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                      </div>
                                  </div>
                                </div> <!-- End Col md-6 -->

                                <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <h5>Email </h5>
                                        <div class="controls">
                                            <input type="text" name="email" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <h5>Phone </h5>
                                        <div class="controls">
                                            <input type="text" name="phone" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                      </div>
                                  </div>
                                </div> <!-- End Col md-6 -->

                                <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <h5>Address </h5>
                                        <div class="controls">
                                            <input type="text" name="address" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <h5>Photo </h5>
                                        <div class="controls">
                                            <input type="file" name="image" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                      </div>
                                  </div>
                                </div> <!-- End Col md-6 -->

                                <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <h5>Username <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="user_name" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <h5>Password<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="password" name="password" class="form-control" required="" data-validation-required-message="This field is required"> <div class="help-block"></div></div>
                                      </div>
                                  </div>
                                </div> <!-- End Col md-6 -->
                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-success" value="Add Parent">
                                    
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
