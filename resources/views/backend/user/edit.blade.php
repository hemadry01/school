@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">
      <!-- Main content -->
      <section class="content">
        <div class="row">

            <div class="box">
                <div class="box-header with-border">
                  <h5 class="box-title">Update User Information</h5>
                  <a href="{{route("users.index")}}" style="float: right" class="btn btn-rounded btn-success mb-5">User's List</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col">
                        <form action="{{route('users.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <h5>Name</h5>
                                            <div class="controls">
                                                <input type="text" name="name" class="form-control" value="{{old('name',isset($user)?$user->name:"")}}" > <div class="help-block"></div>
                                            </div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <h5>Date of Birth</h5>
                                          <div class="controls">
                                              <input type="date" name="dob" class="form-control" value="{{old('dob',isset($user)?$user->dob:"")}}" > <div class="help-block"></div></div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                </div><!--End row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <h5>Gender</h5>
                                          <div class="controls">
                                                <select name="gender" id="gender" class="form-control">
                                                    <option value="male"{{$user->gender =="male" ? 'selected' : '' }}>Male</option>
                                                    <option value="female" {{$user->gender =="female" ? 'selected' : '' }}>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Religion</h5>
                                            <div class="controls">
                                                <input type="text" name="religion" class="form-control" value="{{old('religion',isset($user)?$user->religion:"")}}"> <div class="help-block"></div></div>
                                          </div>
                                    </div><!-- End Col md-6 -->
                                </div> <!-- End row -->

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <h5>Email</h5>
                                          <div class="controls">
                                              <input type="text" name="email" class="form-control" value="{{old('email',isset($user)?$user->email:"")}}" > <div class="help-block"></div></div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <h5>Phone</h5>
                                          <div class="controls">
                                              <input type="text" name="phone" class="form-control" value="{{old('phone',isset($user)?$user->phone:"")}}" > <div class="help-block"></div></div>
                                        </div>
                                    </div><!-- End Col md-6 -->

                                </div> <!-- End row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Address</h5>
                                            <div class="controls">
                                                <input type="text" name="address" class="form-control" value="{{old('address',isset($user)?$user->address:"")}}" > <div class="help-block"></div></div>
                                          </div>
                                    </div><!-- End Col md-6 -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <h5>Joining Date</h5>
                                          <div class="controls">
                                              <input type="date" name="joining_date" class="form-control" value="{{old('joining_date',isset($user)?$user->joining_date:"")}}"> <div class="help-block"></div></div>
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
                                          <h5>Role</h5>
                                          <div class="controls">
                                                <select name="role" id="role" class="form-control" >
                                                    <option value="">Select Role</option>
                                                    <option value="moderator" {{$user->role =="moderator" ? 'selected' : '' }}>Moderator</option>
                                                    <option value="receptionist" {{$user->role =="receptionist" ? 'selected' : '' }}>Receptionist</option>
                                                    <option value="librarian" {{$user->role =="librarian" ? 'selected' : '' }}>Librarian</option>
                                                    <option value="accountant" {{$user->role =="accountant" ? 'selected' : '' }}>Accountant</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                </div> <!-- End row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <h5>UserName</h5>
                                          <div class="controls">
                                              <input type="text" name="user_name" class="form-control" value="{{old('user_name',isset($user)?$user->user_name:"")}}"> <div class="help-block"></div></div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                </div> <!-- End row -->

                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-success" value="Update User">

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
