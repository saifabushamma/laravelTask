/*globl document*/
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

    reader.onload = function (e) {
        $('#blah')
        .attr('src', e.target.result);
};

    reader.readAsDataURL(input.files[0]);
}
}



var myName = document.getElementById('name'),
    mydesc = document.getElementById('desc'),
    myprice = document.getElementById('price'),
    mynamelive = document.getElementById('name-live'),
    mydesclive = document.getElementById('desc-live'),
    mypricelive = document.getElementById('price-live');


myName.onkeyup = function(){
    
    'use strict';
    mynamelive.textContent = this.value;
};

mydesc.onkeyup = function(){
    
    'use strict';
    mydesclive.textContent = this.value;
};

myprice.onkeyup = function(){
    
    'use strict';
    mypricelive.textContent = "$"+ this.value;
};


