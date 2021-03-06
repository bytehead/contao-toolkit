<?php

/**
 * Contao toolkit.
 *
 * @package    contao-toolkit
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2015-2017 netzmacht David Molineus.
 * @license    LGPL-3.0 https://github.com/netzmacht/contao-toolkit/blob/master/LICENSE
 * @filesource
 */

declare(strict_types=1);

namespace Netzmacht\Contao\Toolkit\Dca\Listener\Wizard;

/**
 * FilePicker wizard.
 *
 * @package Netzmacht\Contao\Toolkit\View\Wizard
 */
final class FilePickerListener extends AbstractFieldPickerListener
{
    /**
     * {@inheritDoc}
     */
    public function generate(string $tableName, string $fieldName, int $rowId, $value = null): string
    {
        $url = sprintf(
            'contao/file.php?do=%s&amp;table=%s&amp;field=%s&amp;value=%',
            $this->input->get('do'),
            $tableName,
            $fieldName,
            str_replace(
                array('{{link_url::', '}}'),
                '',
                $value
            )
        );

        $cssId   = $fieldName . (($this->input->get('act') === 'editAll') ? '_' . $rowId : '');
        $jsTitle = specialchars(
            str_replace('\'', '\\\'', $this->translator->trans('MOD.files.0', [], 'contao_modules'))
        );

        $parameters = [
            'url' => $url,
            'title' => $this->translator->trans('MSC.filepicker', [], 'contao_default'),
            'jsTitle' => $jsTitle,
            'field' => $fieldName,
            'icon' => 'pickfile.svg',
            'id' => $cssId
        ];

        return $this->render($this->template, $parameters);
    }
}
