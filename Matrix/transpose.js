const fun = () => {
    let Row = document.getElementById('Row').value;
    let Column = document.getElementById('Column').value;
    if (Row > 6 || Column > 6) {
        alert('Please Enter a Value less than 6!!');
    }
    //setting id is remaining it will be set at the time of append inside of loop
    let decide = inflate(Row, Column);
    if (decide == 1) {
        document.getElementById('plus').addEventListener('click', () => {
            transpose(Row, Column);
        })
    }
}

const inflate = (Row, Column) => {
    console.log('hi');
    const A = document.getElementsByClassName('matrixA')[0];
    A.innerHTML = '';
    if (Row != '' && Column != '') {
        document.getElementsByClassName('heading')[0].innerHTML = 'Enter Values and<br>Click on the Plus'
        for (let i = 0; i < Row; i++) {
            const rowA = document.createElement('div');
            rowA.setAttribute('class', 'row');
            rowA.setAttribute('id', `A${i}`);
            A.appendChild(rowA);
            for (let j = 0; j < Column; j++) {
                const inpA = document.createElement('input');
                inpA.setAttribute('type', 'number');
                let tmpA = document.getElementById(`A${i}`);
                inpA.setAttribute('id', `A${i}${j}`);
                inpA.setAttribute('class', `A`);
                tmpA.appendChild(inpA);
            }
        }
        return 1;
    }
    else { return 0; }
}
const transpose = (Row, Column) => {
    let A = Array.from(document.getElementsByClassName('A'));
    let lamp = true
    A.forEach((e) => {
        if (e.value == '') {
            lamp = false;
        }
    });
    if (lamp) {
        let a = [];
        A = Array.from(document.getElementsByClassName('row'));
        A.forEach((e) => {
            let tmp = e.children
            tmp = Array.from(tmp);
            let tmp1 = [];
            tmp.forEach((f) => {
                tmp1.push(Number(f.value));
            })
            // console.log(tmp1);
            a.push(tmp1);
        })
        let backup = document.getElementsByClassName('chooser-after')[0].innerHTML;
        display(a, Row, Column);
        document.getElementById('back').addEventListener('click', () => {
            back(backup, a, Row, Column);
        })
        document.getElementById('reset').addEventListener('click', () => {
            refresh();
        })
    }

    else {
        alert('Please Enter All the Values');
    }
}
const refresh = () => {
    location.href = 'transpose.html';
}
const back = (backup, a, Row, Column) => {
    document.getElementsByClassName('chooser-after')[0].innerHTML = backup;
    Array.from(document.querySelectorAll('button')).forEach((e) => {
        e.style.visibility = 'hidden';
    })
    document.getElementsByClassName('heading')[0].innerHTML = 'Enter Values and<br>Click on the Arrow'
    let A = Array.from(document.getElementsByClassName('A'));
    let i = 0;
    a.forEach((e) => {
        e.forEach((f) => {
            A[i].value = f;
            i++;
        })
    })
    document.getElementById('Row').value = Row;
    document.getElementById('Column').value = Column;
    document.getElementById('plus').addEventListener('click', () => {
        transpose(Row, Column);
    })
}
const display = (a, Row, Column) => {
    inflate(Column, Row);
    let A = Array.from(document.getElementsByClassName('row'));
    let Aa = []
    A.forEach((e) => {
        let tmp = e.children
        tmp = Array.from(tmp);
        let tmp1 = [];
        tmp.forEach((f) => {
            tmp1.push(f);
        })
        // console.log(tmp1);
        Aa.push(tmp1);
    })
    for (let j = 0; j < Column; j++) {
        for (let i = 0; i < Row; i++) {
            Aa[j][i].value=a[i][j];
        }
    }
    document.getElementsByClassName('heading')[0].innerHTML = 'Resultant Matrix'
    document.querySelector('.matrixContainer>div').style.width = '54%';
    document.querySelector('.matrixContainer>div').style.height = '83%';
    Array.from(document.querySelectorAll('button')).forEach((e) => {
        e.style.visibility = 'visible';
    })
    document.getElementsByClassName('rowColSelector')[0].style.display='none';
    document.getElementById('plus').style.display='none';
    return 0;
}