function checkAll() {
	return checkFname() && checklname();

  }
function checkFname()
{
	let fname=document.getElementById("firstName").value;  
	if(fname == "")     // if firstname is empty
	{
		document.getElementById('fn').innerHTML = "Enter your Name";
		document.getElementById('firstName').style.backgroundColor = "#F9BDBD";	
		return false;
	}
	else 
	{
        document.getElementById('firstName').style.backgroundColor = "#DEF8CC";
		document.getElementById('fn').innerHTML = "";
    }
	return true;
}

function checklname() 
{
	let lname=document.getElementById("lastName").value;
	if(lname == "")
	{
		document.getElementById('ln').innerHTML = "Enter your Last Name";
		document.getElementById('lastName').style.backgroundColor = "#F9BDBD";	
		return false;
	}
	else
	{
        document.getElementById('lastName').style.backgroundColor = "#DEF8CC";
		document.getElementById('ln').innerHTML = "";		
	}
	return true;
}

function validate_fileupload(fileName)
{
	const allowed_extensions = ["jpg","png","gif"];
	//pop method removes the last element from an array and it returns the element if removed https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/pop
   //  split() method divides a String into an ordered list of substrings https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/split
	const file_extension = fileName.split('.').pop(); 
    for(let i = 0; i <= allowed_extensions.length; i++)
    {
        if(allowed_extensions[i]==file_extension.toLowerCase())
        {
			document.getElementById("fileMsg").innerHTML = "";
            return true; // valid file extension
        }
    }
	document.getElementById("fileMsg").innerHTML = "You can upload only image file";
    return false;
}

