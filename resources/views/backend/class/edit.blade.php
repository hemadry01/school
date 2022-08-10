@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">
      <!-- Main content -->
      <section class="content">
        <div class="row">

            <div class="box">
                <div class="box-header with-border">
                  <h5 class="box-title">Update Class Information</h5>
                  <a href="{{route("classes.index")}}" style="float: right" class="btn btn-rounded btn-success mb-5">Class</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col">
                        <form action="{{route('classes.update',$class->id)}}" method="POST">
                            @csrf
                            @method("PUT")

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="block" for="class_name">Class </label>
                                            <div class="controls">
                                                <input type="text" name="class_name" class="form-control" value="{{old('class_name',isset($class)?$class->class_name:"")}}"> <div class="help-block"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End row -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="block" for="class_numeric">Class Numeric</label>
                                          <div class="controls">
                                              <input type="text" name="class_numeric" class="form-control" value="{{old('class_numeric',isset($class)?$class->class_numeric:"")}}"> <div class="help-block"></div></div>
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
                                                       {{-- <option value="{{$id}}">{{$value}}</option> --}}
                                                       <option @isset($class)
                                                       {{$class->teacher_id == $id ? "selected" : "" }}
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
                                            <input type="text" name="note" class="form-control" value="{{old('note',isset($class)?$class->note:"")}}" > <div class="help-block"></div></div>
                                      </div>
                                  </div><!-- End Col md-6 -->
                                </div> <!-- End row-->
                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-success" value="Update Class">

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
