function validatePorosia(){

    var emri=document.getElementById('emri').value;
    var mbiemri=document.getElementById('mbiemri').value;
    var email=document.getElementById('email').value;
    var telefoni=document.getElementById('telefoni').value;
    var qyteti=document.getElementById('qyteti').value;
    var adresa=document.getElementById('adresa').value;
    
    var regex=/^[0-9]/;
    
    if(emri=="" || mbiemri=="" || email=="" || adresa=="" || qyteti==""){
      alert("Shkruaj sakt te dhenat");
      return false;
    }
    else if(telefoni.length<8){
      alert("Shkruaj numrin sakt");
      return false;
    }
    else if(!regex.test(telefoni)){
      alert("Shkruaj sakt numrin ");
      return false;
    }
    else{
        alert("Porosia u dergua me sukses!");
      return true;
    }
    }
    
