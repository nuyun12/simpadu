@extends('template.main')
@section('content')
    <!--begin::App Main-->
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Create Data Prodi</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">Data Prodi</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Create Data Prodi</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="{{ url("prodi/$prodi->id") }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- /.card-body -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama prodi">Nama Prodi</label>
                                    <select name="nama" class="form-control" required> 
                                        <option value="">Pilih Prodi</option>
                                        @foreach ($listprodi as $p)
                                        <option value="{{ $p->nama }}" {{ $prodi->nama == $p->nama }}>
                                            {{ $p->nama }}
                                        </option>
                                        @endforeach
                                </div>
                                @enderror
                            </div>
                                <div class="form-group">
                                    <label for="Jurusan">Jurusan</label>
                                    <select name="Jurusan" 
                                        class="form-control" required>
                                        <option value="">Pilih Jurusan</option>
                                        @foreach ($prodi as $jurusan)
                                        <option value="{{ $jurusan }}"
                                        {{ ($prodi->jurusan == $jurusan) ? 'selected' : '' }}>
                                        @endforeach
                                </select>
                                <div class="form-group">
                                    <label for="nama">Nama Mahasiswa</label>
                                    <input type="text" name="nama" id="nama" 
                                        class="form-control @error('nama') is-invalid @enderror">
                                    <div class="invalid-feedback">
                                        @error('nama')
                                        {{ $message }}  
                                </div>
                                @enderror
                                <div class="card-footer">
                                    <a herf="{{ url('prodi') }}" class="btn btn-warning">Kembali</a>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                        </form>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->

                    <!-- /.card -->
                </div>
                <!-- /.col -->


                <!-- /.col -->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content-->
</main>
<!--end::App Main-->
@endsection