
var first_name = new LiveValidation('firstname');
first_name.add(Validate.Presence, {failureMessage: "Il campo deve essere compilato!"});
        
var last_name = new LiveValidation('lastname');
last_name.add(Validate.Presence, {failureMessage: "Il campo deve essere compilato!"});

var password = new LiveValidation('pass');
password.add(Validate.Presence, {failureMessage: "Il campo deve essere compilato!"});

var conferma= new LiveValidation('confirm');
conferma.add(Validate.Presence, {failureMessage: "Il campo deve essere compilato!"});
conferma.add(Validate.Confirmation, {match:'pass'});

var mail= new LiveValidation('email');
mail.add(Validate.Presence, {failureMessage: "Il campo deve essere compilato!"});
mail.add(Validate.Email, {failureMessage:"Indirizzo mail non valido"})


function checkemail(url){

    var email = document.registrazione.email.value;
    user = email;
    
    return fetch(url, {
        method: "post",
        headers: {"Content-type":"application/x-www-form-urlencoded"},
        body: "email= " + user,
    }).then(function(response){
        if(response.status !== 200){
            return;
        }
        return response.text()
    }).then(function(result){
        if(result == 'yes'){
            document.getElementById('error').innerHTML ="Email già registrata";
        };
    });
}

