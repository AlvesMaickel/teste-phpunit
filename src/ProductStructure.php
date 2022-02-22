<?php
namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
        //todo your code.
        $result = [];
        foreach (self::products as $product) {
            list($color, $size) = explode("-", $product);

            if (!array_key_exists($color, $result)) {
                $result[$color] = array($size => 1);
            } else {
                array_key_exists($size, $result[$color]) ? $result[$color][$size]++ : $result[$color][$size] = 1;
            }
        }

        return $result;
    }
}
