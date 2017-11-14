document.getElementById("left").onclick = sliderLeft;
document.getElementById("right").onclick = sliderRight;
autoSlide();
var res=0;
var timer;
function autoSlide() {
    timer=setTimeout(sliderRight,2000);
}
function sliderLeft() {
    var polosa=document.getElementById('polosa');
    res=res+512;
    /*alert(res);*/
    if(res>=512){
        res=-2048;
    }
    polosa.style.left=res+'px';
}

function sliderRight() {
    var polosa=document.getElementById('polosa');

    res=res-512;
    if(res<-2048){
        res=0;
    }
    polosa.style.left=res+'px';
    autoSlide();
}



function getTable(e) {
    e.preventDefault();
    alert('asd;lsa;dl');
}

$(function () {
   $('#test1').on('click',function () {
    alert("sdadas");
   });




});