<?php

declare(strict_types=1);

$uriParts = parse_url($_SERVER["REQUEST_URI"]);

switch ($uriParts['path'] ?? '') {
    case '':
    case '/':
        require_once __DIR__ . DIRECTORY_SEPARATOR . 'main.php';
        break;
        case '/csgo':
            require_once __DIR__ . DIRECTORY_SEPARATOR . 'csgo.html';
            break;
            case '/valik':
                require_once __DIR__ . DIRECTORY_SEPARATOR . 'valik.html';
                break;
                case '/fortnite':
                    require_once __DIR__ . DIRECTORY_SEPARATOR . 'fortnite.html';
                    break;
  
    default:
        http_response_code(404);
        require_once __DIR__.DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'404.php';
}