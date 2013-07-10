<?php

return array(
    array(
        'actual' => '
            <config>
                <value>1</value>
                <value>2</value>
            </config>',
        'expected' => '
            <config>
                <value>1</value>
                <value>2</value>
            </config>',
    ),
    array(
        'actual' => '
            <config>
                <value>1</value>
                <value>2</value>
            </config>',
        'expected' => '
            <config>
                <value>1</value>





                <value>2</value>
            </config>',
    ),
    array(
        'actual' => '
            <config>
                <value>1</value>
                <value>2</value>
                <more_nested><value>1</value><value>2</value></more_nested>
            </config>',
        'expected' => '
            <config>
                <value>1</value>
                <value>2</value>
                <more_nested>
                    <value>1</value>
                    <value>2</value>
                </more_nested>
            </config>',
    ),
);