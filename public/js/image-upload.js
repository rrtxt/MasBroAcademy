const cover = document.getElementById('cover')
const img_input = document.getElementById('img-input')
let uploaded_img = ''

console.log(img_input.value)

img_input.addEventListener('change', function () {
    console.log('Change Image')
    const reader = new FileReader()
    reader.addEventListener('load', (e) => {
        uploaded_img = reader.result
        img_input.style.backgroundImage = `url(${uploaded_img})`
        img_input.style.backgroundSize = 'cover'
        img_input.style.border = 'none'
    })
    reader.readAsDataURL(this.files[0])
})
