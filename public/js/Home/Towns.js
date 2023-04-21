const input = document.querySelector('input')


input.oninput = function(){
    var input_val = input.value.trim().toLowerCase()
    let items = document.querySelectorAll('.city-name')
    if(input_val != ''){
        items.forEach(function(elem){
            if(elem.innerHTML.toLowerCase().search(input_val.toLowerCase()) == -1){
                elem.parentElement.parentElement.classList.add('hidden')
            }
            else{
                elem.parentElement.parentElement.classList.remove('hidden')
            }
        })
    }
    else{
        items.forEach(function(elem){
            elem.parentElement.parentElement.classList.remove('hidden')
            
        })
    }
    
}