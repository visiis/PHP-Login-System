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

	console.log("email : ", dataObj.email, "\npassword : ", dataObj.password);

	//Assuming the code gets this far, we can start the ajax process
	_error.hide();

	$.ajax({
		method: 'POST',
		url: '/web/php_login_course/ajax/register.php',
		data: dataObj,
		dataType: 'json',
		async: true,
	})
	.done(function ajaxDone(data) {
		//whatever data is
		console.log(data);
		console.log('this is data', data.email, data.password);
		if(data.redirect !== undefined) {
		// 	window.location = data.redirect;
		} else if(data.error !== undefined) {
			_error
				.text(data.error)
				.show();
		}
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

$(document)
.on("submit", "form.js-login", function(event) {
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

	console.log("email : ", dataObj.email, "\npassword : ", dataObj.password);

	//Assuming the code gets this far, we can start the ajax process
	_error.hide();

	$.ajax({
		method: 'POST',
		url: '/web/php_login_course/ajax/login.php',
		data: dataObj,
		dataType: 'json',
		async: true,
	})
	.done(function ajaxDone(data) {
		//whatever data is
		console.log(data);
		console.log('this is data', data.email, data.password);
		if(data.redirect !== undefined) {
			 window.location = data.redirect;
		} else if(data.error !== undefined) {
			_error
				.html(data.error)
				.show();
		}
		console.log(data.rem);
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