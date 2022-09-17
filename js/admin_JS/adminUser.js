var managetable;

$(document).ready(function() {
  managetable = $("#managetable").DataTable({
    "ajax": "../../pages/adminPage/php_action/userdetails_view.php",
    "order": []
  });

});

function delete_account(usersId=null) {
  if(usersId) {
    // click on remove button
    $("#removeBtn").unbind('click').bind('click', function() {
      $.ajax({
        url: 'php_action/delete_user.php',
        type: 'post',
        data: {usersId : usersId},
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

function update_account(usersId=null){
  
  if(usersId){
  console.log(usersId);
    $(".form-group").removeClass('has-error').removeClass('has-success');
      $(".text-danger").remove();
      // empty the message div
      $(".edit-messages").html("");

      $.ajax({
        url: 'php_action/select_account.php',
        type: 'post',
        data: {usersId:usersId},
        
        dataType: 'json',
        success:function(response) {                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
          console.log(response);
          $("#update_fname").val(response.usersFName);
           $("#update_mname").val(response.usersMName);
            $("#update_lname").val(response.usersLName);
             $("#update_email").val(response.usersEmail);
              $("#update_uname").val(response.usersUid);
              $("#update_pword").val(response.usersPwd);
              $("#update_gender").val(response.usersGender).change();
              console.log(response.usersGender);
          //  id 
          $(".editUserAccountModal").append('<input type="hidden" name="usersId" id="usersId" value="'+response.usersId+'"/>');
  
          // here update the patient
          $("#updateRecordForm").unbind('submit').bind('submit', function() {
            // remove error messages
            $(".text-danger").remove();
  
            var form = $(this);
            var update_fname = $("#update_fname").val();
            var update_mname = $("#update_mname").val();
            var update_lname = $("#update_lname").val();
            var update_email = $("#update_email").val();
            var update_uname = $("#update_uname").val();
            var update_pword = $("#update_pword").val();
            var update_gender = $("#update_gender").val();
           
    if(update_fname, update_mname,update_lname,update_email,update_uname,update_pword,update_gender) {
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
              $("#editUserAccountModal").modal('hide');
  
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