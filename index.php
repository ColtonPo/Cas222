<?php

include 'includes/db.inc.php';

// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
if (isset($_POST['myfname']) and empty ($_POST['honeypot'])) {
    $fname = $_POST['myfname'];
    $lname = $_POST['mylname'];
    $email = $_POST['myemail'];
    $date = $_POST['mydate'];
    $gender = $_POST['mygender'];
    $comment = $_POST['mycomments'];

    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.

    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try {
        $sql = 'INSERT INTO registration SET
          fname = :fname,
          lname = :lname,
          email = :email,
          date = :date,
          gender = :gender,
          comment = :comment';
        $s = $pdo->prepare($sql);
        $s->bindValue(':fname', $_POST['myfname']);
        $s->bindValue(':lname', $_POST['mylname']);
        $s->bindValue(':email', $_POST['myemail']);
        $s->bindValue(':date', $_POST['mydate']);
        $s->bindValue(':gender', $_POST['mygender']);
        $s->bindValue(':comment', $_POST['mycomments']);
        $s->execute();
    }
    catch (PDOException $e)
    {
        $error = 'Error adding submitted field: ' . $e->getMessage();
        include 'includes/error.html.php';
        exit();
    }
    // load the thank you page after the INSERT runs
    include 'includes/success.html.php';
    // Add an else to load the initial page if the initial (line 19) if statement is false
}
else {

    include 'aith.html.php';

}

?>