let pass = "kolos";
let password;

function initialize() {
    let submit = document.getElementById("submit");
    submit.addEventListener("click", checkFields);
}

function checkFields() {
    password = document.getElementById("password").value;
    if(password === pass){
        document.location.href = 'studentview.html';
    }
    else{
        M.toast({html: 'NIE POPRAWNE HASLO!'})
    }

}

function toast(text){
    M.toast({html: text});
}