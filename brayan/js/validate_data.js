const nombre = document.getElementById("name")
const email = document.getElementById("email")
const pass = document.getElementById("password")
const pass_c = document.getElementById("confirm_password")
const date = document.getElementById("date")
const form = document.getElementById("form")
const parrafo = document.getElementById("warnings")

form.addEventListener("submit", e => {
    e.preventDefault()
    let warnings = ""
    let entrar = false
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/
    parrafo.innerHTML = ""
    if (nombre.value.length < 6) {
        warnings += `El nombre no es valido <br>`
        entrar = true
    }
    if (!regexEmail.test(email.value)) {
        warnings += `El email no es valido <br>`
        entrar = true
    }
    if (pass.value.length < 8) {

        warnings += `La contraseña no es valida <br>`
        entrar = true
    }
    if (pass.value != pass_c.value) {
        warnings += `Las contraseñas no coinciden <br>`
        entrar = true
        
    }
    if(date.value == ""){
        warnings += `Fecha no valida<br>`
        entrar = true
    }
    if (entrar) {
        parrafo.innerHTML = warnings
    } else {
        form.submit()
    }
})