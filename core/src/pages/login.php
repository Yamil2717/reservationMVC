<?php
  if (isset($_POST['Work']) && $_POST['Work'] == 'Login' ) {
    if ($ObjMysqli->UserLogin($_POST['User'], $_POST['Pass'])) {

     //LoadHtmlContens('html/ViewMachines.html');

     $response = array("response" => true,
                       "HtmlResponse" => LoadHtmlContens('src/pages/html/ViewMachines.html'),
                       "Nombre" => $_SESSION['Nombre'],
                       "Credito" => $_SESSION['Credito'],
                       "Status" => $_SESSION['Status']
                      );

     $response = json_encode($response);

     echo $response;
    }else {
      
      $response = array("response" => false,
                        "HtmlResponse" => LoadHtmlContens('src/pages/html/ErrorLogin.html'),

                        );

      $response = json_encode($response);
      
      echo $response;
     
    }
  }
 ?>
