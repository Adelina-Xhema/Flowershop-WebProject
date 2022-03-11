function validateform(){

  var email=document.getElementById('userEmail').value;
  var password=document.getElementById('userPassword').value;
  
  var regex= /^[A-Z]{1}[a-z]{4,}\d{1,}/;
  var regex1=/^[a-z]+@([a-z]+\.)+(net|com)/;
  
  
  if(!regex1.test(email)){
    alert("Email nuk mund te jete i zbrazet");
    return false;
  }
   if(password.length<5){
    alert("Password duhet te jete se paku 5 karaktere");
    return false;
  }
   if(!regex.test(password)){
    alert("Password duhet te filloj me nje shkronje te madhe dhe te mbaroj me nje numer")
    return false;
  }
  else{
    return true;
  }
   }
  
  