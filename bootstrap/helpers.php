<?php
/**
 * Created by PhpStorm.
 * User: lihaoxin
 * Date: 2017/12/4
 * Time: 13:57
 */

function make_excerpt($excerpt, $length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($excerpt)));
    return str_limit($excerpt, $length);
}