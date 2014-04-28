$(document).ready(function(){

	$('#webform-client-form-4').validate({
		rules:{
			"submitted[name]":{
				required: true,
				minlength: 2,
                maxlength: 16,
			},
			"submitted[phone]":{
				required: true,
				minlength: 6,
                maxlength: 11,	
                digits: true
			},
			"submitted[email]":{
				required: true,
				email: true
			}


		},
		messages:{
			"submitted[name]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				minlength: "<div class='error_message'>Мининум 2 символа</div>",
                maxlength: "<div class='error_message'>Максимум 16 символов</div>"
			},
			"submitted[phone]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				minlength: "<div class='error_message'>Мининум 6 символа</div>",
                maxlength: "<div class='error_message'>Максимум 16 символов</div>",	
                digits: "<div class='error_message'>Только цифры</div>"
			},
			"submitted[email]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				email: "<div class='error_message'>Электронный адрес введен неверно</div>"
			}
		}
	});


		$('#webform-client-form-5').validate({
		rules:{
			"submitted[name]":{
				required: true,
				minlength: 2,
                maxlength: 16,
			},
			"submitted[phone]":{
				required: true,
				minlength: 6,
                maxlength: 11,	
                digits: true
			},
			"submitted[email]":{
				required: true,
				email: true
			}


		},
		messages:{
			"submitted[name]":{
				required: "Это поле обязательно для заполнения",
				minlength: "Мининум 2 символа",
                maxlength: "Максимум 16 символов"
			},
			"submitted[phone]":{
				required: "Это поле обязательно для заполнения",
				minlength: "Мининум 6 символа",
                maxlength: "Максимум 16 символов",	
                digits: "Только цифры"
			},
			"submitted[email]":{
				required: "Это поле обязательно для заполнения",
				email: "Электронный адрес введен неверно"
			}
		}
	});


$('#webform-client-form-7').validate({
		rules:{
			"submitted[name]":{
				required: true,
				minlength: 2,
                maxlength: 16,
			},
			"submitted[phone]":{
				required: true,
				minlength: 6,
                maxlength: 11,	
                digits: true
			},
			"submitted[email]":{
				required: true,
				email: true
			}


		},
		messages:{
			"submitted[name]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				minlength: "<div class='error_message'>Мининум 2 символа</div>",
                maxlength: "<div class='error_message'>Максимум 16 символов</div>"
			},
			"submitted[phone]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				minlength: "<div class='error_message'>Мининум 6 символа</div>",
                maxlength: "<div class='error_message'>Максимум 16 символов</div>",	
                digits: "<div class='error_message'>Только цифры</div>"
			},
			"submitted[email]":{
				required: "<div class='error_message'>Это поле обязательно для заполнения</div>",
				email: "<div class='error_message'>Электронный адрес введен неверно</div>"
			}
		}
	});

});