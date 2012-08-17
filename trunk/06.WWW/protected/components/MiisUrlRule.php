<?php

class MiisUrlRule extends CBaseUrlRule {

    const DEFAULT_CONTROLLER = 'default';

    public function parseUrl($manager, $request, $pathInfo, $rawPathInfo) {
        if (preg_match('%^(\w+)(/(\w+))?$%', $pathInfo, $matches)) {
            // Make sure the url has 2 or more segments (e.g. mymodule/action)
            // and the path is under our target module. 
            if (count($matches) != 4 || !isset($matches[1]) || !isset($matches[3]))
                return false;

            // check first if the route already exists
            if (($controller = Yii::app()->createController($pathInfo))) {
                // Route exists, don't handle it since it is probably pointing to another controller
                // besides the default.
                return false;
            } else {
                // Route does not exist, return our new path using the default controller.
                $path = $matches[1] . '/' . self::DEFAULT_CONTROLLER . '/' . $matches[3];
                return $path;
            }
        }
        return false;
    }

    public function createUrl($manager, $route, $params, $ampersand) {
        // @todo: implement
        return false;
    }

}

