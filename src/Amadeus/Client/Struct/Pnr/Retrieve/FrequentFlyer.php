<?php
/**
 * amadeus-ws-client
 *
 * Copyright 2015 Amadeus Benelux NV
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package Amadeus
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Pnr\Retrieve;

use Amadeus\Client\Struct\Pnr\AddMultiElements\FrequentTraveller;
use Amadeus\Client\RequestOptions\Pnr\Retrieve\FrequentTraveller as FrequentTravelerOptions;
/**
 * FrequentFlyer
 *
 * @package Amadeus\Client\Struct\Pnr\Retrieve
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class FrequentFlyer
{
    /**
     * @var FrequentTraveller
     */
    public $frequentTraveller;

    /**
     * FrequentFlyer constructor.
     *
     * @param FrequentTravelerOptions $params
     */
    public function __construct(FrequentTravelerOptions $params)
    {
        $this->frequentTraveller = new FrequentTraveller($params);
    }
}
