<?php
namespace HTML;
class Table{
    public $title = "";
    public $numRow = 0;
    public function message(){
        echo "Table $this->title has $this->numRow rows\n";
    }
}
class Row{
    public $numCells = 0;
    public function message(){
        echo "Row $this->title has $this->numCells rows\n";
    }
}
?>