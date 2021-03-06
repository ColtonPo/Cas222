<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Colton Poissant">

    <title>Ace in the Hole</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat" rel="stylesheet">
    <link href="../css/grid.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">


</head>

<body class="max-width">
<header>
    <a href="../aith.html.php"><h1>Ace in the Hole</h1></a>
</header>
<body>
<main>
    <!--display:hidden used for "active page" bar <span> in navigation bar -->
    <section class="section group">
            <h2>Splash n' Dash Registration Form - Parent/Guardian must complete</h2>
            <form method="post" action="index.php" id="splashForm">
                <label for="mySplashFName">First Name:</label>
                <input type="text" name="mySplashFName" id="mySplashFName" required><br><br>
                <label for="mySplashLName">Last Name:</label>
                <input type="text" name="mySplashLName" id="mySplashLName" required><br><br>
                <label for="mySAge">Age (the event is for ages 4-15):</label>
                <input type="text" name="mySAge" id="mySAge" placeholder="xx" required><br><br>
                <label for="mySplashShirt">Tech-shirt Size (universal sizing):</label><br>
                <select name="mySplashShirt">
                    <option value="4x">4x</option>
                    <option value="3x">3x</option>
                    <option value="2x">2x</option>
                    <option value="x-large">x-large</option>
                    <option value="large">large</option>
                    <option value="medium">medium</option>
                    <option value="small">small</option>
                    <option value="x-small">x-small</option>
                </select><br><br>
                <fieldset>
                    <label><strong>Parent/Guardian Contact Information:</strong></label><br>
                    <label for="myfname">Name</label>
                    <input type="text" name="myfname" id="myfname" placeholder="first last" required><br>
                    <label for="myemail">E-mail:</label>
                    <input type="text" name="myemail" id="myemail" required><br>
                    <label for="mypnumber">Phone Number</label>
                    <input type="text" name="mypnumber" id="mypnumber" placeholder="(xxx) xxx-xxxxx" required><br>
                    <label for="myevent">Have you registered for an adult event on Saturday or Sunday?</label><br>
                    <input type="radio" name="myEvent" value="yes">Yes
                    <input type="radio" name="myEvent" value="no">No<br>
                </fieldset><br>
                <input id="mySubmit" type="submit" value="Submit">
            </form>
            <h2>Athlete &amp; Volunteer Registration</h2>
            <p>If you would like to register as an athlete or volunteer for the Annual Ace in the Hole Multisport Weekend,
                please fill out our <a href="../aith.html.php">Registration Form</a>.</p>
    </section>
</main>
<footer>
    <section>
        <ul>
            <li>Portland, OR</li>
            <li><a href="tel:971-722-5695">971-722-5695</a></li><br>
            <li><a href="mailto:stwatson@pcc.edu">aceinthehole@events.com</a></li>
        </ul>
    </section>
    <section id="social">
        <li><iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fcas222cascade%2Fposts%2F619261201870938&width=500" width="500" height="191" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
        </li>
        <li>
            <blockquote class="twitter-tweet" data-lang="en">
                <p lang="en" dir="ltr">Any weather is training weather!</p>&mdash; CAS 222 (@pcccas222) <a href="https://twitter.com/pcccas222/status/1055566270580445185?ref_src=twsrc%5Etfw">October 25, 2018</a>
            </blockquote>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </li>
        <p><i>Copyright &copy; 2019 Ace in the hole</i></p>
    </section>
</footer>
</body>
