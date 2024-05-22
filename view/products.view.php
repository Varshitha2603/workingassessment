<?php
    require "controller/products.controller.php";
?>

<!--<!DOCTYPE html>-->
<html>
<head>
    <title>Product</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <?php
            require "partials/nav.view.php";
        ?>
    </header>
    <main>
        <div class="product_container">
            <?php while ($row = mysqli_fetch_assoc($result)){ ?>
            <div class="product_content">
                <h1><?= $row['product_name'] ?></h1><br>
                <img src="data:image/jpg;charset=utf8;base64,<?= base64_encode($row['product_image']); ?>" width="100px" height="200px"><br>
                <h5>Rs.<?= $row['product_price'] ?></h5><br>
                <p><?= $row['product_description'] ?></p>
            </div>
            <?php } ?>
        </div>
    </main>
    <footer>
        <?php
            require "partials/footer.view.php";
        ?>
    </footer>
</body>
</html>