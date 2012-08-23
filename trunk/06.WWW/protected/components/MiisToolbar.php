<?php

class MiisToolbar extends CApplicationComponent {

    private $_title = '';
    private $_slots;
    protected static $instance = null;

    public function __construct() {
        $this->_title = '';
        $this->_slots = array();
    }

    /**
     * get Miis Toolbar instance
     * @return MiisToolbar
     */
    public static function getInstance() {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function appendSlot() {
        // Push button onto the end of the toolbar array.
        $slot = func_get_args();
        array_push($this->_slots, $slot);
        return true;
    }

    public function setTitle($title, $icon = 'default') {
        $this->_title = $title;
        return $this;
    }

    public function setSlot($slot_id, $alt = '', $icon = 'default', $alert = 'Please slect an item(s).', $call_ajax = true) {
        $this->_slots[] = array(
            'id' => $slot_id,
            'alt' => $alt,
            'ico' => $icon,
            'alert' => $alert,
            'ajax' => $call_ajax
        );
        return $this;
    }

    public function render() {
        $html = array();
        $html[] = '<div id="miis-toolbar-box">';
        $html[] = '<div class="m">';
        // Start toolbar div.
        $html[] = '<div class="toolbar-list" id="toolbar">';
        $html[] = '<ul>';
        // Render each button in the toolbar.
        foreach ($this->_slots as $slot) {
            if ($slot['id'] == 'divider') {
                $html[] = '<li class="divider"></li>';
            } else {
                //$arrParams['action'] = $slot['id'];
                $html[] = '<li' . ($slot['ajax'] ? ' class="button"' : '') . '><a href="' . ($slot['ajax'] ? '#toolbar' : '') . '" rel="' . $slot['id'] . '" title="' . $slot['alert'] . '" ' . ($slot['ajax'] ? 'name="' . $slot['ajax'] . '"' : '') . '><span class="icon-large icon-' . $slot['ico'] . '"></span>' . $slot['alt'] . '</a></li>';
            }
        }
        // End toolbar div.
        $html[] = '</ul>';
        $html[] = '<div class="clr"></div>';
        $html[] = '</div>';
        $html[] = $this->_title;
        $html[] = '</div>';
        $html[] = '</div>';
        return implode("\n", $html);
    }

}
