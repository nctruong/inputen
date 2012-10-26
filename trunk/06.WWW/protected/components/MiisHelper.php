<?php

class MiisHelper {

    public function url($url = array()) {
        if (is_array($url)) {
            if (count($url) > 0) {
                $url = implode($url, '/');
                return $url;
            }
        }
        return Yii::app()->getBaseUrl();
    }

}

