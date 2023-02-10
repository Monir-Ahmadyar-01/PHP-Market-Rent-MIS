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
textarea[type=text] {
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
                        onclick="window.open('registered_shops.php','_self');" id="icon"
                        style="position:relative;  right:15px; font-size:25px;"></button>

                    <center><img src="image/logo.jpg" width="210px" height="90px" alt="GrandMall Logo"></img></center>

                    <h1 class="card-title b_font" style="text-align:center; "> مرکز تجارتی
                        گرندمال </h1>

                    <h4 class="card-title b_font" style="text-align:center; position:relative; top:-20px; ">پروتوکول فی مابین کرایه نشین و مرکز تجارتی گرندمال
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
                    <textarea type="text"  value="<?php echo $fetch1["description"];?>" class="form-control" rows="4" ></textarea><br>
                    <span class="b_font">شماره دکان: </span>
                    <input type="text"  value="<?php echo $fetch1["dokan_number"];?>" class="form-control" style="width:50px;"></input><br>
                   
                    <span class="b_font">شماره تماس: </span>
                    <input type="text"  value="<?php echo $fetch1["phone"];?>" class="form-control" style="width:100px;"></input><br>
                    <img src="documents/<?php echo $fetch1["photo"];?>"
                                            style="height:150px; width:150px; position:relative; border:3px solid blue; right:73%; top:-80px;" class="img img-thumbnail" alt="Photo">
                    
                    <p >
                    <pre class="text-justify b_font" style="font-size:12px; position:relative; top:-40px;">
                    1 – کرایه ماهوار فی باب دکان مبلغ ( 150 دالر امریکایی)  میشـــــــودبه مدت شش ماه  ازتاریخ (<?php echo $fetch1["date_sh"]; ?>) عقد قرارداد  گردید.
2- مطابق به قرارداد کرایه  شش ماه دو باب دکان مبلغ (1800 دالرهجده صد دالر) میشود به طورپیشپرداخت اخذ میگردد ودر بدل هر پرداخت پول دکاندار باید رسید با مهر و امضاً دریافت نماید.
3 – طبق طرزالعمل های مارکیت مصارف برق ,صفایی  , و تکس مالیاتی دکاکین مربوط به کرایه نشین میباشد 
4 – دکانداران محترم جهت حفظ و مراقبت دکان های شان از آتش سوزی و خطرات آن  مکلف به نصب بالون های گاز ضد حریق میباشند وهمچنان حق ندارند برق را  خارج از مارکیت بگیرند و یا بدهند.
5- دکاندران محترم مکلف به رعایت پاکی و نظافت دکاکین شان و مارکیت بوده و از گذاشتن اجناس در پیشروی دکاکین شان در دهلیز جداً معذرت میخواهیم . و همچنان روز های جمعه به طور دایمی دروازه های مارکیت باز میباشد 
6- به هیچ عنوان کرایه نشین های  محترم دکان مربوط  شان را نمیتوانند به کرایه , ضمانت حسابات بانکی و معاملات تجارتی شان بگذارند مسولیت های بعدی متوجه خود شان است همچنان دکان های خویش را به شکل  گدام استفاده کرده نمیتوانند.
7– مصار ف داخل دکان مربوط به کرایه  نشین ها بوده که از قبیل  قفسچه و یا تزئینات آن به مارکیت ربطی ندارد  
8– در صورت که دکان ها نیاز به سلینگ داشته باشد کرایه نشین میتواند آن را نصب نماید ودر کرایه ماه بعدی شان مجرا میگردد
9- مطابق به طرزالعمل مارکیت معاش چوکیداران وصفا کاران بدوش مستاجرمیباشد و همچنان دکانداران محترم مکلف اند گروپ های پیشروی  دکاکین شان را روشن نگهدارند.
10- دکانداران محترم صرف میتوانند اجناس و یا اموال تجارتی مجازرا در دکان های شان بفروشند و از اجناس و یا اموال غیر مجاز خود داری نموده در صورت تخلف مسئولیت های بعدی  بدوش خود شان میباشند.
11– دکانداران محترم از استخدام اشخاص مجهوالهویت در دکاکین خویش اباء ورزیده و مسئولیت های بعدی بدوش خود شان میباشند
 12 –هرگونه تخریب وتغیردرداخل دکان مربوط به کرایه نشین بوده زمان فسخ قرارداد به شکل اولی اعمارو یا مبالغ آن اخذ میگردد.
13 – در صورت که کرایه نشین پیش از عقد قرار داد دکانش را تخلیه مینماید یک ماه قبل مارکیت را در جریان قرار دهد در غیر آن صورت یک ماه کرایه بالایش چارچ گردیده  آنگاه حق شکایت را نخواهند داشت 
14- اگر کرا یه نشین خلاف طرز العمل مارکیت عمل نماید مارکیت مجبور است که کرایه نشین راحکم به تخلیه نماید 
مندرجات شرطنامه هذا در قید (چهارده ماده)مورد تایید و موافقه جانبین بوده و سند هذا بدون امضأ ومهر مارکیت مداراعتبارنمی باشد دراقرار خویش صادق میباشیم  .    


                    </pre>
                    
                    </p>
                    <span class="b_font"> محل امضا و مهر مدیر مارکیت</span>
                    <span class="b_font" style="position:relative; margin-right:50%"> محل امضای وشصت صاحب کرایه نشین </span><br>
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