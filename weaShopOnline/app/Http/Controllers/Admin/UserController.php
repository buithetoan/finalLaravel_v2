<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Repositories\User\UserInterface;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Eloquent\Model;
use DB;
class UserController extends Controller
{
    protected $userRepository;
    private $user;
    private $role;

    public function __construct(User $user, Role $role)
    {
        $this->user = $user;
        $this->role = $role;
    }
    // public function __construct(UserInterface $userRepos)
    // {
    //     $this->userRepository = $userRepos;
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->user->all();

        return view('admin.layouts.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = $this->role->all();
        return view('admin.layouts.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        try {
            $request->validated();
            $userCreate = $this->user->create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'is_deleted' => false,
            ]);
            $userCreate->roles()->attach($request->roles);
            $userCreate->save();
            if ($userCreate) return redirect('/admin/user')->with('message','Create new successfully!');
            else return back()->with('err','Save error!');
        } catch (Exception $e) {
            
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
        $roles = $this->role->all();
        $user = $this->user->findOrfail($id);
        $listRoleOfUser = DB::table('role_user')->where('user_id', $id)->pluck('role_id');
        return view('admin.layouts.users.edit', compact('user','roles','listRoleOfUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        try {
            $this->user->where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);

            // Update to role_user table
            DB::table('role_user')->where('user_id', $id)->delete();
            $userCreate = $this->user->find($id);
            $userCreate->roles()->attach($request->roles);
            $userCreate->update();
            return redirect('admin/user')->with('message','Edit successfully!');
        } catch (Exception $e) {
            
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
