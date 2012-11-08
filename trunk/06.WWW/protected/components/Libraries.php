<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test
 *
 * @author Admin
 */
class Libraries {

    public static function Cutstring($chuoi, $gioihan) {
        if (strlen($chuoi) <= $gioihan) {
            return $chuoi;
        } else {
            if (strpos($chuoi, " ", $gioihan) > $gioihan) {
                $new_gioihan = strpos($chuoi, " ", $gioihan);
                $new_chuoi = substr($chuoi, 0, $new_gioihan) . "...";
                return $new_chuoi;
            }
            $new_chuoi = substr($chuoi, 0, $gioihan) . "...";
            return $new_chuoi;
        }
    }

    public static function dataCleasing($data) {
        $data = Yii::app()->input->purify($data);    
        $data = Yii::app()->input->xssClean($data);  
        $data = Yii::app()->input->stripTags($data);  
        $data = Yii::app()->input->stripClean($data);  
        return $data;
    }

    public static function check($s) {
        echo "<pre>";
        print_r($s);
        echo "</pre>";
    }

    public static function get_vip($id) {
        $user = Member::model()->findByPk($id);
        return $user->premium;
    }

    public static function filterContent($content) {
        echo $content;
    }

    public static function isEnable($id) {
        return count((Content::model()->findAll("category_id = " . $id . " and state = 1")));
    }

    public static function getTendanhhieu($type) {
        switch ($type) {
            case 1:
                return 'Điểm danh hiệu';
                break;
            case 2:
                return 'Điểm học bạ';
                break;
            case 3:
                return 'Điểm thành tích';
                break;
        }
    }

    public static function getDanhhieu($point, $type = 1) {

        if ($point == 0) {
            $point = 1;
        }
        $array = array();
        $i = 0;
        $total = Danhhieu::model()->findAll("type = " . $type);
        foreach ($total as $k) {
            $array[$i]['point'] = $k->point;
            $array[$i]['id'] = $k->id;
            $array[$i]['name'] = $k->name;
            $i++;
        }

        $rs = '';
        if ($point < $array[0]['point']) {
            $rs = $array[0];
        }
        if ($point > $array[$i - 1]['point']) {
            $rs = $array[$i - 1];
        }

        if (!is_array($rs)) {
            $i = 0;
            foreach ($array as $k => $v) {
                if ($array[$i]['point'] <= $point && $array[$i + 1]['point'] > $point) {
                    $rs = $array[$i];
                    break;
                }
                if ($array[$i]['point'] < $point && $array[$i + 1]['point'] >= $point) {
                    $rs = $array[$i + 1];
                    break;
                }
                if ($array[$i]['point'] == $point) {
                    $rs = $array[$i];
                    break;
                }
                $i++;
            }
        }
        return $rs['name'];
    }

    public static function getCmt($id) {
        $item = Comment::model()->findAllByAttributes(array('content_id' => $id));
        return count($item);
    }

    public static function getImage($post) {
        $first_img = '';
        ob_start();
        ob_end_clean();
        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post, $matches);
        if ($matches[1]) {
            $first_img = $matches[1][0];
        }
        if (empty($first_img)) {
            $first_img = Yii::app()->getBaseUrl(true) . "/themes/default/assets/img/no-thumbnail.png";
        }
        return $first_img;
    }

}

?>
