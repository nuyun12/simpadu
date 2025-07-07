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
                    <h3 class="mb-0">Edit Data Prodi</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('prodi') }}">Data Prodi</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit </li>
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
                            <h3 class="card-title">Edit Data Prodi</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="{{ url("prodi/  $prodi->id") }}" method="post">
                            @csrf
                            @method('put')

                            <!-- /.card-body -->
                        <div class="card-body">
                                 <div class="form-group">
                                    <label for="prodi">Prodi</label>
                                    <select name="nama" class="form-control">
                                        <option value="">Pilih Prodi</option>
                                    @foreach ($listprodi as $item)
                                    <option value="{{ $item }}" {{ $prodi['nama'] == $item  }}>
                                    {{ $item }}
                                     </option>
                                    @endforeach
                                    </select>
                                    </div>

                                    <div class="form-group">
                                    <label for="kaprodi">Kaprodi</label>
                                    <input type="nama" class="form-control">
                                     </option>
                                    </select>
                                    </div>

                                 <div class="form-group">
                                   <label for="jurusan">Jurusan</label>
                                    <select name="jurusan" class="form-control">
                                        <option value="">Pilih Jurusan</option>
                                     @foreach ($listjurusan as $jurusan)
                                    <option value="{{ $jurusan }}" {{ ($prodi['jurusan'] == $jurusan) }}>
                                     {{ $jurusan }}
                                    </option>
                                    @endforeach
                                 </select>
                                </div>

                                <div class="card-footer">
                                    <a href="{{ url('prodi') }}" class="btn btn-warning">Edit</a>
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