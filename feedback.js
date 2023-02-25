function crud(){
    let fname=(document.form1.fname.value).trim();
        if (fname.length<5){
            alert("First Name must have at least 5 character");
            return false;
        }
}

function crud1(){
    let lname=(document.form1.lname.value).trim();
        if (lname.length>15){
            alert("Last Name must less than 15 character");
            return false;
        }
}