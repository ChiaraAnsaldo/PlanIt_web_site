var password = new LiveValidation('pass');
password.add(Validate.Presence, {failureMessage: "Il campo deve essere compilato!"});

var mail= new LiveValidation('email');
mail.add(Validate.Presence, {failureMessage: "Il campo deve essere compilato!"});
mail.add(Validate.Email, {failureMessage:"Indirizzo mail non valido"})
