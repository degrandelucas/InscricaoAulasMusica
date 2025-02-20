<?php

$user = [
    'nome' => $_POST['name'],
    'email' => $_POST['email'],
    'telefone' => $_POST['cellphone'],
    'instrumento' => $_POST['instrument']
];

var_dump($_POST);
var_dump($user);