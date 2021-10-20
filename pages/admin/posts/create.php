<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <link rel="stylesheet" href="../../../assets/css/admin.css">
    <!--fonts.google-->
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    <!--fonts.awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../../Images/favicon.png"type="image/x-icon">

    <title>Admin Section User - Add Posts</title>

</head>

<body>



<?php
    require "../header.php";
?>

    <!--Admin wrapper-->

    <div class="admin-wrapper">

        <!--left-sidebar-->
        <div class="left-sidebar">
            <ul>
                <li><a href="index.php">Manage Posts</a></li>
                <li><a href="../users/index.php">Manage Users</a></li>
                <li><a href="../topics/index.php">Manage Topics</a></li>
            </ul>
        </div>
        <!--//left-sidebar-->


        <!--admin-content-->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Post</a>
                <a href="index.php" class="btn btn-big">Manage Posts</a>
            </div>

            <div class="content">
                <h2 class="page-title">Add Posts</h2>

                <form action="create.php" method="post">
                    <div>
                        <label>Title</label>
                        <input type="text" name="title" class="text-input">
                    </div>
                    <div>
                        <label>Body</label>
                        <textarea name="body" id="body"></textarea>
                    </div>
                    <div>
                        <label>Image</label>
                        <input type="file" name="image" class="tex-input">
                    </div>
                    <div>
                        <label>Category</label>
                        <select name="topic" class="text-input">
                            <option value="Pastries">Pasries</option>
                            <option value="Dinners">Dinners</option>
                            <option value="Breakfast">Breakfast</option>
                            <option value="Cakes">Cakes</option>
                            <option value="Soups">Soups</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-big">Add Post</button>
                    </div>
                </form>
            </div>
        </div>
        <!--//admin-content-->
    </div>




    <!----//Admin  wrapper-->




    <!---- JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>

    <!--Ckeditor-->
    <script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>

    <!-- Custom Script-->
    <script src="../../../assets/js/script.js"></script>
</body>


</html>