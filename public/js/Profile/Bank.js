let select = document.querySelectorAll('#design')
selectCreate = select[0];
selectChange = select[1];

selectCreate.addEventListener("change", (e)=>changeDesign(selectCreate))
selectChange.addEventListener("change", (e)=>changeDesign(selectChange))

function changeDesign(select){
    let img = document.querySelectorAll('img#styleimg')
    img.forEach(element => {
        element.src = '/public/images/'+select.value+'.png'
    })

    
}

function copy(){
    let input = document.querySelector('input#link')
    input.select();
    document.execCommand("copy");
}