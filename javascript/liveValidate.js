

///*
function liveEmail(emailInput)
{

	if (emailInput.length>0)
	{
		if (emailInput.match(/[\@]/g))
		{
				document.querySelector('label[for="email"] .input-requirements li:nth-child(1)').classList.remove('invalid');
				document.querySelector('label[for="email"] .input-requirements li:nth-child(1)').classList.add('valid');
		}

		else
		{
			document.querySelector('label[for="email"] .input-requirements li:nth-child(1)').classList.remove('valid');
			document.querySelector('label[for="email"] .input-requirements li:nth-child(1)').classList.add('invalid');
		}
	}

}
//*/

function liveAmka(input)
{

	if (input.length>0)
	{
		if (input.match(/[^0-9]/g))
		{
				document.querySelector('label[for="amka"] .input-requirements li:nth-child(1)').classList.remove('valid');
				document.querySelector('label[for="amka"] .input-requirements li:nth-child(1)').classList.add('invalid');
		}

		else
		{
			document.querySelector('label[for="amka"] .input-requirements li:nth-child(1)').classList.remove('invalid');
			document.querySelector('label[for="amka"] .input-requirements li:nth-child(1)').classList.add('valid');
		}

		if (input.length!=11)
		{
			document.querySelector('label[for="amka"] .input-requirements li:nth-child(2)').classList.remove('valid');
			document.querySelector('label[for="amka"] .input-requirements li:nth-child(2)').classList.add('invalid');
		}
		else
		{
			document.querySelector('label[for="amka"] .input-requirements li:nth-child(2)').classList.remove('invalid');
			document.querySelector('label[for="amka"] .input-requirements li:nth-child(2)').classList.add('valid');
		}
	}
}

function liveAfm(input)
{

	if (input.length>0)
	{
		if (input.match(/[^0-9]/g))
		{
				document.querySelector('label[for="afm"] .input-requirements li:nth-child(1)').classList.remove('valid');
				document.querySelector('label[for="afm"] .input-requirements li:nth-child(1)').classList.add('invalid');
		}

		else
		{
			document.querySelector('label[for="afm"] .input-requirements li:nth-child(1)').classList.remove('invalid');
			document.querySelector('label[for="afm"] .input-requirements li:nth-child(1)').classList.add('valid');
		}

		if (input.length!=9)
		{
			document.querySelector('label[for="afm"] .input-requirements li:nth-child(2)').classList.remove('valid');
			document.querySelector('label[for="afm"] .input-requirements li:nth-child(2)').classList.add('invalid');
		}
		else
		{
			document.querySelector('label[for="afm"] .input-requirements li:nth-child(2)').classList.remove('invalid');
			document.querySelector('label[for="afm"] .input-requirements li:nth-child(2)').classList.add('valid');
		}
	}
}

function livePhone(input)
{

	if (input.length>0)
	{
		if (input.match(/[^0-9]/g))
		{
				document.querySelector('label[for="phone"] .input-requirements li:nth-child(1)').classList.remove('valid');
				document.querySelector('label[for="phone"] .input-requirements li:nth-child(1)').classList.add('invalid');
		}

		else
		{
			document.querySelector('label[for="phone"] .input-requirements li:nth-child(1)').classList.remove('invalid');
			document.querySelector('label[for="phone"] .input-requirements li:nth-child(1)').classList.add('valid');
		}

		if (input.length!=10)
		{
			document.querySelector('label[for="phone"] .input-requirements li:nth-child(2)').classList.remove('valid');
			document.querySelector('label[for="phone"] .input-requirements li:nth-child(2)').classList.add('invalid');
		}
		else
		{
			document.querySelector('label[for="phone"] .input-requirements li:nth-child(2)').classList.remove('invalid');
			document.querySelector('label[for="phone"] .input-requirements li:nth-child(2)').classList.add('valid');
		}
	}
}

function liveName(input)
{

	if (input.length>0)
	{
		if (input.match(/[^A-ZΑ-Ω]/g))
		{
				document.querySelector('label[for="name"] .input-requirements li:nth-child(2)').classList.remove('valid');
				document.querySelector('label[for="name"] .input-requirements li:nth-child(2)').classList.add('invalid');
		}
		else
		{
			document.querySelector('label[for="name"] .input-requirements li:nth-child(2)').classList.remove('invalid');
			document.querySelector('label[for="name"] .input-requirements li:nth-child(2)').classList.add('valid');
		}

		if (input.length==0)
		{
			document.querySelector('label[for="name"] .input-requirements li:nth-child(1)').classList.remove('valid');
			document.querySelector('label[for="name"] .input-requirements li:nth-child(1)').classList.add('invalid');
		}
		else
		{
			document.querySelector('label[for="name"] .input-requirements li:nth-child(1)').classList.remove('invalid');
			document.querySelector('label[for="name"] .input-requirements li:nth-child(1)').classList.add('valid');
		}
	}
}

function liveSurname(input)
{

	if (input.length>0)
	{
		if (input.match(/[^A-ZΑ-Ω]/g))
		{
				document.querySelector('label[for="surname"] .input-requirements li:nth-child(2)').classList.remove('valid');
				document.querySelector('label[for="surname"] .input-requirements li:nth-child(2)').classList.add('invalid');
		}
		else
		{
			document.querySelector('label[for="surname"] .input-requirements li:nth-child(2)').classList.remove('invalid');
			document.querySelector('label[for="surname"] .input-requirements li:nth-child(2)').classList.add('valid');
		}

		if (input.length==0)
		{
			document.querySelector('label[for="surname"] .input-requirements li:nth-child(1)').classList.remove('valid');
			document.querySelector('label[for="surname"] .input-requirements li:nth-child(1)').classList.add('invalid');
		}
		else
		{
			document.querySelector('label[for="surname"] .input-requirements li:nth-child(1)').classList.remove('invalid');
			document.querySelector('label[for="surname"] .input-requirements li:nth-child(1)').classList.add('valid');
		}
	}
}

