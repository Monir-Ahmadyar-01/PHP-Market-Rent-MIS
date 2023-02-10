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

        td {
            color: black;
        }

        body {
            background-color: #e6f2ff !important;
        }

        a,
        span {
            cursor: pointer;
        }

        @media print {
            .col-sm-12 {
                display: none;
            }

            #icon,
            .print {
                display: none;
            }
        }
        </style>
    </head>
    <script>
    </script>
    <script>
    function myFunction() {
        window.print();

    }
    </script>
    <?php 
    
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
    ?>

    <body class="my-login-page">
        <section class="h-100" style=" padding:0px !important;">
            <div class="container-fluid h-100">
                <div class="card-wrapper" style="width:100%;margin-top:1%; ">
                    <div class="card fat" style="">
                        <div class="card-body">
                            <button class="glyphicon print glyphicon-circle-arrow-left text text-primary" id="icon"
                                style="font-size:25px;"
                                onclick="window.open('shop_registeration.php','_self');"></button>
                            <button class="glyphicon print glyphicon-print text text-primary" id="icon"
                                style="position:relative; left:10px; font-size:25px;" onclick="myFunction()"></button>

                            <h1 class="card-title b_font" style="text-align:center;" placeholder="">
                                دکاکین ثبت شده
                            </h1>
                            <hr>
                            <div class="row" dir="rtl">
                            </div>
                            <!-- search Table -->

                            <table class="table table-bordered print" style="width:60%; float:right;">
                                <tr>
                                    <td>
                                        <label for="From">جستجو به اساس مشخصات</label>
                                        <input type="text" class="form-control" required name="input_search"
                                            id="input_search">
                                    </td>
                                    <form action="" method="post">
                                        <td>
                                            <label for="From">از تاریخ</label>
                                            <input type="text" class="form-control" id="date_from" required name="from"
                                                name="From">
                                        </td>
                                        <td>
                                            <label for="To">به تاریخ</label>
                                            <input type="text" class="form-control" id="date_to" required name="to"
                                                id="To">
                                        </td>
                                        <td>
                                            <input type="submit" value="جستجو"
                                                style="width:130px;margin-top:24px; height:35px;"
                                                class="btn btn-primary" name="search_btn_submit">
                                        </td>
                                    </form>
                                </tr>
                            </table>
                            <button class="btn btn-primary print btn-sm" style="margin-top:36px;"
                                onclick="window.open('registered_shops.php','_self')"><img
                                    src="image/icons/clear_filters_32px.png" alt=""></button>
                            <br>
                            <table class="table table-bordered table-striped" id="dokakin_sab_shoda" dir="rtl">
                                <thead>

                                    <tr class="bg bg-primary">
                                        <th class="b_font">شماره</th>
                                        <th class="b_font">نمبر دکان </th>
                                        <th class="b_font">نام</th>
                                        <th class="b_font">نام پدر</th>
                                        <th class="b_font">ولدیت</th>
                                        <th class="b_font">تذکره</th>
                                        <th class="b_font">شماره تماس</th>
                                        <th class="b_font">توضیحات</th>
                                        <th class="b_font print">عکس</th>
                                        <th class="b_font print">اسناد</th>
                                        <th class="b_font">تاریخ تسلیمی</th>
                                        <th class="b_font author40per" id="icon">عملیات</th>


                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                    <?php
                                    $sql_query_02 = null;
                                    $sql_query_03 = null;
                                    if(isset($_POST["search_btn_submit"])){
                                        $from_sh = $_POST["from"];
                                        $from_sh_exp = explode("/",$from_sh);
                                        $from_m =  jalali_to_gregorian($from_sh_exp[2],$from_sh_exp[1],$from_sh_exp[0],'/');
                                        
                                        $to_sh = $_POST["to"];
                                        $to_sh_exp = explode("/",$to_sh);
                                        $to_m =  jalali_to_gregorian($to_sh_exp[2],$to_sh_exp[1],$to_sh_exp[0],'/');

                                        // echo $from_sh . " - " . $from_m;
                                        // echo "-------------------------";
                                        // echo $to_sh . " - " . $to_m;
                                        $sql_query_02 = mysqli_query($connection,"select * from reg_dokan where date_m between '$from_m' and '$to_m'");
                                        // $sql_query_03 = mysqli_query($connection,"select sum(salary) as salary from sabt_karmandan where date_m between '$from_m' and '$to_m'");
                                    }
                                    else{
                                        $sql_query_02 = mysqli_query($connection,"select * from reg_dokan");
                                        // $sql_query_03 = mysqli_query($connection,"select sum(salary) as salary from sabt_karmandan");

                                    }
                                    // $fetch_03 = mysqli_fetch_assoc($sql_query_03);
                                    
                      
                                $count = 1;
                                while ($fetch_02 = mysqli_fetch_assoc($sql_query_02)) {
                                ?>
                                    <tr style="">
                                        <td class=""><?php echo $count; ?></td>
                                        <td class=""><?php echo $fetch_02["dokan_number"];?></td>
                                        <td class="b_font"><?php echo $fetch_02["marbot"];?></td>
                                        <td class="b_font"><?php echo $fetch_02["father_name"];?></td>
                                        <td class="b_font"><?php echo $fetch_02["grandfather"];?></td>
                                        <td class=""><?php echo $fetch_02["tazkira"];?></td>
                                        <td class=""><?php echo $fetch_02["phone"];?></td>
                                        <td class="b_font"><?php echo $fetch_02["description"];?></td>

                                        <td class="b_font print">
                                            <img src="documents/<?php echo $fetch_02["photo"];?>"
                                                style="height:50px; width:50px;" class="img img-thumbnail" alt="">
                                        </td>

                                        <td class="b_font print">
                                            <a class="b_font" target="_blank"
                                                href="documents/<?php echo $fetch_02["documents"];?>"><?php if ($fetch_02["documents"] != "") {
                          echo "فایل ضمیمه شده";

                      }?></a>
                                        </td>
                                        <td class=""><?php echo $fetch_02["date_sh"];?></td>
                                        <td class="b_font author40per" id="icon">

                                            <a href="edit.php?sho_id=<?php echo  $fetch_02["id"];?>"><span
                                                    class="glyphicon glyphicon-edit text text-primary"
                                                    title="ویرایش"></span></a> |
                                            <span onclick="delet(<?php echo $fetch_02['id'] ;?>)"
                                                class="glyphicon glyphicon-remove text text-danger" title="حذف"></span>
                                            |
                                            <a href="agreement.php?sho_id=<?php echo  $fetch_02["id"];?>"><span
                                                    class="glyphicon glyphicon-bookmark text text-info"
                                                    title="شرط نامه"></span></a> |
                                            <!-- <a href="form.php?sho_id=<?php echo  $fetch_02["id"];?>"><span
                                                class="glyphicon glyphicon-file text text-success" title="فورم"></span></a> | -->
                                            <a href="protocol.php?sho_id=<?php echo  $fetch_02["id"];?>"><span
                                                    class="glyphicon glyphicon-paperclip text text-primary"
                                                    title="پروتوکول"></span></a>

                                        </td>
                                    </tr>
                                    <?php 
                                }
                                    ?>
                                </tbody>
                            </table>


                        </div>
                    </div>

                </div>
            </div>

        </section>



    </body>

</html>
<script>
/****************************************
 *       Basic Table                   *
 ****************************************/
$('#dokakin_sab_shoda').DataTable();

function delet(id) {
    var confirm = window.confirm("اطلاعات حذف خواهد شد برای رد کردن گزینه cancel را بزنید ");
    if (confirm == true) {
        window.open("delete.php?sho_id=" + id, "_self");
    } else {

    }
}
</script>
<script>
$(document).ready(function() {
    $("#input_search").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#tbody tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
</script>
<script type="text/javascript">
$(function() {

    $('#date_from').datepicker({
        changeMonth: true,
        changeYear: true
    });
    $('#date_to').datepicker({
        changeMonth: true,
        changeYear: true
    });
});
</script>