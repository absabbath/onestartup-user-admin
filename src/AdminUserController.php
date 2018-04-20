<?php

namespace Onestartup\UserAdmin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\User;

class AdminUserController extends Controller
{

    public function list()
    {
    	$roles = [1 => 'Admin', 2 => 'Editor'];
    	return view('user-admin::list')->with('roles', $roles);
    }

    public function storeUser(Request $request)
    {
    	
    	$user = new User($request->all());
    	$user->password = bcrypt($request->password);
    	$user->save();


    	return redirect()->back()->with('message_success', 'Se registro correctamente');
    }

    public function show($id)
    {
        $user = User::find($id);
        $roles = [1 => 'Admin', 2 => 'Editor'];

        return view('user-admin::edit')
            ->with('roles', $roles)
            ->with('user', $user);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();


        return redirect()->back()->with('message_success', 'Se registro correctamente');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.list')->with('message_success', 'Se eliminó correctamente');
    }

    public function datatable()
    {
        $users = User::select(['id','name','email', 'short_bio','rol_id','created_at'])->orderBy('id', 'desc');

        return Datatables::of($users)
        ->addColumn('details_url', function ($user) {
            return "<a href='".route('user.show',$user->id)."'>Ver Detalle</a>";
        })
        ->rawColumns(['details_url'])
        ->make();
    }

}
