import { validate } from "./validator.js"

var username = document.getElementById('username')
var password = document.getElementById('password')
var form = document.querySelector('form')
var error = document.querySelectorAll('.input p')

for (var i = 0; i < error.length; i++) {
    error[i].style.display = 'none'
}

form.addEventListener('submit', (e) => {
    validate(username, /[a-zA-Z0-9 !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]{5,}/gmi, e, error[0], 'This is not valid username')
    validate(password, /[a-zA-Z0-9!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]{6,}/gmi, e, error[1], 'Password length must less than 6 character')
})