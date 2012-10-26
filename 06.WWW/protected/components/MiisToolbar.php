<?php

class MiisToolbar {

    private $_title = '';
    private $_slots;
    protected static $instance = null;
    private $_hide;

    public function __construct() {
        $this->_title = '';
        $this->_slots = array();
        $this->_hide = false;
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

    public function setHide($hide = false) {
        $this->_hide = $hide;
    }

    public function setTitle($title, $icon = 'default') {
        $this->_title = $title;
        return $this;
    }

    public function setSlot($slot_id, $alt = '', $icon = 'default', $alert = 'Please slect an item(s).', $call_ajax = false) {
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
        if ($this->_hide) {
            return '';
        }
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
                $arrParams = array(
                    'modules' => Yii::app()->controller->module->id,
                    'controller' => Yii::app()->controller->id,
                    'action' => Yii::app()->controller->action->id
                );
                $arrParams['action'] = $slot['id'];
                $html[] = '<li' . ($slot['ajax'] ? ' class="button"' : '') . '><a href="' . ($slot['ajax'] ? '#toolbar' : Yii::app()->createUrl(MiisHelper::url($arrParams))) . '" rel="' . $slot['id'] . '" title="' . $slot['alert'] . '" ' . ($slot['ajax'] ? 'name="' . $slot['ajax'] . '"' : '') . '><span class="icon-large icon-' . $slot['ico'] . '"></span>' . $slot['alt'] . '</a></li>';
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

