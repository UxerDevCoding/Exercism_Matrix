<?php

declare(strict_types=1);

namespace App;

class Matrix {

    public $stringRows;
    public $stringColumns;
    public $row;
    public $columns;

    public function __construct()
    {
        $this->$stringRows = string.split("\n");
    }

    public function getRow() 
    {
      
        # code...
    }

    public function getColumn()
    {
        # code...
    }
  
}



  

//   get columns() {
//     if (!this.#columns) {
//       this.#columns = this.rows[0].map((_, i) =>
//         this.rows.map((row) => row[i])
//       );
//     }
//     return this.#columns;
//   }
// }