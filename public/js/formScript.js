var val_Alphabets=/^[^\s][a-zA-Z ]*$/;
var val_Angka=/^[0-9]+$/;
var val_Email=/^[^ ]+@[^ ]+.[a-z]{2,3}$/;
var val_AlphaNumeric=/^[0-9a-zA-Z]+$/;

var username  = document.getElementById("username");
var nama  = document.getElementById("namauser");
var alamat  = document.getElementById("alamat");
var notelp = document.getElementById("notelp");
var email  = document.getElementById("email");
var pwd1  = document.getElementById("pwd1");
var ErrorUsername = document.getElementById("ErrorUsername");
var ErrorNama = document.getElementById("ErrorNama");
var ErrorAlamat = document.getElementById("ErrorAlamat");
var ErrorTelp = document.getElementById("ErrorTelp");
var ErrorEmail = document.getElementById("ErrorEmail");
var ErrorPwd = document.getElementById("ErrorPwd");

form.addEventListener('submit', (e) => {
    console.log(e); 

    if (!username.value.match(val_AlphaNumeric)) {
        ErrorUsername.innerText = ("Username hanya boleh berisi kombinasi huruf dan angka")
        e.preventDefault()
    }
    else if (username.value.match(val_AlphaNumeric)) {
        ErrorUsername.innerText = ("")
    }

    if (!nama.value.match(val_Alphabets)) {
        ErrorNama.innerText = ("Nama hanya boleh terdiri atas huruf")
        e.preventDefault()
    }
    else if (nama.value.match(val_Alphabets)) {
        ErrorNama.innerText = ("")
    }

    if (!alamat.value.match(val_AlphaNumeric)) {
        ErrorAlamat.innerText = ("Mohon Isi Alamat Anda")
        e.preventDefault()
    }
    else if (alamat.value.match(val_AlphaNumeric)) {
        ErrorAlamat.innerText = ("")
    }

    if (!notelp.value.match(val_Angka)) {
        ErrorTelp.innerText = ("Input hanya boleh berupa angka")
        e.preventDefault()
    }
    else if (notelp.value.match(val_Angka)) {
        ErrorTelp.innerText = ("")
    }

    if (!email.value.match(val_Email)) {
        ErrorEmail.innerText = ("Email yang dimasukkan tidak valid")
        e.preventDefault()
    }
    else if (email.value.match(val_Email)) {
        ErrorEmail.innerText = ("")
    }

    if (!pwd1.value.match(val_AlphaNumeric)) {
        ErrorPwd.innerText = ("Mohon Isi Password yang anda inginkan")
        e.preventDefault()
    }
    else if (pwd1.value.match(val_AlphaNumeric)) {
        ErrorPwd.innerText = ("")
    }

})