<?php
/**
 * Created by PhpStorm.
 * User: vladislavmac
 * Date: 18/03/2019
 * Time: 14:50
 */

namespace Controllers;

Class viewsPost {

    public function viewAllPost($res)
    {

        foreach ($res as $value) {

            $idPost = $value['id'];
            $message = $value['text'];
            $reposts = $value['reposts']['count'];
            $views = $value['views']['count'];
            $likes = $value['likes']['count'];
            $document = "https://vk.com/doc".$value['attachments'][0]['doc']['owner_id'] . "_" . $value['attachments'][0]['doc']['id']; // ID  докмуента вида 340348_34342234

            echo "ID записи " . $idPost . "<br>";
            echo "Текст " . $message . "<br>";
            echo "Репосты " . $reposts . "<br>";
            echo "Просмотры " . $views . "<br>";
            echo "Лайков " . $likes . "<br>";
            echo "Ссылка на файл: <a href='$document'>" . $document . "</a><br>";

        }
    }
}