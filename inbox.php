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

        a,
        span {
            cursor: pointer;
        }

        @media print {
            .col-sm-12 {
                display: none;
            }

            #icon {
                display: none;
            }
        }

        .table-responsive {
            overflow-x: hidden;
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

    <body class="my-login-page" style="font-family:b koodak;">
        <section class="h-100" style=" padding:0px !important;">
            <br>
            <div class="container-fluid">
                <div class="card-wrapper" style="width:100%; ">
                    <div class="card fat" style="background-color:#222222 !important;">

                        <div class="table-responsive">

                            <br>

                            <h2 class="card-title b_font" style="text-align:center; color:white;" placeholder="">نظریات
                                ثبت شده</h2>

                            <div class="row" dir="rtl">


                                <div class="col-sm-12">
                                    <input type="search" class="text form-control b_font" style="border-radius:none;"
                                        name="input_search" id="input_search" placeholder=" جستجو نمائید ....... "
                                        style="direction:rtl; ">
                                </div>

                            </div>
                            <br>
                            <table class="table" dir="rtl">
                                <thead>

                                    <tr class="bg bg-primary" style="color:white;">
                                        <th class="b_font">#</th>
                                        <th class="b_font">نام </th>

                                        <th class="b_font">تفصیل </th>

                                        <th class="b_font">فایل</th>
                                        <th class="b_font">تاریخ</th>
                                        <th class="b_font">حذف</th>

                                    </tr>
                                </thead>
                                <tbody id="tbody">
                                    <?php
                      $sql_query_02 = mysqli_query($connection,
                      "select * from comment");
                      $count = 1;
                      while ($fetch_02 = mysqli_fetch_assoc($sql_query_02)) {
                    ?>
                                    <tr style="color:white;">
                                        <td class="b_font"><?php echo $count; ?></td>
                                        <td class="b_font"><?php echo $fetch_02["name"];?></td>
                                        <td class="b_font"><?php echo $fetch_02["details"];?></td>
                                        <td class="b_font">
                                            <a class="b_font" target="_blank"
                                                href="documents/<?php echo $fetch_02["file"];?>"><?php if ($fetch_02["file"] != "") {
                          echo "فایل  ";

                      }?></a>
                                        </td>


                                        <td class="b_font"><?php echo $fetch_02["date_sh"];?></td>
                                        <td class="b_font" id="icon">


                                            <span onclick="delet(<?php echo $fetch_02['id'] ;?>)"
                                                class="glyphicon glyphicon-remove text text-danger"></span>


                                        </td>
                                    </tr>
                                    <?php
                      $count++;
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
        window.open("delete.php?in_id=" + id, "_self");
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