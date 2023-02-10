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
// uploading keraya dokakin Form Data to database
  if (isset($_POST["submit1"])) {
    $user_id = $_POST["user_id"];
    $par_name = $_POST["par_name"];
    $father_name = $_POST["father_name"];
    $dokan_numb = $_POST["dokan_number"];
    $dokan_number = implode(",",$dokan_numb);
    $payer = $_POST["payer"];
    $majmo_meqdar = $_POST["majmo_meqdar"];
    $meqdar_perdakhty = $_POST["meqdar_perdakhty"];
    $total = $majmo_meqdar - $meqdar_perdakhty;
    
    $file=$_FILES['file']['name'];
    $sourcePath = $_FILES["file"]["tmp_name"];
    $targetPath = "documents/".$_FILES['file']['name'];
    move_uploaded_file($sourcePath,$targetPath);
    $date_sh = $_POST["date_sh"];
    
    // $date_m = date("Y/m/d");
    
    $date_sh_exp = explode("/",$date_sh);
    $date_m =  jalali_to_gregorian($date_sh_exp[2],$date_sh_exp[1],$date_sh_exp[0],'/');
                                    
    $sql_query_09 = mysqli_query($connection,
    "INSERT INTO `kerah_dokan` (`id`, `user_id`, `par_name`,`father_name`,`dokan_number`,`payer`, `majmo_meqdar`, `meqdar_perdakhty`, `total`, `file`,`date_sh`,`date_m`)
     VALUES (NULL, '$user_id', '$par_name','$father_name', '$dokan_number','$payer', '$majmo_meqdar', '$meqdar_perdakhty', '$total','$file','$date_sh','$date_m')");
if($sql_query_09){
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
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link href="css/select2.min.css" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="css/util.css">
        <!-- <link rel="stylesheet" type="text/css" href="css/main.css"> -->
        <link type="text/css" href="css/persian-datepicker.css" rel="stylesheet" />
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/persian-datepicker.js"></script>
        <!-- <script src="select2/js/select2.full.js"></script> -->
        <script src="js/select2.min.js"></script>


        <!-- file uploads js -->
        <script src="fileuploads/js/dropify.min.js"></script>
        <script src="fileuploads/js/dropify.min.js"></script>
        <!-- <script src="js/jquery-3.3.1.slim.min.js"></script> -->

        <script src="js/bootstrap.min.js"></script>
        <script src="js/persian-datepicker.js"></script>
        <script src="js/my-login.js"></script>
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

        /* .my-login-page {
        background-color: #222222;
    } */
        label {
            color: black;
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

    <body class="my-login-page">
        <section class=" h-100" style=" padding:0px !important;">
            <div class="container-fluid h-100" style=" width:100%;">
                <div class="card-wrapper" style="width:100%;margin-top:1%; ">
                    <div class="card fat" style="">
                        <div class="card-body">
                            <br>
                            <h1 class="card-title b_font" style="text-align:center;">کرایه دکاکین</h1>
                            <a href="salary.php" style="float:right;">
                            </a>

                            <hr>

                            <form method="POST" id="uploadForm" class="my-login-validation"
                                enctype="multipart/form-data" novalidate="">
                                <table class="table table-striped" dir="rtl">
                                    <tr>

                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">نام</label>
                                                <input type="text" class="form-control" name="par_name" id="par_name"
                                                    required autofocus>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">شخص پرداخت کننده</label>
                                                <input type="text" class="form-control" name="payer" id="payer" required
                                                    autofocus>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">فایل پرداخت</label>
                                                <input type="file" class=" form-control" name="file" id="file"
                                                    autofocus>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">نام پدر</label>
                                                <input type="text" class="form-control" name="father_name"
                                                    id="father_name" required autofocus>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">مجموع مقدار</label>
                                                <input type="text" class="form-control" name="majmo_meqdar"
                                                    id="majmo_meqdar" required autofocus>
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

                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">نمبر های دکان </label>
                                                <select style="height:30px; border:1px solid red; width:100%;"
                                                    class="js-example-basic-multiple form-control" id="dokan_number"
                                                    name="dokan_number[]" multiple="multiple">
                                                    <?php
                                                    $sql_query_06 = mysqli_query($connection,
                                                    "select dokan_number from reg_dokan");
                                                    while ($fetch_06 = mysqli_fetch_assoc($sql_query_06)) {
                                                    ?>
                                                    <option value="<?php echo $fetch_06["dokan_number"]; ?>">
                                                        <?php echo $fetch_06["dokan_number"]; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">مقدار پرداختی</label>
                                                <input type="text" class="form-control" name="meqdar_perdakhty"
                                                    id="meqdar_perdakhty" required autofocus>
                                            </div>
                                        </td>
                                    </tr>

                                    <input type="text" name="user_id" value="<?php if (isset($_SESSION["user_id"])) {
																			echo $_SESSION["user_id"];
																		}?>" style="display:none" />
                                    <tr>
                                        <td colspan="12">
                                            <div class="form-group m-0">
                                                <button type="submit" id="loading" name="submit1"
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
                            <a href="kera_pardakht_shoda.php" style="float:right;">
                                <button type="button" name="button" class=" btn btn-success b_font">کرایه های پرداخت
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
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
        $(function() {

            $('#date_sh').datepicker({
                changeMonth: true,
                changeYear: true
            });
        });
        </script>

    </body>

</html>