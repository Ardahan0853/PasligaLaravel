function AJAX() {
   var ajax = false;
   // Internet Explorer (5.0+)
   try {
     ajax = new ActiveXObject("Msxml2.XMLHTTP"); 
   } catch (e) {
      try {
        ajax = new ActiveXObject("Microsoft.XMLHTTP");
      } catch (e) {
        ajax = false;
      }
   }
   // Mozilla veya Safari
   if ( !ajax && typeof XMLHttpRequest != 'undefined' ) {
     try{
        ajax = new XMLHttpRequest();
     }catch(e) {    
        ajax = false;
     }
   }
   // Diger (IceBrowser)
   if ( !ajax && window.createRequest ) {
	 try{
        ajax = window.createRequest();
     }catch(e) {  
        ajax = false;
     }
   }
	return ajax;
}
// POST işlemleri
function JXP(yukleniyor, yer, dosya, sc) {
	ajax = new AJAX();
	if ( ajax ) {
		ajax.onreadystatechange = function () {}
		ajax.abort()
	}
    ajax.onreadystatechange = function () {	Loading(yukleniyor, yer) }
	ajax.open('POST', dosya, true)
	ajax.setRequestHeader("If-Modified-Since", "Sat, 1 Jan 2000 00:00:00 GMT")
	ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded; charset=UTF-8')
//    ajax.setRequestHeader("Content-length", sc.length)
//    ajax.setRequestHeader("Connection", "close")
	ajax.send(sc)		
}
// Yükleme işlemleri
function Loading(yukleniyor, yer) {
	if( yukleniyor == 1 && yer != 'no_id' ) {
		if( ajax.readyState == 1 || ajax.readyState == 2 || ajax.readyState == 3 ) {
			var loading = '<img src="/img/loading.gif" width="60" height="15" alt="Yükleniyor ..." />'
			document.getElementById(yer).innerHTML = loading;
		}
	}
	if( ajax.readyState == 4 && yer != 'no_id' ) {
		if (ajax.status == 200) {
            document.getElementById(yer).innerHTML = ajax.responseText;
        } else {
            document.getElementById(yer).innerHTML = '<strong>HATA:</strong> ' + ajax.statusText;
        }
		function AJAX() {};
    }
}
// Özel karakterleri zararsız hale dönüştür
// ( Fix Character )
function fc_(text) {
	var temp;
	temp = encodeURIComponent(text);
	return temp;
}