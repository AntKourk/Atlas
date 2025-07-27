function validateEmail(input) {
    if (!input.match(/[\@]/g))
	{
		//alert ('Μη έγκυρο email');
		invalids.push('Μη έγκυρο email');
		ret=false;
	}
 }

 function validateBirthdate(input) {
	 //alert (input.length);
     if (input.length==0)
 	{
 		//alert ('Μη έγκυρο email');
 		invalids.push('Δεν έχει επιλεγεί ημ/νία γέννησης');
 		ret=false;
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
	else
	{
		//alert ('Μη έγκυρο'+' '+name);
		invalids.push('Μη έγκυρος'+' '+name);
		ret=false;
	}
 }

 function validateName(input, name)
 {
   if (input.length > 0)
   {
	   if (input.match(/[^A-ZΑ-Ω]/g))
	   {
		   //alert ('Μη έγκυρο'+' '+name);
		   invalids.push('Μη έγκυρο'+' '+name);
		   ret=false;
	   }
   }
   else
   {
	   //alert ('Μη έγκυρο'+' '+name);
	   invalids.push('Μη έγκυρο'+' '+name);
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
	return false;
 }

var ret=true;

 function continue_signup() {
	 ret=true;

	 invalids = [];

	 validateEmail(document.getElementById('email').value)

	 validateName (document.getElementById('name').value, 'όνομα');
	 validateName (document.getElementById('surname').value, 'επώνυμο');
	 validateName (document.getElementById('fathername').value, 'όνομα πατέρα');
	 validateName (document.getElementById('mothername').value, 'όνομα μητέρας');

	 validateNumber (document.getElementById('amka').value, 11, 'A.M.K.A.');
	 validateNumber (document.getElementById('afm').value, 9, 'Α.Φ.Μ.');
	 validateNumber (document.getElementById('phone').value, 10, 'αριθμός τηλεφώνου');

	 validateBirthdate(document.getElementById('birthdate').value);


	 //alert ('PRIN'+' '+ret);
	 //alert ('epistrofi'+' '+validatePassword(document.getElementById('password').value));
	 if (!validatePassword(document.getElementById('password').value))
	 {
		 //alert ('Μη έγκυρο password');
		 invalids.push('Μη έγκυρος κωδικός');
		 ret=false;
	 }
	 //alert ('META'+' '+ret);

	 //alert(ret);


	 if (document.getElementById('password').value!=document.getElementById('password_confirm').value)
	 {
		 //alert ('passwords dont match');
		 invalids.push('Οι κωδικοί δεν ταιριάζουν');
		 ret=false;
	 }

	 //alert ('ret'+' '+ret);
	 if (invalids.length>0)
	 	alert(invalids.join("\n"));
	 //alert ('ret'+' '+ret);
	 return ret;
 }
