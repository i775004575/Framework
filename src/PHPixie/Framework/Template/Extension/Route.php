<?php

namespace PHPixie\Framework\Template\Extension;

class Route implements \PHPixie\Template\Extensions\Extension
{
    protected $routeTranslator;
    
    public function __construct($routeTranslator)
    {
        $this->routeTranslator = $routeTranslator;
    }
    
    public function name()
    {
        return 'route';
    }
    
    public function methods()
    {
        return array('path', 'uri');
    }
    
    public function aliases()
    {
        return array();
    }
    
    public function routePath($resolverPath, $attributes = array())
    {
        return $this->routeTranslator->generatePath(
            $resolverPath,
            $attributes = array()
        );
    }
    
    public function routeUri(
        $resolverPath,
        $attributes    = array(),
        $withHost      = true
    )
    {
        return $this->routeTranslator->generateUri(
            $resolverPath,
            $attributes    = array(),
            $withHost
        );
    }
}