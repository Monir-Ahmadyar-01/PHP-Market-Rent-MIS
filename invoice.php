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
<html lang="en" dir="rtl">

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
    <link rel="stylesheet" type="text/css" href="css/select2.min.css">

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
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link type="text/css" href="css/persian-datepicker.css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/persian-datepicker.js"></script>

    <script type="text/javascript">
    $(function() {
        $('#datepicker0').datepicker({
            changeMonth: true,
            changeYear: true
        });
    });
    </script>

    <script>
    function myFunction() {
        window.print();
    }
    </script>
    <!-- file uploads js -->
    <script src="fileuploads/js/dropify.min.js"></script>
    <!-- form Uploads -->
    <link href="fileuploads/css/dropify.css" rel="stylesheet" type="text/css" />

    <!--===============================================================================================-->
    <style>
    td {
        text-align: center;
        vertical-align: middle;
    }

    .b_font {
        font-family: b koodak;
    }

    .tr th {
        position: sticky !important;
        top: 0px !important;
        background-color: #144b6f;
    }

    th,
    td {
        text-align: center;

    }

    @media print {
        .col-sm-12 {
            display: none;
        }

        #icon {
            display: none;
        }
    }
    }

    body {
        position: fixed;
        height: 100%;
        width: 100%;
    }
    input[type=text] {
  background-color: white;
  color: black;
  border:none;
}
    </style>

</head>
<script>
function myFunction() {
    window.print();

}
</script>
</head>
<script>
</script>

<body class="my-login-page" style="font-family:b koodak;">
    <section class="h-100" style=" padding:0px !important;">

        <div class="card-wrapper" style="width:100%; margin-top:0.5%; ">
            <div class="card fat">
                <div class="card-body">

                    <button class="glyphicon glyphicon-print text text-primary" id="icon"
                        style="position:relative;  font-size:25px;" onclick="myFunction()"></button>
                    <button class="glyphicon glyphicon-circle-arrow-left text text-primary"
                        onclick="window.open('added_expenses.php','_self');" id="icon"
                        style="position:relative;  right:15px; font-size:25px;"></button>

                    <center><img src="image/logo.jpg" width="210px" height="90px" alt="GrandMall Logo"></img></center>

                    <h2 class="card-title b_font" style="text-align:center; "> مرکز تجارتی
                        گرندمال </h2>

                    <h4 class="card-title b_font" style="text-align:center; position:relative; top:-20px; ">رسید پرداخت
                        نقده </h4>

                </div>
                <div style="position:relative; top:-50px;">
                <?php 


    if(isset($_GET["m_id"])){
        $id = $_GET["m_id"];
        $sql_query = mysqli_query($connection,"select * from masarf where m_id='$id'");
        $fetch1 = mysqli_fetch_assoc($sql_query);
?>
                <tbody id="tbody">
                            
                           
                            
                             

                             
                    <span class="b_font">نام:</span>
                    <input type="text"  value="<?php echo $fetch1["name"];?>" class="form-control" style="width:250px;"></input><br><br>
                    <span class="b_font">توضیحات:</span>
                    <input type="text"  value="<?php echo $fetch1["description"];?>" class="form-control" style="width:500px;"></input><br><br>
                    <span class="b_font">مبلغ:</span>
                    <input type="text"  value="<?php echo $fetch1["cost"];?>" class="form-control" style="width:150px;"></input><br><br>
                    <span class="b_font">مبلغ به حرف: </span>
                    <input type="text"  value="<?php echo $fetch1["harf"];?>" class="form-control" style="width:400px;"></input><br><br>
                    <span class="b_font">ضریب ارزی:</span>
                    <input type="text"  value="<?php echo $fetch1["zarib"];?>" class="form-control" style="width:100px;"></input><br><br>
                    <span class="b_font"> تاریخ دریافت:</span>
                    <input type="text"  value="<?php echo $fetch1["date_sh"];?>" class="form-control" style="width:200px;"></input><br><br><br>
                    <span class="b_font"> امضأ تحویل دهنده</span>
                    <span class="b_font" style="position:relative; margin-right:78%"> امضأ گیرنده </span><br>
                    <hr>


                </div>

            </div>
        </div>
    </section>
    <script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    <?php
        exit();
            }

        ?>



    <
    /body>

    <
    /html>