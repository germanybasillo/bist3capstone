<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class TenantController extends Controller
{
    
    public function getAll(): View
    {
        return view('page.tenant', [
            'tenants' => Tenant::all()
        ]);
    }

    public function edit(string $id): View
    {
        return view('page.edittenant', [
            'tenant' => Tenant::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'fname' => 'required|string',
                'lname' => 'required|string',
                'mname' => 'required|string',
                'email' => 'required|email',
                'contact' => 'required|string',
                'address' => 'required|string',
                'gender' => 'required|string',
                'profile'=>'required'
            ]
        );
        $tenant = new Tenant($request->all());
        $tenant->fname = $request['fname'];
        
        $tenant->save();
        return redirect('/tenants')->with('status',"Tenant Data Has Been inserted");
    }

    public function update(Request $request, $id){
        
        $request->validate(
            [
                'fname' => 'required|string',
                'lname' => 'required|string',
                'mname' => 'required|string',
                'email' => 'required|email',
                'contact' => 'required|string',
                'address' => 'required|string',
                'gender' => 'required|string',
            ]
        );
        
        $tenant = Tenant::find($id);
        $tenant->update($request->all());
        return redirect("/tenants")
        ->with('status', 'Tenant '.$request['email'].' was updated successfully.');
    }
    
  public function destroy($id)
  {
    $tenant = Tenant::find($id);
    $tenant->delete();
    return redirect("/tenants")
      ->with('success', 'Tenant '.$id.'info deleted successfully');
  }
}
