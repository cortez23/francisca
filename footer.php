	<footer class="container-fluid footer">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mapa">
				<div id="map" style="height:500px;"></div>
				<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3YwwBypfekh-sykWXNrS_gSlG4Mldd84&callback=initMap"></script>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 info-direccion">
				<h3 class="direccion">Villavicencio 323, 2° Piso <br>Santiago, Región Metropolitana, Chile</h3>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 redes-social">
				<nav class="icono-social">
					<ul>
						<li><a href="https://www.facebook.com/LaZapateriaAcademiaCalzado/"><img src="img/icons/facebook.svg" alt="Facebook"></a></li>
						<li><a href=""><img src="img/icons/twitter.svg" alt="Twitter"></a></li>
						<li><a href="https://www.instagram.com/lazapateria_/"><img src="img/icons/instagran.svg" alt="Instagram"></a></li>
						<li><a href="" data-toggle="modal" data-target="#contacto" class="collapsed"><img src="img/icons/mail.svg" alt="Instagram"></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="col-xs-12 col-lg-12 derechos">
			<h2>Todos los Derechos Reservados &copy <a href="https://www.la-zapateria.cl">La Zapatería</a></h2>			
		</div>
	</footer>
		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- video -->
		<script src="js/jquery.vide.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="js/loading.js"></script>
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="js/bootstrap/bootstrap.js"></script>
	    <script src="js/bootstrap/bootstrap-dropdownhover.min.js"></script>


		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
 		<script src="js/sidebar.js"></script>
 		<script src="js/navbar.js"></script>
 		
	</body>
	<?php include ('map.php') ?>
	
</html>