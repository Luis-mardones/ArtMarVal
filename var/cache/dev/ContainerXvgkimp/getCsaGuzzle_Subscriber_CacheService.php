<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'csa_guzzle.subscriber.cache' shared service.

return $this->services['csa_guzzle.subscriber.cache'] = new \Csa\Bundle\GuzzleBundle\GuzzleHttp\Subscriber\CacheSubscriber(new \Csa\Bundle\GuzzleBundle\GuzzleHttp\Cache\DoctrineAdapter(${($_ = isset($this->services['doctrine.cache.provider']) ? $this->services['doctrine.cache.provider'] : $this->services['doctrine.cache.provider'] = new \Doctrine\Common\Cache\FilesystemCache(($this->targetDirs[0].'/doctrine'))) && false ?: '_'}, 300));
