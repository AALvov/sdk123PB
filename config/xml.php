<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default template
    |--------------------------------------------------------------------------
    |
    | Template to XML
    |
    | <root xmlns:v1="http://www.site.com/schema"></root>
    |
    */
    'template' => '<do id = "gda"></do>',
    'caseSensitive' => false,
    'showEmptyField' => false, //Show empty field
    'charset' => 'utf-8',

    /**
     * line name if it is an array
     *
     * example
     * value null = <row_0></row_0>
     * value name item = <item></item>
     */
    'rowName' => 'name1'
];
