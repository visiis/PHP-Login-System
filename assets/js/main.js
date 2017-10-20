$(document)
.on("submit", "form.js-register", function(event) {
	event.preventDefault();

	var _form = $(this);
	var _error = $(".js-error", _form);

	var dataObj = {
		email: $("input[type='email']", _form).val(),
		password: $("input[type='password']", _form).val()
	};

	if(dataObj.email.length <6) {
		_error
			.text("請輸入有效的Email")
			.show();
		return false;
	} else if(dataObj.password.length <8) {
		_error
			.text("密碼至少8個字")
			.show();
		return false;
	}

	//Assuming the code gets this far, we can start the ajax process
	_error.hide();

	$.ajax({
		type: 'POST',
		url: 'ajax/register.php',
		data: dataObj,
		dataType: 'json',
		async: true
	})
	.done(function ajaxDone(data) {
		//whatever data is
		console.log(data);
		// if(data.redirect !== undefined) {
		// 	window.location = data.redirect;
		// }
		console.log(data.name);
	})
	.fail(function ajaxFailed(e) {
		//This failed
		console.log(e);
	})
	.always(function ajaxAlwaysDoThis(data) {
		//Always do
		console.log('Always');
	});

	return false;
});