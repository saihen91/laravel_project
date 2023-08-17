@extends('layout/template')

@section('content')

<!-- insert form -->
<div class="row">
    <div class="card col-xl-12">
        <div class="card-header">
            <legend class="text-uppercase font-size-lg font-weight-bold">Daftar Pengguna Baru</legend>
        </div>
        <form method="post" action="/add-pengguna">
            <div class="form-group row">
                <div class="col-lg-3">
                    <input name="nama" type="text" class="form-control" placeholder="Nama pengguna...">
                </div>
                <div class="col-lg-2">
                    <input name="username" type="text" class="form-control" placeholder="Username...">
                </div>
                <div class="col-lg-2">
                    <input name="password" type="password" class="form-control" placeholder="Kata laluan...">
                </div>
                <div class="col-lg-2">
                    <select name="bahagian" class="form-control">
                        <option value="">Bahagian...</option>
                        <option value="pejabat">PEJABAT</option>
                        <option value="arrahnu">ARRAHNU</option>
                        <option value="kedai">KEDAI</option>
                        <option value="kewangan">KEWANGAN</option>
                        <option value="kaunter_1">KAUNTER 1</option>
                        <option value="kaunter_2">KAUNTER 2</option>
                        <option value="kaunter_3">KAUNTER 3</option>
                        <option value="kaunter_4">KAUNTER 4</option>
                        <option value="kaunter_5">KAUNTER 5</option>
                        <option value="kaunter_6">KAUNTER 6</option>
                    </select>
                </div>
                <div class="col-lg-3">
                    <input name="jawatan" type="text" class="form-control" placeholder="Jawatan...">
                </div>
            </div>
            <div class="text-center mb-3">
                <a href=""><button type="button" class="btn btn-success rounded-pill"><i class="icon-pencil7 mr-2"></i> Tambah Pengguna</button></a>
            </div>
        </form>
    </div>
</div>
<!-- /insert form -->

<!-- Main charts -->
<div class="row">
    <!-- Basic datatable -->
    <div class="card col-xl-12">
        <div class="card-header">
            <legend class="text-uppercase font-size-lg font-weight-bold">Senarai Pengguna</legend>
        </div>
        <table class="table datatable-basic">
            <thead>
                <tr>
                    <th>Nama Pengguna</th>
                    <th>Username</th>
                    <th>Bahagian</th>
                    <th>Jawatan</th>
                    <th>Status</th>
                    <th class="text-center">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mohamad Saiful Bin Juahir</td>
                    <td>saiful91</td>
                    <td>Pejabat</td>
                    <td>Penolong Pengurus</td>
                    <td><span class="badge badge-success">Online</span></td>
                    <td class="text-center">
                        <div class="list-icons">
                            <a href="#" class="list-icons-item" data-popup="tooltip" title="Kemaskini" data-container="body">
                                <i class="icon-pencil7"></i>
                            </a>
                            <a href="#" class="list-icons-item" data-popup="tooltip" title="Padam" data-container="body">
                                <i class="icon-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Cicely</td>
                    <td>Sigler</td>
                    <td><a href="#">Senior Research Officer</a></td>
                    <td>15 Mar 1960</td>
                    <td><span class="badge badge-danger">Offline</span></td>
                    <td class="text-center">
                        <div class="list-icons">
                            <a href="#" class="list-icons-item" data-popup="tooltip" title="Kemaskini" data-container="body">
                                <i class="icon-pencil7"></i>
                            </a>
                            <a href="#" class="list-icons-item" data-popup="tooltip" title="Padam" data-container="body">
                                <i class="icon-trash"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /basic datatable -->

</div>
<!-- /dashboard content -->

@endsection