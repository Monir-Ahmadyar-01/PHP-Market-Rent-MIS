<?php 
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:index.php');
    exit;
}
?>

<?php
  include_once("database.php");
  include_once("jdf.php");
  include_once("redirect.php");
 ?>
<?php
   if (isset($_POST["submit1"])) {
    $user_id = $_POST["user_id"];
    $dokan_number = $_POST["dokan_number"];
    $marbot = $_POST["marbot"];
     $father_name = $_POST["father_name"];
     $grandfather = $_POST["grandfather"];
     $tazkira = $_POST["tazkira"];
     $phone = $_POST["phone"];
    $description  = $_POST["description"];
  
    $photo=$_FILES['photo']['name'];
    $sourcePath1 = $_FILES["photo"]["tmp_name"];
    $targetPath1 = "documents/".$_FILES['photo']['name'];
    move_uploaded_file($sourcePath1,$targetPath1);
    $documents=$_FILES['file_upload']['name'];
    $sourcePath = $_FILES["file_upload"]["tmp_name"];
    $targetPath = "documents/".$_FILES['file_upload']['name'];
    move_uploaded_file($sourcePath,$targetPath);
    $date_sh = $_POST["date_sh"];
    $date_m = date("Y/m/d");
    $sql_query_01 = mysqli_query($connection,
    "INSERT INTO `reg_dokan` (`id`, `user_id`, `dokan_number`, `marbot`,`father_name`,`grandfather`,`tazkira`,`phone`, `description`,`photo`, `documents`, `date_sh`, `date_m`)
     VALUES (NULL, '$user_id', '$dokan_number', '$marbot', '$father_name', '$grandfather', '$tazkira', '$phone', '$description','$photo', '$documents','$date_sh','$date_m')");
     if($sql_query_01){
        echo "<script>alert('اطلاعات موفقانه ثبت گردید!')</script>";
        
        }  
        else{
            echo "<script>alert('خطا در ثبت اطلاعات')</script>";
          
        } 
    
    }
 
 ?>


<!DOCTYPE html>
<html lang="en">

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

        body {
            background-color: #e6f2ff !important;
        }

        .table,
        tr,
        td {
            border: 1px solid #99ccff !important;
        }
        </style>
    </head>
    <script>
    </script>

    <body class="my-login-page" style="">
        <section class="h-100" style=" padding:0px !important;">
            <div class="container-fluid h-100" style=" width:100%;">
                <div class="card-wrapper" style="width:100%;margin-top:1%; ">
                    <div class="card fat" style="">
                        <div class="card-body">


                            <h2 class="card-title b_font" style="text-align:center;">ثبت دکاکین</h2>
                            <hr>
                            <form method="POST" id="uploadForm" class="my-login-validation"
                                enctype="multipart/form-data" novalidate="">
                                <table class="table table-bordered table-striped" dir="rtl">

                                    <tr>


                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">نمبر دکان </label>
                                                <input name="dokan_number" id="dokan_number" type="text"
                                                    class="form-control" required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">نام</label>
                                                <input type="text" class="form-control" name="marbot" id="marbot"
                                                    required autofocus>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">نام پدر</label>
                                                <input type="text" class="form-control" name="father_name"
                                                    id="father_name" required autofocus>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">ولدیت</label>
                                                <input type="text" class="form-control" name="grandfather"
                                                    id="grandfather" required autofocus>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">مشخصات تذکره</label>
                                                <input type="text" class="form-control" name="tazkira" id="tazkira"
                                                    required autofocus>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">شماره تماس</label>
                                                <input type="text" class="form-control" name="phone" id="phone" required
                                                    autofocus>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">توضیحات</label>
                                                <textarea class="form-control" name="description" id="description"
                                                    required rows="5"></textarea>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="card shadow">
                                                <div class="card-body">
                                                    <label class="b_font">عکس</label>
                                                    <input type="file" id="photo" name="photo" class="dropify"
                                                        data-height="40" />
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="card shadow">
                                                <div class="card-body">
                                                    <label class="b_font">اسناد</label>
                                                    <input type="file" id="file_upload" name="file_upload"
                                                        class="dropify" data-height="40" />
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">تاریخ تسلیمی</label>
                                                <input type="text" class="form-control" name="date_sh" id="date_sh"
                                                    value="<?php echo jdate("d/m/Y","","","Asia/kabul","en");?>"
                                                    required autofocus>
                                            </div>
                                        </td>

                                    </tr>
                                    <input type="text" name="user_id" value="<?php if (isset($_SESSION["user_id"])) {
																			echo $_SESSION["user_id"];
																		}?>" style="display:none" />
                                    <tr>
                                        <td colspan="10">
                                            <div class="form-group m-0">
                                                <button type="submit" name="submit1" id="loading"
                                                    class="btn btn-primary btn-block">
                                                    ذخیره
                                                </button>

                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <div id="state" style="width:49%; direction: rtl;float:right;" class="">
                                        </div>
                                    </tr>
                                </table>

                            </form>
                            <a href="registered_shops.php" style="float:right;">
                                <button type="button" name="button" class=" btn btn-success b_font">دکاکین ثبت
                                    شده</button>
                            </a>
                        </div>
                    </div>

                </div>
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
            $('#date_sh').datepicker({
                changeMonth: true,
                changeYear: true
            });
        });
        </script>

    </body>

</html>