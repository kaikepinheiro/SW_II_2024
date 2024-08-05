<?php
    header('Content-Type:application/json');
    include 'conexao.php';

    $metodo = $_SERVER['REQUEST_METHOD'];
    //echo json_encode($metodo);

    $url = $_SERVER['REQUEST_URI'];

    //echo json_encode($url);

    $path = parse_url($url, PHP_URL_PATH);
    $path = trim($path,'/');

    //echo json_encode($path);

    $pathparts = explode('/',$path);

    echo json_encode($pathparts[1]);

    $primeira = iset($pathparts[0]) ? $pathparts [0] : '';
    $segunda = iset($pathparts[1]) ? $pathparts [1] : '';
    $terceira = iset($pathparts[2]) ? $pathparts [2] : '';
    $quarta = iset($pathparts[3]) ? $pathparts [3] : '';

    $response = [
        'metodo' => $metodo,
        'primeiraparte' => $primeira,
        'segundaparte' => $segunda,
        'terceiraparte' => $terceira,
        'quartaparte' => $quarta
    ];

    switch($metodo){
        case 'GET':
            break;
        case 'POST':
            break;
        case 'PUT':
            break;
        case 'DELETE':
            break;
        default:
            echo json_encode (
                [
                    'mensagem' => 'metodo não permitido'
                ]
            )
    }

?>