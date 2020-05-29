<?php
/**
 * Created by PhpStorm.
 * User: vladislavmac
 * Date: 12/04/2019
 * Time: 02:14
 */

spl_autoload_register(function ($class) {
    $base_dir = __DIR__;
    $file = $base_dir . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (!file_exists($file)) {
        throw new \Exception("File is not found: {$file}");
    }
    require $file;
});

require_once("vendor/autoload.php");
include 'config/db.php';

use Controllers\GetBestPost;
use Controllers\GetPost;
use Controllers\wallPost;
use Controllers\viewsPost;


$getPost = new GetPost();
$viewsPost = new viewsPost();
$getBestPost = new GetBestPost();
$post = new wallPost();



/**
 * Массив групп в которых собирать записи
 */

$owner_id = ['47482390', '39488246', '65047210', '94302419', '135471600'];

$rand_owner = array_rand($owner_id,1); // Выбираем рандомную группу

$id_owner = $owner_id[$rand_owner]; // ID группы

/**
 * Получаем посты
 */

$res = $getPost->wallGet($id_owner);

/**
 * Выдираем самый лучший пост и забираем инфу о нём
 */

$getBestPost->getPostInfo($res);

/**
 * Постим
 */

$post->message = $getBestPost->bestMess; // Сообщение
$post->attachments = $getBestPost->bestDocument; // Вложение к посту

/**
 * запись которую постим заносим в БД
 */

$post_id = $db->countWhere('post','post_id', "$getBestPost->idPostBest");


/**
 * Перебираем посты пока не попадется тот который не постился
 */

if ($post_id == 1){
    $res = $getPost->wallGet($owner_id[$rand_owner]);

    $getBestPost->getPostInfo($res);

    /**
     * Постим
     */

    $post->message = $getBestPost->bestMess; // Сообщение
    $post->attachments = $getBestPost->bestDocument; // Вложение к посту

    $post_id = $db->countWhere('post','post_id', "$getBestPost->idPostBest");
}

// Собственно сам постинг

if  ($post_id == 0){

    $db->execute("INSERT INTO `post` SET  `post_id`='$getBestPost->idPostBest', `owner_id`='$id_owner', `post_text`='$getBestPost->bestMess', `post_attachments`='$getBestPost->bestDocument', `date`=NOW()");

    $post->newPost(); // Результат об опубликованной записи

    header("Location: index.php?success=$getBestPost->idPostBest"); // Опубликован
}
else {
    header("Location: index.php?error=$getBestPost->idPostBest"); // Ошибка! Такая запись уже существует
}