<?php
namespace App\Http\Controllers;

use App\Models\bed_assign;
use Illuminate\View\View;
use Illuminate\Http\Request;

class BedAssignController extends Controller
{
    public function getAll(): View
    {
        return view('page.bedassign', [
            'bed_assigns' => bed_assign::all()
        ]);
    }

    public function edit(string $id): View
    {
        return view('page.editbedassign', [
            'bed_assign' => bed_assign::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
        $request->validate(
            [   
                'tname' => 'required|string',
                'room_no' => 'required|string',
                'bed_no' => 'required|string',
                'date_start' => 'required|string',
                'due_date' => 'required|string'          
            ]
        );
        $bed_assign = new bed_assign($request->all());
        
        $bed_assign->save();
        return redirect('/bed_assigns')->with('status',"BedAssign Data Has Been inserted");
    }

    public function update(Request $request, $id){
        
        $request->validate(
            [
                'tname' => 'required|string',
                'room_no' => 'required|string',
                'bed_no' => 'required|string',
                'date_start' => 'required|string',
                'due_date' => 'required|string'
            ]
        );
        
        $bed_assign = bed_assign::find($id);
        $bed_assign->update($request->all());
        return redirect("/bed_assigns")
        ->with('status', 'BedAssign '.$request['email'].' was updated successfully.');
    }

    public function destroy($id)
    {
      $bed_assign = bed_assign::find($id);
      $bed_assign->delete();
      return redirect("/bed_assigns")
        ->with('success', 'BedAssign '.$id.'info deleted successfully');
    }

}

