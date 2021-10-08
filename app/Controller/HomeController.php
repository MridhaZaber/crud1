<?php

namespace App\Controller;

use App\Models\User;

class HomeController
{
    public function homePage()
    {
        /*$users = User::all();
        $data['users'] = $users;*/

        view('home' );
    }

    public function aboutPage()
    {
        view('home');
    }

    public function showLogin()
    {
        view('login');
    }

    public function processLogin()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = User::where('email', $email)->first();

        if ($user) {
            if (password_verify($password, $user->password) === true) {
                echo 'Logged in';
            } else {
                echo 'Invalid password';
            }
        } else {
            echo 'User not found';
        }
    }
}
