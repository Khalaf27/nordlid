/* Form */
/*
function validate() {
      
    if( document.myForm.Name.value == "" ) {
       alert( "Tilføj venligst dit Navn!" );
       document.myForm.Name.focus() ;
       return false;
    }
    if( document.myForm.Email.value == "" ) {
       alert( "Tilføj venligst din Email!" );
       document.myForm.Email.focus() ;
       return false;
    }
    if( document.myForm.Tlf.value == "" ) {
        alert( "Tilføj venligst dit tlf nr!" );
        document.myForm.Tlf.focus() ;
        return false;
     }
   
 }
 */

 /*
function KONTAKT() { 
    var name = document.forms["kontaktForm"]["Name"]; 
    var email = document.forms["kontaktForm"]["EMail"]; 
    var phone = document.forms["kontaktForm"]["Telephone"]; 

    if (name.value == "") { 
        window.alert("UPS! Du mangler at udfylde noget."); 
        name.focus(); 
        return false; 
    } 

    if (email.value == "") { 
        window.alert( 
        "UPS! Du mangler at udfylde noget."); 
        email.focus(); 
        return false; 
    } 

    if (phone.value == "") { 
        window.alert( 
          "UPS! Du mangler at udfylde noget."); 
        phone.focus(); 
        return false; 
    } 
    return true; 
} 
*/

(function() {
'use strict';
window.addEventListener('load', function() {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.getElementsByClassName('needs-validation');
// Loop over them and prevent submission
var validation = Array.prototype.filter.call(forms, function(form) {
form.addEventListener('submit', function(event) {
if (form.checkValidity() === false) {
event.preventDefault();
event.stopPropagation();
}
form.classList.add('was-validated');
}, false);
});
}, false);
})();