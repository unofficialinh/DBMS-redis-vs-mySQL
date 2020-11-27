<?php
try {
$redis = new Redis();
$redis->connect('localhost', 6379);

} catch (Exception $ex) {
    echo $ex->getMessage();
}

