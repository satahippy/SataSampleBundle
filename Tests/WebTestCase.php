<?php

namespace Sata\SampleBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase as BaseWebTestCase;

class WebTestCase extends BaseWebTestCase
{
    protected static function createKernel(array $options = array())
    {
        if (null === static::$class) {
            static::$class = static::getKernelClass();
        }
        
        if (static::$class != 'SataSampleBundleAppKernel' || !isset($options['environment'])) {
            $options['environment'] = 'test';
        }

        return new static::$class(
            $options['environment'],
            isset($options['debug']) ? $options['debug'] : true
        );
    }
}