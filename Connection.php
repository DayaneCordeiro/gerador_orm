<?php 

// MIT License

// Copyright (c) 2021 Dayane Cordeiro

// Permission is hereby granted, free of charge, to any person obtaining a copy
// of this software and associated documentation files (the "Software"), to deal
// in the Software without restriction, including without limitation the rights
// to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
// copies of the Software, and to permit persons to whom the Software is
// furnished to do so, subject to the following conditions:

// The above copyright notice and this permission notice shall be included in all
// copies or substantial portions of the Software.

// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
// IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
// FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
// AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
// LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
// OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
// SOFTWARE.

class Connection {
    // Atributes
    public $servername;
    public $username;
    public $password;
    public $database;
    public $conn;
    public $db;

    // Constructor
    public function __construct($servername, $username, $password, $database) {
        $this->setServername($servername);
        $this->setUsername($username);
        $this->setPassword($password);
        $this->setDatabase($database);
    }

    // Methods

    /// @brief Connects to the database
    public function connect() {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->database);

        if (!$this->conn) {
            throw new Exception("Unable to connect to MySQL. " . mysqli_connect_error());
            exit;
        } else {
            $this->db = mysqli_select_db($this->conn, $this->database);

            if (!$this->db)
                throw new Exception("Unable to connect to " . $this->database);

            return 200;
        }
    }

    /// @ brief Veficates if the datatable exists
    public function findyDatatable($table_name) {

        $result = $this->conn->query("SHOW TABLES LIKE '$table_name'");
        $sucess = $result && $result->num_rows > 0;

        return ($sucess) ? 200 : throw new Exception("Datatable not found.");
    }

    // Setters
    public function setServername($servername) {
        $this->servername = $servername;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setDatabase($database) {
        $this->database = $database;
    }
}