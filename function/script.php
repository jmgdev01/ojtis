<script src="assets/js/jquery/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery/jquery3.dataTables.min.js"></script>
<script src="assets/js/jquery/dataTables.bootstrap4.min.js"></script>
<script src="assets/datatables/demo/datatables-demo.js"></script>
<script src="assets/js/qrcode/jquery-qrcode.js"></script>
<script>
    $(document).ready(function() {
        $('#btn_next1').click(function(){
            $("#pi_tab").removeClass('active');
            $("#aci_tab").addClass('active');

            $("#address_contact_info").addClass('active');
            $("#address_contact_info").addClass('show');

            $("#personal_info").removeClass('active');
            $("#personal_info").removeClass('show');
            $("#cases_details").removeClass('active');
            $("#cases_details").removeClass('show');
            $("#parent_info").removeClass('active');
            $("#parent_info").removeClass('show');
            $("#educational_background").removeClass('active');
            $("#educational_background").removeClass('show');
            $("#skills_training").removeClass('active');
            $("#skills_training").removeClass('show');
            $("#work_experience_membership").removeClass('active');
            $("#work_experience_membership").removeClass('show');
            $("#emergency").removeClass('active');
            $("#emergency").removeClass('show');
            $("#character_reference").removeClass('active');
            $("#character_reference").removeClass('show');
            $("#account").removeClass('active');
            $("#account").removeClass('show');
            
        });
        $('#btn_previous2').click(function(){
            $("#aci_tab").removeClass('active');
            $("#pi_tab").addClass('active');

            $("#personal_info").addClass('active');
            $("#personal_info").addClass('show');

            $("#cases_details").removeClass('active');
            $("#cases_details").removeClass('show');
            $("#address_contact_info").removeClass('active');
            $("#address_contact_info").removeClass('show');
            $("#parent_info").removeClass('active');
            $("#parent_info").removeClass('show');
            $("#educational_background").removeClass('active');
            $("#educational_background").removeClass('show');
            $("#skills_training").removeClass('active');
            $("#skills_training").removeClass('show');
            $("#work_experience_membership").removeClass('active');
            $("#work_experience_membership").removeClass('show');
            $("#emergency").removeClass('active');
            $("#emergency").removeClass('show');
            $("#character_reference").removeClass('active');
            $("#character_reference").removeClass('show');
            $("#account").removeClass('active');
            $("#account").removeClass('show');
            
        });
        $('#btn_next2').click(function(){
            $("#aci_tab").removeClass('active');
            $("#cd_tab").addClass('active');

            $("#cases_details").addClass('active');
            $("#cases_details").addClass('show');

            $("#personal_info").removeClass('active');
            $("#personal_info").removeClass('show');
            $("#address_contact_info").removeClass('active');
            $("#address_contact_info").removeClass('show');
            $("#parent_info").removeClass('active');
            $("#parent_info").removeClass('show');
            $("#educational_background").removeClass('active');
            $("#educational_background").removeClass('show');
            $("#skills_training").removeClass('active');
            $("#skills_training").removeClass('show');
            $("#work_experience_membership").removeClass('active');
            $("#work_experience_membership").removeClass('show');
            $("#emergency").removeClass('active');
            $("#emergency").removeClass('show');
            $("#character_reference").removeClass('active');
            $("#character_reference").removeClass('show');
            $("#account").removeClass('active');
            $("#account").removeClass('show');
            
        });
        $('#btn_previous3').click(function(){
            $("#cd_tab").removeClass('active');
            $("#aci_tab").addClass('active');

            $("#address_contact_info").addClass('active');
            $("#address_contact_info").addClass('show');

            $("#cases_details").removeClass('active');
            $("#cases_details").removeClass('show');
            $("#personal_info").removeClass('active');
            $("#personal_info").removeClass('show');
            $("#parent_info").removeClass('active');
            $("#parent_info").removeClass('show');
            $("#educational_background").removeClass('active');
            $("#educational_background").removeClass('show');
            $("#skills_training").removeClass('active');
            $("#skills_training").removeClass('show');
            $("#work_experience_membership").removeClass('active');
            $("#work_experience_membership").removeClass('show');
            $("#emergency").removeClass('active');
            $("#emergency").removeClass('show');
            $("#character_reference").removeClass('active');
            $("#character_reference").removeClass('show');
            $("#account").removeClass('active');
            $("#account").removeClass('show');
            
        });
        $('#btn_next3').click(function(){
            $("#cd_tab").removeClass('active');
            $("#pr_tab").addClass('active');

            $("#parent_info").addClass('active');
            $("#parent_info").addClass('show');

            $("#personal_info").removeClass('active');
            $("#personal_info").removeClass('show');
            $("#address_contact_info").removeClass('active');
            $("#address_contact_info").removeClass('show');
            $("#cases_details").removeClass('active');
            $("#cases_details").removeClass('show');
            $("#educational_background").removeClass('active');
            $("#educational_background").removeClass('show');
            $("#skills_training").removeClass('active');
            $("#skills_training").removeClass('show');
            $("#work_experience_membership").removeClass('active');
            $("#work_experience_membership").removeClass('show');
            $("#emergency").removeClass('active');
            $("#emergency").removeClass('show');
            $("#character_reference").removeClass('active');
            $("#character_reference").removeClass('show');
            $("#account").removeClass('active');
            $("#account").removeClass('show');
            
        });
        $('#btn_previous4').click(function(){
            $("#pr_tab").removeClass('active');
            $("#cd_tab").addClass('active');

            $("#cases_details").addClass('active');
            $("#cases_details").addClass('show');

            $("#address_contact_info").removeClass('active');
            $("#address_contact_info").removeClass('show');
            $("#personal_info").removeClass('active');
            $("#personal_info").removeClass('show');
            $("#parent_info").removeClass('active');
            $("#parent_info").removeClass('show');
            $("#educational_background").removeClass('active');
            $("#educational_background").removeClass('show');
            $("#skills_training").removeClass('active');
            $("#skills_training").removeClass('show');
            $("#work_experience_membership").removeClass('active');
            $("#work_experience_membership").removeClass('show');
            $("#emergency").removeClass('active');
            $("#emergency").removeClass('show');
            $("#character_reference").removeClass('active');
            $("#character_reference").removeClass('show');
            $("#account").removeClass('active');
            $("#account").removeClass('show');
            
        });
        $('#btn_next4').click(function(){
            $("#pr_tab").removeClass('active');
            $("#eb_tab").addClass('active');

            $("#educational_background").addClass('active');
            $("#educational_background").addClass('show');

            $("#personal_info").removeClass('active');
            $("#personal_info").removeClass('show');
            $("#address_contact_info").removeClass('active');
            $("#address_contact_info").removeClass('show');
            $("#cases_details").removeClass('active');
            $("#cases_details").removeClass('show');
            $("#parent_info").removeClass('active');
            $("#parent_info").removeClass('show');
            $("#skills_training").removeClass('active');
            $("#skills_training").removeClass('show');
            $("#work_experience_membership").removeClass('active');
            $("#work_experience_membership").removeClass('show');
            $("#emergency").removeClass('active');
            $("#emergency").removeClass('show');
            $("#character_reference").removeClass('active');
            $("#character_reference").removeClass('show');
            $("#account").removeClass('active');
            $("#account").removeClass('show');
        });
        $('#btn_previous5').click(function(){
            $("#eb_tab").removeClass('active');
            $("#pr_tab").addClass('active');

            $("#parent_info").addClass('active');
            $("#parent_info").addClass('show');

            $("#address_contact_info").removeClass('active');
            $("#address_contact_info").removeClass('show');
            $("#personal_info").removeClass('active');
            $("#personal_info").removeClass('show');
            $("#cases_details").removeClass('active');
            $("#cases_details").removeClass('show');
            $("#educational_background").removeClass('active');
            $("#educational_background").removeClass('show');
            $("#skills_training").removeClass('active');
            $("#skills_training").removeClass('show');
            $("#work_experience_membership").removeClass('active');
            $("#work_experience_membership").removeClass('show');
            $("#emergency").removeClass('active');
            $("#emergency").removeClass('show');
            $("#character_reference").removeClass('active');
            $("#character_reference").removeClass('show');
            $("#account").removeClass('active');
            $("#account").removeClass('show');
        });
        $('#btn_next5').click(function(){
            $("#eb_tab").removeClass('active');
            $("#st_tab").addClass('active');

            $("#skills_training").addClass('active');
            $("#skills_training").addClass('show');

            $("#personal_info").removeClass('active');
            $("#personal_info").removeClass('show');
            $("#address_contact_info").removeClass('active');
            $("#address_contact_info").removeClass('show');
            $("#cases_details").removeClass('active');
            $("#cases_details").removeClass('show');
            $("#parent_info").removeClass('active');
            $("#parent_info").removeClass('show');
            $("#educational_background").removeClass('active');
            $("#educational_background").removeClass('show');
            $("#work_experience_membership").removeClass('active');
            $("#work_experience_membership").removeClass('show');
            $("#emergency").removeClass('active');
            $("#emergency").removeClass('show');
            $("#character_reference").removeClass('active');
            $("#character_reference").removeClass('show');
            $("#account").removeClass('active');
            $("#account").removeClass('show');
        });
        $('#btn_previous6').click(function(){
            $("#st_tab").removeClass('active');
            $("#eb_tab").addClass('active');

            $("#educational_background").addClass('active');
            $("#educational_background").addClass('show');

            $("#address_contact_info").removeClass('active');
            $("#address_contact_info").removeClass('show');
            $("#personal_info").removeClass('active');
            $("#personal_info").removeClass('show');
            $("#cases_details").removeClass('active');
            $("#cases_details").removeClass('show');
            $("#parent_info").removeClass('active');
            $("#parent_info").removeClass('show');
            $("#skills_training").removeClass('active');
            $("#skills_training").removeClass('show');
            $("#work_experience_membership").removeClass('active');
            $("#work_experience_membership").removeClass('show');
            $("#emergency").removeClass('active');
            $("#emergency").removeClass('show');
            $("#character_reference").removeClass('active');
            $("#character_reference").removeClass('show');
            $("#account").removeClass('active');
            $("#account").removeClass('show');
        });
        $('#btn_next6').click(function(){
            $("#st_tab").removeClass('active');
            $("#we_tab").addClass('active');

            $("#work_experience_membership").addClass('active');
            $("#work_experience_membership").addClass('show');

            $("#personal_info").removeClass('active');
            $("#personal_info").removeClass('show');
            $("#address_contact_info").removeClass('active');
            $("#address_contact_info").removeClass('show');
            $("#cases_details").removeClass('active');
            $("#cases_details").removeClass('show');
            $("#parent_info").removeClass('active');
            $("#parent_info").removeClass('show');
            $("#educational_background").removeClass('active');
            $("#educational_background").removeClass('show');
            $("#skills_training").removeClass('active');
            $("#skills_training").removeClass('show');
            $("#character_reference").removeClass('active');
            $("#character_reference").removeClass('show');
            $("#account").removeClass('active');
            $("#account").removeClass('show');
        });
        $('#btn_previous7').click(function(){
            $("#we_tab").removeClass('active');
            $("#st_tab").addClass('active');

            $("#skills_training").addClass('active');
            $("#skills_training").addClass('show');

            $("#address_contact_info").removeClass('active');
            $("#address_contact_info").removeClass('show');
            $("#personal_info").removeClass('active');
            $("#personal_info").removeClass('show');
            $("#cases_details").removeClass('active');
            $("#cases_details").removeClass('show');
            $("#parent_info").removeClass('active');
            $("#parent_info").removeClass('show');
            $("#educational_background").removeClass('active');
            $("#educational_background").removeClass('show');
            $("#work_experience_membership").removeClass('active');
            $("#work_experience_membership").removeClass('show');
            $("#emergency").removeClass('active');
            $("#emergency").removeClass('show');
            $("#character_reference").removeClass('active');
            $("#character_reference").removeClass('show');
            $("#account").removeClass('active');
            $("#account").removeClass('show');
        });
        $('#btn_next7').click(function(){
            $("#we_tab").removeClass('active');
            $("#em_tab").addClass('active');

            $("#emergency").addClass('active');
            $("#emergency").addClass('show');

            $("#personal_info").removeClass('active');
            $("#personal_info").removeClass('show');
            $("#address_contact_info").removeClass('active');
            $("#address_contact_info").removeClass('show');
            $("#cases_details").removeClass('active');
            $("#cases_details").removeClass('show');
            $("#parent_info").removeClass('active');
            $("#parent_info").removeClass('show');
            $("#educational_background").removeClass('active');
            $("#educational_background").removeClass('show');
            $("#skills_training").removeClass('active');
            $("#skills_training").removeClass('show');
            $("#work_experience_membership").removeClass('active');
            $("#work_experience_membership").removeClass('show');
            $("#character_reference").removeClass('active');
            $("#character_reference").removeClass('show');
            $("#account").removeClass('active');
            $("#account").removeClass('show');
        });
        $('#btn_previous8').click(function(){
            $("#em_tab").removeClass('active');
            $("#we_tab").addClass('active');

            $("#work_experience_membership").addClass('active');
            $("#work_experience_membership").addClass('show');

            $("#address_contact_info").removeClass('active');
            $("#address_contact_info").removeClass('show');
            $("#personal_info").removeClass('active');
            $("#personal_info").removeClass('show');
            $("#cases_details").removeClass('active');
            $("#cases_details").removeClass('show');
            $("#parent_info").removeClass('active');
            $("#parent_info").removeClass('show');
            $("#educational_background").removeClass('active');
            $("#educational_background").removeClass('show');
            $("#skills_training").removeClass('active');
            $("#skills_training").removeClass('show');
            $("#emergency").removeClass('active');
            $("#emergency").removeClass('show');
            $("#character_reference").removeClass('active');
            $("#character_reference").removeClass('show');
            $("#account").removeClass('active');
            $("#account").removeClass('show');
        });
        $('#btn_next8').click(function(){
            $("#em_tab").removeClass('active');
            $("#cr_tab").addClass('active');

            $("#character_reference").addClass('active');
            $("#character_reference").addClass('show');

            $("#personal_info").removeClass('active');
            $("#personal_info").removeClass('show');
            $("#address_contact_info").removeClass('active');
            $("#address_contact_info").removeClass('show');
            $("#cases_details").removeClass('active');
            $("#cases_details").removeClass('show');
            $("#parent_info").removeClass('active');
            $("#parent_info").removeClass('show');
            $("#educational_background").removeClass('active');
            $("#educational_background").removeClass('show');
            $("#skills_training").removeClass('active');
            $("#skills_training").removeClass('show');
            $("#work_experience_membership").removeClass('active');
            $("#work_experience_membership").removeClass('show');
            $("#account").removeClass('active');
            $("#account").removeClass('show');
            $("#emergency").removeClass('active');
            $("#emergency").removeClass('show');
        });
        $('#btn_previous9').click(function(){
            $("#cr_tab").removeClass('active');
            $("#em_tab").addClass('active');

            $("#emergency").addClass('active');
            $("#emergency").addClass('show');

            $("#address_contact_info").removeClass('active');
            $("#address_contact_info").removeClass('show');
            $("#personal_info").removeClass('active');
            $("#personal_info").removeClass('show');
            $("#cases_details").removeClass('active');
            $("#cases_details").removeClass('show');
            $("#parent_info").removeClass('active');
            $("#parent_info").removeClass('show');
            $("#educational_background").removeClass('active');
            $("#educational_background").removeClass('show');
            $("#skills_training").removeClass('active');
            $("#skills_training").removeClass('show');
            $("#work_experience_membership").removeClass('active');
            $("#work_experience_membership").removeClass('show');
            $("#character_reference").removeClass('active');
            $("#character_reference").removeClass('show');
            $("#account").removeClass('active');
            $("#account").removeClass('show');
        });
        $('#btn_next9').click(function(){
            $("#cr_tab").removeClass('active');
            $("#ac_tab").addClass('active');

            $("#account").addClass('active');
            $("#account").addClass('show');

            $("#personal_info").removeClass('active');
            $("#personal_info").removeClass('show');
            $("#address_contact_info").removeClass('active');
            $("#address_contact_info").removeClass('show');
            $("#cases_details").removeClass('active');
            $("#cases_details").removeClass('show');
            $("#parent_info").removeClass('active');
            $("#parent_info").removeClass('show');
            $("#educational_background").removeClass('active');
            $("#educational_background").removeClass('show');
            $("#skills_training").removeClass('active');
            $("#skills_training").removeClass('show');
            $("#work_experience_membership").removeClass('active');
            $("#work_experience_membership").removeClass('show');
            $("#character_reference").removeClass('active');
            $("#character_reference").removeClass('show');
            $("#emergency").removeClass('active');
            $("#emergency").removeClass('show');
        });
        $('#btn_previous10').click(function(){
            $("#ac_tab").removeClass('active');
            $("#cr_tab").addClass('active');

            $("#character_reference").addClass('active');
            $("#character_reference").addClass('show');

            $("#personal_info").removeClass('active');
            $("#personal_info").removeClass('show');
            $("#address_contact_info").removeClass('active');
            $("#address_contact_info").removeClass('show');
            $("#cases_details").removeClass('active');
            $("#cases_details").removeClass('show');
            $("#parent_info").removeClass('active');
            $("#parent_info").removeClass('show');
            $("#educational_background").removeClass('active');
            $("#educational_background").removeClass('show');
            $("#skills_training").removeClass('active');
            $("#skills_training").removeClass('show');
            $("#work_experience_membership").removeClass('active');
            $("#work_experience_membership").removeClass('show');
            $("#account").removeClass('active');
            $("#account").removeClass('show');
            $("#emergency").removeClass('active');
            $("#emergency").removeClass('show');
        });
    });
</script>
