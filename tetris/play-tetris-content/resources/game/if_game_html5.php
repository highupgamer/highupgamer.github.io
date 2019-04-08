<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="renderer" content="webkit" />
<meta name="force-rendering" content="webkit" />
<style>
			body,canvas,div{outline:none;-moz-outline-style:none;-moz-outline-style:none;-moz-user-select:none;-webkit-user-select:none;-ms-user-select:none;-khtml-user-select:none;-webkit-tap-highlight-color:rgba(0,0,0,0);}
			body{margin:0px;padding:0px;border:0px;overflow:hidden;}
			canvas{background-color:rgba(0,0,0,0);}
			#frameDiv{position:relative;width:100vw;height:100vh;display:table-cell;vertical-align:middle;}
			#contentDiv{display:table;margin:auto;}
			#GameDiv{position:relative;width:800px;height:600px;left:0px;top:0px;background:black;outline:none;-moz-outline-style:none;}
			#Cocos2dGameContainer{position:absolute;margin:0px;overflow:hidden;left:0px;top:0px;}
			#loadingText{position:absolute;top:50%;left:50%;width:100px;height:100px;margin-top:-50px;margin-left:-50px;border:8px solid #000000;color:#eeeeee;font-family:Verdana;font-size:16px;text-align:center;vertical-align:middle;line-height:100px;}
			#loadingDisplay{position:absolute;top:50%;left:50%;width:100px;height:100px;margin-top:-50px;margin-left:-50px;border:8px solid #eeeeee;border-top:8px solid #666666;border-radius:50%;animation:spin 1.5s linear infinite;}
			@keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
		</style>
</head>
<body>
<div id="frameDiv">
<div id="contentDiv">
<div id="GameDiv">
<canvas id="GameCanvas" width="800" height="600"></canvas>
</div>
<div id="loadingText">LOADING</div>
<div id="loadingDisplay"></div>
</div>
</div>
<script type="a0c97ae8f67fa7da828f550a-text/javascript">
			var isIFrame = window.frameElement && ( window.frameElement.nodeName == "IFRAME" );
			if ( !isIFrame ) { window.location.replace( window.location.protocol + "//" + window.location.hostname ); }
			else
			{
				//----------------------------------------------------------------
				
				var pageStartTimeMSEC = Date.now( );
				var cbid = '34CFAA0CFD75EF6A1';
				var isDesktop = '1' == '1';
				var isMobile = '' == '1';
				window.platformSrcDir = 'src-desktop/';
				
				var gameDiv = document.getElementById( "GameDiv" );
				var gameCanvas = document.getElementById( "GameCanvas" );				
				var settingsJS = document.createElement( 'script' ); settingsJS.async = false; settingsJS.src = window.platformSrcDir + "settings.js?cbid=" + getCBID( ); document.body.appendChild( settingsJS );
				var mainJS = document.createElement( 'script' ); mainJS.async = false; mainJS.src = "main-bps.js?cbid=" + getCBID( ); document.body.appendChild( mainJS );
				
				//----------------------------------------------------------------
				//----------------------------------------------------------------
				
				function getPageElapsedTimeMSEC( ) { return isIFrame ? window.parent.getPageElapsedTimeMSEC( ) : ( ( Date.now( ) - pageStartTimeMSEC ) ); }
				function getCBID( ) { return cbid; } 
				function getGameDiv( ) { return gameDiv; }			
				function getGameCanvas( ) { return gameCanvas; }					
				function removeLoadingDisplay( )
				{
					// window.parent.console.log( "removeLoadingDisplay: getPageElapsedTimeMSEC=" + getPageElapsedTimeMSEC( ) );
					// window.parent.trackPageEvent( "Game Load Duration MS", "", getPageElapsedTimeMSEC( ), true );
					{ var loadingText = document.getElementById( 'loadingText' ); if ( loadingText ) { loadingText.parentNode.removeChild( loadingText ); } { var loadingDisplay = document.getElementById( 'loadingDisplay' ); if ( loadingDisplay ) { loadingDisplay.parentNode.removeChild( loadingDisplay ); } } }
				 }
	            function trackEvent( category, action, opt_label, opt_value, opt_noninteraction ) { if ( isIFrame ) { window.parent.trackEvent( category, action, opt_label, opt_value, opt_noninteraction ); } }
	            function refreshAds( ) { if ( isIFrame ) { window.parent.refreshAds( ); } }
				function isGameAreaAdEnabled( ) { return isIFrame ? window.parent.canShowAds : false; }
				function isGameAreaAdActive( ) { return isIFrame ? window.parent.isGameAreaAdActive : false; }
	            function showGameAreaAd( ) { if ( isIFrame ) { window.parent.showGameAreaAd( ); } }
				function onGameAreaAdComplete( ) 
				{
	                var onGameAreaAdCompleteInterval = setInterval( function ( ) {
						if ( window.mBPSApp )
						{
	                        clearInterval( onGameAreaAdCompleteInterval );
							window.parent.document.activeElement.blur( );
							window.parent.document.getElementById( "gameIFrame" ).focus( );
							document.activeElement.blur( );
							document.getElementById( "GameCanvas" ).focus( );
							window.mBPSApp.dispatchAppMessage( 979287055 );
						}
	                }, 100 );
				}
				
				//----------------------------------------------------------------				
			}	
		</script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js" data-cf-settings="a0c97ae8f67fa7da828f550a-|49" defer=""></script></body>
</html>
