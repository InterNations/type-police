<?php
namespace InterNations\Component\TypePolice\Factory;

use ProxyManager\ProxyGenerator\AccessInterceptorValueHolderGenerator;
use ReflectionClass;

class PolicedProxyFactory extends AbstractProxyFactory
{
    protected function getBaseClass(ReflectionClass $class, ReflectionClass $superClass)
    {
        return $class;
    }

    protected function getSurrogateClassName(ReflectionClass $class, ReflectionClass $superClass)
    {
        return $class->getName();
    }

    protected function getGenerator()
    {
        return $this->generator ?: $this->generator = new AccessInterceptorValueHolderGenerator();
    }
}
