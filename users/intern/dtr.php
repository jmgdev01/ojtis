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
        <div class="container py-5">
            <h2 class="pb-3 text-center"><strong>Daily Time Record</strong></h2><br>

                    <div class="row">
                        <div class="col-12">
                            <div class="text_stretch">
                                <div class="text_underline_2">
                                    <h4>
                                    <strong>
                                    <span><?php 
                                    echo $res['i_first_name']; 
                                    if($res['i_middle_name'] != ''){
                                        echo $res['i_middle_name'];
                                    } else {
                                        echo "N/A";
                                    }
                                    echo $res['i_last_name']." ".$res['i_suffix_name'];
                                    ?></span>
                                    </strong>
                                    </h4>
                                </div>
                            </div>
                            <div class="text_stretch">
                                <div class="text_tag pt-1">
                                    (Name)
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="text_stretch">
                                    <span>For the month of </span>
                                    <div class="text_underline_2">
                                        <span><?php echo date("F Y"); ?></span>
                                    </div>
                            </div>
                            <div class="text_stretch">
                                    <strong class="pr-5 mr-4"></strong>
                                    <div class="text_tag">
                                        <small><i>Last Name ~ Suffix</i></small>
                                        <small><i>First Name</i></small>
                                        <small><i>Middle Name</i></small>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <table id="tbl_con">
                        <tbody width="100%">
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
                        </tbody>  
                    </table>
                </div> 
            </div>     
        <?php include("include/script.php"); ?>
    </body>
</html>
