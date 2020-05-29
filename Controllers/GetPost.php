<?php

namespace Controllers;

Class GetPost {

    public $count = '4';
    private $access_token = 'ВАШ_ТОКЕН_ВК';

    /**
     * @param $owner_id - ID группы
     * @param $count - Сколько записей выбирать
     * @param $access_token - ваш токен приложения ВК
     * @return string
     */


    public function wallGet($owner_id) {

            $request_params = [
                'owner_id' => -(int)$owner_id,
                'filter' => 'owner',
                'offset' => 1,
                'count' => $this->count,
                'extended' => 1,
                'access_token' => $this->access_token,
                'v' => '5.92'
            ];

            $get_params = http_build_query($request_params);
            $result = json_decode(file_get_contents('https://api.vk.com/method/wall.get?'. $get_params), TRUE);

            if ($result !== false) {
                return $result['response']['items'];
            }
            else {
                echo 'Ошибка! Записи не получены.';
            }

    }
}


//$getPost = new GetPost();
//echo "<pre>";
//var_dump(iterator_to_array($getPost->wallGet()));
//echo "</pre>";



