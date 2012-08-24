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
        $bar->setSlot('create', $alt, 'create');
    }

    public static function UpdateList($task = 'update', $alt = 'Update') {
        $bar = MiisToolbar::getInstance();
        // Add an edit button.
        $bar->setSlot('update', $alt, 'update');
    }

    public static function deleteList($msg = '', $task = 'delete', $alt = 'Delete') {
        $bar = MiisToolbar::getInstance();
        // Add a delete button.
        if ($msg) {
            $bar->setSlot('delete', $alt, 'delete');
        } else {
            $bar->setSlot('delete', $alt, 'delete');
        }
    }

    public static function save($task = 'save', $alt = 'Save') {
        $bar = MiisToolbar::getInstance();
        // Add a save button.
        $bar->setSlot('save', $alt, 'save');
    }

    public static function cancel($task = 'cancel', $alt = 'Cancel') {
        $bar = MiisToolbar::getInstance();
        // Add a cancel button.
        $bar->setSlot('cancel', $alt, 'cancel');
    }

    public static function hideToolBar($hide = true) {
        $bar = MiisToolbar::getInstance();
        // Add an edit button.
        $bar->setHide($hide);
    }

}

