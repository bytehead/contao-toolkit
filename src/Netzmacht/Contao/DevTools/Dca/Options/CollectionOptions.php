<?php

/**
 * @package    dev
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2014 netzmacht creative David Molineus
 * @license    LGPL 3.0
 * @filesource
 *
 */

namespace Netzmacht\Contao\DevTools\Dca\Options;

/**
 * Class CollectionOptions maps a model collection to the option format.
 *
 * @package Netzmacht\Contao\DevTools\Dca\Options
 */
class CollectionOptions extends AbstractDatabaseOptions
{
    /**
     * Fetch all.
     *
     * @return \Traversable
     */
    protected function fetchAll()
    {
        return $this->collection->fetchAll();
    }
}
