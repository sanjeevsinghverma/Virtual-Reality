<!DOCTYPE html>
<html lang="en">
<head>
<style>
#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
</style>
	<!-- Meta -->
    <meta charset="utf-8">
    <title>Virtual Reality Museum in A-Frame</title>

  
    

	<!-- Favicon -->
    <link rel="icon" href="favicon.png">
	
	<!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	
    <meta name="description" content="Virtual-Reality">
	<meta name="author" content="">
		
    <link rel="stylesheet" type="text/css" href="style.css">
 <script type="text/javascript">
    AFRAME.ASSETS_PATH = "./assets";
  </script>

    <script src="js/aframe.0.7.0.min.js"></script>
    <script src="js/aframe-extras.min.js"></script>
<script src="js/aframe-material.js"></script>
    <script src="js/lzma.js"></script>
    <script src="js/ctm.js"></script>
    <script src="js/CTMLoader.js"></script>

    <script src="js/aframe-teleport-controls.min.js"></script>
    <script src="js/spheres_anim.js"></script>
    <script src="js/anim_1.js"></script>
    <script src="js/anim_2.js"></script>
    <script src="js/mocap.js"></script>
    <script src="js/envMapMaterial.js"></script>
    <script src="js/ctm_component.js"></script>
    <script src="js/mobile_component.js"></script>
     <script>
    AFRAME.registerComponent('change-color-on-click', {
    // Could use a schem to preserve the color! then simply change it on update
    // if clicked?
    init: function () {
	var x=0;
    var COLORS = [
    'pink',
    //'blue',
    'yellow',
    'red',
    'peachpuff',
    '#2EAFAC',
    '#BAE'];
    this.el.addEventListener('click', function (evt) {
    var randomIndex = Math.floor(Math.random() * COLORS.length);
    var newColor = COLORS[randomIndex];
    this.setAttribute('material', 'color', newColor);
	x=x+1;
    console.log('I was clicked at: ', evt.detail.intersection.point, "and my new color is: ", newColor);
	console.log(' x' , x);
    });
    }
    });
  </script>
  <script>
    AFRAME.registerComponent('onject-change', {
    // Could use a schem to preserve the color! then simply change it on update
    // if clicked?
    init: function () {
	var index =0 ;
    var COLORS = [
    '#why-male-models1',
    //'blue',
    '#why-male-models',];
    this.el.addEventListener('click', function (evt) {
   var randomIndex = Math.floor(Math.random() * COLORS.length);
    var newColor = COLORS[randomIndex];
    this.setAttribute('src', newColor,newColor);
    console.log('I was clicked at: ', evt.detail.intersection.point, "and my new color is: ", newColor);
    });
    }
    });
  </script>
  <script>
    AFRAME.registerComponent('box-click', {
    // Could use a schem to preserve the color! then simply change it on update
    // if clicked?
    init: function () {
	
    var COLORS = [
    '#why-male-models1',
    //'blue',
    '#why-male-models',];
    this.el.addEventListener('click', function (evt) {
    
    
    console.log('Item Added', evt.detail.intersection.point, "and my new color is: ", index);
    });
    }
    });
  </script>
  <script>
  var items=0;
function myFunction() {
    
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
	items = items+1;
	console.log('Items', items);
	var x="<?php ex(); ?>";
	//alert(x);
}
</script>
  </head>

  <body>
	<?php
	
	function ex()
{
	$servername = "localhost";
$username = "root";
$password = "";
$dbname="vr";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
//echo"Connected";
}
$sql = "INSERT INTO vr_table (Name, Product, Price, Quantity)
VALUES ('Sanjeev', 'Mara Black Puffer Jacket', '100','1')";

if (mysqli_query($conn, $sql)) {
    //echo "New record created successfully";
} else {
    echo "Error: ";
}
mysqli_close($conn);
}
  
