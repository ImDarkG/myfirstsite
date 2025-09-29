<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;
class GroupController extends Controller
{
    function list(){
        $csoport = Group::csoportLista();



        return view('group', [
            'csoportok' => $csoport
        ]);
    }


}
