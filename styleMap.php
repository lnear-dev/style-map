<?php
/**
 * @param string ...$styles
 * @return string
 * @example styleMap(fontFamily: 'Arial', fontSize: '12px', CustomColor: '#000000')
 * @example styleMap(font_family: 'Arial', font_size: '12px', CustomColor: '#000000')
 * @example styleMap(...['fontFamily' => 'Arial', 'fontSize' => '12px', 'CustomColor' => '#000000'])
 * camelCase will be converted to kebab-case
 * PascalCase will be converted to kebab-case and prefixed with two dashes '--' for CSS variables
 * snake_case will be converted to kebab-case
 * 
 */
function styleMap(string ...$styles): string
{
    $styleMap = [];
    foreach ($styles as $key => $value) {
        $key        = preg_replace('/_/', '-', preg_replace('/([a-z])([A-Z])/', '$1-$2', $key));
        $styleMap[] = (preg_match('/^[A-Z]/', $key) ? '--' : '') . strtolower($key) . ": {$value}";
    }
    return implode('; ', $styleMap) . ';';
}
