<?php
if(isset($_POST['insertar'])){
    $fechaconsulta = date('Y-m-d');
    $medicos=$_POST['medicos'];
    $pacientes=$_POST['pacientes'];
    $diagnostico=$_POST['diagnostico'];
    $tratamiento=$_POST['tratamiento'];
    $costo=$_POST['costo'];

    $sql="insert into consulta(fecha_consulta,medico_id,paciente_id,diagnostico_id,tratamiento,costo) values(:fechaconsulta,:medicos,:pacientes,:diagnostico,:tratamiento,:costo)";
        
    $sql = $connect->prepare($sql);
    //dejaré losparametros como str y no como int
    $sql->bindParam(':fechaconsulta',$fechaconsulta,PDO::PARAM_STR);
    $sql->bindParam(':medicos',$medicos,PDO::PARAM_STR, 25);
    $sql->bindParam(':pacientes',$pacientes,PDO::PARAM_STR, 25);
    $sql->bindParam(':diagnostico',$diagnostico,PDO::PARAM_STR,25);
    $sql->bindParam(':tratamiento',$tratamiento,PDO::PARAM_STR,25);
    $sql->bindParam(':costo',$costo,PDO::PARAM_STR);
        
    $sql->execute();
    
    $lastInsertId = $connect->lastInsertId();
    if($lastInsertId>0){
    
    echo "<div class='content alert alert-primary' > Registro exitoso.  </div>";
    }
    else{
        echo "<div class='content alert alert-danger'> No se pueden agregar datos, comuníquese con el área de soporte.  </div>";
    
    print_r($sql->errorInfo()); 
    }
    }
?>
