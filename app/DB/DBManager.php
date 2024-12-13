<?php

namespace DB;

class DBManager
{
    public static function init($dsn)
    {
        $db = null;

        try {
            $db = new \DB\SQL($dsn);
            \Base::instance()->set('DB', $db);
        } catch (PDOException $e) {
            die("Fatal error while creating PDO connexion: ".$e->getMessage());
        }

        if (!$db->schema('example_table')) {
            \Models\ExampleModel::setup();
        }

        return $db;
    }
}
