//START BOOKMARK AND HOMEPAGE SCRIPT
var ua=navigator.userAgent.toLowerCase();
var ischrome=(ua.indexOf('chrome')!=-1);
var isfirefox=(ua.indexOf('firefox')!=-1);
var isKonq=(ua.indexOf('konqueror')!=-1);
var isSafari=(ua.indexOf('webkit')!=-1);
var isMac=(ua.indexOf('mac')!=-1);
var buttonStr=isMac?'Command/Cmd':'CTRL';
	
var bmTitle = "Spider-Solitaire-Game.com"; 
var bmUrl 	= "https://www.spider-solitaire-game.com";	
	
	// START BOOKMARK SCRIPT
	function Bookmark() {
	
		
		 if( window.external ){ 
			if(isfirefox){ //Firefox
				alert('Press the key combination CTRL + D to bookmark this site.');
			}else if(ischrome){ //Chrome
				alert('Press the key combination CTRL + D to bookmark this site.');
			}else{ // IE Favorite
				window.external.AddFavorite( bmUrl, bmTitle);
			}
		}else if( navigator.userAgent.match(/Android/i)
				|| navigator.userAgent.match(/webOS/i)
				 || navigator.userAgent.match(/iPhone/i)
				 || navigator.userAgent.match(/iPad/i)
				 || navigator.userAgent.match(/iPod/i)
				 || navigator.userAgent.match(/BlackBerry/i)
				 || navigator.userAgent.match(/Windows Phone/i)
				 ){
	    alert('You have to add this website to your Favorites manually.');
    }
		else{
			if(isKonq){ //Chrome
				alert('Press the key combination CTRL + B to bookmark this site.');
			}else if(window.home || isSafari){ // Firefox, Netscape, Safari, iCab
				alert('Press the key combination '+buttonStr+' + D to bookmark this site.');
			}else if(!window.print || isMac){ // IE5/Mac and Safari 1.0
				alert('Press the key combination Command/Cmd + D to bookmark this site.');
			}else{
				alert('You have to add this website to your Favorites manually.');
			}
		}
	}
	