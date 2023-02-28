<?php
    include("../../function/session.php");
    include("../../function/config.php");
    include("include/validate_user_session.php");

    $acc_id = $_SESSION['acc_id'];

    $sql = mysqli_query($db, "SELECT * FROM intern_tbl 
    INNER JOIN accounts_tbl ON intern_tbl.i_id=accounts_tbl.i_id 
    INNER JOIN supervisor_tbl ON accounts_tbl.s_id=supervisor_tbl.s_id 
    WHERE accounts_tbl.acc_id='$acc_id'");
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

            <div class="dtr_wrapper">
                <div class="dtr_con1">
                    <div class="row">

                        <div class="col-12 text-left pb-4">
                            <small><i>Civil Service Form No. 48</i></small>
                        </div>

                        <div class="col-12 text-center pb-4">
                            <h5><strong>Daily Time Record</strong></h5>
                            <span><small>---o0o---</small></span>
                        </div>

                        <div class="col-12">
                            <div class="text_stretch">
                                <div class="text_underline_2">
                                    <h5>
                                    <strong><?php 
                                    echo $res['i_first_name']." "; 
                                    if($res['i_middle_name'] != ''){
                                        echo $res['i_middle_name']." ";
                                    }
                                    echo $res['i_last_name']." ".$res['i_suffix_name'];
                                    ?></strong>
                                    </h5>
                                </div>
                            </div>
                            <div class="text_stretch">
                                <div class="text_tag pt-1">
                                    (Name)
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 pt-2">
                            <div class="row text_head">
                                <div class="col-lg-4 pt-3">
                                    <div class="text_stretch">
                                            <span>For the month of </span>
                                            <div class="text_underline_3">
                                                <strong><?php echo date("F Y"); ?></strong>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 pt-3">
                                    <div class="text_stretch2">
                                        <span class="text-center">
                                            Official hours for arrival and departure
                                        </span>
                                        <div class="text_underline_3">
                                            <strong class="pad_1">
                                                07:30 am - 11:30 am, 01:00 pm - 05:00 pm
                                            </strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="table-responsive">
                        <table id="tbl_con">
                            <tbody width="100%">
                            <tr class="text-center">
                                <th rowspan="2" colspan="2">Day</th>
                                <th colspan="2">AM</th>
                                <th colspan="2">PM</th>
                                <th colspan="3">Time</th>
                            </tr>
                            <tr class="text-center">
                                <td>Arrival</td>
                                <td>Departure</td>
                                <td>Arrival</td>
                                <td>Departure</td>
                                <td>Days</td>
                                <td>Hours</td>
                                <td>Mins.</td>
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
                                        <td></td>
                                    </tr>';
                                }
                            ?> 
                            </tbody>  
                        </table>
                    </div>

                    <div class="row">
                        <div class="col-12 text_confirmation pt-4">
                            <span><i>I certify on my honor that the above is a true and correct report of the hours of work performed, record of which was made daily at the time of arrival and departure from office.</i></span>
                        </div>

                        <div class="col-12 pt-5">
                            <div class="text_stretch">
                                <div class="text_underline_2">
                                    
                                </div>
                            </div>
                            <div class="text_stretch">
                                <div class="pt-2 text-left">
                                    <small><i>VERIFIED as to the prescribed office hours:</i></small>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 pt-4">
                            <div class="text_stretch pt-2">
                                <div class="text_underline_2">
                                    <h5>
                                    <strong><?php 
                                    echo strtoupper($res['s_first_name'])." "; 
                                    if($res['s_middle_name'] != ''){
                                        echo strtoupper(substr($res['s_middle_name'], 0, 1)).". ";
                                    }
                                    echo strtoupper($res['s_last_name'])." ".$res['s_suffix_name'];
                                    ?></strong>
                                    </h5>
                                </div>
                            </div>
                            <div class="text_stretch">
                                <div class="text_incharge pt-1">
                                    <span><i>In Charge</i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dtr_con2">
                    
                </div>
            </div>

        </div>     
        <?php include("include/script.php"); ?>
    </body>
</html>
