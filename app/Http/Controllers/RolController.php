<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;


class RolController extends Controller
{
    function __construct()
    {
        $this->middleware('permissions:ver-rol|crear-rol|editar-rol|eliminar-rol',['only'=>['index']]);
        $this->middleware('permissions:crear-rol' ,['only'=>['create', 'store']]);
        $this->middleware('permissions:editar-rol' ,['only'=>['edit', 'update']]);
        $this->middleware('permissions:eliminar-rol' ,['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate(5);
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission = Permission::get();
        return view('roles.crear', compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required','permission' => 'required']);
        $role =Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));

        return redirect()->route('roles.index')->with('success','Rol creado correctamente');
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
        $role =Role::find($id);
        $permission = Permission::get();
        $rolePermission = DB::table('role_has_permissions')->where('role_has_permissions.role_id', $id)
            ->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')
            ->all();
        return view('roles.editar', compact('role', 'permission', 'rolePermission'));
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
        $this->validate($request, ['name' => 'required','permission' => 'required']);

        $role = Role::find($id);
        $role ->name =$request->input('name');
        $role ->save();
        $role->syncPermissions($request->input('permission'));
        return redirect()->route('roles.index')->with('success','Rol actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('roles')->where('id', $id)->delete();
        return redirect()->route('roles.index');
    }

    public function home()
    {

        return view('seller.home');
    }
}
