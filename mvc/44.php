<?php
session_start();
$users = array(
    1 => array('artem', 'gap23'),
    2 => array('login2', 'password2'),
);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $pass = $_POST['password'];
    foreach ($users as $id => $user) {
        if ($login == $user[0] and $pass == $user[1]) {
            $_SESSION['uid'] = $id;
        }
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //var_dump($_POST);
}

if ($_SESSION['uid']) {
    if (isset($users[$_SESSION['uid']])) {
        echo 'hello' . '  ' . $users[$_SESSION['uid']][0];
    }
}

?>
<!DOCTYPE html>
<html>
<head>

    <title>html</title>
</head>
<body>
<form method="post">


    <form method="post" action="44.php">
        <label for='login'>login</label>
        <input name='login' type='text'/> </br>
        <label for='password'>password</label>
        <input name='password' type='password'/>
        <input type="submit" value="enter"/> </br>


    </form>
</body>
</html>

