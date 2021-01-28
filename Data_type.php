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
    public function typeToHtml($data) {
        switch ($data['data_type']) { // verificar se vai continuar com este formato
            case "date":
                // to do
            break;
            case "number":
                // to do
            break;
            case "select":
                // to do
            break;
            case "text":
                // to do
            break;
        }
    }
}