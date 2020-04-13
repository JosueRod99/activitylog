
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <link rel="icon" type="image/png" href="images/icons/faviconi.ico"/>
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>

   <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/radiobuttons.css">
<!--===============================================================================================-->
	<style>
            table {
                border: none;
                width: 100%;
                border-collapse: collapse;
                margin:0 auto;  
            }

            th {
            	text-align: center;
            }
            td { 
                padding: 5px 10px;
                text-align: center;
                border: 1px solid #999;

            }

            tr:nth-child(1) {
                background: #dedede;
            }

			.tg-celdas{	text-align: left;
						background: white;
						padding-left: 25px;
						}
			.div-container
			{
				position:absolute;
			    bottom:5px;
			    right:30px;
			}
		
            .my-custom-scrollbar {
				position: relative;
				height: 200px;
				overflow: auto;
								 }
			.table-wrapper-scroll-y 
			{
				display: block;
			}

    </style>

  	<script>

	function disableChecksg1(k)
	  	{	var i;
	  		var w1 = document.getElementById("g"+k);
	  		if (w1.checked == true)	
				for (i = 1; i < 21; i++) 
					if(i!=k)
	  					document.getElementById("g"+i).disabled = true;

	  		if (w1.checked == false)
				for (i = 1; i < 21; i++)
						if(i!=k) 
	  				document.getElementById("g"+i).disabled = false;
	  		var o = 0;
	  		if(k > 0 & k < 6)
	  			 o = 1;
	  		
	  		if(k > 5 & k < 11)
	  			 o = 2;
	  		
	  		if(k > 10 & k < 25)
	  			 o = 3;

	  		if( w1.checked == true) 
					{document.getElementById("t"+o).checked = true;
					document.getElementById("t2").disabled = true;
					document.getElementById("t3").disabled = true;
				}
			if(w1.checked == false) 
					{document.getElementById("t"+o).checked = false;}

	  		

	  	}
	 function disableChecksb1(k)
	  	{	var i;
	  		var w1 = document.getElementById("b"+k);
	  		if (w1.checked == true)	
				for (i = 1; i < 21; i++) 
					if(i!=k)
	  					document.getElementById("b"+i).disabled = true;

	  		if (w1.checked == false)
				for (i = 1; i < 21; i++)
						if(i!=k) 
	  				document.getElementById("b"+i).disabled = false;
	  	}
  	function newForm()
  	{
  		
  			alert("Arre pues muchacho trabajador");
  			
  			var body = document.getElementById('newform');
  			var tabla   = document.createElement("table");
  			var tblBody = document.createElement("tbody");
  			
    		var hilera = document.createElement("tr");
	 		hilera.setAttribute("style", "background-color: white;");
	 		for (var i = 0; i < 5; i++) 
	 		{
		     
		      var celda = document.createElement("td");
		      
		      
		      if(i==0)
		      	{	celda.setAttribute("width","10%" );
		      	 var textoCelda = document.createTextNode("<?php echo $_GET['user'] ; ?>");
		      }
		      if(i==1)
		      {
		      	celda.setAttribute("width","10%" );

		      	 //textoCelda = document.createTextNode("Benefit");
		      	 var textoCelda = document.createElement("input");
		      	 
					textoCelda.type = "text";
					textoCelda.className = "wrap-input100 validate-input m-t-85 m-b-35";
					textoCelda.setAttribute("data-placeholder", "Activity must be less than 200 characters.");
		      }
		      if(i==2){
		      	celda.setAttribute("width","60.1%" );
		      	 var textoCelda = document.createTextNode("Activity");
		      }
		      if(i==3)
		      {celda.setAttribute("width","10%" );
		      	 var textoCelda = document.createTextNode("Done?");
		      }
		      if(i==4)
		      {celda.setAttribute("width","10%" );
		      	 var textoCelda = document.createTextNode("Time");
		      }

		      celda.appendChild(textoCelda);
		      hilera.appendChild(celda);
    		}
    		
		 	

		 	tblBody.appendChild(hilera);
  
 
			  // posiciona el <tbody> debajo del elemento <table>
			tabla.appendChild(tblBody);
			  // appends <table> into <body>
			body.appendChild(tabla);
			  // modifica el atributo "border" de la tabla y lo fija a "2";
			//tabla.setAttribute("width", "100%");
  	}
  
  	function Blocked()
  	{
  		var input = document.getElementById('UID');
		input.value = '<?php echo $_GET['user'] ; ?>';	
  	}
  	

	function reset()
		{
			document.getElementById('form').reset();
		}
	function startTime() 
		{
			var today = new Date();
			var h = today.getHours();
			var m = today.getMinutes();
			var s = today.getSeconds();
			m = checkTime(m);
			 
			document.getElementById('txt').innerHTML =
			h + ":" + m ;
			var t = setTimeout(startTime, 500);
		}

	function checkTime(i) 
		{
		  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
		  return i;
		}
	</script>


   <title>Homepage</title>
