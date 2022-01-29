<?php

declare(strict_types=1);

//LOGICA

//1. Divir el string que nos dan en una cadena de strings.
//2. Convertir la cadena de string en un array
//3. Dentro del array convertir los string en enteros
//4. Almacenar el número de filas y columnas enn un array de Matrix.
//5. Acceder y obtener los valores de filas y columnas

//VISUALMENTE SERÍA ESTO:

//"1 2 3\n 4 5 6"
// ["1 2 3", "4 5 6"]
// ["1", "2", "3"], ["4", "5", "6"]

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


//CONSTRUCCIÓN DE UN MATRIX

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