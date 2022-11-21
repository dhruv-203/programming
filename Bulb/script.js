document.getElementById('toggle').addEventListener('click',()=>{
Toggling();
})
const Toggling = ()=>{
e = document.getElementById('toggle');
let po = document.getElementsByClassName('bulb')[0].classList;
if(po.contains('OFF')){
    po.remove('OFF');
    po.add('ON');
    e.innerHTML='OFF';
}
else if(po.contains('ON')){
    po.remove('ON');
    po.add('OFF');
    e.innerHTML='ON';
}
}
