const fun = () => {
    let RowA = document.getElementById('RowA').value;
    let ColumnA = document.getElementById('ColumnA').value;
    let RowB = document.getElementById('RowB').value;
    let ColumnB = document.getElementById('ColumnB').value;

    if (RowA != '' && ColumnA != '' && RowB != '' && ColumnB != '') {
        const A = document.getElementsByClassName('matrixA')[0];
        const B = document.getElementsByClassName('matrixB')[0];
        A.innerHTML = '';
        B.innerHTML = '';
        document.getElementsByClassName('heading')[0].innerHTML = 'Enter Values and<br>Click on the Plus'
         
        // for inflating A

        for (let i = 0; i < RowA; i++) {
            const rowA = document.createElement('div');
            rowA.setAttribute('class', 'rowofA');
            rowA.setAttribute('id', `A${i}`);
            A.appendChild(rowA);
            for (let j = 0; j < ColumnA; j++) {
                const inpA = document.createElement('input');
                inpA.setAttribute('type', 'number');
                let tmpA = document.getElementById(`A${i}`);
                inpA.setAttribute('id', `A${i}${j}`);
                inpA.setAttribute('class', `A`);
                tmpA.appendChild(inpA);
            }
        }
        //for inflating B

        for (let i = 0; i < RowB; i++) {
            const rowB = document.createElement('div');
            rowB.setAttribute('class', 'rowofB');
            rowB.setAttribute('id', `B${i}`);
            B.appendChild(rowB);
            for (let j = 0; j < ColumnB; j++) {
                const inpB = document.createElement('input');
                inpB.setAttribute('type', 'number');
                let tmpB = document.getElementById(`B${i}`);
                inpB.setAttribute('id', `B${i}${j}`);
                inpB.setAttribute('class', `B`);
                tmpB.appendChild(inpB);
            }
        }
        document.getElementById('plus').addEventListener('click',()=>{
            addition(RowA,ColumnA,ColumnB);
        })
    }
}
const inflateA = () => {
    let RowA = document.getElementById('RowA').value;
    let ColumnA = document.getElementById('ColumnA').value;
    document.getElementById('RowB').value = ColumnA;
    if (RowA > 6 || ColumnA > 6) {
        alert('Please Enter a Value less than 6!!');
    }
    fun();
}
const inflateB = () => {
    let RowB = document.getElementById('RowB').value;
    let ColumnB = document.getElementById('ColumnB').value;
    document.getElementById('ColumnA').value = RowB;
    if (RowB > 6 || ColumnB > 6) {
        alert('Please Enter a Value less than 6!!');
    }
    fun();
}

const back = (backup,a,b,RowA,ColumnA,ColumnB)=>{
    let display = document.getElementsByClassName('main')[0];
    display.innerHTML='';
    display.innerHTML=backup;
    // console.log(backup);
    let A = Array.from(document.getElementsByClassName('A'));
    let B = Array.from(document.getElementsByClassName('B'));
    let i = 0;
  a.forEach((e)=>{
    e.forEach((f)=>{
        A[i].value=f;
        i++;
    })
  })
  i=0;
  b.forEach((e)=>{
    e.forEach((f)=>{
        B[i].value=f;
        i++;
    })
  })
  document.getElementsByClassName('rowColSelector')[0].style.display='flex';

  document.getElementsByClassName('main')[0].style.justifyContent='center';
  Array.from(document.querySelectorAll('button')).forEach((e)=>{
    e.style.visibility='hidden';
  })
    document.getElementById('RowA').value=RowA;
    document.getElementById('ColumnA').value=ColumnA;
    document.getElementById('RowB').value=ColumnA;
    document.getElementById('ColumnB').value=ColumnB;

}

const addition = (RowA,ColumnA,ColumnB)=>{
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
        A = Array.from(document.getElementsByClassName('rowofA'));
        B = Array.from(document.getElementsByClassName('rowofB'));

        A.forEach((e)=>{
            let tmp = e.children
            tmp = Array.from(tmp);
            let tmp1=[];
            tmp.forEach((f)=>{
                tmp1.push(Number(f.value));
            })
            // console.log(tmp1);
            a.push(tmp1);
        })
        B.forEach((e)=>{
            // console.log(e)
            let tmp = e.children
            tmp = Array.from(tmp);
            let tmp1=[];
            tmp.forEach((f)=>{
                tmp1.push(Number(f.value));
            })
            // console.log(tmp1);
            b.push(tmp1);
        })

        //logic of Multiplication
        for(let i=0;i<RowA;i++){ // iterating over row
            let tmpRow = []; // i th row
            for(let j = 0 ; j<ColumnB;j++){ //iterating over column
                let c = 0; // i th element
                for(let k = 0; k<ColumnA;k++){
                    c+=a[i][k]*b[k][j];
                }
                tmpRow.push(c);
            }
            c.push(tmpRow);
        }
        let backup = document.getElementsByClassName('main')[0].innerHTML;
        display(c,RowA,ColumnB);
        document.getElementById('back').addEventListener('click',()=>{
            back(backup,a,b,RowA,ColumnA,ColumnB);
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
    location.href='multiplication.html';
}

const display = (c,RowA,ColumnB)=>{
    let display = document.getElementsByClassName('matrixContainer')[0];
    display.innerHTML='';
    const container = document.createElement('div');
    container.setAttribute('class','matrixA');
    display.appendChild(container);
    let A = document.getElementsByClassName('matrixA')[0];
    A.innerHTML = '';
    document.getElementsByClassName('heading')[0].innerHTML = 'Resultant Matrix';
    for (let i = 0; i < RowA; i++) {
        const rowA = document.createElement('div');
        rowA.setAttribute('class', 'rowofA');
        rowA.setAttribute('id', `A${i}`);
        A.appendChild(rowA);
        for (let j = 0; j < ColumnB; j++) {
            const inpA = document.createElement('input');
            inpA.setAttribute('type', 'number');
            let tmpA = document.getElementById(`A${i}`);
            inpA.setAttribute('id', `A${i}${j}`);
            inpA.setAttribute('class', `A`);
            tmpA.appendChild(inpA);
        }
    }
    A = Array.from(document.getElementsByClassName('A'));
    let i = 0;
  c.forEach((e)=>{
    e.forEach((f)=>{
        A[i].value=f;
        i++;
    })
  })
  document.getElementsByClassName('rowColSelector')[0].style.display='none';
  document.getElementsByClassName('main')[0].style.justifyContent='flex-start';
  Array.from(document.querySelectorAll('button')).forEach((e)=>{
    e.style.visibility='visible';
  })
  return 0;
}