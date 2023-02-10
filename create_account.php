
<?php
  include_once("database.php");
  include_once("redirect.php");
  include_once("jdf.php");
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

        .table,
        tr,
        td {
            border: 1px solid #99ccff !important;
        }

        body {
            background-color: #e6f2ff !important;
        }
        </style>
    </head>
    <script>
    </script>

    <body class="my-login-page" style="">
        <section class="h-100" style=" padding:0px !important;">
            <div class="container-fluid h-100" style=" width:100%;">
                <div class="card-wrapper" style="width:100%;margin-top:1%; ">
                    <div class="card fat" style="">
                        <div class="card-body">

                            <h2 class="card-title b_font" style="text-align:center; ">ایجاد حساب</h2>
                            <hr>
                            <form method="POST" id="uploadForm" class="my-login-validation"
                                enctype="multipart/form-data" novalidate="">
                                <table class="table table-bordered table-striped" dir="rtl">
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">نام </label>
                                                <input name="name_u" id="name" type="text" class="form-control"
                                                    required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">تخلص</label>
                                                <input name="lastname" id="lastname" type="text" class="form-control"
                                                    required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">نام کاربر (به انگلیسی )</label>
                                                <input name="username" id="username" type="text" class="form-control"
                                                    required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">رمز کاربر (به انگلیسی)</label>
                                                <input name="password" id="password" type="text" class="form-control"
                                                    required>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">کود مخفی ( به انگلیسی )</label>
                                                <input name="secret_code" id="secret_code" type="text"
                                                    class="form-control" required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">صلاحیت </label>
                                                <select name="authority" style="height:35px;" id="authority"
                                                    class="form-control">
                                                    <option value="40">40%</option>
                                                    <option value="70">70%</option>
                                                    <option value="100">100%</option>
                                                </select>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="card shadow">
                                                <div class="card-body">
                                                    <label class="b_font">عکس </label>
                                                    <input type="file" id="image_upload" name="image_upload"
                                                        class="dropify" data-height="40" />
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <label class="b_font">تاریخ</label>
                                                <input type="text" class="form-control" name="date_sh" id="date_sh"
                                                    value="<?php echo jdate("Y/n/j","","","Asia/kabul","en");?>"
                                                    required autofocus>
                                            </div>
                                        </td>

                                    </tr>
                                    <input type="text" name="user_id" value="<?php if (isset($_SESSION["user_id"])) {
																			echo $_SESSION["user_id"];
																		}?>" style="display:none" />
                                    <tr>
                                        <td colspan="10">
                                            <div class="form-group m-0">
                                                <button type="submit" id="loading" class="btn btn-primary btn-block">
                                                    ذخیره
                                                </button>

                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <div id="state" style="width:49%; direction: rtl;float:right;" class="">
                                        </div>
                                    </tr>
                                </table>

                            </form>
                            <a href="created_account.php" style="float:right;">
                                <button type="button" name="button" class=" btn btn-success b_font">حساب های ایجاد
                                    شده</button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <script>
        $('.dropify').dropify({
            messages: {
                'default': '',
                'replace': '',
                'remove': '',
                'error': ''
            },
            error: {
                'fileSize': 'The file size is too big (2M max).'
            }
        });
        </script>

        <script type="text/javascript">
        $(document).ready(function() {
            $("#uploadForm").on("submit", function(e) {
                e.preventDefault();
                var name = $("#name").val();
                var lastname = $("#lastname").val();
                var username = $("#username").val();
                var password = $("#password").val();
                var secret_code = $("#secret_code").val();

                if (name == "" || lastname == "" || username == "" || password == "" || secret_code ==
                    "") {
                    $("#state").html(
                        "<div class='alert alert-danger b_font' dir='rtl'>لطفا خانه ها را پر نماید !!</div>"
                    );

                    setTimeout(function() {
                        $("#state").html("");
                    }, 3000);
                } else {

                    $.ajax({
                        url: "server.php",
                        type: "POST",
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(data) {
                            var real_data = data.trim();
                            if (real_data == "success") {
                                $("#state").html(
                                    "<div class='alert alert-success b_font' dir='rtl'>اطلاعات موفقانه ذخیره  شد </div>"
                                );

                                setTimeout(function() {
                                    $("#state").html("");
                                    document.getElementById("uploadForm").reset();
                                }, 3000);
                            } else {
                                $("#state").html(
                                    "<div class='alert alert-danger b_font' dir='rtl'> خطا در ذخیره اطلاعات دوباره کوشش نماید !!</div>"
                                );

                                setTimeout(function() {
                                    $("#state").html("");
                                }, 3000);
                            }
                        },
                        error: function() {

                        }

                    });
                }

            });
        });
        </script>
        <script type="text/javascript">
        $(function() {
            $('#date_sh').datepicker({
                changeMonth: true,
                changeYear: true
            });
        });
        </script>

    </body>

</html>