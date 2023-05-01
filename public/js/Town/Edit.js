function openLink(link){
    window.open(window.location.search+link, '_self')
}

function changeDiscrodLink(){
    
    const input = document.querySelector('input.discord')
    var input_val = input.value
    if(input_val != ''){
        window.open(window.location.search+'&changeDiscrodLink='+input_val, '_self')
    }
}



const input = document.querySelector('input.search')


input.oninput = function(){
    var input_val = input.value.trim().toLowerCase()
    let items = document.querySelectorAll('.user-name')
    if(input_val != ''){
        items.forEach(function(elem){
            if(elem.innerHTML.toLowerCase().search(input_val.toLowerCase()) == -1){
                elem.parentElement.classList.add('hidden')
            }
            else{
                elem.parentElement.classList.remove('hidden')
            }
        })
    }
    else{
        items.forEach(function(elem){
            elem.parentElement.classList.remove('hidden')
            
        })
    }
    
}
hidePlayers()
function hidePlayers(){
    const users = document.querySelectorAll('.user')
    const showmore = document.querySelector('.show-more')
    showmore.outerHTML = '<a class="show-more text-tavern-link hover:text-blue-500 hover:underline text-base font-semibold cursor-pointer" onclick="showAllUsers()">Показать больше...</a>'
    if(users.length < 4){
        showmore.classList.add('hidden')
    }
    for(var i =0; i < users.length; i++){
        if(i > 2 ){
            users[i].classList.add('hidden')
        }
    }
    
}

function showAllUsers(){
    const showmore = document.querySelector('.show-more')
    const users = document.querySelectorAll('.user')
    for(var i =0; i < users.length; i++){
        users[i].classList.remove('hidden')
    }
    showmore.outerHTML = '<a class="show-more text-tavern-link hover:text-blue-500 hover:underline text-base font-semibold cursor-pointer" onclick="hidePlayers()">Скрыть...</a>'
}