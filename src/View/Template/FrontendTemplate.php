<?php

/**
 * @package    dev
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2015 netzmacht creative David Molineus
 * @license    LGPL 3.0
 * @filesource
 *
 */

namespace Netzmacht\Contao\Toolkit\View\Template;

use Netzmacht\Contao\Toolkit\View\Template;

/**
 * FrontendTemplate with extended features.
 */
class FrontendTemplate extends \Contao\FrontendTemplate implements Template
{
    use TemplateTrait;
}