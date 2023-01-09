<?php

return [
    "" => [
        "controller" => "main",
        "action" => "index"
    ],
    "bookPage" => [
        "controller" => "book",
        "action" => "index"
    ],
    "account/login" => [
        "controller" => "account",
        "action" => "login"
    ],
    "account/registration" => [
        "controller" => "account",
        "action" => "registration"
    ],
    "404" => [
        "controller" => "NotFoundPage",
        "action" => "index"
    ],
    "admin" => [
        "controller" => "admin",
        "action" => "index"
    ],
    "deleteBook" => [
        "controller" => "DataBase",
        "action" => "deleteDataById"
    ],
    "addBook" => [
        "controller" => "DataBase",
        "action" => "addData"
    ],
    "buy" => [
        "controller" => "DataBase",
        "action" => "buy"
    ],


];
