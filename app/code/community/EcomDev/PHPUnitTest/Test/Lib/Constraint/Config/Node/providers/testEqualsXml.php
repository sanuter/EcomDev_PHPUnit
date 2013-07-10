<?php

return array (
    0 =>
    array (
        'actual' => '<config>
  <value>1</value>
  <value>2</value>
</config>
',
        'expected' => '<config>
  <value>1</value>
  <value>2</value>
</config>
',
    ),
    1 =>
    array (
        'actual' => '<config>
  <value>1</value>
  <value>2</value>
</config>
',
        'expected' => '<config>
  <value>1</value>





  <value>2</value>
</config>
',
    ),
    2 =>
    array (
        'actual' => '<config>
  <value>1</value>
  <value>2</value>
  <more_nested><value>1</value><value>2</value></more_nested>
</config>
',
        'expected' => '<config>
  <value>1</value>
  <value>2</value>
  <more_nested>
    <value>1</value>
    <value>2</value>
  </more_nested>
</config>',
    ),
);