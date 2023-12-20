<?php

class SudokuGrid implements GridInterface
{

    public static function loadFromFile($filepath): ?SudokuGrid{
        if(!file_exists($filepath)){
            return null;
        }
        $data = file_get_contents($filepath);
        $obj = json_decode($data);
        if($obj === null){
            return null;
        }
        return new SudokuGrid($obj);
        
    }

    public array $data;
   public function __construct(array $data){
    $this->data = $data;

   }


   public function get(int $rowIndex, int $columnIndex): int{

    return $this->data[$rowIndex][$columnIndex];
   }


   public function set(int $rowIndex, int $columnIndex, int $value): void{
    $this->data[$rowIndex][$columnIndex] = $value;

   }


   public function row(int $rowIndex): array{

    return $this->data[$rowIndex];

   }


   public function column(int $columnIndex): array{

    return array_column($this->data, $columnIndex);

   }


   public function square(int $squareIndex): array{

    return [];

   }


   public function display(): string{

    return "";

   }


   public function isValueValidForPosition(int $rowIndex, int $columnIndex, int $value): bool{
    return false;
   }


   public function getNextRowColumn(int $rowIndex, int $columnIndex): array{
    return [];


   }

 
   public function isValid(): bool{
    return false;

   }


   public function isFilled(): bool{
    return false;

   }
}
