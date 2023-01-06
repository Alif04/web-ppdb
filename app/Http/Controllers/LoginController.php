<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    
   public function registerAuth(Request $request){ 
    $getUniquecode = substr($request->nisn, -4);
    $getuniquecode = substr($request->nisn, -4);

    $select = $request->sekolah;

    if($select == "other") {
        $school = $request->asalSekolah1;
    }else {
        $school = $request->asalSekolah;
    }

        $request->validate([
            'name' => 'required',
            'nisn' => 'required',
            'asalSekolah' => 'required',
            'jk' => 'required',
            'email' => 'required',
            'noHp' => 'required',
            'noAyah' => 'required',
            'noIbu' => 'required',
        ]);
    
        Student::create([
            'name' => $request->name,
            'nisn' =>$request->nisn,
            'asalSekolah' => $school,
            'jk' => $request->jk,
            'email' => $request->email,
            'noHp' => $request->noHp,
            'noAyah' => $request->noAyah,
            'noIbu' => $request->noIbu,
            'student_id' => $getUniquecode
            
            ]);
        

        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->nisn),
            'role' => 'user',
            'user_id' => $getUniquecode
        ]);

        return redirect('/print')->with('success', 'Silahkan Download PDF ini!');
    }

    public function print(){
        $dataSiswa = Student::latest()->first();
        return view('LoginPage.print', compact('dataSiswa'));
    }

    public function login(){
        return view('LoginPage.login');
    }

    public function loginAuth(Request $request){
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ],[
            'email.exist' => 'Email tidak terdaftar!',
            'email.required' => 'Email wajib diisi!',
            'password.required' => 'Password wajib diisi!',

        ]);
        $user = $request->only('email', 'password');
        if(Auth::attempt($user)) {
            return redirect('/payhome');
        }else {
            return redirect()->back()->with('gagal', 'Login gagal, tolong cek kembali email dan passwordmu !');
        }
    }
}
