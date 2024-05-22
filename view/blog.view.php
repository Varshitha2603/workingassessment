<?php

require "controller/blog.controller.php";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <?php
            require "view/partials/nav.view.php";
        ?>
    </header>
    <main>
        <div class="blog_container">
            <h1>List of Blogs</h1>
            <div class="bog_content">
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Author Name</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($query){ ?>
                            <?php while ($row = mysqli_fetch_assoc($result)){ ?>
                                <tr>
                                    <td><?= $row['blog_title']; ?></td>
                                    <td><?= $row['blog_content']; ?></td>
                                    <td><?= $row['blog_author']; ?></td>
                                    <td><?= $row['blog_createdAt']; ?></td>
                                </tr>
                            <?php } ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <?php
        require "view/partials/footer.view.php";
    ?>
</body>
</html>
