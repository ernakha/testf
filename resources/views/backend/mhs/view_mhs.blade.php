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
				  <h3 class="box-title">Data Mahasiswa</h3>
                  <a href="{{route('mhs.add')}}" style="float:right;" type="button" class="btn btn-outline btn-success mb-5">Tambah User</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Id</th>
								<th>Nama</th>
								<th>NIM</th>
								<th>Kelas</th>
								<th>Program Studi</th>
								<th>Jurusan</th>
								<th>Tanggal Lahir</th>
								<th>Aksi</th>
								
							</tr>
						</thead>
						<tbody>
                            @foreach($allDataMhs as $key => $mhs)
							<tr>
								<td>{{$key+1}}</td>
								<td>{{$mhs->nama}}</td>
								<td>{{$mhs->nim}}</td>
								<td>{{$mhs->kelas}}</td>
								<td>{{$mhs->prodi}}</td>
								<td>{{$mhs->jurusan}}</td>
								<td>{{$mhs->lahir}}</td>
								<td>
                                    <a href="{{route('mhs.edit', $mhs->id)}}" class="btn btn-info">Edit</a>
                                    <a href="{{route('mhs.delete', $mhs->id)}}" id="delete" class="btn btn-danger">Delete</a>
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