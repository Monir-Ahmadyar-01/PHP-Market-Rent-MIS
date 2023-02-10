<?php 
include_once("redirect.php");
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:index.php');
    exit;
}
?>
<?php

if (isset($_SESSION["username"])) {

}
else {
  header("location:index.php");
}
 ?>
<?php
  include_once("database.php");

  include_once("jdf.php");
 ?>
<?php 
 
 if (isset($_POST["submit1"])) {
	$title = $_POST["title"];
    $details = $_POST["details"];
    $file=$_FILES['file']['name'];
    $sourcePath = $_FILES["file"]["tmp_name"];
    $targetPath = "documents/".$_FILES['file']['name'];
    move_uploaded_file($sourcePath,$targetPath);
    $date_sh = jdate("d/m/Y","","","Asia/kabul","en");
	$date_sh_exp = explode("/",$date_sh);
    $date_m =  jalali_to_gregorian($date_sh_exp[2],$date_sh_exp[1],$date_sh_exp[0],'/');
    $user_id = $_SESSION["user_id"];   
    $sql_query_05 = mysqli_query($connection,"INSERT INTO `comment` (`id`, `user_id`, `name`, `details`, `file`, `date_sh`, `date_m`, `status`)
     VALUES (NULL, '$user_id', '$title', '$details', '$file', '$date_sh', '$date_m', '')");
    if($sql_query_05){
        echo "<script>alert('اطلاعات موفقانه ثبت گردید!')</script>";
        
        }  
        else{
            echo "<script>alert('خطا در ثبت اطلاعات')</script>";
          
        }
  }
 
 
 ?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">

    <head>
        <meta charset="utf-8">
        <meta name="author" content="Kodinger">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/persian-datepicker.css">
        <link rel="stylesheet" type="text/css" href="css/my-login.css">
        <link href="fileuploads/css/dropify.css" rel="stylesheet" type="text/css" />
        <script src="fileuploads/js/dropify.min.js"></script>
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/persian-datepicker.js"></script>
        <script src="js/my-login.js"></script>
        <!--===============================================================================================-->
        <link rel="icon" href="image/doctor assistant logo.png" />
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
        <link type="text/css" href="css/persian-datepicker.css" rel="stylesheet" />
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/persian-datepicker.js"></script>



        <!-- file uploads js -->
        <script src="fileuploads/js/dropify.min.js"></script>
        <!-- form Uploads -->
        <link href="fileuploads/css/dropify.css" rel="stylesheet" type="text/css" />

        <!--===============================================================================================-->
        <style>
        .b_font {
            font-family: b koodak;
        }

        table {
            direction: rtl;
        }

        th,
        td {
            text-align: center;
        }
        </style>
    </head>
    <script>
    </script>

    <body class="my-login-page" style="font-family:b koodak;">
        <section class="container ">
            <!--Contact heading-->
            <div class="row">
                <!--Grid column-->

                <div class="col col-md-5" dir="rtl">
                    <!--Form with header-->
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-primary text-white text-center py-2" style="height:100px;">
                                    <br>
                                    <br>
                                    <h3 class="m-0">ارتباط با ادمین</h3>
                                </div>
                            </div>
                            <div class="card-body p-3">
                                <div class="form-group">
                                    <label>عنوان</label>
                                    <div class="input-group mb-2 mb-sm-0">
                                        <input type="text" name="title" required class="form-control"
                                            id="inlineFormInputGroupUsername" placeholder="اینجا بنویسید">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>پیام </label>
                                    <div class="input-group mb-2 mb-sm-0">
                                        <textarea type="text" class="form-control" required style="font-size:15px;"
                                            rows="10" name="details"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>فایل قابل ضمیمه</label>
                                    <div class="input-group mb-2 mb-sm-0">
                                        <input type="file" class="form-control" name="file">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <input type="submit" name="submit1" value="ارسال"
                                        class="btn btn-primary btn-block rounded-0 py-3" style="font-size:17px;">
                                </div>


                            </div>
                    </form>
                </div>
            </div>
            <!--Grid column-->

            </div>
            <!--Grid column-->
            </div>
        </section>
        <script>
        $('.dropify').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': '',
                'error': ''
            },
            error: {
                'fileSize': 'The file size is too big (2M max).'
            }
        });
        </script>


        <script type="text/javascript">
        $(function() {
            $('#date_s').datepicker({
                changeMonth: true,
                changeYear: true
            });
        });
        </script>

    </body>

</html>