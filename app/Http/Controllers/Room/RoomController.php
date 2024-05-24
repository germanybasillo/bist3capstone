<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function getAll(): View
    {
        return view('admin.room.room', [
            'rooms' => Room::all()
        ]);
    }

    public function edit(string $id): View
    {
        return view('admin.room.editroom', [
            'room' => Room::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'number' => 'required|string',
                'description' => 'required|string',
            ]
        );
        $room = new Room($request->all());
   
        $room->save();
        return redirect('/rooms')->with('status',"Room  Data Has Been inserted");
    }

    public function update(Request $request, $id){
        
        $request->validate(
            [
                'number' => 'required|string',
                'description' => 'required|string',
            ]
        );
        
        $room = Room::find($id);
        $room->update($request->all());
        return redirect("/rooms")
        ->with('status', 'Room '.$request['email'].' was updated successfully.');
    }
    
    public function destroy($id)
    {
      $room = Room::find($id);
      $room->delete();
      return redirect("/rooms")
        ->with('success', 'Room '.$id.'info deleted successfully');
    }

    public function addroom(){

        return view('admin.room.addroom');
        
      }
}
