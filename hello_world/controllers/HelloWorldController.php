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

namespace controllers;

use yasmf\HttpHelper;
use yasmf\View;

/**
 * HelloWorld controller class
 */
class HelloWorldController
{
    /**
     * Set and return the hello view
     * @return View the hello view
     */
    public function sayHello(): View {
        $name = HttpHelper::getParam('name') ?: 'no name' ;
        $view = new View("views/hello_you");
        $view->setVar('name',$name);
        return $view;
    }

}