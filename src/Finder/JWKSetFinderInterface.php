<?php

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2015 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Jose\Finder;

/**
 * JWKSet Finder Interface.
 */
interface JWKSetFinderInterface
{
    /**
     * @param array $header
     *
     * @return \Jose\JWKSetInterface|array|null
     */
    public function findJWKSet(array $header);
}
