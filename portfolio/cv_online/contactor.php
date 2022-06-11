<?php 

    $firstname = $name = $email = $phone = $message = "";
    $firstnameError = $nameError = $emailError = $phoneError = $messageError = "";
    $isSuccess = false;
    $emailTo = "contact@gabistam.com";

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $firstname = verifyInput($_POST["firstname"]);
        $name = verifyInput($_POST["name"]);
        $email = verifyInput($_POST["email"]);
        $phone = verifyInput($_POST["phone"]);
        $message = verifyInput($_POST["message"]);
        $isSuccess = true;
        $emailText = "";

        if(empty($firstname))
        {
            $firstnameError = "Aïe! Il y'a un petit problème avec votre prénom!";
            $isSuccess = false;
        }
        else
        {
            $emailText .= "Firstname: $firstname\n";
        }

        if(empty($name))
        {
            $nameError = "Aïe! Il y'a un petit problème avec votre nom!";
            $isSuccess = false;
        }
        else
        {
            $emailText .= "Name: $name\n";
        }

        if(!isEmail($email))
        {
            $emailError = "Aïe! Il y'a un petit problème avec votre adresse email!";
            $isSuccess = false;
        }
        else
        {
            $emailText .= "Email: $email\n";
        }

        if(!isPhone($phone))
        {
            $phoneError = "Aïe! Il y'a un petit problème avec votre téléphonne!";
            $isSuccess = false;
        }
        else
        {
            $emailText .= "Phone: $phone\n";
        }
        if(empty($message))
        {
            $messageError = "Aïe! Il y'a un petit problème avec votre message!";
            $isSuccess = false;
        }
        else
        {
            $emailText .= "Message: $message\n";
        }

        if($isSuccess)
        {
            $headers = "From: $firstname $name <$email>\r\nReply-To: $email";
            mail($emailTo, "Un message de mon site-CV", $emailText, $headers);
            $firstname = $name = $email = $phone = $message = "";

        }

    }

    function isPhone($var)
    {
        return preg_match("/^[0-9 ]*$/", $var);
    }

    function isEmail($var)
    {
        return filter_var($var, FILTER_VALIDATE_EMAIL);
    }

    function verifyInput($var)
    {
        $var = trim($var);
        $var = stripslashes($var);
        $var = htmlspecialchars($var);
        return $var;
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Contactez-moi !</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
        crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    
</head>
<body>

    <!--=====================================
                    NAVBAR
==============================================-->

   
        <nav class="navbar navbar-expand-md navbar-dark sticky-top">
            <a class="navbar-brand" href="#"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                <i class="fas fa-bars fa-lg"></i>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="myNavbar">
                <ul class="nav nav-pills navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.html#about">Moi</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html#experience">Expériences</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html#formations">Formations</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html#skills">Compétences</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html#personnality">Personnalité</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html#portfolio">Portfolio</a></li>
                    <li class="nav-item" id="contact-link"><a class="nav-link" href="#" >Contactez-moi</a></li>

                </ul>
            </div>
        </nav>
    
    <!-- =====================================
                    CONTACT-FORM
==================================================-->

    <section id="contactor">
        <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>Contactez-moi</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> " role="form">
                        
                        <div class="row">
                            <div class="col-md-6">
                                <label for="firstname">Prénom <span class="blue">  *</span></label>
                                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" value="<?php echo $firstname; ?>" >
                                <p class="comments"><?php echo $firstnameError; ?></p>

                            </div>
                            <div class="col-md-6">
                                <label for="name">Nom <span class="blue"> *</span></label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom" value="<?php echo $name; ?>" >
                                <p class="comments"><?php echo $nameError; ?></p>

                            </div>
                            <div class="col-md-6">
                                <label for="email">Email <span class="blue"> *</span></label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Votre Email" value="<?php echo $emailTo; ?>" >
                                <p class="comments"><?php echo $emailError; ?> </p>
                            
                            </div>
                            <div class="col-md-6">
                                <label for="phone">Téléphone </label>
                                <input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre téléphone" value="<?php echo $phone; ?>" >
                                <p class="comments"><?php echo $phoneError; ?></p>
                            </div>
                            <div class="col-md-12">
                                <label for="message">Message </label>
                                <textarea name="message" id="message" class="form-control" rows="4" placeholder="Votre message" value="<?php echo $message; ?>" ></textarea>
                                <p class="comments"><?php echo $messageError; ?></p>

                                <div class="col-md-12"> 
                                    <p class="blue"><strong>* Ces informations sont requises</strong></p> 
                                </div>

                                <div class="col-md-12">
                                    <input type="submit" class="button2" value="Envoyez">  
                                </div>
                            
                            </div>
                            <p class="thank-you" style="display: <?php if($isSuccess) echo 'block'; else echo 'none'; ?> " >Votre message a bien été envoyé. Merci de m'avoir contacté :) </p>                

                        </div>
                    </form>
                </div>
                
            </div>

        </div>
    </section>
    
</body>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>



</html>