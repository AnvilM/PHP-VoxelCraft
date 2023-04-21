var users = document.querySelectorAll('.user')

document.querySelector('.online-now-button').addEventListener('click', online)
document.querySelector('.online-today-button').addEventListener('click', today)
document.querySelector('.online-yesterday-button').addEventListener('click', yesterday)
document.querySelector('.online-week-button').addEventListener('click', week)
document.querySelector('.online-month-button').addEventListener('click', month)

function showAll(){
    users.forEach(function(elem){
        elem.classList.remove('hidden')
    })
    
}

function online(){
    showAll()
    users.forEach(function(elem){
        if(!elem.classList.contains('online-now')){
            elem.classList.add('hidden')
        }
    })
}

function today(){
    showAll()
    users.forEach(function(elem){
        if(!elem.classList.contains('online-today')){
            elem.classList.add('hidden')
        }
    })
}


function yesterday(){
    showAll()
    users.forEach(function(elem){
        if(!elem.classList.contains('online-yesterday')){
            elem.classList.add('hidden')
        }
    })
}


function week(){
    showAll()
    users.forEach(function(elem){
        if(!elem.classList.contains('online-week')){
            elem.classList.add('hidden')
        }
    })
}


function month(){
    showAll()
    users.forEach(function(elem){
        if(!elem.classList.contains('online-month')){
            elem.classList.add('hidden')
        }
    })
}
