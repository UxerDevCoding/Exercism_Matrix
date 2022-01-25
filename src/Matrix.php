<?php

//Get the number of rows and columns for the matrix 
//Output the row chosen by the index
//Class object self.rows is a list of rows in the matrix, so relatively
//straight forward to get the one we want.
# We use index - 1 as the 1st row is actually the 0th row in python. 


declare(strict_types=1);

namespace App;

class Matrix
{
    public $min;
    public $max;
    public $rows;
    public $cols;

    public function __construct(){
        $this->min = 1; //nºminimo
        $this->max = 9; //número máximo
        $this->rows = 3; //número de filas
        $this->cols = 3; //número de columnas
    }

    public function createMatrix() {
        $matrix = array();
        $position = " ";
        for($i=0; $i<$this->rows; $i++) {
            for($j=0; $j<$this->cols; $j++) {
                $matrix[$i][$j] = rand($this->min, $this->max); //valor random
                $position = $matrix[$i][$j];
            }
        }

        return $position;
    }

    public function getRow() {

        
  
    }

    public function getColumn()
    {
         
       
    }
  
}


//Realizar constructor definiendo las 3 variables de los test: $matrix, $getRow y $getColumns El propio matrix, 

// export class Matrix {
//     constructor(numStr) {
//       this.numStr = numStr;
//       this.matrix = this.createMatrix();
//     }
  
//     createMatrix() {
//       const rowStr = this.numStr.split("\n");
//       const matrix = [];
//       for (let i = 0; i < rowStr.length; i++) {
//         let row = rowStr[i].split(" ");
//         let numRow = row.map((elem) => parseInt(elem, 10));
//         matrix.push(numRow);
//       }
//       return matrix;
//     }
  
//     get rows() {
//       return this.matrix;
//     }
  
//     get columns() {
//       let columns = [];
//       let j = 0;
//       for (let i = 0; i < this.matrix.length; i++) {
//         let column = [];
//         const number = this.matrix[i][j];
//         console.log(number);
//         if (i === this.matrix.length - 1) {
//           j++;
//         }
//       }
//       return columns;
//     }
//   }

// class Matrix(object):
//     def __init__(self, matrix_string):
        
//         # Get the number of rows and columns for the matrix 
//         # (and other stuff we'll use later)
//         self.rows = matrix_string.split("\n")
//         self.elements = matrix_string.split()
//         self.num_rows = len(self.rows)
//         self.num_cols = len(self.elements)/self.num_rows
//     def row(self, index):
//         # Output the row chosen by the index
//         # Class object self.rows is a list of rows in the matrix, so relatively
//         # straight forward to get the one we want.
//         # Pretty simple error checking?
//         if index <= 0 or index > self.num_rows:
//             raise Exception('Index out of bounds')
//         # We use index - 1 as the 1st row is actually the 0th row in python.    
//         output = self.rows[index - 1]
//         # Split the row into individual characters then turn this into an integer
//         output = output.split()
//         output = list(map(int, output))
//         return output
//     def column(self, index):
//          # Input validation
//          if index <= 0 or index > self.num_cols:
//              raise Exception('Index out of bounds')
//          # Set up the output vector
//          output = []
//          # For each of the rows, convert to a list and take index element
//          for i in range(self.num_rows):
//              r = self.rows[i]
//              output.append(r.split()[index - 1])
//          # map the list of characters to integers
//          output = list(map(int, output))
//          return output