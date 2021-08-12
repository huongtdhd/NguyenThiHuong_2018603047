<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MonHoc;
use App\Models\DangKyHocPhan;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $monhocs = MonHoc::all();

        return view('home', compact('monhocs'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function register(Request $request)
    {
        $monhoc_id = $request->query('mon');
        $user_id = $request->query('user');

        $monhocs = MonHoc::all();

        return view('home', compact('monhocs'))->with('i', (request()->input('page', 1) - 1) * 5)->with('success', 'Đăng ký học phần thất bại!');
    }

    public function list()
    {
        $list = DB::table('dang_ky_hoc_phans')->join('users', 'users.id', '=', 'dang_ky_hoc_phans.user_id')->join('mon_hocs', 'mon_hocs.id', '=', 'dang_ky_hoc_phans.monhoc_id')->get();

        error_log($list);

        return view('list', compact('list'))->with('i', (request()->input('page', 1) - 1) * 5)->with('success', 'Đăng ký học phần thất bại!');
    }
}
