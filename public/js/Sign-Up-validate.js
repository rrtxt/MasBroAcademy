import { validate, validatePassword } from "./validator.js"

var username = document.getElementById('username')
var email = document.getElementById('email')
var password = document.getElementById('password')
var confirm_password = document.getElementById('confirm-password')
var form = document.querySelector('form')
var error = document.querySelectorAll('.input p')

for (var i = 0; i < error.length; i++) {
    error[i].style.display = 'none'
}

form.addEventListener('submit', (e) => {
    validate(username, /[a-zA-Z0-9 !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]{5,}/gmi, e, error[0], 'Username must contain more than 5 character')
    validate(email, /^[\w\.]+@([\w-]+\.)+[\w-]{2,4}$/gmi, e, error[1], 'This is not valid email')
    validatePassword(password, confirm_password, e, error[2], 'Confirm Password must be the same as Password')
})