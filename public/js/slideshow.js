function slide1() {
    document.getElementById('slideshow').src = "http://localhost/desafio_leo/public/img_slide/1.jpg";
    setTimeout("slide2()", 4000)
}

function slide2() {
    document.getElementById('slideshow').src = "http://localhost/desafio_leo/public/img_slide/2.jpg";
    setTimeout("slide3()", 4000)
}

function slide3() {
    document.getElementById('slideshow').src = "http://localhost/desafio_leo/public/img_slide/3.jpg";
    setTimeout("slide4()", 4000)
}

function slide4() {
    document.getElementById('slideshow').src = "http://localhost/desafio_leo/public/img_slide/4.jpg";
    setTimeout("slide1()", 4000)
}