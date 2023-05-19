var deleteBtn = document.getElementsByClassName('category-delete')
var popUp = document.getElementsByClassName('category pop-up')
var noBtn = document.getElementsByClassName('category no-btn')

console.log(deleteBtn[0]);
console.log(popUp[0]);
console.log(noBtn);

for (let index = 0; index < deleteBtn.length; index++) {
    deleteBtn[index].addEventListener('click', function (e) {
        console.log('click')
        popUp[index].classList.add('visible')
    })

    noBtn[index].addEventListener('click', function (e) {
        popUp[index].classList.remove('visible')
    })
}

