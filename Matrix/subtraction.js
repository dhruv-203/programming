const fun = ()=>{
    let Row = document.getElementById('Row').value;
    let Column = document.getElementById('Column').value;
    if(Row>6||Column>6){
        alert('Please Enter a Value less than 6!!');
    }
    //setting id is remaining it will be set at the time of append inside of loop
    inflate(Row,Column);
}

const inflate = (Row,Column)=>{
    const A = document.getElementsByClassName('matrixA')[0];
    const B = document.getElementsByClassName('matrixB')[0];
    A.innerHTML='';
    B.innerHTML='';
    if(Row!=''&&Column!=''){
        document.getElementsByClassName('heading')[0].innerHTML='Enter Values and<br>Click on the Plus'
        for(let i = 0; i<Row;i++){
            const rowA = document.createElement('div');
            const rowB = document.createElement('div');
            rowA.setAttribute('class','row');
            rowB.setAttribute('class','row');
            rowA.setAttribute('id',`A${i}`);
            rowB.setAttribute('id',`B${i}`);
            A.appendChild(rowA);
            B.appendChild(rowB);
            for(let j = 0;j<Column;j++){
                const inpA = document.createElement('input');
                const inpB = document.createElement('input');
                inpA.setAttribute('type','number');
                inpB.setAttribute('type','number');
                let tmpA = document.getElementById(`A${i}`);
                let tmpB = document.getElementById(`B${i}`);
                inpA.setAttribute('id',`A${i}${j}`);
                inpA.setAttribute('class',`A`);
                inpB.setAttribute('id',`B${i}${j}`);
                inpB.setAttribute('class',`B`);
                tmpA.appendChild(inpA);
                tmpB.appendChild(inpB);
            }
        }
        document.getElementById('plus').addEventListener('click',()=>{
            subtraction(Row,Column);
        })
    }
}
const subtraction = (Row,Column)=>{
    let A = Array.from(document.getElementsByClassName('A'));
    let B = Array.from(document.getElementsByClassName('B'));
    let lamp = true
    A.forEach((e)=>{
        if(e.value==''){
            lamp=false;
        }
    });
    B.forEach((e)=>{
        if(e.value==''){
            lamp=false;
        }
    });
    if(lamp){
        let a =[];
        let b = [];
        let c = [];
         A.forEach((e)=>{
            a.push(Number(e.value));
        });
        B.forEach((e)=>{
            b.push(Number(e.value));
        });
        for(let i = 0;i<A.length;i++){
            c[i]=a[i]-b[i];
        }
        //console.log(c);
        let backup = document.getElementsByClassName('chooser-after')[0].innerHTML;
        display(c);
        document.getElementById('back').addEventListener('click',()=>{
            back(backup,a,b,Row,Column);
        })
        document.getElementById('reset').addEventListener('click',()=>{
            refresh();
        })
    }

    else{
        alert('Please Enter All the Values');
    }
}
const refresh = ()=>{
    location.href='subtraction.html';
}
const back = (backup,a,b,Row,Column)=>{
document.getElementsByClassName('chooser-after')[0].innerHTML=backup;
Array.from(document.querySelectorAll('button')).forEach((e)=>{
    e.style.visibility='hidden';
})
document.getElementsByClassName('heading')[0].innerHTML='Enter Values and<br>Click on the Plus'
let A = Array.from(document.getElementsByClassName('A'));
let B = Array.from(document.getElementsByClassName('B'));
let i = 0;
A.forEach((e)=>{
    e.value= a[i];
    i++;
})
i=0;
B.forEach((e)=>{
    e.value=b[i];
    i++;
})
document.getElementById('Row').value=Row;
document.getElementById('Column').value=Column;
document.getElementById('plus').addEventListener('click',()=>{
    subtraction(Row,Column);
})
}
const display = (c)=>{
    
    let backup = document.getElementsByClassName('chooser-after')[0];

    let matrixhtml=backup.innerHTML;
    
    let display = document.getElementsByClassName('matrixContainer')[0];
    
    let matrixC = document.getElementsByClassName('matrixA')[0].outerHTML;
    
    display.innerHTML='';
    display.innerHTML=matrixC;
    
    display = document.getElementsByClassName('matrixContainer')[0].outerHTML;
    backup.innerHTML=display;
    
    document.getElementsByClassName('heading')[0].innerHTML='Resultant Matrix'
    document.querySelector('.matrixContainer>div').style.width='54%';
    document.querySelector('.matrixContainer>div').style.height='83%';

    let i =0;
   let A = Array.from(document.getElementsByClassName('A'));
    A.forEach((e)=>{
        e.value=c[i];
        i++;
        e.disabled=true;
    })
    Array.from(document.querySelectorAll('button')).forEach((e)=>{
        e.style.visibility='visible';
    })
    return 0;
}