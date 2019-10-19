<?php
/**
 * Created by PhpStorm.
 * User: aryx
 * Date: 2019.10.19.
 * Time: 12:18
 */

namespace app\components;
use yii\base\Component;

abstract class Card extends Component
{

    public static function beginColumns() {
        return '<div class="card-columns">';
    }

    public static function endColumns() {
        return '</div>';
    }

    public static function Card(string $title, string $body, array $options = array()) {
        $card = "<div class=\"card\">";

        if (isset($options['image'])) {
            $imgclass = $options['image']['class'] ?? "card-img-top";
            $card .= "<img src=\"{$options['image']['src']}\" class=\"{$imgclass}\">";
        };

        $card .= "<div class=\"card-body\">";
        $card .= "<h5 class=\"card-title\">$title</h5>";
        $card .= $body;
        $card .= "</div></div>";

        return $card;
    }

}