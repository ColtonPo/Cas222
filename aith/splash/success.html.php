<!DOCTYPE html>
<html lang="en">
    <head>
        <title>aith</title>
        <meta name="description" content="aith">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=../css/style.css>
        <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="wrapper">
            <main>
                <h1>Thank you!</h1>
                <p>Our records show you submitted the following in our Registration Form:<br>
                  First Name: <?php echo htmlspecialchars($_POST['mySplashFName'], ENT_QUOTES, 'UTF-8'); ?><br>
                  Last Name: <?php echo htmlspecialchars($_POST['mySplashLName'], ENT_QUOTES, 'UTF-8'); ?><br>
                  Email: <?php echo htmlspecialchars($_POST['myemail'], ENT_QUOTES, 'UTF-8'); ?><br>
                  Age: <?php echo htmlspecialchars($_POST['mySAge'], ENT_QUOTES, 'UTF-8'); ?><br>
                    Emergency Contact: <?php echo htmlspecialchars($_POST['myfname'], ENT_QUOTES, 'UTF-8'); ?><br>
                    Emergency Contact Number: <?php echo htmlspecialchars($_POST['mypnumber'], ENT_QUOTES, 'UTF-8'); ?><br>
                </p>
            </main>
        </div>
    </body>
</html>