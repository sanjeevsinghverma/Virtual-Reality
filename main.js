var startExperienteBtn = document.getElementById('start_experience');
var box=document.getElementById('redSphere');


startExperienteBtn.onclick = function(){
    document.getElementById('container').outerHTML = '';
    document.getElementsByTagName('a-scene')[0].style.zIndex = 'auto';
};
box.onclick=function()
{
	box.setAttribute("radius","0.8")
	console.log("enter")
};