 <?php
		include_once("database.php");
		session_start();
		ob_start();
		

?>

 <!DOCTYPE html>
 <html lang="en">

     <head>
         <title>Market MIS ( login )</title>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <!--===============================================================================================-->
         <link rel="icon" href="image/fav-icon.png" />
         <!--===============================================================================================-->
         <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
         <!--===============================================================================================-->
         <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
         <!--===============================================================================================-->
         <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
         <!--===============================================================================================-->
         <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
         <!--===============================================================================================-->
         <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
         <!--===============================================================================================-->
         <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
         <!--===============================================================================================-->
         <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
         <!--===============================================================================================-->
         <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
         <!--===============================================================================================-->
         <link rel="stylesheet" type="text/css" href="css/util.css">
         <!-- <link rel="stylesheet" type="text/css" href="css/main.css"> -->
         <!--===============================================================================================-->


         <?php

        if (isset($_POST["login_btn"])) {
            $_SESSION["username"] = $username = $_POST["username"];
            $_SESSION["password"]	= $password = $_POST["password"];
						$_SESSION["secret_code"] = $secret_code = $_POST["secret_code"];
            $sql_command = mysqli_query($connection,"select * from user_account where username = '$username' and password='$password' and secret_code='$secret_code'");
            $fetch = mysqli_fetch_assoc($sql_command);
            if ($fetch) {
              $_SESSION["user_id"] = $fetch["id"];
              header("location:home.php");
			}
			else{
				// header("location:home2.php");
            }

		}

        ?>



         <meta charset="utf-8">
         <meta name="author" content="Monir Ahmadyar">
         <meta name="viewport" content="width=device-width,initial-scale=1">

         <link rel="stylesheet" href="css/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" href="css/my-login.css">
         <style>
         #secret_code {
             display: none;
             width: 100%;
         }

         .b_font {
             font-family: b koodak;
         }
         </style>

     </head>

     <body class="my-login-page">
         <section class="">
             <div class="container ">
                 <div class="row justify-content-md-center">
                     <div class="card-wrapper">
                         <div class="brand" style="border:1px solid lightblue; ">
                             <img src="image/market logo.png" style="margin-top:10px;" alt="logo">
                         </div>
                         <div class="card fat" dir="rtl" style="border:1px solid lightblue; border-radius:5px;">
                             <div class="card-body">
                                 <h4 class="card-title" style="text-align:center;">Welcome To Market MIS</h4>
                                 <h4 class="card-title b_font" style="text-align:center;">خوش آمدید به سیستم مدیریت
                                     مارکیت </h4>
                                 <form method="POST" class="my-login-validation" novalidate="">
                                     <div class="form-group">
                                         <label for="email" class="b_font">Username ( نام کاربر )</label>
                                         <input id="email" type="text" class="form-control" name="username" value=""
                                             required autofocus>

                                     </div>

                                     <div class="form-group">
                                         <label for="password" class="b_font">Password ( رمز ورود )

                                         </label>
                                         <input id="password" type="password" onkeyup="secret()" class="form-control"
                                             name="password" required data-eye>

                                     </div>
                                     <div class="form-group ">
                                         <label for="code" class="b_font">Secret Code ( کود مخفی )

                                         </label>
                                         <input type="password" id="code" class="form-control" name="secret_code"
                                             required data-eye>

                                     </div>



                                     <div class="form-group m-0">
                                         <button type="submit" name="login_btn" class="btn btn-primary btn-block">
                                             Login
                                         </button>
                                     </div>

                                 </form>
                             </div>
                         </div>
                         <div class="footer">
                             Copyright &copy; <span id="copy"></span>
                             <script>
                             var d = new Date();
                             document.getElementById("copy").innerHTML = d.getFullYear();
                             </script> &mdash; <a href="https://www.asrepoya.com" target="_blank">asrepoya</a>
                         </div>
                     </div>
                 </div>
             </div>
         </section>

         <script src="js/jquery-3.3.1.slim.min.js"></script>
         <script src="js/jquery.min.js"></script>
         <script src="js/popper.min.js"></script>
         <script src="js/bootstrap.min.js"></script>
         <script src="js/my-login.js"></script>

     </body>

 </html>