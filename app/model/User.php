<?php
namespace App\Model;

use Craft\Database\QueryBuilder\CraftMysqli;

class User extends CraftMysqli{
    protected $table = "users";
}