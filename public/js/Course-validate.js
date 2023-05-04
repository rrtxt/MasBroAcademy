import { validate, validateImage, validateSelect } from "./validator.js";

const form = document.querySelector('form')
const image = document.querySelector('#img-input')
const title = document.getElementById('title-input')
const category = document.getElementById('category-input')
const desc = document.getElementById('desc-input')
const error = document.querySelectorAll('.error')

for (var i = 0; i < error.length; i++) {
    error[i].style.display = 'none'
}

console.log(title.value)


form.addEventListener('submit', (e) => {
    validateImage(image, e, error[0])
    validate(title, /[a-zA-Z0-9 !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]{6,}/gmi, e, error[1], 'Title must contain more than 6 character')
    validateSelect(category, e, error[2], 'Please select a category')
    validate(desc, /[a-zA-Z0-9 !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]{24,}/gmi, e, error[3], 'Desc must contain more than 24 character')
})