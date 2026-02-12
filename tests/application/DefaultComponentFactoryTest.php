<?php
/*
 * yasmf - Yet Another Simple MVC Framework (For PHP)
 *     Copyright (C) 2023   Franck SILVESTRE
 *
 *     This program is free software: you can redistribute it and/or modify
 *     it under the terms of the GNU Affero General Public License as published
 *     by the Free Software Foundation, either version 3 of the License, or
 *     (at your option) any later version.
 *
 *     This program is distributed in the hope that it will be useful,
 *     but WITHOUT ANY WARRANTY; without even the implied warranty of
 *     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *     GNU Affero General Public License for more details.
 *
 *     You should have received a copy of the GNU Affero General Public License
 *     along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

namespace application;

use controllers\HelloWorldController;
use controllers\HomeController;
use yasmf\NoControllerAvailableForNameException;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\UsesClass;

#[CoversClass(DefaultComponentFactory::class)]
#[UsesClass(HelloWorldController::class)]
#[UsesClass(HomeController::class)]
class DefaultComponentFactoryTest extends TestCase
{

    public function testBuildControllerByName_Home()
    {
        // given a component factory
        $componentFactory = new DefaultComponentFactory();
        // when ask for home controller
        $controller = $componentFactory->buildControllerByName("Home");
        // then the controller is HomeController instance
        self::assertInstanceOf(HomeController::class,$controller);
    }

    public function testBuildControllerByName_HelloWorld()
    {
        // given a component factory
        $componentFactory = new DefaultComponentFactory();
        // when ask for home controller
        $controller = $componentFactory->buildControllerByName("HelloWorld");
        // then the controller is HelloWorld instance
        self::assertInstanceOf(HelloWorldController::class,$controller);
    }

    public function testBuildControllerByName_Other()
    {
        // given a component factory
        $componentFactory = new DefaultComponentFactory();
        // expected exception when ask for a non-existant controller
        $this->expectException(NoControllerAvailableForNameException::class);
        $componentFactory->buildControllerByName("NoController");
    }
}
