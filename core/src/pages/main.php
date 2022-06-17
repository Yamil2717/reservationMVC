<?php
ini_set('memory_limit', '-1');
if (isset($_POST['Work']) &&  $_POST['Work'] == 'MachineFreeSearch') {
    switch ($_POST['OptionSelected']) {
        case 'ButtonSala1':
            $IDCede = '1';
            break;
        case 'ButtonSala2':
            $IDCede = '2';
            break;
        case 'ButtonSalaDeRedes':
            $IDCede = '3';
            break;
        
        default:
            $response = array('response' => false, 'HTMLContent' => '<td>Ha ocurrido un error</td>');
            $response = json_encode($response);
            exit($response);
            break;
    }
    $BusquedaTabla = '                
        <tr>
        <th># PC</th>
        <th>Sala</th>
        
        </tr> 
    ';
    $TableMachinesResponseDb = $ObjMysqli->GetMachineFree($IDCede);
    if ($TableMachinesResponseDb->num_rows > '0') {

        while ($rs = $TableMachinesResponseDb->fetch_assoc()) 
        {       
            switch ($rs['Cede']) {
                case '1':
                    $CedeName = "Sala 1";
                    break;
                case '2':
                    $CedeName = "Sala 2";
                    break;

                case '3':
                    $CedeName = "Sala de Redes";
                    break;
            }
                $BusquedaTabla .= '
                <tr>
                <td>'.$rs['NumeroPC'].'</td>
                <td>'.$CedeName.'</td>

                <td><button type="submit" id="'.$rs['id'].'" class="BottonReservMachine">Reservar</button></td>
                
                </tr>
                ';  
        }
    $response = array('response' => true, 'HTMLContent' => $BusquedaTabla);
    $response = json_encode($response);
    echo $response;  
    }else {
      $BusquedaTabla .= '                    
      <tr id="TablaBusquedaRouteCalculator">                    
      <td>No hay resultados</td>
      <td>No hay resultados</td>
      <td>No hay resultados</td>
      </tr> ';

      $response = array('response' => false, 'HTMLContent' => $BusquedaTabla);
      $response = json_encode($response);
      echo $response;
    }

}

if (isset($_POST['Work']) && $_POST['Work'] == 'GetDateTable') {
   //var_dump($_POST);

   $TableGridMachineDisplay = 
   '
   <tr>
   <td>NumeroPC</td>
   <td>Estado</td>
   <td>Hora</td>
   <td>Reservar</td>
   </tr>
   ';
   //$MysqlResponse = $ObjMysqli->GetMachineDateTable($_POST['date'], $_POST['MachineID']);



$TableGridMachineDisplay .= '

<tr>
<td>'.$_POST['MachineID'].'</td>
<td>Libre</td>
<td>8AM</td>
<td><button id="8AM" class="BottonFamilyReserv">Reservar</button></td>
</tr>
<tr>
<td>'.$_POST['MachineID'].'</td>
<td>Libre</td>
<td>9AM</td>
<td><button id="9AM" class="BottonFamilyReserv">Reservar</button></td>
</tr>
<tr>
<td>'.$_POST['MachineID'].'</td>
<td>Libre</td>
<td>10AM</td>
<td><button id="10AM" class="BottonFamilyReserv">Reservar</button></td>
</tr>
<tr>
<td>'.$_POST['MachineID'].'</td>
<td>Libre</td>
<td>11AM</td>
<td><button id="11AM" class="BottonFamilyReserv">Reservar</button></td>
</tr>
<tr>
<td>'.$_POST['MachineID'].'</td>
<td>Libre</td>
<td>12AM</td>
<td><button id="12AM" class="BottonFamilyReserv">Reservar</button></td>
</tr>
<tr>
<td>'.$_POST['MachineID'].'</td>
<td>Libre</td>
<td>1PM</td>
<td><button id="1PM" class="BottonFamilyReserv">Reservar</button></td>
</tr>
<tr>
<td>'.$_POST['MachineID'].'</td>
<td>Libre</td>
<td>2PM</td>
<td><button id="2PM" class="BottonFamilyReserv">Reservar</button></td>
</tr>
<tr>
<td>'.$_POST['MachineID'].'</td>
<td>Libre</td>
<td>3PM</td>
<td><button id="3PM" class="BottonFamilyReserv">Reservar</button></td>
</tr>
<tr>
<td>'.$_POST['MachineID'].'</td>
<td>Libre</td>
<td>4PM</td>
<td><button id="4PM" class="BottonFamilyReserv">Reservar</button></td>
</tr>
<tr>
<td>'.$_POST['MachineID'].'</td>
<td>Libre</td>
<td>5PM</td>
<td><button id="5PM" class="BottonFamilyReserv">Reservar</button></td>
</tr>
<tr>
<td>'.$_POST['MachineID'].'</td>
<td>Libre</td>
<td>6PM</td>
<td><button id="6PM" class="BottonFamilyReserv">Reservar</button></td>
</tr>
<tr>
<td>'.$_POST['MachineID'].'</td>
<td>Libre</td>
<td>7PM</td>
<td><button id="7PM" class="BottonFamilyReserv">Reservar</button></td>
</tr>


';

    $response = array('response' => true, 'HTMLContent' => $TableGridMachineDisplay);
    $response = json_encode($response);
    echo $response;  



}

?>