var deleteBtn = document.getElementsByClassName('task-delete')
var popUp = document.getElementsByClassName('task pop-up')
var noBtn = document.getElementById('task no-btn')

console.log(deleteBtn[0]);
console.log(popUp[0]);
console.log(noBtn);

deleteBtn[0].addEventListener('click', function (e) {
    popUp[0].classList.add('visible')
})

noBtn.addEventListener('click', function (e) {
    popUp[0].classList.remove('visible')
})