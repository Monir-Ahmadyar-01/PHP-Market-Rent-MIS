
<?php
  include_once("database.php");
  include("jdf.php");
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

        <script type="text/javascript">
        $(function() {
            $('#datepicker0').datepicker({
                changeMonth: true,
                changeYear: true
            });
        });
        </script>

        <!-- file uploads js -->
        <script src="fileuploads/js/dropify.min.js"></script>
        <!-- form Uploads -->
        <link href="fileuploads/css/dropify.css" rel="stylesheet" type="text/css" />

        <!--===============================================================================================-->
        <style>
        td,
        th {
            text-align: center;
            vertical-align: middle;
        }

        th {
            font-size: b koodak;
        }

        header {
            font-family: 'Lobster', cursive;
            text-align: center;
            font-size: 25px;
        }

        #info {
            font-size: 18px;
            color: #555;
            text-align: center;
            margin-bottom: 25px;
        }

        a {
            color: #074E8C;
        }

        .scrollbar {
            margin-left: 30px;
            float: left;
            height: 300px;
            width: 65px;
            background: #F5F5F5;
            overflow-y: scroll;
            margin-bottom: 25px;
        }

        .force-overflow {
            min-height: 450px;
        }

        #wrapper {
            text-align: center;
            width: 500px;
            margin: auto;
        }

        /*
 *  STYLE 1
 */

        #style-1::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            background-color: #F5F5F5;
        }

        #style-1::-webkit-scrollbar {
            width: 12px;
            background-color: #F5F5F5;
        }

        #style-1::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
            background-color: #555;
        }

        /*
 *  STYLE 2
 */

        #style-2::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            background-color: #F5F5F5;
        }

        #style-2::-webkit-scrollbar {
            width: 12px;
            background-color: #F5F5F5;
        }

        #style-2::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
            background-color: #D62929;
        }

        /*
 *  STYLE 3
 */

        #style-3::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
        }

        #style-3::-webkit-scrollbar {
            width: 5px;
            background-color: #F5F5F5;
        }

        #style-3::-webkit-scrollbar-thumb {
            background-color: #144b6f;
        }

        /*
 *  STYLE 4
 */

        #style-4::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
        }

        #style-4::-webkit-scrollbar {
            width: 10px;
            background-color: #F5F5F5;
        }

        #style-4::-webkit-scrollbar-thumb {
            background-color: #000000;
            border: 2px solid #555555;
        }

        /*
 *  STYLE 5
 */

        #style-5::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
        }

        #style-5::-webkit-scrollbar {
            width: 10px;
            background-color: #F5F5F5;
        }

        #style-5::-webkit-scrollbar-thumb {
            background-color: #0ae;

            background-image: -webkit-gradient(linear, 0 0, 0 100%,
                    color-stop(.5, rgba(255, 255, 255, .2)),
                    color-stop(.5, transparent), to(transparent));
        }


        /*
 *  STYLE 6
 */

        #style-6::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
        }

        #style-6::-webkit-scrollbar {
            width: 10px;
            background-color: #F5F5F5;
        }

        #style-6::-webkit-scrollbar-thumb {
            background-color: #F90;
            background-image: -webkit-linear-gradient(45deg,
                    rgba(255, 255, 255, .2) 25%,
                    transparent 25%,
                    transparent 50%,
                    rgba(255, 255, 255, .2) 50%,
                    rgba(255, 255, 255, .2) 75%,
                    transparent 75%,
                    transparent)
        }


        /*
 *  STYLE 7
 */

        #style-7::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
            border-radius: 10px;
        }

        #style-7::-webkit-scrollbar {
            width: 10px;
            background-color: #F5F5F5;
        }

        #style-7::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background-image: -webkit-gradient(linear,
                    left bottom,
                    left top,
                    color-stop(0.44, rgb(122, 153, 217)),
                    color-stop(0.72, rgb(73, 125, 189)),
                    color-stop(0.86, rgb(28, 58, 148)));
        }

        /*
 *  STYLE 8
 */

        #style-8::-webkit-scrollbar-track {
            border: 1px solid black;
            background-color: #F5F5F5;
        }

        #style-8::-webkit-scrollbar {
            width: 10px;
            background-color: #F5F5F5;
        }

        #style-8::-webkit-scrollbar-thumb {
            background-color: #000000;
        }


        /*
 *  STYLE 9
 */

        #style-9::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
        }

        #style-9::-webkit-scrollbar {
            width: 10px;
            background-color: #F5F5F5;
        }

        #style-9::-webkit-scrollbar-thumb {
            background-color: #F90;
            background-image: -webkit-linear-gradient(90deg,
                    rgba(255, 255, 255, .2) 25%,
                    transparent 25%,
                    transparent 50%,
                    rgba(255, 255, 255, .2) 50%,
                    rgba(255, 255, 255, .2) 75%,
                    transparent 75%,
                    transparent)
        }


        /*
 *  STYLE 10
 */

        #style-10::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
            border-radius: 10px;
        }

        #style-10::-webkit-scrollbar {
            width: 10px;
            background-color: #F5F5F5;
        }

        #style-10::-webkit-scrollbar-thumb {
            background-color: #AAA;
            border-radius: 10px;
            background-image: -webkit-linear-gradient(90deg,
                    rgba(0, 0, 0, .2) 25%,
                    transparent 25%,
                    transparent 50%,
                    rgba(0, 0, 0, .2) 50%,
                    rgba(0, 0, 0, .2) 75%,
                    transparent 75%,
                    transparent)
        }


        /*
 *  STYLE 11
 */

        #style-11::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
            border-radius: 10px;
        }

        #style-11::-webkit-scrollbar {
            width: 10px;
            background-color: #F5F5F5;
        }

        #style-11::-webkit-scrollbar-thumb {
            background-color: #3366FF;
            border-radius: 10px;
            background-image: -webkit-linear-gradient(0deg,
                    rgba(255, 255, 255, 0.5) 25%,
                    transparent 25%,
                    transparent 50%,
                    rgba(255, 255, 255, 0.5) 50%,
                    rgba(255, 255, 255, 0.5) 75%,
                    transparent 75%,
                    transparent)
        }

        /*
 *  STYLE 12
 */

        #style-12::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.9);
            border-radius: 10px;
            background-color: #444444;
        }

        #style-12::-webkit-scrollbar {
            width: 12px;
            background-color: #F5F5F5;
        }

        #style-12::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background-color: #D62929;
            background-image: -webkit-linear-gradient(90deg,
                    transparent,
                    rgba(0, 0, 0, 0.4) 50%,
                    transparent,
                    transparent)
        }

        /*
 *  STYLE 13
 */

        #style-13::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.9);
            border-radius: 10px;
            background-color: #CCCCCC;
        }

        #style-13::-webkit-scrollbar {
            width: 12px;
            background-color: #F5F5F5;
        }

        #style-13::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background-color: #D62929;
            background-image: -webkit-linear-gradient(90deg,
                    transparent,
                    rgba(0, 0, 0, 0.4) 50%,
                    transparent,
                    transparent)
        }

        /*
 *  STYLE 14
 */

        #style-14::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.6);
            background-color: #CCCCCC;
        }

        #style-14::-webkit-scrollbar {
            width: 10px;
            background-color: #F5F5F5;
        }

        #style-14::-webkit-scrollbar-thumb {
            background-color: #FFF;
            background-image: -webkit-linear-gradient(90deg,
                    rgba(0, 0, 0, 1) 0%,
                    rgba(0, 0, 0, 1) 25%,
                    transparent 100%,
                    rgba(0, 0, 0, 1) 75%,
                    transparent)
        }

        /*
 *  STYLE 15
 */

        #style-15::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
            background-color: #F5F5F5;
            border-radius: 10px;
        }

        #style-15::-webkit-scrollbar {
            width: 10px;
            background-color: #F5F5F5;
        }

        #style-15::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background-color: #FFF;
            background-image: -webkit-gradient(linear,
                    40% 0%,
                    75% 84%,
                    from(#4D9C41),
                    to(#19911D),
                    color-stop(.6, #54DE5D))
        }

        /*
 *  STYLE 16
 */

        #style-16::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
            background-color: #F5F5F5;
            border-radius: 10px;
        }

        #style-16::-webkit-scrollbar {
            width: 10px;
            background-color: #F5F5F5;
        }

        #style-16::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background-color: #FFF;
            background-image: -webkit-linear-gradient(top,
                    #e4f5fc 0%,
                    #bfe8f9 50%,
                    #9fd8ef 51%,
                    #2ab0ed 100%);
        }

        body {
            background-color: #e6f2ff !important;
        }

        @media print {



            #icon {
                display: none;
            }
        }
        </style>
    </head>
    <script>
    </script>
    <script>
    function edit(id) {
        var idd = id;
        window.open("edit.php?id_s=" + idd, "_self");

    }

    function delet(id) {
        var confirm = window.confirm("Are You sure You want To delete");
        if (confirm == true) {
            window.open("delete.php?id_s=" + id, "_self");
        } else {

        }
    }
    </script>
    <script>
    function myFunction() {
        window.print();

    }
    </script>

    <body class="my-login-page">
        <section class="h-100" style=" padding:0px !important;">
            <div class="container-fluid h-100" style=" width:100%;">
                <div class="card-wrapper" style="width:100%;margin-top:1%; ">
                    <div class="card fat" style="">
                        <div class="card-body">



                            <h2 class="card-title" style="text-align:center; ">گزارشات دلخواه</h2>
                            <hr>
                            <!-- search Table -->

                            <table class="table table-bordered" style="width:60%; direction:rtl; float:right;">
                                <tr>
                                    <!-- <td>
                                        <label for="From">جستجو به اساس مشخصات</label>
                                        <input type="text" class="form-control" required name="input_search"
                                            id="input_search">
                                    </td> -->
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
                            <button class="btn btn-primary btn-sm" style="margin-top:36px;"
                                onclick="window.open('report.php','_self')"><img
                                    src="image/icons/clear_filters_32px.png" alt=""></button>
                            <br>

                        </div>
                    </div>
                    <tr>
                        <table class="table table-bordered table-striped" dir="rtl">
                            <tr>
                                <th colspan="8" class="bg-primary" style="text-align:center;">بیلانس نهایی
                                </th>
                            </tr>
                            <tr dir="rtl" style="">
                                <th colspan="1"> کرایه ها</th>
                                <th colspan="1"> برداشت ها</th>
                                <th colspan="1"> مصارف</th>
                                <th colspan="1">معاشات پرداخت شده</th>
                                <th colspan="1">رفت قرضه</th>
                                <th colspan="1">آمد قرضه</th>
                                <th colspan="1">بل برق</th>
                                <th colspan="1">بیلانس</th>
                            </tr>
                            <?php 
                                $sql_query5;
                                $sql_query6;
                                $sql_query7;
                                $sql_query8;
                                $sql_query9;
                                $sql_query10;
                                $sql_query11;

                                
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
                                        
                                        $sql_query5 = mysqli_query($connection,"select sum(meqdar_perdakhty) as meqdar_perdakhty from kerah_dokan where date_m between '$from_m' and '$to_m'");
                                        $sql_query6 = mysqli_query($connection,"select sum(amount) as total_bardasht from bardasht_karmandan where date_m between '$from_m' and '$to_m'");
                                        $sql_query7 = mysqli_query($connection,"select sum(total) as total_price from masarf where date_m between '$from_m' and '$to_m'");
                                        $sql_query8 = mysqli_query($connection,"select sum(salary-bardasht) as total_mash from pardakht_mash where date_m between '$from_m' and '$to_m'");
                                        $sql_query9 = mysqli_query($connection,"select sum(amount) as total_baqi from qarza where date_m between '$from_m' and '$to_m'");
                                        $sql_query11 = mysqli_query($connection,"select sum(monthly_payment) as total_amad from qarza where date_m between '$from_m' and '$to_m'");
                                        $sql_query10 = mysqli_query($connection,"select sum(pardakht_shoda) as total_rasid from bill_barq where date_m between '$from_m' and '$to_m'");

                                    }
                                    else{

                                        
                                        $sql_query5 = mysqli_query($connection,"select sum(meqdar_perdakhty) as meqdar_perdakhty from kerah_dokan");
                                        $sql_query6 = mysqli_query($connection,"select sum(amount) as total_bardasht from bardasht_karmandan");
                                        $sql_query7 = mysqli_query($connection,"select sum(total) as total_price from masarf");
                                        $sql_query8 = mysqli_query($connection,"select sum(salary-bardasht) as total_mash from pardakht_mash");
                                        $sql_query9 = mysqli_query($connection,"select sum(amount) as total_baqi from qarza");
                                        $sql_query11 = mysqli_query($connection,"select sum(monthly_payment) as total_amad from qarza");
                                        $sql_query10 = mysqli_query($connection,"select sum(pardakht_shoda) as total_rasid from bill_barq");


                                    }
                            ?>
                            <tr style="">
                                <?php 
                                            // total keraya 
                                            
                                            $fetch = mysqli_fetch_assoc($sql_query5);
                                            $meqdar_perdakhty = $fetch["meqdar_perdakhty"];
                                        ?>
                                <td colspan="1"><?php echo   $meqdar_perdakhty ; ?></td>
                                <?php 
                                            // total bardasht_karmandan 
                                            $fetch2 = mysqli_fetch_assoc($sql_query6);
                                            $total_bardasht = $fetch2["total_bardasht"];
                                        ?>
                                <td colspan="1"><?php echo $total_bardasht . " AF "; ?></td>
                                <?php 
                                            // total masarf 
                                            $fetch3 = mysqli_fetch_assoc($sql_query7);
                                            $total_price2 = $fetch3["total_price"];
                                        ?>
                                <td colspan="1"><?php echo $total_price2 . " AF "; ?></td>
                                <?php 
                                            // total pardakht mash 
                                            $fetch4 = mysqli_fetch_assoc($sql_query8);
                                            $total_mash = $fetch4["total_mash"];
                                        ?>
                                <td colspan="1"><?php echo $total_mash . " AF "; ?></td>
                                <?php 
                                            // total qarze raft 
                                            $fetch5 = mysqli_fetch_assoc($sql_query9);
                                            $total_baqi_qarza = $fetch5["total_baqi"];
                                        ?>
                                <td colspan="1"><?php echo $total_baqi_qarza . " AF "; ?></td>
                                <?php 
                                            // total qarze amad 
                                            $fetch_a = mysqli_fetch_assoc($sql_query11);
                                            $total_amad_qarza = $fetch_a["total_amad"];
                                        ?>
                                <td colspan="1"><?php echo $total_amad_qarza . " AF "; ?></td>

                                <?php 
                                            // total bill barq 
                                            $fetch6 = mysqli_fetch_assoc($sql_query10);
                                            $total_rasid = $fetch6["total_rasid"];
                                        ?>
                                <td colspan="1"><?php echo $total_rasid . " AF "; ?></td>

                                <td colspan="1" id="billans2"><?php
                                        $billans = (($meqdar_perdakhty + $total_amad_qarza+$total_rasid)-($total_bardasht+$total_price2+$total_mash+$total_baqi_qarza));
                                        echo  $billans. " AF "; ?></td>

                            </tr>
                        </table>
                    </tr>
                    </table>
                </div>
            </div>
            </td>
            </tr>

            <script>
            $(document).ready(function() {
                if (!$.browser.webkit) {
                    $('.wrapper').html('<p>Sorry! Non webkit users. :(</p>');
                }
            });
            </script>


            <!-- end pharmacy -->

            <script>
            var billans = "<?php echo $billans;?>";
            var id = document.getElementById("billans2");
            if (billans < 0) {
                id.style.backgroundColor = "red";
                id.style.color = "white";

            } else if (billans == 0) {
                id.style.backgroundColor = "grey";
                id.style.color = "white";

            } else {
                id.style.backgroundColor = "green";
                id.style.color = "white";
            }
            </script>


            </table>

            </form>
            </div>
            </div>

            </div>
            </div>
        </section>



    </body>
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

</html>