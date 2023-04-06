var deleteBtn = document.getElementsByClassName('course-delete')
var popUp = document.getElementsByClassName('course pop-up')
var noBtn = document.getElementById('course no-btn')

deleteBtn[0].addEventListener('click', function (e) {
    popUp[0].classList.add('visible')
})

noBtn.addEventListener('click', function (e) {
    popUp[0].classList.remove('visible')
})