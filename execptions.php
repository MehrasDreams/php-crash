<?php // exceptions just like raise in python




function bad($name){
    if ($name == 'god'){
        throw new Exception('Fuck it ');

    }
    else{
        echo 'Good to you';
    }

}




try{
    echo bad('go2d');

} catch (Exception $e){
    echo 'Error is ', $e->getMessage(), '  ';
} finally {
    echo 'Second Finally';
}