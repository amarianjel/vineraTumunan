<?php
    /**
     * @author - Sephedo
     * @for - Deedub @ Stackoverflow
     * @question - http://stackoverflow.com/questions/18751788/age-verification
     */

    // ADD TO ALL PAGES WHICH NEED TO HAVE AGE VERIFICATION
    session_start();
    if(! isset( $_SESSION['age_verification'] ) or $_SESSION['age_verification'] != true ) die( header("Location: checkage.php?url=http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") );

    // session_destroy(); // uncomment to reset for testing and debugging.

    echo 'hello over 18 person';

?>

<?php

    /**
     * @author - Sephedo
     * @for - Deedub @ Stackoverflow
     * @question - http://stackoverflow.com/questions/18751788/age-verification
     */

    // checkage.php
    session_start();

    // checkage.php
    if( isset( $_POST['yes'] ) )
    {
        $_SESSION['age_verification'] = true;

        if( isset( $_GET['url'] ) )
        {
            die( header('Location: ' . $_GET['url'] ) ); 
        } 
        else
        {
            die( header('Location: index.php') );
        }
    }
    elseif( isset( $_POST['no'] ) )
    {
        $_SESSION['age_verification'] = false;
    }

    // The below line will check if someone has already said no so you can show them a page which tells them to they are too young.
    if( isset( $_SESSION['age_verification'] ) and $_SESSION['age_verification'] != true ) die( header('Location: tooyoung.php') );

    ?>

    <form method="POST" >
    <fieldset>
    <legend>Tienes más de 18años?</legend>
    <input type="submit" name="Si" value="Yes" /> <input type="submit" name="No" value="No" />
    </fieldset>
    </form>