<?php
/*
 * Copyright 2016 Bastian Schwarz <schwarz@infomax-it.de>.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * @namespace
 */
namespace de\imxnet\imxplatformphp\http;

/**
 * Provides defintions for the Http module
 *
 * @author Bastian Schwarz <schwarz@infomax-it.de>
 */
class DefinitionsProvider implements \de\codenamephp\platform\di\definitionsProvider\iArray {

  /**
   *
   * @return array
   */
  public function getDefinitions() {
    return [
      \Psr\Http\Message\ServerRequestInterface::class => \DI\factory(function () {
            return \Zend\Diactoros\ServerRequestFactory::fromGlobals();
      })
    ];
  }
}
