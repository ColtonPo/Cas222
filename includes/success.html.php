<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Portland Historical Tour Reservations</title>
        <meta name="description" content="Reserve your spot for a historical Portland Tour. Prices range from $50 to $80 per person.">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=../css/style.less>
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
                  First Name: <?php echo htmlspecialchars($_POST['myfname'], ENT_QUOTES, 'UTF-8'); ?><br>
                  Last Name: <?php echo htmlspecialchars($_POST['mylname'], ENT_QUOTES, 'UTF-8'); ?><br>
                  Email: <?php echo htmlspecialchars($_POST['myemail'], ENT_QUOTES, 'UTF-8'); ?><br>
                  Birth Date: <?php echo htmlspecialchars($_POST['mydate'], ENT_QUOTES, 'UTF-8'); ?><br>
                  Gender: <?php echo htmlspecialchars($_POST['mygender'], ENT_QUOTES, 'UTF-8'); ?><br>
                    Comments: <?php echo htmlspecialchars($_POST['mycomments'], ENT_QUOTES, 'UTF-8'); ?><br>
                </p>
            </main>
        </div>
    </body>
</html>