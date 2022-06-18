// global the manage  table 
var managetable;

$(document).ready(function() {
  managetable = $("#managetable").DataTable({
    "ajax": "php_action/patient_view.php",
    "order": []


  });



});