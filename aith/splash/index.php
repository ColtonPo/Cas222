<?php

include '../includes/db.inc.php';

// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
if (isset($_POST['mySplashFName'])) {
    $sfname = $_POST['mySplashFName'];
    $slname = $_POST['mySplashLName'];
    $email = $_POST['myemail'];
    $sage = $_POST['mySAge'];
    $shirt = $_POST['mySplashShirt'];
    $fname = $_POST['myfname'];
    $enumber = $_POST['mypnumber'];


    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.

    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try {
        $sql = 'INSERT INTO splash SET
          fname = :fname,
          lname = :lname,
          email = :email,
          date = :date,
          shirt = :shirt,
          ename = :ename,
          enumber = :enumber
          ';
        $s = $pdo->prepare($sql);
        $s->bindValue(':fname', $sfname);
        $s->bindValue(':lname', $slname);
        $s->bindValue(':email', $email);
        $s->bindValue(':date', $sage);
        $s->bindValue(':shirt', $shirt);
        $s->bindValue(':ename', $fname);
        $s->bindValue(':enumber', $enumber);
        $s->execute();
    }
    catch (PDOException $e)
    {
        $error = 'Error adding submitted field: ' . $e->getMessage();
        include '../includes/error.html.php';
        exit();
    }
    // load the thank you page after the INSERT runs
    include 'success.html.php';
    // Add an else to load the initial page if the initial (line 19) if statement is false
}
else {

    include 'splash.html.php';

}
