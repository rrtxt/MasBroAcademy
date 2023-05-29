var enrollBtn = document.getElementsByClassName('course-enroll')
var popUp = document.getElementsByClassName('enroll pop-up')
var noBtn = document.getElementById('enroll no-btn')

enrollBtn[0].addEventListener('click', function (e) {
    popUp[0].classList.add('visible')
})

noBtn.addEventListener('click', function (e) {
    popUp[0].classList.remove('visible')
})
