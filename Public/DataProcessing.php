<?php

$user = [
    'nome' => $_POST['name'],
    'email' => $_POST['email'],
    'telefone' => $_POST['cellphone'],
    'instrumento' => $_POST['instrument']
];

$userJson = json_encode($user);

file_put_contents('users.json', $userJson);

header('Location: CadastroSucesso.php?nome=' . $user['nome'] . '&instrumento=' . $user['instrumento']); 
// This line redirects the user to the page cadastroSucesso.php with the parameters nome and instrumento

exit(); // This line stops the execution of the script