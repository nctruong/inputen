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

    public function Cutstring($chuoi, $gioihan) {
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
    public function getCmt($id){
        $item = Comment::model()->findAllByAttributes(array('content_id' => $id));
        return count($item);
    }
    public function getImage($post) {
        $first_img = '';
        ob_start();
        ob_end_clean();
        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post, $matches);
        if($matches[1]){
            $first_img = $matches[1][0];
        }
        if (empty($first_img)) {
            $first_img = Yii::app()->getBaseUrl(true)."/themes/default/assets/img/no-thumbnail.png";
        }
        return $first_img;
    }
}

?>
