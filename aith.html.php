<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Colton Poissant">

    <title>Ace in the hole</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat" rel="stylesheet">
    <link href="css/grid.css" rel="stylesheet" type="text/css">
    <link href="css/style.less" rel="stylesheet" type="text/css">


</head>

<body class="max-width">
    <header>
        <nav>
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn"><i class="fas fa-bars"></i></button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="#about">About</a>
                    <a href="#menu">Menu</a>
                    <a href="#contact">Contact</a>
                </div>
            </div>
        </nav>
        <h1>Ace in the Hole</h1>


    </header>
    <main>
        <section>
            <img class="mySlides" src="images/bicycle1.jpg" height="400px" width="600px">
            <img class="mySlides" src="images/bicycle2.jpg" height="400px" width="600px">
            <img class="mySlides" src="images/swim1.jpg" height="400px" width="600px">
            <img class="mySlides" src="images/swim2.jpg" height="400px" width="600px">
            <img class="mySlides" src="images/run1.jpg" height="400px" width="600px">
            <img class="mySlides" src="images/run2.jpg" height="400px" width="600px">
            <img class="mySlides" src="images/run3.jpg" height="400px" width="600px">

        </section>
        <section>
            <script type='text/javascript' src='https://darksky.net/widget/default/44.77941340534028,-120.98075499999999/us12/en.js?width=100%&height=350&title=Oregon &textColor=333333&bgColor=transparent&transparency=true&skyColor=undefined&fontFamily=Default&customFont=&units=us&htColor=333333&ltColor=C7C7C7&displaySum=yes&displayHeader=yes'></script>
        </section>
        <br>
        <br>
        <section id="about">
            <a href="#about">
                <h2><em>About Us</em></h2>
            </a>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </section>
        <br>
        <section>
            <h2>FAQ's</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo. Pellentesque diam volutpat commodo sed. Nulla facilisi morbi tempus iaculis urna id. Convallis convallis tellus id interdum. Aliquam etiam erat velit scelerisque in dictum. Elementum nibh tellus molestie nunc.</p>
        </section>
        <br>
        <section>

            <h2 class="Course"><a name="courses">Course Details</a>
            </h2>

            <div class="col span_6_of_12">
                <h3 class="h3center">Starting times</h3>
                <p>List item (li)<br>
                    List item (li)<br>
                    List item (li)<br>
                    List item (li)<br></p>
            </div>
        </section>
        <section>
            <div class="col span_6_of_12">

                <h3 class="h3center">Cost includes</h3>

                <p>List item (li)<br>
                    List item (li)<br>
                    List item (li)<br>
                    List item (li)<br></p>
            </div>
        </section>
        <br>
        <br>
        <section>
            <h2>What to bring</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo. Pellentesque diam volutpat commodo sed. Nulla facilisi morbi tempus iaculis urna id. Convallis convallis tellus id interdum. Aliquam etiam erat velit scelerisque in dictum. Elementum nibh tellus molestie nunc.</p>
        </section>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo. Pellentesque diam volutpat commodo sed. Nulla facilisi morbi tempus iaculis urna id. Convallis convallis tellus id interdum. Aliquam etiam erat velit scelerisque in dictum. Elementum nibh tellus molestie nunc.</p>
        <section>
            <div class="col span_6_of_12">
                <a name="registration">
                    <h2>Registration</h2>
                </a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo. Pellentesque diam volutpat commodo sed. Nulla facilisi morbi tempus iaculis urna id. Convallis convallis tellus id interdum. Aliquam etiam erat velit scelerisque in dictum. Elementum nibh tellus molestie nunc.</p>
            </div>
            <div class="col span_6_of_12">
                <form method="post" action="" class="regSection">

                    <input type="hidden" name="recipient" value="colton.poissant@pcc.edu">

                    <label for="myfname">First name:</label><br>
                    <input type="text" name="myfname" id="myfname" required><br>
                    <label for="mylname">Last name:</label><br>
                    <input type="text" name="mylname" id="mylname" required><br>
                    <label for="myemail"> E-mail:</label><br>
                    <input type="email" name="myemail" id="myemail" required><br>
                    <label for="mydate">Birthday:</label><br>
                        <input type="date" name="mydate" id="mydate" required><br>
                    <br>
                    <label for="mygender">Male:
                        <input type="radio" name="mygender" value="male" checked id="mygender">
                        Female:
                        <input type="radio" name="mygender" value="female" id="mygender">
                        Other:
                        <input type="radio" name="mygender" value="other" id="mygender"></label><br>
                    <label for="mycomments">Comments:</label><br>
                    <textarea rows="4" cols="25" name="mycomments" id="mycomments">Enter text here...</textarea><br>
                    <input id="mysubmit" type="submit" value="Submit">
                </form>
            </div>
        </section>
        <br>
        <section>
            <div class="contactLeft">
                <iframe class="google" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d178840.2328759938!2d-122.65438665!3d45.54270814999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54950b0b7da97427%3A0x1c36b9e6f6d18591!2sPortland%2C+OR!5e0!3m2!1sen!2sus!4v1557776923460!5m2!1sen!2sus" width="400" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </section>



    </main>
    <script src="js/slides.js"></script>
</body>

<footer>
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

</html>
