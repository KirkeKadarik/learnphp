<?php

namespace App\Controllers;

class AuthController {
    public function loginForm() {

    }

    public function registerForm   () {
//dump($_COOKIE);
//setcookie('mycookie','is tasty!', time() + 60 * 60 * 24 * 30);
session_start();
//$_SESSION['secret'] = 'shh';
dump($_SESSION);
    }

    public function register() {

    }

    public function logout() {

    }
}