<?php

//TODO: Сделать обработку 404 ошибки
//TODO: На уровне App отлавливать все эксепшоны и если поймал показать страницу 500 ошибки

use App\Kernel\App;

require __DIR__ . '/../vendor/autoload.php';

$app = new App();

die($app->run());

