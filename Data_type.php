<?php

class DataType {
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
}