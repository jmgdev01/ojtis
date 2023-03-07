<?php
 if (isset($_POST['btn_save'])) {
    $profile_image = $_POST['profile_image'];
    $a_fullname = $_POST['a_fullname'];
    $a_mobile = $_POST['a_mobile'];
    $acc_email_address = $_POST['acc_email_address'];
    $acc_password = $_POST['acc_password'];
    $acc_role = "admin";
    $acc_date_reg = date("Y-m-d");

    date_default_timezone_set("Asia/Manila"); 
    $sql_init = mysqli_query($db, "SELECT MAX(a_id+1) AS max_i_id FROM admin_tbl");
    $i_init = mysqli_fetch_assoc($sql_init);

    $max_id = '';
    if(strlen($i_init['max_i_id']) == 0) {
        $max_id .= '0001';
    }elseif(strlen($i_init['max_i_id']) == 1) {
        $max_id .= '000'.$i_init['max_i_id'];
    }elseif(strlen($i_init['max_i_id']) == 2) {
        $max_id .= '00'.$i_init['max_i_id'];
    }elseif(strlen($i_init['max_i_id']) == 3) {
        $max_id .= '0'.$i_init['max_i_id'];
    }elseif(strlen($i_init['max_i_id']) == 4) {
        $max_id .= $i_init['max_i_id'];
    }

    $a_code = "A_".date("ymd")."_".$max_id;

    $file_name = $_FILES['profile_image']['name'];
    $file_tmp = $_FILES['profile_image']['tmp_name'];
    $pi = $_POST['pi'];
 
      if (empty($a_fullname) || empty($a_mobile) || empty($acc_email_address) || empty($acc_password) || empty($pi) && empty($file_name)) {

        echo "<div id='msg_alert' class='alert bg-danger alert-dismissible fade show' role='alert'>
                All fields are required!
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
              </div>";

      } else {
        $email_regex = "/([a-zA-Z0-9!#$%&’?^_`~-])+@([a-zA-Z0-9-])+(.com)+/";
        if(preg_match($email_regex, $acc_email_address)) {

            move_uploaded_file($file_tmp, "../../assets/profile/admin/" . $file_name);
            $img_store = "../../assets/profile/admin/" . $_FILES['profile_image']['name'];

            $image = '';
            if($file_name != '') {
                $image = $img_store;
            } else {
                $image = $pi;
            }

            $sql = mysqli_query($db, "SELECT * FROM admin_tbl INNER JOIN accounts_tbl ON admin_tbl.a_id = accounts_tbl.a_id WHERE accounts_tbl.acc_email_address='$acc_email_address'");

            if(mysqli_num_rows($sql) > 0) {
                echo "<div id='msg_alert' class='alert bg-danger alert-dismissible fade show' role='alert'>
                    User already exist.
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";  
            } else {
                $sql1 = mysqli_query($db, "INSERT INTO admin_tbl (a_code, a_fullname, a_img, a_mobile) VALUES ('$a_code', '$a_fullname', '$image', '$a_mobile')");

                $sql2 = mysqli_query($db, "SELECT * FROM admin_tbl WHERE a_code='$a_code'");
                $res2 = mysqli_fetch_assoc($sql2);
                $insert_a_code = $res2['a_id'];

                $sql3 = mysqli_query($db, "INSERT INTO accounts_tbl (acc_email_address, acc_password, acc_role, a_id, acc_date_reg) VALUES ('$acc_email_address','$acc_password', '$acc_role', '$insert_a_code', '$acc_date_reg')");

                echo "<div id='msg_alert' class='alert bg-success alert-dismissible fade show' role='alert'>
                        User added successfully!
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>"; 
            }
        } else {
            echo "<div id='msg_alert' class='alert bg-danger alert-dismissible fade show' role='alert'>
                    Invalid email address!
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
        }
      } 
 }
?>