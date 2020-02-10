<?php
session_start();
if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      printf('<b>%s</b>', $_SESSION['message']);
      unset($_SESSION['message']);
    }

    echo "<br><br><br>";
    
    
    $count = 0;
    $totaloperaciones = 0;
    $titulo = 0;
    $file = "uploaded_files/datos.txt";
    $contents = file_get_contents($file);
    $lines = explode(',', $contents);

        foreach($lines as $array) {
        $count = $count + 1;
          if (($count == 1) && ($titulo >= 3))
          {
            $a = $array;
            echo "$array * ";
          }
          elseif (($count == 2) && ($titulo >= 3))
          {
            $b = $array;
            echo "$array = ";
          } 
          elseif (($count == 3) && ($titulo >= 3))
          {
            $resultado = $a * $b;
            echo "$resultado";
            echo "<br>";
            $count = 0;
            $totaloperaciones = $totaloperaciones + 1;          
          }
          
          if ($titulo < 3) 
          {
            $titulo = $titulo + 1;
            if ($titulo == 1) 
            {
              echo "$array * ";
            }
            elseif ($titulo == 2) 
            {
              echo "$array = ";            }
            elseif ($titulo == 3) 
            {
              echo "$array";
              echo "<br>";
              $count = 0;
            } 
          } 
        };
        unlink("uploaded_files/datos.txt");
        echo "<br><br>Total de operaciones: $totaloperaciones";
        echo "<br><br>Fin del programa";
        ?>