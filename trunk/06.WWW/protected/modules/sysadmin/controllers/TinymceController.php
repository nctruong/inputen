<?php

Yii::import('ext.tinymce.*');

class TinyMceController extends CController {

    public function actions() {
        return array(
            'compressor' => array(
                'class' => 'TinyMceCompressorAction',
                'settings' => array(
                    'compress' => true,
                    'disk_cache' => true,
                )
            ),
            'spellchecker' => array(
                'class' => 'TinyMceSpellcheckerAction',
            ),
        );
    }

        // in view
//        $this->widget('ext.tinymce.TinyMce', array(
//            'model' => $model,
//            'attribute' => 'tinyMceArea',
//            // Optional config
//            'compressorRoute' => 'tinyMce/compressor',
//            'spellcheckerRoute' => 'tinyMce/spellchecker',
//            'fileManager' => array(
//                'class' => 'ext.elFinder.TinyMceElFinder',
//                'connectorRoute'=>'admin/elfinder/connector',
//            ),
//            'htmlOptions' => array(
//                'rows' => 6,
//                'cols' => 60,
//            ),
//        ));
}

?>