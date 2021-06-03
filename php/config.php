<?php

try {
    $bdd = new PDO("mysql:host=i41w1.myd.infomaniak.com;port=3306;dbname=i41w1_aidtudes;charset=utf8", 'i41w1_laurataorm', 'tRVfux_4xH5');
} catch (Exception $e) {
    die('Erreur' . $e->getMessage());
}