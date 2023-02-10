<?php 
    include("database.php");
    include_once("redirect.php");
    // kerah dokan 
    if(isset($_GET["ke_accept_id"])){
        $id = $_GET["ke_accept_id"];
        $sql_command_01 = mysqli_query($connection,"select * from kerah_dokan_edit where id='$id'");
        $fetch_01 = mysqli_fetch_assoc($sql_command_01);
        $kerah_edited = array($fetch_01["edit_row_id"],$fetch_01["par_name"],$fetch_01["father_name"],$fetch_01["dokan_number"],$fetch_01["payer"],$fetch_01["majmo_meqdar"],$fetch_01["meqdar_perdakhty"],$fetch_01["date_sh"],$fetch_01["date_m"]);
        // echo $kerah_edited[1];
        $sql_command_02 = mysqli_query($connection,
        "update kerah_dokan set par_name='$kerah_edited[1]',father_name='$kerah_edited[2]',dokan_number='$kerah_edited[3]',payer='$kerah_edited[4]',majmo_meqdar='$kerah_edited[5]',meqdar_perdakhty='$kerah_edited[6]',date_sh='$kerah_edited[7]',date_m='$kerah_edited[8]',after_check='accept' where id='$kerah_edited[0]'");
        if($sql_command_02){
            $sql_command_03 = mysqli_query($connection,"delete from kerah_dokan_edit where edit_row_id='$kerah_edited[0]'");
            header("location:edited_check.php");   
        }
        else{
            header("location:edited_check.php");  
        }
     exit();   
    }
    if(isset($_GET["ke_delete_id"])){
        $id = $_GET["ke_delete_id"];
        $sql_command_04 = mysqli_query($connection,"delete from kerah_dokan_edit where id='$id'");
        
        if($sql_command_04){
            header("location:edited_check.php");   
        }
        else{
            header("location:edited_check.php");  
        }
        exit();
    }

    // masarf

    if(isset($_GET["mas_accept_id"])){
        $id = $_GET["mas_accept_id"];
        $sql_command_01 = mysqli_query($connection,"select * from masarf_edit where m_id='$id'");
        $fetch_01 = mysqli_fetch_assoc($sql_command_01);
        $masarf_edited = array($fetch_01["edit_row_id"],$fetch_01["name"],$fetch_01["type"],$fetch_01["description"],$fetch_01["quantity"],$fetch_01["zarib"],$fetch_01["cost"],$fetch_01["harf"],$fetch_01["date_sh"],$fetch_01["date_m"]);
        // echo $kerah_edited[1];
        $sql_command_03 = mysqli_query($connection,
        "update masarf set name='$masarf_edited[1]',type='$masarf_edited[2]',description='$masarf_edited[3]',quantity='$masarf_edited[4]',zarib='$masarf_edited[5]',cost='$masarf_edited[6]',harf='$masarf_edited[7]',date_sh='$masarf_edited[8]',date_m='$masarf_edited[9]',after_check='accept' where m_id='$masarf_edited[0]'");
        if($sql_command_03){
            $sql_command_04 = mysqli_query($connection,"delete from masarf_edit where edit_row_id='$masarf_edited[0]'");
            header("location:edited_check.php");   
        }
        else{
            header("location:edited_check.php");  
        }
     exit();   
    }
    if(isset($_GET["mas_delete_id"])){
        $id = $_GET["mas_delete_id"];
        $sql_command_04 = mysqli_query($connection,"delete from masarf_edit where m_id='$id'");
        
        if($sql_command_04){
            header("location:edited_check.php");   
        }
        else{
            header("location:edited_check.php");  
        }
        exit();
    }
    
    // معاشات

    if(isset($_GET["mash_accept_id"])){
        $id = $_GET["mash_accept_id"];
        $sql_command_01 = mysqli_query($connection,"select * from pardakht_mash_edit where id='$id'");
        $fetch_01 = mysqli_fetch_assoc($sql_command_01);
        $mash_edited = array($fetch_01["edit_row_id"],$fetch_01["name"],$fetch_01["father_name"],$fetch_01["salary"],$fetch_01["bardasht"],$fetch_01["description"],$fetch_01["date_sh"],$fetch_01["date_m"]);
        // echo $kerah_edited[1];
        $sql_command_03 = mysqli_query($connection,
        "update pardakht_mash set name='$mash_edited[1]',father_name='$mash_edited[2]',salary='$mash_edited[3]',bardasht='$mash_edited[4]',description='$mash_edited[5]',date_sh='$mash_edited[6]',date_m='$mash_edited[7]',after_check='accept' where id='$mash_edited[0]'");
        if($sql_command_03){
            $sql_command_04 = mysqli_query($connection,"delete from pardakht_mash_edit where edit_row_id='$mash_edited[0]'");
            header("location:edited_check.php");   
        }
        else{
            header("location:edited_check.php");  
        }
     exit();   
    }
    if(isset($_GET["mash_delete_id"])){
        $id = $_GET["mash_delete_id"];
        $sql_command_04 = mysqli_query($connection,"delete from pardakht_mash_edit where id='$id'");
        
        if($sql_command_04){
            header("location:edited_check.php");   
        }
        else{
            header("location:edited_check.php");  
        }
        exit();
    }
    
       // برداشت ها

    if(isset($_GET["bardasht_accept_id"])){
        $id = $_GET["bardasht_accept_id"];
        $sql_command_01 = mysqli_query($connection,"select * from bardasht_karmandan_edit where id='$id'");
        $fetch_01 = mysqli_fetch_assoc($sql_command_01);
        $bardasht_edited = array($fetch_01["edit_row_id"],$fetch_01["stuff_name"],$fetch_01["father_name"],$fetch_01["amount"],$fetch_01["description"],$fetch_01["date_sh"],$fetch_01["date_m"]);
        // echo $kerah_edited[1];
        $sql_command_03 = mysqli_query($connection,
        "update bardasht_karmandan set stuff_name='$bardasht_edited[1]',father_name='$bardasht_edited[2]',amount='$bardasht_edited[3]',description='$bardasht_edited[4]',date_sh='$bardasht_edited[5]',date_m='$bardasht_edited[6]',after_check='accept' where id='$bardasht_edited[0]'");
        if($sql_command_03){
            $sql_command_04 = mysqli_query($connection,"delete from bardasht_karmandan_edit where edit_row_id='$bardasht_edited[0]'");
            header("location:edited_check.php");   
        }
        else{
            header("location:edited_check.php");  
        }
     exit();   
    }
    if(isset($_GET["bardasht_delete_id"])){
        $id = $_GET["bardasht_delete_id"];
        $sql_command_04 = mysqli_query($connection,"delete from bardasht_karmandan_edit where id='$id'");
        
        if($sql_command_04){
            header("location:edited_check.php");   
        }
        else{
            header("location:edited_check.php");  
        }
        exit();
    }

       //  بل برق

    if(isset($_GET["bill_barq_accept_id"])){
        $id = $_GET["bill_barq_accept_id"];
        $sql_command_01 = mysqli_query($connection,"select * from bill_barq_edit where id='$id'");
        $fetch_01 = mysqli_fetch_assoc($sql_command_01);
        $barq_edited = array($fetch_01["edit_row_id"],$fetch_01["dokan_number"],$fetch_01["name"],$fetch_01["father_name"],$fetch_01["dawra"],$fetch_01["gozashta"],$fetch_01["halia"],$fetch_01["fi_kilowat"],$fetch_01["pardakht_shda"],$fetch_01["description"],$fetch_01["date_sh"],$fetch_01["date_m"]);
        // echo $kerah_edited[1];
        $sql_command_03 = mysqli_query($connection,
        "update bill_barq set dokan_number='$barq_edited[1]',name='$barq_edited[2]',father_name='$barq_edited[3]',dawra='$barq_edited[4]',gozashta='$barq_edited[5]',halia='$barq_edited[6]',fi_kilowat='$barq_edited[7]',pardakht_shoda='$barq_edited[8]',description='$barq_edited[9]',date_sh='$barq_edited[10]',date_m='$barq_edited[11]',after_check='accept' where id='$barq_edited[0]'");
        if($sql_command_03){
            $sql_command_04 = mysqli_query($connection,"delete from bill_barq_edit where edit_row_id='$barq_edited[0]'");
            header("location:edited_check.php");   
        }
        else{
            header("location:edited_check.php");  
        }
     exit();   
    }
    if(isset($_GET["bill_barq_delete_id"])){
        $id = $_GET["bill_barq_delete_id"];
        $sql_command_04 = mysqli_query($connection,"delete from bill_barq_edit where id='$id'");
        
        if($sql_command_04){
            header("location:edited_check.php");   
        }
        else{
            header("location:edited_check.php");  
        }
        exit();
    }

     //   قرضه

    if(isset($_GET["qarza_accept_id"])){
        $id = $_GET["qarza_accept_id"];
        $sql_command_01 = mysqli_query($connection,"select * from qarza_edit where q_id='$id'");
        $fetch_01 = mysqli_fetch_assoc($sql_command_01);
        $qarza_edited = array($fetch_01["edit_row_id"],$fetch_01["name"],$fetch_01["description"],$fetch_01["job"],$fetch_01["amount"],$fetch_01["qist"],$fetch_01["org_name"],$fetch_01["qarza_type"],$fetch_01["monthly_payment"],$fetch_01["date_sh"],$fetch_01["date_m"]);
        // echo $kerah_edited[1];
        $sql_command_03 = mysqli_query($connection,
        "update qarza set name='$qarza_edited[1]',description='$qarza_edited[2]',job='$qarza_edited[3]',amount='$qarza_edited[4]',qist='$qarza_edited[5]',org_name='$qarza_edited[6]',qarza_type='$qarza_edited[7]',monthly_payment='$qarza_edited[8]',date_sh='$qarza_edited[9]',date_m='$qarza_edited[10]',after_check='accept' where q_id='$qarza_edited[0]'");
        if($sql_command_03){
            $sql_command_04 = mysqli_query($connection,"delete from qarza_edit where edit_row_id='$qarza_edited[0]'");
            header("location:edited_check.php");   
        }
        else{
            header("location:edited_check.php");  
        }
     exit();   
    }
    if(isset($_GET["qarza_delete_id"])){
        $id = $_GET["qarza_delete_id"];
        $sql_command_04 = mysqli_query($connection,"delete from qarza_edit where q_id='$id'");
        
        if($sql_command_04){
            header("location:edited_check.php");   
        }
        else{
            header("location:edited_check.php");  
        }
        exit();
    }

    // reg dokan 

    if(isset($_GET["reg_dokan_accept_id"])){
        $id = $_GET["reg_dokan_accept_id"];
        $sql_command_01 = mysqli_query($connection,"select * from reg_dokan_edit where id='$id'");
        $fetch_01 = mysqli_fetch_assoc($sql_command_01);
        $reg_edited = array($fetch_01["edit_row_id"],$fetch_01["dokan_number"],$fetch_01["marbot"],$fetch_01["father_name"],$fetch_01["grandfather"],$fetch_01["tazkira"],$fetch_01["phone"],$fetch_01["description"],$fetch_01["date_sh"],$fetch_01["date_m"]);
        // echo $kerah_edited[1];
        $sql_command_03 = mysqli_query($connection,
        "update reg_dokan set dokan_number='$reg_edited[1]',marbot='$reg_edited[2]',father_name='$reg_edited[3]',grandfather='$reg_edited[4]',tazkira='$reg_edited[5]',phone='$reg_edited[6]',description='$reg_edited[7]',date_sh='$reg_edited[8]',date_m='$reg_edited[9]',after_check='accept' where id='$reg_edited[0]'");
        if($sql_command_03){
            $sql_command_04 = mysqli_query($connection,"delete from reg_dokan_edit where edit_row_id='$reg_edited[0]'");
            header("location:edited_check.php");   
        }
        else{
            header("location:edited_check.php");  
        }
     exit();   
    }
    if(isset($_GET["reg_dokan_delete_id"])){
        $id = $_GET["reg_dokan_delete_id"];
        $sql_command_04 = mysqli_query($connection,"delete from reg_dokan_edit where id='$id'");
        
        if($sql_command_04){
            header("location:edited_check.php");   
        }
        else{
            header("location:edited_check.php");  
        }
        exit();
    }

?>