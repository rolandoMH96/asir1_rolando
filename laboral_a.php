<Table>
<tr>
	<td>n</td>
	<td>s</td>
	<td>fecha</td>
	<td>D</td>
</tr>



<?php
$r=[];
for($i=1;$i<289;$i++){

	$r[]=[
	'n'=>$i,
	's'=>round($i/7)+1,
	'fecha'=>date('Y-m-d',strtotime('2019-09-11')+($i-1)*24*60*60),
	'D'=>date('D',strtotime('2019-09-11')+($i-1)*24*60*60),
	];

}
/*
echo '<pre>';
print_r($r);
echo '</pre>';
*/
foreach($r as $f){
	echo '<tr>';
	echo '<td>';
	echo $f['n'];
	echo '</td>';	

	echo '<td>';
	echo $f['s'];
	echo '</td>';

	echo '<td>';
	echo $f['fecha'];
	echo '</td>';	

	echo '<td>';
	echo $f['D'];
	echo '</td>';	
	
	echo '</tr>';
}
?>

</table>