
<?php
  include_once("database.php");
  include_once("jdf.php");
  include_once("redirect.php");
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

        .table,
        tr,
        td {
            border: 1px solid #99ccff !important;
        }

        body {
            background-color: #e6f2ff !important;
        }
        </style>
    </head>
    <?php if (isset($_POST["btn_submit"])) {
  $name = $_POST["name"];
  $user_id = $_POST["user_id"];
  $phone_1 = $_POST["phone_1"];
  $phone_2 = $_POST["phone_2"];
  $about = $_POST["about"];
  $address = $_POST["address"];
  $file_upload =$_FILES['file_upload']['name'];
  $sourcePath2 = $_FILES["file_upload"]["tmp_name"];
  $targetPath2 = "market_header/".$_FILES['file_upload']['name'];
  move_uploaded_file($sourcePath2,$targetPath2);
  if ($file_upload == "") {
    $sql_query_06 = mysqli_query($connection,"update market_info set user_id='$user_id',
    name='$name',phone_1='$phone_1',phone_2='$phone_2',about='$about',address='$address'");
    if ($sql_query_06) {
      echo "<script>alert('اطلاعات موفقانه ثبت شد');</script>";
    }
    else {
      echo "<script>alert('خطا در ذخیره اطلاعات دوباره امتحان نماید !');</script>";

    }
  }
  else{
    $sql_query_06 = mysqli_query($connection,"update market_info set user_id='$user_id',
    name='$name',phone_1='$phone_1',phone_2='$phone_2',about='$about',address='$address',page_header='$file_upload'");
    if ($sql_query_06) {
      echo "<script>alert('اطلاعات موفقانه ثبت شد');</script>";
    }
    else {
      echo "<script>alert('خطا در ذخیره اطلاعات دوباره امتحان نماید !');</script>";

    }
  }
} ?>

    <body class="my-login-page" style="">
        <section class="h-100" style=" padding:0px !important;">
            <div class="container-fluid h-100" style=" width:100%;">
                <div class="card-wrapper" style="width:100%;margin-top:1%; ">
                    <div class="card fat" style="">
                        <div class="card-body">

                            <h2 class="card-title b_font" style="text-align:center; ">ثبت معلومات مارکیت
                            </h2>
                            <hr>
                            <form method="POST" id="uploadForm" class="my-login-validation"
                                enctype="multipart/form-data" novalidate="">
                                <table class="table table-bordered table-striped" dir="rtl">

                                    <?php
                                      $sql_query_05 = mysqli_query($connection,"select * from market_info where id='1'");
                                      $fetch_05 = mysqli_fetch_assoc($sql_query_05);
                                     ?>
                                    <tr>


                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">نام </label>
                                                <input name="name" id="name" value="<?php echo $fetch_05["name"]; ?>"
                                                    type="text" class="form-control" required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">شماره تماس اولی</label>
                                                <input type="text" class="form-control"
                                                    value="<?php echo $fetch_05["phone_1"]; ?>" name="phone_1"
                                                    id="phone_1" required autofocus>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">شماره تماس دومی</label>
                                                <input type="text" class="form-control"
                                                    value="<?php echo $fetch_05["phone_2"]; ?>" name="phone_2"
                                                    id="phone_2" required autofocus>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">در باره مارکیت</label>
                                                <textarea class="form-control" name="about" id="about" required
                                                    rows="5"><?php echo $fetch_05["about"]; ?></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">آدرس</label>
                                                <textarea class="form-control" name="address" id="address" required
                                                    rows="5"><?php echo $fetch_05["address"]; ?></textarea>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="card shadow">
                                                <div class="card-body">
                                                    <label class="b_font">عکس بالای صفحات</label>
                                                    <input type="file" id="file" name="file_upload" class="dropify"
                                                        data-height="40" />
                                                </div>
                                            </div>
                                        </td>


                                    </tr>
                                    <input type="text" name="user_id" value="<?php if (isset($_SESSION["user_id"])) {
																			echo $_SESSION["user_id"];
																		}?>" style="display:none" />
                                    <tr>
                                        <td colspan="10">
                                            <div class="form-group m-0">
                                                <button type="submit" id="loading" name="btn_submit"
                                                    class="btn  b_font btn-primary btn-block">
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

    </body>

</html>