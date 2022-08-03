@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->

      <!-- Main content -->
		<section class="content">
            
            <div class="row">
                <div class="col-12 col-lg-5 col-xl-4">

                    <div class="box box-inverse bg-img" style="background-image: url(../images/gallery/full/1.jpg);" data-overlay="2">
                        <div class="flexbox px-20 pt-20">
                        </div>

                        <div class="box-body text-center pb-50">
                          <a href="#">
                            <img class="avatar avatar-xxl avatar-bordered" src="{{asset($parent->image)}}" alt="">
                          </a>
                          <h4 class="mt-2 mb-0"><a class="hover-primary text-white" href="#">{{$parent->father_name}}</a></h4>
                          <span class="text-muted">Parents</span><br>
                          <span class="text-muted">{{$parent->phone}}</span>

                        </div>
                      </div>

                    <!-- Profile Image -->

                </div>
                <div class="col-12 col-lg-7 col-xl-8">

                <div class="nav-tabs-custom box-profile">
                  <ul class="nav nav-tabs">
                    <li><a class="active" href="#usertimeline" data-toggle="tab">Profile</a></li>
                    <li><a href="#activity" data-toggle="tab">Activity</a></li>
                    <li><a href="#settings" data-toggle="tab">Settings</a></li>
                  </ul>

                  <div class="tab-content">

                   <div class="active tab-pane" id="usertimeline">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-white">Father Name : {{$parent->father_name}}</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-white">Father profession : {{$parent->father_profession}}</p>
                            </div>

                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-white">Mother Name : {{$parent->mother_name}}</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-white">Mother profession : {{$parent->mother_profession}}</p>
                            </div>

                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-white">Email : {{$parent->email}}</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-white">Address : {{$parent->address}}</p>
                            </div>

                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-white">Username : {{$parent->user_name}}</p>
                            </div>


                        </div> <!-- end row -->

                    </div>
                    <!-- /.tab-pane -->

                    <div class="tab-pane" id="activity">

                      <div class="box p-15">
                      <!-- Post -->
                      <div class="post">
                        <div class="user-block">
                          <img class="img-bordered-sm rounded-circle" src="../images/user1-128x128.jpg" alt="user image">
                              <span class="username">
                                <a href="#">Brayden</a>
                                <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                              </span>
                          <span class="description">5 minutes ago</span>
                        </div>
                        <!-- /.user-block -->
                        <div class="activitytimeline">
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
                            </p>
                            <ul class="list-inline">
                              <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                              <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                              </li>
                              <li class="pull-right">
                                <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                                  (5)</a></li>
                            </ul>
                            <form class="form-element">
                                <input class="form-control input-sm" type="text" placeholder="Type a comment">
                           </form>
                        </div>
                      </div>
                      <!-- /.post -->
                     </div>

                    </div>
                    <!-- /.tab-pane -->

                    <div class="tab-pane" id="settings">

                      <div class="box p-15">
                          <form class="form-horizontal form-element col-12">
                            <div class="form-group row">
                              <label for="inputName" class="col-sm-2 control-label">Name</label>

                              <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputName" placeholder="">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                              <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail" placeholder="">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputPhone" class="col-sm-2 control-label">Phone</label>

                              <div class="col-sm-10">
                                <input type="tel" class="form-control" id="inputPhone" placeholder="">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                              <div class="col-sm-10">
                                <textarea class="form-control" id="inputExperience" placeholder=""></textarea>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputSkills" placeholder="">
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="ml-auto col-sm-10">
                                <div class="checkbox">
                                  <input type="checkbox" id="basic_checkbox_1" checked="">
                                  <label for="basic_checkbox_1"> I agree to the</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Terms and Conditions</a>
                                </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="ml-auto col-sm-10">
                                <button type="submit" class="btn btn-rounded btn-success">Submit</button>
                              </div>
                            </div>
                          </form>
                      </div>
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
              </div>
            </div>
            <!-- /.row -->

          </section>
          <!-- /.content -->

    </div>
</div>


@endsection
