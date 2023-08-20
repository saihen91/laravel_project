@extends('layout/template')

@section('content')

<!-- Main charts -->
<div class="row">
    <!-- Basic datatable -->
    <div class="card col-xl-12">
        <div class="card-header">
            <legend class="text-uppercase font-size-lg font-weight-bold">Senarai Permohonan Baru</legend>
            <div class="float-right"><a href="/daftar-mohon"><button class="btn btn-success"><i class="icon-plus3"></i> Daftar Permohonan Baru</button></a></div>
        </div>
        <table class="table datatable-basic">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Kad Pengenalan</th>
                    <th>Jawatan</th>
                    <th>Majikan</th>
                    <th>Gaji</th>
                    <th>Tarikh Daftar</th>
                    <th class="text-center">Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>MOHAMAD SAIFUL BIN JUAHIR</td>
                    <td>911122016623</td>
                    <td>PENOLONG PENGURUS</td>
                    <td>KOPERASI ANGGOTA-ANGGOTA KERAJAAN BATU PAHAT BERHAD</td>
                    <td>RM2,000</td>
                    <td>17/8/2023</td>
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
                    <td>SAMAD BIN HARUN</td>
                    <td>922345018746</td>
                    <td>PENOLONG TADBIR KANAN</td>
                    <td>RANHILL SDN BHD</td>
                    <td>RM3,500</td>
                    <td>17/8/2023</td>
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
                    <td>AZILAH BINTI SUMARDI</td>
                    <td>892321027865</td>
                    <td>PENGURUS</td>
                    <td>TNB BHD</td>
                    <td>RM5,000</td>
                    <td>17/8/2023</td>
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