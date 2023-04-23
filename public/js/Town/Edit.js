function openLink(){
    window.open(window.location.search+'&SwitchPlayers_need', '_self')
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

window.addEventListener('load', (e)=>{
    const users = document.querySelectorAll('.user')
    const showmore = document.querySelector('.show-more')
    if(users.length < 1){
        showmore.classList.add('hidden')
    }
    for(var i =0; i < users.length; i++){
        if(i > 1 ){
            users[i].classList.add('hidden')
        }
    }
})

function showAllUsers(){
    const users = document.querySelectorAll('.user')
    for(var i =0; i < users.length; i++){
        users[i].classList.remove('hidden')
    }
}