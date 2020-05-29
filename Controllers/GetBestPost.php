<?php
/**
 * Created by PhpStorm.
 * User: vladislavmac
 * Date: 23/03/2019
 * Time: 18:36
 */

namespace Controllers;

class GetBestPost {

    public $idPostBest = 0;
    public $own_id = 0;
    public $bestCoef = 0;
    public $bestDocument = '';
    public $bestMess = '';

    public function getPostInfo($res) {

        foreach ($res as $value) {

            $idPost = $value['id'];
            $message = $value['text'];
            $reposts = $value['reposts']['count'];
            $views =   $value['views']['count'];
            $likes =   $value['likes']['count'];
            $document =  "doc".$value['attachments'][0]['doc']['owner_id']."_".$value['attachments'][0]['doc']['id']; // ID  докмуента вида 340348_34342234

            /**
             * Определяем эффективность поста
             */

            if ($views == 0){
                $views = 1;
            }

            $efficiency = (($likes - $reposts) + ($reposts * 5))/$views;

            if ($this->bestCoef < $efficiency)
            {

                 $this->idPostBest = $idPost;
                 $this->bestMess = $message;
                 $this->bestDocument = $document;
                 $this->bestCoef = $efficiency;

            }

        }
    }
}
