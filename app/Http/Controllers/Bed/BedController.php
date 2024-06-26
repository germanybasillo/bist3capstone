<?php

namespace App\Http\Controllers\Bed;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bed;

class BedController extends Controller
{
    public function getAll(): View
    {
        return view('admin.bed.bed', [
            'beds' => Bed::all()
        ]);
    }

    public function edit(string $id): View
    {
        return view('admin.bed.editbed', [
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

    public function addbed(){

        return view('admin.bed.addbed-management');
        
      }
}
