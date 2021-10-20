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
    <title>Admin Section User - Posts</title>

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
                <h2 class="page-title">Manage Posts</h2>

                <table>
                    <thead>
                        <th>P#</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>first post</td>
                            <td>me</td>
                            <td><a href="" class="edit">edit</a></td>
                            <td><a href="" class="delete">delete</a></td>
                            <td><a href="" class="publish">publish</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>second post</td>
                            <td>Marko</td>
                            <td><a href="" class="edit">edit</a></td>
                            <td><a href="" class="delete">delete</a></td>
                            <td><a href="" class="publish">publish</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!--//admin-content-->
    </div>




    <!----//Admin  wrapper-->




    <!---- JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>




    <!-- Custom Script-->
    <script src="../../js/script.js"></script>
</body>


</html>