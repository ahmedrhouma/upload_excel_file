<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'phpexcel' shared service.

include_once $this->targetDirs[3].'\\vendor\\liuggio\\ExcelBundle\\Factory.php';

return $this->services['phpexcel'] = new \Liuggio\ExcelBundle\Factory();
