var x,y;

function numero(n) {
document.getElementById('Conta').innerHTML += n;
document.getElementById('Resp').innerHTML += n;
}    
function Mais() {
x= document.getElementById('Resp').innerHTML
document.getElementById('Conta').innerHTML += "+";
document.getElementById('Resp').innerHTML = "";
}

function CE() {
document.getElementById('Resp').innerHTML = 0;
}

function C() {

}
            
function B() {

}
            
function Barra() {

}
                     
function Vezes() {

}
        
function Menos() {

}

function MBM() {

}

function Virgula() {

}
            
function Igual() {
var z;
y= document.getElementById('Resp').innerHTML

if (document.getElementById('Conta').innerHtml == "+") {
z= parseInt (x) + parseInt (y)
document.getElementById('Resp').innerHTML= z;
}
}