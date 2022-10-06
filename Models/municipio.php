<?php

function listar()
{
    require "conexion.php";

    $consulta = $pdo->prepare("SELECT * FROM municipio ORDER BY id DESC");
    $consulta->execute();

    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

    return $resultado;
}

function buscar($data)

{
    require "conexion.php";

    $consulta = $pdo->prepare("SELECT * FROM municipio WHERE nombre LIKE '%" . $data . "%' ORDER BY id DESC");

    $consulta->execute();

    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

    return $resultado;
}

function choice($id)

{
    require "conexion.php";

    $consulta = $pdo->prepare("SELECT * FROM municipio WHERE id = " . $id . " ORDER BY id DESC");

    $consulta->execute();

    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

    return $resultado;
}
