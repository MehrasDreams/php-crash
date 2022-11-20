<?php



if (isset($_POST['submit'])) {

//    $name = $_POST['name']; // if you do this user can write bullshit for example <script>alert('clear')</script>
//    $age = $_POST['age'];
//    echo $name . '<br>' . $age;

    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    echo $name . '<br>' . $age;




}


?>



    <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
        <div>
            <label for="name">Name: </label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="age">Age: </label>
            <input type="text" name="age">

        </div>

        <input type="submit"  name="submit">


    </form>
<?php
