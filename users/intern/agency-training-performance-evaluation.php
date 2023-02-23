<?php
    include("../../function/session.php");
    include("../../function/config.php");
    include("include/validate_user_session.php");

    $acc_id = $_SESSION['acc_id'];

    $sql = mysqli_query($db, "SELECT * FROM accounts_tbl 
    INNER JOIN intern_tbl ON accounts_tbl.i_id = intern_tbl.i_id 
    INNER JOIN contacts_tbl ON intern_tbl.i_id = contacts_tbl.i_id 
    INNER JOIN emergency_tbl ON intern_tbl.i_id = emergency_tbl.i_id 
    INNER JOIN address_tbl ON intern_tbl.i_id = address_tbl.i_id 
    INNER JOIN supervisor_tbl ON accounts_tbl.s_id = supervisor_tbl.s_id
    INNER JOIN trainer_tbl ON accounts_tbl.tr_id = trainer_tbl.tr_id  
    INNER JOIN configuration_tbl ON accounts_tbl.cf_id = configuration_tbl.cf_id 
    INNER JOIN educational_background_tbl ON intern_tbl.i_id = educational_background_tbl.i_id 
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
    <title>Registration Form - OJT Information System</title>
    <?php include("include/style.php"); ?>
</head>
<body id="page-top">
    <?php include("include/nav.php"); ?>
    <div class="container py-5">
        <!-- <h3 class="pb-2 d_hide"><strong>REGISTRATION FORM</strong></h3> -->
        <div class="col-lg-12 text-left pb-3">
            <button class="form-btn form-btn-sm btn-teal d_hide" onclick="window.print()"><strong><i class="fa fa-print"></i> PRINT</strong></button>
        </div>

        <div class="row registration_form px-5">
            <div class="col-lg-12 doc_header">
                <img src="../../assets/header/doc-header.png" alt="">
            </div>
            <div class="col-lg-12 text-center pt-2 pb-2 doc_sub_header">
                <h5><strong>COLLEGE OF SCIENCE AND TECHNOLOGY</strong></h5>
                <h6>INFORMATION TECHNOLOGY / INFORMATION SYSTEMS PROGRAM</h6>
            </div>
            <div class="col-lg-12 text-center doc_title pt-3">
                <h4><strong>AGENCY TRAINING PERFORMANCE EVALUATION (ATPE)</strong></h4>
            </div>

            <div class="col-lg-12 pt-3 doc_body">
                <div class="row pb-2">
                    <div class="col-6">
                       <div class="text_stretch">
                            <div class="text_underline">
                                <strong>
                                    <span>
                                    <?php 
                                    echo $res['i_first_name']." ";
                                    if($res['i_middle_name'] != ''){
                                        echo substr($res['i_middle_name'], 0, 1).". ";
                                    }
                                    echo $res['i_last_name']; 
                                    if($res['i_suffix_name'] != ''){
                                        echo " ".$res['i_suffix_name'];
                                    }
                                    ?>
                                    </span>
                                </strong>
                            </div>
                       </div>
                       <div class="text_stretch">
                            <div class="text_tag">
                                <small><i>Name of Student Trainee</i></small>
                            </div>
                       </div>
                    </div>
                    <div class="col-2">
                    </div>
                    <div class="col-4">
                       <div class="text_stretch">
                            <div class="text_underline">
                                <strong>
                                    <span>
                                    <?php echo $res['eb_course_code'].$res['eb_year'].$res['eb_section']; ?>
                                    </span>
                                </strong>
                            </div>
                       </div>
                       <div class="text_stretch">
                            <div class="text_tag">
                                <small><i>Course/Year/Section </i></small>
                            </div>
                       </div>
                    </div>
                </div>

                <div class="row pb-3">
                    <div class="col-6">
                       <div class="text_stretch">
                            <div class="text_underline">
                                <strong>
                                    <span>
                                    <?php 
                                    echo $res['s_office'].", ".$res['s_agency'];
                                    ?>
                                    </span>
                                </strong>
                            </div>
                       </div>
                       <div class="text_stretch">
                            <div class="text_tag">
                                <small><i>Company/Training Station</i></small>
                            </div>
                       </div>
                    </div>
                    <div class="col-2">
                    </div>
                    <div class="col-4">
                       <div class="text_stretch">
                            <div class="text_underline">
                                <strong>
                                    <span>
                                    <?php echo date("F Y", strtotime($res['cf_start_date']))." - ".date("F Y"); ?>
                                    </span>
                                </strong>
                            </div>
                       </div>
                       <div class="text_stretch">
                            <div class="text_tag">
                                <small><i>Month/Period </i></small>
                            </div>
                       </div>
                    </div>
                </div>

                <span class="doc_indent">
                    <strong>Note: </strong>
                    Trainer will indicate the rating for each applicable item by encircling the appropriate number using the rating scale below:
                </span>

                <br><br>

                <table width="100%" class="rating_tbl">
                    <tr width="100%">
                        <td width="60%" class="text-center">
                            <span><strong>OBSERVE BEHAVIOR</strong></span>
                        </td>
                        <td width="40%">
                            <table width="100%">
                                <tr width="100%">
                                    <td colspan="5" class="text-center">
                                        <strong>RATING SCALE</strong>
                                    </td>
                                </tr>
                                <tr width="100%" class="text-center">
                                    <td width="15%"><strong>Poor</strong></td>
                                    <td width="15%"><strong>Fair</strong></td>
                                    <td width="15%"><strong>Good</strong></td>
                                    <td width="30%"><strong>Very Good</strong></td>
                                    <td width="25%"><strong>Excellent</strong></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="60%" class="text-left px-2">
                            <span><strong>1. Attends regularly</strong></span>
                        </td>
                        <td width="40%">
                            <table width="100%">
                                <tr width="100%" class="text-center">
                                    <td width="15%"><strong>1</strong></td>
                                    <td width="15%"><strong>2</strong></td>
                                    <td width="15%"><strong>3</strong></td>
                                    <td width="30%"><strong>4</strong></td>
                                    <td width="25%"><strong>5</strong></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="60%" class="text-left px-2">
                            <span><strong>2. Starts the work promptly</strong></span>
                        </td>
                        <td width="40%">
                            <table width="100%">
                                <tr width="100%" class="text-center">
                                    <td width="15%"><strong>1</strong></td>
                                    <td width="15%"><strong>2</strong></td>
                                    <td width="15%"><strong>3</strong></td>
                                    <td width="30%"><strong>4</strong></td>
                                    <td width="25%"><strong>5</strong></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="60%" class="text-left px-2">
                            <span><strong>3. Courteous and Considerate</strong></span>
                        </td>
                        <td width="40%">
                            <table width="100%">
                                <tr width="100%" class="text-center">
                                    <td width="15%"><strong>1</strong></td>
                                    <td width="15%"><strong>2</strong></td>
                                    <td width="15%"><strong>3</strong></td>
                                    <td width="30%"><strong>4</strong></td>
                                    <td width="25%"><strong>5</strong></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="60%" class="text-left px-2">
                            <span><strong>4. Express his/her ideas well</strong></span>
                        </td>
                        <td width="40%">
                            <table width="100%">
                                <tr width="100%" class="text-center">
                                    <td width="15%"><strong>1</strong></td>
                                    <td width="15%"><strong>2</strong></td>
                                    <td width="15%"><strong>3</strong></td>
                                    <td width="30%"><strong>4</strong></td>
                                    <td width="25%"><strong>5</strong></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="60%" class="text-left px-2">
                            <span><strong>5. Listen attentively to trainer</strong></span>
                        </td>
                        <td width="40%">
                            <table width="100%">
                                <tr width="100%" class="text-center">
                                    <td width="15%"><strong>1</strong></td>
                                    <td width="15%"><strong>2</strong></td>
                                    <td width="15%"><strong>3</strong></td>
                                    <td width="30%"><strong>4</strong></td>
                                    <td width="25%"><strong>5</strong></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="60%" class="text-left px-2">
                            <span><strong>6. Display interest in his/her work</strong></span>
                        </td>
                        <td width="40%">
                            <table width="100%">
                                <tr width="100%" class="text-center">
                                    <td width="15%"><strong>1</strong></td>
                                    <td width="15%"><strong>2</strong></td>
                                    <td width="15%"><strong>3</strong></td>
                                    <td width="30%"><strong>4</strong></td>
                                    <td width="25%"><strong>5</strong></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="60%" class="text-left px-2">
                            <span><strong>7. Careful in handling office facilities and equipment</strong></span>
                        </td>
                        <td width="40%">
                            <table width="100%">
                                <tr width="100%" class="text-center">
                                    <td width="15%"><strong>1</strong></td>
                                    <td width="15%"><strong>2</strong></td>
                                    <td width="15%"><strong>3</strong></td>
                                    <td width="30%"><strong>4</strong></td>
                                    <td width="25%"><strong>5</strong></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="60%" class="text-left px-2">
                            <span><strong>8. Works to the best of his/her ability</strong></span>
                        </td>
                        <td width="40%">
                            <table width="100%">
                                <tr width="100%" class="text-center">
                                    <td width="15%"><strong>1</strong></td>
                                    <td width="15%"><strong>2</strong></td>
                                    <td width="15%"><strong>3</strong></td>
                                    <td width="30%"><strong>4</strong></td>
                                    <td width="25%"><strong>5</strong></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="60%" class="text-left px-2">
                            <span><strong>9. Works to develop a variety of skills</strong></span>
                        </td>
                        <td width="40%">
                            <table width="100%">
                                <tr width="100%" class="text-center">
                                    <td width="15%"><strong>1</strong></td>
                                    <td width="15%"><strong>2</strong></td>
                                    <td width="15%"><strong>3</strong></td>
                                    <td width="30%"><strong>4</strong></td>
                                    <td width="25%"><strong>5</strong></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="60%" class="text-left px-2">
                            <span><strong>10. Cooperates well with others</strong></span>
                        </td>
                        <td width="40%">
                            <table width="100%">
                                <tr width="100%" class="text-center">
                                    <td width="15%"><strong>1</strong></td>
                                    <td width="15%"><strong>2</strong></td>
                                    <td width="15%"><strong>3</strong></td>
                                    <td width="30%"><strong>4</strong></td>
                                    <td width="25%"><strong>5</strong></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="60%" class="text-left px-2">
                            <span><strong>11. Is generally a good follower</strong></span>
                        </td>
                        <td width="40%">
                            <table width="100%">
                                <tr width="100%" class="text-center">
                                    <td width="15%"><strong>1</strong></td>
                                    <td width="15%"><strong>2</strong></td>
                                    <td width="15%"><strong>3</strong></td>
                                    <td width="30%"><strong>4</strong></td>
                                    <td width="25%"><strong>5</strong></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="60%" class="text-left px-2">
                            <span><strong>12. Accepts responsibility</strong></span>
                        </td>
                        <td width="40%">
                            <table width="100%">
                                <tr width="100%" class="text-center">
                                    <td width="15%"><strong>1</strong></td>
                                    <td width="15%"><strong>2</strong></td>
                                    <td width="15%"><strong>3</strong></td>
                                    <td width="30%"><strong>4</strong></td>
                                    <td width="25%"><strong>5</strong></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="60%" class="text-left px-2">
                            <span><strong>13. Volunteers for an assignment</strong></span>
                        </td>
                        <td width="40%">
                            <table width="100%">
                                <tr width="100%" class="text-center">
                                    <td width="15%"><strong>1</strong></td>
                                    <td width="15%"><strong>2</strong></td>
                                    <td width="15%"><strong>3</strong></td>
                                    <td width="30%"><strong>4</strong></td>
                                    <td width="25%"><strong>5</strong></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="60%" class="text-left px-2">
                            <span><strong>14. Makes worth with suggestion</strong></span>
                        </td>
                        <td width="40%">
                            <table width="100%">
                                <tr width="100%" class="text-center">
                                    <td width="15%"><strong>1</strong></td>
                                    <td width="15%"><strong>2</strong></td>
                                    <td width="15%"><strong>3</strong></td>
                                    <td width="30%"><strong>4</strong></td>
                                    <td width="25%"><strong>5</strong></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="60%" class="text-left px-2">
                            <span><strong>15. Exhibits orderly/safe working habits</strong></span>
                        </td>
                        <td width="40%">
                            <table width="100%">
                                <tr width="100%" class="text-center">
                                    <td width="15%"><strong>1</strong></td>
                                    <td width="15%"><strong>2</strong></td>
                                    <td width="15%"><strong>3</strong></td>
                                    <td width="30%"><strong>4</strong></td>
                                    <td width="25%"><strong>5</strong></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="60%" class="text-left px-2">
                            <span><strong>16. Applies principles to actual work station</strong></span>
                        </td>
                        <td width="40%">
                            <table width="100%">
                                <tr width="100%" class="text-center">
                                    <td width="15%"><strong>1</strong></td>
                                    <td width="15%"><strong>2</strong></td>
                                    <td width="15%"><strong>3</strong></td>
                                    <td width="30%"><strong>4</strong></td>
                                    <td width="25%"><strong>5</strong></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="60%" class="text-left px-2">
                            <span><strong>17. Knowledge in assigned job proceedings</strong></span>
                        </td>
                        <td width="40%">
                            <table width="100%">
                                <tr width="100%" class="text-center">
                                    <td width="15%"><strong>1</strong></td>
                                    <td width="15%"><strong>2</strong></td>
                                    <td width="15%"><strong>3</strong></td>
                                    <td width="30%"><strong>4</strong></td>
                                    <td width="25%"><strong>5</strong></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="60%" class="text-left px-2">
                            <span><strong>18. Ability to plan activities</strong></span>
                        </td>
                        <td width="40%">
                            <table width="100%">
                                <tr width="100%" class="text-center">
                                    <td width="15%"><strong>1</strong></td>
                                    <td width="15%"><strong>2</strong></td>
                                    <td width="15%"><strong>3</strong></td>
                                    <td width="30%"><strong>4</strong></td>
                                    <td width="25%"><strong>5</strong></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="60%" class="text-left px-2">
                            <span><strong>19. Initiative/Resourcefulness</strong></span>
                        </td>
                        <td width="40%">
                            <table width="100%">
                                <tr width="100%" class="text-center">
                                    <td width="15%"><strong>1</strong></td>
                                    <td width="15%"><strong>2</strong></td>
                                    <td width="15%"><strong>3</strong></td>
                                    <td width="30%"><strong>4</strong></td>
                                    <td width="25%"><strong>5</strong></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="60%" class="text-left px-2">
                            <span><strong>20. Judgment and common sense</strong></span>
                        </td>
                        <td width="40%">
                            <table width="100%">
                                <tr width="100%" class="text-center">
                                    <td width="15%"><strong>1</strong></td>
                                    <td width="15%"><strong>2</strong></td>
                                    <td width="15%"><strong>3</strong></td>
                                    <td width="30%"><strong>4</strong></td>
                                    <td width="25%"><strong>5</strong></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="60%" class="text-left px-2">
                            <span><strong>21. Interest and good attitude towards work</strong></span>
                        </td>
                        <td width="40%">
                            <table width="100%">
                                <tr width="100%" class="text-center">
                                    <td width="15%"><strong>1</strong></td>
                                    <td width="15%"><strong>2</strong></td>
                                    <td width="15%"><strong>3</strong></td>
                                    <td width="30%"><strong>4</strong></td>
                                    <td width="25%"><strong>5</strong></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="60%" class="text-left px-2">
                            <span><strong>22. Prepare report accurately</strong></span>
                        </td>
                        <td width="40%">
                            <table width="100%">
                                <tr width="100%" class="text-center">
                                    <td width="15%"><strong>1</strong></td>
                                    <td width="15%"><strong>2</strong></td>
                                    <td width="15%"><strong>3</strong></td>
                                    <td width="30%"><strong>4</strong></td>
                                    <td width="25%"><strong>5</strong></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="60%" class="text-left px-2">
                            <span><strong>23. Submits reports on time</strong></span>
                        </td>
                        <td width="40%">
                            <table width="100%">
                                <tr width="100%" class="text-center">
                                    <td width="15%"><strong>1</strong></td>
                                    <td width="15%"><strong>2</strong></td>
                                    <td width="15%"><strong>3</strong></td>
                                    <td width="30%"><strong>4</strong></td>
                                    <td width="25%"><strong>5</strong></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>

                <br>

                <span>
                    <strong>
                        Computations of Trainees in-Plant Performance Grade:
                    </strong>
                </span>
                
                <br>

                <table width="100%" class="info_tbl">
                    <tr width="100%">
                        <td width="50%">
                                <span><strong>Mean</strong> = <u>Sum of the Ratings of all the Criteria</u></span>
                                <br>
                                <span class="pl-5 ml-5">Number of Items in IPPE</span>
                        </td>
                        <td width="50%">
                            <div style="width: 310px;">
                                <div class="text_stretch pb-2">
                                    <strong>Mean Interval:</strong>
                                    <div class="text_underline">
                                        <span> </span>
                                    </div>
                                </div>

                                <div class="text_stretch pb-2">
                                    <strong>Equivalent:</strong>
                                    <div class="text_underline">
                                        <span> </span>
                                    </div>
                                </div>

                                <div class="text_stretch pb-2">
                                    <strong>Final Grade:</strong>
                                    <div class="text_underline">
                                        <span> </span>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>

                <br>
                
                <table width="100%" class="info_tbl">
                    <tr width="100%">
                        <td width="50%" style="padding-bottom: 30px;">
                            <span>Rated by:</span>
                            <br><br><br>
                            <span class="doc_signature">
                            <?php 
                            echo strtoupper($res['tr_first_name'])." ";
                            if($res['tr_middle_name'] != ''){
                                echo strtoupper(substr($res['tr_middle_name'], 0, 1)).". ";
                            }
                            echo strtoupper($res['tr_last_name']); 
                            if($res['tr_suffix_name'] != ''){
                                echo " ".$res['tr_suffix_name'];
                            }
                            ?>
                            </span>
                            <br>
                            <span>Office Trainer</span>

                            <br>
                                
                            <div style="width: 150px; margin-top: 5px;">
                                <div class="text_stretch">
                                    <span>Date:</span> 
                                    <div class="text_underline">
                                        <span style="color: transparent;">.</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td width="50%" style="padding-bottom: 30px;">
                            <span>Noted by:</span>
                            <br><br><br>
                            <span class="doc_signature">
                            <?php 
                            echo strtoupper($res['s_first_name'])." ";
                            if($res['s_middle_name'] != ''){
                                echo strtoupper(substr($res['s_middle_name'], 0, 1)).". ";
                            }
                            echo strtoupper($res['s_last_name']); 
                            if($res['s_suffix_name'] != ''){
                                echo " ".$res['s_suffix_name'];
                            }
                            if($res['s_extension'] != ''){
                                echo ", ".$res['s_extension'];
                            }
                            ?>
                            </span>
                            <br>
                            <span>Supervisor/Office Head</span>

                            <br>
                                
                            <div style="width: 150px; margin-top: 5px;">
                                <div class="text_stretch">
                                    <span>Date:</span> 
                                    <div class="text_underline">
                                        <span style="color: transparent;">.</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr width="100%">
                        <td width="50%">
                            <span>Acknowledge by:</span>
                            <br><br><br>
                            <span class="doc_signature">
                            <?php 
                            echo strtoupper($res['i_first_name'])." ";
                            if($res['i_middle_name'] != ''){
                                echo strtoupper(substr($res['i_middle_name'], 0, 1)).". ";
                            }
                            echo strtoupper($res['i_last_name']); 
                            if($res['i_suffix_name'] != ''){
                                echo " ".$res['i_suffix_name'];
                            }
                            ?>
                            </span>
                            <br>
                            <span>Student Name</span>

                            <br>
                                
                            <div style="width: 150px; margin-top: 5px;">
                                <div class="text_stretch">
                                    <span>Date:</span> 
                                    <div class="text_underline">
                                        <span style="color: transparent;">.</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td width="50%">
                            <span></span>
                            <br><br><br>
                            <span class="doc_signature">
                            <?php echo strtoupper($res['em_guardian']); ?>
                            </span>
                            <br>
                            <span>Guardian</span>

                            <br>
                                
                            <div style="width: 150px; margin-top: 5px;">
                                <div class="text_stretch">
                                    <span>Date:</span> 
                                    <div class="text_underline">
                                        <span style="color: transparent;">.</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>


            </div>

            <!-- <div class="col-lg-12 doc_footer text-center pt-5">
                <img src="../../assets/header/doc-footer.png" alt="">
            </div> -->
        </div>

    </div>
    <?php include("include/script.php"); ?>
    <script>

    </script>
</body>
</html>
