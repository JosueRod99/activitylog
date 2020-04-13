
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
	<style>
            table {
                border: none;
                width: 100%;
                border-collapse: collapse;
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

            .my-custom-scrollbar {
				position: relative;
				height: 210px;
				overflow: auto;
								 }
			.table-wrapper-scroll-y 
			{
				display: block;
			}
			.tg-celdas{	text-align: left;
						background: white;
						padding-left: 10px;
						}
			.div-container
			{
				position:absolute;
			    bottom:5px;
			    right:30px;
			}
        </style>

  <script>

  		function justToday()
  	{	var checkbox = document.getElementById('checkToday');
  		var date_o = document.getElementById('date_o'); 
  		var date_f = document.getElementById('date_f');
  		if (checkbox.checked == true){
  			
  			var today = new Date();
			var d = today.getDate();
			var m = today.getMonth()+1;
			var y = today.getFullYear();
			
			d = checkTime(d);
			m = checkTime(m);
  			
  			date_o.value = y+"-"+m+"-"+d; 
  			date_f.value = y+"-"+m+"-"+d;}

  		if (checkbox.checked == false){date_f.value = "";date_o.value = "";}
  	}
  	
  	function Today()
  	{	var checkbox = document.getElementById('checkTodayy');
  		var date_f = document.getElementById('date_f'); 
  		if (checkbox.checked == true){
  			
  			var today = new Date();
			var d = today.getDate();
			var m = today.getMonth() + 1;
			var y = today.getFullYear();
			
			d = checkTime(d);
			m = checkTime(m);
  			
  			
  			date_f.value = y+"-"+m+"-"+d;}
  		if (checkbox.checked == false){date_f.value = "";}
  		
  	}

  	function disableChecksw1(k)
	  	{	var i;
	  		var w1 = document.getElementById("w"+k);
	  		if (w1.checked == true)	
				for (i = 1; i < 12; i++) 
					if(i!=k)
	  					document.getElementById("w"+i).disabled = true;

	  		if (w1.checked == false)
				for (i = 1; i < 12; i++)
						if(i!=k) 
	  				document.getElementById("w"+i).disabled = false;
	  	}

  	function disableChecksg1(k)
	  	{	var i;
	  		var w1 = document.getElementById("g"+k);
	  		if (w1.checked == true)	
				for (i = 1; i < 25; i++) 
					if(i!=k)
	  					document.getElementById("g"+i).disabled = true;

	  		if (w1.checked == false)
				for (i = 1; i < 25; i++)
						if(i!=k) 
	  				document.getElementById("g"+i).disabled = false;
	  		
	  		if(w1.checked == true)
	  		{
	  			document.getElementById("t1").checked = true;
	  		}
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
			 
			/*document.getElementById('txt').innerHTML =
			h + ":" + m ;*/
			document.getElementById('txt').innerHTML =
			today;
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

<body onload="startTime()" >
	
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
				?> - WebMaster
	   		</a></li>
	   
	</ul>

	</div>

	<p><p><p>
	<form class="login100-form validate-form" action="excel.php" method="post">

		<table>
		  <tr>
		    <th width="15%">
		    	Workers
		    </th>
		    <th width="7%">
		    	Customer
		    </th>
			<th width="23%">
		    	Act Global
		    </th>
		    <th width="15%">
		    	Type
		    </th>
		    <th colspan="2">
		    	Date <p> must be in *YYYY-MM-DD* format:
		    </th>
		  </tr>
		  <tr>
		    <td class="tg-celdas">
		    	<div class="table-wrapper-scroll-y my-custom-scrollbar">

  					<table class="table table-bordered table-striped mb-0">
				    	<tr><input name=user type="checkbox" onclick="disableChecksw1(1)" value ="181978" id="w1">
									Fernando Alcantar <p></tr>
						<tr><input name=user type="checkbox" onclick="disableChecksw1(2)" value ="136038" id="w2">
									Jorge Rivera <p></tr>
						<tr><input name=user type="checkbox" onclick="disableChecksw1(3)" value ="104532" id="w3">
									Francisco Ruiz <p></tr>
						<tr><input name=user type="checkbox" onclick="disableChecksw1(4)" value ="151665" id="w4">
									Cesar Luna <p></tr>
						<tr><input name=user type="checkbox" onclick="disableChecksw1(5)" value ="141049" id="w5">
									Guillermo Martinez<p> </tr>
						<tr><input name=user type="checkbox"  onclick="disableChecksw1(6)" value ="168105" id="w6">
									Hector Rodriguez <p></tr>
						<tr><input name=user type="checkbox"  onclick="disableChecksw1(7)" value ="181980" id="w6">
									Ileana Cantu <p></tr>
						<tr><input name=user type="checkbox"  onclick="disableChecksw1(8)" value ="181981" id="w6">
									Litzy Carbajal <p></tr>				
						<!-- 
						<input name=user type="radio" value ="145591">
									Guest <P>
									-->
						<tr><input name=user type="checkbox" onclick="disableChecksw1(9)" value ="ALL" id="w7">
									ALL</tr>
					</table>
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
						<tr><input name=benefit type="checkbox" onclick="disableChecksb1(7)" value ="7" id="b7">
									BRP <p></tr>
						<tr><input name=benefit type="checkbox" onclick="disableChecksb1(8)" value ="ALL" id="b8">
									ALL <p></tr>
					</table>
				</div>
			</td>
			<td class="tg-celdas">
		    	<div class="table-wrapper-scroll-y my-custom-scrollbar">

  					<table class="table table-bordered table-striped mb-0">
  						<tr><input name=global type="checkbox" onclick="disableChecksg1(21)" value ="ALL" id="g21"  >
									ALL <p></tr>
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
		    	<div>

  					<table class="table table-bordered table-striped mb-0">
  						<tr><input name=type type="radio" value ="1" id="t1"  required>
									Operacion <p></tr>
						<tr><input name=type type="radio" value ="2" id="t3" >
									Compliance <p></tr>
						<tr><input name=type type="radio" value ="3" id="t3"  >
									Custom Budget <p></tr>
						<tr><input name=type type="radio" value ="ALL" id="t4"  >
									ALL <p></tr>
					</table>
				</div>
			</td>
		    <td>
		    	
		    	<input type="checkbox" onclick="justToday()" id="checkToday"/> Just Today...<p>
		    	<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter a Date *YYYY-MM-DD*">
						<input class="input100" type="text" name="date_o" id="date_o">
						<span class="focus-input100" data-placeholder="From:"></span>
		    </td>
		    <td>
		    	<input type="checkbox" onclick="Today()" id="checkTodayy"/> Until Today<p> 
		    	<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter a Date *YYYY-MM-DD*">
						<input class="input100" type="text" name="date_f" id="date_f">
						<span class="focus-input100" data-placeholder="To:"></span>
		    </td>
		  </tr>
		</table>

		<div class="wrap-login100 p-t-15 " style=" margin:0 auto;">
			<div class="container-login100-form-btn">
				<button class="login100-form-btn">
					Generate Report
				</button>
			</div>
		</div>		
	</form>
		<div class="div-container">Developed by Josue Rodriguez.</div>

		<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	


</body>
<html>
