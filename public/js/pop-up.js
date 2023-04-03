var enrollBtn = document.getElementsByClassName('enroll')
var popUp = document.getElementsByClassName('pop-up')
var noBtn = document.getElementById('no-btn')

enrollBtn[0].addEventListener('click', function (e) {
    popUp[0].classList.add('visible')
})

noBtn.addEventListener('click', function (e) {
    popUp[0].classList.remove('visible')
})