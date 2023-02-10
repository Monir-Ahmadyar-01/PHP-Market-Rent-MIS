<?php 
    include_once("redirect.php");
?>
<!DOCTYPE html>

<html lang="fa" dir="rtl">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/datepicker.js">
        </script>
        <script language="JavaScript">
        /**
         * Disable right-click of mouse, F12 key, and save key combinations on page
         * By Arthur Gareginyan (https://www.arthurgareginyan.com)
         * For full source code, visit https://mycyberuniverse.com
         */
        window.onload = function() {
            document.addEventListener("contextmenu", function(e) {
                e.preventDefault();
            }, false);
            document.addEventListener("keydown", function(e) {
                //document.onkeydown = function(e) {
                // "I" key
                if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
                    disabledEvent(e);
                }
                // "J" key
                if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
                    disabledEvent(e);
                }
                // "S" key + macOS
                if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
                    disabledEvent(e);
                }
                // "U" key
                if (e.ctrlKey && e.keyCode == 85) {
                    disabledEvent(e);
                }
                // "F12" key
                if (event.keyCode == 123) {
                    disabledEvent(e);
                }
            }, false);

            function disabledEvent(e) {
                if (e.stopPropagation) {
                    e.stopPropagation();
                } else if (window.event) {
                    window.event.cancelBubble = true;
                }
                e.preventDefault();
                return false;
            }
        };
        </script>

        <link rel="stylesheet" href="css/datepicker.css">
        <style>
        caption,
        td,
        th {
            text-align: center;
            font-family: arial;
        }

        caption {
            background-color: #5f7682;
            color: white;
        }

        .b_font {
            font-family: b koodak;
        }
        </style>
    </head>

    <body>
        <?php 
    include_once("database.php");
    
    include_once("jdf.php");
?>



        <?php 

