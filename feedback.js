function crud(){
    let name=document.form1.fname.value;  
    // to check if name is empty of not  
    if (name==null || name==""){  
      alert("Name can't be blank");
      return false;  
    }

    let fname=(document.form1.fname.value).trim();
        if (fname.length<3){
            alert("First Name must have at least 3 character");
            return false;
        }
}

function crud1(){
    let lname=(document.form1.lname.value).trim();
        if (lname.length>15){
            alert("Lirst Name must have at least 3 character");
            return false;
        }
}

function validateemail()
{  
var x=document.form1.email.value;
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  return false;  
  }  
}  