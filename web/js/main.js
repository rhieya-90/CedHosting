$(document).ready(function() {
//account validation===================================================


//  $('#validate_mobile').on('blur', validate_mobile);

// function validate_mobile(){
// 	let value=$(this).val();
// 	let v1=value[0];
// 	switch(v1){
// 		case '0':
// 		let len=
// 	}

// }


    $('#validateConfirmPassword').on('blur', validateConfirmPassword);
    $('.validatePassword').on('blur', validatePassword);

// function validateForm(e) {
//         let input = $('form.validateForm input');
//         $.each(input, function(index, item) {
//             let _this = this;
//             let isError = false;
//             if ($(item).hasClass('isInvalid') || $(item).val() == '') {
//                 e.preventDefault();
//                 displayError(this, "Enter valid values!");
//             } else {
//                 noError(this);
//             }
//         });
//     }
function validatePassword() {
        let value = $(this).val();
        let pattern = new RegExp('^[a-zA-Z0-9@#$%*]{8,16}$');
        if (!pattern.test(value)) {
            alert("Enter valid password!");
        } 
    }

    function validateConfirmPassword() {
        let password = $('#password').val();
        let confirmPassword = $(this).val();
        if (password != confirmPassword) {
            alert("password didn't match");
        } 
    }



// function displayError(elem, error) {
//         $(elem).next('p').text(error);
//         $(elem).css({ border: '2px solid red' });
//         $(elem).next('p').css({ color: 'red' });
//         $(elem).addClass('isInvalid');
//     }

//     function noError(elem) {
//         $(elem).next('p').text('');
//         $(elem).css({ border: '2px solid green' });
//         $(elem).removeClass('isInvalid');
//     }


});