// part edit kerah dokakin
    if(isset($_GET["ke_id"])){
        $id = $_GET["ke_id"];
        $sql_query = mysqli_query($connection,"select * from kerah_dokan where id='$id'");
        $fetch1 = mysqli_fetch_assoc($sql_query);
?>

        <br><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered table-striped">

                        <?php 
                                if(isset($_POST["btn_update"])){
                                    $user_id = $_SESSION["user_id"];
                                    $par_name = $_POST["par_name"];
                                    $father_name = $_POST["father_name"];
                                    $dokan_number = $_POST["dokan_number"];
                                    $payer = $_POST["payer"];
                                    $majmo_meqdar = $_POST["majmo_meqdar"];
                                    $meqdar_perdakhty = $_POST["meqdar_perdakhty"];
                                    $total = $majmo_meqdar * $meqdar_perdakhty;
                                
                                    $file=$_FILES['file']['name'];
                                    $sourcePath = $_FILES["file"]["tmp_name"];
                                    $targetPath = "documents/".$_FILES['file']['name'];
                                    move_uploaded_file($sourcePath,$targetPath);
                                    $date_sh = $_POST["date_sh"];
                                    $date_sh_exp = explode("/",$date_sh);
                                    $date_m =  jalali_to_gregorian($date_sh_exp[2],$date_sh_exp[1],$date_sh_exp[0],'/');
                                   
                                    $sql_query2 = mysqli_query($connection,"update kerah_dokan set status='edited',after_check='' where id='$id'");
                                    $id = $_GET["ke_id"];
                                    $sql_query_03 = mysqli_query($connection,"INSERT INTO `kerah_dokan_edit` (`id`, `user_id`, `edit_row_id`, `par_name`, `father_name`, `dokan_number`, `payer`, `majmo_meqdar`, `meqdar_perdakhty`, `total`, `file`, `date_sh`, `date_m`) VALUES
                                     (NULL, '$user_id', '$id', '$par_name', '$father_name', '$dokan_number', '$payer', '$majmo_meqdar', '$meqdar_perdakhty', '', '$file', '$date_sh', '$date_m')");

                                    if($sql_query2){
                                        header("location:kera_pardakht_shoda.php");
                                    }
                                    else{
                                        echo "<script>alert('Database Error')</script>";
                                    }
                                }
                            ?>
                        <form action="" method="post">
                            <tr>

                                <th class="b_font">نام</th>
                                <th class="b_font">نام پدر</th>
                                <th class="b_font">نمبر های دکان </th>
                                <th class="b_font">شخص پرداخت کننده</th>
                                <th class="b_font">مجموع مقدار</th>
                                <th class="b_font">مقدار پرداختی</th>
                                <th class="b_font">فایل پرداخت</th>
                                <th class="b_font">تاریخ</th>

                            </tr>
                            <tr>


                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="par_name"
                                            value="<?php echo $fetch1["par_name"];?>" id="par_name" required autofocus>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="father_name"
                                            value="<?php echo $fetch1["father_name"];?>" id="father_name" required
                                            autofocus>
                                    </div>
                                </td>

                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            value="<?php echo $fetch1["dokan_number"];?>" name="dokan_number"
                                            id="dokan_number" required autofocus>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?php echo $fetch1["payer"];?>"
                                            name="payer" id="payer" required autofocus>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            value="<?php echo $fetch1["majmo_meqdar"];?>" name="majmo_meqdar"
                                            id="majmo_meqdar" required autofocus>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="meqdar_perdakhty"
                                            value="<?php echo $fetch1["meqdar_perdakhty"];?>" id="meqdar_perdakhty"
                                            required autofocus>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="file" id="file" autofocus>
                                    </div>
                                </td>

                                <td style="width:120px;" class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="date_sh" id="date_sh"
                                            value="<?php echo jdate("d/m/Y","","","Asia/kabul","en");?>" required
                                            autofocus>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td colspan="12"><button type="submit" name="btn_update"
                                        class="btn btn-primary btn-sm-12"
                                        style="width:100%; background-color:#0069D9; font-family:b koodak;">ثبت
                                        تغییرات</button></td>
                            </tr>
                        </form>

                    </table>

                    <button class="btn b_font btn-success" style="font-size:13px;"
                        onclick="window.open('kera_pardakht_shoda.php','_self');">صفحه قبلی</button>
                </div>
            </div>
        </div>

        <?php
        exit();
            }

        ?>

        <?php 

// part edit bill barq
    if(isset($_GET["bill_id"])){
        $id = $_GET["bill_id"];
        $sql_query = mysqli_query($connection,"select * from bill_barq where id='$id'");
        $fetch2 = mysqli_fetch_assoc($sql_query);
?>

        <br><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered table-striped">

                        <?php 
                                if(isset($_POST["btn_update10"])){
                                    $dokan_number = $_POST["dokan_number"];
                                     $name = $_POST["name"];
                                    $father_name = $_POST["father_name"];
                                    $dawra = $_POST["dawra"]; 
                                    $gozashta = $_POST["gozashta"];
                                    $halia = $_POST["halia"];
                                     $fi_kilowat = $_POST["fi_kilowat"];
                                    
                                    $pardakht_shoda = $_POST["pardakht_shoda"];
                                
                                     $description = $_POST["description"];
                                    
                                     $user_id = $_SESSION["user_id"];
                                     $date_sh = $_POST["date_sh"];
                                     $date_sh_exp = explode("/",$date_sh);
                                     $date_m =  jalali_to_gregorian($date_sh_exp[2],$date_sh_exp[1],$date_sh_exp[0],'/');
                                   
                                   
                                    $sql_query2 = mysqli_query($connection,"update bill_barq set status='edited',after_check='' where id='$id'");
                                    $id = $_GET["bill_id"];
                                    $sql_query_03 = mysqli_query($connection,"
                                        INSERT INTO `bill_barq_edit` (`id`, `dokan_number`, `name`, `father_name`, `dawra`, `gozashta`, `halia`, `fi_kilowat`, `pardakht_shoda`, `description`, `user_id`, `edit_row_id`, `date_sh`, `date_m`)
                                         VALUES (NULL, '$dokan_number', '$name', '$father_name', '$dawra', '$gozashta', '$halia', '$fi_kilowat', '$pardakht_shoda', '$description', '$user_id', '$id', '$date_sh', '$date_m')
                                    ");
                                    
                                    if($sql_query_03){
                                        header("location:added_dawra_bill_barq.php");
                                    }
                                    else{
                                        echo "<script>alert('Database Error')</script>";
                                    }
                                }
                            ?>
                        <form action="" method="post">

                            <tr class="b_font">

                                <td>
                                    <h4 class="b_font">نمبر دکان</h4>
                                    <br>
                                    <div class="form-group">
                                        <input name="dokan_number" id="dokan_number"
                                            value="<?php echo $fetch2["dokan_number"];?>" type="text"
                                            class="form-control" required>
                                    </div>
                                </td>
                                <td>
                                <td>
                                    <h4 class="b_font">نام</h4>
                                    <br>
                                    <div class="form-group">
                                        <input name="name" id="name" value="<?php echo $fetch2["name"];?>" type="text"
                                            class="form-control" required>
                                    </div>
                                </td>
                                <td>
                                    <h4 class="b_font">نام پدر</h4>
                                    <br>
                                    <div class="form-group">
                                        <input name="father_name" id="father_name"
                                            value="<?php echo $fetch2["father_name"];?>" type="text"
                                            class="form-control" required>
                                    </div>
                                </td>

                                <td>
                                    <h4 class="b_font">دوره</h4>
                                    <br>
                                    <div class="form-group">
                                        <input name="dawra" id="dawra" value="<?php echo $fetch2["dawra"];?>"
                                            type="text" class="form-control" required>
                                    </div>
                                </td>


                                <td>
                                    <h4 class="b_font">گذشته</h4>
                                    <br>
                                    <div class="form-group">
                                        <input name="gozashta" id="gozashta" value="<?php echo $fetch2["gozashta"];?>"
                                            type="text" class="form-control" required>
                                    </div>
                                </td>
                                <td>
                                    <h4 class="b_font">حالیه</h4>
                                    <br>
                                    <div class="form-group">
                                        <input name="halia" id="halia" value="<?php echo $fetch2["halia"];?>"
                                            type="text" class="form-control" required>
                                    </div>
                                </td>

                                <td>
                                    <h4 class="b_font">فی کیلوات</h4>
                                    <br>
                                    <div class="form-group">
                                        <input name="fi_kilowat" value="<?php echo $fetch2["fi_kilowat"];?>"
                                            id="fi_kilowat" type="text" class="form-control" required>
                                    </div>
                                </td>

                                <td>
                                    <h4 class="b_font">پرداخت شده</h4>
                                    <br>
                                    <div class="form-group">
                                        <input name="pardakht_shoda" value="<?php echo $fetch2["pardakht_shoda"];?>"
                                            id="pardakht_shoda" type="text" class="form-control" required>
                                    </div>
                                </td>

                                <td>
                                    <h4 class="b_font">جزئیات</h4>
                                    <br>
                                    <div class="form-group">
                                        <input name="description" value="<?php echo $fetch2["description"];?>"
                                            id="description" row="50" type="text" class="form-control" required></input>
                                    </div>
                                </td>
                                <td>
                                    <h4 class="b_font">تاریخ</h4>
                                    <br>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="datepicker0" name="date_sh"
                                            value="<?php echo $fetch2["date_sh"];?>" required autofocus>
                                    </div>
                                </td>

                            </tr>
                            <input type="text" name="user_id" value="<?php if (isset($_SESSION["user_id"])) {
																			echo $_SESSION["user_id"];
																		}?>" style="display:none" />


                            </tr>
                            <tr>
                                <td colspan="12"><button type="submit" name="btn_update10"
                                        class="btn btn-primary btn-sm-12"
                                        style="width:100%; background-color:#0069D9; font-family:b koodak;">ثبت
                                        تغییرات</button></td>
                            </tr>
                        </form>

                    </table>

                    <button class="btn b_font btn-success" style="font-size:13px;"
                        onclick="window.open('added_dawra_bill_barq.php','_self');">صفحه قبلی</button>
                </div>
            </div>
        </div>











        <?php
        exit();
            }

        ?>

        <?php 
    // part edit karmandan
    if(isset($_GET["id_r_s"])){
    $f_id = $_GET["id_r_s"];
    $sql_query = mysqli_query($connection,"select * from sabt_karmandan where id='$f_id'");
    $fetch1 = mysqli_fetch_assoc($sql_query);
    ?>

        <br><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered table-striped">

                        <?php 
                                if(isset($_POST["btn_update3"])){
                                     $name = $_POST["name"];
                                      $lastname = $_POST["lastname"];
                                      $father_name = $_POST["father_name"];
                                      $work_area = $_POST["work_area"];
                                      $nawyat = $_POST["nawyat"];
                                      $email= $_POST["email"];
                                      $phone = $_POST["phone"];
                                      $home = $_POST["home"];
                                      $salary = $_POST["salary"];
                                      $user_id = $_POST["user_id"];
                                      // image upload
                                      $photo =$_FILES['photo']['name'];
                                      $sourcePath = $_FILES["photo"]["tmp_name"];
                                      $targetPath = "stuff_images/".$_FILES['photo']['name'];
                                      move_uploaded_file($sourcePath,$targetPath);
                                      // id upload
                                      $tazkira =$_FILES['tazkira']['name'];
                                      $sourcePath2 = $_FILES["tazkira"]["tmp_name"];
                                      $targetPath2 = "stuff_id/".$_FILES['tazkira']['name'];
                                      move_uploaded_file($sourcePath2,$targetPath2);
                                      $date_sh = $_POST["date_sh"];
                                      $date_m = date("Y/m/d");
                                    
                                    $sql_query2 = mysqli_query($connection,"update sabt_karmandan set name='$name',lastname='$lastname',father_name='$father_name',work_area='$work_area',nawyat='$nawyat',salary='$salary',email='$email',phone='$phone',home='$home',photo='$photo',tazkira='$tazkira',date_sh='$date_sh' where id='$f_id'");
                                    if($sql_query2){
                                        header("location:registered_stuff.php");
                                    }
                                    else{
                                        echo "<script>alert('Database Error')</script>";
                                    }
                                }
                            ?>
                        <form action="" method="post">
                            <tr>

                                <th class="b_font">نام </th>
                                <th class="b_font">تخلص</th>
                                <th class="b_font">نام پدر</th>
                                <th class="b_font">وظیفه</th>
                                <th class="b_font">نوعیت</th>
                                <th class="b_font">معاش</th>
                                <th class="b_font">ایمیل(اختیاری)</th>
                                <th class="b_font">شماره تماس</th>
                                <th class="b_font">آدرس خانه</th>
                                <th class="b_font">عکس</th>
                                <th class="b_font">تذکره</th>
                                <th class="b_font">تاریخ</th>



                            </tr>
                            <tr>




                                <td class="b_font">
                                    <div class="form-group">
                                        <input name="name" id="name" value="<?php echo $fetch1["name"];?>" type="text"
                                            class="form-control text text-primary" style required>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            value="<?php echo $fetch1["lastname"];?>" name="lastname" id="lastname"
                                            required autofocus>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            value="<?php echo $fetch1["father_name"];?>" name="father_name"
                                            id="father_name" required autofocus>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            value="<?php echo $fetch1["work_area"];?>" name="work_area" id="work_area"
                                            required autofocus>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <select class="form-control b_font" style="height:35px; width:110px;"
                                            value="<?php echo $fetch1["nawyat"];?>" name="nawyat" id="nawyat" required>
                                            <option value="فول تایم">فول تایم</option>
                                            <option value="پارت تایم">پارت تایم</option>
                                            <option value="دیگر">دیگر</option>
                                        </select>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?php echo $fetch1["salary"];?>"
                                            name="salary" id="salary" required autofocus>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="email" class="form-control" value="<?php echo $fetch1["email"];?>"
                                            name="email" id="email" required autofocus>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?php echo $fetch1["phone"];?>"
                                            name="phone" id="phone" required autofocus>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <textarea class="form-control" value="<?php echo $fetch1["home"];?>" name="home"
                                            id="home" required rows="5"></textarea>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <textarea class="form-control" value="<?php echo $fetch1["photo"];?>"
                                            name="photo" id="photo" required rows="5"></textarea>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <textarea class="form-control" value="<?php echo $fetch1["tazkira"];?>"
                                            name="tazkira" id="tazkira" required rows="5"></textarea>
                                    </div>
                                </td>

                                <td style="width:120px;" class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="date_sh" id="date_sh"
                                            value="<?php echo $fetch1["date_sh"];?>" required autofocus>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td colspan="12"><button type="submit" name="btn_update3"
                                        class="btn btn-primary btn-sm-12"
                                        style="width:100%; background-color:#0069D9; font-family:b koodak;">ثبت
                                        تغییرات</button></td>
                            </tr>
                        </form>

                    </table>

                    <button class="btn b_font btn-success" style="font-size:13px;"
                        onclick="window.open('registered_stuff.php','_self');">صفحه قبلی</button>
                </div>
            </div>
        </div>

        <?php
        exit();
            }

        ?>

        <?php 

// part edit expenses
    if(isset($_GET["m_id"])){
        $m_id = $_GET["m_id"];
        $sql_query = mysqli_query($connection,"select * from masarf where m_id='$m_id'");
        $fetch1 = mysqli_fetch_assoc($sql_query);
?>

        <br><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered table-striped">

                        <?php 
                                if(isset($_POST["btn_update5"])){
                                    $name = $_POST["name"];
                                    $type = $_POST["type"];
                                    $user_id = $_SESSION["user_id"];
                                    $description = $_POST["description"];
                                    $quantity = $_POST["quantity"];
                                    $zarib = $_POST["zarib"];
                                  $cost = $_POST["cost"];
                                  $harf = $_POST["harf"];
                                  $total = $quantity * $cost;
                                  $date_sh = $_POST["date_sh"];
                                $date_sh_exp = explode("/",$date_sh);
                                $date_m =  jalali_to_gregorian($date_sh_exp[2],$date_sh_exp[1],$date_sh_exp[0],'/');
                                            
                                    $sql_query2 = mysqli_query($connection,"update masarf set status='edited',after_check='' where m_id='$m_id'");
                                    if($sql_query2){
                                        $sql_query_07 = mysqli_query($connection,"INSERT INTO `masarf_edit` (`m_id`, `name`, `type`, `description`, `quantity`, `zarib`, `cost`, `harf`, `total`, `date_sh`, `date_m`, `user_id`, `edit_row_id`) VALUES
                                         (NULL, '$name', '$type', '$description', '$quantity', '$zarib', '$cost', '$harf', '', '$date_sh', '$date_m', '$user_id', '$m_id')");
                                        header("location:added_expenses.php");
                                    }
                                    else{
                                        echo "<script>alert('Database Error')</script>";
                                    }
                                }
                            ?>
                        <form action="" method="post">
                            <tr>

                                <th class="b_font">نام</th>
                                <th class="b_font">نوعیت</th>
                                <th class="b_font">توضیحات</th>
                                <th class="b_font">تعداد</th>
                                <th class="b_font">ضریب</th>
                                <th class="b_font">قیمت</th>
                                <th class="b_font">به حرف</th>
                                <th class="b_font">تاریخ</th>


                            </tr>
                            <tr>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input name="name" type="text" value="<?php echo $fetch1["name"];?>"
                                            class="form-control" id="name" required>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input name="type" type="text" value="<?php echo $fetch1["type"];?>"
                                            class="form-control" id="type" required>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input name="description" id="description"
                                            value="<?php echo $fetch1["description"];?>" cols="30" rows="4"></input>
                                    </div>
                                </td>

                                <td class="b_font">
                                    <div class="form-group">
                                        <input name="quantity" type="text" value="<?php echo $fetch1["quantity"];?>"
                                            class="form-control" id="quantity" required>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input name="zarib" type="text" value="<?php echo $fetch1["zarib"];?>"
                                            class="form-control" id="zarib" required>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input name="cost" type="text" value="<?php echo $fetch1["cost"];?>"
                                            class="form-control" id="cost" required>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input name="harf" type="text" value="<?php echo $fetch1["harf"];?>"
                                            class="form-control" id="harf" required>
                                    </div>
                                </td>

                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control" style="font-family:arial;"
                                            id="datepicker0" name="date_sh" value="<?php echo $fetch1["date_sh"];?>"
                                            required autofocus>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td colspan="12"><button type="submit" name="btn_update5"
                                        class="btn btn-primary btn-sm-12"
                                        style="width:100%; background-color:#0069D9; font-family:b koodak;">ثبت
                                        تغییرات</button></td>
                            </tr>
                        </form>

                    </table>

                    <button class="btn b_font btn-success" style="font-size:13px;"
                        onclick="window.open('added_expenses.php','_self');">صفحه قبلی</button>
                </div>
            </div>
        </div>

        <?php
        exit();
            }

        ?>
        <?php 
// part edit bardasht ha
    if(isset($_GET["ba_ha"])){
        $ba_id = $_GET["ba_ha"];
        $sql_query = mysqli_query($connection,"select * from bardasht_karmandan where id='$ba_id'");
        $fetch1 = mysqli_fetch_assoc($sql_query);
?>

        <br><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered table-striped">

                        <?php 
                                if(isset($_POST["btn_update6"])){
                                    $stuff_name = $_POST["stuff_name"];
                                    $father_name = $_POST["father_name"];
                                    $amount = $_POST["amount"];
                                    $user_id = $_SESSION["user_id"];
                                    $description = $_POST["description"];
                                    $date_sh = $_POST["date_sh"];
                                    
                                    $date_sh_exp = explode("/",$date_sh);
                                    $date_m =  jalali_to_gregorian($date_sh_exp[2],$date_sh_exp[1],$date_sh_exp[0],'/');
                                   
                                    $sql_query2 = mysqli_query($connection,"update bardasht_karmandan set status='edited',after_check='' where id='$id'");
                                    $id = $_GET["ba_ha"];
                                    $sql_query_03 = mysqli_query($connection,"INSERT INTO `bardasht_karmandan_edit` (`id`, `user_id`, `edit_row_id`, `stuff_name`, `father_name`, `amount`, `description`, `date_sh`, `date_m`)
                                    VALUES (NULL, '$user_id', '$id', '$stuff_name', '$father_name', '$amount', '$description', '$date_sh', '$date_m')");
                                    
                                    if($sql_query_03){
                                        header("location:bardasht_ha.php");
                                    }
                                    else{
                                        echo "<script>alert('Database Error')</script>";
                                    }
                                }
                            ?>
                        <form action="" method="post">
                            <tr>

                                <th class="b_font">نام</th>
                                <th class="b_font">نام پدر</th>
                                <th class="b_font">مقدار برداشت</th>

                                <th class="b_font">جزئیات</th>
                                <th class="b_font">تاریخ</th>


                            </tr>
                            <tr>

                                <td class="b_font">
                                    <div class="form-group">
                                        <select name="stuff_name" style="height:40px; font-size:16px;" id="stuff_name"
                                            onchange="setmash()" value="<?php echo $fetch1["stuff_name"];?>"
                                            class="form-control b_font">
                                            <?php
																										$sql_query_06 = mysqli_query($connection,
																										"select name from sabt_karmandan");
																										while ($fetch_06 = mysqli_fetch_assoc($sql_query_06)) {
																										?>
                                            <option value="<?php echo $fetch_06["name"]; ?>">
                                                <?php echo $fetch_06["name"]; ?></option>
                                            <?php
																										}
																									 ?>
                                        </select>
                                    </div>
                                </td>

                                <td class="b_font">
                                    <div class="form-group">
                                        <input class="form-control" value="<?php echo $fetch1["father_name"];?>"
                                            name="father_name" id="father_name" required></input>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input class="form-control" value="<?php echo $fetch1["amount"];?>"
                                            name="amount" id="amount" required></input>
                                    </div>
                                </td>

                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            value="<?php echo $fetch1["description"];?>" name="description"
                                            id="description" required autofocus>
                                    </div>
                                </td>
                                <td style="width:120px;" class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="date_sh" id="date_sh"
                                            value="<?php echo $fetch1["date_sh"];?>" required autofocus>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="12"><button type="submit" name="btn_update6"
                                        class="btn btn-primary btn-sm-12"
                                        style="width:100%; background-color:#0069D9; font-family:b koodak;">ثبت
                                        تغییرات</button></td>
                            </tr>
                        </form>

                    </table>

                    <button class="btn b_font btn-success" style="font-size:13px;"
                        onclick="window.open('bardasht_ha.php','_self');">صفحه قبلی</button>
                </div>
            </div>
        </div>

        <?php
        exit();
            }

        ?>

        <?php 
// part edit salary 
    if(isset($_GET["pa_id"])){
        $id = $_GET["pa_id"];
        $sql_query = mysqli_query($connection,"select * from pardakht_mash where id='$id'");
        $fetch1 = mysqli_fetch_assoc($sql_query);
?>

        <br><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered table-striped">

                        <?php 
                                if(isset($_POST["btn_update7"])){
                                   $name = $_POST["name"];
                                   $father_name = $_POST["father_name"];
                                              $salary = $_POST["salary"];
                                              $user_id = $_SESSION["user_id"];
                                              $bardasht = $_POST["bardasht"];
                                              $total = $salary - $bardasht;
                                              $paid = $_POST["paid"];
                                              $description = $_POST["description"];
                                              $date_sh = $_POST["date_sh"];
                                              $date_sh_exp = explode("/",$date_sh);
                                              $date_m =  jalali_to_gregorian($date_sh_exp[2],$date_sh_exp[1],$date_sh_exp[0],'/');
                                   
                                    $sql_query2 = mysqli_query($connection,"update pardakht_mash set status='edited',after_check='' where id='$id'");
                                    $id = $_GET["pa_id"];
                                    $sql_query_03 = mysqli_query($connection,"INSERT INTO `pardakht_mash_edit` (`id`, `user_id`, `edit_row_id`, `name`, `father_name`, `salary`, `bardasht`, `total`, `paid`, `description`, `date_sh`, `date_m`)
                                     VALUES (NULL, '$user_id', '$id', '$name', '$father_name', '$salary', '$bardasht', '$total', '$paid', '$description', '$date_sh', '$date_m')");
                                    
                                    if($sql_query_03){
                                        header("location:mash_pardakht_shoda.php");
                                    }
                                    else{
                                        echo "<script>alert('Database Error')</script>";
                                    }
                                }
                            ?>
                        <form action="" method="post">
                            <tr>

                                <th class="b_font">نام</th>
                                <th class="b_font">نام پدر</th>
                                <th class="b_font">معاش</th>
                                <th class="b_font">برداشت</th>


                                <th class="b_font">پرداخت </th>
                                <th class="b_font">توضیحات</th>
                                <th class="b_font">تاریخ</th>


                            </tr>
                            <tr>

                                <td class="b_font">
                                    <div class="form-group">
                                        <select name="name" style="height:40px; font-size:16px;" id="name"
                                            onchange="setmash()" class="form-control b_font">
                                            <?php
																										$sql_query_06 = mysqli_query($connection,
																										"select name from sabt_karmandan");
																										while ($fetch_06 = mysqli_fetch_assoc($sql_query_06)) {
																										?>
                                            <option value="<?php echo $fetch_06["name"]; ?>">
                                                <?php echo $fetch_06["name"]; ?></option>
                                            <?php
																										}
																									 ?>
                                        </select>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            value="<?php echo $fetch1["father_name"];?>" name="father_name"
                                            id="father_name" required autofocus>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?php echo $fetch1["salary"];?>"
                                            name="salary" id="salary" required autofocus>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            value="<?php echo $fetch1["bardasht"];?>" name="bardasht" id="bardasht"
                                            required autofocus>
                                    </div>
                                </td>

                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="checkbox" class="form-control"
                                            value="<?php echo $fetch1["paid"];?>" name="paid" id="paid" required
                                            autofocus>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            value="<?php echo $fetch1["description"];?>" name="description"
                                            id="description" required autofocus>
                                    </div>
                                </td>
                                <td style="width:120px;" class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="date_sh" id="date_sh"
                                            value="<?php echo $fetch1["date_sh"];?>" required autofocus>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td colspan="12"><button type="submit" name="btn_update7"
                                        class="btn btn-primary btn-sm-12"
                                        style="width:100%; background-color:#0069D9; font-family:b koodak;">ثبت
                                        تغییرات</button></td>
                            </tr>
                        </form>

                    </table>

                    <button class="btn b_font btn-success" style="font-size:13px;"
                        onclick="window.open('mash_pardakht_shoda.php','_self');">صفحه قبلی</button>
                </div>
            </div>
        </div>

        <?php
        exit();
            }

        ?>


        <?php 
// part edit dokan registeration 
    if(isset($_GET["sho_id"])){
        $dokan_id = $_GET["sho_id"];
        $sql_query = mysqli_query($connection,"select * from reg_dokan where id='$dokan_id'");
        $fetch1 = mysqli_fetch_assoc($sql_query);
?>

        <br><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered table-striped">

                        <?php 
                                if(isset($_POST["btn_update38"])){
                                    $user_id = $_SESSION["user_id"];
                                   
                                   $dokan_number = $_POST["dokan_number"];
                                   $marbot = $_POST["marbot"];
                                   $father_name = $_POST["father_name"];
                                   $grandfather = $_POST["grandfather"];
                                   $tazkira = $_POST["tazkira"];
                                   $phone = $_POST["phone"];
                                   $description = $_POST["description"];
                                  
                                   $date_sh = $_POST["date_sh"];
                                   
                                   $date_sh_exp = explode("/",$date_sh);
                                    $date_m =  jalali_to_gregorian($date_sh_exp[2],$date_sh_exp[1],$date_sh_exp[0],'/');
                                   $id = $_GET["sho_id"];
                                   
                                    $sql_query2 = mysqli_query($connection,"update reg_dokan set status='edited',after_check='' where id='$id'");
                                    
                                    $sql_query_03 = mysqli_query($connection,"INSERT INTO `reg_dokan_edit` (`id`, `user_id`, `edit_row_id`, `dokan_number`, `marbot`, `father_name`, `grandfather`, `tazkira`, `phone`, `description`, `date_sh`, `date_m`) VALUES 
                                    (NULL, '$user_id', '$id', '$dokan_number', '$marbot', '$father_name', '$grandfather', '$tazkira', '$phone', '$description', '$date_sh', '$date_m')");

                                    if($sql_query2){
                                        header("location:registered_shops.php");
                                    }
                                    else{
                                        echo "<script>alert('Database Error')</script>";
                                    }
                                }
                            ?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <tr>

                                <th class="b_font">نمبر دکان </th>
                                <th class="b_font">نام</th>
                                <th class="b_font">نام پدر</th>
                                <th class="b_font">ولدیت</th>
                                <th class="b_font">مشخصات تذکره</th>
                                <th class="b_font">شماره تماس</th>
                                <th class="b_font">توضیحات</th>

                                <th class="b_font">تاریخ تسلیمی</th>
                            </tr>
                            <tr>

                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            value="<?php echo $fetch1["dokan_number"];?>" name="dokan_number"
                                            id="dokan_number" required autofocus>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <select name="name" style="height:40px; font-size:16px;" id="name"
                                            onchange="setmash()" class="form-control b_font">
                                            <?php
                                            $sql_query_06 = mysqli_query($connection,
                                            "select name from sabt_karmandan");
                                            while ($fetch_06 = mysqli_fetch_assoc($sql_query_06)) {
                                            ?>
                                            <option value="<?php echo $fetch_06["name"]; ?>">
                                                <?php echo $fetch_06["name"]; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            value="<?php echo $fetch1["father_name"];?>" name="father_name"
                                            id="father_name" required autofocus>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            value="<?php echo $fetch1["grandfather"];?>" name="grandfather"
                                            id="grandfather" required autofocus>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?php echo $fetch1["tazkira"];?>"
                                            name="tazkira" id="tazkira" required autofocus>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?php echo $fetch1["phone"];?>"
                                            name="phone" id="phone" required autofocus>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            value="<?php echo $fetch1["description"];?>" name="description"
                                            id="description" required autofocus>
                                    </div>
                                </td>

                                <td style="width:120px;" class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="date_sh" id="date_sh"
                                            value="<?php echo $fetch1["date_sh"];?>" required autofocus>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td colspan="12"><button type="submit" name="btn_update38"
                                        class="btn btn-primary btn-sm-12"
                                        style="width:100%; background-color:#0069D9; font-family:b koodak;">ثبت
                                        تغییرات</button></td>
                            </tr>
                        </form>

                    </table>

                    <button class="btn b_font btn-success" style="font-size:13px;"
                        onclick="window.open('registered_shops.php','_self');">صفحه قبلی</button>
                </div>
            </div>
        </div>

        <?php
        exit();
            }

        ?>


        <?php 
// part edit loan 
    if(isset($_GET["q_id"])){
        $q_id = $_GET["q_id"];
        $sql_query = mysqli_query($connection,"select * from qarza where q_id='$q_id'");
        $fetch1 = mysqli_fetch_assoc($sql_query);
?>

        <br><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered table-striped">

                        <?php 
                                if(isset($_POST["btn_update8"])){
                                 
                                                  $name = $_POST["name"];
                                                  $description = $_POST["description"];
                                                  $job = $_POST["job"];
                                                  $amount = $_POST["amount"];
                                                  $qist = $_POST["qist"];
                                                  $org_name = $_POST["org_name"];
                                                  $qarza_type = $_POST["qarza_type"];
                                                  $monthly_payment = $_POST["monthly_payment"];
                                                  $user_id = $_SESSION["user_id"];
                                                  
                                                  $date_sh = $_POST["date_sh"];
                                                  $date_sh_exp = explode("/",$date_sh);
                                                  $date_m =  jalali_to_gregorian($date_sh_exp[2],$date_sh_exp[1],$date_sh_exp[0],'/');
                                                   $id = $_GET["q_id"];
                                                $sql_query2 = mysqli_query($connection,"update qarza set status='edited',after_check='' where q_id='$id'");
                                                   
                                                    $sql_query_03 = mysqli_query($connection,"INSERT INTO `qarza_edit` (`q_id`, `name`, `description`, `job`, `amount`, `qist`, `org_name`, `qarza_type`, `monthly_payment`, `user_id`, `date_sh`, `date_m`,`edit_row_id`)
                                                     VALUES (NULL, '$name', '$description', '$job', '$amount', '$qist', '$org_name', '$qarza_type', '$monthly_payment', '$user_id', '$date_sh', '$date_m','$id')");
                                    
                                                if($sql_query_03){
                                                    header("location:registered_loan.php");
                                                }
                                                else{
                                                    echo "<script>alert('Database Error')</script>";
                                                }
                                }
                            ?>
                        <form action="" method="post">
                            <tr>

                                <th class="b_font">نام </th>
                                <th class="b_font">توضیحات</th>
                                <th class="b_font">وظیفه</th>

                                <th class="b_font">مقدار</th>

                                <th class="b_font">قسط</th>
                                <th class="b_font">نام سازمان</th>
                                <th class="b_font">نوعیت</th>
                                <th class="b_font">پرداخت ماهانه</th>
                                <th class="b_font">تاریخ</th>


                            </tr>
                            <tr>

                                <td class="b_font">
                                    <div class="form-group">
                                        <input name="name" id="name" value="<?php echo $fetch1["name"];?>" type="text"
                                            class="form-control" required>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input name="description" id="description"
                                            value="<?php echo $fetch1["description"];?>" type="text"
                                            class="form-control" required>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input name="job" id="job" value="<?php echo $fetch1["job"];?>" type="text"
                                            class="form-control" required>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input name="amount" id="amount" value="<?php echo $fetch1["amount"];?>"
                                            type="text" class="form-control" required>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="<?php echo $fetch1["qist"];?>"
                                            name="qist" id="qist" required autofocus>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            value="<?php echo $fetch1["org_name"];?>" name="org_name" id="org_name"
                                            required autofocus>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            value="<?php echo $fetch1["qarza_type"];?>" name="qarza_type"
                                            id="qarza_type" required></input>
                                    </div>
                                </td>
                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            value="<?php echo $fetch1["monthly_payment"];?>" name="monthly_payment"
                                            id="monthly_payment" required></input>
                                    </div>
                                </td>

                                <td class="b_font">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="date_sh" id="date_sh"
                                            value="<?php echo $fetch1["date_sh"];?>" required autofocus>
                                    </div>
                                </td>


                            </tr>
                            <tr>
                                <td colspan="12"><button type="submit" name="btn_update8"
                                        class="btn btn-primary btn-sm-12"
                                        style="width:100%; background-color:#0069D9; font-family:b koodak;">ثبت
                                        تغییرات</button></td>
                            </tr>
                        </form>

                    </table>

                    <button class="btn b_font btn-success" style="font-size:13px;"
                        onclick="window.open('registered_loan.php','_self');">صفحه قبلی</button>
                </div>
            </div>
        </div>

        <?php
        exit();
            }

        ?>

        <?php 
// part edit user accounts 
    if(isset($_GET["cr_id"])){
        $id = $_GET["cr_id"];
        $sql_query = mysqli_query($connection,"select * from user_account where id='$id'");
        $fetch1 = mysqli_fetch_assoc($sql_query);
?>

        <br><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered table-striped">

                        <?php 
                                if(isset($_POST["btn_update30"])){
                                    $name = $_POST["name"];
                                    $lastname = $_POST["lastname"];
                                    $username = $_POST["username"];
                                    $password = $_POST["password"];
                                    $secret_code = $_POST["secret_code"];
                                    $authority = $_POST["authority"];
                                    $user_id = $_SESSION["user_id"];
                                    // $image_upload=$_FILES['image_upload']['name'];
                                    // $sourcePath = $_FILES["image_upload"]["tmp_name"];
                                    // $targetPath = "user_images/".$_FILES['image_upload']['name'];
                                    // move_uploaded_file($sourcePath,$targetPath);
                                    $date_sh = $_POST["date_sh"];
                                    $date_m = date("Y/m/d");
                                             
                                    $sql_query2 = mysqli_query($connection,"update user_account set name='$name',lastname='$lastname',username='$username',password='$password',secret_code='$secret_code'
                                    ,authority='$authority',user_id='$user_id',date_sh='$date_sh' where id='$id'");
                                    if($sql_query2){
                                        header("location:created_account.php");
                                    }
                                    else{
                                        echo "<script>alert('Database Error')</script>";
                                    }
                                }
                            ?>
                        <form action="" method="post">
                            <tr>

                                <th class="b_font">نام </th>
                                <th class="b_font">تخلص</th>
                                <th class="b_font">نام کاربر (به انگیسی )</th>
                                <th class="b_font">پسورد کاربر (به انگلیسی)</th>
                                <th class="b_font">کود مخفی ( به انگلیسی )</th>
                                <th class="b_font">صلاحیت </th>

                                <th class="b_font">تاریخ</th>


                            </tr>
                            <tr>

                                <td>
                                    <div class="form-group">
                                        <input name="name" id="name" value="<?php echo $fetch1["name"];?>" type="text"
                                            class="form-control" required>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input name="lastname" id="lastname" value="<?php echo $fetch1["lastname"];?>"
                                            type="text" class="form-control" required>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input name="username" id="username" value="<?php echo $fetch1["username"];?>"
                                            type="text" class="form-control" required>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input name="password" id="password" value="<?php echo $fetch1["password"];?>"
                                            type="text" class="form-control" required>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input name="secret_code" id="secret_code"
                                            value="<?php echo $fetch1["secret_code"];?>" type="text"
                                            class="form-control" required>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            value="<?php echo $fetch1["authority"];?>" name="authority" id="authority"
                                            required autofocus />
                                    </div>
                                </td>

                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="date_sh" id="date_sh"
                                            value="<?php echo $fetch1["date_sh"];?>" required autofocus>
                                    </div>
                                </td>

                            </tr>


                            <tr>
                                <td colspan="12"><button type="submit" name="btn_update30"
                                        class="btn btn-primary btn-sm-12"
                                        style="width:100%; background-color:#0069D9; font-family:b koodak;">ثبت
                                        تغییرات</button></td>
                            </tr>
                        </form>

                    </table>

                    <button class="btn b_font btn-success" style="font-size:13px;"
                        onclick="window.open('created_account.php','_self');">صفحه قبلی</button>
                </div>
            </div>
        </div>

        <?php
        exit();
            }

        ?>


    </body>

</html>