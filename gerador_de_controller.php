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

class ControllerGenerator {
    public function createController($data) {
        $file_name           = $data['class_name'] . 'Controller.php';
        $path                = __DIR__ . "\\files\controller\\" . $file_name;
        $atributes           = "";
        $constructor         = "";
        $constructor_content = "";
        $getters_setters     = "";
        $create_query        = "";

        // Setting formated data to variables
        foreach ($data['columns'] as $column) {
            $atributes .= "        private $" . $column . "\n";
            $constructor .= "$" . $column . ", ";
            $constructor_content .= "            $" . "this->set" . ucfirst($column) . "($" . $column . ");\n";
            $getters_setters .= "        public function get" . ucfirst($column) . "() {\n            return $" . "this->" . $column . ";\n        }\n\n        public function set" . ucfirst($column) . "($" . $column . ") {\n            $" . "this->" . $column . " = $" . $column . ";\n        }\n\n";
            $create_query .= "'\"' . $" . "this->get" . ucfirst($column) . "() . '\"', ";
        };

        // Remove the two lasts caracteres from string
        $constructor  = substr($constructor, 0, -2);
        $create_query = substr($create_query, 0, -2);

        // echo '<pre>';
        // print_r($atributes);
        // echo '</pre>';


        $content =
'<?php
    class ' . ucfirst($data['class_name']) . ' {
        // Atributes
'.$atributes.'
        // Constructor
        public function __construct(' . $constructor . ') {
'.$constructor_content.'
        }

        // Getters and Setters
'.$getters_setters.'
        // Create Function
        public function create() {
            if (mysqli_query($con, "INSERT INTO ' . $data['class_name'] . ' VALUES(DEFAULT, ' . $create_query . ')")) {
                $last_id = mysqli_insert_id($con);
                return $last_id;
            }
        }
}
        ';

        // TO DO
        // update
        // delete
        // read_by_id
        // read_all
        
        // Creates and write on file
        file_put_contents($path, $content);
    }
}