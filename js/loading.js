var porcent = document.querySelector('.porcent');
var loading = document.querySelector('.loading');
var count = 4;
var load = setInterval(animate, 10);

function animate(){
    if(count == 100){
        loading.parentElement.removeChild(loading);
        clearInterval(load);
    }
    else{
        count = count + 1;
        porcent.textContent = count + '%';
    }
}