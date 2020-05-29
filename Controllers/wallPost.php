<?php
/**
 * Created by PhpStorm.
 * User: vladislavmac
 * Date: 18/03/2019
 * Time: 14:48
 */

namespace Controllers;

Class wallPost {

    public $owner_id = '179884836'; // ID паблика в который постить
    public $message = 'Первый пробный пост';
    public $attachments; // ссылка на картинку/видео/гифку
    private $access_token = 'ВАШ_ТОКЕН_ВК';

    /**
     * @param $owner_id - ID группы
     * @param $count - Сколько записей выбирать
     * @param $message - сообщение к записи
     * @param $attachments - документ, фото, видео, музыка к посту
     * @param $access_token - ваш токен приложения ВК
     * @return string
     */

    public function newPost() {

        $request_params = array(
            'owner_id' => -(int)$this->owner_id,
            'from_group' => 1,
            'message' => $this->message,
            'attachments'=> $this->attachments,
            'access_token' => $this->access_token,
            'v' => '5.92'
        );

        $get_params = http_build_query($request_params);
        $result = json_decode(file_get_contents('https://api.vk.com/method/wall.post?'. $get_params), TRUE);

        if(isset($result['error'])){
            return "Ошибка:  ".$result['error']['error_code']."<br>".$result['error']['error_msg'];
        }
        elseif (isset($result['response'])) {
            return "Запись опубликована: ID ".$result['response']['post_id'];
        }

        else {
            $error = 'Ошибка! Запись не опубликована';
            return $error;
        }
    }

}

//$post = new wallPost();
//echo $post->newPost();
