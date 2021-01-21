<?php render('_header',array('title'=>$title))?>

<script src="assets/js/Chart.min.js"></script>

<div class="results">

	<p>
		<span>Results of : </span>
		<b><?php echo $name['name']; ?></b>
	</p>
	
	<p>
		<table data-role="table" id="results-table" data-mode="reflow" class="ui-responsive">
			<thead>
				<tr>
					<th data-priority="1">Label</th>
					<th data-priority="2">Value</th>
				</tr>
			</thead>
			<tbody>
				<?php	
					$label = array();
					$value = array();
					foreach($results as $key => $res){
						echo "<tr><th>".$key."</th>";
						echo "<td>".$res."</td></tr>";
						$label[] = $key;
						$value[] = $res;
					}
					$labelJson = json_encode($label);
					$valueJson = json_encode($value);
				?>
			</tbody>
		</table>
	</p>
	
	<canvas id="myChart" style="width:200px; height:200px;"></canvas>
	<script>
		var ctx = document.getElementById("myChart");
		var myChart = new Chart(ctx, {
			type: 'radar',
			data: {
				labels: <?php echo $labelJson; ?>,
				datasets: [{
					label: '<?php echo $name["name"]; ?>',
					data: <?php echo $valueJson; ?>,
					backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 206, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)',
						'rgba(153, 102, 255, 0.2)',
						'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scale: {
					ticks: {
						beginAtZero: true,
						min: 0
					}
				}
			}
		});
	</script>
	
</div>

<?php render('_footer')?>
