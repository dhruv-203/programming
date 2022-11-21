setInterval(()=>{
let boom = new Date();
document.getElementsByClassName('digits')[0].innerHTML=boom.toLocaleTimeString(boom.getTime()).toUpperCase();
},1000);