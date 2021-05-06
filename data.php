<?php

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
   $message = $_POST['message'];
    $to = "hossein.hasani137537@gmail.com";
 

   if(empty($name) || empty($email) || empty($message)){
        echo "All input fields are required";
    } else{
       if(mail($name, $email, $message, $to)){
            echo "Your message has been sent successfully";
        }else{
            echo "Message failed to send";
        }
   }
}

?>

<html lang="sv">
	<head>
		<title>OmIFix</title>
		<meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1"><!--Delen width=device-widthställer in sidans bredd så att den följer enhetens skärmbredd (som varierar beroende på enhet).
        Delen initial-scale=1ställer in den initiala zoomnivån när sidan laddas in av webbläsaren.-->
		<link rel="stylesheet" href="css/bootstrap.min.css"><!--Har länkat Bootstrp in HTML document-->
		<link rel="stylesheet" href="style_IFix.css"><!--External_CSS file-->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="shortcut icon" href="tempsnip.png" type="image/png"/>
          <link rel="apple-touch-icon" href="tempsnip.png" type="image/png"/>
			
		
		<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var myCenter=new google.maps.LatLng(59.200279, 17.579607);

function initialize()
{
var mapProp = {
  center: myCenter,
  zoom:10,
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position: myCenter,
  title:'Click to zoom'
  });

marker.setMap(map);


google.maps.event.addListener(marker,'click',function() {
  map.setZoom(5);
  map.setCenter(marker.getPosition());
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
		
		<script src="JavaScript_IFix.js"></script><!--External_JS file-->
		<style>
			.mp{
			  float: left;
				margin-left: 10%;
			}
		</style><!--Internal_CSS-->
	</head>
	<body class="bg-info;">
		<a href="index_IFix.html"><img id="logo" src="tempsnip.png" alt="logo_IFix"></a>
<div id="iPhone5" class="container bg-dark  text-white">
	    <!--Hemsidans logo, har länkat till hem, använd Jquvery text-success och secondary för att bytta färg på h2-->
	<div>
		
		<h2 class="text-secondary" id="t_Ifix">I<span class="text-success">Fix</span></h2>
	</div>
 <div>
	 <h2 style="color: orange" class="text-center">KONTAKT</h2>
	 <hr style="width:50%; margin-left:25%; height:3px;border-width:0;color:red;background-color:green">
			<p class="text-center">För frågor eller för att boka tid för reparation smat realisering, fyll i formuläret, ring eller mejla oss.</p>
	 <br>

   <div>
	   <div class="row">
 <form style="float:left" method="post">
       <div class="form-group">
       <label>Enter Name</label>
       <input type="text" name="name" placeholder="Enter Name" class="form-control" class="col-md-8"/>
      </div>
      <div class="form-group">
       <label>Enter Email</label>
       <input type="text" name="email" class="form-control col-md-" placeholder="Enter Email" />
      </div>
      <div class="form-group">
       <label>Enter Message</label>
       <textarea name="message" class="form-control" placeholder="Enter Message"></textarea>
      </div>
      <div class="form-group" align="center">
       <input type="submit" name="send" value="Submit" class="btn btn-info " />
      </div>
     </form>
    </div>
	 
<div class="mp" id="googleMap" style="width:500px;height:380px; float:right;display:block; margin-right: 6%;"></div>
	  
	   
	</div>  
	 
 </div>
	
		<footer class="w3-container w3-padding-64 w3-center w3-xlarge">
						<hr style="width:50%; margin-left:25%; height:3px;border-width:0;color:red;background-color:green">
		<p style="font-size:16px;">Kontakta & följa oss via</p>
	
  <a href="https://www.facebook.com/hossein.najm.54"><i class="fa fa-facebook-official"></i></a>
  <a href="https://instagram.com/h03ein_najm?r=nametag"><i class="fa fa-instagram"></i></a>
  <a href="mailto:hossein.hasani137537@gmail.com"><i class="fa fa-envelope-o"></i></a><!---hur koplar man gmail--->
  <a href="tel:0704900001"><i class="fa fa-phone"></i></a><!---telfon nummer--->
  <p class="text-secondary w3-medium" id="t_Ifix">I<span class="text-success">Fix</span>.se</p>	
	</footer>
</div>
		
	</body>
</html>