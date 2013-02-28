<!DOCTYPE HTML>
<html xmlns:fb="http://ogp.me/ns/fb#">
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

<title>Läxöl</title>
<link href="style.css" rel="stylesheet" type="text/css">

<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD9MCPoXOz9GPuq75tW8ljnPIY9qucxCrU&sensor=false"></script>



<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">

	google.load("feeds", "1");
	function initialize() {
		var feed = new google.feeds.Feed("https://spreadsheets.google.com/feeds/list/0AvdaA0JYtu96dEpqWGEzeGpLV0JaMnJrNmpnLVFCLUE/od6/public/basic?alt=rss");
		feed.load(function(result) {
			if (!result.error) {
				var container = document.getElementById("feed");
				for (var i = 0; i < result.feed.entries.length; i++) {
					var entry = result.feed.entries[i];	
					 if (entry.content.split('ok: ')[1] == "Ja"){
						var div = document.createElement("div");
						var name = entry.content.split(',')[0].split('namn:')[1];  
						div.appendChild(document.createTextNode(name));
						container.appendChild(div);
					}
				}
			}
		});
	}
	google.setOnLoadCallback(initialize);
			
	function attending() {
		if(document.getElementById("attending").style.display == "" || document.getElementById("attending").style.display == "none"){		
			hideall();
			document.getElementById("attending").style.display = "block";
		}else {
			hideall();
			document.getElementById("sky").style.display = "block";
			document.getElementById("tree").style.display = "block";
		}
	}



</script>



<script type="text/javascript">
	function gmaps() {
		var myOptions = {
			center: new google.maps.LatLng(59.346014,18.077291),
			zoom: 16,
			mapTypeId: google.maps.MapTypeId.HYBRID,
			mapTypeControl: true,
			mapTypeControlOptions: {
				style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
				position: google.maps.ControlPosition.TOP_RIGHT
				},
				panControl: false,
				zoomControl: true,
				zoomControlOptions: {
					style: google.maps.ZoomControlStyle.LARGE,
					position: google.maps.ControlPosition.RIGHT_TOP
				},
				scaleControl: false,
				streetViewControl: true,
				streetViewControlOptions: {
					position: google.maps.ControlPosition.RIGHT_TOP
				}
		};
		
		var map = new google.maps.Map(document.getElementById("gmaps"),
			myOptions);
				  
		var Nimage = 'pix/logo_small.png';
		var nymble = new google.maps.Marker({
		  position: new google.maps.LatLng(59.347104,18.071332),
		  animation: google.maps.Animation.BOUNCE,
		  map: map,
		  icon: Nimage
		});
	}
	
	function hideall(){
		document.getElementById("tree").style.display = "none";
		document.getElementById("sky").style.display = "none";
		document.getElementById("when").style.display = "none";
		document.getElementById("gmaps").style.display = "none";
		document.getElementById("facebook").style.display = "none";
		document.getElementById("nymble").style.display = "none";
		document.getElementById("anmal").style.display = "none";
		document.getElementById("what").style.display = "none";
		document.getElementById("twitter").style.display = "none";
		document.getElementById("attending").style.display = "none";
		document.getElementById("who").style.display = "none";
	}

	function when(){
		if(document.getElementById("when").style.display == "" || document.getElementById("when").style.display == "none"){
			hideall();
			document.getElementById("when").style.display = "block";
		}else {
			hideall();
			document.getElementById("sky").style.display = "block";
			document.getElementById("tree").style.display = "block";
		}
	}
	
	function exolopen(){
		document.getElementById("event").style.display = "block";
	}
	
	function exolclose(){
		document.getElementById("event").style.display = "none";
	}
	
	function where(){
		if(document.getElementById("gmaps").style.display == "" || document.getElementById("gmaps").style.display == "none"){		
			hideall();
			document.getElementById("gmaps").style.display = "block";
			gmaps();
			document.getElementById("nymble").style.display = "block";
		}else {
			hideall();
			document.getElementById("sky").style.display = "block";
			document.getElementById("tree").style.display = "block";
		}
	}
	
	function facebook(){
		if(document.getElementById("facebook").style.display == "" || document.getElementById("facebook").style.display == "none"){		
			hideall();
			document.getElementById("facebook").style.display = "block";
		}else {
			hideall();
			document.getElementById("sky").style.display = "block";
			document.getElementById("tree").style.display = "block";
		}
	}
	
	function showevent() {
		if(document.getElementById("anmal").style.display == "" || document.getElementById("anmal").style.display == "none"){		
			hideall();
			document.getElementById("anmal").style.display = "block";
			
		}else {
			hideall();
			document.getElementById("sky").style.display = "block";
			document.getElementById("tree").style.display = "block";
		}
	}
	
	function what() {
		if(document.getElementById("what").style.display == "" || document.getElementById("what").style.display == "none"){		
			hideall();
			document.getElementById("what").style.display = "block";
			
		}else {
			hideall();
			document.getElementById("sky").style.display = "block";
			document.getElementById("tree").style.display = "block";
		}
	}
	
	function twitter() {
		if(document.getElementById("twitter").style.display == "" || document.getElementById("twitter").style.display == "none"){		
			hideall();
			document.getElementById("twitter").style.display = "block";
			
		}else {
			hideall();
			document.getElementById("sky").style.display = "block";
			document.getElementById("tree").style.display = "block";
		}
	}
	
	function who() {
		if(document.getElementById("who").style.display == "" || document.getElementById("who").style.display == "none"){		
			hideall();
			document.getElementById("who").style.display = "block";
			
		}else {
			hideall();
			document.getElementById("sky").style.display = "block";
			document.getElementById("tree").style.display = "block";
		}
	}

