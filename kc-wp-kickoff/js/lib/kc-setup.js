/*
@licstart  The following is the entire license notice for the 
JavaScript code in this page.

	Copyright (C) YYYY  Developer

	The JavaScript code in this page is free software: you can
	redistribute it and/or modify it under the terms of the GNU
	General Public License (GNU GPL) as published by the Free Software
	Foundation, either version 3 of the License, or (at your option)
	any later version.  The code is distributed WITHOUT ANY WARRANTY;
	without even the implied warranty of MERCHANTABILITY or FITNESS
	FOR A PARTICULAR PURPOSE.  See the GNU GPL for more details.

	As additional permission under GNU GPL version 3 section 7, you
	may distribute non-source (e.g., minimized or compacted) forms of
	that code without the copy of the GNU GPL normally required by
	section 4, provided you include this license notice and a URL
	through which recipients can access the Corresponding Source.


@licend  The above is the entire license notice
for the JavaScript code in this page.
*/

/* INIT HTML5 ELEMENTS ON THE DOM **********/
(function(){
	var HTML5ElemNames=["article","aside","audio","bdi","canvas","command","datalist","details","embed","figcaption","figure","footer","header","hgroup","keygen","mark","meter","nav","output","progress","rp","rt","ruby","section","source","summary","time","track","video","wbr"];
	function HTML5InitElemsIE(arr){
		for(var elem in arr){
			document.createElement(arr[elem]);
		}
	}
	HTML5InitElemsIE(HTML5ElemNames);
})();
/* *****************************************/
