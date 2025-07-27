function validateEmail(input, name) {
	if (input.length != 0)
	{
		if (!input.match(/[\@]/g))
		{
			invalids.push('Μη έγκυρο'+' '+name);
			ret=false;
		}
	}
 }

 function validateNumber(input, len, name)
 {
	if (input.length == len)
	{
		if (input.match(/[^0-9]/g))
		{
			//alert ('Μη έγκυρο'+' '+name);
			invalids.push('Μη έγκυρος'+' '+name);
			ret=false;
		}
	}
	else if (input.length != 0)
	{
		//alert ('Μη έγκυρο'+' '+name);
		invalids.push('Μη έγκυρος'+' '+name);
		ret=false;
	}
 }

 function validatePassword(input)
 {

   if (input.length >= 8)
   {
	  if (input.match(/[A-ZΑ-Ω]/g))
	  {
		  if (input.match(/[a-zα-ω]/g))
		  {
			  if (input.match(/[0-9]/g))
			  {
				  return true;
			  }
		  }
	  }
   }
   	else if (input.length != 0)
		return false;
	else
		return true;
 }

var ret=true;

 function continue_change() {
	 ret=true;

	 invalids = [];

	 validateEmail(document.getElementById('new_email').value, 'email')

	 validateNumber (document.getElementById('new_phone').value, 10, 'αριθμός τηλεφώνου');

	 if (!validatePassword(document.getElementById('new_password').value))
	 {
		 //alert ('Μη έγκυρο password');
		 invalids.push('Μη έγκυρος νέος κωδικός');
		 ret=false;
	 }

	 if (document.getElementById('new_password').value!=document.getElementById('new_password_confirm').value)
	 {
		 //alert ('passwords dont match');
		 invalids.push('Οι νέοι κωδικοί δεν ταιριάζουν');
		 ret=false;
	 }

	 //alert ('ret'+' '+ret);
	 if (invalids.length>0)
	 	alert(invalids.join("\n"));
	 //alert ('ret'+' '+ret);
	 return ret;
 }
