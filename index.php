<?php
/**
 * @package Chocolife.me
 * @author Moldabayev Vadim <moldabayev.v@chocolife.kz>
 */



function main() {

    $vegetable = [
        'color' => 'red',
        'size' => '30',
        'prise' => '300',
    ];

    $client = new Client(new Vegetable($vegetable));
    var_dump($client->get());
}

main();