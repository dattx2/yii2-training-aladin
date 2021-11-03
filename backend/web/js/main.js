
// var startDate;
$(document).ready(function() {

    $("#categories-date_create").datepicker({
        dateFormat: "dd-mm-yy",
        onSelect: function (e) {
            $("#categories-date_create").val(e);
           // alert(e);//the value
            //startDate = $(this).datepicker('getDate');
           // alert(startDate);//the value
        }
    });
    $("#products-start_date").datepicker({dateFormat: "dd-mm-yy"});
    $("#products-end_date").datepicker({dateFormat: "dd-mm-yy"});




});