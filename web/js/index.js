"use strict";

let indexValue = 0;
function slideShow(){
    setTimeout(slideShow, 2300)
    let x;
    const img = document.querySelectorAll(".imgInImgIndex");
    const div = document.querySelector('.ImgInDiv')
    for (x = 0; x < img.length; x++){
        img[x].style.display = 'none';
    }
    indexValue++;
    if (indexValue > img.length){
        indexValue = 1;
    }
    img[indexValue -1].style.display = 'block';
}
slideShow();
