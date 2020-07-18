function NameInvalid(name)
{
	for (var i = 0; i < name.length; i++) {
		if(!(name[i].toLowerCase()!=name[i].toUpperCase()))
			return false;
	}
	return true;
}


function IsNumber(num)
{
	for (var i = 0; i < num.length; i++) {
		if(num[i]>='0' && num[i]<='9')
			continue;
		else
			return false;
	}
	return true;
}


function validPhone(num)
{
	if(num.length!=11 || num[0]!='0' || num[1]!='1')
		return false;
	for (var i = 0; i < num.length; i++) {
		if(num[i]>='0' && num[i]<='9')
			continue;
		else
			return false;
	}
	return true;
}


function validDate(date)
{
	if(date=="")
		return false;
	for (var i = 0; i < date.length; i++) {
		if(date[i]=='/')
			continue;
		else if(date[i]>='0' && date[i]<='9')
			continue;
		else
			return false;
	}
	return true;
}


function valid()
{
	var name = document.forms["ff"]["Name"].value;
	if(name=="" || !NameInvalid(name))
	{
		alert("Name must contain letters");
		return false;
	}
	var r = document.forms["ff"]["roll"].value;
	if(!IsNumber(r))
	{
		alert("Roll should be a number");
		return false;
	}
	var Rg = document.forms["ff"]["reg"].value;
	if(!IsNumber(Rg))
	{
		alert("Registration number must contain digits");
		return false;
	}
	var phn = document.forms["ff"]["phn"].value;
	if(!validPhone(phn))
	{
		alert("Enter a valid phone number");
		return false;
	}
	return true;
	var dt = document.forms["ff"]["db"].value;
	if(!validDate(dt))
	{
		alert("Date of Birth must be provided and should be at least 20 years old");
		return false;
	}
}