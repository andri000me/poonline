<?php $this->load->view('template/header'); ?>
<section class="content">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<?php 
		                    $start_date= date("d-M-Y", strtotime($date_range[0]->start_date));
		                    $date = $start_date;
		                    $end_date= date("d-M-Y", strtotime($date_range[0]->end_date)); 

		                    $start    = new DateTime($start_date);
		                    $_start   = date_create(date("Y-m-d",strtotime($date_range[0]->start_date)));
		                    $end      = (new DateTime($end_date))->modify('+1 day');
		                    $_end     = date_create(date("Y-m-d",strtotime($date_range[0]->end_date)));
		                    $interval = new DateInterval('P1D');
		                    $period   = new DatePeriod($start, $interval, $end);
		                ?>
		                <table class="table table-bordered" id="dynamic_field">
		                	<thead>                  
		                		<tr>
		                			<th width="15%" >Pegawai</th>
				                    <?php 
				                      foreach ($period as $dt) { ?>
				                        <th><?php echo $dt->format("d-M-Y") . "<br>\n";?></th>
				                    <?php } ?>
		                   		</tr>
		                   	</thead>
		                   	<tbody>
		                   		<?php 
		                   			foreach ($employee_piket as $ep) { ?>
		                   				<tr>
		                   					<td><?php echo $ep->nama.' ('.$ep->nipg.')';?></td>

		                   					<?php 
						                      foreach ($period as $dt) { $x=0;$y=0;?>
						                        <td>
						                        	<!-- Jadwal -->
						                        	<?php 
						                        	foreach ($data as $_data) {
						                        		if ($_data->nipg === $ep->nipg && $_data->start_date === $dt->format("Y-m-d") && $_data->status_approval==='1' ) {
						                        			$x=1;
						                        			if ($_data->status_piket === '1') {
						                        				echo "<div style='background: green;font-size:11px;color:white;height:35px;'><center>Masuk</center></div>";
						                        			}else if ($_data->status_piket === '2') {
						                        				echo "<div style='background: blue;font-size:11px;color:white;height:35px;'><center>Stand by/Oncall</center></div>";
						                        			}
						                        		}
						                        	}
						                        	if ($x!=1) {
						                        		echo "<div style='background: grey;font-size:11px;color:white;height:35px;'><center>-</center></div>";
						                        	}
						                        	?>
						                        	<!-- Realisasi -->
						                        	<?php 
						                        	foreach ($realisasi as $_realisasi) {
						                        		if ($_realisasi->nipg === $ep->nipg && $_realisasi->start_date === $dt->format("Y-m-d") && $_realisasi->status_approval==='1' ) {
						                        			$y=1;
						                        			if ($_realisasi->status_piket === '1') {
						                        				echo "<div style='background: green;font-size:11px;color:white;height:35px;'><center>Masuk</center></div>";
						                        			}else if ($_realisasi->status_piket === '2') {
						                        				echo "<div style='background: blue;font-size:11px;color:white;height:35px;'><center>Stand by/Oncall</center></div>";
						                        			}
						                        		}
						                        	}
						                        	if ($y!=1) {
						                        		echo "<div style='background: grey;font-size:11px;color:white;height:35px;'><center>-</center></div>";
						                        	}

						                        	?>
						                        </td>
						                    <?php } ?>

		                   				</tr>
				                <?php } ?>
		                   	</tbody>
		                </table>
					</div>
				</div>
			</div>
		</div>
	</section>
</html>