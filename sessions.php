<?php

session_start();

if (isset($_POST['submit'])) {

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);

    $password = $_POST['password'];

    if ($username == 'mehras' && $password == 'password'){
        $_SESSION['username'] = $username;
        header('Location: /firstproject/extras/dashboard.php ');
    } else{
        echo 'Incorrect login';
    }


}


?>



    <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" >
        <div>
            <label for="name">Username: </label>
            <input type="text" name="username">
        </div>
        <div>
            <label for="age">Password: </label>
            <input type="text" name="password">

        </div>

        <input type="submit"  name="submit">


    </form>
<?php
