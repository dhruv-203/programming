let obj = new XMLHttpRequest();
let choice = document.getElementById('choice');
choice.onchange= ()=>{
    // console.log(choice.value);
    let url = 'numbersapi.com/#random/'+choice.value+'?json';
  let data = fetch(url);
  data.then((v)=>{
    return v.json();
  }).then((r)=>{
    document.getElementById('display').innerHTML=r;
  })
}