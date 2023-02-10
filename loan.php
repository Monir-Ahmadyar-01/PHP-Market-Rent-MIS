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
 
  // uploading loan Form Data to database
  if (isset($_POST["submit1"])) {
	$name = $_POST["name"];
	$description = $_POST["description"];
	$job = $_POST["job"];
	$amount = $_POST["amount"];
	$qist = $_POST["qist"];
	$org_name = $_POST["org_name"];
	$qarza_type = $_POST["qarza_type"];
	$monthly_payment = $_POST["monthly_payment"];
	$date_sh = $_POST["date_sh"];
	$date_m = date("Y/m/d");
	$user_id = $_SESSION["user_id"];
	$sql_query_15 = mysqli_query($connection,
	"INSERT INTO `qarza` (`q_id`, `name`, `description`, `job`,`amount`,`qist`,`org_name`,`qarza_type`,`monthly_payment`,`user_id`,`date_sh`, `date_m`)
	 VALUES (NULL, '$name', '$description', '$job', '$amount','$qist','$org_name','$qarza_type','$monthly_payment','$user_id','$date_sh', '$date_m')");
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

    <body class="my-login-page">
        <section class="h-100" style=" padding:0px !important;">
            <div class="container-fluid h-100" style=" width:100%;">
                <div class="card-wrapper" style="width:100%;margin-top:1%; ">
                    <div class="card fat" style="">
                        <div class="card-body">
                            <h2 class="card-title b_font" style="text-align:center;">ثبت قرضه</h2>
                            <hr>
                            <form method="POST" id="uploadForm" class="my-login-validation"
                                enctype="multipart/form-data" novalidate="">
                                <table class="table table-bordered table-striped" dir="rtl">

                                    <tr>


                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">نام </label>
                                                <input name="name" id="name" type="text" class="form-control" required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">توضیحات</label>
                                                <input name="description" id="description" type="text"
                                                    class="form-control" required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">وظیفه</label>
                                                <input name="job" id="job" type="text" class="form-control" required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">مقدار</label>
                                                <input name="amount" id="amount" type="text" class="form-control"
                                                    required>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">قسط</label>
                                                <input type="text" class="form-control" name="qist" id="qist" required
                                                    autofocus>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">نام سازمان</label>
                                                <input type="text" class="form-control" name="org_name" id="org_name"
                                                    required autofocus>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">نوعیت</label>
                                                <input type="text" class="form-control" name="qarza_type"
                                                    id="qarza_type" required></input>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">پرداخت ماهانه</label>
                                                <input type="text" class="form-control" name="monthly_payment"
                                                    id="monthly_payment" required></input>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
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
                                        <td colspan="10">
                                            <div class="form-group m-0">
                                                <button type="submit" style="font-family:b koodak;" name="submit1"
                                                    id="loading" class="btn btn-primary btn-block">
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
                            <a href="registered_loan.php" style="float:right;">
                                <button type="button" name="button" class=" btn btn-success b_font">قرضه های ثبت
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