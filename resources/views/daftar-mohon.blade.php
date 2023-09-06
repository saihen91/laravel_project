@extends('layout/template')

@section('content')

<div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Daftar Anggota</h3>
            </div>
            <div class="card-body">
            <h4 align="center" style="text-transform:capitalize;font-family:Arial;color: #F78205;"><b>PROFIL PERIBADI</b></h4>
            <hr />
                <form action="controller/daftar-anggota.php" method="post">

                <div class="form-group row">
                    <label for="nama_anggota" class="col-sm-2 col-form-label text-right">Nama Anggota :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" placeholder="">
                    </div>
                    <label for="no_anggota" class="col-sm-2 col-form-label text-right">No. Anggota :</label>
                                        <div class="col-sm-3">
                        <input type="text" class="form-control" id="no_anggota" name="no_anggota" value="" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nokp1" class="col-sm-2 col-form-label text-right">Kad Pengenalan :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="nokp1" name="nokp1" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="umur" class="col-sm-2 col-form-label text-right">Tarikh Lahir :</label>
                    <div class="input-group date col-sm-4" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" id="tarikh_lahir" name="tarikh_lahir" data-target="#reservationdate" />
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                    <label for="umur" class="col-sm-2 col-form-label text-right">Umur :</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="umur" name="umur" placeholder="" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="bangsa" class="col-sm-2 col-form-label text-right">Bangsa :</label>
                    <div class="col-sm-4">
                        <select class="form-control" id="bangsa" name="bangsa">
                            <option value="">--Sila Pilih--</option>
                            <option value="Melayu">Melayu</option>
                            <option value="Cina">Cina</option>
                            <option value="India">India</option>
                            <option value="Lain-lain">Lain-lain</option>
                        </select>
                    </div>
                    <label for="jantina" class="col-sm-2 col-form-label text-right">Jantina :</label>
                    <div class="col-sm-3">
                        <select class="form-control" id="jantina" name="jantina">
                            <option value="">--Sila Pilih--</option>
                            <option value="LELAKI">LELAKI</option>
                            <option value="PEREMPUAN">PEREMPUAN</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="agama" class="col-sm-2 col-form-label text-right">Agama :</label>
                    <div class="col-sm-4">
                        <select class="form-control" id="agama" name="agama">
                            <option value="">--Sila Pilih--</option>
                            <option value="ISLAM">ISLAM</option>
                            <option value="KRISTIAN">KRISTIAN</option>
                            <option value="BUDDHA">BUDDHA</option>
                            <option value="HINDU">HINDU</option>
                            <option value="LAIN_LAIN">LAIN-LAIN</option>
                        </select>
                    </div>
                </div>
                <hr />
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label text-right">Alamat :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="poskod" class="col-sm-2 col-form-label text-right">Poskod :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="poskod" name="poskod" placeholder="">
                    </div>
                    <label for="fon_rumah" class="col-sm-2 col-form-label text-right">No. Telefon(Rumah) :</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="fon_rumah" name="fon_rumah" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="bandar" class="col-sm-2 col-form-label text-right">Bandar :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="bandar" name="bandar" placeholder="">
                    </div>
                    <label for="fon_hp" class="col-sm-2 col-form-label text-right">No. Telefon(H/P) :</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="fon_hp" name="fon_hp" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="negeri" class="col-sm-2 col-form-label text-right">Negeri :</label>
                    <div class="col-sm-4">
                        <select class="form-control" id="negeri" name="negeri">
                            <option value="">--Sila Pilih--</option>
                            <option value="Johor">Johor</option>
                            <option value="Melaka">Melaka</option>
                            <option value="Negeri Sembilan">Negeri Sembilan</option>
                            <option value="Selangor">Selangor</option>
                            <option value="Kuala Lumpur">Kuala Lumpur</option>
                            <option value="Putrajaya">Putrajaya</option>
                            <option value="Perak">Perak</option>
                            <option value="Kedah">Kedah</option>
                            <option value="Perlis">Perlis</option>
                            <option value="Kelantan">Kelantan</option>
                            <option value="Terengganu">Terengganu</option>
                            <option value="Pahang">Pahang</option>
                            <option value="Sabah">Sabah</option>
                            <option value="Sarawak">Sarawak</option>
                            <option value="Labuan">Labuan</option>
                        </select>
                    </div>
                </div>
                <hr />
                <h4 align="center" style="text-transform:capitalize;font-family:Arial;color: #F78205;"><b>MAKLUMAT PEKERJAAN , MAJIKAN DAN AKAUN BANK</b></h4>
                <div class="form-group row">
                    <label for="jawatan" class="col-sm-2 col-form-label text-right">Jawatan :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="jawatan" name="jawatan" placeholder="">
                    </div>
                    <label for="kod_majikan" class="col-sm-2 col-form-label text-right">Kod Majikan :</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="kod_majikan" name="kod_majikan" placeholder="">
                    </div>
                    <div class="col-sm-2">
                        <a class="btn btn-danger" onClick="kodMajikan()">    Semak    </a>
                    </div> 
                </div>
                <div class="form-group row">
                    <label for="mula_kerja" class="col-sm-2 col-form-label text-right">Tarikh Mula Bekerja :</label>
                    <div class="input-group date col-sm-4" id="mula_kerja" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" id="tarikh_kerja" name="tarikh_kerja" data-target="#reservationdate" />
                        <div class="input-group-append" data-target="" data-toggle="">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                    <label for="nama_majikan" class="col-sm-2 col-form-label text-right">Nama Majikan :</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="nama_majikan" name="nama_majikan" placeholder="" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="taraf_jawatan" class="col-sm-2 col-form-label text-right">Taraf Jawatan :</label>
                    <div class="col-sm-4">
                        <select class="form-control" id="taraf_jawatan" name="taraf_jawatan">
                            <option value="">--Sila Pilih--</option>
                            <option value="TETAP DAN BERPENCEN">TETAP DAN BERPENCEN</option>
                            <option value="TETAP">TETAP</option>
                            <option value="KONTRAK">KONTRAK</option>
                            <option value="GAJI HARI">GAJI HARI</option>
                            <option value="SAMBILAN">SAMBILAN</option>
                        </select>
                    </div>
                    <label for="alamat_majikan" class="col-sm-2 col-form-label text-right">Alamat Majikan :</label>
                    <div class="col-sm-3">
                        <textarea class="form-control" rows="3" placeholder="" id="alamat_majikan" name="alamat_majikan" disabled></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_gaji" class="col-sm-2 col-form-label text-right">No Gaji :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="no_gaji" name="no_gaji" placeholder="">
                    </div>
                    <label for="fon_pejabat" class="col-sm-2 col-form-label text-right">No. Telefon(Pejabat) :</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="fon_pejabat" name="fon_pejabat" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gaji_pokok" class="col-sm-2 col-form-label text-right">Gaji Pokok :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="gaji_pokok" name="gaji_pokok" placeholder="">
                    </div>
                    <label for="no_akaun" class="col-sm-2 col-form-label text-right">No Akaun Bank :</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="no_akaun" name="no_akaun" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label text-right"></label>
                    <div class="col-sm-4">
                    </div>
                    <label for="nama_bank" class="col-sm-2 col-form-label text-right">Nama Bank :</label>
                    <div class="col-sm-3">
                        <select class="form-control" id="nama_bank" name="nama_bank">
                            <option value="">--Sila Pilih--</option>
                            <option value="CIMB">CIMB</option>
                            <option value="PUBLIC BANK">PUBLIC BANK</option>
                            <option value="MAYBANK">MAYBANK</option>
                            <option value="RHB BANK">RHB BANK</option>
                        </select>
                    </div>
                </div>
                <hr />
                <h4 align="center" style="text-transform:capitalize;font-family:Arial;color: #F78205;"><b>WARIS ANGGOTA</b></h4>
                <div class="form-group row">
                    <label for="nama_waris" class="col-sm-2 col-form-label text-right">Nama Waris :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama_waris" name="nama_waris" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nokp_waris" class="col-sm-2 col-form-label text-right">No. Kad Pengenalan :</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="nokp_waris" name="nokp_waris" placeholder="">
                    </div>
                    <label for="hubungan_waris" class="col-sm-2 col-form-label text-right">Hubungan :</label>
                    <div class="col-sm-3">
                        <select class="form-control" id="hubungan_waris" name="hubungan_waris">
                            <option value="">--Sila Pilih--</option>
                            <option value="SUAMI">SUAMI</option>
                            <option value="ISTERI">ISTERI</option>
                            <option value="ANAK">ANAK</option>
                            <option value="ANGGOTA">ANGGOTA</option>
                            <option value="IBU">IBU</option>
                            <option value="BAPA">BAPA</option>
                            <option value="ADIK">ADIK</option>
                            <option value="ABANG">ABANG</option>
                            <option value="KAKAK">KAKAK</option>
                            <option value="SAUDARA">SAUDARA</option>
                        </select>
                    </div>
                </div>
                <hr />
                <h4 align="center" style="text-transform:capitalize;font-family:Arial;color: #ff0000;"><b>URUSAN PEJABAT</b></h4>
                <div class="form-group row">
                    <label for="status_mohon" class="col-sm-2 col-form-label text-right">Status Permohonan :</label>
                    <div class="col-sm-4">
                        <select class="form-control" id="status_mohon" name="status_mohon">
                            <option value="">--Sila Pilih--</option>
                            <option value="DALAM PROSES">DALAM PROSES</option>
                            <option value="LULUS">LULUS</option>
                            <option value="GAGAL">GAGAL</option>
                            <option value="BARU">BARU</option>
                            <option value="ONLINE">ONLINE</option>
                        </select>
                    </div>
                    <label for="tarikh_mesyuarat" class="col-sm-2 col-form-label text-right">Tarikh Mesyuarat :</label>
                    <div class="input-group date col-sm-3" id="#reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" id="tarikh_mesyuarat" name="tarikh_mesyuarat" data-target="#reservationdate" />
                        <div class="input-group-append" data-target="" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="status_anggota" class="col-sm-2 col-form-label text-right">Status Anggota :</label>
                    <div class="col-sm-4">
                        <select class="form-control" id="status_anggota" name="status_anggota">
                            <option value="">--Sila Pilih--</option>
                            <option value="ANGGOTA AKTIF-BEKERJA">ANGGOTA AKTIF-BEKERJA</option>
                            <option value="ANGGOTA AKTIF-PESARA">ANGGOTA AKTIF-PESARA</option>
                            <option value="ANGGOTA AKTIF-POTONGAN TERHENTI">ANGGOTA AKTIF-POTONGAN TERHENTI</option>
                            <option value="ANGGOTA BERHENTI">ANGGOTA BERHENTI</option>
                            <option value="ANGGOTA-TRIBUNAL">ANGGOTA-TRIBUNAL</option>
                            <option value="BEKAS ANGGOTA/ANGGOTA-TIADA TRANSAKSI">BEKAS ANGGOTA/ANGGOTA-TIADA TRANSAKSI</option>
                            <option value="NPL">NPL</option>
                        </select>
                    </div>
                    <label for="tarikh_mohon" class="col-sm-2 col-form-label text-right">Tarikh Mohon :</label>
                    <div class="input-group date col-sm-3" id="#reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" id="tarikh_mohon" name="tarikh_mohon" data-target="#reservationdate" />
                        <div class="input-group-append" data-target="" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <div id="form-footer" class="card-footer text-right">
                    <button type="submit" id="simpan" name="simpan" class="btn btn-primary">Simpan</button>
                    <!-- <input type="hidden" name="simpan" id="method" value="">
                    <input type="hidden" name="id_institusi" id="id_institusi" value=""> -->
                </div>

                </form>
            </div>
        </div>
    </div>


@endsection