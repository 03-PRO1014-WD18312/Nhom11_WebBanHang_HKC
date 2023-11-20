let slideIndex = 0;
console.log(slideIndex);

slide(slideIndex);
function nextSlide(n) {
    slide(slideIndex += n);
}


function slide() {
    let image = document.getElementsByClassName('mySlide');
    if(slideIndex < 0){
        slideIndex = image.length - 1;
    }
    if(slideIndex >= image.length){
        slideIndex = 0;
    }
    for (let i = 0; i < image.length; i++) {
        image[i].style.display = 'none';
        
    }
    image[slideIndex].style.display = 'block';
    
}

let auto;
function autoSlide() {
    let image = document.getElementsByClassName('mySlide');

    if (slideIndex >= image.length) {
        slideIndex = 0;
    }
    
    for (let i = 0; i < image.length; i++) {
        image[i].style.display = 'none';
    }

    image[slideIndex].style.display = 'block';
    slideIndex++;
    auto = setTimeout(autoSlide, 2000);
}
autoSlide();

function stopSlide(){
    clearInterval(auto);
}

