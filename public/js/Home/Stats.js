var users = document.querySelectorAll('.user')
document.querySelector('.online-all-button').addEventListener('click', showAll)
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


const ctx = document.querySelector('canvas').getContext('2d')
const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['01.04','02.04','03.04','4.04','5.04','6.04','7.04','8.04','9.04','10.04','11.04','12.04','13.04','14.04','15.04','16.04','17.04','18.04','19.04','20.04','21.04','22.04','23.04','24.04','25.04','26.04','27.04','28.04','29.04','30.04','31.04'],
        datasets: [{
            label: "Количество игроков",
            data: [27, 21, 40, 25, 23, 32, 39, 37, 40, 26, 21, 16, 27, 27, 31, 27, 35, 38, 21, 39, 27, 21, 30, 34, 20, 18, 23, 20, 23, 15, 31],
            backgroundColor: 'rgb(0, 137, 255, 0.2)',
            borderColor: 'rgb(0, 137, 255)',
            borderWidth: 1,
            fill: true,
            tension: 0.1,
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

