   function password_match(){
    var password1 = document.getElementById('password1').value ; 
    var password2 = document.getElementById('password2').value ; 
    
     $.post("check.php", {
     pass1: password1, pass2: password2 
      },
   
   function(data, status){
   document.getElementById('show-result').innerHTML = data ; 
   
   }
   ) ; 
    }