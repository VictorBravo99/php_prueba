<?php

include "../Models/municipio.php";

switch ($_GET["op"]) {

    case 'Listar':

        $data = file_get_contents("php://input");

        if ($data != "") $result = buscar($data);

        else $result = listar();

        echo json_encode($result);

        break;

    case 'Choice':

        $id = file_get_contents("php://input");

        $result = choice($id);

        echo json_encode($result);

        break;
}
