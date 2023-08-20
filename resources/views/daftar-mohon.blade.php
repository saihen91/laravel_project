@extends('layout/template')

@section('content')

<!-- insert form -->
<div class="row">
    <div class="card col-xl-12">
        <div class="card-header">
            <legend class="text-uppercase font-size-lg font-weight-bold">Daftar Permohonan Baru</legend>
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


@endsection