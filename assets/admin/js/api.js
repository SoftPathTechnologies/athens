
$(document).ready(function () {
    $('.confirm-payment').click(function () {
        var userID = $(this).data('id');
        $.ajax({
            cache: false,
            type: 'POST',
            data: {
                'user_id': userID,
            },
            url: '<?php echo base_url("admin/confirm_payment"); ?>',
            success: function(response) {
                if(response === 0){
                    console.log(response);
                    var notyf = new Notyf({
                        duration: 10000,
                        position: {
                            x: 'right',
                            y: 'top',
                        }
                    });
                    // Display an error notification
                    notyf.success('Participant Payment Details Confirmed');
                }else{
                    var notyf = new Notyf({
                        duration: 10000,
                        position: {
                            x: 'right',
                            y: 'top',
                        }
                    });
                    // Display an error notification
                    notyf.error('Error Confirming Participant Payment');
                }
            }
        })
    })
})
