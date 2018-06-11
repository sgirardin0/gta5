<?php

include __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

var_dump(Yaml::parseFile('../../../config/PROD.yaml'));