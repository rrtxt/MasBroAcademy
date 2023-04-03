var enrollBtn = document.querySelector('#login')
var popUp = document.querySelector('.login')
var noBtn = document.getElementById('no-mark')

enrollBtn.addEventListener('click', function (e) {
    popUp.classList.add('visible')
})

noBtn.addEventListener('click', function (e) {
    console.log('Remove')
    popUp.classList.remove('visible')
})