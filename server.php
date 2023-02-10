<?php
  include_once("database.php");
  include_once("jdf.php");
  
  // set gozashta to bill barq
   if(isset($_GET["dawra_dokan_number"])){
    $dawra_dokan_number = $_GET["dawra_dokan_number"];
    $sql_query_09 = mysqli_query($connection,"select max(id) as maxID from bill_barq  where dokan_number='$dawra_dokan_number'");
    $fetch_09 = mysqli_fetch_assoc($sql_query_09);
    $db_id = $fetch_09["maxID"];

    $sql_query_10 = mysqli_query($connection,"select halia from bill_barq where id='$db_id'");
    $fetch_10 = mysqli_fetch_assoc($sql_query_10);
    if($sql_query_09){
      echo $fetch_10["halia"];
    }
    exit();
  }

   // set pardakht_mash
   if(isset($_GET["staff_name_salary"])){
    $staff_name_salary = $_GET["staff_name_salary"];

    $start_month_sh = jdate("1/m/Y","","","Asia/kabul","en");;
    $date_sh_exp = explode("/",$start_month_sh);
    $start_month_m =  jalali_to_gregorian($date_sh_exp[2],$date_sh_exp[1],$date_sh_exp[0],'/');
    // end month
    $end_month_sh = jdate("30/m/Y","","","Asia/kabul","en");;
    $date_sh_exp = explode("/",$end_month_sh);
    $end_month_m =  jalali_to_gregorian($date_sh_exp[2],$date_sh_exp[1],$date_sh_exp[0],'/');
    
    $sql_query_09 = mysqli_query($connection,"select sum(amount) as total_amount from bardasht_karmandan where date_m between '$start_month_m' and '$end_month_m' and stuff_name='$staff_name_salary'");
    $fetch_09 = mysqli_fetch_assoc($sql_query_09);
    
    $sql_query_10 = mysqli_query($connection,"select salary,father_name from sabt_karmandan where name='$staff_name_salary'");
    $fetch_10 = mysqli_fetch_assoc($sql_query_10);
    if($sql_query_09){
      echo $fetch_10["father_name"].",".$fetch_10["salary"].",".$fetch_09["total_amount"];
    }
    exit();
  }
  

  if(isset($_GET["chat_row_id"])){
    $row_id = $_GET["chat_row_id"];
    $sql_query_09 = mysqli_query($connection,"update comment set status='read' where id='$row_id'");
    if($sql_query_09){
      echo "success";
    }
  }

  // count unread chat
  if(isset($_GET["count_chat_unread_row"])){
    $row_id = $_GET["count_chat_unread_row"];
        $sql_query_01 = mysqli_query($connection,"select count(id) as unread_message from comment where status != 'read'");
        $fetch_01 = mysqli_fetch_assoc($sql_query_01);
        echo $fetch_01['unread_message'];
  }

  if(isset($_GET["chat_row_id_delete_message"])){
    $row_id = $_GET["chat_row_id_delete_message"];
    $sql_query_09 = mysqli_query($connection,"delete from comment  where id='$row_id'");
    if($sql_query_09){
      echo "success";
    }
  }
   // uploading staff registeration Form Data to database
  if (isset($_POST["name"])) {
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $fathername = $_POST["fathername"];
    $work_area = $_POST["work_area"];
    $work_type = $_POST["work_type"];
    $email= $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $home_address = $_POST["home_address"];
    $salary = $_POST["salary"];
    $user_id = $_POST["user_id"];
    // image upload
    $image_upload =$_FILES['image_upload']['name'];
    $sourcePath = $_FILES["image_upload"]["tmp_name"];
    $targetPath = "stuff_images/".$_FILES['image_upload']['name'];
    move_uploaded_file($sourcePath,$targetPath);
    // id upload
    $id_upload =$_FILES['id_upload']['name'];
    $sourcePath2 = $_FILES["id_upload"]["tmp_name"];
    $targetPath2 = "stuff_id/".$_FILES['id_upload']['name'];
    move_uploaded_file($sourcePath2,$targetPath2);
    $date_s = $_POST["date_s"];
    $date_m = date("Y/m/d");
    $sql_query_02 = mysqli_query($connection,
    "INSERT INTO `sab_karmandan` (`id`, `user_idd`, `name_s`, `lastname_s`, `father_name`, `work_area`, `work_type`, `salary`, `Email`, `ph_number`, `home_address`, `tazkira`, `image`, `date_sh`, `date_m`) VALUES
     (NULL, '$user_id', '$name', '$lastname', '$fathername',
        '$work_area', '$work_type', '$salary', '$email', '$phone_number', '$home_address','$id_upload', '$image_upload', '$date_s', '$date_m')");
    if ($sql_query_02) {
      echo "success";
    }
    else {
      echo "failed";
    }
    exit();
  }
 
  
  // part afzodan nawyat masarf
  if (isset($_POST["afzodan_nawyat2"])) {
    $afzodan_nawyat2 = $_POST["afzodan_nawyat2"];
    $sql_query_03 = mysqli_query($connection,"INSERT INTO `nawyat_masarf` (`id`, `name`)
     VALUES (NULL, '$afzodan_nawyat2')");
     if ($afzodan_nawyat2) {
       echo "success";
     }
     else{
       echo "failed";
     }
     exit();
  }
  // part insert bardasht
  if (isset($_POST["stuff_name"])) {
    $stuff_name = $_POST["stuff_name"];
    $bardasht = $_POST["bardasht"];
    $description = $_POST["description"];
    $date_s = $_POST["date_s"];
    $date_m = date("Y/m/d");
    $sql_query_08 = mysqli_query($connection,"
    INSERT INTO `bardasht_karmandan` (`id`, `stuff_name`, `amount`, `description`, `date_sh`, `date_m`) VALUES
     (NULL, '$stuff_name', '$bardasht', '$description', '$date_s', '$date_m'))");
     if ($sql_query_08) {
       echo "success";
     }
     else{
       echo "failed";
     }
     exit();
  }
  if (isset($_GET["req"])) {
    $sql_query_04 = mysqli_query($connection,"select name from nawyat_masarf");
    $option = "";
    while ($fetch = mysqli_fetch_assoc($sql_query_04)) {
      $option .="<option value='".$fetch["name"]."'>".$fetch["name"]."</option>";
    }
    echo $option;
    exit();
  }
  // part insert user account
  if (isset($_POST["name_u"])) {
    $name_u = $_POST["name_u"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $secret_code = $_POST["secret_code"];
    $authority = $_POST["authority"];
    $user_id = $_POST["user_id"];
    $image_upload=$_FILES['image_upload']['name'];
    $sourcePath = $_FILES["image_upload"]["tmp_name"];
    $targetPath = "user_images/".$_FILES['image_upload']['name'];
    move_uploaded_file($sourcePath,$targetPath);
    $date_sh = $_POST["date_sh"];
    $date_m = date("Y/m/d");
    $sql_query_05 = mysqli_query($connection,"INSERT INTO `user_account` (`id`, `name`, `lastname`, `username`, `password`, `secret_code`, `authority`, `photo`, `date_sh`, `date_m`)
     VALUES (NULL, '$name_u', '$lastname', '$username', '$password', '$secret_code', '$authority', '$image_upload', '$date_sh', '$date_m')");
    if ($sql_query_05) {
      echo "success";
    }
    else {
      echo "failed";
    }
    exit();
  }
  // part insert loan
  if (isset($_POST["name_l"])) {
    $name_l = $_POST["name_l"];
    $father_name = $_POST["father_name"];
    $job = $_POST["job"];
    $amount = $_POST["amount"];
    $qist = $_POST["qist"];
    $tawzihat = $_POST["tawzihat"];
    $user_id = $_POST["user_id"];
    $file_upload=$_FILES['file_upload']['name'];
    $sourcePath = $_FILES["file_upload"]["tmp_name"];
    $targetPath = "loan_documents/".$_FILES['file_upload']['name'];
    move_uploaded_file($sourcePath,$targetPath);
    $date_s = $_POST["date_s"];
    $date_m = date("Y/m/d");
    $sql_query_05 = mysqli_query($connection,
    "INSERT INTO `loan` (`id`, `user_id`, `name`,
       `father_name`, `job`, `amount`, `qist`, `description`, `document`, `date_sh`, `date_m`) VALUES
     (NULL, '$user_id' , '$name_l', '$father_name', '$job'
       , '$amount', '$qist', '$tawzihat', '$file_upload', '$date_s', '$date_m')");
    if ($sql_query_05) {
      echo "success";
    }
    else {
      echo "failed";
    }
    exit();
  }
  // part insert loan_qist
  if (isset($_POST["name_l2"])) {
    $name_l = $_POST["name_l2"];
    $father_name = $_POST["father_name"];
    $job = $_POST["job"];
    $amount = $_POST["amount"];
    $qist = $_POST["qist"];
    $tawzihat = $_POST["tawzihat"];
    $user_id = $_POST["user_id"];
    $file_upload=$_FILES['file_upload']['name'];
    $sourcePath = $_FILES["file_upload"]["tmp_name"];
    $targetPath = "loan_documents/".$_FILES['file_upload']['name'];
    move_uploaded_file($sourcePath,$targetPath);
    $date_s = $_POST["date_s"];
    $date_m = date("Y/m/d");
    $sql_query_05 = mysqli_query($connection,
    "INSERT INTO `loan` (`id`, `user_id`, `name`,
       `father_name`, `job`, `amount`, `qist`, `description`, `document`, `date_sh`, `date_m`) VALUES
     (NULL, '$user_id' , '$name_l', '$father_name', '$job'
       , '$amount', '$qist', '$tawzihat', '$file_upload', '$date_s', '$date_m')");
    if ($sql_query_05) {
      echo "success";
    }
    else {
      echo "failed";
    }
    exit();
  }
  if (isset($_GET["s_n"])) {
    $stuff_name = $_GET["s_n"];
    $sql_query_07 = mysqli_query($connection,
    "select salary from sab_karmandan where name_s='$stuff_name'");
    $fetch_07 = mysqli_fetch_assoc($sql_query_07);
    if ($fetch_07) {
      echo $fetch_07["salary"];
    }
    exit();
  }

?>