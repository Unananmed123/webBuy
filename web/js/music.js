"use strict";

const btn1 = document.querySelector('.infoBtn1');
let infoDiv1 = document.querySelector('.info1');

const btn2 = document.querySelector('.infoBtn2');
let infoDiv2 = document.querySelector('.info2');

const btn3 = document.querySelector('.infoBtn3');
let infoDiv3 = document.querySelector('.info3');

const btn4 = document.querySelector('.infoBtn4');
let infoDiv4 = document.querySelector('.info4');

let isMenuShow = false;


// --------------Nicery--------------
btn1.addEventListener("click", function () {
    if (isMenuShow) {
        infoDiv1.style.visibility = 'hidden';
        isMenuShow = false;
    } else {
        infoDiv1.style.visibility = 'visible';
        isMenuShow = true;
    }
});

//--------------+--------------


//--------------New jazz 1--------------
btn2.addEventListener("click", function () {
    if (isMenuShow) {
        infoDiv2.style.visibility = 'hidden';
        isMenuShow = false;
    } else {
        infoDiv2.style.visibility = 'visible';
        isMenuShow = true;
    }
});
//--------------+--------------

//--------------New jazz 2--------------
btn3.addEventListener("click", function () {
    if (isMenuShow) {
        infoDiv3.style.visibility = 'hidden';
        isMenuShow = false;
    } else {
        infoDiv3.style.visibility = 'visible';
        isMenuShow = true;
    }
});

//--------------+--------------


//--------------Random Music--------------
btn4.addEventListener("click", function () {
    if (isMenuShow) {
        infoDiv4.style.visibility = 'hidden';
        isMenuShow = false;
    } else {
        infoDiv4.style.visibility = 'visible';
        isMenuShow = true;
    }
});
//--------------+--------------