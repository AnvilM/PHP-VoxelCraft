const input = document.querySelector('input')


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