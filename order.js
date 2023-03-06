//validating our forms to ensure data is available 
function validation(){
    // to check if the name field is empty
let name=document.payform.name.value;
if (name==null || name==""){
alert ("name can't be blank");
return false;
}
 //to ensure name can not be more than 15 chaaracters
 else if (name.length>15){
alert ("name can not be more than 15 characters")
return false;
 }
//to ensure name is mot less than 5 characters

else if (name.length<5){
alert ("name can not be less than 5 characters")
return false; 
}
}

//crud validation
function crud2test(){
    let fname = (document.payform.fname.value).trim();
    if (fname.length<5){
        alert ("name can not be less than 5 characters")
        return false; 
    }
}

function crud3test(){
    let lname = (document.payform.lname.value).trim();
   if (lname.length>15){
        alert ("not more than 15 characters")
return false; 
    } 
}