</script>

</head>

<body>
    <div id="fb-root"></div>
		<script>
		(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/sv_SE/all.js#xfbml=1&appId=366315383397439";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script> 
               
	<div class="container">
    	<div class="content">
            <div id="sky"></div>
            <div id="navbox">
                    <ul class="nav">
                        <li onclick="what()">VAD?</li>
                        <li onclick="who()">VILKA?</li>
                        <li onclick="when();">NÄR?</li>
                        <li onclick="where();">VAR?</li>
                        <li onclick="attending();">ATTENDING?</li>
                        <li onclick="showevent();">ANMÄL MIG!</li>
                        <li onclick="facebook()" style="padding: 4px 4px 0px 4px; width: 30px;"><img src="pix/facebook-icon.png" style="height: 25px;"/><span style="position:relative; top:-8px; left:5px;"></span></li>
                        <li onclick="twitter();" style="padding: 4px 4px 0px 4px; width: 30px;"><img src="pix/twitter_icon.png" style="height: 25px;"/><span style="position:relative; top:-8px; left:5px;"></span></li>
                    </ul>
                </div>
            <div id="tree" class="pos">
                    <img src="pix/branch_right.png" id="branch"/>
                    <img src="pix/logo.png" id="bird"/>
           </div>
           <div id="what" class="pos">
           		<img src="pix/border.png" style="float:left; position:relative; top: -33px;"/>
                <p>
                Slut på det roliga!
                </p>
                <br/>
                <p>
                
                Efter många fantastiska år på KTH ringer det äntligen ut för oss! Därför faller det på oss att anordna CL:s första examensöl - en chans att festa ut oss så det skallrar i fönstren. Vi hoppas att du vill titta förbi och önska oss lycka till i världen utanför!
                </p>
                <br/>
                <p>
                Ett examensöl är det ultimata /learning by doing/. För en liten skolpeng om 160kr får du ett fiffigt Läxölsglas och fri tillgång till skolbespisningens tappkran.
                </p>
                <br/>
                <p>
                Det blir ett sjudundrande läxförhör - flera års studier ska redovisas på några timmar, så se till att komma påläst! Ölkranarna står för öppna spjäll mellan 20:00 och 03:00, <img src="pix/logo-golden.png" style="float: right; position: relative; top: 13px;"/>så greppa glaset, hugg en 
                civilingenjör/lärare och kolla hur det egentligen ligger till med L'Hopitals regel och vem som kan prata längst om Skinner.
                </p>
                <br/>
                <p>
                Den proximala inlärningszonen har aldrig varit fetare än såhär.
                </p>
           </div>
           <div id="who" class="pos">
           		<table>
                <tr>
                <td>
                	<div style="border: 4px solid #FFFFFF; border-bottom:none; background:#FFFFFF;">
                    <img src="pix/profil/Johan.jpg" style="width:150px;" />
                    </div>
                    <div style="border-bottom: 4px solid #FFFFFF; background:#FFFFFF; color: #000000; font-size:12px; text-align:center;">
                    Johan Burmester
                    </div>
                </td>
                <td>
                	<div style="border: 4px solid #FFFFFF; border-bottom:none; background:#FFFFFF;">
                    <img src="pix/profil/Linnea.jpg" style="width:150px;" />
                    </div>
                    <div style="border-bottom: 4px solid #FFFFFF; background:#FFFFFF; color: #000000; font-size:12px; text-align:center;">
                    Linnéa Danielsson
                    </div>
                </td>
                <td>
                	<div style="border: 4px solid #FFFFFF; border-bottom:none; background:#FFFFFF;">
                    <img src="pix/profil/Oskar.jpg" style="width:150px;" />
                    </div>
                    <div style="border-bottom: 4px solid #FFFFFF; background:#FFFFFF; color: #000000; font-size:12px; text-align:center;">
                    Oskar Halléhn
                    </div>
                </td>
                <td>
                	<div style="border: 4px solid #FFFFFF; border-bottom:none; background:#FFFFFF;">
                    <img src="pix/profil/Olof.jpg" style="width:150px;" />
                    </div>
                    <div style="border-bottom: 4px solid #FFFFFF; background:#FFFFFF; color: #000000; font-size:12px; text-align:center;">
                    Olof Hedberg
                    </div>
                </td>
                <td>
                	<div style="border: 4px solid #FFFFFF; border-bottom:none; background:#FFFFFF;">
                    <img src="pix/profil/Ivan.jpg" style="width:150px;" />
                    </div>
                    <div style="border-bottom: 4px solid #FFFFFF; background:#FFFFFF; color: #000000; font-size:12px; text-align:center;">
                    Ivan Milles
                    </div>
                </td>
                </tr>
                <tr>
                <td>
                	<div style="border: 4px solid #FFFFFF; border-bottom:none; background:#FFFFFF;">
                    <img src="pix/profil/Frida.jpg" style="width:150px;" />
                    </div>
                    <div style="border-bottom: 4px solid #FFFFFF; background:#FFFFFF; color: #000000; font-size:12px; text-align:center;">
                    Frida Morberg
                    </div>
                </td>
                <td>
                	<div style="border: 4px solid #FFFFFF; border-bottom:none; background:#FFFFFF;">
                    <img src="pix/profil/Sofia.jpg" style="width:150px;" />
                    </div>
                    <div style="border-bottom: 4px solid #FFFFFF; background:#FFFFFF; color: #000000; font-size:12px; text-align:center;">
                    Sofia Rodell
                    </div>
                </td>
                <td>
                	<div style="border: 4px solid #FFFFFF; border-bottom:none; background:#FFFFFF;">
                    <img src="pix/profil/Johanna.jpg" style="width:150px;" />
                    </div>
                    <div style="border-bottom: 4px solid #FFFFFF; background:#FFFFFF; color: #000000; font-size:12px; text-align:center;">
                    Johanna Schyl
                    </div>
                </td>
                <td>
                	<div style="border: 4px solid #FFFFFF; border-bottom:none; background:#FFFFFF;">
                    <img src="pix/profil/Sebastian.jpg" style="width:150px;" />
                    </div>
                    <div style="border-bottom: 4px solid #FFFFFF; background:#FFFFFF; color: #000000; font-size:12px; text-align:center;">
                    Sebastian Schöld
                    </div>
                </td>
                <td>
                	<div style="border: 4px solid #FFFFFF; border-bottom:none; background:#FFFFFF;">
                    <img src="pix/logo.png" style="width:150px; padding: 23px 0;" />
                    </div>
                    <div style="border-bottom: 4px solid #FFFFFF; background:#FFFFFF; color: #000000; font-size:12px; text-align:center;">
                    ************
                    </div>
                </td>
                </tr>
                </table>
           </div>
           <div id="when" class="pos">
               <h1> APRIL 2012 </h1>
               <table id="calender" border="0">
                    <tr>
                        <th>Måndag</th><th>Tisdag</th><th>Onsdag</th><th>Torsdag</th><th>Fredag</th><th>Lördag</th><th>Söndag</th>
                      </tr>
                      <tr>
                        <td><div>26</td></div><td><div>27</td></div><td><div>28</td></div><td><div>29</td></div><td class="lat"><div>30</td></div><td><div>31</td></div><td><div>1</td></div>
                      </tr>
                      <tr>
                        <td><div>2</td></div><td><div>3</td></div><td><div>4</td></div><td><div>5</td></div><td class="lat"><div>6</td></div><td><div>7</td></div><td><div>8</td></div>
                      </tr>
                      <tr>
                        <td class="long"><div><div>9</td></div><td class="long"><div>10</td></div><td class="long"><div>11</td></div><td class="long"><div>12</td></div>
                        <td class="lat" style="padding:0; z-index:99;">
                                <div class="long" style="width:153px;" id="trettonde">
                                    <span style="position:relative; left:5px; top: -32px;">13</span>
                                    <img style="position:relative; top:10px; left:30px;" src="pix/logo_small.png"/>
                                </div> 
                        </td></div><td class="long"><div>14</td></div><td class="long"><div>15</td></div>
                      </tr>
                      <tr>
                        <td><div>16</td></div><td><div>17</td></div><td><div>18</td></div><td><div>19</td></div><td class="lat"><div>20</td></div><td><div>21</td></div><td><div>22</td></div>
                      </tr>
                      <tr>
                        <td><div>23</td></div><td><div>24</td></div><td><div>25</td></div><td><div>26</td></div><td class="lat"><div>27</td></div><td><div>28</td></div><td><div>29</td></div>
                      </tr>
                      <tr>
                        <td><div>30</td></div><td><div>1</td></div><td><div>2</td></div><td><div>3</td></div><td class="lat"><div>4</td></div><td><div>5</td></div><td><div>6</td></div>
                      </tr>
                 </table>
                 <img style="position: absolute; top: 190px; right: 297px;" src="pix/red_ring.png"/>
                 <div  id="placeholder" style="position: absolute; top: 228px; left: 578px; width:155px; height:70px; cursor:pointer;" onclick="exolopen()"> </div>
                 <div id="event">
                     <div style="width:10px; height:10px;">
                        <span onclick="exolclose();" style="color: rgb(242, 242, 242); font-weight: bold; position: relative; right: 0px; background: none repeat scroll 0% 0% rgb(102, 102, 102); font-size: 20px; left: 364px; padding: 6px 10px 7px 12px; top: 4px;">X</span>
                     </div>
                    <h2>LÄXÖL</h2>
                    <p>Fredag 13 april 2012</p>
                    <p>Nymble - KTH - Stockholm</p>
                    <p>Drick en avslutandeöl med en av dina examinerade vänner </p>
                    <a href="http://www.google.com/calendar/event?action=TEMPLATE&text=L%C3%A4x%C3%B6l&dates=20120413T170000Z/20120414T010000Z&details=Ta%20en%20ex%C3%B6l%20med%20dina%20v%C3%A4nner!&location=Nymble&trp=true&sprop=&sprop=name:ex%C3%B6l" target="_blank"><img src="//www.google.com/calendar/images/ext/gc_button1_sv.gif" border=0></a>
                    <a href="event.ics"><img src="pix/ical_icon.png"></a>
                </div>
            </div>
            <div id="gmaps" class="pos"></div>
            <div id="nymble"></div>
            <div id="facebook" class="pos">
                <div class="fb-border"><img src="pix/facebook.png" id="toploggo"/></div>
                <fb:comments href="http://www.johanburmester.se/exol/" data-num-posts="2" width="765" style="padding-top: 10px;"></fb:comments>
            </div>
            <div id="twitter" class="pos">
            <img src="pix/twitter-logo.png" style="position: relative; width: 160px; left: 14px; top: 15px;"/>
            	<div class="holder" style="position: relative; left: 214px; top: -115px;">
					<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
					<script>
						new TWTR.Widget({
							version: 2,
							type: 'search',
							search: '#Läxöl',
							interval: 30000,
							title: 'Följ CL\'s första exöl',
							subject: '&#35;Läxöl',
							width: 765,
							height: 410,
							theme: {
								shell: {
									background: '#33CCFF',
									color: '#ffffff'
								},
								tweets: {
									background: '#ffffff',
									color: '#444444',
									links: '#1985b5'
								}
							},
							features: {
								scrollbar: true,
								loop: true,
								live: true,
								behavior: 'default'
							}
						}).render().start();
                    </script>
            	</div>
            </div>
            <div id="anmal" class="pos" style="text-align:right; background:#D1CBE5;">
            	<img src="pix/stubbe.png" style="position: absolute; left: 53px; bottom: -92px; right: 723px;" />
                <div id="gras"> </div>
                <iframe src="https://docs.google.com/spreadsheet/viewform?formkey=dEpqWGEzeGpLV0JaMnJrNmpnLVFCLUE6MQ"
                    scrolling="yes"
                    frameborder="no"
                    style="border:none"
                    allowTransparency="true"
                    width="700"
                    height="530">
                 </iframe>
                 <img style="position: absolute; left: 0px;" src="pix/logo.png"/>
            </div>
            <div id="attending" class="pos">
            	<div style="padding: 10px; background: #FFFFFF; color: #FF3571;">
                Detta är en lista över de personer som har anmält sig. Den uppdateras kontinueligt men inte varje minut, det betyder att bara för att du inte står med på lista är du inte anmäl. Det är bekräftelsemailet som gäller.
                </div>
            	<div id="feed">
             	</div>                      
            </div>
		</div>
        <div class="footer">
            <fb:send href="http://johanburmester.se/exol/" data-font="verdana" style="position:relative;"></fb:send><span style="font-size: 10px; margin-left: 7px; position: relative; top: -4px;">Dela med dig av denna sida till en vän som du tycker kanske borde komma.</span>
        </div>
	</div>   
</body>
</html>

