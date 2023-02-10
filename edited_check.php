<?php 
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
        <link rel="stylesheet" type="text/css" href="css/my-login.css" />
        <style>
        .margin {
            height: 50px;
        }

        .b_font {
            font-family: b koodak;
        }

        th {
            text-align: center;
        }

        .card-header {
            background-color: #3399ff;
            color: white;
        }
        </style>
    </head>

    <body>
        <div class="margin"></div>
        <div class="container" id="chat_div">
            <div class="row">
                <div class="col-sm-12 b_font">
                    <h2 style="text-align:center;"> تغییرات آورده شده</h2>
                    <hr />
                </div>
            </div>
            <div class="row" dir="rtl">
                <?php 
                
                    // $user_id = $row["user_id"];
                    // $sql_query_02 = mysqli_query($connection,"select name,lastname from user_account where id='$user_id'");
                    // $fetch_02 = mysqli_fetch_assoc($sql_query_02);
                    // $check_status = $row["status"];
                    // if($check_status == "read"){
                        
                ?>
                <div class="col-sm-10" style="margin-top:10px;">
                    <!-- kerah dokan -->
                    <div class="card b_font">
                        <div class="card-header">
                            <h4 style="text-align:center;">بخش کراه دکاکین</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped" style="width:100%;">

                                <?php 
                                    $sql_query_01 = mysqli_query($connection,"select * from kerah_dokan where status='edited' and after_check='' order by id desc");
                                    $check_status ="";
                                    $count = 1;
                                    while($fetch_02 = mysqli_fetch_assoc($sql_query_01)){
                                    ?>
                                <tr>
                                    <th colspan="9" class="text text-primary">
                                        اطلاعات اصلی
                                    </th>
                                </tr>
                                <tr>
                                    <th class="b_font">شماره</th>
                                    <th class="b_font">نام</th>
                                    <th class="b_font">نام پدر</th>
                                    <th class="b_font">نمبر های دکان </th>
                                    <th class="b_font">شخص پرداخت کننده</th>
                                    <th class="b_font">مجموع مقدار</th>
                                    <th class="b_font">مقدار پرداختی</th>
                                    <!-- <th class="b_font">باقیمانده</th>
                                    <th class="b_font">فایل</th> -->
                                    <th class="b_font">تاریخ</th>
                                    <th class="b_font" id="icon">عملیات</th>
                                </tr>
                                <tr style="">
                                    <td class="b_font"><?php echo $count; ?></td>
                                    <td class="b_font"><?php echo $fetch_02["par_name"];?></td>
                                    <td class="b_font"><?php echo $fetch_02["father_name"];?></td>
                                    <td class=""><?php echo $fetch_02["dokan_number"];?></td>
                                    <td class="b_font"><?php echo $fetch_02["payer"];?></td>
                                    <td class=""><?php echo $fetch_02["majmo_meqdar"];?></td>
                                    <td class=""><?php echo $fetch_02["meqdar_perdakhty"];?></td>
                                    <!-- <td class="" style="color:red;"><?php echo $fetch_02["total"];?></td> -->


                                    <!-- 
                                    <td class="b_font">
                                        <a class="b_font" target="_blank"
                                            href="documents/<?php echo $fetch_02["file"];?>"><?php if ($fetch_02["file"] != "") {
                                        echo "فایل ضمیمه شده";

                                    }?></a>
                                    </td> -->


                                    <td class=""><?php echo $fetch_02["date_sh"];?></td>
                                    <td class="b_font" id="icon">
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="9" class="text text-primary">
                                        تغیر داده شده
                                    </th>
                                </tr>
                                <?php 
                                    $id = $fetch_02["id"];
                                    $sql_query_03 = mysqli_query($connection,"select * from kerah_dokan_edit where edit_row_id='$id' ");
                                    // $check_status ="";
                                    $count2 = 1;
                                    while($fetch_03 = mysqli_fetch_assoc($sql_query_03)){
                                    ?>
                                <tr class="" style="background-color:#f2f2f2 !important;">
                                    <td class="b_font"><?php echo "#"; ?></td>
                                    <td class="b_font"><?php echo $fetch_03["par_name"];?></td>
                                    <td class="b_font"><?php echo $fetch_03["father_name"];?></td>
                                    <td class=""><?php echo $fetch_03["dokan_number"];?></td>
                                    <td class="b_font"><?php echo $fetch_03["payer"];?></td>
                                    <td class=""><?php echo $fetch_03["majmo_meqdar"];?></td>
                                    <td class=""><?php echo $fetch_03["meqdar_perdakhty"];?></td>
                                    <!-- <td class="" style="color:red;"><?php echo $fetch_03["total"];?></td> -->


                                    <!-- 
                                    <td class="b_font">
                                        <a class="b_font" target="_blank"
                                            href="documents/<?php echo $fetch_03["file"];?>"><?php if ($fetch_02["file"] != "") {
                                        echo "فایل ضمیمه شده";

                                    }?></a>
                                    </td> -->


                                    <td class=""><?php echo $fetch_03["date_sh"];?></td>
                                    <td class="b_font" id="icon">

                                        <a href="checkid_edit.php?ke_accept_id=<?php echo  $fetch_03["id"];?>"><span
                                                class="fa fa-check text text-primary"></span></a> |
                                        <a href="checkid_edit.php?ke_delete_id=<?php echo  $fetch_03["id"];?>"><span
                                                class="fa fa-remove text text-danger"></span></a>

                                    </td>
                                </tr>

                                <?php 
                                $count2++;
                                }
                                ?>

                                <?php 
                                $count++;
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                    <br />
                    <br />
                    <!-- masarf -->
                    <div class="card b_font">
                        <div class="card-header">
                            <h4 style="text-align:center;">بخش مصارف</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped" style="width:100%;">

                                <?php
                                    $sql_query_04 = mysqli_query($connection,"select * from masarf where status='edited' and after_check='' order by m_id desc");
                                    $check_status ="";
                                    $count = 1;
                                    while($fetch_04 = mysqli_fetch_assoc($sql_query_04)){
                                    ?>
                                <tr>
                                    <th colspan="11" class="text text-primary">
                                        اطلاعات اصلی
                                    </th>
                                </tr>
                                <tr>
                                    <th class="b_font">شماره</th>
                                    <th class="b_font">نام مصرف</th>
                                    <th class="b_font">نوعیت</th>
                                    <th class="b_font">توضیحات</th>
                                    <th class="b_font">تعداد</th>
                                    <th class="b_font">ضریب ارزی</th>
                                    <th class="b_font">قیمت </th>
                                    <th class="b_font">به حرف</th>
                                    <th class="b_font">مجموع</th>
                                    <th class="b_font">تاریخ</th>
                                    <th class="b_font" id="icon">عملیات</th>
                                </tr>
                                <tr style="">
                                    <td class="b_font"><?php echo $count;?></td>
                                    <td class="b_font"><?php echo $fetch_04["name"];?></td>
                                    <td class="b_font"><?php echo $fetch_04["type"];?></td>
                                    <td class="b_font"><?php echo $fetch_04["description"];?></td>
                                    <td class=""><?php echo $fetch_04["quantity"];?></td>
                                    <td class=""><?php echo $fetch_04["zarib"];?></td>
                                    <td class=""><?php echo $fetch_04["cost"];?></td>
                                    <td class="b_font"><?php echo $fetch_04["harf"];?></td>
                                    <td class=""><?php echo $fetch_04["total"]; ?></td>
                                    <td class=""><?php echo $fetch_04["date_sh"];?></td>
                                    <td class="b_font" id="icon">
                                    </td>

                                </tr>
                                <tr>
                                    <th colspan="11" class="text text-primary">
                                        تغیر داده شده
                                    </th>
                                </tr>
                                <?php 
                                    $id = $fetch_04["m_id"];
                                    $sql_query_03 = mysqli_query($connection,"select * from masarf_edit where edit_row_id='$id' ");
                                    // $check_status ="";
                                    $count2 = 1;
                                    while($fetch_03 = mysqli_fetch_assoc($sql_query_03)){
                                    ?>
                                <tr class="" style="background-color:#f2f2f2 !important;">
                                    <td class="b_font"><?php echo "#";?></td>
                                    <td class="b_font"><?php echo $fetch_03["name"];?></td>
                                    <td class="b_font"><?php echo $fetch_03["type"];?></td>
                                    <td class="b_font"><?php echo $fetch_03["description"];?></td>
                                    <td class=""><?php echo $fetch_03["quantity"];?></td>
                                    <td class=""><?php echo $fetch_03["zarib"];?></td>
                                    <td class=""><?php echo $fetch_03["cost"];?></td>
                                    <td class="b_font"><?php echo $fetch_03["harf"];?></td>
                                    <td class=""><?php echo $fetch_03["total"]; ?></td>
                                    <td class=""><?php echo $fetch_03["date_sh"];?></td>
                                    <td class="b_font" id="icon">

                                        <a href="checkid_edit.php?mas_accept_id=<?php echo  $fetch_03["m_id"];?>"><span
                                                class="fa fa-check text text-primary"></span></a> |
                                        <a href="checkid_edit.php?mas_delete_id=<?php echo  $fetch_03["m_id"];?>"><span
                                                class="fa fa-remove text text-danger"></span></a>

                                    </td>
                                </tr>

                                <?php 
                                $count2++;
                                }
                                ?>

                                <?php 
                                $count++;
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                    <br />
                    <br />
                    <!-- معاشات -->

                    <div class="card b_font">
                        <div class="card-header">
                            <h4 style="text-align:center;">بخش معاشات</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped" style="width:100%;">

                                <?php 
                                    $sql_query_mash = mysqli_query($connection,"select * from pardakht_mash where status='edited' and after_check='' order by id desc");
                                    $check_status ="";
                                    $count = 1;
                                    while($fetch_mash = mysqli_fetch_assoc($sql_query_mash)){
                                    ?>
                                <tr>
                                    <th colspan="10" class="text text-primary">
                                        اطلاعات اصلی
                                    </th>
                                </tr>
                                <tr>
                                    <th class="b_font">شماره</th>
                                    <th class="b_font">نام</th>
                                    <th class="b_font">نام پدر</th>
                                    <th class="b_font">معاش</th>
                                    <th class="b_font">برداشت</th>
                                    <th class="b_font">مجموعه</th>
                                    <th class="b_font">پرداخت</th>
                                    <th class="b_font">جزئیات</th>
                                    <th class="b_font">تاریخ</th>
                                    <th class="b_font" id="icon">عملیات</th>
                                </tr>
                                <tr style="">
                                    <td class=""><?php echo $count; ?></td>
                                    <td class="b_font"><?php echo $fetch_mash["name"];?></td>
                                    <td class="b_font"><?php echo $fetch_mash["father_name"];?></td>
                                    <td class=""><?php echo $fetch_mash["salary"];?></td>
                                    <td class=""><?php echo $fetch_mash["bardasht"];?></td>
                                    <td class=""><?php echo $fetch_mash["total"];?></td>
                                    <td class="b_font"><?php echo $fetch_mash["paid"];?></td>
                                    <td class="b_font"><?php echo $fetch_mash["description"];?></td>
                                    <td><?php echo $fetch_mash["date_sh"];?></td>
                                    <td class="b_font" id="icon">
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="10" class="text text-primary">
                                        تغیر داده شده
                                    </th>
                                </tr>
                                <?php 
                                    $id = $fetch_mash["id"];
                                    $sql_query_mash_edit = mysqli_query($connection,"select * from pardakht_mash_edit where edit_row_id='$id' ");
                                    // $check_status ="";
                                    
                                    while($fetch_mash_edit = mysqli_fetch_assoc($sql_query_mash_edit)){
                                    ?>
                                <tr class="" style="background-color:#f2f2f2 !important;">
                                    <td class=""><?php echo "#"; ?></td>
                                    <td class="b_font"><?php echo $fetch_mash_edit["name"];?></td>
                                    <td class="b_font"><?php echo $fetch_mash_edit["father_name"];?></td>
                                    <td class=""><?php echo $fetch_mash_edit["salary"];?></td>
                                    <td class=""><?php echo $fetch_mash_edit["bardasht"];?></td>
                                    <td class=""><?php echo $fetch_mash_edit["total"];?></td>
                                    <td class="b_font"><?php echo $fetch_mash_edit["paid"];?></td>
                                    <td class="b_font"><?php echo $fetch_mash_edit["description"];?></td>
                                    <td><?php echo $fetch_mash_edit["date_sh"];?></td>
                                    <td class="b_font" id="icon">

                                        <a href="checkid_edit.php?mash_accept_id=<?php echo  $fetch_mash_edit["id"];?>"><span
                                                class="fa fa-check text text-primary"></span></a> |
                                        <a href="checkid_edit.php?mash_delete_id=<?php echo  $fetch_mash_edit["id"];?>"><span
                                                class="fa fa-remove text text-danger"></span></a>

                                    </td>
                                </tr>

                                <?php 
                                
                                }
                                ?>

                                <?php 
                                $count++;
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                    <!-- bardasht -->
                    <br />
                    <br />
                    <div class="card b_font">
                        <div class="card-header">
                            <h4 style="text-align:center;">بخش برداشت ها</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped" style="width:100%;">

                                <?php 
                                    $sql_query_bardasht = mysqli_query($connection,"select * from bardasht_karmandan where status='edited' and after_check='' order by id desc");
                                    $check_status ="";
                                    $count = 1;
                                    while($fetch_bardasht = mysqli_fetch_assoc($sql_query_bardasht)){
                                    ?>
                                <tr>
                                    <th colspan="7" class="text text-primary">
                                        اطلاعات اصلی
                                    </th>
                                </tr>
                                <tr>
                                    <th class="b_font">شماره</th>
                                    <th class="b_font">نام</th>
                                    <th class="b_font"> نام پدر</th>
                                    <th class="b_font">مقدار برداشت</th>
                                    <th class="b_font">توضیحات</th>
                                    <th class="b_font">تاریخ</th>
                                    <th class="b_font">عملیات</th>

                                </tr>
                                <tr style="">
                                    <td class=""><?php echo $count; ?></td>
                                    <td class="b_font"><?php echo $fetch_bardasht["stuff_name"];?></td>
                                    <td class="b_font"><?php echo $fetch_bardasht["father_name"];?></td>
                                    <td class=""><?php echo $fetch_bardasht["amount"];?></td>
                                    <td class="b_font"><?php echo $fetch_bardasht["description"];?></td>
                                    <td><?php echo $fetch_bardasht["date_sh"];?></td>
                                    <td class="b_font" id="icon">
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="7" class="text text-primary">
                                        تغیر داده شده
                                    </th>
                                </tr>
                                <?php 
                                    $id = $fetch_bardasht["id"];
                                    $sql_query_bardasht_edit = mysqli_query($connection,"select * from bardasht_karmandan_edit where edit_row_id='$id' ");
                                    // $check_status ="";
                                   
                                    while($fetch_bardasht_edit = mysqli_fetch_assoc($sql_query_bardasht_edit)){
                                    ?>
                                <tr class="" style="background-color:#f2f2f2 !important;">
                                    <td class="b_font"><?php echo "#"; ?></td>
                                    <td class="b_font"><?php echo $fetch_bardasht_edit["stuff_name"];?></td>
                                    <td class="b_font"><?php echo $fetch_bardasht_edit["father_name"];?></td>
                                    <td class=""><?php echo $fetch_bardasht_edit["amount"];?></td>
                                    <td class="b_font"><?php echo $fetch_bardasht_edit["description"];?></td>
                                    <td><?php echo $fetch_bardasht_edit["date_sh"];?></td>

                                    <td class="b_font" id="icon">

                                        <a
                                            href="checkid_edit.php?bardasht_accept_id=<?php echo  $fetch_bardasht_edit["id"];?>"><span
                                                class="fa fa-check text text-primary"></span></a> |
                                        <a
                                            href="checkid_edit.php?bardasht_delete_id=<?php echo  $fetch_bardasht_edit["id"];?>"><span
                                                class="fa fa-remove text text-danger"></span></a>

                                    </td>
                                </tr>

                                <?php 
                                }
                                ?>

                                <?php 
                                $count++;
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                    <!-- bill barq -->
                    <br />
                    <br />
                    <div class="card b_font">
                        <div class="card-header">
                            <h4 style="text-align:center;">بخش بل برق</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped" style="width:100%;">

                                <?php 
                                    $sql_query_bill_barq = mysqli_query($connection,"select * from bill_barq where status='edited' and after_check='' order by id desc");
                                    $check_status ="";
                                    $count = 1;
                                    while($fetch_bill_barq = mysqli_fetch_assoc($sql_query_bill_barq)){
                                    ?>
                                <tr>
                                    <th colspan="13" class="text text-primary">
                                        اطلاعات اصلی
                                    </th>
                                </tr>
                                <tr>
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
                                    <th class="b_font" id="icon">عملیات</th>
                                </tr>
                                <tr style="">
                                    <td style="color:green;"><?php echo $count;?></td>
                                    <td><?php echo $fetch_bill_barq["dokan_number"];?></td>
                                    <td><?php echo $fetch_bill_barq["name"];?></td>
                                    <td><?php echo $fetch_bill_barq["father_name"];?></td>
                                    <td><?php echo $fetch_bill_barq["dawra"];?></td>
                                    <td><?php echo $fetch_bill_barq["gozashta"];?></td>
                                    <td><?php echo $fetch_bill_barq["halia"];?></td>
                                    <td><?php echo $fetch_bill_barq["fi_kilowat"];?></td>
                                    <td><?php echo ($fetch_bill_barq["halia"] - $fetch_bill_barq["gozashta"]) * $fetch_bill_barq["fi_kilowat"];?>
                                    </td>
                                    <td><?php echo $fetch_bill_barq["pardakht_shoda"];?></td>
                                    <td> <?php echo ($fetch_bill_barq["gozashta"]+$fetch_bill_barq["halia"]*$fetch_bill_barq["fi_kilowat"])-$fetch_bill_barq["pardakht_shoda"];?>
                                    </td>
                                    <td><?php echo $fetch_bill_barq["date_sh"];?></td>
                                    <td class="b_font" id="icon">
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="13" class="text text-primary">
                                        تغیر داده شده
                                    </th>
                                </tr>
                                <?php 
                                    $id = $fetch_bill_barq["id"];
                                    $sql_query_bill_barq_edit = mysqli_query($connection,"select * from bill_barq_edit where edit_row_id='$id' ");
                                    // $check_status ="";
                                    $count2 = 1;
                                    while($fetch_bill_barq_edit = mysqli_fetch_assoc($sql_query_bill_barq_edit)){
                                    ?>
                                <tr class="" style="background-color:#f2f2f2 !important;">
                                    <td class="b_font"><?php echo "#"; ?></td>
                                    <td><?php echo $fetch_bill_barq_edit["dokan_number"];?></td>
                                    <td><?php echo $fetch_bill_barq_edit["name"];?></td>
                                    <td><?php echo $fetch_bill_barq_edit["father_name"];?></td>
                                    <td><?php echo $fetch_bill_barq_edit["dawra"];?></td>
                                    <td><?php echo $fetch_bill_barq_edit["gozashta"];?></td>
                                    <td><?php echo $fetch_bill_barq_edit["halia"];?></td>
                                    <td><?php echo $fetch_bill_barq_edit["fi_kilowat"];?></td>
                                    <td><?php echo ($fetch_bill_barq_edit["halia"] - $fetch_bill_barq_edit["gozashta"]) * $fetch_bill_barq_edit["fi_kilowat"];?>
                                    </td>
                                    <td><?php echo $fetch_bill_barq_edit["pardakht_shoda"];?></td>
                                    <td> <?php echo ($fetch_bill_barq_edit["gozashta"]+$fetch_bill_barq_edit["halia"]*$fetch_bill_barq_edit["fi_kilowat"])-$fetch_bill_barq_edit["pardakht_shoda"];?>
                                    </td>
                                    <td><?php echo $fetch_bill_barq_edit["date_sh"];?></td>

                                    <td class="b_font" id="icon">

                                        <a
                                            href="checkid_edit.php?bill_barq_accept_id=<?php echo  $fetch_bill_barq_edit["id"];?>"><span
                                                class="fa fa-check text text-primary"></span></a> |
                                        <a
                                            href="checkid_edit.php?bill_barq_delete_id=<?php echo  $fetch_bill_barq_edit["id"];?>"><span
                                                class="fa fa-remove text text-danger"></span></a>

                                    </td>
                                </tr>

                                <?php 
                                $count2++;
                                }
                                ?>

                                <?php 
                                $count++;
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                    <!-- qarza -->
                    <br />
                    <br />
                    <div class="card b_font">
                        <div class="card-header">
                            <h4 style="text-align:center;">بخش قرضه</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped" style="width:100%;">

                                <?php 
                                    $sql_query_01 = mysqli_query($connection,"select * from qarza where status='edited' and after_check='' order by q_id desc");
                                    $check_status ="";
                                    $count = 1;
                                    while($fetch_02 = mysqli_fetch_assoc($sql_query_01)){
                                    ?>
                                <tr>
                                    <th colspan="12" class="text text-primary">
                                        اطلاعات اصلی
                                    </th>
                                </tr>
                                <tr>
                                    <th class="b_font">شماره</th>
                                    <th class="b_font">نام </th>
                                    <th class="b_font">توضیحات</th>
                                    <th class="b_font">وظیفه</th>
                                    <th class="b_font">مقدار</th>
                                    <th class="b_font">تعداد قسط</th>
                                    <th class="b_font">نام سازمان</th>
                                    <th class="b_font">نوعیت</th>
                                    <th class="b_font">پرداخت ماهانه</th>
                                    <th class="b_font">باقی</th>
                                    <th class="b_font">تاریخ</th>
                                    <th class="b_font" id="icon">عملیات</th>
                                </tr>
                                <tr style="">
                                    <td class="b_font"><?php echo $count; ?></td>
                                    <td class="b_font"><?php echo $fetch_02["name"];?></td>
                                    <td class="b_font"><?php echo $fetch_02["description"];?></td>
                                    <td class="b_font"><?php echo $fetch_02["job"];?></td>
                                    <td class="b_font"><?php echo $fetch_02["amount"];?></td>
                                    <td class="b_font"><?php echo $fetch_02["qist"];?></td>
                                    <td class="b_font"><?php echo $fetch_02["org_name"];?></td>
                                    <td class="b_font"><?php echo $fetch_02["qarza_type"];?></td>
                                    <td class="b_font"><?php echo $fetch_02["monthly_payment"];?></td>
                                    <td class="b_font" style="color:red;">
                                        <?php echo $fetch_02["amount"]-$fetch_02["monthly_payment"];?></td>
                                    <td class="b_font"><?php echo $fetch_02["date_sh"];?></td>
                                    <td class="b_font" id="icon">
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="12" class="text text-primary">
                                        تغیر داده شده
                                    </th>
                                </tr>
                                <?php 
                                    $id = $fetch_02["q_id"];
                                    $sql_query_03 = mysqli_query($connection,"select * from qarza_edit where edit_row_id='$id' ");
                                    // $check_status ="";
                                    $count2 = 1;
                                    while($fetch_03 = mysqli_fetch_assoc($sql_query_03)){
                                    ?>
                                <tr class="" style="background-color:#f2f2f2 !important;">
                                    <td class="b_font"><?php echo "#"; ?></td>
                                    <td class="b_font"><?php echo $fetch_03["name"];?></td>
                                    <td class="b_font"><?php echo $fetch_03["description"];?></td>
                                    <td class="b_font"><?php echo $fetch_03["job"];?></td>
                                    <td class="b_font"><?php echo $fetch_03["amount"];?></td>
                                    <td class="b_font"><?php echo $fetch_03["qist"];?></td>
                                    <td class="b_font"><?php echo $fetch_03["org_name"];?></td>
                                    <td class="b_font"><?php echo $fetch_03["qarza_type"];?></td>
                                    <td class="b_font"><?php echo $fetch_03["monthly_payment"];?></td>
                                    <td class="b_font" style="color:red;">
                                        <?php echo $fetch_03["amount"]-$fetch_03["monthly_payment"];?></td>
                                    <td class="b_font"><?php echo $fetch_03["date_sh"];?></td>
                                    <td class="b_font" id="icon">

                                        <a href="checkid_edit.php?qarza_accept_id=<?php echo  $fetch_03["q_id"];?>"><span
                                                class="fa fa-check text text-primary"></span></a> |
                                        <a href="checkid_edit.php?qarza_delete_id=<?php echo  $fetch_03["q_id"];?>"><span
                                                class="fa fa-remove text text-danger"></span></a>

                                    </td>
                                </tr>

                                <?php 
                                $count2++;
                                }
                                ?>

                                <?php 
                                $count++;
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                    <!-- dokakin -->
                    <br />
                    <br />
                    <div class="card b_font">
                        <div class="card-header">
                            <h4 style="text-align:center;">بخش ثبت دکاکین</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped" style="width:100%;">

                                <?php 
                                    $sql_query_01 = mysqli_query($connection,"select * from reg_dokan where status='edited' and after_check='' order by id desc");
                                    $check_status ="";
                                    $count = 1;
                                    while($fetch_02 = mysqli_fetch_assoc($sql_query_01)){
                                    ?>
                                <tr>
                                    <th colspan="9" class="text text-primary">
                                        اطلاعات اصلی
                                    </th>
                                </tr>
                                <tr>
                                    <th class="b_font">شماره</th>
                                    <th class="b_font">نمبر دکان </th>
                                    <th class="b_font">نام</th>
                                    <th class="b_font">نام پدر</th>
                                    <th class="b_font">ولدیت</th>
                                    <th class="b_font">تذکره</th>
                                    <th class="b_font">شماره تماس</th>
                                    <th class="b_font">توضیحات</th>
                                    <th class="b_font">تاریخ تسلیمی</th>
                                    <th class="b_font" id="icon">عملیات</th>
                                </tr>
                                <tr style="">
                                    <td class=""><?php echo $count; ?></td>
                                    <td class=""><?php echo $fetch_02["dokan_number"];?></td>
                                    <td class="b_font"><?php echo $fetch_02["marbot"];?></td>
                                    <td class="b_font"><?php echo $fetch_02["father_name"];?></td>
                                    <td class="b_font"><?php echo $fetch_02["grandfather"];?></td>
                                    <td class=""><?php echo $fetch_02["tazkira"];?></td>
                                    <td class=""><?php echo $fetch_02["phone"];?></td>
                                    <td class="b_font"><?php echo $fetch_02["description"];?></td>
                                    <td class=""><?php echo $fetch_02["date_sh"];?></td>
                                    <td class="b_font" id="icon">
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="9" class="text text-primary">
                                        تغیر داده شده
                                    </th>
                                </tr>
                                <?php 
                                    $id = $fetch_02["id"];
                                    $sql_query_03 = mysqli_query($connection,"select * from reg_dokan_edit where edit_row_id='$id' ");
                                    // $check_status ="";
                                    $count2 = 1;
                                    while($fetch_03 = mysqli_fetch_assoc($sql_query_03)){
                                    ?>
                                <tr class="" style="background-color:#f2f2f2 !important;">
                                    <td class="b_font"><?php echo "#"; ?></td>
                                    <td class=""><?php echo $fetch_03["dokan_number"];?></td>
                                    <td class="b_font"><?php echo $fetch_03["marbot"];?></td>
                                    <td class="b_font"><?php echo $fetch_03["father_name"];?></td>
                                    <td class="b_font"><?php echo $fetch_03["grandfather"];?></td>
                                    <td class=""><?php echo $fetch_03["tazkira"];?></td>
                                    <td class=""><?php echo $fetch_03["phone"];?></td>
                                    <td class="b_font"><?php echo $fetch_03["description"];?></td>
                                    <td class=""><?php echo $fetch_03["date_sh"];?></td>
                                    <td class="b_font" id="icon">

                                        <a href="checkid_edit.php?reg_dokan_accept_id=<?php echo  $fetch_03["id"];?>"><span
                                                class="fa fa-check text text-primary"></span></a> |
                                        <a href="checkid_edit.php?reg_dokan_delete_id=<?php echo  $fetch_03["id"];?>"><span
                                                class="fa fa-remove text text-danger"></span></a>

                                    </td>
                                </tr>

                                <?php 
                                $count2++;
                                }
                                ?>

                                <?php 
                                $count++;
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>

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