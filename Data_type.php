<?php

class DataType {
    /// @brief Converts the data type from database to HTML format
    public function convert($data_type) {
        switch ($data_type) {
            case "date":
            case "datetime":
                return "date";
            break;
            case "double":
            case "numeric":
            case "float":
            case "int":
                return "number";
            break;
            case "enum":
                return "select";
            break;
            default:
                return "text";
        }
    }

    /// @brief Returns the HTML structure to input into file
    public function typeToHtml($data) { // receber o tipo do dado, nome da tabela, nome do campo
        switch ($data['data_type']) { // verificar se vai continuar com este formato
            case "date":
                return '
            <div class="form-group">
                <label for="'.$data['column'].'">'.$data["column_name"].'</label>
                <input type="date" class="form-control" id="'.$data["column_name"].'" name="data['.$data["table_name"].']['.$data["column_name"].']">
            </div>
              ';
            break;
            case "number":
                return '
            <div class="form-group">
                <label for="'.$data['column'].'">'.$data["column_name"].'</label>
                <input type="number" class="form-control" id="'.$data["column_name"].'" name="data['.$data["table_name"].']['.$data["column_name"].']">
            </div>
              ';
            break;
            case "select":
                return '
            <div class="form-group">
                <label for="'.$data['column'].'">'.$data['column'].'</label>
                <select class="form-control" id="'.$data['column'].'" name="data['.$data["table_name"].']['.$data["column_name"].']">
                    '.
                    foreach ($data['column_option'] as $option) {
                        echo "<option>".$option."</option>"
                    }
                    .'
                </select>
            </div>
            
              ';
            break;
            case "text":
                return '
            <div class="form-group">
                <label for="'.$data['column'].'">'.$data["column_name"].'</label>
                <input type="text" class="form-control" id="'.$data["column_name"].'" name="data['.$data["table_name"].']['.$data["column_name"].']">
            </div>
              ';
            break;
        }
    }
}