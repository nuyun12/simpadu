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
                    <h3 class="mb-0">Dashboard</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                            <h3 class="card-title">Data Mahasiswa</h3>
                            <div class="card-tools">
                                <a href="mahasiswa/create" class="btn btn-primary">Tambah</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Telp</th>
                                            <th>namaProdi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    @foreach ($mahasiswa as $m) 
                                        <tr>
                                            <td>{{ $loop-> iteration }}</td>
                                            <td>{{ $m->nim }}</td>
                                            <td>{{ $m->nama }}</td>
                                            <td>{{ $m->telp }}</td>
                                            <td>{{ $m->prodi->nama }}</td>
                                            <td> <img src="{{ asset('storage/' . $m->foto) }}" width="100px"
                                            height="100px" /> </td>
                                            <td><a href="{{ url("mahasiswa/$m->nim/edit") }}" 
                                            class="btn btn-warning">Edit</a>
                                        <form action="{{  url("mahasiswa/$m->nim") }}" method="post"
                                            class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger"
                                                onclick="return confirm('Yakin mau delete?' )">Hapus</button>
                                     </form>
                                 </td> 
                                 <tr> </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <a href="logout.php">keluar</a>
                                </table>
                            </div>
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