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

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $father_name = $_POST["father_name"];
    $work_area = $_POST["work_area"];
    $nawyat = $_POST["nawyat"];
    $email= $_POST["email"];
    $phone = $_POST["phone"];
    $home = $_POST["home"];
    $salary = $_POST["salary"];
    $user_id = $_POST["user_id"];
    // image upload
    $photo =$_FILES['photo']['name'];
    $sourcePath = $_FILES["photo"]["tmp_name"];
    $targetPath = "stuff_images/".$_FILES['photo']['name'];
    move_uploaded_file($sourcePath,$targetPath);
    // id upload
    $tazkira =$_FILES['tazkira']['name'];
    $sourcePath2 = $_FILES["tazkira"]["tmp_name"];
    $targetPath2 = "stuff_id/".$_FILES['tazkira']['name'];
    move_uploaded_file($sourcePath2,$targetPath2);
    $date_sh = $_POST["date_sh"];
    $date_m = date("Y/m/d");
    $sql_query_02 = mysqli_query($connection,
    "INSERT INTO `sabt_karmandan` (`id`, `user_id`, `name`, `lastname`, `father_name`, `work_area`, `nawyat`, `salary`, `Email`, `phone`, `home`, `photo`,`tazkira`,  `date_sh`, `date_m`) VALUES
     (NULL, '$user_id', '$name', '$lastname', '$father_name',
        '$work_area', '$nawyat', '$salary', '$email', '$phone', '$home','$photo', '$tazkira', '$date_sh', '$date_m')");
if($sql_query_02){
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
    <script>
    </script>

    <body class="my-login-page" style="">
        <section class="h-100" style=" padding:0px !important;">
            <div class="container-fluid h-100" style=" width:100%;">
                <div class="card-wrapper" style="width:100%;margin-top:1%; ">
                    <div class="card fat" style="">
                        <div class="card-body">

                            <h2 class="card-title b_font" style="text-align:center;">ثبت کارمندان</h2>
                            <hr>
                            <form method="POST" id="uploadForm" class="my-login-validation"
                                enctype="multipart/form-data" novalidate="">
                                <table class="table table-bordered table-striped" style="" dir="rtl">

                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">نام </label>
                                                <input name="name" id="name" type="text"
                                                    class="form-control text text-primary" style required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">تخلص</label>
                                                <input type="text" class="form-control" name="lastname" id="lastname"
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
                                                <label class="b_font">وظیفه</label>
                                                <input type="text" class="form-control" name="work_area" id="work_area"
                                                    required autofocus>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">نوعیت</label>
                                                <select class="form-control b_font" style="height:35px; width:100%"
                                                    name="nawyat" id="nawyat" required>
                                                    <option value="فول تایم">فول تایم</option>
                                                    <option value="پارت تایم">پارت تایم</option>
                                                    <option value="دیگر">دیگر</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">معاش</label>
                                                <input type="text" class="form-control" name="salary" id="salary"
                                                    required autofocus>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">ایمیل(اختیاری)</label>
                                                <input type="email" class="form-control" name="email" id="email"
                                                    autofocus>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">شماره تماس</label>
                                                <input type="text" class="form-control" name="phone" id="phone" required
                                                    autofocus>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">آدرس خانه</label>
                                                <textarea class="form-control" name="home" id="home" required
                                                    rows="5"></textarea>
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
                                        <td>
                                            <div class="card shadow">
                                                <div class="card-body">
                                                    <label class="b_font">اسکن تذکره</label>
                                                    <input type="file" id="tazkira" name="tazkira" class="dropify"
                                                        data-height="40" />
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">تاریخ</label>
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
                                        <td colspan="12">
                                            <div class="form-group m-0">
                                                <button type="submit" name="submit" id="loading"
                                                    class="btn btn-primary btn-block b_font "
                                                    style="font-weight:bold; font-size:14px;">
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
                            <a href="registered_stuff.php" style="float:right;">
                                <button type="button" name="button" class=" btn btn-success b_font">کارمندان ثبت
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