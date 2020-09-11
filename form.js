function Vname(name)
{
	if(name.length==0)
{
	alert("Enter valid  format");
	return false;
}

	for(var i=0;i<name.length;i++){
		if((name[i]>='a' && name[i]<='z') || (name[i]>='A' && name[i]<='Z'))
			continue;
		else
		{
			alert("Enter valid format");
			return false;
		}
}
	return true;
}



function Mail(mail)
{
	//alert(mail);
	for(var i=0;i<mail.length;i++)
		if(mail[i]=='@')
			return true;
	alert("Enter correct format");
	return false;
	
}



function Phone(phn)
{
	if(phn[0]!='0' || phn[1]!='1' || (phn[2]!='8' && phn[2]!='7' && phn[2]!='6' && phn[2]!='4' && phn[2]!='5' && phn[2]!='3') || phn.length!=11)
		{
			alert("Enter valid phone number");
		return false;
	}
	return true;
}



function valid()
{
	//alert("Called");
	var name = document.forms["frm"]["nm"].value;
	var lc = document.forms["frm"]["loc"].value;
	var age = document.forms["frm"]["age"].value;
	var mail = document.forms["frm"]["mail"].value;
	if(!Vname(name))
		return false;
	if(!Vname(lc) || lc.length==0)
		return false;
	if(age==0){
		alert("Enter valid age")
		return false;}
	if(!Mail(mail))
		return false;
	if(!Phone(document.forms["frm"]["num"].value))
		return false;
	if(document.forms["frm"]["db"].value.length==0){
		alert("Enter date of birth");
		return false;
	}
	if(!Vname(document.forms["frm"]["hmd"].value))
		return false;
	return true;
}

