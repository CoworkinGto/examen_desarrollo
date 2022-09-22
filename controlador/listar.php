<?php
//muestra datos de captura, pero aquí se hace uso de la vista creada llamada 'reporteH'
$sql = "SELECT * FROM reporteH"; 
$query = $connect -> prepare($sql); 
$query -> execute(); 
$results = $query -> fetchAll(PDO::FETCH_OBJ); 

if($query -> rowCount() > 0)   { 
foreach($results as $result) { 
echo "<tr>
<td>".$result -> fecha_consulta."</td>
<td>".$result -> nombre."</td>
<td>".$result -> medico_id."</td>
<td>".$result -> Costo."</td>
</tr>";

   }
 }
//Lista todos los registros de captura
/*$sql = "SELECT * FROM consulta"; 
$query = $connect -> prepare($sql); 
$query -> execute(); 
$results = $query -> fetchAll(PDO::FETCH_OBJ); 

if($query -> rowCount() > 0)   { 
foreach($results as $result) { 
echo "<tr>
<td>".$result -> id_folio."</td>
<td>".$result -> fecha_consulta."</td>
<td>".$result -> medico_id."</td>
<td>".$result -> paciente_id."</td>
<td>".$result -> diagnostico_id."</td>
<td>".$result -> tratamiento."</td>
<td>".$result -> costo."</td>
</tr>";

   }
 }*/
?>