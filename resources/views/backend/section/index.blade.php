@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Bootstrap Tables</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Tables</li>
								<li class="breadcrumb-item active" aria-current="page">Basic Tables</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">

		  <div class="row">

			<div class="col-12">
			  <div class="box">
				<div class="box-header with-border">
                    <div class="row">
                        <div class="col-4">
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
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="controls">
                                    <a href="{{route("sections.create")}}" style="float: right" class="btn btn-rounded btn-success mb-5">Add Section</a>
                                </div>
                            </div>
                        </div><!-- End Col md-6 -->

				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive-sm">
					  <table class="table mb-0">
						<thead>
                            <tr>
                                <th width="5%">SL</th>
                                <th>Section</th>
                                <th>Category</th>
                                <th>Capacity</th>
                                <th>Teacher Name</th>
                                <th>Note</th>
                                <th>Action</th>
                            </tr>
                        </thead>
						<tbody>
                            @foreach ($sections as $key=>$section )


                              <tr>
                                  <td>{{$key+1}}</td>
                                  <td>{{$section->section_name}}</td>
                                  <td>{{$section->category}}</td>
                                  <td>{{$section->capacity}}</td>
                                  <td>{{$section->teacher->name}}</td>
                                  <td>{{$section->note}}</td>
                                  <td>
                                    <a href="{{route("sections.edit",$section->id)}}" class="btn btn-warning btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                  </td>

                              </tr>

                              @endforeach
                          </tbody>
					  </table>
					</div>

				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
		  </div>
		  <!-- /.row -->

		</section>
		<!-- /.content -->
	  </div>
</div>


@endsection
