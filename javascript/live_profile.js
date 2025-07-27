

///*
function liveEmail(new_emailInput)
{

	if (new_emailInput.length>0)
	{
		if (new_emailInput.match(/[\@]/g))
		{
				document.querySelector('label[for="new_email"] .input-requirements li:nth-child(1)').classList.remove('invalid');
				document.querySelector('label[for="new_email"] .input-requirements li:nth-child(1)').classList.add('valid');
		}

		else
		{
			document.querySelector('label[for="new_email"] .input-requirements li:nth-child(1)').classList.remove('valid');
			document.querySelector('label[for="new_email"] .input-requirements li:nth-child(1)').classList.add('invalid');
		}
	}
	else
	{
		document.querySelector('label[for="new_email"] .input-requirements li:nth-child(1)').classList.remove('invalid');
		document.querySelector('label[for="new_email"] .input-requirements li:nth-child(1)').classList.remove('valid');
	}

}

function livePhone(input)
{

	if (input.length>0)
	{
		if (input.match(/[^0-9]/g))
		{
				document.querySelector('label[for="new_phone"] .input-requirements li:nth-child(1)').classList.remove('valid');
				document.querySelector('label[for="new_phone"] .input-requirements li:nth-child(1)').classList.add('invalid');
		}

		else
		{
			document.querySelector('label[for="new_phone"] .input-requirements li:nth-child(1)').classList.remove('invalid');
			document.querySelector('label[for="new_phone"] .input-requirements li:nth-child(1)').classList.add('valid');
		}

		if (input.length!=10)
		{
			document.querySelector('label[for="new_phone"] .input-requirements li:nth-child(2)').classList.remove('valid');
			document.querySelector('label[for="new_phone"] .input-requirements li:nth-child(2)').classList.add('invalid');
		}
		else
		{
			document.querySelector('label[for="new_phone"] .input-requirements li:nth-child(2)').classList.remove('invalid');
			document.querySelector('label[for="new_phone"] .input-requirements li:nth-child(2)').classList.add('valid');
		}
	}
	else
	{
		document.querySelector('label[for="new_phone"] .input-requirements li:nth-child(1)').classList.remove('invalid');
		document.querySelector('label[for="new_phone"] .input-requirements li:nth-child(1)').classList.remove('valid');
		document.querySelector('label[for="new_phone"] .input-requirements li:nth-child(2)').classList.remove('invalid');
		document.querySelector('label[for="new_phone"] .input-requirements li:nth-child(2)').classList.remove('valid');
	}
}

function livePassword(input)
{
	if (input.length>0)
	{

		if (input.length<8)
		{
			document.querySelector('label[for="new_password"] .input-requirements li:nth-child(2)').classList.remove('valid');
			document.querySelector('label[for="new_password"] .input-requirements li:nth-child(2)').classList.add('invalid');
		}
		else
		{
			document.querySelector('label[for="new_password"] .input-requirements li:nth-child(2)').classList.remove('invalid');
			document.querySelector('label[for="new_password"] .input-requirements li:nth-child(2)').classList.add('valid');
		}

		if (!input.match(/[0-9]/g))
		{
				document.querySelector('label[for="new_password"] .input-requirements li:nth-child(3)').classList.remove('valid');
				document.querySelector('label[for="new_password"] .input-requirements li:nth-child(3)').classList.add('invalid');
		}
		else
		{
			document.querySelector('label[for="new_password"] .input-requirements li:nth-child(3)').classList.remove('invalid');
			document.querySelector('label[for="new_password"] .input-requirements li:nth-child(3)').classList.add('valid');
		}

		if (!input.match(/[a-z]/g))
		{
				document.querySelector('label[for="new_password"] .input-requirements li:nth-child(4)').classList.remove('valid');
				document.querySelector('label[for="new_password"] .input-requirements li:nth-child(4)').classList.add('invalid');
		}
		else
		{
			document.querySelector('label[for="new_password"] .input-requirements li:nth-child(4)').classList.remove('invalid');
			document.querySelector('label[for="new_password"] .input-requirements li:nth-child(4)').classList.add('valid');
		}

		if (!input.match(/[A-Z]/g))
		{
				document.querySelector('label[for="new_password"] .input-requirements li:nth-child(5)').classList.remove('valid');
				document.querySelector('label[for="new_password"] .input-requirements li:nth-child(5)').classList.add('invalid');
		}
		else
		{
			document.querySelector('label[for="new_password"] .input-requirements li:nth-child(5)').classList.remove('invalid');
			document.querySelector('label[for="new_password"] .input-requirements li:nth-child(5)').classList.add('valid');
		}

	}
	else
	{
			document.querySelector('label[for="new_password"] .input-requirements li:nth-child(1)').classList.remove('invalid');
			document.querySelector('label[for="new_password"] .input-requirements li:nth-child(1)').classList.remove('valid');

			document.querySelector('label[for="new_password"] .input-requirements li:nth-child(2)').classList.remove('invalid');
			document.querySelector('label[for="new_password"] .input-requirements li:nth-child(2)').classList.remove('valid');

			document.querySelector('label[for="new_password"] .input-requirements li:nth-child(3)').classList.remove('invalid');
			document.querySelector('label[for="new_password"] .input-requirements li:nth-child(3)').classList.remove('valid');

			document.querySelector('label[for="new_password"] .input-requirements li:nth-child(4)').classList.remove('invalid');
			document.querySelector('label[for="new_password"] .input-requirements li:nth-child(4)').classList.remove('valid');

			document.querySelector('label[for="new_password"] .input-requirements li:nth-child(5)').classList.remove('invalid');
			document.querySelector('label[for="new_password"] .input-requirements li:nth-child(5)').classList.remove('valid');

	}
}


function livePasswordConfirm(input1, input2)
{
	if (input2.length>0)
	{

		if (input1!=input2)
		{
			document.querySelector('label[for="new_password_confirm"] .input-requirements li:nth-child(1)').classList.remove('valid');
			document.querySelector('label[for="new_password_confirm"] .input-requirements li:nth-child(1)').classList.add('invalid');
		}
		else
		{
			document.querySelector('label[for="new_password_confirm"] .input-requirements li:nth-child(1)').classList.remove('invalid');
			document.querySelector('label[for="new_password_confirm"] .input-requirements li:nth-child(1)').classList.add('valid');
		}
	}
	else
	{
		document.querySelector('label[for="new_password_confirm"] .input-requirements li:nth-child(1)').classList.remove('invalid');
		document.querySelector('label[for="new_password_confirm"] .input-requirements li:nth-child(1)').classList.remove('valid');
	}
}



function live_profile()
{
	liveEmail(document.getElementById('new_email').value);

	livePassword(document.getElementById('new_password').value);

	livePasswordConfirm(document.getElementById('new_password').value, document.getElementById('new_password_confirm').value,);

	livePhone(document.getElementById('new_phone').value);

}
