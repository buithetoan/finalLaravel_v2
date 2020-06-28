<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;
use App\Models\Role;
use DB;
class RoleController extends Controller
{
    private $role;
    private $permission;
    public function __construct(Role $role, Permission $permission)
    {
        $this->role = $role;
        $this->permission = $permission;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = $this->role->all();
        return view('admin.layouts.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = $this->permission->all();
        return view('admin.layouts.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // Insert data to role table
            $roleCreate = $this->role->create([
                'name' => $request->name,
                'display_name' => $request->display_name
            ]);

            // Insert data to role_permission
            $roleCreate->permissions()->attach($request->permission);

            $roleCreate->save();
            if ($roleCreate) return redirect('/admin/role')->with('message','Create new successfully!');
            else return back()->with('err','Save error!');
        } catch (\Exception $exception) {
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permissions = $this->permission->all();
        $role = $this->role->findOrfail($id);
        $getAllPermissionOfRole = DB::table('permission_roles')->where('role_id', $id)->pluck('permission_id');
        return view('admin.layouts.roles.edit', compact('permissions', 'role', 'getAllPermissionOfRole')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            // update to role table
            $this->role->where('id', $id)->update([
                'name' => $request->name,
                'display_name' => $request->display_name
            ]);

            // update to role_permission table
            DB::table('permission_roles')->where('role_id', $id)->delete();
            $roleCreate = $this->role->find($id);
            $roleCreate->permissions()->attach($request->permission);
            $roleCreate->update();
            return redirect('admin/role')->with('message','Edit successfully!');
        } catch (\Exception $exception) {
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
