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
        return view('landingPage.main');
    }

    public function dashboard()
    {
        return view('admin-dashboard.dashboard');
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
