<?php

namespace App\Http\Controllers;

use App\Models\Tefa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tefas = Tefa::all();
        return view('landingPage.main',compact('tefas'));
    }

    public function dashboard()
    {
        return view('admin-dashboard.dashboard');
    }



    public function productData()
    {
        $tefas = Tefa::all();
        return view('admin-dashboard.productData', compact('tefas'));
    }

    public function login()
    {
        return view('login.login');
    }

    public function productProfit()
    {
        return view('admin-dashboard.productProfit');
    }

    public function industry()
    {
        return view('admin-dashboard.industry');
    }


    public function auth(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'username' => 'required|exists:users,username',
            'password' => 'required',
        ], [
            'username.exists' => 'username ini belum tersedia',
            'username.required' => 'username harus diisi',
            'password.required' => 'password harus diisi',
        ]);

        $users = $request->only('username', 'password');
        if (Auth::attempt($users)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with('error', 'Gagal login silahkan cek dan coba lagi');
        }
    }

    public function register()
    {
        return view('register.register');
    }

    public function registerAccount(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'user'
        ]);

        return redirect('/login')->with('success', 'Berhasil menambahkan akun! silakan login');
    }


    public function logout()
    {
        auth::logout();
        return redirect('login');
    }

    public function error()
    {
        return view('landingPage.error');
    }

    public function profile()
    {
        $tefas = Tefa::all();
        return view('profile.profile', compact('tefas'));
    }

    public function uploadProfile()
    {
        return view('profile.uploadProfile');
    }

    public function changeProfile(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'image_profile' => 'required|image|mimes:jpg,png,jpeg,gif'
        ]);

        $image = $request->file('image_profile');

        $imgName = time() . rand() . '.' . $image->extension();

        if (!file_exists(public_path('/assets/img/' . $image->getClientOriginalName()))) {
            $destinationPath = public_path('/assets/img/');

            $image->move($destinationPath, $imgName);
            $uploaded = $imgName;
        } else {
            $uploaded = $image->getClientOriginalName();
        }
        User::where('id', Auth::user()->id)->update([
            'image_profile' => $uploaded,
        ]);

        return redirect()->route('profile')->with('successUploading', 'Foto profile berhasil diperbarui');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tefa  $tefa
     * @return \Illuminate\Http\Response
     */
    public function show(Tefa $tefa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tefa  $tefa
     * @return \Illuminate\Http\Response
     */
    public function edit(Tefa $tefa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tefa  $tefa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tefa $tefa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tefa  $tefa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tefa $tefa)
    {
        //
    }
}
