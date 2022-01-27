<?php

//LOGICA

//2. Convertir el string que nos dan en una cadena de array de strings.
//3. Separar esas cadenas de array string.
//4. Llevar  esas cadenas a filas y columnas.
//5. Almacenar el número de filas y columnas enn un array de Matrix.
//6. Poder acceder cada una de las filas o columnas a través del index del array.

//VISUALMENTE SERÍA ESTO:

//"1 2 3\n 4 5 6"
// ["1 2 3", "4 5 6"]
// ["1", "2", "3"], ["4", "5", "6"]


declare(strict_types=1);
namespace App;


class Matrix
{
    private $matrix = [];
    
    public function __construct(string $numbers)
    {
        $rows = explode('\n', $numbers);
        foreach ($rows as $row) {
            $row = explode(" ", $row);
            $this->matrix[] = array_map("intval", $row);
        }
    }
    public function getRow(int $row): array
    {
        return $this->matrix[$row - 1];
    }
    public function getColumn(int $col): array
    {
        return array_column($this->matrix, $col - 1);
    }
}







//1
//   class Matrix
// {
//     private array $values;

//     public function __construct(string $input)
//     {
//         foreach (explode('\n', $input) as $index => $line) {
//             foreach (explode(' ', $line) as $value) {
//                 $this->values[$index + 1][] = $value;

//             }
            
//         }
        
//     }
//     public function getRow(int $row): array
//     {
//         return $this->values[$row];
//     }
//     public function getColumn(int $column): array
//     {
//         $output = [];
//         foreach ($this->values as $values) {
//             $output[] = $values[$column - 1];
//         }
//         return $output;
//         var_dump($output);
//     }
// }

//CONSTRUCCIÓN DEL MATRIX

//1.
// $matrix = array('1 2 3\n 4 5 6\n 7 8 9\n 8 7 6');
// foreach ($matrix as $value) {
//     echo $value, "\n";
// }

//2.
// $rows = range( 1, 3 );
//     $cols = range( 1, 3 );
    
//     foreach ( $cols as $column ) {
//       foreach ( $rows as $row ) {
//         // Aquí creamos los ejes con un valor aleatorio
//         $matrix[ $column ][ $row] = rand( 1, 9 );
//       }
//     }
    
//     // Creamos la tabla
//     $html = '<table border>';
//     $html .= '<th></th>';
    
//     // Para crear las columnas X ( $rows = 1 a 3 )
//     foreach ( $rows as $indexRow ) {
//       $html .= '<th>'.$indexRow.'</th>';
//     }
    
//     foreach ( $matrix as $indexColumn => $numbers ) {
//       $html .= '<tr>';
//       // Para crear las columnas Y ( $cols = 1 a 3 )
//       $html .= '<td><b>'.$indexColumn.'</b></td>';
    
//       foreach ( $numbers as $numb ) {
//         // Creamos los campos de los numbores
//         $html .= '<td>'.$numb.'</td>';
//       }
    
//       $html .= '</tr>';
//     }

//     $html .= '</table>';
    
//     echo $html;
      
        
 // public function getRow() 
    //{

    //}

 // public function getColumn()
    //{
          
    //}
  