function liveFathername(input)
{

	if (input.length>0)
	{
		if (input.match(/[^A-ZΑ-Ω]/g))
		{
				document.querySelector('label[for="fathername"] .input-requirements li:nth-child(2)').classList.remove('valid');
				document.querySelector('label[for="fathername"] .input-requirements li:nth-child(2)').classList.add('invalid');
		}
		else
		{
			document.querySelector('label[for="fathername"] .input-requirements li:nth-child(2)').classList.remove('invalid');
			document.querySelector('label[for="fathername"] .input-requirements li:nth-child(2)').classList.add('valid');
		}

		if (input.length==0)
		{
			document.querySelector('label[for="fathername"] .input-requirements li:nth-child(1)').classList.remove('valid');
			document.querySelector('label[for="fathername"] .input-requirements li:nth-child(1)').classList.add('invalid');
		}
		else
		{
			document.querySelector('label[for="fathername"] .input-requirements li:nth-child(1)').classList.remove('invalid');
			document.querySelector('label[for="fathername"] .input-requirements li:nth-child(1)').classList.add('valid');
		}
	}
}

function liveMothername(input)
{

	if (input.length>0)
	{
		if (input.match(/[^A-ZΑ-Ω]/g))
		{
				document.querySelector('label[for="mothername"] .input-requirements li:nth-child(2)').classList.remove('valid');
				document.querySelector('label[for="mothername"] .input-requirements li:nth-child(2)').classList.add('invalid');
		}
		else
		{
			document.querySelector('label[for="mothername"] .input-requirements li:nth-child(2)').classList.remove('invalid');
			document.querySelector('label[for="mothername"] .input-requirements li:nth-child(2)').classList.add('valid');
		}

		if (input.length==0)
		{
			document.querySelector('label[for="mothername"] .input-requirements li:nth-child(1)').classList.remove('valid');
			document.querySelector('label[for="mothername"] .input-requirements li:nth-child(1)').classList.add('invalid');
		}
		else
		{
			document.querySelector('label[for="mothername"] .input-requirements li:nth-child(1)').classList.remove('invalid');
			document.querySelector('label[for="mothername"] .input-requirements li:nth-child(1)').classList.add('valid');
		}
	}
}

function livePassword(input)
{
	if (input.length>0)
	{

		if (input.length<8)
		{
			document.querySelector('label[for="password"] .input-requirements li:nth-child(2)').classList.remove('valid');
			document.querySelector('label[for="password"] .input-requirements li:nth-child(2)').classList.add('invalid');
		}
		else
		{
			document.querySelector('label[for="password"] .input-requirements li:nth-child(2)').classList.remove('invalid');
			document.querySelector('label[for="password"] .input-requirements li:nth-child(2)').classList.add('valid');
		}

		if (!input.match(/[0-9]/g))
		{
				document.querySelector('label[for="password"] .input-requirements li:nth-child(3)').classList.remove('valid');
				document.querySelector('label[for="password"] .input-requirements li:nth-child(3)').classList.add('invalid');
		}
		else
		{
			document.querySelector('label[for="password"] .input-requirements li:nth-child(3)').classList.remove('invalid');
			document.querySelector('label[for="password"] .input-requirements li:nth-child(3)').classList.add('valid');
		}

		if (!input.match(/[a-z]/g))
		{
				document.querySelector('label[for="password"] .input-requirements li:nth-child(4)').classList.remove('valid');
				document.querySelector('label[for="password"] .input-requirements li:nth-child(4)').classList.add('invalid');
		}
		else
		{
			document.querySelector('label[for="password"] .input-requirements li:nth-child(4)').classList.remove('invalid');
			document.querySelector('label[for="password"] .input-requirements li:nth-child(4)').classList.add('valid');
		}

		if (!input.match(/[A-Z]/g))
		{
				document.querySelector('label[for="password"] .input-requirements li:nth-child(5)').classList.remove('valid');
				document.querySelector('label[for="password"] .input-requirements li:nth-child(5)').classList.add('invalid');
		}
		else
		{
			document.querySelector('label[for="password"] .input-requirements li:nth-child(5)').classList.remove('invalid');
			document.querySelector('label[for="password"] .input-requirements li:nth-child(5)').classList.add('valid');
		}
	}
}


function livePasswordConfirm(input1, input2)
{
	if (input2.length>0)
	{

		if (input1!=input2)
		{
			document.querySelector('label[for="password_confirm"] .input-requirements li:nth-child(1)').classList.remove('valid');
			document.querySelector('label[for="password_confirm"] .input-requirements li:nth-child(1)').classList.add('invalid');
		}
		else
		{
			document.querySelector('label[for="password_confirm"] .input-requirements li:nth-child(1)').classList.remove('invalid');
			document.querySelector('label[for="password_confirm"] .input-requirements li:nth-child(1)').classList.add('valid');
		}
	}
}

//var einput = document.getElementById('email').value;

function liveValidate()
{
	liveEmail(document.getElementById('email').value);

	livePassword(document.getElementById('password').value);

	livePasswordConfirm(document.getElementById('password').value, document.getElementById('password_confirm').value,);

	liveName(document.getElementById('name').value);
	liveSurname(document.getElementById('surname').value);
	liveFathername(document.getElementById('fathername').value);
	liveMothername(document.getElementById('mothername').value);

	liveAmka(document.getElementById('amka').value);
	liveAfm(document.getElementById('afm').value);
	livePhone(document.getElementById('phone').value);

	liveBirthdate(document.getElementById('birthdate').value);
}
