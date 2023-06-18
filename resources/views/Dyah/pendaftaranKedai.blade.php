@extends('template')
@section('atas')
<div class="page-wrapper p-t-100 p-b-50 " style="background-color: #7FBCD2">
    <div class="wrapper wrapper--w900">
        <div class="card card-6">
            <div class="card-heading">
                <h2 class="title-kedai">Pendaftaran Kedai</h2>
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="form-row">
                        <div class="name">Nama Kedai</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="full_name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Alamat</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-6" type="email" name="email" placeholder="Jl Mencintaimu seluruh hatiku">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Deskripsi/keterangan</div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="textarea--style-6" name="message" placeholder="Message sent to the employer"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Upload Gambar Kedai</div>
                        <div class="value">
                            <div class="input-group js-input-file">
                                <input class="input-file" type="file" name="file_cv" id="file">
                                <label class="label--file" for="file">Choose file</label>
                                <span class="input-file__info">No file chosen</span>
                            </div>
                            <div class="label--desc">Upload Gambar Kedaimu. Max file size 50 MB</div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name-jambukaku">Jam Buka Kedai</div>
                    </div>
                    <div class="form-row">
                        <h3 class="senin">Senin</h3>
                        <div class="col-md-6 jambuka">
                        <div class="name-jambuka">Jam Buka </div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="input--style-6" name="message" placeholder="11:00-23:00"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 jamtutup" >
                        <div class="name-jamtutup">Jam Tutup</div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="input--style-6" name="message" placeholder="11:00-23:00"></textarea>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="form-row">
                        <h3 class="selasa">Selasa</h3>
                        <div class="col-md-6 jambukaselasa">
                        <div class="name-jambuka">Jam Buka </div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="input--style-6" name="message" placeholder="11:00-23:00"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 jamtutup" >
                        <div class="name-jamtutup">Jam Tutup</div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="input--style-6" name="message" placeholder="11:00-23:00"></textarea>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="form-row">
                        <h3 class="Rabu">Rabu</h3>
                        <div class="col-md-6 jambukarabu">
                        <div class="name-jambuka">Jam Buka </div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="input--style-6" name="message" placeholder="11:00-23:00"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 jamtutup" >
                        <div class="name-jamtutup">Jam Tutup</div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="input--style-6" name="message" placeholder="11:00-23:00"></textarea>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="form-row">
                        <h3 class="Kamis">Kamis</h3>
                        <div class="col-md-6 jambukakamis">
                        <div class="name-jambuka">Jam Buka </div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="input--style-6" name="message" placeholder="11:00-23:00"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 jamtutup" >
                        <div class="name-jamtutup">Jam Tutup</div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="input--style-6" name="message" placeholder="11:00-23:00"></textarea>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="form-row">
                        <h3 class="Jumat">Jumat</h3>
                        <div class="col-md-6 jambukajumat">
                        <div class="name-jambuka">Jam Buka </div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="input--style-6" name="message" placeholder="11:00-23:00"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 jamtutup" >
                        <div class="name-jamtutup">Jam Tutup</div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="input--style-6" name="message" placeholder="11:00-23:00"></textarea>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="form-row">
                        <h3 class="Sabtu">Sabtu</h3>
                        <div class="col-md-6 jambukasabtu">
                        <div class="name-jambuka">Jam Buka </div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="input--style-6" name="message" placeholder="11:00-23:00"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 jamtutup" >
                        <div class="name-jamtutup">Jam Tutup</div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="input--style-6" name="message" placeholder="11:00-23:00"></textarea>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="form-row">
                        <h3 class="Minggu">Minggu</h3>
                        <div class="col-md-6 jambukaminggu">
                        <div class="name-jambuka">Jam Buka </div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="input--style-6" name="message" placeholder="11:00-23:00"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 jamtutup" >
                        <div class="name-jamtutup">Jam Tutup</div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="input--style-6" name="message" placeholder="11:00-23:00"></textarea>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <button class="btn btn--radius-2 btn--blue-2" type="submit">Daftar Kedai</button>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- sek mek jajal --}}
@section('bawah')
@endsection
