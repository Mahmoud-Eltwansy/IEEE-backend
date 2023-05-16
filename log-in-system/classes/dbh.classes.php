<?php

class Dbh {
    protected function connect() {
        try {
            $host="localhost";
            $port="5432";
            $dbname="users";
            $user="postgres";
            $password="Twansy0142";
            $dbh = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
            return $dbh;
            
        } catch (PDOException $e) {
            print "Error!: ". $e->getMessage(). "<br>";
            die();
        }

    }
}