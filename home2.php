

<?php 
    include_once("redirect.php");
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
        margin-top: 20px !important;
    }

    .btn {
        height: 30px;
        box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
        border-radius: 5px;
        margin-right: 5px;


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
        border: none;
        outline: none;
        height: 100%;
        width: 100%;

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
           
        <a href="inbox.php" target="frame"><button title="صندوق ورودی"
                    style="color:white; font-size:25px; position:relative; top:17px; left:190px; ">
                    <span class="glyphicon glyphicon-download"></span>
                </button>
            </a>
            <a href="index.php"><button title="خروج"
                    style="color:white; font-size:25px; position:relative; top:17px; left:220px; ">
                    <span class="glyphicon glyphicon-off"></span>
                </button>
            </a>

            </div>
          
           

        
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 border" style="height:650px;">
                <iframe src="inbox.php" name="frame" frameborder="0"></iframe>
            </div>
        </div>
    </div>


    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/jquery.min.js"></script>

    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/my-login.js"></script>
    <script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>


</body>

</html>