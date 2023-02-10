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
    $name = $_POST["name"];
    $father_name = $_POST["father_name"];
	$salary = $_POST["salary"];
	$bardasht = $_POST["bardasht"];
	$total = $salary - $bardasht;
	
	$paid = $_POST["paid"];
	$description = $_POST["description"];
	
	
	
	$date_sh = $_POST["date_sh"];
	$date_sh_exp = explode("/",$date_sh);
    $date_m =  jalali_to_gregorian($date_sh_exp[2],$date_sh_exp[1],$date_sh_exp[0],'/');
    
	$user_id = $_SESSION["user_id"];
	$sql_query_15 = mysqli_query($connection,
	"INSERT INTO `pardakht_mash` (`id`, `user_id`,`name`,`father_name`, `salary`, `bardasht`,`total`,`paid`,`description`,`date_sh`, `date_m`)
	 VALUES (NULL, '$user_id','$name','$father_name', '$salary', '$bardasht', '$total','$paid','$description','$date_sh', '$date_m')");
    if($sql_query_15){
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

    <body class="my-login-page" <section class="h-100" style=" padding:0px !important;">
        <div class="container-fluid h-100" style=" width:100%;">
            <div class="card-wrapper" style="width:100%;margin-top:1%; ">
                <div class="card fat" style="">
                    <div class="card-body">

                        <h2 class="card-title b_font" style="text-align:center; ">پرداخت معاشات کارمندان
                        </h2>
                        <hr>
                        <a href="bardakht_karmandan.php" style="float:right;">
                            <button type="button" name="button" class=" btn btn-primary b_font">برداشت
                                کارمندان</button>
                        </a>
                        <br>
                        <hr>

                        <form method="POST" id="uploadForm" class="my-login-validation" enctype="multipart/form-data"
                            novalidate="">
                            <table class="table table-bordered table-striped" dir="rtl">
                                <tr>

                                    <th class="b_font">نام</th>
                                    <th class="b_font">نام پدر</th>
                                    <th class="b_font">معاش</th>
                                    <th class="b_font">برداشت</th>


                                    <th class="b_font">پرداخت </th>
                                    <th class="b_font">توضیحات</th>
                                    <th class="b_font">تاریخ</th>

                                </tr>
                                <tr>

                                    <td>
                                        <div class="form-group">
                                            <select name="name" style="height:40px; font-size:16px;" id="name"
                                                onchange="setmash(this.value)" class="form-control b_font">
                                                <?php
                                            $sql_query_06 = mysqli_query($connection,
                                            "select name from sabt_karmandan");
                                            while ($fetch_06 = mysqli_fetch_assoc($sql_query_06)) {
                                            ?>
                                                <option value="<?php echo $fetch_06["name"]; ?>">
                                                    <?php echo $fetch_06["name"]; ?></option>
                                                <?php
                                            }
                                            ?>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="father_name" id="father_name"
                                                required readonly autofocus>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" readonly class="form-control" name="salary" id="salary"
                                                required autofocus>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" readonly class="form-control" name="bardasht"
                                                id="bardasht" required autofocus>
                                        </div>
                                    </td>


                                    <td>
                                        <div class="form-group">
                                            <input type="checkbox" class="form-control" value="شد" name="paid" id="paid"
                                                required autofocus>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <textarea class="form-control" name="description"
                                                id="description"></textarea>
                                        </div>
                                    </td>
                                    <td style="width:120px;">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="date_sh" id="date_sh"
                                                value="<?php echo jdate("d/m/Y","","","Asia/kabul","en");?>" required
                                                autofocus>
                                        </div>
                                    </td>

                                </tr>
                                <input type="text" name="user_id" value="<?php if (isset($_SESSION["user_id"])) {
																			echo $_SESSION["user_id"];
																		}?>" style="display:none" />
                                <tr>
                                    <td colspan="12">
                                        <div class="form-group m-0">
                                            <button type="submit" name="submit1" id="loading"
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
                        <a href="mash_pardakht_shoda.php" style="float:right;">
                            <button type="button" name="button" class=" btn btn-success b_font">معاشات پرداخت
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
        <script>
        function setmash(val) {

            var ajax;
            if (window.XMLHttpRequest) {
                ajax = new XMLHttpRequest();
            } else {
                ajax = new ActiveXObject("Microsoft.XMLHTTP");
            }

            ajax.open("GET", "server.php?staff_name_salary=" + val);
            ajax.send();
            ajax.onreadystatechange = function() {
                if (ajax.status == 200 && ajax.readyState == 4) {
                    var response = ajax.responseText.split(",");
                    $("#father_name").val(response[0]);
                    $("#salary").val(response[1]);
                    $("#bardasht").val(response[2]);
                    // $("#chat_div").load(window.location.href + " #chat_div");


                }
            }
        }
        </script>



    </body>

</html>