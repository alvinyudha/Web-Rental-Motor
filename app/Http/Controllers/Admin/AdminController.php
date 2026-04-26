<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public static function middleware(): array
    {
        return [
            'cekRole:admin',
        ];
    }

    public function index()
    {
        return view('admin.dashboard-admin');
    }
}
