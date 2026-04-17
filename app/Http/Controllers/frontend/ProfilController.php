<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Crypt, DB};
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Validation\ValidationException;
use SweetAlert2\Laravel\Swal;

class ProfilController extends Controller
{
    public function index(Request $request)
    {
        $user = Crypt::decrypt(session('token'));
        $data = [
            'user' => DB::table('pengunjung')->where('id', $user->id)->get()->first()
        ];

        return view('frontend.profile.index', ['data' => $data]);
    }

    public function edit(Request $request)
    {
        try {
            $parameter = $request->validate(
                [
                    'telp' => 'required|integer|min:8',
                    'nik' => 'required|integer|digits:16',
                    'nama_asli' => 'required'
                ],
                [
                    'telp.*' => 'Telp Harus Diisi atau Nomor Terlalu Singkat'
                ]
            );
            DB::table('pengunjung')->where('id', $request->id)->update([
                'telp' => $request->telp,
                'nik' => $request->nik,
                'nama_asli' => $request->nama_asli,
                'updated_at' => Carbon::now()
            ]);
            Swal::success([
                'title' => 'Success',
                'text' => 'Data Berhasil di perbaharui',
            ]);
            return redirect()->route('frontend.profile');
        } catch (ValidationException $e) {
            Swal::error([
                'title' => 'Pesan Kesalahan',
                'text' => $e->getMessage(),
            ]);
            return redirect()->back()->withInput();
        }
    }
}
