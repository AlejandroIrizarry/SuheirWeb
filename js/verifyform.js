// verifyform.js

// Manage events of services.html & contact.html

// Validate fields for apply or contact form

// Author: Alejandro Irizarry Negrón

// Validate text box for phone number
function chkphone()
{
	var mydata = document.getElementById("phone");
	var position = mydata.value.search(/\(\d{3}\)-\d{3}-\d{4}/);
	
	if(position != 0)
	{
		alert("The entered phone number's format is incorrect.\n" + 
				"The format to follow is: (XXX)-XXX-XXXX\n");
		mydata.select();
		mydata.focus();
		return false;
	}
	else
		return true;
		
}

// Validate text box for first name
function chkfirstname()
{
	var mydata = document.getElementById("firstname");
	var position = mydata.value.search(/[A-Z][a-z]+/);
	
	if(position != 0)
	{
		alert("The first name entered is in an incorrect format.\n" + 
				"The format to follow is: Only letters starting with a capitalized letter.\n");
		mydata.select();
		mydata.focus();
		return false;
	}
	else
		return true;
		
}

// Validate text box for last name
function chkalastname()
{
	var mydata = document.getElementById("lastname");
	var position = mydata.value.search(/[A-Z][a-z]+\s[A-Z][a-z]+/);
	
	if(position != 0)
	{
		alert("The last name entered is in an incorrect format..\n" + 
				"The format to follow is: Only letters in two words beginning with a capitalized letter.\n");
		mydata.select();
		mydata.focus();
		return false;
	}
	else
		return true;
		
}

// Validate text box for zip code
function chkzip()
{
	var mydata = document.getElementById("zip");
	var position = mydata.value.search(/\d{5}/);
	
	if(position != 0)
	{
		alert("The entered zip code's format is incorrect.\n" + 
				"The format to follow is: A number of five digits (XXXXX).\n");
		mydata.select();
		mydata.focus();
		return false;
	}
	else
		return true;
		
}

// Validate text box for apartment
function chkapartment()
{
	var mydata = document.getElementById("apartment");
	var position = mydata.value.search(/\bApt\b\.\d{1,6}/);
	
	if(position != 0)
	{
		alert("The apartment entered is in an incorrect format.\n" + 
				"The format to follow is: 'Apt.' followed by numbers.\n");
		mydata.select();
		mydata.focus();
		return false;
	}
	else
		return true;
		
}

// Validate text box for email
function chkemail()
{
	var mydata = document.getElementById("email");
	var position = mydata.value.search(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/);

	if(position != 0)
	{
		alert("The email entered is in an incorrect format.\n" + 
				"The format to follow is: personal_info@domain\n");
		mydata.select();
		mydata.focus();
		return false;
	}
	else
		return true;
}
