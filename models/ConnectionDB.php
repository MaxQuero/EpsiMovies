
<?php
require ("../config.php");

abstract class ConnectionDB
{
    private $table;

    // identifiant de connexion
    protected $mysql;

    public function __construct($table)
    {
        $this->table = $table;

        // constantes définies dans un fichier de configuration
        $this->mysql = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
    }

    public function select($field, $cond = NULL)
    {
        // construction de la requête
        $sql = "SELECT " . $field;
        $sql .= " FROM " . $this->table;

        if (is_array($cond)) {
            $sql .= " WHERE ";

            $i = 0;
            foreach ($cond as $key => $value) {
                $sql .= ($i != 0) ? " AND " : '';
                $sql .= $key . " = '" . $value . "'";
                $i++;
            }
        }

        $res = mysql_query($sql, $this->mysql);

        // on a des résultats
        if ($res !== FALSE) {
            /* l'ensemble des résultats est stocké dans un tableau
            prêt à être exploité */
            $out = array();

            while ($data = mysql_fetch_array($res)) {
                $out[] = $data;
            }
            return $out;
        }

        return $res;
    }

}