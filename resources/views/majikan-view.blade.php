@extends('layout/template')

@section('content')

<!-- Main charts -->
<div class="row">
    <!-- Basic datatable -->

    <div class="col-xl-3">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Update Kod Majikan</h5>
            </div>
            <div class="card-body">
                <form method="post" action="/tambah-majikan">
                    @CSRF
					<div class="form-group">
						<label>Kod Majikan:</label>
						<input type="text" name="kod_majikan" class="form-control" placeholder="" value="">
					</div>
					<div class="form-group">
						<label>Nama Majikan:</label>
						<input type="text" name="nama_majikan" class="form-control" placeholder="" value="">
					</div>
					<div class="form-group">
						<label>Alamat Majikan:</label>
						<textarea rows="5" name="alamat_majikan" cols="5" class="form-control" placeholder=""></textarea>
					</div>
					<div class="text-right">
						<button type="submit" class="btn btn-primary">Kemaskini <i class="icon-paperplane ml-2"></i></button>
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
                @php
                    $number = 1;
                @endphp
                @foreach ($majikanData as $majikan)
                    <td>{{ $number }}</td>
                    <td>{{ $majikan->kod_majikan }}</td>
                    <td>{{ $majikan->nama_majikan }}</td>
                    <td>{{ $majikan->alamat_majikan }}</td>
                    <td class="text-center">
                        <div class="list-icons">
                            <a href="/majikan/view/{{$majikan->id}}" class="list-icons-item" data-popup="tooltip" title="Kemaskini" data-container="body">
                                <i class="icon-pencil7"></i>
                            </a>
                            <form action="/delete-majikan/{{$majikan->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="list-icons-item"><i class="icon-trash"></i></button>
                            </form>
                        </div>
                    </td>
                    <td></td>
                </tr>
                @php
                    $number++;
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /basic datatable -->

</div>
<!-- /dashboard content -->

@endsection