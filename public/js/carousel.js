var categories = document.getElementsByClassName('category')
var rigthBtn = document.getElementById('right-button')
var leftBtn = document.getElementById('left-button')

var startIndex = 0
var endIndex = 2

window.addEventListener('load', ()=>{
    Display(categories, startIndex, endIndex)
})

rigthBtn.addEventListener('click', ()=>{
    if (endIndex < categories.length - 1){
        startIndex++
        endIndex++
        Display(categories, startIndex, endIndex)
    }
    console.log(`Start index = ${startIndex} End index = ${endIndex}`)

})

leftBtn.addEventListener('click', ()=>{
    if (startIndex > 0){
        startIndex--
        endIndex--
        Display(categories, startIndex, endIndex)
    }
    console.log(`Start index = ${startIndex} End index = ${endIndex}`)
})

function Display(elements, startIndex, endIndex){
    for (var i = 0; i < elements.length;i++){
        if (i >= startIndex && i <= endIndex){
            elements[i].style.display = 'block'
        }
        else{
            elements[i].style.display = 'none'
        }
        console.log(elements[i])
    }
}

