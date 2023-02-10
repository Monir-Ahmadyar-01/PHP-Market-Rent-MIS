<?php
  include_once("database.php");
  include_once("jdf.php");
  include_once("redirect.php");
 ?>
<?php 

  if (isset($_POST["submit2"])) {
    $dokan_number = $_POST["dokan_number"];
    $name = $_POST["name"];
   $dawra = $_POST["dawra"]; 
   $gozashta = $_POST["gozashta"];
   $halia = $_POST["halia"];
    $fi_kilowat = $_POST["fi_kilowat"];
   
   $pardakht_shoda = $_POST["pardakht_shoda"];


    $description = $_POST["description"];
   
   
   $user_id = $_POST["user_id"];
    $date_sh = $_POST["date_sh"];
    $date_m = date("Y/m/d");
    $sql_query_01 = mysqli_query($connection,
    "INSERT INTO `bill_barq` (`id`,  `dokan_number`,`name`,`father_name`,`dawra`, `gozashta`, `halia`, `fi_kilowat`,`pardakht_shoda`,`description`,`user_id`,`date_sh`,`date_m`)
     VALUES (NULL,  '$dokan_number','$name','',  '$dawra','$gozashta','$halia','$fi_kilowat','$pardakht_shoda','$description','$user_id', '$date_sh', '$date_m')");
if($sql_query_01){
    echo "<script>alert('اطلاعات موفقانه ثبت گردید!')</script>";
    
    }  
    else{
        echo "<script>alert('خطا در ثبت اطلاعات')</script>";
      
    }
  }
  
?>
<?php 
    if(isset($_POST["btn_dawra"])){
        $dawra_name = $_POST["dawra_name"];
        $amount = $_POST["amount"];
        $fi_kil = $_POST["fi_kil"];
        $total_price = $_POST["total_price"];
        
        $sql_query_08 = mysqli_query($connection,"INSERT INTO `bill_dawra` (`id`, `dawra_name`, `amount`, `fi_kil`, `total_price`)
         VALUES (NULL, '$dawra_name', '$amount', '$fi_kil', '$total_price')");
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
        <!-- <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css"> -->
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
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
        <script type="text/javascript">
        $(function() {
            $('#datepicker0').datepicker({
                changeMonth: true,
                changeYear: true
            });
        });
        </script>

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

        #table {
            display: none;
        }

        .table,
        tr,
        td {
            border: 1px solid #99ccff !important;
        }

        #datepicker0 {
            cursor: pointer;
        }

        button {
            font-size: 4em;
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

                            <h2 class="card-title b_font" style="text-align:center;">بل برق دکاکین</h2>
                            <hr>
                            <form method="POST" id="uploadForm" class="my-login-validation"
                                enctype="multipart/form-data" novalidate="">

                                <table class="table table-bordered table-striped">
                                    <tr style="">
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">نمبر دکان</label>
                                                <select name="dokan_number"
                                                    style="height:40px; width:100%; font-size:16px;" id="dokan_number"
                                                    onchange="setdawra(this.value)"
                                                    class="js-example-basic-multiple form-control" name="dawra[]">
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
                                                <label class="b_font">نام</label>
                                                <input name="name" id="name" type="text" class="form-control" required>
                                            </div>
                                        </td>
                                        <!-- <td>
                                            <div class="form-group">
                                                <label class="b_font">نام پدر</label>
                                                <input name="father_name" id="father_name" type="text"
                                                    class="form-control" required>
                                            </div>
                                        </td> -->
                                        <td>
                                            <div class="form-group" dir="rtl">
                                                <label class="b_font">دوره</label>
                                                <select id="dawra" class=" js-example-basic-multiple form-control"
                                                    style="height:35px; width:100%;" name="dawra">
                                                    <?php 
                                                        $sql_query_07 = mysqli_query($connection,"select * from bill_dawra");
                                                        while($row = mysqli_fetch_assoc($sql_query_07)){
                                                    ?>
                                                    <option value="<?php echo $row["dawra_name"]; ?>">
                                                        <?php echo $row["dawra_name"]; ?></option>
                                                    <?php
                                                        }
                                                    
                                                    ?>

                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">گذشته</label>
                                                <input name="gozashta" id="gozashta" onkeyup="settotal();" type="text"
                                                    class="form-control" required>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">حالیه</label>
                                                <input name="halia" id="halia" onkeyup="settotal();" type="text"
                                                    class="form-control" required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">مصرف شده</label>
                                                <input name="masraf_shoda" id="masraf_shoda" type="text"
                                                    class="form-control" readonly required>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">فی کیلوات</label>
                                                <input name="fi_kilowat" id="fi_kilowat" type="text"
                                                    class="form-control" onkeyup="settotal();" required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">مبلغ قابل پرداخت</label>
                                                <input name="qabil_pardakht" id="qabil_pardakht" readonly type="text"
                                                    class="form-control" required>
                                            </div>
                                        </td>
                                    </tr>
                                    <td>
                                        <div class="form-group">
                                            <label class="b_font">پرداخت شده</label>
                                            <input name="pardakht_shoda" id="pardakht_shoda" onkeyup="settotal2();"
                                                type="text" class="form-control" required>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label class="b_font">باقیمانده</label>
                                            <input name="baqimanda" id="baqimanda" readonly type="text"
                                                class="form-control" required>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label class="b_font">جزئیات</label>
                                            <textarea name="description" id="description" row="50" type="text"
                                                class="form-control" required></textarea>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label class="b_font">تاریخ</label>
                                            <input type="text" class="form-control" id="datepicker0" name="date_sh"
                                                value="<?php echo jdate("d/m/Y","","","Asia/kabul","en");?>" required
                                                autofocus>
                                        </div>
                                    </td>

                                    </tr>
                                </table>
                                </th>
                                <input type="text" name="user_id" value="<?php if (isset($_SESSION["user_id"])) {
																			echo $_SESSION["user_id"];
																		}?>" style="display:none" />
                                </tr>

                                <script>
                                function settotal() {
                                    var gozashta = parseFloat($("#gozashta").val());
                                    var halia = parseFloat($("#halia").val());
                                    var fi_kilowat = parseFloat($("#fi_kilowat").val());
                                    $("#qabil_pardakht").val((halia - gozashta) * fi_kilowat);
                                    $("#masraf_shoda").val(halia - gozashta);

                                }
                                </script>
                                <script>
                                function settotal2() {
                                    var qabil_pardakht = parseFloat($("#qabil_pardakht").val());
                                    var pardakht_shoda = parseFloat($("#pardakht_shoda").val());
                                    $("#baqimanda").val(qabil_pardakht - pardakht_shoda);

                                }
                                </script>



                                <tr>
                                    <td colspan="10">
                                        <div class="form-group m-0">
                                            <button type="submit" id="loading" name="submit2"
                                                class="b_font btn btn-primary btn-block">
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
                            <br>
                            <a href="added_dawra_bill_barq.php"><button class="btn btn-primary b_font">نمایش دوره ها
                                </button></a>

                            <div class="sabt-dawra" style="float:right; width:70%;">
                                <button class="btn btn-primary b_font" id="sabt_dawra"
                                    style="float:right; margin-bottom:20px;"> ثبت
                                    دوره جدید
                                </button>
                                <form action="" method="post">
                                    <table class="table table-bordered table-striped" id="sabt_dawra_table"
                                        style="width:100%; display:none;">
                                        <tr>
                                            <th>نام دوره </th>
                                            <th><input type="text" class="form-control" name="dawra_name"
                                                    id="dawraname">
                                            </th>
                                            <th>مقدار کیلوات</th>
                                            <th><input type="text" class="form-control" name="amount" id="amount">
                                            </th>
                                            <th> فی کیلوات </th>
                                            <th><input type="text" class="form-control" name="fi_kil" id="fi_kil">
                                            </th>
                                            <th> مجموع </th>
                                            <th><input type="text" class="form-control" name="total_price"
                                                    id="total_price">
                                            </th>
                                            <th><button type="submit" name="btn_dawra" class="btn btn-primary"
                                                    style="width:100%;">ثبت</button></th>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <script>
        $(function() {
            $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
            });
            $("#sabt_dawra").on("click", function() {
                $("#sabt_dawra_table").toggle();
            });
        });
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

        function dawra() {
            $("#table").toggle(1000);
        }
        </script>
        <script>
        function setdawra(val) {

            var ajax;
            if (window.XMLHttpRequest) {
                ajax = new XMLHttpRequest();
            } else {
                ajax = new ActiveXObject("Microsoft.XMLHTTP");
            }

            ajax.open("GET", "server.php?dawra_dokan_number=" + val);
            ajax.send();
            ajax.onreadystatechange = function() {
                if (ajax.status == 200 && ajax.readyState == 4) {
                    var response = ajax.responseText.trim();
                    $("#gozashta").val(response);
                    // $("#chat_div").load(window.location.href + " #chat_div");


                }
            }
        }
        </script>
    </body>

</html>