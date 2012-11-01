<?php

class TiiSlug extends CWidget {

    public $source = 'name';
    public $target = 'slug';

    public function init() {
        
    }

    function honghieu_catchuoi($chuoi, $gioihan) {
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

    public function run() {
       //return $this->honghieu_catchuoi($this->source,)
    }

}

?>