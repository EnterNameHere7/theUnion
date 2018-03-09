<?php
/**
 * Created by PhpStorm.
 * User: rudolfn
 * Date: 2018/03/08
 * Time: 13:28
 */

namespace App\Http\Controllers\Users;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\userInfo;

class UsersController extends Controller
{

    public function list() {
        $users = userInfo::all();

        $finalArr = array();
        $names = array();



        foreach ($users as $user) {
            $names[] = array("ID" =>$user->id,"Fname" => $user->Fname, "Sname" => $user->Sname);
        }

        $finalArr["user"] = $names;

        return json_encode($finalArr);
    }

    public function InsertUserInput(Request $request)
    {




        $id = $request->get('id');
        $name = $request->get('name');
        $surname = $request->get('surname');







        //return response()->json($finalArr);

    }
}