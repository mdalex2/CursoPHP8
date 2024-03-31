<?php
class request {
    public static $php_self = "";
    public static $request_uri = "";
    public static $script_filename = "";
    public static $document_root = "";

    function __construct()
    {
        self::$php_self = $_SERVER["PHP_SELF"];
        self::$request_uri = $_SERVER["REQUEST_URI"];
        self::$script_filename = $_SERVER["SCRIPT_FILENAME"];
        self::$document_root = $_SERVER["DOCUMENT_ROOT"];
        // echo self::$php_self;
        // echo self::$request_uri;
        // echo self::$script_filename;
        // echo self::$document_root;

        // echo "Instancia creada de la clase request (constructor)";
    }
}