// global the manage  table 
var managetable;

$(document).ready(function() {
  managetable = $("#managetable").DataTable({
    "ajax": "php_action/patient_view.php",
    "order": []


  });

});

function remove_patient(Patient_ID=null) {
  if(Patient_ID) {
    console.log(Patient_ID);
    // click on remove button
    $("#removeBtn").unbind('click').bind('click', function() {
      $.ajax({
        url: 'php_action/remove_patient.php',
        type: 'post',
        data: {Patient_ID : Patient_ID},
        dataType: 'json',
        success:function(response) {

          if(response.success == true) {            
            $(".removeMessages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
                '<button type="button" btn btn-danger class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
              '</div>');

            // refresh the table
            managetable.ajax.reload(null, false);

            // close the modal
            $("#removeAccountModal").modal('hide');

          } else {
            $(".removeMessages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
                '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
              '</div>');
          }
        }
      });
    }); // click remove btn
  } else {
    alert('Error: Refresh the page again');
  }
}




function edit_patient(Patient_ID=null){
  
if(Patient_ID){
console.log(Patient_ID);
  $(".form-group").removeClass('has-error').removeClass('has-success');
    $(".text-danger").remove();
    // empty the message div
    $(".edit-messages").html("");

    
    
    $.ajax({
      url: 'php_action/selected_patient.php',
      type: 'post',
      data: {Patient_ID:Patient_ID},
      
      dataType: 'json',
      success:function(response) {
        console.log(response);
        $("#update_fname").val(response.fname);
         $("#update_mname").val(response.middle_name);
          $("#update_lname").val(response.lname);
           $("#update_occupation").val(response.occupation);
            $("#update_address").val(response.address);
            $("#update_email").val(response.email);
            $("#update_phone").val(response.phone);
            $("#update_bday").val(response.bday);
            $("#update_age").val(response.age);
            $("#update_gender").val(response.gender).change();
        
        //  id 
        $(".editRecordModal").append('<input type="hidden" name="Patient_ID" id="Patient_ID" value="'+response.Patient_ID+'"/>');

        // here update the patient
        $("#updateRecordForm").unbind('submit').bind('submit', function() {
          // remove error messages
          $(".text-danger").remove();

          var form = $(this);
          var update_fname = $("#update_fname").val();
          var update_mname = $("#update_mname").val();
          var update_lname = $("#update_lname").val();
          var update_occupation = $("#update_occupation").val();
          var update_address = $("#update_address").val();
          var update_email = $("#update_email").val();
          var update_phone = $("#update_phone").val();
          var update_bday = $("#update_bday").val();
          var update_age = $("#update_age").val();
          var update_gender = $("#update_gender").val();

  if(update_fname, update_mname,update_lname,update_occupation,update_address,update_email,update_phone,update_bday,update_age,update_gender) {
            $.ajax({
              url: form.attr('action'),
              type: form.attr('method'),
              data: form.serialize(),
              dataType: 'json',
              success:function(response) {
                if(response.success == true) {
                  $(".edit-messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                    '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
                  '</div>');


                    $("#updateRecordForm")[0].reset(); /*Reset the form back to blank fields*/
                    
                  // reload the table
                managetable.ajax.reload(null, false);
                  // // this function is built in function of datatables;
          
            // close the modal
            $("#editRecordModal").modal('hide');

                  // remove the error 
                  $(".form-group").removeClass('has-success').removeClass('has-error');
                  $(".text-danger").remove();
                } else { 
                  $(".edit-messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                    '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
                  '</div>')
                }
              } // /success
            }); // /ajax
          } // /if

       return false;
        });

      } // /success
    }); /*fetching patient*/

  } else {
    alert("Error : Refresh the page again");
  }
}
