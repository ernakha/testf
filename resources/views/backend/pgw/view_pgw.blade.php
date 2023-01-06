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
				  <h3 class="box-title">Data Pegawai</h3>
                  <a href="{{route('pgw.add')}}" style="float:right;" type="button" class="btn btn-outline btn-success mb-5">Tambah Pegawai</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Id</th>
								<th>Nama</th>
								<th>NIK</th>
								<th>Bagian</th>
								<th>No Telepon</th>
								<th>Aksi</th>
								
							</tr>
						</thead>
						<tbody>
                            @foreach($allDataPgw as $key => $pgw)
							<tr>
								<td>{{$key+1}}</td>
								<td>{{$pgw->nama}}</td>
								<td>{{$pgw->nik}}</td>
								<td>{{$pgw->bagian}}</td>
								<td>{{$pgw->telp}}</td>
								<td>
                                    <a href="{{route('pgw.edit', $pgw->id)}}" class="btn btn-info">Edit</a>
                                    <a href="{{route('pgw.delete', $pgw->id)}}" id="delete" class="btn btn-danger">Delete</a>
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