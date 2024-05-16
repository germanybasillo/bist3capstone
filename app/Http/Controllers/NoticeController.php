<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\notice;

class NoticeController extends Controller
{
    public function message(): View
    {
        return view('page.notices', [
            'notices' => notice::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|string',
                'notice_body' => 'required|string',
            ]
        );
        $notice = new notice($request->all());
   
        $notice->save();
        return redirect('/notices')->with('the',"  Data Has Been inserted");
    }
}
