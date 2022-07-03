
var managetable;

$(document).ready(function() {
  managetable = $("#managetable").DataTable({
    "ajax": "php_action/physician_patientview.php",
    "order": []
  });
});

function view_diagnosis(Patient_ID=null){
  
  if(Patient_ID){
    $(".form-group").removeClass('has-error').removeClass('has-success');
      $(".text-danger").remove();
      // empty the message div
      $(".edit-messages").html("");

      $.ajax({
        url: 'php_action/physician_viewDiagnosis.php',
        type: 'post',
        data: {Patient_ID:Patient_ID},
        
        dataType: 'json',
        success:function(response) {     
          $("#viewDiagnosisTextarea").val(response.Diagnosis);
           $("#diagnosis_year").val(response.year).change();
        }
  })
}
}