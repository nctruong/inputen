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

    public static function addNew($task = 'add', $alt = 'New', $check = false) {
        $bar = MiisToolbar::getInstance();
        // Add a new button.
        $bar->setSlot('new', $alt, 'new');
    }

    public static function editList($task = 'edit', $alt = 'Edit') {
        $bar = MiisToolbar::getInstance();
        // Add an edit button.
        $bar->setSlot('edit', $alt, 'edit');
    }

    public static function deleteList($msg = '', $task = 'remove', $alt = 'Delete') {
        $bar = MiisToolbar::getInstance();
        // Add a delete button.
        if ($msg) {
            $bar->setSlot('delete', $alt, 'delete');
        } else {
            $bar->setSlot('delete', $alt, 'delete');
        }
    }

}

