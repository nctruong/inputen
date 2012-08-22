<?php

Yii::import('ext.bootstrap.components.Bootstrap');

class MiisToolbar extends CWidget {

    private $_title = '';
    private $_slots;
    protected static $_defaultViewPartial = null;

    public function init() {
        $this->_title = '';
        $this->_slots = array();
    }

    public function setTitle($title, $icon = 'default') {
        $this->_title['t'] = $title;
        $this->_title['i'] = $icon;
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

    protected function renderToolBar() {
        $toolbars = array();
        $toolbars['ico_title'] = $this->_title['i'];
        $toolbars['title'] = $this->_title['t'];
        $toolbars['slots'] = $this->_slots;
        return $toolbars;
    }

    public function render($partial = null) {
        $toolbars = $this->renderToolBar();
        if ($partial === null) {
            if (self::$_defaultViewPartial === null) {
                exit;
            }

            $partial = self::$_defaultViewPartial;
        }
        return $this->renderPartial($partial, $toolbars);
    }

}
