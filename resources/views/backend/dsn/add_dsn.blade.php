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
                    <h4 class="box-title">Tambah Dosen</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form method="post" action="{{route('dsnStore')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <!--end colmd6-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Nama <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="textNama" class="form-control" id="nama" required data-validation-required-message="This field is required">
                                            </div>
                                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                                        </div>
                                    </div>
                                    <!--end colmd6-->
                                    <!--end colmd6-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>NIP <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="NIP" class="form-control" id="nip" required data-validation-required-message="This field is required">
                                            </div>
                                            <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                                        </div>
                                    </div>
                                    <!--end colmd6-->
                                </div>
                                <!-- END row select -->

                                <div class="row">
                                    <div class="col md-6">
                                        <div class="form-group">
                                            <h5>Jabatan<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="jabatan" class="form-control" id="jurusan" required data-validation-required-message="This field is required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col md-6">
                                    <div class="form-group">
                                        <h5>Email<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="email" name="email" class="form-control" id="email" required data-validation-required-message="This field is required">
                                        </div>
                                    </div>
                                    </div>
                                    <!-- <div class="col md-6">
                                    <div class="from-group">
                                        <strong>harga:</strong>
                                        <input type="file" name="file" class="from-control" placeholder="Gambar">
                                        @error('file')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div> -->
                                </div>

                                
                                
                                <!-- <div class="col md-6">
                                    <div class="from-group">
                                        <strong>harga:</strong>
                                        <input type="file" name="file" class="from-control" placeholder="Gambar">
                                        @error('file')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div> -->

                                
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