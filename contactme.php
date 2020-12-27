<?php

    $msg = '';
    if(isset($_POST['email']) && $_POST['email']!='') {

        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $body = 'You were sent an email from:'."\n"."\t".'<'.$userEmail.'>'."\n".'The message says:'."\n"."\t".$_POST['body'];
        $to = 'sejlaburnic@gmail.com';
        $subject = 'Resume Email';

        mail($to, $subject, $body);
        $msg='Email was sent!';
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style/index.css" type="text/css" rel="stylesheet">

    <title>Sejla Burnic - Contact Me</title>
</head>
<body>

<header id="top">
    <nav>
        <ul class="TopMenu">
            <li><a href="index.html">Home</a></li>
            <li><a href="photography.html">Photography</a></li>
            <li>Projects
                <ul class="TopSubmenu">
                    <li><a href="https://jinx244.github.io/CS412-Project-1/" target="_blank">First Project</a></li>
                    <li><a href="https://jinx244.github.io/CS412-Project-2/" target="_blank">Second Project</a></li>
                    <li><a href="https://jinx244.github.io/CS412-Project-3/" target="_blank">Third Project</a></li>
                </ul>
            </li>
            <li><a href="contactme.php">Contact</a>
            <li>Social Media
                <ul class="TopSubmenu">
                    <li><a href="https://www.linkedin.com/in/%C5%A1ejla-burni%C4%87-9a23451b9/?originalSubdomain=ba" target="_blank">LinkedIn</a></li>
                    <li><a href="https://github.com/jinx244" target="_blank">GitHub</a></li>
                    <li><a href="https://www.instagram.com/occultaluna/" target="_blank">Instagram</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>

<div class="Form">

    <h1>Contact Me</h1>
    <form action="contactme.php" method="POST">

        <label for="name">First and Last Name:</label>
        <input type="text" id="name" name="name" placeholder="Your name..." required>

        <br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" placeholder="Your E-mail..." required>

        <br>

        <label for="message">Your Message:</label>
        <textarea rows="4" type="text" id="body" name="body" placeholder="Your message..." required></textarea>

        <input type="submit">

        <?php
            echo '<h3>';
                echo $msg;
            echo '</h3>';
        ?>
    </form>
</div>

<footer>

    <div class="FooterLeftColumn">

        <h3>Menu</h3>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="photography.html">Photography</a></li>
            <li>Projects
                <ul>
                    <li><a href="https://jinx244.github.io/CS412-Project-1/" target="_blank">First Project</a></li>
                    <li><a href="https://jinx244.github.io/CS412-Project-2/" target="_blank">Second Project</a></li>
                    <li><a href="https://jinx244.github.io/CS412-Project-3/" target="_blank">Third Project</a></li>
                </ul>
            </li>
            <li><a href="contactme.php">Contact</a>
            <li>Social Media
                <ul>
                    <li><a href="https://www.linkedin.com/in/%C5%A1ejla-burni%C4%87-9a23451b9/?originalSubdomain=ba" target="_blank">LinkedIn</a></li>
                    <li><a href="https://github.com/jinx244" target="_blank">GitHub</a></li>
                    <li><a href="https://www.instagram.com/occultaluna/" target="_blank">Instagram</a></li>
                </ul>
            </li>
        </ul>

    </div>

    <div class="FooterMiddleColumn">
        <h3>Info</h3>
        <p>This website was built as a project for my Web Application Development class.
            It was made using HTML, CSS, JavaScript and PHP.
        </p>
    </div>

    </div>

    <div class="FooterRightColumn">

        <h3>Social Media</h3>

        <a href="https://www.linkedin.com/in/%C5%A1ejla-burni%C4%87-9a23451b9/?originalSubdomain=ba" target="_blank"><img src="https://image.flaticon.com/icons/png/512/61/61109.png" width="40"></a>
        <a href="https://github.com/jinx244" target="_blank"><img src="images/githublogo.png" width="40"></a>
        <a href="https://www.instagram.com/occultaluna/" target="_blank"><img src="images/instagramlogo.png" width="40"></a>

    </div>

</footer>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<script src="function.js"></script>

</body>
</html>