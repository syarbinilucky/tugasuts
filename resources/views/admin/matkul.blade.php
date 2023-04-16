@extends('tampilan.layout')
@section('content')
    <section>
        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="col-12">
                <form action="" method="GET" class="form-inline justify-content-center">
                <div class="row ">
                    <div class="col-12">
                        <h2 class="mt-2 justify-content-center" style="text-align: center; margin-top: 10px; page-title">JADWAL KULIAH STMIK SYAIKH ZAINUDDIN</h2>
                        </p>
                        <div class="row">
                            <div class="col my-4">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <form action="/" method="get">
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="col-sm-2">
                                                    <label for="prodi" class="form-label">Angkatan</label>
                                                    <input name="angkatan" type="number" class="form-control" placeholder="angkatan" value="{{isset($_GET['angkatan']) ? $_GET['angkatan'] : ''}}">  
                                                </div>
                                                <div class="col-sm-2">
                                                    <label for="prodi" class="form-label">Prodi</label>
                                                    <input name="prodi" type="text" class="form-control" placeholder="prodi" value="{{isset($_GET['age']) ? $_GET['prodi'] : ''}}">  
                                                </div>
                                                <div class="col-sm-2">
                                                    <label for="semester" class="form-label">Semester</label>
                                                    <input name="semester" type="number" class="form-control" placeholder="semester" value="{{isset($_GET['age']) ? $_GET['semester'] : ''}}">  
                                                </div>
                                                
                                                <div class="col-sm-2">
                                                    <button type="submit" class="btn btn-primary mt-4">Search</button>
                                                </div>
                                            </div>
                                        </form>
                                        {{-- <a href="/tambahdata" class="btn btn-outline-primary active justify-content-start">tambah +</a> --}}
                                        @if ($message = Session::get('success'))
                                        <div class="alert alert-primary" role="alert">
                                            {{ $message }}
                                          </div>
                                        @endif
                                        <table class=" text-dark table datatables table-responsive" id="dataTable-1">
                                            <thead>
                                                <tr>
                                                    <th style="color: black">No</th>
                                                    <th>Kode MK</th>
                                                    <th>Mata Kuliah</th>
                                                    <th>Dosen</th>
                                                    <th>Jam</th>
                                                    <th>Ruangan</th>
                                                    <th>Hari</th>
                                                    <th>Program Studi</th>
                                                    <th>Angkatan</th>
                                                    <th>Semester</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                @endphp
                                                @foreach ($data as $item)
                                                <tr>
                                                    <th scope="item">{{ $no++ }}</th>
                                                    <td>{{ $item->kodemk }}</td>
                                                    <td>{{ $item->matakuliah }}</td>
                                                    <td>{{ $item->dosen }}</td>
                                                    <td>{{ $item->jam }}</td>
                                                    <td>{{ $item->ruangan }}</td>
                                                    <td>{{ $item->hari }}</td>
                                                    <td>{{ $item->prodi }}</td>
                                                    <td>{{ $item->angkatan }}</td>
                                                    <td>{{ $item->semester}}</td>
                                                    <td>
                                                        <button class="btn btn-sm dropdown-toggle more-horizontal"
                                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <span class="text-muted sr-only">Action</span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="/tampilkandata/{{ $item->id }}" class="dropdown-item">Edit</a>
                                                            <a href="/delete/{{ $item->id }}" class="dropdown-item">Hapus</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- simple table -->
                        </div>
                    </div>
                    </form> <!-- end section -->
                    </div> <!-- .col-12 -->
                </div> <!-- .row -->
            </div> <!-- .container-fluid -->
        </main>
    </section>

    </section>
@endsection