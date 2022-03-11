
 function validateContact(){

  var emri=document.getElementById('emri').value;
  var mbiemri=document.getElementById('mbiemri').value;
  var email=document.getElementById('email').value;
  var mesazhi=document.getElementById('mesazhi').value;
  
  var regex= /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  
  
  if(emri.charAt(0) !== emri.charAt(0).charAt(0).toUpperCase()){
    alert("Shkronja e pare e emrit duhet te jete e madhe");
    return false;
  }
  else if(mbiemri.charAt(0) !== mbiemri.charAt(0).toUpperCase()){
    alert("Shkronja e pare e mbiemrit duhet te jete e madhe");
    return false;
  }
  else if(email==""){
    alert("Email nuk mund te jete i zbrazet");
    return false;
  
  }
  else if(mesazhi.length<12){
    alert("mesazhi duhet te jete se paku 12 karaktere");
    return false;
  
  }
  else if(!regex.test(email)){
    alert("Email eshte shkruar gabim")
    return false;
  }
  else{
    alert("U dergua me sukses")
    return true;
  }
  }
  
   
  
  
  
  