let display =document.getElementsByClassName('display')[0];
display.innerHTML=0;
Array.from(document.getElementsByClassName('buttons')).forEach((e)=>{
   if(e.value!=''){
    e.addEventListener('click',()=>{
        document.getElementById('AC').innerHTML='C';
       if(e.value!='.'){
            if(display.innerHTML=='0'){
                display.innerHTML=e.value;
            }
            else{
                display.innerHTML+=e.value;
            }
        }
        if(e.value=='.'&&!display.innerHTML.includes('.')){
            display.innerHTML+=e.value;
       }
    })
    }
    if(e.id=='percent'){
        e.addEventListener('click',()=>{
            let ans = eval(display.innerHTML);
            ans=Number.parseInt(ans)/100;
            display.innerHTML=ans;
        })
    }
    if(e.id=='multiply'){
        e.addEventListener('click',()=>{
            display.innerHTML+='*';
            Array.from(document.querySelectorAll('.buttons:nth-child(4n)')).forEach((f)=>{
                f.style.backgroundColor='rgba(255, 115, 14, 0.951)';
                f.style.color='white';
            })
            e.style.backgroundColor='white';
            e.style.color='rgba(255, 115, 14, 0.951)';
        })
    }
    if(e.id=='division'){
        e.addEventListener('click',()=>{
            display.innerHTML+='/';
            Array.from(document.querySelectorAll('.buttons:nth-child(4n)')).forEach((f)=>{
                f.style.backgroundColor='rgba(255, 115, 14, 0.951)';
                f.style.color='white';
            })
            e.style.backgroundColor='white';
            e.style.color='rgba(255, 115, 14, 0.951)';
        })
    }
    if(e.id=='subtract'){
        e.addEventListener('click',()=>{
            display.innerHTML+='-';
            Array.from(document.querySelectorAll('.buttons:nth-child(4n)')).forEach((f)=>{
                f.style.backgroundColor='rgba(255, 115, 14, 0.951)';
                f.style.color='white';
            })
            e.style.backgroundColor='white';
            e.style.color='rgba(255, 115, 14, 0.951)';
        })
    }
    if(e.id=='plus'){
        e.addEventListener('click',()=>{
            display.innerHTML+='+';
            Array.from(document.querySelectorAll('.buttons:nth-child(4n)')).forEach((f)=>{
                f.style.backgroundColor='rgba(255, 115, 14, 0.951)';
                f.style.color='white';
            })
            e.style.backgroundColor='white';
            e.style.color='rgba(255, 115, 14, 0.951)';
        })
    }
    if(e.id=='plus-min'){
        e.addEventListener('click',()=>{
            if(display.innerHTML.charAt(0)=='-'){
                display.innerHTML=display.innerHTML.slice(1)
            }
            else if(display.innerHTML.includes('-')||display.innerHTML.includes('+')||display.innerHTML.includes('*')||display.innerHTML.includes('/')){
                
            }
            else{
               display.innerHTML='-'+display.innerHTML;
           }
        })
    }
    if(e.id=='AC'){
        e.addEventListener('click',()=>{
            Array.from(document.querySelectorAll('.buttons:nth-child(4n)')).forEach((f)=>{
                f.style.backgroundColor='rgba(255, 115, 14, 0.951)';
                f.style.color='white';
            })
            display.innerHTML='0';
            e.innerHTML='AC';
        })
    }
    if(e.id=='equalsTo'){
        e.addEventListener('click',()=>{
            display.innerHTML=eval(display.innerHTML);
        })
    }
});