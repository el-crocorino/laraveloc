<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class UsersController extends Controller {

        public function getInfos() {
            return view('infos');
        }

        public function postInfos(Request $req) {
            return 'Le nom donné est : ' . $req->input('name');
        }

    }
