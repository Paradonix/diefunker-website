$(document).ready(function(argument) {
    $('#save').click(function(){
        // Get edit field value
        $edit = $('#edit').html();
        $.ajax({
            url: 'saveNewTextAkt.php',
            type: 'post',
            data: {data: $edit},
            datatype: 'html',
            success: function(rsp){
                    alert(rsp);
                }
        });
    });
});
