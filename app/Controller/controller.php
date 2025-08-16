<?php
namespace App\Controller;

use Craft\Application\View;
use App\Model\User;

class Controller
{
    protected $users;
    public function __construct(){
        $this->users = new User();
    }
    public function index()
    {
        // Default action
        return View::render('index', [
            'title' => 'Trang chủ',
            'message' => 'Welcome to the index page!'
        ]);
    }
    public function getUsers()
    {
        // Cách 1:
        // $user = $this->users;
        // $result = $user->select('*')->execute();
        // return $result;

        // // Cách 2:
        // $user = $this->users->select('*')->execute();
        // return $user;

        // // Cách 3:
        $user = $this->users;
        $user->select('*')->execute();
        return $user->getResult();
    }
}