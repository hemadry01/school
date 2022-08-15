@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">
      <!-- Main content -->
      <section class="content">
        <div class="row">

            <div class="box">
                <div class="box-header with-border">
                  <h5 class="box-title">Update Section Information</h5>
                  <a href="{{route("sections.index")}}" style="float: right" class="btn btn-rounded btn-success mb-5">Class</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col">
                        <form action="{{route('sections.update',$sections->id)}}" method="POST">
                            @csrf
                            @method("PUT")

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="block" for="section_name">Section</label>
                                            <div class="controls">
                                                <input type="text" name="section_name" class="form-control" value="{{old('section_name',isset($sections)?$sections->section_name:"")}}"> <div class="help-block"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="block" for="category">Category</label>
                                          <div class="controls">
                                              <input type="text" name="category" class="form-control" value="{{old('category',isset($sections)?$sections->category:"")}}"> <div class="help-block"></div></div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                </div> <!-- End row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="block" for="capacity">Capacity</label>
                                          <div class="controls">
                                              <input type="number" name="capacity" class="form-control" value="{{old('capacity',isset($sections)?$sections->capacity:"")}}"> <div class="help-block"></div></div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                </div> <!-- End row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="block" for="teacher_id">Class</label>
                                              <div class="controls">
                                                  <select name="class_id" id="class_id" class="form-control">
                                                      <option value="">Select Class</option>
                                                      @foreach ($classes as $id=>$value)
                                                         <option @isset($sections)
                                                         {{$sections->class_id == $id ? "selected" : "" }}
                                                         @endisset value="{{ $id }}">{{$value}}</option>
                                                      @endforeach
                                                  </select>
                                              </div>
                                          </div>
                                    </div><!-- End Col md-6 -->
                                  </div> <!-- End row -->

                                <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <label class="block" for="teacher_id">Teacher Name</label>
                                            <div class="controls">
                                                <select name="teacher_id" id="teacher_id" class="form-control">
                                                    <option value="">Select Teacher</option>
                                                    @foreach ($teachers as $id=>$value)
                                                       <option @isset($sections)
                                                       {{$sections->teacher_id == $id ? "selected" : "" }}
                                                       @endisset value="{{ $id }}">{{$value}}</option>
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
                                            <input type="text" name="note" class="form-control" value="{{old('note',isset($sections)?$sections->note:"")}}" > <div class="help-block"></div></div>
                                      </div>
                                  </div><!-- End Col md-6 -->
                                </div> <!-- End row-->
                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-success" value="Update Section">

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
