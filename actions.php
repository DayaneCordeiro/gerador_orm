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

header('Content-Type: text/html; charset=utf-8');

// Converts the string received into variables
if (isset($_POST['param']))
    parse_str($_POST['param'], $post);

switch ($_REQUEST['acao']) {
    case 'frmGerar':
        
        // Creates the directory with full permission
        mkdir(__DIR__ . '/files/model', 0777, true);
        mkdir(__DIR__ . '/files/controller', 0777, true);
        mkdir(__DIR__ . '/files/view/' . $post['data']['gerar_codigo']['nome_banco'], 0777, true);

        /* TO DO */
        // conectar com o banco para trazer os atributos
        // criar o controller <- create, delete, read e update
        // criar a classe <- model com os atributos e funções específicas
        // criar a tela de cadastrar
        // criar a tela de listar
        
    break;
}

// echo '<pre>';
// print_r($post);
// echo '</pre>';