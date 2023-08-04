 function validateNumber(input, len, name)
 {
	if (input.match(/[^0-9]/g))
	{
		invalids.push('Μη έγκυρο πεδίο:'+' '+name);
		ret=false;
	}
	else if (len !=0 )
	{
		if (input.length != len)
		{
			invalids.push('Μη έγκυρο πεδίο:'+' '+name);
			ret=false;
		}
	}
 }

var ret=true;

 function continue_calculator() {
	 ret=true;

	 invalids = [];

	 validateNumber (document.getElementById('specialty').value, 0, 'κωδικός ειδικότητας');
	 validateNumber (document.getElementById('age').value, 2, 'ηλικία');
	 validateNumber (document.getElementById('hours').value, 0, 'ώρες απασχόλησης');
	 validateNumber (document.getElementById('wage').value, 0, 'μισθός');

	 //alert ('ret'+' '+ret);
	 if (invalids.length>0)
	 	alert(invalids.join("\n"));
	 //alert ('ret'+' '+ret);
	 return ret;
 }
