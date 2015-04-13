<?php

/**
 * Classe implémentant le singleton pour PDO
 * @author Savageman
 */

require_once '../config.php';


class DB extends PDO {

    private static $_instance;

    /* Constructeur : héritage public obligatoire par héritage de PDO */
    public function __construct( ) {

    }
    // End of PDO2::__construct() */

    /* Singleton */
    public static function getInstance() {

        if (!isset(self::$_instance)) {

            try {

                self::$_instance = new PDO(DB_HOST, DB_USER, DB_PASSWORD);
                self::$_instance->query("SET CHARACTER SET utf8");

            } catch (PDOException $e) {

                echo $e;
            }
        }
        return self::$_instance;
    }
    // End of PDO2::getInstance() */
}

// end of file */
?>