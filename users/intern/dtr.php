<?php
    include("../../function/session.php");
    include("../../function/config.php");
    include("include/validate_user_session.php");

    $acc_id = $_SESSION['acc_id'];

    $sql = mysqli_query($db, "SELECT * FROM intern_tbl INNER JOIN accounts_tbl ON intern_tbl.i_id=accounts_tbl.i_id WHERE accounts_tbl.acc_id='$acc_id'");
    $res = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>DTR - OJT Information System</title>
        <?php include("include/style.php"); ?>
    </head>
    <body id="page-top">
        <?php include("include/nav.php"); ?>
        <div class="container pt-5">
            <h2 class="pb-3 text-center"><strong>Daily Time Record</strong></h2><br>
                    <div class="row">
                        <div class="col-lg-7 center">
                            <h4 class="text-center" style="border-bottom: 1px solid black;"><strong><span style="font-size: 15px;"><?php echo $res['i_last_name']." ".$res['i_suffix_name']." ".$res['i_first_name'];?></strong></span></h4>
                            <h6 class="text-center" id="tbl_con">(Name)</h6>
                            <h6>For the month of <span style="border-bottom: 1px solid black; center"><strong> March, 2023 </strong></span> </h6>
                            <h6>Official hours for arrival and departure <span style="border-bottom: 1px solid black; center"><strong> Regular Days 07:30am-11:30, 01:00pm-05:00pm
                            </strong></span></h6>
                        </div>
                    </div>
                    <br>
                    <table class="center" id="tbl_con">
                        <tr class="text-center">
                            <th rowspan="2" colspan="2">Day</th>
                            <th colspan="2">A.M</th>
                            <th colspan="2">P.M</th>
                            <th colspan="2">Time</th>
                        </tr>
                        <tr class="text-center">
                            <td>Arrival</td>
                            <td>Departure</td>
                            <td>Arrival</td>
                            <td>Departure</td>
                            <td>Hours</td>
                            <td>Minutes</td>
                        </tr>
                        <?php                            
                            $month = date("n");
                            $year = date("Y");
                            $month_year = $month."-".$year;
                            $num_days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
                            
                            for($i = 1; $i <= $num_days; $i++){
                                echo '<tr class="text-center">
                                    <td>'.$i.'</td>
                                    <td>'.date("D", strtotime($i.'-'.$month_year)).'</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>';
                            }
                        ?>   
                    </table>
                </div> 
            </div>     
        <?php include("include/script.php"); ?>
    </body>
</html>
