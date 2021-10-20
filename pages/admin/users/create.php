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

    <title>Admin Section User - Add Users</title>

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
                <li><a href="../posts/index.php">Manage Posts</a></li>
                <li><a href="index.php">Manage Users</a></li>
                <li><a href="../topics/index.php">Manage Topics</a></li>
            </ul>
        </div>
        <!--//left-sidebar-->


        <!--admin-content-->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add User</a>
                <a href="index.php" class="btn btn-big">Manage Users</a>
            </div>

            <div class="content">
                <h2 class="page-title">Add Users</h2>

                <form action="create.php" method="User">
                    <div>
                        <label>Username</label>
                        <input type="text" name="Username"class="text-input">
                    </div>
            
                    <div>
                        <label>Email</label>
                        <input type="email" name="email"class="text-input">
                    </div>
            
                    <div>
                        <label>Password</label>
                        <input type="password" name="password"class="text-input">
                    </div>
            
                    <div>
                        <label>Password confirmation</label>
                        <input type="password" name="passwordconf"class="text-input">
                    </div>
                    <div>
                        <label>Role</label>
                        <select name="Role" class="text-input">
                            <option value="Admin">Admin</option>
                            <option value="Helper">Helper</option>
                           
                        </select>
                    </div>
                    
                    <div>
                        <button type="submit" class="btn btn-big">Add User</button>
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
    <script src="../../js/script.js"></script>
</body>


</html>