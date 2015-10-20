<?php

/**
 * @package    dev
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2015 netzmacht creative David Molineus
 * @license    LGPL 3.0
 * @filesource
 *
 */

namespace Netzmacht\Contao\Toolkit\Dca\Formatter\Value;

/**
 * FlattenFormatter takes an array and creates an csv value from it.
 *
 * @package Netzmacht\Contao\Toolkit\Dca\Formatter\Value
 */
class FlattenFormatter implements ValueFormatter
{
    /**
     * {@inheritDoc}
     */
    public function accepts($fieldName, array $fieldDefinition)
    {
        return !empty($fieldDefinition['eval']['multiple']);
    }

    /**
     * {@inheritDoc}
     */
    public function format($value, $fieldName, array $fieldDefinition, $context = null)
    {
        return $this->flatten($value);
    }

    /**
     * Flatten array or object to string values. Bypass anything else.
     *
     * This will create csv values from arrays and objects. For objects, it's public properties are used. Nested
     * arrays will be displayed with brackets.
     * $a = ['a', ['b', 'c']] will be a, [b, c].
     *
     * @param mixed      $value    Current value.
     * @param bool|false $brackets If true the value get brackets.
     *
     * @return array|string
     */
    private function flatten($value, $brackets = false)
    {
        if (is_array($value)) {
            $value = array_map(
                function ($value) {
                    return $this->flatten($value, true);
                },
                $value
            );

            $value = implode(', ', $value);
        } elseif (is_object($value)) {
            $value = $this->flatten(get_object_vars($value));
        } else {
            return $value;
        }

        if ($brackets) {
            $value = '[' . $value .']';
        }

        return $value;
    }
}
