


$(document).ready(function(){ //Make script DOM ready
    $('#myselect').change(function() { //jQuery Change Function
        var opval = $(this).val(); //Get value from select element
        if(opval=="bank-transfer"){ //Compare it and if true
            $('#myModal').modal("show"); //Open Modal
        }
    });
});