<?php
session_start();
include_once "php/config.php";
// Check if user is not logged in
if (!isset($_SESSION['unique_id'])) {
    header("Location: index.php"); // Redirect to login page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartik | Profile</title>

    <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- My CSS Attached -->
    <link rel="stylesheet" href="assets/css/MyStyle.css">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="NavBar">
        <nav>
            <a class="NavItem active" href="Profile.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                </svg>
                <span>Profile</span>
            </a>

            <a class="NavItem" href="Details.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-pencil-fill" viewBox="0 0 16 16">
                    <path
                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                </svg>
                <span>Details</span>
            </a>

            <a class="NavItem" href="Skills.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-terminal-fill" viewBox="0 0 16 16">
                    <path
                        d="M0 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3zm9.5 5.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zm-6.354-.354a.5.5 0 1 0 .708.708l2-2a.5.5 0 0 0 0-.708l-2-2a.5.5 0 1 0-.708.708L4.793 6.5 3.146 8.146z" />
                </svg>
                <span>Skills</span>
            </a>

            <a class="NavItem" href="ShowCase.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-window"
                    viewBox="0 0 16 16">
                    <path
                        d="M2.5 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm1 .5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                    <path
                        d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm13 2v2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zM2 14a1 1 0 0 1-1-1V6h14v7a1 1 0 0 1-1 1H2z" />
                </svg>
                <span>Projects</span>
            </a>

            <a class="NavItem" href="Message.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chat-square-quote-fill" viewBox="0 0 16 16">
                    <path
                        d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm7.194 2.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 4C4.776 4 4 4.746 4 5.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 7.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 4c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z" />
                </svg>
                <span>Message</span>
            </a>
        </nav>
    </div>



    <div class="Main">
        <div class="Profile">
            <p class="Hey">Hey, I'm</p>
            <img class="MyImg" src="assets/img/My_Img.jpg" alt="My Image" id="myImg" data-bs-toggle="tooltip"
            data-bs-placement="right"
            data-bs-original-title="Click to zoom Image">
            <p class="MyName">Kartik Bambhaniya</p>
            <p class="MyIntro">I’m Web Developer,<br>Front-end Developer &<br>Student of Artificial Intelligence</p>
            <div class="SocialMedia">
                <a href="https://mail.google.com/mail/?view=cm&to=2005.bkartikh@gmail.com" target="_blank" data-bs-toggle="tooltip"
                data-bs-placement="bottom"
                data-bs-original-title="Gmail">
                    <img src="https://img.icons8.com/3d-fluency/94/gmail.png" alt="Gmail" />
                </a>
                <a href="https://www.linkedin.com/in/KartikBambhaniya" target="_blank" data-bs-toggle="tooltip"
                data-bs-placement="bottom"
                data-bs-original-title="LinkedIn">
                    <img src="https://img.icons8.com/3d-fluency/94/linkedin.png" alt="linkedin" />
                </a>
                <a href="https://github.com/BambhaniyaKartik" target="_blank" data-bs-toggle="tooltip"
                data-bs-placement="bottom"
                data-bs-original-title="Github">
                    <img src="https://img.icons8.com/3d-fluency/94/github.png" alt="GitHub" />
                </a>
            </div>
        </div>
    </div>

    <div class="Modal" id="Modal">
        <div class="ImageZoom">
            <img src="assets/img/My_Img.jpg" alt="My Image">
            <button id="Back">Back</button>
        </div>
    </div>

    <div id="Anime_Colors">
        <div class="Color1"></div>
        <div class="Color2"></div>
        <div class="Color3"></div>
        <div class="Color4"></div>
    </div>


    <!-- My JavaScript Attached -->
    <script src="assets/js/MyJS.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        var Anime = document.getElementById("Anime_Colors");

        setTimeout(function () {
            Anime.style.display = "none";
        }, 2000);
    </script>
</body>

</html>