@extends('layout/template')

@section('content')

<!-- Main charts -->
<div class="row">
    <!-- Basic datatable -->

    <div class="col-xl-3">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Tambah Kod Majikan</h5>
            </div>
            <div class="card-body">
                <form method="post" action="/tambah-majikan">
                    @CSRF
					<div class="form-group">
						<label>Kod Majikan:</label>
						<input type="text" name="kod_majikan" class="form-control" placeholder="">
					</div>
					<div class="form-group">
						<label>Nama Majikan:</label>
						<input type="text" name="nama_majikan" class="form-control" placeholder="">
					</div>
					<div class="form-group">
						<label>Alamat Majikan:</label>
						<textarea rows="5" name="alamat_majikan" cols="5" class="form-control" placeholder=""></textarea>
					</div>
					<div class="text-right">
						<button type="submit" class="btn btn-primary">Simpan <i class="icon-paperplane ml-2"></i></button>
					</div>
				</form>
            </div>
        </div>
    </div>

    <div class="card col-xl-9">
        <table class="table datatable-basic">
            <thead>
                <tr>
                
                    <th>Bil.</th>
                    <th>Kod Majikan</th>
                    <th>Nama Majikan</th>
                    <th>Alamat Majikan</th>
                    <th class="text-center">Tindakan</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                
                    <td>1</td>
                    <td>JB02220009</td>
                    <td>JABATAN AGAMA JOHOR (BHGN PENDIDIKAN AGAMA)</td>
                    <td>80990, JOHOR BAHRU, JOHOR DARUL TAKZIM</td>
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
                    <td></td>
                </tr>
                <tr>
                
                    <td>2</td>
                    <td>JB02080004</td>
                    <td>JABATAN PENGAIRAN & SALIRAN DAERAH BATU PAHAT</td>
                    <td>JALAN BAKAU CHONDONG, 83000, BATU PAHAT, JOHOR DARUL TAKZIM</td>
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
                    <td></td>
                </tr>
                <tr>
                
                    <td>3</td>
                    <td>JB02080007</td>
                    <td>JABATAN PENGAIRAN & SALIRAN PONTIAN</td>
                    <td>82000, PONTIAN, JOHOR DARUL TAKZIM</td>
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
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /basic datatable -->

</div>
<!-- /dashboard content -->

@endsection