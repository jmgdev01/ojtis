<?php
 if (isset($_POST['btn_save'])) {
     $cf_subject_code = $_POST['cf_subject_code'];
     $cf_subject = $_POST['cf_subject'];
     $cf_hours = $_POST['cf_hours'];
     $cf_hours_inwords = $_POST['cf_hours_inwords'];
     $cf_week_equivalent = $_POST['cf_week_equivalent'];
     $cf_speriod = $_POST['cf_speriod'];
     $cf_eperiod = $_POST['cf_eperiod'];
     $cf_address = $_POST['cf_address'];
     $cf_school = $_POST['cf_school'];
     $cf_campus = $_POST['cf_campus'];
     $cf_department = $_POST['cf_department'];
     $cf_program = $_POST['cf_program'];
 
     if (empty($cf_subject) || empty($cf_subject_code) || empty($cf_hours) || empty($cf_hours_inwords) || empty($cf_week_equivalent)|| empty($cf_speriod)|| empty($cf_eperiod)|| empty($cf_address)|| empty($cf_campus)|| empty($cf_school)|| empty($cf_department)|| empty($cf_program)) {

        // Alert if text fields are empty
        echo "<div id='msg_alert' class='alert bg-danger alert-dismissible fade show' role='alert'>
                All fields are required!
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
              </div>";
      } else {

         // Query for configuration update
         $sql1 = mysqli_query($db, "INSERT INTO configuration_tbl 
          (cf_subject, 
          cf_subject_code,
          cf_hours, 
          cf_hours_inwords, 
          cf_week_equivalent, 
          cf_speriod, 
          cf_eperiod, 
          cf_address, 
          cf_campus, 
          cf_school, 
          cf_department, 
          cf_program)
          VALUES
          ('$cf_subject', 
          '$cf_subject_code',
          '$cf_hours',
          '$cf_hours_inwords',
          '$cf_week_equivalent',
          '$cf_speriod',
          '$cf_eperiod',
          '$cf_address',
          '$cf_campus',
          '$cf_school',
          '$cf_department',
          '$cf_program'
          )
          ");
 
         // Alert if the query is successful
         echo "<div id='msg_alert' class='alert bg-success alert-dismissible fade show' role='alert'>
                 Configuration added successfully!
                 <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                     <span aria-hidden='true'>&times;</span>
                 </button>
               </div>"; 
      } 
 }
?>