import { validate } from "./validator.js"

const form = document.querySelector('form')
const title = document.getElementById('title-input')
const video = document.getElementById('video-input')
const desc = document.getElementById('desc-input')
var error = document.querySelectorAll('.error')

console.log(error)

form.addEventListener('submit', (e) => {
    validate(title, /[a-zA-Z0-9 !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]{6,}/gmi, e, error[0], 'Title must contain more than 6 character')
    validate(video, /^(https?\:\/\/)?((www\.)?youtube\.com|youtu\.be)\/.+$/gmi, e, error[1], 'This is not valid youtube link')
    validate(desc, /[a-zA-Z0-9 !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]{24,}/gmi, e, error[2], 'Desc must contain more than 24 character')
})