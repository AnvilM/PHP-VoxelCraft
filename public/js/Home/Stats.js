var users = document.querySelectorAll('.user')
var type = []
const input = document.querySelector('input')
const button = document.querySelector('button[type = submit]')
document.querySelector('.online-all-button').addEventListener('click', all)
document.querySelector('.online-now-button').addEventListener('click', online)
document.querySelector('.online-today-button').addEventListener('click', today)
document.querySelector('.online-yesterday-button').addEventListener('click', yesterday)
document.querySelector('.online-week-button').addEventListener('click', week)
document.querySelector('.online-month-button').addEventListener('click', month)

function all(){

users.forEach(function(elem){
    elem.style.display = 'flex'
})
type = ''
}

function online(){
    users.forEach(function(elem){
        if(elem.classList.contains('online-now')){
            elem.style.display = 'flex'
        }
        else{
            elem.style.display = 'none'
        }
    })
    type = 'online-now'
}

function today(){
    document.querySelectorAll('canvas').forEach(function(elem){
        elem.style.display = 'none'
    })
    document.querySelector('.chart-today').style.display = 'flex'
    users.forEach(function(elem){
        if(elem.classList.contains('online-today')){
            elem.style.display = 'flex'
        }
        else{
            elem.style.display = 'none'
        }
    })
    type = 'online-today'
}

function yesterday(){
    document.querySelectorAll('canvas').forEach(function(elem){
        elem.style.display = 'none'
    })
    document.querySelector('.chart-yesterday').style.display = 'flex'
    users.forEach(function(elem){
        if(elem.classList.contains('online-yesterday')){
            elem.style.display = 'flex'
        }
        else{
            elem.style.display = 'none'
        }
    })
    type = 'online-yesterday'
}



function week(){
    document.querySelectorAll('canvas').forEach(function(elem){
        elem.style.display = 'none'
    })
    document.querySelector('.chart-week').style.display = 'flex'
    users.forEach(function(elem){
        if(elem.classList.contains('online-week')){
            elem.style.display = 'flex'
        }
        else{
            elem.style.display = 'none'
        }
    })
    type = 'online-week'
}

function month(){
    document.querySelectorAll('canvas').forEach(function(elem){
        elem.style.display = 'none'
    })
    document.querySelector('.chart-month').style.display = 'flex'
    users.forEach(function(elem){
        if(elem.classList.contains('online-month')){
            elem.style.display = 'flex'
        }
        else{
            elem.style.display = 'none'
        }
    })
    type = 'online-month'
}








//поиск

input.oninput = function(){
    var input_val = input.value.trim()
    let items = document.querySelectorAll('.user-name')
    if(input_val != ''){
        items.forEach(function(elem){
            if(elem.innerHTML.toLowerCase().search(input_val.toLowerCase()) == -1 || !elem.parentElement.parentElement.classList.contains(type)){
                elem.parentElement.parentElement.style.display = 'none'
            }
            else{
                elem.parentElement.parentElement.style.display = 'flex'
            }
        })
    }
    else{
        items.forEach(function(elem){
            if(type != ''){
                if(elem.parentElement.parentElement.classList.contains(type)){
                    elem.parentElement.parentElement.style.display = 'flex'
                }
            }
            else{
                elem.parentElement.parentElement.style.display = 'flex'

            }
            
            
        })
    }
}







//Рендер Диаграммы
    const ctxToday = document.querySelector('.chart-today').getContext('2d')
    const ctxYesterday = document.querySelector('.chart-yesterday').getContext('2d')
    const ctxWeek = document.querySelector('.chart-week').getContext('2d')
    const ctxMonth = document.querySelector('.chart-month').getContext('2d')

    const myChartToday = new Chart(ctxToday, {
    type: 'line',
    data: {
        labels: ['01.04','02.04','03.04','4.04','5.04','6.04','7.04','8.04','9.04','10.04','11.04','12.04','13.04','14.04','15.04','16.04','17.04','18.04','19.04','20.04','21.04','22.04','23.04','24.04','25.04','26.04','27.04','28.04','29.04','30.04','31.04'],
        datasets: [{
            label: "Количество игроков",
            data: dataToday,
            backgroundColor: 'rgb(0, 137, 255, 0.3)',
            borderColor: 'rgb(0, 137, 255)',
            borderWidth: 0,
            fill: true,
            tension: 0.2,
            pointHitRadius: 100
        }]
    },
    options: {
        
        scales: {
            x: {
                display: false
            },
            y:{
                display: false
            }
        },
        plugins:{
            tooltip:{
                displayColors: false
            },
            legend: {
                display: false
            }
        },
        
          
         
    }
});
const myChartYesterday = new Chart(ctxYesterday, {
    type: 'line',
    data: {
        labels: ['01.04','02.04','03.04','4.04','5.04','6.04','7.04','8.04','9.04','10.04','11.04','12.04','13.04','14.04','15.04','16.04','17.04','18.04','19.04','20.04','21.04','22.04','23.04','24.04','25.04','26.04','27.04','28.04','29.04','30.04','31.04'],
        datasets: [{
            label: "Количество игроков",
            data: dataYesterday,
            backgroundColor: 'rgb(0, 137, 255, 0.3)',
            borderColor: 'rgb(0, 137, 255)',
            borderWidth: 0,
            fill: true,
            tension: 0.2,
            pointHitRadius: 100
        }]
    },
    options: {
        
        scales: {
            x: {
                display: false
            },
            y:{
                display: false
            }
        },
        plugins:{
            tooltip:{
                displayColors: false
            },
            legend: {
                display: false
            }
        },
        
          
         
    }
});
const myChartWeek = new Chart(ctxWeek, {
    type: 'line',
    data: {
        labels: ['01.04','02.04','03.04','4.04','5.04','6.04','7.04','8.04','9.04','10.04','11.04','12.04','13.04','14.04','15.04','16.04','17.04','18.04','19.04','20.04','21.04','22.04','23.04','24.04','25.04','26.04','27.04','28.04','29.04','30.04','31.04'],
        datasets: [{
            label: "Количество игроков",
            data: dataWeek,
            backgroundColor: 'rgb(0, 137, 255, 0.3)',
            borderColor: 'rgb(0, 137, 255)',
            borderWidth: 0,
            fill: true,
            tension: 0.2,
            pointHitRadius: 100
        }]
    },
    options: {
        
        scales: {
            x: {
                display: false
            },
            y:{
                display: false
            }
        },
        plugins:{
            tooltip:{
                displayColors: false
            },
            legend: {
                display: false
            }
        },
        
          
         
    }
});
const myChartMonth = new Chart(ctxMonth, {
    type: 'line',
    data: {
        labels: ['01.04','02.04','03.04','4.04','5.04','6.04','7.04','8.04','9.04','10.04','11.04','12.04','13.04','14.04','15.04','16.04','17.04','18.04','19.04','20.04','21.04','22.04','23.04','24.04','25.04','26.04','27.04','28.04','29.04','30.04','31.04'],
        datasets: [{
            label: "Количество игроков",
            data: dataMonth,
            backgroundColor: 'rgb(0, 137, 255, 0.3)',
            borderColor: 'rgb(0, 137, 255)',
            borderWidth: 0,
            fill: true,
            tension: 0.2,
            pointHitRadius: 100
        }]
    },
    options: {
        
        scales: {
            x: {
                display: false
            },
            y:{
                display: false
            }
        },
        plugins:{
            tooltip:{
                displayColors: false
            },
            legend: {
                display: false
            }
        },
        
          
         
    }
});