<!DOCTYPE html>
<html>
<head>
    <title>Website</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <?php
            require "view/partials/nav.view.php";
        ?>
    </header>
    <main>
        <img src="../Assets/background_img2.jpg" class="back_img">
        <div class="body_heading">
            <h1 class="heading">Welcome to the New DCKAP Palli</h1>
            <p class="sub_heading">You're in the right place!</p>
        </div>
        <div class="content">
            <p>Log in with same username & password then choose young default branch. Once logged in you will find your shopping lists, cart and company users will be there waiting for you.</p>
        </div>
        <div class="demo_form">
            <img src="../Assets/signup.jpg" class="sigup_img">
            <img src="../Assets/girl.jpg" class="girl_img">
        </div>
    </main>
    <footer>
        <?php
            require "partials/footer.view.php";
        ?>
    </footer>
</body>
</html>