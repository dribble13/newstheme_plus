// JavaScript Document

function highlight(state) {
element=event.srcElement;
if (element.tagName=='INPUT') {
etype=element.type;
if ((etype=='text'))
	{
	if(state==1){ 
	element.className="onIE"; 
	}
	 else {element.className="on";}
	}
//element.focus();
}
}