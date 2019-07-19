<?php

namespace Gxheart\Tests;

use Gxheart\factory_methods\FileLogger;
use Gxheart\factory_methods\FileLoggerFactory;
use Gxheart\factory_methods\StdoutLogger;
use Gxheart\factory_methods\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateStdoutLogging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function testCanCreateFileLogging()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());;
        $logger = $loggerFactory->createLogger();
        // print_r(sys_get_temp_dir());
        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}