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
        </style>
    </head>
    <?php if (isset($_POST["btn_submit"])) {
 

  $name = $_POST["name"];
  $job = $_POST["job"];
  $org_name = $_POST["org_name"];
  $qarza_type = $_POST["qarza_type"];
  $amount = $_POST["amount"];
  $monthly_payment = $_POST["monthly_payment"];
  $date_sh = $_POST["date_sh"];
  $date_m = date("Y/m/d");
  $user_id = $_SESSION["user_id"];
  $sql_query_03 = mysqli_query($connection,"select monthly_payment from qarza where name='$name' and org_name='$org_name' and job='$job'");
  $fetch_03 = mysqli_fetch_assoc($sql_query_03);
  $db_monthly_payment =$fetch_03["monthly_payment"];
  $total_monthly_payment = $db_monthly_payment + $monthly_payment;
  $sql_query_01 = mysqli_query($connection,"INSERT INTO `loan_qist` (`id`, `user_id`, `name`, `father_name`, `job`, `amount`, `pardakhty`, `date_sh`, `date_m`, `status`, `after_check`)
   VALUES (NULL, '$user_id', '$name', '', '$job', '$amount', '$monthly_payment', '$date_sh', '$date_m', '', '')");

   if($sql_query_01){
        $sql_query_04 = mysqli_query($connection,"update qarza set monthly_payment ='$total_monthly_payment' where name='$name' and org_name='$org_name' and job='$job'");
        header("location:registered_loan.php");
   }
  

   
  
} ?>

    <body class="my-login-page" style="">
        <section class="h-100" style=" padding:0px !important;">
            <div class="container-fluid h-100" style=" width:100%;">
                <div class="card-wrapper" style="width:100%;margin-top:1%; ">
                    <div class="card fat" style="">
                        <div class="card-body">

                            <h2 class="card-title b_font" style="text-align:center;">اضافه قسط قرضه</h2>
                            <hr>
                            <form method="POST" id="uploadForm" class="my-login-validation"
                                enctype="multipart/form-data" novalidate="">
                                <table class="table table-bordered " dir="rtl">
                                    <tr>
                                        <?php 
                                        $fetch_02; 
                                        if(isset($_GET["q_id"])){
                                            $id = $_GET["q_id"];
                                            $sql_query_02 = mysqli_query($connection,"select * from qarza where q_id='$id'");
                                            $fetch_02 = mysqli_fetch_assoc($sql_query_02);
                                            
                                        }
                                    ?>
                                        <th class="b_font">نام</th>
                                        <th class="b_font">وظیفه </th>
                                        <th class="b_font">نام سازمان</th>
                                        <th class="b_font">نوعیت</th>
                                        <th class="b_font">پرداخت ماهانه</th>
                                        <th class="b_font">تاریخ</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input name="name" id="name" value="<?php echo $fetch_02["name"];?>"
                                                    readonly type="text" class="form-control" required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="job"
                                                    value="<?php echo $fetch_02["job"];?>" id="job" readonly required
                                                    autofocus>
                                            </div>
                                        </td>
                                        <td style="display:none;">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="amount"
                                                    value="<?php echo $fetch_02["amount"];?>" id="amount">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control"
                                                    value="<?php echo $fetch_02["org_name"];?>" name="org_name"
                                                    id="org_name" readonly required autofocus>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control"
                                                    value="<?php echo $fetch_02["qarza_type"];?>" readonly
                                                    name="qarza_type" id="qarza_type" required autofocus>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="monthly_payment"
                                                    id="monthly_payment" required autofocus>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="date_sh" id="date_sh"
                                                    value="<?php echo jdate("d/m/Y","","","Asia/kabul","en");?>"
                                                    required autofocus>
                                            </div>
                                        </td>

                                    </tr>

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
                            <br>
                            <br>
                            <table class="table table-bordered " id="dokakin_sab_shoda" dir="rtl">
                                <thead>

                                    <tr class="bg bg-primary">
                                        <th class="b_font">شماره</th>
                                        <th class="b_font">نام</th>
                                        <th class="b_font">وظیفه </th>
                                        <th class="b_font">پرداخت ماهانه</th>
                                        <th class="b_font">تاریخ</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                    <?php
									$sql_query_04 = mysqli_query($connection,
									"select name,job from qarza where q_id='$id'");
									$fetch_04 = mysqli_fetch_assoc($sql_query_04);
									$name = $fetch_04["name"];
									$job = $fetch_04["job"];
									$sql_query_02 = mysqli_query($connection,"select * from loan_qist where name='$name' and job='$job'");
									$sql_query_03 = mysqli_query($connection,"select sum(pardakhty) as total_pardakhty from loan_qist where name='$name' and job='$job'");
                                    $fetch_03 = mysqli_fetch_assoc($sql_query_03);
                                    $count = 1;
									while ($fetch_02 = mysqli_fetch_assoc($sql_query_02)) {
									?>
                                    <tr>
                                        <td class="b_font"><?php echo $count; ?></td>
                                        <td class="b_font"><?php echo $fetch_02["name"];?></td>
                                        <td class="b_font"><?php echo $fetch_02["job"];?></td>
                                        <td class="b_font"><?php echo $fetch_02["pardakhty"];?></td>
                                        <td class="b_font"><?php echo $fetch_02["date_sh"];?></td>

                                    </tr>
                                    <?php
                      $count++;
                      }
                    ?> <tr class="bg bg-primary">
                                        <th colspan="11"> مجموع مقدار : <span class="" style="font-size:15px;"><?php
                                                
                                                echo $fetch_03["total_pardakhty"]; ?></span>
                                        </th>


                                    </tr>
                                </tbody>
                            </table>
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