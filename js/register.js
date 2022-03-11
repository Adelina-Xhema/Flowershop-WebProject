function validateRegisterForm(){

  var emri=document.getElementById('Name').value;
  var mbiemri=document.getElementById('mbiemri').value;
  var email=document.getElementById('userEmail').value;
  var password=document.getElementById('userPassword').value;
  var confirm=document.getElementById('confirmPassword').value;
  
  /*var regex= /^[A-Z]{1}[a-z]{6}\d{1}/;*/
  var regex=/^[A-Z]{1}[a-z]{4,}\d[0-9]{1,}/;
  
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
  else if(password.length<5){
    alert("Password duhet te jete se paku 5 karaktere");
    return false;
  
  }
  else if(!regex.test(password)){
    alert("Password duhet filloj me nje shkonje te madhe dhe te mbaroj me nje numer")
    return false;
  }
  else if(password !== confirm){
    alert("Password duhet te jene te njejta");
    return false;
  }
  else{
      alert("Jeni regjistruar me sukses tani duhet te beheni login");
    return true;
  }
  }
  