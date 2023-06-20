<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\Galery;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Nette\Schema\Elements\Structure;

class MasyarakatController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            $alert = [
                'email' => 'required|email',
                'password' => 'required'
            ];
            $message = [
                'email.required' => 'Email harus diisi',
                'email.email' => 'Masukkan email yang valid',
                'password' => 'Masukkan Password'
            ];
            $this->validate($request, $alert, $message);
            if (Auth::guard('masyarakat')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
                return redirect('/');
            } else {
                return redirect()->back()->with('error', 'Tidak Sesuai');
            }
        }
        return view('masyarakat.login');
    }

    public function register(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

            $alert = [
                'nik' => 'required',
                'name'=> 'required',
                'email' => 'required|email',
                'password' => 'required|min:8',
                'confirm_password'=>'required|min:8'
            ];
            $message = [
                'nik.required' => 'NIK harus diisi',
                'name' => 'required',
                'email.required' => 'Email harus diisi',
                'email.email' => 'Masukkan email yang valid',
                'password.required' => 'Masukkan Password',
                'password.min'=>'Password Minimal 8 Karakter',
                'confirm_password.required' => 'Konfirmasi Password Anda',
                'confirm_password.min' => 'Konfirmasi Password Minimal 8 Karakter'
            ];
            $this->validate($request, $alert, $message);

            if($data['password']==$data['confirm_password']){
                Masyarakat::insert([
                    'nik' => $request->input('nik'),
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'password' => Hash::make($request->input('password')) ,
                ]);
            }else{
                return redirect()->back();
            }

            return redirect('masyarakat/login')->with('success', 'Akun Masyarakat Berhasil Terdaftar');
        }
        return view('masyarakat.registrasi');
    }

    public function logout(Request $request)
    {
        Auth::guard('masyarakat')->logout();
        return redirect('/dashboard');
    }

    public function galery()
    {
        $galery = Galery::get();

        return view('masyarakat.galery', compact('galery'));
    }

}
