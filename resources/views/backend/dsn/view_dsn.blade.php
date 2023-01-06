@extends('admin.admin_master')

@section('admin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->


		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Data Dosen</h3>
                  <a href="{{route('dsn.add')}}" style="float:right;" type="button" class="btn btn-outline btn-success mb-5">Tambah Dosen</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Id</th>
								<th>Nama</th>
								<th>NIP</th>
								<th>Jabatan</th>
								<th>Email</th>
								<th>Aksi</th>
								
							</tr>
						</thead>
						<tbody>
                            @foreach($allDataDsn as $key => $dsn)
							<tr>
								<td>{{$key+1}}</td>
								<td>{{$dsn->nama}}</td>
								<td>{{$dsn->nip}}</td>
								<td>{{$dsn->jabatan}}</td>
								<td>{{$dsn->email}}</td>
								<td>
                                    <a href="{{route('dsn.edit', $dsn->id)}}" class="btn btn-info">Edit</a>
                                    <a href="{{route('dsn.delete', $dsn->id)}}" id="delete" class="btn btn-danger">Delete</a>
                                </td>
								
							</tr>
                            @endforeach
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			  <!-- /.box -->          
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
  <!-- /.content-wrapper -->



@endsection

<!-- Vendor JS -->
	<script src="{{asset('../assets/vendor_components/datatable/datatables.min.js')}}"></script>
	<script src="{{asset('backend/js/pages/data-table.js')}}"></script>