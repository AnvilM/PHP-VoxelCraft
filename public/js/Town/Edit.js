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