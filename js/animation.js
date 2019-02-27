window.addEventListener('load', function(e){
    console.log('( ͡° ͜ʖ ͡°)');
    
    let div = document.createElement('div');
    div.classList.add('chargement');
    div.innerHTML = "<p class=chargementLettre>W</p>";
    document.body.appendChild(div);
    div.addEventListener('animationend', function(){
        document.body.removeChild(div);
    });

});