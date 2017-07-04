<?php

namespace App\Http\Controllers\Users\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function getUsers()
    {
        $users = User::all();

        return \Datatables::of($users)
            ->addColumn('actions', function($user){
                $buttons = '<span class="btn btn-success">'.$user->id.'</span>';
//                $buttons = '<a href="users.edit'.$user->id.'" data-user="" class="btn btn-sm btn-success"><i class="fa fa-edit"></i>
//                            </a>';


                return $buttons;
            })




            ->make(true);
    }
}
