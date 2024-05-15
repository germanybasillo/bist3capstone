<?php

namespace App\Http\Controllers;

use App\Models\Bed;
use Illuminate\View\View;
use Illuminate\Http\Request;

class BedController extends Controller
{
    public function getAll(): View
    {
        return view('page.bed', [
            'beds' => Bed::all()
        ]);
    }

    public function edit(string $id): View
    {
        return view('page.editbed', [
            'bed' => Bed::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'room_no' => 'required|string',
                'bed_no' => 'required|string',
                'daily_rate' => 'required|string',
                'monthly_rate' => 'required|string',
                'bed_status' => 'required|string',
            ]
        );
        $bed= new Bed($request->all());
        $bed->save();
        return redirect('/beds')->with('status',"Bed-Management Data Has Been inserted");
    }

    public function update(Request $request, $id){
        
        $request->validate(
            [
                'room_no' => 'required|string',
                'bed_no' => 'required|string',
                'daily_rate' => 'required|string',
                'monthly_rate' => 'required|string',
                'bed_status' => 'required|string',
            ]
        );
        
        $bed = Bed::find($id);
        $bed->update($request->all());
        return redirect("/beds")
        ->with('status', 'Bed '.$request['email'].' was updated successfully.');
    }

    public function destroy($id)
    {
      $bed = Bed::find($id);
      $bed->delete();
      return redirect("/beds")
        ->with('success', 'Bed '.$id.'info deleted successfully');
    }
}
