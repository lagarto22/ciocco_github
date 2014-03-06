<STYLE type="text/css">
	.tableTd {
	   	border-width: 0.5pt; 
		border: solid; 
	}
	.tableTdContent{
		border-width: 0.5pt; 
		border: solid;
	}
	#titles{
		font-weight: bolder;
	}
   
</STYLE>
<table>
	<tr>
		<td><b>DETALLE DE HORAS EXTRAS<b></td>
	</tr>
	<tr>
		<td><b>FECHA:</b></td>
		<td><?php echo date("F j, Y, g:i a"); ?></td>
	</tr>
	<tr>
		<td><b>NUMERO DE REGISTROS:</b></td>
		<td style="text-align:left"><?php echo count($rows);?></td>
	</tr>
	<tr>
		<td></td>
	</tr>
		<tr id="titles">
			<td class="tableTd">LEGAJO</td>
			<td class="tableTd">EMPLEADO</td>
			<td class="tableTd">FECHA</td>
			<td class="tableTd">SUCURSAL</td>
			<td class="tableTd">INGRESO</td>
			<td class="tableTd">EGRESO</td>
			<td class="tableTd">INGRESO</td>
			<td class="tableTd">EGRESO</td>
			<td class="tableTd">TOTAL</td>
			<td class="tableTd">CREADO</td>
			<td class="tableTd">MODIFICADO</td>
		</tr>		
		<?php foreach($rows as $row):
			echo '<tr>';
			echo '<td class="tableTdContent">'.$row['Extra']['legajo'].'</td>';
			echo '<td class="tableTdContent">'.$row['Extra']['empleado'].'</td>';
			echo '<td class="tableTdContent">'.$row['Extra']['fecha'].'</td>';
			echo '<td class="tableTdContent">'.$row['Extra']['sucursal'].'</td>';
			echo '<td class="tableTdContent">'.$row['Extra']['ingreso1'].'</td>';
			echo '<td class="tableTdContent">'.$row['Extra']['egreso1'].'</td>';
			echo '<td class="tableTdContent">'.$row['Extra']['ingreso2'].'</td>';
			echo '<td class="tableTdContent">'.$row['Extra']['egreso2'].'</td>';
			echo '<td class="tableTdContent">'.$row['Extra']['total'].'</td>';
			echo '<td class="tableTdContent">'.$row['Extra']['created'].'</td>';
			echo '<td class="tableTdContent">'.$row['Extra']['modified'].'</td>';
			
			
			echo '</tr>';
			endforeach;
		?>
</table>

