<?php
	
		echo "		<div class='graphs'>";
		
		echo "				<div class='col_1'>";

		echo "					<div class='col-md-4 span_8'>";
		echo "						<div class='activity_box'>";
		echo "							<h3>Carga Masiva de Usuarios</h3>";
		echo "							<div class='scrollbar scrollbar1' id='style-2'>";

		echo "							</div>";
		echo "						</div>";
		echo "					</div>";
		
		
		
		echo "					<div class='col-md-4 span_8'>";
		echo "						<div class='activity_box activity_box1'>";
		echo "							<h3>Descarga de Archivo de Usuarios</h3>";
		echo "							<div class='scrollbar' id='style-2'>";

		echo "							</div>";
		echo "						</div>";
		echo "					</div>";
		
		
		
		echo "					<div class='col-md-4 span_8'>";
		echo "						<div class='activity_box activity_box2'>";
		echo "							<h3>Editor de Usuarios</h3>";
		echo "							<div class='scrollbar' id='style-2'>";
										
		echo "							</div>";
		echo "						</div>";
		echo "						<div class='clearfix'> </div>";
		echo "					</div>";
		
		
		echo "					<div class='clearfix'> </div>";
							
		echo "				</div>"; //col_1
		
		
		
		
		echo "		<div class='switches'>";
		echo "			<div class='col-12'>";
		

		echo "		<div class='col-md-2 widget widget1'>";
		echo "			<div class='r3_counter_box'>";
		echo "				<i class='fa fa-mail-forward'></i>";
		echo "				<div class='stats'>";
		echo "					<h5>5,20 <span>%</span></h5>";
		echo "					<div class='grow'>";
		echo "						<p>Crecimiento</p>";
		echo "				 	</div>";
		echo "				</div>";
		echo "			</div>";
		echo "		</div>";		
		
		
		echo "		<div class='col-md-2 widget widget1'>";
		echo "			<div class='r3_counter_box'>";
		echo "				<i class='fa fa-users'></i>";
		echo "				<div class='stats'>";
		echo "					<h5>20 <span>%</span></h5>";
		echo "					<div class='grow grow1'>";
		echo "						<p>Usuarios Activos</p>";
		echo "				 	</div>";
		echo "				</div>";
		echo "			</div>";
		echo "		</div>";
		
		
		echo "		<div class='col-md-2 widget widget1'>";
		echo "			<div class='r3_counter_box'>";
		echo "				<i class='fa fa-eye'></i>";
		echo "				<div class='stats'>";
		echo "					<h5>83 <span>%</span></h5>";
		echo "					<div class='grow grow3'>";
		echo "						<p>Notificaciones Vistas</p>";
		echo "				 	</div>";
		echo "				</div>";
		echo "			</div>";
		echo "		</div>";		


		
		echo "				<div class='col-md-7 switch-right'>";
		echo "					<div class='switch-right-grid'>";
		echo "						<div class='switch-right-grid1'>";
		echo "							<h3>Estadísticas Semanales</h3>";
		echo "							<p>Se debe definir bien que poner aca.</p>";
		echo "							<ul>";
		echo "								<li>Dato 1: 100</li>";
		echo "								<li>Dato 2: 400 </li>";
		echo "							</ul>";
		echo "						</div>";
		echo "					</div>";
		echo "					<div class='sparkline'>";
		echo "						<canvas id='bar' height='150' width='480' style='width: 480px; height: 150px;'></canvas>";
		echo "							<script>";
		echo "								var barChartData = {";
		echo "									labels : ['Lun','Mar','Mie','Jue','Vie','Sab','Dom'],";
		echo "									datasets : [";
		echo "										{";
		echo "											fillColor : '#209e91',";
		echo "											strokeColor : '#209e91',";
		echo "											data : [25,40,50,65,55,30,50]";
		echo "										}";
		echo "									]";
									
		echo "								};";
		echo "									new Chart(document.getElementById('bar').getContext('2d')).Bar(barChartData);";
		echo "							</script>";
		echo "					</div>";
		echo "				</div>";
		
		
		
		
		
		
		
		
		
		echo "		</div>";//graphs
		
		
		
		
					

		
		
		
		
		
		echo "			</div>";
		echo "				<div class='clearfix'></div>";
		echo "		</div>";
		
		echo "	</div>";
		echo "<div class='clearfix'> </div>";
		echo "<br />";
		
		
		
		
		
		

?>