<?php

namespace App\Http\Controllers;
use App\Models\Jadwalkuliah;

use Illuminate\Http\Request;
// use App\Http\Controllers\JadwalkuliahController;

class JadwalkuliahController extends Controller
{
    public function daftarmatkul(Request $request)
    {
        $data = Jadwalkuliah::query();

        // filter by angkatan
        $data->when($request->angkatan, function ($query) use ($request){
            return $query->where('angkatan', 'like', '%' . $request->angkatan . '%');

        });
        // filter by prodi
        $data->when($request->prodi, function ($query) use ($request){
            return $query->where('prodi', 'like', '%' . $request->prodi . '%');

        });
        // filter by semester
        $data->when($request->semester, function ($query) use ($request){
            return $query->where('semester', 'like', '%' . $request->semester . '%');

        });

        $data = $data->get();
        return view('admin.matkul',compact('data'));
    }
    public function tambahdata()
    {
        return view('admin.tambahdata');
    }
    public function createdata(Request $request)
    {
    jadwalkuliah::create($request->all());
    return redirect()->route('daftarmatkul')->with('success','Data Berhasil Di Tambahkan');
    }
    public function tampilkandata($id)
    {
        $data = jadwalkuliah::find($id);
        // dd($data);
        return view('admin.tampilkandata',compact('data'));
    }
    public function updatedata(Request $request, $id)
    {
        $data = jadwalkuliah::find($id);
        $data->update($request->all());
        return redirect()->route('daftarmatkul')->with('success','Data Berhasil Di Update');
    }
    public function delete($id)
    {
    $data = jadwalkuliah::find($id);
    $data->delete();
    return redirect()->route('daftarmatkul')->with('success','Data Berhasil Di Hapus');

    }


    
}
