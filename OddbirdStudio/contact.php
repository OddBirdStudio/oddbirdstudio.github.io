<html>
<head>
    <title>Odd Bird Studio</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/animations.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />

<!-- A basic responsive reset -->
    <style>
        @-webkit-viewport { width: device-width; zoom: 1.0; }
           @-moz-viewport { width: device-width; zoom: 1.0; }
            @-ms-viewport { width: device-width; zoom: 1.0; }
             @-o-viewport { width: device-width; zoom: 1.0; }
                @viewport { width: device-width; zoom: 1.0; }
        html { overflow-y: auto; }
        img, audio, video, canvas { max-width: 100%; }
        /*  Sets body width */
        .container {
            max-width: 40em;
            width: 88%;
            margin-left: auto;
            margin-right: auto;
        }
    </style>

</head>
<body class="font-bundle-monstserrat xpos-center ypos-top">
    <!--[if lt IE 7]>
    <p class="browsehappy">
    You are using an <strong>outdated</strong> browser. Please
    <a href="http://browsehappy.com/">upgrade your browser</a> to improve
    your experience.
    </p>
    <![endif]-->
    
<header>
    <nav>
        <ul>
            <a href="home.html"><img id="logo" src="img/Logo_Circle_Small.jpg" alt="test" style="width:160px;height:160px;"></a>
            <li>
                    <a href="home.html" class="text">Home</a>
            </li>
            <li>
                    <a href="about.html" class="text">About</a>
            </li>
            <li>
                    <a href="projects.html" class="text">Projects</a>
            </li>
            <li>
                    <a href="contact.html" class="text">Contact</a>
            </li>
        </ul>
    </nav>
</header>

    <div id="awesome">

        <?php 
        $action=$_REQUEST['action']; 
        if ($action=="")    /* display the contact form */ 
            { 
            ?> 
            <form  action="" method="POST" enctype="multipart/form-data"> 
            <input type="hidden" name="action" value="submit"> 
            <label for="full-name">Name</label>
            <input name="name" type="text" value="" size="30"/><br> 
            <label for="email">Email</label>
            <input name="email" type="text" value="" size="30"/><br> 
            <label for="message">Message</label>
            <textarea name="message" class="message" rows="7" cols="30"></textarea><br> 
            <input type="submit" value="Send email"/> 
            </form> 
            <?php 
            }  
        else                /* send the submitted data */ 
            { 
            $name=$_REQUEST['name']; 
            $email=$_REQUEST['email']; 
            $message=$_REQUEST['message']; 
            if (($name=="")||($email=="")||($message=="")) 
                { 
                echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
                } 
            else{         
                $from="From: $name<$email>\r\nReturn-path: $email"; 
                $subject="Message sent using your contact form"; 
                mail("rycharg@gmail.com", $subject, $message, $from); 
                echo "Email sent!"; 
                } 
            }   
        ?> 
    <div>

    </div>

    </div>

    <a href="https://twitter.com/OddBirdStudio"><img id="social-media-twit" src="img/twitter.png" style="height:7%;width:3.5%;" alt="twitter"> </a>
    <a href="https://facebook.com/oddbirdgamedesign"><img id="social-media-faceb" src="img/facebook.png" style="height:7%;width:3.5%;" alt="facebook"/></a>

  <footer>
        &copy; Odd Bird Studio | 2016
    </footer>

</body>

</html>