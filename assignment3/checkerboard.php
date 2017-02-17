<html> 
     <head> 
  <title>Checker Board</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link type="text/css" rel="stylesheet" href="./checkerboard.css">
  </head>
  <body> 
  <h3>Chess Board using Nested For Loop</h3>
   <table>
      <?php
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $total=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=35px width=35px bgcolor=red></td>";
          
          }
		  else
		  {
          echo "<td height=35px width=35px bgcolor=black></td>";
          }
          }
          echo "</tr>";
    }
          ?>
  </table>
  </body>
  </html>