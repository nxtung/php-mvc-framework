<?php

namespace MVC\Controllers;

use MVC\Controller;
use MVC\Models\User;

class UserController extends Controller {
    public function index() {
        $users = [
            new User('John Doe1', 'john1@example.com'),
            new User('Jane Doe2', 'jane2@example.com')
        ];

        $this->render('user/index', ['users' => $users]);
    }
}