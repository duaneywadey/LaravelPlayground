<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function showHome() {
        return view('welcome');
    }

    public function allUsers() {
        $user = array('Ivan'=>'25', 'Location'=>'Cavite');
        return view('users', ['user'=>$user]);
    }

    public function showUser(string $id) {
        return view('user', ['id' => $id]);
    }

    public function newController() {
        return view('newview');
    }

    public function contactsAlternative() {
        $contacts = [
            ['name'=>'AlternativeFirstIvan' , 'phone'=>'974525272', 'city'=>'Dasmarinas'],
            ['name'=>'AlternativeSecondIvan' , 'phone'=>'974525272', 'city'=>'Manila'],
            ['name'=>'AlternativeThirdIvan' , 'phone'=>'974525272', 'city'=>'Pangasinan'],
            ['name'=>'AlternativeFourthIvan' , 'phone'=>'974525272', 'city'=>'Iloilo']
        ];
        return view('contacts', ['contacts' => $contacts]);
    }
    public function showForm() {
        return view('showform');
    }

    public function handleForm(Request $request){
        print_r($request->all());
    }
}
