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

Class ConfigGenerator {
    public function createConfig($data) {
        $path                = __DIR__ . "\\files\\config.php";

        $content =
'<?php
$servername = "' . $data['servername'] . '";
$username = "' . $data['username'] . '";
$password = "' . $data['password'] . '";
$database = "' . $data['class_name'] . '";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
	echo "Error: Unable to connect to MySQL.". mysqli_connect_error();
	exit;
}
else {
	$db = mysqli_select_db($conn, $database);
	if (!$db) {
		echo "Error: Unable to connet to ".$database;
	}
	else {
		echo "Success";
	}
}
';
        
        // Creates and write on file
        file_put_contents($path, $content);
    }
}


