<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PostController extends Controller
{
    public function create()
    {
        return view('create');
    }

        public function store(Request $request)
        {
            $validatedData = $request->validate([
                'number' => 'required|numeric',
                'name' => 'required|alpha',
            ],[
                'required'=>'khong duoc de trong',
                'numeric'=>'ky tu nhap vao phai la so',
                'alpha'=>'ky tu nhap vao phai la chu',
            ]);
            echo 'đã xác thực thành công';
        }
}
