<?php

return array (
    'eav' =>
    array (
        'customer' =>
        array (
            0 =>
            array (
                'entity_id' => 1,
                'attribute_set_id' => 0,
                'website_id' => 1,
                'store_id' => 1,
                'created_in' => 'Default Store',
                'group_id' => 1,
                'firstname' => 'John',
                'lastname' => 'Doe',
                'email' => 'john@doe.com',
                'pasword_hash' => 'd1bcc360d05a6bdd7484784f43660c88:hG',
                'default_billing' => 1,
                'default_shipping' => 1,
            ),
            1 =>
            array (
                'entity_id' => 2,
                'attribute_set_id' => 0,
                'website_id' => 1,
                'store_id' => 1,
                'created_in' => 'Default Store',
                'group_id' => 1,
                'firstname' => 'Jane',
                'lastname' => 'Doe',
                'email' => 'jane@doe.com',
                'pasword_hash' => 'd1bcc360d05a6bdd7484784f43660c88:hG',
            ),
        ),
        'customer_address' =>
        array (
            0 =>
            array (
                'entity_id' => 1,
                'attribute_set_id' => 0,
                'customer_id' => 1,
                'parent_id' => 1,
                'firstname' => 'John',
                'lastname' => 'Doe',
                'country_id' => 'US',
                'region_id' => 39,
                'region_code' => 'NV',
                'region' => 'Nevada',
                'postcode' => 89001,
                'city' => 'Alamo',
                'telephone' => '555-55-55',
                'street' => 'Address 123',
            ),
        ),
    ),
);