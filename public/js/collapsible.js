var coll = document.getElementsByClassName("collapsible");
console.log(coll)

for (i = 0; i < coll.length; i++) {
    var taskTitle = coll[i].childNodes[1]
    var collBtn = taskTitle.querySelector('#coll-btn')
    collBtn.addEventListener('click', function (e) {
        var collapsible = this.closest('div.collapsible')
        var iconEl = this.querySelector('.coll-icon')
        var title = this.closest('div.task-title')
        var content = title.nextElementSibling
        collapsible.classList.toggle('active')
        icon = collapsible.classList.contains('active') ? 'fa-caret-up' : 'fa-caret-down'

        iconEl.classList.toggle(icon)
        if (content.style.display === 'block') {
            content.style.display = 'none'
        }
        else {
            content.style.display = 'block'
        }
    })
}