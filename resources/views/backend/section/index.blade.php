@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">
		<!-- Content Header (Page header) -->
		
		<!-- Main content -->
		<section class="content">

		  <div class="row">

			<div class="col-12">
			  <div class="box">

                <div class="box-header with-border">
                    <h3 class="box-title">Section</h3>
                    <a href="{{route("sections.create")}}" style="float: right" class="btn btn-rounded btn-success mb-5">Add Section</a>
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
