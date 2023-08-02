<?php
    $funcion = $_POST['funcion'];
    switch($funcion){
        case 'MuestraConsulta':
            $datos = MuestraConsulta();
            echo $datos;
        break;
        default:
            $datos = 'No hay funcion';
            echo $datos;
        break;
    }
    function MuestraConsulta(){
        include("conn.php");
        $sql = "SELECT 
                L.date, L.category, U.username, U.name, C.email, C.num_cel
            FROM
                Logs AS L
                    INNER JOIN
                Users AS U ON (L.id_user = U.id_user)
                    INNER JOIN
                Contac AS C ON (L.id_user = C.id_user);";
        $res = mysqli_query($conexion,$sql);

        $tabla = '<table class ="tab" id="Resultado">
                    <thead style="background-color: #367fa9; color: white;">
                        <tr>
                            <th style="text-align: center;"> Nombre </th>
                            <th style="text-align: center;"> Usuario </th>
                            <th style="text-align: center;"> Actividad </th>
                            <th style="text-align: center;"> Fecha </th>
                            <th style="text-align: center;"> Correo </th>
                            <th style="text-align: center;"> Celular </th>
                        </tr>
                    </thead>
                    <tbody>';
        while ($row = mysqli_fetch_assoc($res)) {
            $tabla  .=  '<tr>';
            $tabla  .=  '<td>'.$row['name'].'</td>';
            $tabla  .=  '<td>'.$row['username'].'</td>';
            $tabla  .=  '<td>'.$row['category'].'</td>';
            $tabla  .=  '<td>'.$row['date'].'</td>';
            $tabla  .=  '<td>'.$row['email'].'</td>';
            $tabla  .=  '<td>'.$row['num_cel'].'</td>';
        }
        $tabla  .=  "   </tbody>
                        </table>";
        return $tabla;
    }
?>