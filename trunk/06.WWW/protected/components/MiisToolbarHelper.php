<?php

abstract class MiisToolbarHelper {

    public static function title($title, $icon = 'generic.png') {
        $bar = MiisToolbar::getInstance();
        // Strip the extension.
        $icons = explode(' ', $icon);
        foreach ($icons as &$icon) {
            $icon = 'icon-large icon-' . preg_replace('#\.[^.]*$#', '', $icon);
        }

        $html = '<div class="pagetitle ' . htmlspecialchars(implode(' ', $icons)) . '"><h1>' . $title . '</h1></div>';
        $bar->setTitle($html);
    }

    public static function spacer($width = '') {
        $bar = MiisToolbar::getInstance();
        // Add a spacer.
        $bar->appendSlot('Separator', 'spacer', $width);
    }

    public static function divider() {
        $bar = MiisToolbar::getInstance();
        // Add a divider.
        $bar->appendSlot('Separator', 'divider');
    }

    public static function Create($task = 'create', $alt = 'Create', $check = false) {
        $bar = MiisToolbar::getInstance();
        // Add a new button.
        $bar->setSlot('create', $alt, 'create', 'Create');
    }

    public static function UpdateList($task = 'update', $alt = 'Update') {
        $bar = MiisToolbar::getInstance();
        $arrParams = array(
            'modules' => Yii::app()->controller->module->id,
            'controller' => Yii::app()->controller->id,
            'action' => 'update'
        );
        // Add an edit button.
        $bar->setSlot('update', $alt, 'update', 'Please slect an item.', Yii::app()->createUrl(MiisHelper::url($arrParams)));
    }

    public static function deleteList($msg = '', $task = 'delete', $alt = 'Delete') {
        $bar = MiisToolbar::getInstance();
        $arrParams = array(
            'modules' => Yii::app()->controller->module->id,
            'controller' => Yii::app()->controller->id,
            'action' => 'delete'
        );
        // Add a delete button.
        if ($msg) {
            $bar->setSlot('delete', $alt, 'delete', 'Delete');
        } else {
            $bar->setSlot('delete', $alt, 'delete', 'Please slect an item(s).', Yii::app()->createUrl(MiisHelper::url($arrParams)));
        }
    }

    public static function save($task = 'save', $alt = 'Save') {
        $bar = MiisToolbar::getInstance();
        // Add a save button.
        $bar->setSlot('save', $alt, 'save', 'Save', 'adminForm');
    }

    public static function cancel($task = 'cancel', $alt = 'Cancel') {
        $bar = MiisToolbar::getInstance();
        $arrParams = array(
            'modules' => Yii::app()->controller->module->id,
            'controller' => Yii::app()->controller->id,
            'action' => ''
        );
        // Add a cancel button.
        $bar->setSlot('cancel', $alt, 'cancel', 'Cancel', Yii::app()->createUrl(MiisHelper::url($arrParams)));
    }

    public static function hideToolBar($hide = true) {
        $bar = MiisToolbar::getInstance();
        // Add an edit button.
        $bar->setHide($hide);
    }

}