?>
  
  
  
  
    <div id="container" class="container">
      <div class="info">
        <div class="company"><a href="" target="_blank">Digital Retail Store</a></div>
        <div class="title"></div>
        <div class="logo"><a href="" target="_blank"><img src="img/sqs_100x100.png"></a></div>
        <a class="button" id="start_experience" href="#">Enter</a>
        <div class="instructions">
          <div><strong>VR</strong>: Hand controllers and teleport with trigger.</div>
          <div><strong>Desktop</strong>: Keyboard (WASD/arrows) and mouse.</div>
          <div><strong>Mobile</strong>: Gaze cursor and teleportation.</div>
        </div>
      </div>
    </div>

    <!--<a-scene stats>-->

    <a-scene>
	

  
      
      <a-entity mobile></a-entity>

      <a-entity light="type: directional; color: #FFF; intensity: 0.5" position="2 20 0"></a-entity>
      <a-entity light="type: ambient; color: #FFF"></a-entity>
      
	  
	    
      
	  
	  
      <!-- Custom components with animations -->
      <a-entity spheres material="shader: envMapMaterial; src:textures/cube/hall/; "></a-entity>
      <a-entity anim_1></a-entity>
      <a-entity anim_2></a-entity>

      <!-- - Custom components with animations -->

      <a-assets>
        <a-mixin id="checkpoint"></a-mixin>
        <a-mixin id="checkpoint-hovered" color="#6CEEB5"></a-mixin>
          <a-asset-item id="why-male-models" src="man/man.dae"></a-asset-item>
		  <a-asset-item id="why-male-models1" src="man1/man.dae"></a-asset-item>
		  <a-asset-item id="why-male-models2" src="man2/man.dae"></a-asset-item>
		  
		   <a-asset-item id="chair" src="chair/chair.dae"></a-asset-item>
		   <a-asset-item id="tree-obj" src="phone/I Phone 4 V01.obj"></a-asset-item>
    <a-asset-item id="tree-mtl" src="phone/I Phone 4 V01.mtl"></a-asset-item>
	<img id="tree-texture" src="phone/IP4 Texture.jpg">
	
	
	<!-- machine -->
        <a-asset-item id="machine-obj" src="machine/DB_Apps&Tech_04_13.obj"></a-asset-item>
		<a-asset-item id="machine-mtl" src="machine/DB_Apps&Tech_04_13.mtl"></a-asset-item>
          <!-- - machine -->
	<!-- female -->
        <a-asset-item id="female-obj" src="female/D3D-P-BUS-11hi.obj"></a-asset-item>
		<a-asset-item id="female-mtl" src="female/D3D-P-BUS-11hi.mtl"></a-asset-item>
         <img id="female-texture" src="female/D3D-P-BUS-11c.png">
        <!-- - female -->
		<!-- tv -->
        <a-asset-item id="tv-obj" src="tv/HDTV OBJ.obj"></a-asset-item>
		<a-asset-item id="tv-mtl" src="tv/HDTV OBJ.mtl"></a-asset-item>
         <img id="tv-texture" src="tv/Forest Image.jpg">
        <!-- - tv -->
	
	
	
       

	   <img id="sky_sphere-texture" src="textures/sky_sphere.jpg">

        <a-sound src="audio/84529__cmusounddesign__02-museum.ogg"
                 autoplay="true"
                 loop="true"
                 position="1 1 0"></a-sound>

        <a-sound src="audio/219462__cediez__musee-victoria-londres-grand-escalier.ogg"
                 autoplay="true"
                 loop="true"
                 position="1 1 10"></a-sound>


        <!-- floor -->
        <a-asset-item id="floor-obj" src="models/floor.obj"></a-asset-item>
        <img id="floor-texture" src="textures/floor.jpg">
        <img id="floor_normal-texture" src="textures/floor_normal.jpg">
        <!-- - floor -->

        <!-- hall -->
        <a-asset-item id="hall-obj" src="models/hall.obj"></a-asset-item>
        <img id="hall-texture" src="textures/hall.jpg">
        <!--<img id="hall_normal-texture" src="textures/hall_normal.jpg">-->
        <!-- - hall -->
		
	

        <!-- hall low floor -->
        <!-- this piece is only meant for teleportation -->
        <a-asset-item id="hall_low_floor-obj" src="models/hall_low_floor.obj"></a-asset-item>

        <!-- - hall low floor-->

        <!-- acropolis -->
        <a-asset-item id="acropolis-obj" src="models/acropolis.obj"></a-asset-item>
        <img id="acropolis-texture" src="textures/acropolis.jpg">
        <!-- - acropolis -->

        <!-- castle_lake -->
        <a-asset-item id="castle_lake-obj" src="models/castle_lake.obj"></a-asset-item>
        <img id="castle_lake-texture" src="textures/castle_lake.jpg">
        <!-- - castle_lake -->

        <!-- good_samaritan -->
        <a-asset-item id="good_samaritan-obj" src="models/good_samaritan.obj"></a-asset-item>
        <img id="good_samaritan-texture" src="textures/good_samaritan.jpg">
        <!-- - good_samaritan -->

        <!-- moonlight -->
        <a-asset-item id="moonlight-obj" src="models/moonlight.obj"></a-asset-item>
        <img id="moonlight-texture" src="textures/moonlight.jpg">
        <!-- - moonlight -->

        <!-- podiums -->
        <a-asset-item id="podiums-obj" src="models/podiums.obj"></a-asset-item>
        <img id="podiums-texture" src="textures/podiums.jpg">
        <!-- - podiums -->

        <!-- lamps -->
        <a-asset-item id="lamps-obj" src="models/lamps.obj"></a-asset-item>
        <img id="lamps-texture" src="textures/lamps.jpg">
        <!-- - lamps -->

        <!-- david -->
        <!--<a-asset-item id="david-obj" src="models/david.obj"></a-asset-item>-->
        <a-asset-item id="david-ctm" src="models/david.ctm"></a-asset-item>
        <!--<img id="david-texture" src="textures/david.jpg">-->
        <!-- - david -->

        <!-- female_head -->
        <!--<a-asset-item id="female_head-obj" src="models/female_head.obj"></a-asset-item>-->
        <a-asset-item id="female_head-ctm" src="models/female_head.ctm"></a-asset-item>
        <!--<img id="female_head-texture" src="textures/female_head.jpg">-->
        <!-- - female_head -->

        <!-- lion -->
        <a-asset-item id="lion-obj" src="models/lion.obj"></a-asset-item>
	
        <!-- <a-asset-item id="lion-ctm" src="models/lion.ctm"></a-asset-item>-->
        <img id="lion-texture" src="textures/lion.jpg">
        <!-- - lion -->

        <!-- greek_bust -->
        <!--<a-asset-item id="greek_bust-obj" src="models/greek_bust.obj"></a-asset-item>-->
        <a-asset-item id="greek_bust-ctm" src="models/greek_bust.ctm"></a-asset-item>
        <!--<img id="greek_bust-texture" src="textures/greek_bust.jpg">-->
        <!-- - greek_bust -->

        <!-- old_man -->
        <!--<a-asset-item id="old_man-obj" src="models/old_man.obj"></a-asset-item>-->
        <a-asset-item id="old_man-ctm" src="models/old_man.ctm"></a-asset-item>
        <!--<img id="old_man-texture" src="textures/old_man.jpg">-->
        <!-- - old_man -->

        <!-- nefertiti -->
        <!--<a-asset-item id="nefertiti-obj" src="models/nefertiti.obj"></a-asset-item>
        <a-asset-item id="nefertiti-ctm" src="models/nefertiti.ctm"></a-asset-item>
        <!--<img id="nefertiti-texture" src="textures/nefertiti.jpg">-->
        <!-- - nefertiti -->

        <!-- fractal_1 -->
        <!--<a-asset-item id="fractal_1-obj" src="models/fractal_1.obj"></a-asset-item>
        <a-asset-item id="fractal_1-ctm" src="models/fractal_1.ctm"></a-asset-item>-->
        <!--<img id="fractal_1-texture" src="textures/fractal_1.jpg">-->
        <!-- - fractal_1 -->

        <!-- fractal_2 -->
        <!--<a-asset-item id="fractal_2-obj" src="models/fractal_2.obj"></a-asset-item>
        <a-asset-item id="fractal_2-ctm" src="models/fractal_2.ctm"></a-asset-item>-->
        <!--<img id="fractal_2-texture" src="textures/fractal_2.jpg">-->
        <!-- - fractal_2 -->

        <!-- fractal_3 -->
        <!--<a-asset-item id="fractal_3-obj" src="models/fractal_3.obj"></a-asset-item>
        <a-asset-item id="fractal_3-ctm" src="models/fractal_3.ctm"></a-asset-item>-->
        <!--<img id="fractal_3-texture" src="textures/fractal_3.jpg">-->
        <!-- - fractal_3 -->

        <!-- female_helmet -->
        <!--<a-asset-item id="female_helmet-obj" src="models/female_helmet.obj"></a-asset-item>-->
        <a-asset-item id="female_helmet-ctm" src="models/female_helmet.ctm"></a-asset-item>
        <!--<img id="female_helmet-texture" src="textures/female_helmet.jpg">-->
        <!-- - female_helmet -->

        <!-- monk_uv -->
        <!--<a-asset-item id="monk_uv-obj" src="models/monk_uv.obj"></a-asset-item>
        <a-asset-item id="monk_uv-ctm" src="models/monk_uv.ctm"></a-asset-item>-->
        <!--<img id="monk_uv-texture" src="textures/monk_uv.jpg">-->
        <!-- - monk_uv -->

        <!-- david_bike_hall_3 -->
        <!--<a-asset-item id="david_bike_hall_3-obj" src="models/david_bike_hall_3.obj"></a-asset-item>-->
        <a-asset-item id="david_bike_hall_3-ctm" src="models/david_bike_hall_3.ctm"></a-asset-item>
        <!--<img id="david_bike_hall_3-texture" src="textures/david_bike_hall_3.jpg">-->
        <!-- - david_bike_hall_3 -->


        <!-- mocaps -->
        <a-asset-item id="am_threejs_CEC_BODY_1_HEAD-mocap" src="js/mocap/am_threejs_CEC_BODY_1_HEAD.js"></a-asset-item>
        <a-asset-item id="am_threejs_CEC_BODY_1_LEFT-mocap" src="js/mocap/am_threejs_CEC_BODY_1_LEFT.js"></a-asset-item>
        <a-asset-item id="am_threejs_CEC_BODY_1_RIGHT-mocap" src="js/mocap/am_threejs_CEC_BODY_1_RIGHT.js"></a-asset-item>

        <a-asset-item id="am_threejs_CEC_BODY_2_HEAD-mocap" src="js/mocap/am_threejs_CEC_BODY_2_HEAD.js"></a-asset-item>
        <a-asset-item id="am_threejs_CEC_BODY_2_LEFT-mocap" src="js/mocap/am_threejs_CEC_BODY_2_LEFT.js"></a-asset-item>
        <a-asset-item id="am_threejs_CEC_BODY_2_RIGHT-mocap" src="js/mocap/am_threejs_CEC_BODY_2_RIGHT.js"></a-asset-item>

        <a-asset-item id="am_threejs_CEC_BODY_3_HEAD-mocap" src="js/mocap/am_threejs_CEC_BODY_3_HEAD.js"></a-asset-item>
        <a-asset-item id="am_threejs_CEC_BODY_3_LEFT-mocap" src="js/mocap/am_threejs_CEC_BODY_3_LEFT.js"></a-asset-item>
        <a-asset-item id="am_threejs_CEC_BODY_3_RIGHT-mocap" src="js/mocap/am_threejs_CEC_BODY_3_RIGHT.js"></a-asset-item>

        <a-asset-item id="am_threejs_CEC_BODY_4_HEAD-mocap" src="js/mocap/am_threejs_CEC_BODY_4_HEAD.js"></a-asset-item>
        <a-asset-item id="am_threejs_CEC_BODY_4_LEFT-mocap" src="js/mocap/am_threejs_CEC_BODY_4_LEFT.js"></a-asset-item>
        <a-asset-item id="am_threejs_CEC_BODY_4_RIGHT-mocap" src="js/mocap/am_threejs_CEC_BODY_4_RIGHT.js"></a-asset-item>
        <!-- - mocaps -->

      </a-assets>
      
      <a-sky color="#EEEEFF" material="src: #sky_sphere-texture"></a-sky>

      <a-entity obj-model="obj: #floor-obj;" material="src: #floor-texture; normalMap: #floor_normal-texture; metalness: 0.6" id="floor"></a-entity>
      <a-entity obj-model="obj: #hall-obj;" material="src: #hall-texture" id="hall"></a-entity>
      <a-entity obj-model="obj: #hall_low_floor-obj;" material="opacity: 0.0" id="hall_low_floor"></a-entity>
      <a-entity obj-model="obj: #acropolis-obj;" material="src: #acropolis-texture"></a-entity>
      <a-entity obj-model="obj: #castle_lake-obj;" material="src: #castle_lake-texture"></a-entity>
      <a-entity obj-model="obj: #good_samaritan-obj;" material="src: #good_samaritan-texture"></a-entity>
      <a-entity obj-model="obj: #moonlight-obj;" material="src: #moonlight-texture"></a-entity>
      <a-entity obj-model="obj: #podiums-obj;" material="src: #podiums-texture"></a-entity>
      <a-entity obj-model="obj: #lamps-obj;" material="src: #lamps-texture; side: double;"></a-entity>

      <!--<a-entity obj-model="obj: #david-obj;" material="src: #david-texture"></a-entity>-->
      <a-entity ctm="src: #david-ctm; name:david;"></a-entity>

      <!--<a-entity obj-model="obj: #female_head-obj;" material="src: #female_head-texture"></a-entity>-->
      <a-entity ctm="src: #female_head-ctm; name:female_head;"></a-entity>

      <a-entity obj-model="obj: #lion-obj;" material="src: #lion-texture"></a-entity>
     <!-- <a-entity ctm="src: #lion-ctm; name:lion;"></a-entity>-->

      <!--<a-entity obj-model="obj: #greek_bust-obj;" material="src: #greek_bust-texture"></a-entity>-->
      <a-entity ctm="src: #greek_bust-ctm; name:greek_bust;"></a-entity>

      <!--<a-entity obj-model="obj: #old_man-obj;" material="src: #old_man-texture"></a-entity>-->
      <a-entity ctm="src: #old_man-ctm; name:old_man;"></a-entity>

      <!--<a-entity obj-model="obj: #nefertiti-obj;" material="src: #nefertiti-texture"></a-entity>-->
      <a-entity ctm="src: #nefertiti-ctm; name:nefertiti;"></a-entity>

      <!--<a-entity obj-model="obj: #fractal_1-obj;" material="src: #fractal_1-texture"></a-entity>
      <a-entity ctm="src: #fractal_1-ctm; name:fractal_1;"></a-entity>-->

      <!--<a-entity obj-model="obj: #fractal_2-obj;" material="src: #fractal_2-texture"></a-entity>
      <a-entity ctm="src: #fractal_2-ctm; name:fractal_2;"></a-entity>-->

      <!--<a-entity obj-model="obj: #fractal_3-obj;" material="src: #fractal_3-texture"></a-entity>
      <a-entity ctm="src: #fractal_3-ctm; name:fractal_3;"></a-entity>-->

      <!--<a-entity obj-model="obj: #female_helmet-obj;" material="src: #female_helmet-texture"></a-entity>-->
      <a-entity ctm="src: #female_helmet-ctm; name:female_helmet;"></a-entity>

      <!--<a-entity obj-model="obj: #monk_uv-obj;" material="src: #monk_uv-texture"></a-entity>-->
      <a-entity ctm="src: #monk_uv-ctm; name:monk_uv;"></a-entity>

      <!--<a-entity obj-model="obj: #david_bike_hall_3-obj;" material="src: #david_bike_hall_3-texture"></a-entity>-->
      <a-entity ctm="src: #david_bike_hall_3-ctm; name:david_bike_hall_3;"></a-entity>


      <a-entity id="model" position="2.7 0.6 -5">
        
		 <a-collada-model position="-.35 0 .55" rotation="0 -80 0" scale="1.5 1.5 1.5"
                         src="#why-male-models" onject-change=""></a-collada-model>			 
       
      </a-entity>
	  <a-entity id="model" begin="click" position="2.7 0.6 -11.5">
        <a-animation attribute="rotation" from="0 -30 0" to="0 330 0" dur="150000"
                     easing="linear" repeat="indefinite"></a-animation>
		 <a-collada-model position="-.35 0 .55" rotation="0 -80 0" scale="1.5 1.5 1.5"
                         src="#why-male-models1" ></a-collada-model>			 
       
      </a-entity>
	  
	  </a-entity>
      <a-entity id="model" begin="click" position="-2.3 1.5 -6.9">
        
		 <a-collada-model position="-.35 0 .55" rotation="0 10 0" scale="1 1 1"
                         src="#chair"></a-collada-model>	
	
  <a-image href="https://amylynnandrews.com/how-to-start-a-blog/"><img src="https://amylynnandrews.com/wp-content/uploads/2016/01/how-to-create-a-blog.jpg" /></a-image>
       
      </a-entity>
	   <a-entity id="model" begin="click" position="-2.8 1.5 -8.9">
        
		<a-entity obj-model="obj: #tree-obj; mtl: #tree-mtl" rotation="90 0 90" scale="0.1 0.1 0.1"></a-entity> 
       
      </a-entity>
	   </a-entity>
	   <a-entity id="model" begin="click" position="-2.8 0.7 -11.5">
        
		<a-entity obj-model="obj: #machine-obj;  mtl: #machine-mtl" rotation="0 90 0" scale="1 1 1"></a-entity> 
       
      </a-entity>
	  
	  <a-entity id="model" begin="click" position="2.2 1.2 9">
        
		<a-entity obj-model="obj: #tv-obj;  mtl: #tv-mtl; texture: #tv-texture" rotation="0 -90 0" scale="0.18 0.18 0.18"></a-entity> 
       
      </a-entity>
	  
        
		<a-entity id="femalemodel" begin="click" position="2.8 1 -9"obj-model="obj: #female-obj;  mtl: #female-mtl" rotation="-90 0 -90" scale="1 1 1"></a-entity> 
       
     <a-box position="3.4 1.2 -9.1"  height="0.5" color="green" change-color-on-click="" >
	 
	 
	 </a-box>
	 <!-- <a-entity  position="2.4 1.2 -9.5" text="color: white; width:2;value: Hello World"></a-entity>  -->
	
	 
	  <a-button onclick="myFunction()" position="1.9 1.2 -9.5" name="stuff" value="Buy" type="raised"></a-button>
       <div id="snackbar">Added into Cart.</div>
	  <!-- BEGIN TOAST -->
<a-toast message="This is a toast" action="Got it"></a-toast>
<!-- END TOAST -->
	    <a-sphere id="redSphere"
			 position="2.8 2 -9.5"
                  rotation="0 360 0"
                  material="color: red"
                  geometry="primitive: sphere;"
				  radius="0.2"
                  visible="true">
				  
				  </a-sphere>
				   <a-sphere id="black"
			 position="2.8 2 -8.4"
                  rotation="0 2 0"
                  material="color: black"
                  geometry="primitive: sphere;"
				  radius="0.2"
                  visible="true"></a-sphere>
	  
	  
      <a-entity teleport-controls="button: trigger; collision-entities: #floor #hall_low_floor" hand-controls="left"></a-entity>
      <a-entity teleport-controls="button: trigger; collision-entities: #floor #hall_low_floor" hand-controls="right"></a-entity>
      
	<a-camera position="0 0 0">
		<a-cursor color="#FF000" />
	</a-camera>
	  
	  
    </a-scene>

    <script src="main.js"></script>

	
</body>
</html>