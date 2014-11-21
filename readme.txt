installation:
- alles im upload bereich hochladen
- in die index.htm vom design gehen
- über dem ende vom head bereich </head> das hier einfügen:

<link rel="stylesheet" href="include/includes/css/jquery.hoverZoom.css">
<script type="text/javascript"><!--//--><![CDATA[//><!--
sfHover = function(){
	var sfEls = document.getElementById("nav").getElementsByTagName("LI");
	for (var i=0; i<sfEls.length; i++){
		sfEls[i].onmouseover=function(){
			this.className+=" sfhover";
		}
		sfEls[i].onmouseout=function(){
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
		}
	}
}
if (window.attachEvent) window.attachEvent("onload", sfHover);
//--><!]]></script>
<script src="include/includes/js/jquery.hoverZoom.js"></script>