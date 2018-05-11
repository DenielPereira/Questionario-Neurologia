var hi = document.querySelectorAll('input.form-control');
for (var i = 0; i < hi.length; i++) hi[i].onblur = function(){
this.classList.add('hl'); 
}
function highlightAll() { 
    for (var i = 0; i < hi.length; i++) 
    hi[i].classList.add('hl'); 
}