@extends('admin.admin_master')
@section('admin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Tambah Mahasiswa</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form method="post" action="{{route('buku.update', $editData->id)}}" >
                                @csrf

                                <div class="row">
                                    <div class="col md-6">
                                        <div class="form-group">
                                            <h5>Kode Buku<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="kodeBuku" value="{{$editData->kodeBuku}}" class="form-control" id="kelas" required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col md-6">
                                    <div class="form-group">
                                        <h5>Judul Buku<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="judulBuku" value="{{$editData->judulBuku}}" class="form-control" id="prodi" required data-validation-required-message="This field is required">
                                        </div>
                                    </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col md-6">
                                        <div class="form-group">
                                            <h5>Nama Pengarang<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="namaPengarang" value="{{$editData->namaPengarang}}" class="form-control" id="jurusan" required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- end row  -->
                                <div class="text-xs-right">
                                    <button type="submit" class="btn btn-rounded btn-info">Submit</button>
                                </div>
                            </form>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
</div>
<!-- /.content-wrapper -->

@endsection

<script src="{{asset('backend/js/pages/form-validation.js')}}"></script>