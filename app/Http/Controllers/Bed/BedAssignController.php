<?php

namespace App\Http\Controllers\Bed;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bed_assign;
use Illuminate\View\View;

class BedAssignController extends Controller
{
    public function getAll(): View
    {
        return view('admin.bed.bedassign', [
            'bed_assigns' => bed_assign::all()
        ]);
    }

    public function edit(string $id): View
    {
        return view('admin.bed.editbedassign', [
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

    public function addbedassign(){

        return view('admin.bed.addbed-assign');
        
      }
}
