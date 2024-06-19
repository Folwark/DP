<?php

class BaseWorker {
    function db_connect() {
        try {
            $db = new mysqli('localhost', 'root', '', 'byh_db');
            if ($db->connect_errno) {
                throw new Exception("Failed to connect to database: " . $db->connect_error);
            }
        } catch (Exception $ex) {
            $db = false;
        }
        return $db;
    }

    function query_result($sql) {
        $db = $this->db_connect();
        try {
            $result = $db->query($sql);
            if (!$result) {
                throw new Exception("Query execution failed: " . $db->error);
            }
        } catch (Exception $ex) {
            $result = false;
        }
        return $result;
    }

    function select_query_result($sql) {
        $result = array();
        $db = $this->db_connect();
        try {
            $response = $db->query($sql);
            if ($response) {
                while ($row = $response->fetch_object()) {
                    array_push($result, $row);
                }
            } else {
                throw new Exception("Query execution failed: " . $db->error);
            }
        } catch (Exception $ex) {
            $result = false;
        }
        return $result;
    }
}
