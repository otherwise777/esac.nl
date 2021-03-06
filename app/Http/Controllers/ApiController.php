<?php

namespace App\Http\Controllers;

use App\AgendaItem;
use App\MenuItem;
use App\repositories\RepositorieFactory;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ApiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('getAgenda','getZekeringen');
    }

    public function getMenuItems(Request $request){
        $menuItemQeury = MenuItem::query();
        if($request->has('type')) {
            if(Input::get('type') === "subItem"){
                $menuItemQeury->where('parent_id', '=', intval(Input::get('parentId')));
            } else {
                $menuItemQeury->where('parent_id', '=', null);
            }
        }
        $entries = $menuItemQeury->get();
        $menuItems = array();
        foreach ($entries as $menuItem){
            array_push($menuItems, [
                "id"    =>  $menuItem->id,
                "name"  =>  $menuItem->text->text()
            ]);
        }
        return $menuItems;
    }



    public function getUsers(){
        $users = array();

        foreach (User::all() as $user){
            array_push($users,[
                'id'    => $user->id,
                'name'  => $user->getName(),
                'email' => $user->email,
                'action' => "<button class='btn btn-primary' id='addUser' data-name='" . $user->getName(). "' data-email='" . $user->email ."'>" . trans('MailList.addMemberShort') . "</button>"
            ]);
        }

        return ['aaData' => $users];
    }

}
