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
                                style="font-size:25px;" onclick="window.open('bill_barq.php','_self');"></button>
                            <button class="glyphicon print glyphicon-print text text-primary" id="icon"
                                style="position:relative; left:10px; font-size:25px;" onclick="myFunction()"></button>
                            <h2 class="card-title b_font" style="text-align:center; "> رسیدات بل های برق </h2>

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
                                onclick="window.open('added_dawra_bill_barq.php','_self')"><img
                                    src="image/icons/clear_filters_32px.png" alt=""></button>
                            <br>
                            <table class="table table-bordered table-striped" id="dokakin_sab_shoda" dir="rtl">
                                <thead>

                                    <tr class="bg bg-primary">
                                        <th class="b_font">شماره</th>
                                        <th class="b_font">نمبر دوکان </th>
                                        <th class="b_font">نام </th>
                                        <th class="b_font">نام پدر </th>
                                        <th class="b_font">دوره </th>
                                        <th class="b_font">گذشته</th>
                                        <th class="b_font">حالیه</th>
                                        <th class="b_font">فی کیلوات </th>
                                        <th class="b_font">مبلغ قابل پرداخت </th>
                                        <th class="b_font">پرداخت شده </th>
                                        <th class="b_font">باقیمانده </th>
                                        <th class="b_font">جزئیات </th>
                                        <th class="b_font">تاریخ </th>

                                        <th title="Edit & Delete" class="author40per" id="icon">E & D</th>

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
                                        $sql_query_02 = mysqli_query($connection,"select * from bill_barq where date_m between '$from_m' and '$to_m'");
                                        $sql_query_03 = mysqli_query($connection,"select sum(pardakht_shoda) as pardakht_shoda,sum((halia-gozashta)*fi_kilowat) as qabil_pardakht,sum(((halia-gozashta)*fi_kilowat)-pardakht_shoda) as baqimanda from bill_barq where date_m between '$from_m' and '$to_m'");
                                    }
                                    else{
                                        $sql_query_02 = mysqli_query($connection,"select * from bill_barq");
                                        $sql_query_03 = mysqli_query($connection,"select sum(pardakht_shoda) as pardakht_shoda,sum((halia-gozashta)*fi_kilowat) as qabil_pardakht,sum(((halia-gozashta)*fi_kilowat)-pardakht_shoda) as baqimanda from bill_barq");

                                    }
                                    $fetch_03 = mysqli_fetch_assoc($sql_query_03);
                                    
                      
                                $count = 1;
                                while ($row = mysqli_fetch_assoc($sql_query_02)) {
                                ?>
                                    <tr style="color:white;">
                                        <td style="color:green;"><?php echo $count;?></td>
                                        <td><?php echo $row["dokan_number"];?></td>
                                        <td><?php echo $row["name"];?></td>
                                        <td><?php echo $row["father_name"];?></td>
                                        <td><?php echo $row["dawra"];?></td>
                                        <td><?php echo $row["gozashta"];?></td>
                                        <td><?php echo $row["halia"];?></td>
                                        <td><?php echo $row["fi_kilowat"];?></td>
                                        <td><?php echo ($row["halia"] - $row["gozashta"]) * $row["fi_kilowat"];?></td>
                                        <td><?php echo $row["pardakht_shoda"];?></td>
                                        <td class="text text-danger">
                                            <?php echo (($row["halia"] - $row["gozashta"]) * $row["fi_kilowat"])-$row["pardakht_shoda"];?>
                                        </td>
                                        <td><?php echo $row["description"];?></td>
                                        <td><?php echo $row["date_sh"];?></td>

                                        <td id="icon" class="author40per"><span class="glyphicon glyphicon-edit"
                                                title="edit" onclick="edit(<?php echo $row['id'] ;?>)"
                                                style="color:green; cursor:pointer;"></span>
                                            | <span class="glyphicon glyphicon-remove"
                                                onclick="delet(<?php echo $row['id'] ;?>)"
                                                style="color:red; cursor:pointer;" title="delete"></span></td>
                                    </tr>
                                    <?php
                      $count++;
                      }
                    ?>
                                    <tr class="bg bg-primary">
                                        <th colspan="5"> مجموع مقدار قابل پرداخت : <span class=""
                                                style="font-size:15px;"><?php
                                                
                                                echo $fetch_03["qabil_pardakht"]; ?></span>
                                        </th>
                                        <th colspan="5"> مجموع مقدار پرداخت شده : <span class=""
                                                style="font-size:15px;"><?php
                                                
                                                echo $fetch_03["pardakht_shoda"]; ?></span>
                                        </th>
                                        <th colspan="4"> مجموع مقدار باقیمانده : <span class="" style="font-size:15px;"><?php
                                                
                                                echo $fetch_03["baqimanda"]; ?></span>
                                        </th>


                                    </tr>
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

function edit(id) {
    var idd = id;
    window.open("edit.php?bill_id=" + idd, "_self");

}

function delet(id) {
    var confirm = window.confirm("آیا مطمین به حذف این مورد هستید؟");
    if (confirm == true) {
        window.open("delete.php?bill_id=" + id, "_self");
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