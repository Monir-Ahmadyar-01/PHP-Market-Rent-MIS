<?php 
include_once("redirect.php");
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:index.php');
    exit;
}
?>
<?php 
// Made By Monir Ahmadyar
        // $date_sh = jdate("d/m/Y","","","Asia/kabul","en");
        // echo $date_sh;
        // echo "<br>";
        // $date_sh_exp = explode("/",$date_sh);
        // echo "<br>";
        // echo "Miladi  : ";
        // echo "<br>";
        // echo jalali_to_gregorian($date_sh_exp[2],$date_sh_exp[1],$date_sh_exp[0],'/');
        include("database.php");
    ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Market MIS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" href="image/market logo.png" />
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
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!--===============================================================================================-->
        <meta charset="utf-8">
        <meta name="author" content="Kodinger">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/my-login.css" />
        <style>
        .margin {
            height: 50px;
        }

        .b_font {
            font-family: b koodak;
        }
        </style>
    </head>

    <body>
        <div class="margin"></div>
        <div class="container" id="chat_div">
            <div class="row">
                <div class="col-sm-12 b_font">
                    <h2 style="text-align:center;">مدیریت پیام ها</h2>
                    <hr />
                </div>
            </div>
            <div class="row" dir="rtl">
                <?php 
                $sql_query_01 = mysqli_query($connection,"select * from comment order by id desc");
                $check_status ="";
                while($row = mysqli_fetch_assoc($sql_query_01)){
                    $user_id = $row["user_id"];
                    $sql_query_02 = mysqli_query($connection,"select name,lastname from user_account where id='$user_id'");
                    $fetch_02 = mysqli_fetch_assoc($sql_query_02);
                    $check_status = $row["status"];
                    if($check_status == "read"){
                        
                ?>
                <div class="col-sm-10" style="margin-top:10px;">
                    <div class="card b_font">
                        <div class="card-body">
                            <span style="float:right;color:;">فرستنده :
                                <?php echo $fetch_02["name"]." ".$fetch_02["lastname"];?></span>
                            <span class="fa fa-check ico_check" title="خوانده شد"
                                style="position:absolute;left:3%; color:green; cursor:pointer; display:none;"></span>
                            <span class="fa fa-trash" title="حذف پیام"
                                style="position:absolute;left:8%; color:red; cursor:pointer;"
                                onclick="delete_message(<?php echo $row['id']; ?>)"></span>
                            <br>
                            <hr>
                            <p class="card-text text text-primary b_font"><?php echo $row["details"]; ?>
                            </p>
                            <hr>
                            <?php 
                                if($row["file"] != ""){
                            ?>
                            <a href="message_documents/<?php echo $row["file"]; ?>" target="_blank">
                                <span class="b_font" style="float:right; margin-left:20px;">فایل ضمیمه شده</span>
                            </a>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <?php
                }
                else{
                        
                ?>
                <div class="col-sm-10" style="margin-top:10px;">
                    <div class="card b_font" style="border:2px solid #006080 !important;">
                        <div class="card-body">

                            <span class="card-title" style="float:;color:black; margin-right:33%; font-size:20px;">عنوان
                                مسج</span>
                            <?php 
                                
                            ?>
                            <span style="float:right;color:black;">فرستنده :
                                <?php echo $fetch_02["name"]." ".$fetch_02["lastname"];?></span>
                            <span class="fa fa-check ico_check" title="خوانده شد"
                                style="position:absolute;left:3%; color:green; cursor:pointer;"
                                onclick="setstatus(<?php echo $row['id']; ?>)"></span>
                            <span class="fa fa-trash" title="حذف پیام"
                                style="position:absolute;left:8%; color:red; cursor:pointer;"
                                onclick="delete_message(<?php echo $row['id']; ?>)"></span>
                            <br>
                            <hr>
                            <p class="card-text text text-primary b_font"><?php echo $row["details"]; ?>
                            </p>
                            <hr>
                            <?php 
                                if($row["file"] != ""){
                            ?>
                            <a href="message_documents/<?php echo $row["file"]; ?>" target="_blank">
                                <span class="b_font" style="float:right; margin-left:20px;">فایل ضمیمه شده</span>
                            </a>
                            <?php
                                }
                            ?>
                        </div>

                    </div>
                </div>

                <?php
                }    
            }
            ?>
            </div>
        </div>



        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/my-login.js"></script>
    </body>

    <script>
    function setstatus(id) {
        var ajax;
        if (window.XMLHttpRequest) {
            ajax = new XMLHttpRequest();
        } else {
            ajax = new ActiveXObject("Microsoft.XMLHTTP");
        }

        ajax.open("GET", "server.php?chat_row_id=" + id);
        ajax.send();
        ajax.onreadystatechange = function() {
            if (ajax.status == 200 && ajax.readyState == 4) {
                var response = ajax.responseText.trim();
                if (response == "success") {
                    $("#chat_div").load(window.location.href + " #chat_div");
                }
            }
        }
    }
    </script>

    <!-- for deleting message -->

    <script>
    function delete_message(id) {
        var ajax;
        if (window.XMLHttpRequest) {
            ajax = new XMLHttpRequest();
        } else {
            ajax = new ActiveXObject("Microsoft.XMLHTTP");
        }

        ajax.open("GET", "server.php?chat_row_id_delete_message=" + id);
        ajax.send();
        ajax.onreadystatechange = function() {
            if (ajax.status == 200 && ajax.readyState == 4) {
                var response = ajax.responseText.trim();
                if (response == "success") {
                    $("#chat_div").load(window.location.href + " #chat_div");
                }
            }
        }
    }
    </script>

</html>