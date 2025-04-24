
var nome = new LiveValidation('nome');
nome.add(Validate.Presence, {failureMessage: "Il campo deve essere compilato!"});
        
var cognome = new LiveValidation('cognome');
cognome.add(Validate.Presence, {failureMessage: "Il campo deve essere compilato!"});

var email= new LiveValidation('email');
email.add(Validate.Presence, {failureMessage: "Il campo deve essere compilato!"});
email.add(Validate.Email, {failureMessage:"Indirizzo mail non valido"})

var indirizzo = new LiveValidation('indirizzo');
indirizzo.add(Validate.Presence, {failureMessage: "Il campo deve essere compilato!"});

var citta= new LiveValidation('citta');
citta.add(Validate.Presence, {failureMessage: "Il campo deve essere compilato!"});

var nomecarta= new LiveValidation('nomecarta');
nomecarta.add(Validate.Presence, {failureMessage: "Il campo deve essere compilato!"});

var numerocarta= new LiveValidation('numerocarta');
numerocarta.add(Validate.Presence, {failureMessage: "Il campo deve essere compilato!"});

