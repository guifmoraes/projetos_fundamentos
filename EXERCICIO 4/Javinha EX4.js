var nome,sobrenome;

function nomear() {
nome=document.getElementById('N').value;
sobrenome=document.getElementById('S').value;
document.getElementById('Result').style.color="red"
document.getElementById('Result').style.fontSize="10px"
document.getElementById('Result').style.fontStyle="normal"
document.getElementById('Result').style.fontWeight="Bold"
document.getElementById('Result').innerHTML= nome+" "+sobrenome;
if (nome==sobrenome) {
window.alert ("Nome invalido");
document.getElementById('N').value="";
document.getElementById('S').value="";
document.getElementById('Result').innerHTML= "";
}
}

function renomear(){
nome=document.getElementById('N').value;
sobrenome=document.getElementById('S').value;
document.getElementById('Result').style.color="green"
document.getElementById('Result').style.fontSize="14px"
document.getElementById('Result').style.fontStyle="italic"
document.getElementById('Result').style.fontWeight="normal"
document.getElementById('Result').innerHTML= sobrenome+","+nome;
if (nome==sobrenome) {
window.alert ("Nome invalido");
document.getElementById('N').value="";
document.getElementById('S').value="";
document.getElementById('Result').innerHTML= "";
}
}

function ImagemGrande(x) {
x.style.height = "150px";
x.style.width = "150px";
}
  
function ImagemNormal(x) {
x.style.height = "100px";
x.style.width = "100px";
}

function Select(){
window.alert ("Avatar Selecionado")
}

function Fonte(){
document.getElementById('Result').style.color="blue"
}

function Fonte2() {
if (document.getElementById('Result').innerHTML== nome+" "+sobrenome)  {
document.getElementById('Result').style.color="red"
}
if (document.getElementById('Result').innerHTML== sobrenome+","+nome)  {
    document.getElementById('Result').style.color="green" 
}
}