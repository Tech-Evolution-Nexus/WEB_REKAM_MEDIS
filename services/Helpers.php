<?php

if (!function_exists("assets")) {
    function assets($path)
    {
        // Menggabungkan direktori public dengan jalur aset
        return baseUrl() . "/" . $path;
    }
}

if (!function_exists("baseUrl")) {
    function baseUrl()
    {
        // Dapatkan protokol (HTTP/HTTPS)
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';

        // Dapatkan nama host
        $host = $_SERVER['HTTP_HOST'];

        // Dapatkan direktori aplikasi jika ada
        $scriptName = dirname($_SERVER['SCRIPT_NAME']);
        // Bangun base URL
        return "$protocol://$host$scriptName/";
    }
}