</head>

<body onload="startTime()">
	
	<div id='cssmenu'>
	<ul>
		<li style="float:right;"><a href='logout.php'>Log out</a></li>
		<li style="float:right;"><a href='#'> |</a></li>
		<li style="float:right;"><a href='#'> Varroc Lighting Systems</a></li>
		
	    <li style="float:left;"><a href='#'>
			<?php
					$user = $_GET['user']; 
					$conection = mysqli_connect("localhost","root","","workers");
					$result = mysqli_query($conection,"SELECT * FROM `winfo` WHERE UID = '$user'");
					$row = mysqli_fetch_array($result);
					
					echo $row['NAME']," ",$row['SURNAME'];
					mysqli_free_result($result);
					mysqli_close($conection);
				?>
	   		</a></li>
	   
	</ul>

	</div>
	<form class="login100-form validate-form" action="input2.php" method="post">
		 
		 
		<table>
		  <tr>
		    <th width="7%">
		    	UserID
		    </th>
		    <th width="9%">
		    	Customer
		    </th>
		    <th width="25%">
		    	Global Activity 
		    </th>
		    <th width="12%">
		    	Type of   
		    </th>
		    <th width="25%">
		    	Activity <p> must be less than 200 characters. 
		    </th>
		    <th width="7%">
		    	Done? <p>(Yes - No)
		    </th>
		    <th colspan="2" width="">
		    	Time Invested <p>(hh:mm)
		    </th>
		  </tr>
		  <tr>
		    <td>
		    	<div class="wrap-input100 validate-input m-t-85 m-b-35">
					<input class="input100" type="text" name="UID"  id="UID" readonly="readonly" 
					value="<?php echo $_GET['user'] ; ?>">
					<span class="focus-input100"></span>
				</div>
		    </td>	
			<td class="tg-celdas">
		    	<div >

  					<table class="table table-bordered table-striped mb-0">
  						<tr><input name=benefit type="checkbox" onclick="disableChecksb1(1)" value ="1"  id="b1" required>
									VLS <p></tr>
						<tr><input name=benefit type="checkbox" onclick="disableChecksb1(2)" value ="2"  id="b2">
									VW <p></tr>
						<tr><input name=benefit type="checkbox" onclick="disableChecksb1(3)" value ="3"  id="b3">
									NISSAN <p></tr>
						<tr><input name=benefit type="checkbox" onclick="disableChecksb1(4)" value ="4"  id="b4">
									FCA <p></tr>
						<tr><input name=benefit type="checkbox" onclick="disableChecksb1(5)" value ="5"  id="b5">
									FORD <p></tr>
						<tr><input name=benefit type="checkbox" onclick="disableChecksb1(6)" value ="6"  id="b6">
									TESLA <p></tr>
						<tr><input name=benefit type="checkbox" onclick="disableChecksb1(7)" value ="1" id="b7">
									BRP <p></tr>
					</table>
				</div>
			</td>
			<td class="tg-celdas">
		    	<div class="table-wrapper-scroll-y my-custom-scrollbar">

  					<table class="table table-bordered table-striped mb-0">
  						<tr><input name=global type="checkbox" onclick="disableChecksg1(1)" value ="1"  id="g1" required>
									Apertura de pedimentos <p></tr>
						<tr><input name=global type="checkbox" onclick="disableChecksg1(2)" value ="2" id="g2" >
									Pago de pedimentos <p></tr>
						<tr><input name=global type="checkbox" onclick="disableChecksg1(3)" value ="3" id="g3" >
									Auditoria y aprobación de pedimentos <p></tr>
						<tr><input name=global type="checkbox" onclick="disableChecksg1(4)" value ="4" id="g4" >
									Validación de pedimentos <p></tr>
						<tr><input name=global type="checkbox" onclick="disableChecksg1(5)" value ="5" id="g5" >
									Glosa de pedimentos <p></tr>
						<tr><input name=global type="checkbox" onclick="disableChecksg1(6)" value ="6" id="g6" >
									RK digital de pedimentos <p></tr>
						<tr><input name=global type="checkbox" onclick="disableChecksg1(7)" value ="7" id="g7" >
									RK físico de pedimentos <p></tr>
						<tr><input name=global type="checkbox" onclick="disableChecksg1(8)" value ="8" id="g8" >
									Extracción de catálogos de SAP <p></tr>
						<tr><input name=global type="checkbox" onclick="disableChecksg1(9)" value ="9" id="g9" >
									Carga de catálogos a 2TS<p></tr>
						<tr><input name=global type="checkbox" onclick="disableChecksg1(10)" value ="10" id="g10" >
									Validacion de 2TS vs DATA STAGE <p></tr>
						<tr><input name=global type="checkbox" onclick="disableChecksg1(11)" value ="11" id="g11" >
									Análisis y procesamiento de pedimentos pagados y aperturas <p></tr>
						<tr><input name=global type="checkbox" onclick="disableChecksg1(12)" value ="12" id="g12" >
									Auditoria del gasto del AA y validación de comprobados en SAT <p></tr>
						<tr><input name=global type="checkbox" onclick="disableChecksg1(13)" value ="13" id="g13" >
									Auditoria y tramite de lista de asistencia TRANSPLACE/PALCO <p></tr>
						<tr><input name=global type="checkbox" onclick="disableChecksg1(14)" value ="14" id="g14" >
									Auditoria SAP VS pedimentos aduanas <p></tr>
						<tr><input name=global type="checkbox" onclick="disableChecksg1(15)" value ="15" id="g15" >
									Actualización de folios COFIDI <p></tr>
						<tr><input name=global type="checkbox" onclick="disableChecksg1(16)" value ="16" id="g16" >
									Actualización de folios COFIDI semana 11 <p></tr>
						<tr><input name=global type="checkbox" onclick="disableChecksg1(17)" value ="17" id="g17" >
									Generación de wire transfer <p></tr>
						<tr><input name=global type="checkbox" onclick="disableChecksg1(18)" value ="18" id="g18" >
									Ingreso de facturas COFIDI <p></tr>
						<tr><input name=global type="checkbox" onclick="disableChecksg1(19)" value ="19" id="g19" >
									Actualización de budget <p></tr>				
						<tr><input name=global type="checkbox" onclick="disableChecksg1(20)" value ="20" id="g20"  >
									Atención/Soporte <p></tr>
						
					</table>
				</div>
			</td>
			<td class="tg-celdas">
		    	<div >

  					<table class="table table-bordered table-striped mb-0">
  						<tr><input name=type type="radio" value ="1" id="t1"  required>
									Operacion <p></tr>
						<tr><input name=type type="radio" value ="2" id="t3" >
									Compliance <p></tr>
						<tr><input name=type type="radio" value ="3" id="t3"  >
									Custom Budget <p></tr>
					</table>
				</div>
			</td>
		    <td >
		    	<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Activity must be less than 200 characters.">
						<input class="input100" type="text" name="ACTIVITY" required>
						<span class="focus-input100" data-placeholder="Activity"></span>
		    </td>
		    <td>
		    	<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Yes or No">
						<input class="input100" type="text" name="A_DONE" required>
						<span class="focus-input100" data-placeholder="Done"></span>
		    </td>
		    <td>
		    	<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter a Date *YYYY-MM-DD*">
						<input type="checkbox" onclick="Today()" id="checkTodayy"/> Until Today<p>
						<input class="input100" type="text" name="date_o" id="date_o">
						<span class="focus-input100" data-placeholder="07:00"></span>
		    </td>
		    <td>
		    	<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter a Date *YYYY-MM-DD*">
						<input class="input100" type="text" name="date_f" id="date_f">
						<span class="focus-input100" data-placeholder="15:00"></span>
		    </td>
		  </tr>

		</table>
		
		<!--<div id="newform"></div>
			<div class="wrap-login100 p-t-50 " style=" display: inline-block;  ">
				<button class="login100-form-btn"  onclick="newForm()" id="checkForm">
							Add Row
						</button>
			</div>

	
		-->
			<div class="wrap-login100 p-t-15 " style=" margin:0 auto;">
				
					<button class="login100-form-btn">
						Send!
					</button>
						
			</div>
		
	

	</form>

	<div class="div-container">Developed by Josue Rodriguez.</div>
</body>
<html>
