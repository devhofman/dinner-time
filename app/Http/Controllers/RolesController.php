<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;

class RolesController extends Controller
{
    public function __invoke($roleName) {
        $role = Role::findByName($roleName);
        if (! Auth::user()->hasRole(Role::where('name', $roleName)->first())) {
            abort(403);
       }
       return response('', 204);
    }

    // public function findRole($role) {
    //     $roleRes = Role::findByName($role);
    //     return response($roleRes->name, 200);
    // }
}


