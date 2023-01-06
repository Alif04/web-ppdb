<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Hash;

class PaymentController extends Controller
{
    public function payHome(){
        $student = Student::where('student_id', Auth::user()->user_id)->first();

        return view('PaymentPage.payhome', compact('student'));    
    }

    public function payPage()
    {
        $student = Student::where('student_id', Auth::user()->user_id)->first();
        $payment = Payment::where('payment_id', Auth::user()->id)->first();
        $payAll =  Payment::get();
        $money = Payment::select('nominal')->sum('nominal');
        return view('PaymentPage.payment', compact('payment', 'student', 'payAll', 'money'));
    }

    public function payAuth(Request $request){
       
        $select = $request->namaBank;

        if($select == "Others") {
            $ambil = $request->otherBank;
        }else {
            $ambil = $request->namaBank;
        }
        $request->validate([
            'namaBank' => 'required',
            'pemilikRek' => 'required',
            'nominal' => 'required',
            'imageBukti' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ],[
            'namaBank.required' => 'Nama bank wajib diisi!',
            'pemilikRek.required' => 'Pemilik rekening wajib diisi!',
            'nominal.required' => 'Nominal wajib diisi!',
            'imageBukti' => 'Bukti pembayaran wajib diisi!'
        ]);
        $image = $request->file('imageBukti');
        $imgName = time().rand().'.'.$image->extension();
        $request->imageBukti->move(public_path('assets\img\wikrama-ppdb'), $imgName);
  

        $payment = new Payment;
        $payment->payment_id = Auth::user()->id;
        $payment->namaBank = $ambil;
        $payment->pemilikRek = $request->pemilikRek;
        $payment->nominal = $request->nominal;
        $payment->imageBukti = $imgName;
        $payment->status = 0;
        $payment->save();
        return redirect('/payhome');
    }

    public function detailAdmin($id)
    {   
        $student = Student::where('student_id', Auth::user()->user_id)->first();
        $studentDetail = Payment::where('id',$id)->first();
        return view('PaymentPage.detail', compact('studentDetail','student'));
    }

    public function showStudent($id)
    {   
        $siswa = Student::where('student_id', Auth::user()->user_id)->first();
        $showStudent = Student::where('id',$id)->first();
        return view('PaymentPage.show-student', compact('showStudent','siswa'));
    }

    public function update(Request $request, $id)
    {
    $select = $request->nama_bank;

        if($select == "Others") {
            $ambil = $request->otherBank;
        }else {
            $ambil = $request->namaBank;
        }
        $request->validate([
            'namaBank' => 'required',
            'pemilikRek' => 'required',
            'nominal' => 'required',
            'imageBukti' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ],[
            'namaBank.required' => 'Nama bank wajib diisi!',
            'pemilikRek.required' => 'Pemilik rekening wajib diisi!',
            'nominal.required' => 'Nominal wajib diisi!',
            'imageBukti' => 'Bukti pembayaran wajib diisi!'
        ]);
        $image = $request->file('imageBukti');
        $imgName = time().rand().'.'.$image->extension();
        $request->imageBukti->move(public_path('assets\img\wikrama-ppdb'), $imgName);
  
        
        $payment = Payment::find($id);
        $payment->namaBank = $ambil;
        $payment->pemilikRek = $request->pemilikRek;
        $payment->nominal = $request->nominal;
        $payment->imageBukti = $imgName;
        $payment->status = 0;
        $payment->update();
        return redirect('/payhome');
    }

    public function validation($id){
        $validation = Payment::find($id);
        $validation->status = 1;
        $validation->update();
        return redirect('/payment');
    }

    public function reject($id){
        $reject = Payment::find($id);
        $reject->status = 99;
        $reject->update();
        return redirect('/payment');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
