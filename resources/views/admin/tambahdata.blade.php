@extends('tampilan.layout')
@section('content')
    <section>
        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="col-12">
                    <div class="page-tittle justify-content-center style="text-align: center; margin-top: 20px;">
                    <h2 class="mt-2  page-title justify-content-center">INPUT JADWAL KULIAH STMIK SYAIKH ZAINUDDIN NW</h2>
                    </div>    
                    <div class="mt-2">
                        <div class="row">
                            <div class="col-12">
                                <div class="col my-4">
                                    <div class="card shadow">
                                        <div class="card-body">
                                            <form action="{{ route('createdata') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            {{-- @method('PUT') --}}
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="kodemk" class="form-label">KODE MATA KULIAH</label>
                                                            <input type="text" class="form-control"
                                                                id="kodemk" name="kodemk" aria-describedby="kodemk">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="matakuliah" class="form-label">MATA KULIAH</label>
                                                            <input type="text" class="form-control"
                                                                id="matakuliah" name="matakuliah" aria-describedby="matakuliah">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="dosen" class="form-label">DOSEN PENGAMPU</label>
                                                            <input type="text" class="form-control"
                                                                id="dosen" name="dosen" aria-describedby="dosen">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="jam">JAM PERKULIAHAN</label>
                                                            <input class="form-control" id="jam" type="time" name="jam">
                                                          </div>
                                                        <div class="mb-3">
                                                            <label for="ruangan" class="form-label">RUANGAN</label>
                                                            <input type="text" class="form-control"
                                                                id="ruangan" name="ruangan" aria-describedby="ruangan">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label for="hari">HARI</label>
                                                            <select class="form-control" name="hari" id="hari">
                                                                <option>SENIN</option>
                                                                <option>SELASA</option>
                                                                <option>RABU</option>
                                                                <option>KAMIS</option>
                                                                <option>JUMAT</option>
                                                                <option>SABTU</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="prodi">PROGRAM STUDI</label>
                                                            <select class="form-control" name="prodi" id="prodi">
                                                                <option>SISTEM INFORMASI</option>
                                                                <option>TEHNIK INFORMATIKA</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="angkatan" class="form-label">ANGKATAN</label>
                                                            <input type="angkatan" class="form-control"
                                                                id="angkatan" name="angkatan" aria-describedby="angkatan">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="semester" class="form-label">SEMESTER</label>
                                                            <input type="text" class="form-control"
                                                                id="semester" name="semester" aria-describedby="semester">
                                                        </div>

                                                       <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                            
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>

    </section>
@endsection
