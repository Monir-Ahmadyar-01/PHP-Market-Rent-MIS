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
            border: none;
        }

        textarea[type=text] {
            background-color: white;
            color: black;
            border: none;
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
                            onclick="window.open('registered_shops.php','_self');" id="icon"
                            style="position:relative;  right:15px; font-size:25px;"></button>

                        <center><img src="image/logo.jpg" width="210px" height="90px" alt="GrandMall Logo"></img>
                        </center>

                        <h1 class="card-title b_font" style="text-align:center; "> مرکز تجارتی
                            گرندمال </h1>

                        <h4 class="card-title b_font" style="text-align:center; position:relative; top:-20px; ">شرط‌
                            نامه تسلیمی دوکان
                        </h4>

                    </div>
                    <div style="position:relative; top:-50px;">
                        <?php 


    if(isset($_GET["sho_id"])){
        $id = $_GET["sho_id"];
        $sql_query = mysqli_query($connection,"select * from reg_dokan where id='$id'");
        $fetch1 = mysqli_fetch_assoc($sql_query);
?>
                        <tbody id="tbody">






                            <span class="b_font"></span>
                            <textarea type="text" value="<?php echo $fetch1["description"];?>" class="form-control"
                                rows="4"></textarea><br>
                            <span class="b_font">شماره دکان: </span>
                            <input type="text" value="<?php echo $fetch1["dokan_number"];?>" class="form-control"
                                style="width:50px;"></input><br>
                            <span class="b_font"> اسم تسلیم گیرنده: </span>
                            <input type="text" value="<?php echo $fetch1["marbot"];?>" class="form-control"
                                style="width:50px;"></input><br>
                            <span class="b_font">شماره تماس: </span>
                            <input type="text" value="<?php echo $fetch1["phone"];?>" class="form-control"
                                style="width:100px;"></input><br>
                            <span class="b_font">تاریخ تسلیمی: </span>
                            <input type="text" value="<?php echo $fetch1["date_sh"];?>" class="form-control"
                                style="width:100px;"></input><br>
                            <p>
                            <pre class="text-justify b_font" style="font-size:12px;">
                     ماده اول:-  مشتریان محترم مطابق به شرط نامه و قرارداد که با شاروالی صورت گرفته صاحب امتیاز دکان فوق الذکر میباشد.
 ماده دوم:- بعد از موافقه طرفین و شمولیت اسم گیرنده دوکان در لیست مستحقین  باید مبلغ(           ) دالر امریکائی رادر قسط اول که از مجموع قیمت دوکان میباشد بطور  پیش پرداخت از نزد مشتری اخذ میگردد اگر مشتری در وقت معینه حاضر نشود و یا منصرف شود مبلغ 10 فیصد ازسر جمع پول پیش پرداخت وضع میشود .
 ماده سوم: قسط اول از مجموع قیمت امتیاز دوکان بطور پیش پرداخت از جانب صاحب امتیاز همراه  با ثبت و راجستر اخذ میگردد. قسط دوم که 50 فیصد مجموع قیمت میباشد.دوماه بعداز پرداخت قسط اول از طرف صاحب امتیاز پرداخته میشود. قسط سوم که 20 فیصد مجموع قیمت دوکان را احتوا میکند.موقع تسلیم دهی دوکان از طرف صاحب امتیاز تادیه میگردد.
 ماده چهارم:- در صورتیکه مشتری مذکور بعد از سپری شدن معیاد معینه قسط اول و یا50 فیصد قسط دوم  ویا  20 فیصد قسط آخیر  را مطابق به موافقه ویا پروتوکول که صورت گرفته در زمان معین  نپردازند 10 فیصد از قیمت مجموعی قسط اول پیشپرداخت دکان محروم میگردد و شرکت  صلاحیت دارند در صورت ضرورت دکان مذکور را به فرد دیگر واگذار کند وقرارداد قبلی را فسخ نماید .
 ماده پنجم:- کرایه ماهانه یک باب دکان از صاحب امتیاز محترم  مبلغ 40چهل دالر امریکائی  و دو باب دکان مبلغ 80 هشتاد دالر امریکائی تعین گردیده است.
 ماده ششم:-  کرایه دوکان در ده سال اول پس از اعمار  مبلغ 40 چهل دالر امریکائی و در ده سال بعدی باسی فیصد 30% تزئید در نظر گرفته شده است. 
 ماده هفتم:-  شرکت بعد از واگذاری امتیاز دکان 5% از فروشنده و 5% فیصد از خریدار نظر به حج مبلغ اخذ میدارد  
ماده هشتم :- در صورت که صاحب امتیاز تا شش ماه نتواند دوکان خود را فعال نماید. امتیازش از طرف شرکت با 30 فیصد تخفیف مسترد میگردد.
ماده نهم :- تمام مصارف دوکان مانند مصارف برق،مالیه،صفائی، به دوش شخص کرایه نشین بوده اما اگر کرایه نشین نپردازد  و یا خود شخصا استفاده نماید صاحب امتیاز محترم مکلف به پرداخت مصارف فوق الذکر میباشد .
 ماده دهم  :-  صاحب امتیاز محترم نمیتواند دکان خویش  را به تضمین قرضه های بانکی، شرکت ها و یا  ضمانت افراد و اشخاص بدهد . 
 ماده یازدهم:- صاحب امتیاز حق ندارد دوکان مربوطه خود را مکان اموال غیر مجاز و اعمال مغایر شریعت اسلامی و قوانین نافذه کشور  استفاده نماید .
 ماده دوازدهم:- چون ساختمان طوری اعمار گردیده است  که دروازه های تمام دکان ها به داخل مارکیت عیار شده به هیچ دکاندار اجازه داده نمی شود که به طرف دهلیز زیرزمینی دروازه و یا کلکین جدید باز نماید یا اموال خود را به دهلیز قرار داده ویا از دهلیز استفاده نماید.
ماده سیزدهم :- به منظور جلوگیری از حریق و خطرات آتش سوزی پخت و پز در داخل دکان ها مجاز نمیباشد و هر دکاندار یک بالون ضد حریق در داخل دکان خویش نصب نمایند.
 ماده چهاردهم:- کرایه بصورت پیش پرداخت در هر شش ماه اول صورت میگیرد. در صورت عدم پرداخت کرایه ای شش ماه دکاندار محترم مکلف است از مجموع کرایه شش ماه 10 فیصد جریمه بپردازد. 
نوت شرط نامه هذا طی 14 ماده باموافقه جانبین  ترتیب و در اقرار خویش صادق  میباشیم.

                    </pre>

                            </p>
                            <center> <span class="b_font" style="position:relative;"> با احترام <br> الحاج انجنیر سلطان
                                    محمد نور <br> رئیس مرکز تجارتی گرندمال </span><br> </center><br><br>
                            <span class="b_font"> محل امضای مدیر مارکیت</span>
                            <span class="b_font" style="position:relative; margin-right:60%"> محل امضای وشصت صاحب امتیاز
                            </span><br>
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