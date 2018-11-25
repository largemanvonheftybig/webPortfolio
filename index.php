<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Portfolio</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.typekit.net/poo8geu.css">
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <div class="container-fluid">

        <nav class="nav sticky-top" role="navigation">
            <a class="nav-link active" href="#">Owen King</a>
            <a class="nav-link" href="#">Projects</a>
            <a class="nav-link" href="#">About</a>
            <a class="nav-link " href="#">Contact</a>
            <a class="nav-link " href="#">Resume</a>
            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#contactModal" id="emailButton">Email Me!</button>
        </nav>
        <div class="jumbotron">

            <h1 id="title">Owen King</h1>
            <h2 id="subtitle">Game Design Student</h2>

        </div>
        <div class="row">
            <div class="col-12">
                <h2 id="projectText">Projects</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card" style="width: 90%;">
                    <img class="card-img-top" src="johnamerica menu.PNG" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">John America: Jabroni Apocalypse</h5>
                        <p class="card-text">John America Jabroni Apocalypse is a first year game development project. It was a group project
                            in which i worked with 2 other students. My role in this project was conceptualizing the game
                            as a whole, along with designing how the game would work, such as gameplay mechanics like moving,
                            shooting and weapon types. Along with this design, I also coded enemy spawns, and weapon mechanics
                            span spawning.
                        </p>
                        <a href="www.lingscars.com" class="jabroniButton">View Project On GitHub</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card" style="width: 90%;">
                    <img class="card-img-top" src="asteroids.PNG" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Asteroids</h5>
                        <p class="card-text">Asteroids is a second year solo project for game development. For this project, we were tasked to
                            make a clone of asteroids from the ground up along with a some sort of gameplay twist. For my
                            project, i added a boss asteroid enemy to my game as a way to create a unique experience with
                            the already classic asteroids.
                        </p>
                        <a href="#" class="jabroniButton">View Project On GitHub</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="dogCard">
            <div class="row">
                <div class="col-12">
                    <div class="card" style="width: 60%;">
                        <img class="card-img-top" src="dogapi.PNG" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Dog Finder</h5>
                            <p class="card-text">A web project in which I was tasked to create a online media app using an API this project helped
                                me further my skills in javascript and API coding. Also, this project introduced me to HTML
                                and CSS libraries such as skeleton.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="aboutMeTitle">
            <div class="row">
                <div class="col-12">
                    <h2 id="aboutMeText">About Me</h2>
                </div>
            </div>
        </div>
        <div class="aboutRow">
            <div class="row">
                <div class="col-6">
                    <img id="me" src="me.jpg">
                </div>
                <div class="col-6">
                    <p id="bioText">My Name is Owen King and I am currently studying game design and Development at RIT. Ive always had an
                        interest in video games and I came to rit to fully apply myself to a career in video games and code.
                        I enjoy making interactive programs and games that I think I myself woud enjoy. On this site you
                        can find some examples of my past work along with contact information.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2 id="contactText">Contact Me</h2>
            </div>
        </div>

        <div class="row">

            <div class="col-4">
                <a href="https://github.com/largemanvonheftybig">
                <img class="logos" src="hglogo.png">
                </a>
            </div>
            <div class="col-4">
                    <a href="https://www.facebook.com/owen.king.39501">
                <img class="logos" src="facebook.png">
                </a>
            </div>
            <div class="col-4">
                    <a href="https://www.linkedin.com/in/owen-king-945547172/">
                <img class="logos" src="linkedin.jpg">
                </a>
            </div>

        </div>
        <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Email Contact Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <h1>Shoot me a message below</h1>
                            <label>Name</label>
                            <input type="text" class="form-control" name ="recipient-name" id = "recipient-name">
                        </div>
                        <div class="row">
                            <label>Your Email</label>
                            <input type="text" class="form-control" name ="recipient-email" id = "recipient-email">
                        </div>

                        <div class="row">
                            <label>Message</label>
                            <textarea class="form-control"  name="message-text" id = "message-text"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="submit" name="submit" data-dismiss="modal">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
    <!--end container-->

    <?php
    if(isset($_POST["submit"]))
    {
        $to = "oek8462@g.rit.edu";
        
        $from = empty(trim($_POST["recipient-email"])) ? "noemail@sample.com" : sanitize_string($_POST["recipient-email"]);

        $subject = "Web Form";

        $message = empty(trim($_POST["message-text"])) ?  "No message" : sanitize_string($_POST["message-text"]);

        $name = empty(trim($_POST["recipient-name"])) ? "No name" : sanitize_string($_POST["recipient-name"]);

        $sent = mail($to,$subject,$message,$headers);
        if ($sent){
            echo "<p><b>You sent:</b> $message</p>";
        }else{
            echo "<p>Mail not sent!</p>";
        }
    }
    ?>







        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
</body>

</html>