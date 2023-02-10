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
 // part afzodan nawyat masarf
 if (isset($_POST["btn_submit2"])) {
    $afzodan_nawyat2 = $_POST["afzodan_nawyat2"];
    $sql_query_03 = mysqli_query($connection,"INSERT INTO `masarf_type` (`id`, `name`)
     VALUES (NULL, '$afzodan_nawyat2')");
 }
	 

  
  if (isset($_POST["submit1"])) {
	
	$name = $_POST["name"];
	$type = $_POST["type"];
    $description = $_POST["description"];
    $quantity = $_POST["quantity"];
    $zarib = $_POST["zarib"];
    $cost = $_POST["cost"];
    $harf = $_POST["harf"];
    $total = $quantity * $cost;
    
   $date_sh = $_POST["date_sh"];
    $date_sh_exp = explode("/",$date_sh);
    $date_m =  jalali_to_gregorian($date_sh_exp[2],$date_sh_exp[1],$date_sh_exp[0],'/');
    
	$user_id = $_SESSION["user_id"];
    $sql_query_05 = mysqli_query($connection,"INSERT INTO `masarf` (`m_id`,`name`, `type`, `description`, `quantity`, `zarib`,`cost`,`harf`, `total`,`date_sh`, `date_m`,`user_id`)
     VALUES (NULL, '$name','$type', '$description', '$quantity', '$zarib','$cost','$harf', '$total', '$date_sh', '$date_m', '$user_id')");
    if($sql_query_05){
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
        <style>
        tr,
        td,
        th {
            text-align: center !important;
        }

        .b_font {
            font-family: b koodak;
        }

        table {
            direction: rtl;
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
        <!--===============================================================================================-->

    </head>
    <script type="text/javascript">
    $(function() {
        $('#datepicker0').datepicker({
            changeMonth: true,
            changeYear: true
        });
    });
    </script>

    <body class="my-login-page">
        <section class="h-100" style=" padding:0px !important;">
            <div class="container-fluid h-100" style=" width:100%;">
                <div class="card-wrapper" style="width:100%;margin-top:1%; ">
                    <div class="card fat" style="">
                        <div class="card-body">
                            <button class="btn  b_font" style="background-color:#146EB4; color:white;"
                                onclick="window.open('added_expenses.php','_self');">مصارف افزوده شده</button>

                            <h2 class="card-title b_font" style="text-align:center;">افزودن مصرف </h2>
                            <hr>
                            <form method="POST" id="uploadForm" class="my-login-validation"
                                enctype="multipart/form-data" novalidate="">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label>نام مصرف</label>
                                                <input name="name" type="text" class="form-control" id="name" required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label>نوعیت</label>
                                                <select class="form-control" style="height:35px;" name="type" required>
                                                    <?php 
                                                        $sql_query_05 = mysqli_query($connection,"select name from masarf_type");
                                                        while($row = mysqli_fetch_assoc($sql_query_05)){
                                                    ?>
                                                    <option value="<?php echo $row["name"];?>">
                                                        <?php echo $row["name"];?></option>
                                                    <?php                                                    
                                                        }
                                                   ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label>توضیحات</label>
                                                <textarea name="description" id="description" class="form-control"
                                                    rows="4"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label>تعداد</label>
                                                <input name="quantity" type="text" class="form-control" id="quantity"
                                                    required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label>ضریب</label>
                                                <input name="zarib" type="text" class="form-control" id="zarib"
                                                    required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label>قیمت</label>
                                                <input name="cost" type="text" class="form-control" id="cost" required>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label>به حرف</label>
                                                <input name="harf" type="text" class="form-control" id="harf" required>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label>تاریخ</label>
                                                <input type="text" class="form-control" id="datepicker0" name="date_sh"
                                                    value="<?php echo jdate("d/m/Y","","","Asia/kabul","en"); ?>"
                                                    required autofocus>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td colspan="10">
                                            <div class="form-group m-0">
                                                <button type="submit" id="loading" name="submit1"
                                                    class="btn btn-primary b_font btn-block" style="font-size:1vw;">
                                                    ذخیره
                                                </button>

                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <div id="state" style="width:49%; float:left;" class="">
                                        </div>
                                    </tr>
                                </table>

                            </form>

                            <div class="row">
                                <div class="col-sm-4">
                                    <form method="POST" id="uploadForm2" class="my-login-validation"
                                        enctype="multipart/form-data" novalidate="">

                                        <table id="table" class="table table-bordered table-striped">
                                            <tr>
                                                <th colspan="2" class="b_font">افزودن نوعیت</th>
                                            </tr>
                                            <tr>
                                                <th><input type="text" required id="afzodan_nawyat2"
                                                        name="afzodan_nawyat2" class="form-control"></th>
                                                <th>
                                                    <button type="submit" name="btn_submit2"
                                                        class="btn btn-primary b_font" style="width:100%;"
                                                        name="button">ذخیره</button>
                                                </th>
                                            </tr>
                                            <tr>
                                                <div id="state2">

                                                </div>
                                            </tr>
                                        </table>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



    </body>

</html>