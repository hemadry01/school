@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">
      <!-- Main content -->
      <section class="content">
        <div class="row">

            <div class="box">
                <div class="box-header with-border">
                  <h5 class="box-title">Update Subject Information</h5>
                  <a href="{{route("subjects.index")}}" style="float: right" class="btn btn-rounded btn-success mb-5">Class</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col">
                        <form action="{{route('subjects.update',$subjects->id)}}" method="POST">
                            @csrf
                            @method("PUT")

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="block" for="teacher_id">Class Name</label>
                                              <div class="controls">
                                                  <select name="class_id" id="class_id" class="form-control">
                                                      <option value="">Select Class</option>
                                                      @foreach ($classes as $id=>$value)
                                                         <option @isset($subjects)
                                                         {{$subjects->class_id == $id ? "selected" : "" }}
                                                         @endisset value="{{ $id }}">{{$value}}</option>
                                                      @endforeach
                                                  </select>
                                              </div>
                                          </div>
                                    </div><!-- End Col md-6 -->
                                </div><!-- End row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="block" for="teacher_id">Teacher Name</label>
                                          <select name="teacher_id" id="teacher_id" class="form-control">
                                                <option value=""></option>
                                                @foreach ($teachers as $id=>$value )
                                                    <option @isset($subjects)
                                                    {{$subjects->teacher_id == $id ? "selected":""}}
                                                    @endisset value="{{$id}}">{{$value}}</option>
                                                @endforeach
                                          </select>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                </div> <!-- End row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="block" for="type">Type</label>
                                          <div class="controls">
                                              <select name="type" id="type" class="form-control">
                                                    <option value="">Select Type</option>
                                                    <option value="Optional"{{$subjects->type =="Optional" ? 'selected' : '' }} >Optional</option>
                                                    <option value="Mandatory"{{$subjects->type =="Mandatory" ? 'selected' : '' }} >Mandatory</option>
                                              </select>
                                          </div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                </div> <!-- End row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="block" for="pass_mark">Pass Mark</label>
                                              <div class="controls">
                                                <input type="text" name="pass_mark" class="form-control" value="{{old('pass_mark',isset($subjects)?$subjects->pass_mark:"")}}"> <div class="help-block"></div>
                                              </div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                  </div> <!-- End row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label class="block" for="final_mark">Final Mark</label>
                                              <div class="controls">
                                                  <input type="text" name="final_mark" class="form-control" value="{{old('final_mark',isset($subjects)?$subjects->final_mark:"")}}"> <div class="help-block"></div>
                                              </div>
                                          </div>
                                    </div><!-- End Col md-6 -->
                                </div> <!-- End row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                              <label class="block" for="subject_name">Subject Name</label>
                                              <div class="controls">
                                                  <input type="text" name="subject_name" class="form-control" value="{{old('subject_name',isset($subjects)?$subjects->subject_name:"")}}" > <div class="help-block"></div>
                                              </div>
                                          </div>
                                      </div><!-- End Col md-6 -->
                                </div> <!-- End row-->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                              <label class="block" for="subject_author">Subject Author</label>
                                              <div class="controls">
                                                  <input type="text" name="subject_author" class="form-control" value="{{old('subject_author',isset($subjects)?$subjects->subject_author:"")}}" > <div class="help-block"></div>
                                              </div>
                                        </div>
                                    </div><!-- End Col md-6 -->
                                </div> <!-- End row-->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                              <label class="block" for="subject_code">Subject Code</label>
                                              <div class="controls">
                                                  <input type="text" name="subject_code" class="form-control" value="{{old('subject_code',isset($subjects)?$subjects->subject_code:"")}}"> <div class="help-block"></div>
                                              </div>
                                          </div>
                                      </div><!-- End Col md-6 -->
                                  </div> <!-- End row-->

                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-success" value="Update Subject">

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
