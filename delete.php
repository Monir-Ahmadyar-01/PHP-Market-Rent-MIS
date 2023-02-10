<?php
  include_once("database.php");
  include_once("redirect.php");
  // part delete dokan
  if (isset($_GET["sho_id"])) {
    $id = $_GET["sho_id"];
    $sql_query_01 = mysqli_query($connection,"delete from reg_dokan where id='$id'");
    if ($sql_query_01) {
      header("location:registered_shops.php");
    }
    else {
      header("location:registered_shops.php");
    }
    exit();
  }
   // part delete kera_perdakht_shoda
  if (isset($_GET["ke_id"])) {
    $id = $_GET["ke_id"];
    $sql_query_02 = mysqli_query($connection,"delete from kerah_dokan where id='$id'");
    if ($sql_query_02) {
      header("location:kera_pardakht_shoda.php");
    }
    else {
      header("location:kera_pardakht_shoda.php");
    }
    exit();
  }
  // part delete masarf
  if (isset($_GET["id_exp"])) {
    $id = $_GET["id_exp"];
    $sql_query_02 = mysqli_query($connection,"delete from masarf where m_id='$id'");
    if ($sql_query_02) {
      header("location:added_expenses.php");
    }
    else {
      header("location:added_expenses.php");
    }
    exit();
  }
  // part delete comment
  if (isset($_GET["in_id"])) {
    $id = $_GET["in_id"];
    $sql_query_02 = mysqli_query($connection,"delete from comment where id='$id'");
    if ($sql_query_02) {
      header("location:inbox.php");
    }
    else {
      header("location:inbox.php");
    }
    exit();
  }
  // part delete registered_stuff
  if (isset($_GET["id_r_s"])) {
    $id = $_GET["id_r_s"];
    $sql_query_03 = mysqli_query($connection,"delete from sabt_karmandan where id='$id'");
    if ($sql_query_03) {
      header("location:registered_stuff.php");
    }
    else {
      header("location:registered_stuff.php");
    }
    exit();
  }
  // part delete added expenses
  if (isset($_GET["m_id"])) {
    $id = $_GET["m_id"];
    $sql_query_04 = mysqli_query($connection,"delete from masarf where m_id='$id'");
    if ($sql_query_04) {
      header("location:added_expenses.php");
    }
    else {
      header("location:added_expenses.php");
    }
    exit();
  }
    // part delete added loan
  if (isset($_GET["q_id"])) {
    $id = $_GET["q_id"];
    $sql_query_06 = mysqli_query($connection,"delete from qarza where q_id='$id'");
    if ($sql_query_06) {
      header("location:registered_loan.php");
    }
    else {
      header("location:registered_loan.php");
    }
    exit();
  }
    // part delete from bardasht karmandan
    if (isset($_GET["ba_ha"])) {
      $id = $_GET["ba_ha"];
      $sql_query_099 = mysqli_query($connection,"delete from bardasht_karmandan where id='$id'");
      if ($sql_query_099) {
        header("location:bardasht_ha.php");
      }
      else {
        header("location:bardasht_ha.php");
      }
      exit();
    }
    // part delete bill barq
  if (isset($_GET["bill_id"])) {
    $id = $_GET["bill_id"];
    $sql_query_07 = mysqli_query($connection,"delete from bill_barq where id='$id'");
    if ($sql_query_07) {
      header("location:added_dawra_bill_barq.php");
    }
    else {
      header("location:added_dawra_bill_barq.php");
    }
    exit();
  }
   // part delete mashat
  if (isset($_GET["pa_id"])) {
    $id = $_GET["pa_id"];
    $sql_query_07 = mysqli_query($connection,"delete from pardakht_mash where id='$id'");
    if ($sql_query_07) {
      header("location:mash_pardakht_shoda.php");
    }
    else {
      header("location:mash_pardakht_shoda.php");
    }
    exit();
  }
  // part delete create_account
  if (isset($_GET["id_c_a"])) {
    $id = $_GET["id_c_a"];
    $sql_query_05 = mysqli_query($connection,"delete from user_account where id='$id'");
    if ($sql_query_05) {
      header("location:created_account.php");
    }
    else {
      header("location:created_account.php");
    }
    exit();
  }
 ?>