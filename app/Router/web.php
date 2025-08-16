<?php
use App\Controller\Controller;
use Craft\Application\Router;

Router::get("/", [Controller::class,"index"])->name("home");
Router::apiGet("/users", [Controller::class, "getUsers"])->name("api.users.list");

Router::run();