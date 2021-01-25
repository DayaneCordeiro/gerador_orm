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

// criar a estrutura de pastas
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de ORM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <div>
        <form method="post" style="margin: 60px;" class="frmGerar" id="frmGerar">
            <h2>Informações de conexão</h2><br><br>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="serverName">Nome do servidor</label>
                    <input type="text" class="form-control" id="serverName" placeholder="Nome do servidor" name="data[gerar_codigo][nome_servidor]" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="userName">Usuário do servidor</label>
                    <input type="text" class="form-control" id="userName" placeholder="Usuário do servidor" name="data[gerar_codigo][usuario_servidor]" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="serverPassword">Senha do servidor</label>
                    <input type="password" class="form-control" id="serverPassword" placeholder="Senha do servidor" name="data[gerar_codigo][senha_servidor]">
                </div>
                <div class="form-group col-md-3">
                    <label for="databaseName">Nome do banco de dados</label>
                    <input type="text" class="form-control" id="databaseName" placeholder="Nome do banco de dados" name="data[gerar_codigo][nome_banco]" required>
                </div>
            </div><hr>
            <h2>Informações da estrutura do código gerado</h2><br><br>
            <div class="form-group">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gerarORM">
                <label class="form-check-label" for="gerarORM">
                    Gerar ORM
                </label><br>
                <input class="form-check-input" type="checkbox" id="gerarFrontend">
                <label class="form-check-label" for="gerarFrontend">
                    Gerar Frontend
                </label>
                </div>
            </div><hr>
            <button type="submit" class="btn btn-primary">Gerar</button>
        </form>
    </div>
</body>
</html>
<script src="js/scripts.js"></script>