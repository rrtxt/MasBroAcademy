function validate(input, regex, e, errorEl, message) {
    if (input.value == '') {
        errorEl.innerHTML = '<i class="fa-solid fa-circle-exclamation fa-lg"></i> This field cannot be empty'
        errorEl.style.display = 'block'
        e.preventDefault()
        return false
    }

    else if (!input.value.match(regex)) {
        errorEl.innerHTML = `<i class="fa-solid fa-circle-exclamation fa-lg"></i> ${message}`
        errorEl.style.display = 'block'
        e.preventDefault()
        return false
    }
    errorEl.style.display = 'none'
    return true
}

function validatePassword(password, confirm_password, e, errorEl, message) {
    validate(password, /[a-zA-Z0-9!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]{6,}/gmi, e, errorEl, 'Password length must less than 6 character')

    if (password.value != confirm_password.value && (password.value.match(/[a-zA-Z0-9!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]{6,}/gmi))) {
        errorEl.innerHTML = `<i class="fa-solid fa-circle-exclamation fa-lg"></i> ${message}`
        errorEl.style.display = 'block'
        e.preventDefault()
        return false
    }
    // errorEl.style.display = 'none'
    return true
}

function validateSelect(select, e, errorEl, message) {
    if (select.value === '') {
        errorEl.innerHTML = `<i class="fa-solid fa-circle-exclamation fa-lg"></i> ${message}`
        errorEl.style.display = 'block'
        e.preventDefault()
        return false
    }
    errorEl.style.display = 'none'
    return true
}

function validateImage(image, e, errorEl) {
    if (image.value == '') {
        errorEl.innerHTML = '<i class="fa-solid fa-circle-exclamation fa-lg"></i> This field cannot be empty'
        errorEl.style.display = 'block'
        e.preventDefault()
        return false
    }
    errorEl.style.display = 'none'
    return true
}

export { validate, validatePassword, validateSelect, validateImage }