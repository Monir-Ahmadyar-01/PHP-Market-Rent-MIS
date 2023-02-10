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
        <link rel="stylesheet" type="text/css" href="css/my-login.css">
        <style>
        .b_font {
            font-family: b koodak;
        }

        .header {
            background-color: #3399ff;
            height: 70px;
            position: relative;
        }

        .btn-group {
            margin-top: 30px !important;
        }

        .btn {
            height: 30px;
            box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
            border-radius: 5px;
            margin-right: 0px;


        }

        .log_out_btn {
            height: 30px;
            border-radius: 0px;
            position: absolute;
            right: 0px;
            top: 20px;
        }

        .logo_img {

            position: absolute;
            left: 0px;
            top: 10px;
            background-color: white;
            height: 50px;
            width: 50px;
            border-radius: 100%;

        }

        .text {

            position: absolute;
            left: 60px;
            top: 3px;
            color: white;

        }

        iframe {
            /* border: 6px solid green; */
            outline: none;
            height: 100%;
            width: 100%;

        }

        .menu_icons {
            height: 20px;
            margin-right: -7px;
            margin-left: 4px;

        }
        </style>
        <script>
        function highlight_bg(select, v2, v3, v4, v5, v6, v7, v8, v9, v10, v11) {
            document.getElementById(select).style.backgroundColor = "#082a45";
            document.getElementById(v2).style.backgroundColor = "#006699";
            document.getElementById(v3).style.backgroundColor = "#006699";
            document.getElementById(v4).style.backgroundColor = "#006699";
            document.getElementById(v5).style.backgroundColor = "#006699";
            document.getElementById(v6).style.backgroundColor = "#006699";
            document.getElementById(v7).style.backgroundColor = "#006699";
            document.getElementById(v8).style.backgroundColor = "#006699";
            document.getElementById(v9).style.backgroundColor = "#006699";
            document.getElementById(v10).style.backgroundColor = "#006699";
            document.getElementById(v11).style.backgroundColor = "#006699";
        }
        </script>
    </head>

    <body id="body">

        <div class="container-fluid">
            <div class="row header justify-content-md-center">
                <a href="home.php" data-toggle="tooltip" title="Admin" data-placement="bottom"><img
                        src="image/market logo.png" style=" margin-left:4px; padding-top:4px;" class="logo_img"
                        alt="Market Image"></a>

                <div class="btn-group" style="position:relative; bottom:11px;">

                    <a href="create_account.php" target="frame" class="author"><button
                            class="btn btn-primary shadow b_font " id="1" onclick="highlight_bg(1,2,4,5,6,7,8,9,10,11);"
                            title="ایجاد حساب">حساب<img class="menu_icons" src="image/icons/account_30px.png"
                                alt="Account icon"> </button></a>
                    <a href="market_info.php" target="frame"><button class="btn btn-primary b_font" id="2"
                            onclick="highlight_bg(2,1,4,5,6,7,8,9,10,11);" title="معلومات مارکیت">مارکیت<img
                                class="menu_icons" src="image/icons/market_square_30px.png" alt="Market icon">
                        </button></a>
                    <!-- 
                    <a href="setting.php" target="frame"><button class="btn btn-primary b_font" id="3"
                            onclick="highlight_bg(3,2,1,4,5,6,7,8,9,10,11);">تنظیمات <img class="menu_icons"
                                src="image/icons/settings_24px.png" alt="setting icon"></button></a> -->
                    <a href="report.php" class="author40per" target="frame"><button class="btn btn-primary b_font"
                            id="4" onclick="highlight_bg(4,2,1,5,6,7,8,9,10,11);">گزارش <img class="menu_icons"
                                src="image/icons/report_card_24px.png" alt="Report icon"></button></a>
                    <a href="shop_registeration.php" target="frame"><button class="btn btn-primary b_font" id="5"
                            onclick="highlight_bg(5,2,4,1,6,7,8,9,10,11);" title="ثبت دکاکین">دکاکین<img
                                class="menu_icons" src="image/icons/store_front_32px.png" alt="store icon">
                        </button></a>
                    <a href="stuff_registeration.php" class="author40per" target="frame"><button
                            class="btn btn-primary b_font" id="6" onclick="highlight_bg(6,2,4,5,1,7,8,9,10,11);"
                            title="ثبت  کارمندان">کارمندان <img class="menu_icons"
                                src="image/icons/business_group_80px.png" alt="staff icon">
                        </button></a>
                    <a href="loan.php" class="author40per" target="frame"><button class="btn btn-primary b_font" id="7"
                            onclick="highlight_bg(7,2,4,5,6,1,8,9,10,11);">قرضه <img class="menu_icons"
                                src="image/icons/bank_30px.png" alt="Bank icon"></button></a>
                    <a href="bill_barq.php" target="frame"><button class="btn btn-primary b_font" id="8"
                            onclick="highlight_bg(8,2,4,5,6,7,1,9,10,11);">بل برق <img class="menu_icons"
                                src="image/icons/energy_saving_bulb_32px.png" alt="ٍEnergy icon"></button></a>
                    <a href="salary.php" class="author40per" target="frame"><button class="btn btn-primary b_font"
                            id="9" onclick="highlight_bg(9,2,4,5,6,7,8,1,10,11);">معاشات <img class="menu_icons"
                                src="image/icons/payroll_32px.png" alt="Payroll icon"></button></a>
                    <a href="expenses.php" target="frame"><button class="btn btn-primary b_font" id="10"
                            onclick="highlight_bg(10,2,4,5,6,7,8,9,1,11);">مصارف
                            <img class="menu_icons" src="image/icons/expenses.png" alt="Expenses icon"></button></a>
                    <a href="shop_rent.php" target="frame"><button class="btn btn-primary b_font" id="11"
                            onclick="highlight_bg(11,2,4,5,6,7,8,9,10,1);">کرایه <img class="menu_icons"
                                src="image/icons/shop_30px.png" alt="shop icon">
                        </button></a>



                </div>
                <a href="edited_check.php" class="author" target="frame">
                    <span for="afzodan_db" title=" تغیرات آورده شده "
                        style="color:white; font-size:25px; position:absolute; cursor:pointer; top:12px;  right:120px; ">
                        <img src="image/icons/import_50px.png" alt="ADD DB">

                    </span>
                </a>
                <a href="log_out.php">
                    <button title="خروج" style="color:white; font-size:25px;position:absolute; top:17px;  right:20px; ">
                        <span class="glyphicon glyphicon-off">
                        </span>
                    </button>
                </a>

                <?php 
                    if(isset($_SESSION["user_id"])){
                        $user_id = $_SESSION["user_id"];
                        $sql_query_03 = mysqli_query($connection,"select authority from user_account where id='$user_id'");
                        $fetch_03 = mysqli_fetch_assoc($sql_query_03);
                        
                        if($fetch_03["authority"] == "100"){
                            
                        ?>
                <a href="chat_managment.php" target="frame"><button title="نظریه"
                        style="color:white; font-size:25px; position:absolute; top:17px;  right:70px; ">
                        <span class="glyphicon glyphicon-comment">
                        </span>
                        <span class="badge" id="badge"
                            style="position:absolute; top:16px; color:white; background-color:red; border:1px solid red;">

                        </span>

                    </button>
                </a>

                <?php
                }
                else{
                    
                ?>
                <a href="comment.php" target="frame"><button title="نظریه"
                        style="color:white; font-size:25px; position:absolute; top:17px;  right:70px; ">
                        <span class="glyphicon glyphicon-comment">
                        </span>

                    </button>
                </a>
                <?php
                    echo "<style>
                            .author{
                                display:none;
                            }  
                            
                        </style>";    
                    }
                        $user_id = $_SESSION["user_id"];
                        $sql_query_03 = mysqli_query($connection,"select authority from user_account where id='$user_id'");
                        $fetch_03 = mysqli_fetch_assoc($sql_query_03);
                    if($fetch_03["authority"] == "40"){
                        echo "<style>
                            .author40per{
                                display:none;
                            }  
                            
                        </style>";  
                    }
                }
                ?>



            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 border">
                    <iframe src="shop_rent.php" name="frame" id="iframe" frameborder="0">
                    </iframe>
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js">
        </script>
        <script src="js/my-login.js"></script>
        <script>
        $(function() {
            $('[data-toggle="tooltip"]')
                .tooltip();
        })
        $(document).ready(function() {

            $("body").append(
                '<div  style="height:200px; width:200px; position:absolute; top:250px;  width:25px;  background-color:#3399ff; color:white; padding-top:40px; border-top-right-radius:10px;border-bottom-right-radius:10px; padding-left:2px;"><h4   style="writing-mode:vertical-rl; transform: rotate(180deg);">Market MIS</h4></div>'
            );

            var size = $(window)
                .height();
            var iframe_height = size -
                78;
            document.getElementById(
                    "iframe").style
                .height =
                iframe_height + "px";
        });
        </script>
        <script>
        $(function() {
            setInterval(() => {
                var ajax;
                if (window.XMLHttpRequest) {
                    ajax = new XMLHttpRequest();
                } else {
                    ajax = new ActiveXObject("Microsoft.XMLHTTP");
                }

                ajax.open("GET", "server.php?count_chat_unread_row=1");
                ajax.send();
                ajax.onreadystatechange = function() {
                    if (ajax.status == 200 && ajax.readyState == 4) {
                        var response = ajax.responseText.trim();

                        // $("#chat_div").load(window.location.href + " #chat_div");
                        $("#badge").text(response);

                    }
                }
                /// can add another function here
            }, 10);
        });
        </script>
    </body>


</html>