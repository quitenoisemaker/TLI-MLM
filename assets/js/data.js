$(document).on('submit', '.new-auth', function(e) {
    e.preventDefault();
    let mee = $(this);
    mee.find('.text-load').attr('hidden', true);
    mee.find('.spin-load').removeAttr('hidden');
    mee.find('button').attr('disabled', true);
    mee.find('input').attr('readonly', true);
    $.ajax({
        url: './config/data?action=new_customer',
        type: 'POST',
        dataType: 'json',
        data: mee.serialize(),
        cache: false,
        success: function(data) {
            if (data.success) {
                swal.fire({
                    title: data.success['title'],
                    text: data.success['text'],
                    allowEscapeKey: false
                })
            } else if (data.warning) {
                swal.fire({
                    title: data.warning['title'],
                    text: data.warning['text'],
                    allowEscapeKey: false
                })
            } else {
                swal.fire({
                    title: data.error['title'],
                    text: data.error['text'],
                    allowEscapeKey: false
                })
            }
        },
        error: function(er) {
            console.log(er)
        }
    })

})


$(document).on('submit', '.billing-save', function(e) {
    e.preventDefault();
    let mee = $(this);

    let bank_name = mee.find('[name=b_name]').val();
    let bank = mee.find('[name=bank]').val();
    let bank_act_no = mee.find('[name=bank_act_no]').val();
    let bank_type = mee.find('[name=bank_type]').val();

   

    Swal.fire({
        title: 'Are you sure?',
        text: "You about to update your bank details !",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085D6',
        cancelButtonColor: '#d33',
        allowOutsideClick: false,
        confirmButtonText: 'Yes, I Know'
    }).then((result) => {
        if (result.value) {
            Swal.fire({
                title: 'Please Wait!',
                text: 'Generating OTP token ...',
                timer: false,
                allowOutsideClick: false,
                allowEscapeKey: false,
                onOpen: () => {
                    swal.showLoading()
                }
            })

            $.ajax({
                url: './config/data?action=generate_otp',
                cache: false,
                dataType: 'json',
                type: 'POST',
                success: function(data) {
                    if (data.success) {
                    	alert(data.success['token'])
                        Swal.fire({
                            title: 'Confirm Authetication',
                            html: "<input type='text' required class='form-control get-otp' ><div class='invalid-feedback'>You\r've entered an invalid OTP, please try again.</div>",
                            type: 'warning',
                            showConfirmButton: true,
                            confirmButtonText: 'Confirm',
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                            closeOnConfirm: false
                        }).then((result) => {
                            if (result.value) {

                                if ($(document).find('.get-otp').val() == data.success['token']) {
                                    Swal.fire({
                                        title: 'Please Wait!',
                                        text: 'Validating authetication token ...',
                                        timer: false,
                                        allowOutsideClick: false,
                                        allowEscapeKey: false,
                                        onOpen: () => {
                                            swal.showLoading()
                                        }
                                    })

                                    $.ajax({
						                url: './config/data2?action=update_bank',
						                type: 'POST',
						                data: { bank_name: bank_name, bank: bank, bank_type: bank_type, bank_act_no: bank_act_no },
						                cache: false,
						         
						                success: function(data) {
						                	
						                    if (data == true) {
						                    	Swal.fire({
			                                        title: 'Bank Account Updated',
			                                        text: "You\r've successfully updated your bank information",
			                                        type: 'success',
			                                        allowOutsideClick: false,
			                                        allowEscapeKey: false
			                                    })
						                    }
						                }
						            })
                                } else {
       	
                                    Swal.fire({
                                        title: 'Opps, sorry',
                                        text: "You\r've entered an invalid OTP, please try again",
                                        type: 'error',
                                        allowOutsideClick: false,
                                        allowEscapeKey: false
                                    })
                                }

                            }
                        })
                    } 
                }

            })

        }
    })
})




$(document).on('submit', '.password-save', function(e) {
    e.preventDefault();
    let mee = $(this);

    let current_password = mee.find('[name=current_password]').val();
    let new_password = mee.find('[name=new_password]').val();
    let confirm_password = mee.find('[name=confirm_password]').val();
   

   

    Swal.fire({
        title: 'Are you sure?',
        text: "You about to update your password !",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085D6',
        cancelButtonColor: '#d33',
        allowOutsideClick: false,
        confirmButtonText: 'Yes, I Know'
    }).then((result) => {
        if (result.value) {
            
            Swal.fire({
                title: 'Please Wait!',
                text: 'Generating OTP token ...',
                timer: false,
                allowOutsideClick: false,
                allowEscapeKey: false,
                onOpen: () => {
                    swal.showLoading()
                }
            })

            $.ajax({
                url: './config/data?action=generate_otp',
                cache: false,
                dataType: 'json',
                type: 'POST',
                success: function(data) {
                    if (data.success) {
                    	alert(data.success['token'])
                        Swal.fire({
                            title: 'Confirm Authetication',
                            html: "<input type='text' required class='form-control get-otp' ><div class='invalid-feedback'>You\r've entered an invalid OTP, please try again.</div>",
                            type: 'warning',
                            showConfirmButton: true,
                            confirmButtonText: 'Confirm',
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                            closeOnConfirm: false
                        }).then((result) => {
                            if (result.value) {

                                if ($(document).find('.get-otp').val() == data.success['token']) {
                                    Swal.fire({
                                        title: 'Please Wait!',
                                        text: 'Validating authetication token ...',
                                        timer: false,
                                        allowOutsideClick: false,
                                        allowEscapeKey: false,
                                        onOpen: () => {
                                            swal.showLoading()
                                        }
                                    })

                                    $.ajax({
						                url: './config/data2?action=update_password',
						                type: 'POST',
						                data: { current_password: current_password, new_password: new_password, confirm_password: confirm_password },
						                cache: false,
						         
						                success: function(data) {
						                	
						                    if (data == true) {
						                    	Swal.fire({
			                                        title: 'Password Updated',
			                                        text: "You\r've successfully updated your password",
			                                        type: 'success',
			                                        allowOutsideClick: false,
			                                        allowEscapeKey: false
			                                    })
						                    }else if (data == false) {

						                    	Swal.fire({
			                                        title: 'Opps!',
			                                        text: "Details are incorrect. Try again",
			                                        type: 'warning',
			                                        allowOutsideClick: false,
			                                        allowEscapeKey: false
			                                    })


						                    }
						                }
						            })
                                } else {
       	
                                    Swal.fire({
                                        title: 'Opps, sorry',
                                        text: "You\r've entered an invalid OTP, please try again",
                                        type: 'error',
                                        allowOutsideClick: false,
                                        allowEscapeKey: false
                                    })
                                }

                            }
                        })
                    } 
                }

            })

        }
    })
})