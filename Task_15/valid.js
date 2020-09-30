function  ValidName(name)
		{
			//var name =document.forms["form"]["user"].value;
			for(var i=0;i<name.length;i++)
				if((name[i]>='a' && name[i]<='z') || (name[i]>='A' && name[i]<='Z'))
						continue;
				else{
					alert("Enter valid name");
					return false;
				}
				return true;
		}

function ValidMail(mail)
		{
			//var mail = document.forms["form"]["mail"].value;
			for(var i=0;i<mail.length;i++)
				if(mail[i]=='@')
						return true;
				alert("Enter valid mail");
				return false;
		}
function ValidPhone($phone)
		{
			//var  = document.forms["form"]["phone"].value;
			if(($phone).length!=11 || $phone[0]!='0' || $phone[1]!='1')
				return false;
			if($phone[2]=='3' || $phone[2]=='4' || $phone[2]=='1' || $phone[2]=='5' || $phone[2]=='6' || $phone[2]=='7' || $phone[2]=='8' || $phone[2]=='9')
				return true;
			alert("Enter valid Phone Number");
			return false;
		}
function ValidPass(pass)
		{
				if(($pass).length<6){
				alert("Password is too small");
				return false;
			}
			return true;
		}

function valid()
{
	var name = document.forms["form"]["user"].value;
	var mail = document.forms["form"]["mail"].value;
	var phone = document.forms["form"]["phone"].value;
	var pass = document.forms["form"]["pass"].value;
	if(ValidMail(mail) && ValidPhone(phone) && ValidPass(pass) && ValidName(name))
			return true;
	else
		return false;
}