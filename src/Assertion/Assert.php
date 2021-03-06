<?php

/**
 * Contao toolkit.
 *
 * @package    contao-toolkit
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2017 netzmacht David Molineus. All rights reserved.
 * @license    LGPL-3.0 https://github.com/netzmacht/contao-leaflet-maps/blob/master/LICENSE
 * @filesource
 */

namespace Netzmacht\Contao\Toolkit\Assertion;

use Assert\Assert as BaseAssert;

/**
 * Class Assert
 *
 * @package Netzmacht\Contao\Toolkit\Assertion
 */
class Assert extends BaseAssert
{
    /**
     * Lazy assertion exception class.
     *
     * @var string
     */
    protected static $lazyAssertionExceptionClass = LazyAssertionException::class;

    /**
     * Lazy assertion class.
     *
     * @var string
     */
    protected static $assertionClass = Assertion::class;
}
