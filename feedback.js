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