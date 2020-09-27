// const getAmount = document.forms['get-amount'];

//     const value = getAmount.querySelector('input[type="number"]').value;
//     const finalval = value * 100;
//     window.location.href="wallet_success?uid=finalval";



// $(document).on('submit', '.billing-save', function(e) {
//     e.preventDefault();
//     let mee = $(this);

//     let bank_name = mee.find('[name=b_name]').val();
//     let bank = mee.find('[name=bank]').val();
//     let bank_act_no = mee.find('[name=bank_act_no]').val();
//     let bank_type = mee.find('[name=bank_type]').val();

   

//     Swal.fire({
//         title: 'Are you sure?',
//         text: "You about to update your bank details !",
//         type: 'warning',
//         showCancelButton: true,
//         confirmButtonColor: '#3085D6',
//         cancelButtonColor: '#d33',
//         allowOutsideClick: false,
//         confirmButtonText: 'Yes, I Know'
//     }).then((result) => {
//         if (result.value) {
//             Swal.fire({
//                 title: 'Please Wait!',
//                 text: 'Generating OTP token ...',
//                 timer: false,
//                 allowOutsideClick: false,
//                 allowEscapeKey: false,
//                 onOpen: () => {
//                     swal.showLoading()
//                 }
//             })

//             $.ajax({
//                 url: './config/data?action=generate_otp',
//                 cache: false,
//                 dataType: 'json',
//                 type: 'POST',
//                 success: function(data) {
//                     if (data.success) {
//                     	alert(data.success['token'])
//                         Swal.fire({
//                             title: 'Confirm Authetication',
//                             html: "<input type='text' required class='form-control get-otp' ><div class='invalid-feedback'>You\r've entered an invalid OTP, please try again.</div>",
//                             type: 'warning',
//                             showConfirmButton: true,
//                             confirmButtonText: 'Confirm',
//                             allowOutsideClick: false,
//                             allowEscapeKey: false,
//                             closeOnConfirm: false
//                         }).then((result) => {
//                             if (result.value) {

//                                 if ($(document).find('.get-otp').val() == data.success['token']) {
//                                     Swal.fire({
//                                         title: 'Please Wait!',
//                                         text: 'Validating authetication token ...',
//                                         timer: false,
//                                         allowOutsideClick: false,
//                                         allowEscapeKey: false,
//                                         onOpen: () => {
//                                             swal.showLoading()
//                                         }
//                                     })

//                                     $.ajax({
// 						                url: './config/data2?action=update_bank',
// 						                type: 'POST',
// 						                data: { bank_name: bank_name, bank: bank, bank_type: bank_type, bank_act_no: bank_act_no },
// 						                cache: false,
						         
// 						                success: function(data) {
// 						                	alert(data)
// 						                    if (data == true) {
// 						                    	Swal.fire({
// 			                                        title: 'Bank Account Updated',
// 			                                        text: "You\r've successfully updated your bank information",
// 			                                        type: 'success',
// 			                                        allowOutsideClick: false,
// 			                                        allowEscapeKey: false
// 			                                    })
// 						                    }
// 						                }
// 						            })
//                                 } else {
       	
//                                     Swal.fire({
//                                         title: 'Opps, sorry',
//                                         text: "You\r've entered an invalid OTP, please try again",
//                                         type: 'error',
//                                         allowOutsideClick: false,
//                                         allowEscapeKey: false
//                                     })
//                                 }

//                             }
//                         })
//                     } 
//                 }

//             })

//         }
//     })
// })