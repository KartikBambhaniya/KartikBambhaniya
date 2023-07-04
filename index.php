<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartik | Welcome</title>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <meta name="Description" content="This is Portfolio Site of Kartik Bambhaniya. Thanks for Visiting.">

    <!-- My CSS Attached -->
    <link rel="stylesheet" href="assets/css/MyStyle.css">
</head>

<body>

    <div class="Main">
        <div class="Profile">
            <p class="MyIntro">Hi, Welcome !!</p>
            <h5>Please fill details to<br>Make communication easy.</h5>
            <form action="php/login.php" method="post" autocomplete="off">
                <div class="Input_Field">
                    <input name="FName" class="Input" type="text" placeholder="First Name" required>
                </div>
                <div class="Input_Field">
                    <input name="LName" class="Input" type="text" placeholder="Last Name" required>
                </div>
                <div class="Button">
                    <input type="submit" value="Continue">
                </div>
            </form>
        </div>
    </div>


    <!-- Anime Colors -->
    <div id="Anime_Colors">
        <div class="Color1"></div>
        <div class="Color2"></div>
        <div class="Color3"></div>
        <div class="Color4"></div>
    </div>
    <script>
        var Anime = document.getElementById("Anime_Colors");
        setTimeout(function () {
            Anime.style.display = "none";
        }, 2000);
    </script>


    <!-- My JavaScript Attached -->
    <script src="assets/js/MyJS.js"></script>
    
</body>

</html>