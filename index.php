<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Comparison</title>
</head>

<body>
   
   <h3><strong>Задание 1.&nbsp;</strong>Таблица истинности PHP</h3>
   
   <table style="table-layout: fixed; width: 900px; margin: auto;">
      <thead>
         <tr>
            <th><strong>A</strong></th>
            <th><strong>B</strong></th>
            <th><strong>!A</strong></th>
            <th><strong>A || B</strong></th>
            <th><strong>A &amp;&amp; B</strong></th>
            <th><strong>A xor B</strong></th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td><?php $a = 0; echo $a; ?></td>
            <td><?php $b = 0; echo $b; ?></td>
            <td><?php echo ! $a; ?></td>
            <td><?php echo $a || $b; ?></td>
            <td><?php echo $a && $b; ?></td>
            <td><?php echo $a xor $b; ?></td>
         </tr>
         <tr>
            <td><?php $a = 0; echo $a; ?></td>
            <td><?php $b = 1; echo $b; ?></td>
            <td><?php echo ! $a; ?></td>
            <td><?php echo $a || $b; ?></td>
            <td><?php echo $a && $b; ?></td>
            <td><?php echo $a xor $b; ?></td>
         </tr>
         <tr>
            <td><?php $a = 1; echo $a; ?></td>
            <td><?php $b = 0; echo $b; ?></td>
            <td><?php echo ! $a; ?></td>
            <td><?php echo $a || $b; ?></td>
            <td><?php echo $a && $b; ?></td>
            <td><?php echo $a xor $b; ?></td>
         </tr>
         <tr>
            <td><?php $a = 1; echo $a; ?></td>
            <td><?php $b = 1; echo $b; ?></td>
            <td><?php echo ! $a; ?></td>
            <td><?php echo $a || $b; ?></td>
            <td><?php echo $a && $b; ?></td>
            <td><?php echo $a xor $b; ?></td>
         </tr>
      </tbody>
   </table>

   <h3><strong>Задание 2.&nbsp;</strong>Гибкое сравнение в PHP</h3>

   <table style="table-layout: fixed; width: 900px; margin: auto;">
      <thead>
         <tr>
            <th width="10px"></th>
            <th width="10px">true</th>
            <th width="10px">false</th>
            <th width="10px">1</th>
            <th width="10px">0</th>
            <th width="10px">-1</th>
            <th width="10px">"1"</th>
            <th width="10px">null</th>
            <th width="10px">"php"</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td style="background-color: #f5f5f5;"><strong>true</strong></td>
            <td><?php $a = true; $b = true; echo $a == $b; ?></td>
            <td><?php $b = false; echo $a == $b; ?></td>
            <td><?php $b = 1; echo $a == $b; ?></td>
            <td><?php $b = 0; echo $a == $b; ?></td>
            <td><?php $b = -1; echo $a == $b; ?></td>
            <td><?php $b = "1"; echo $a == $b; ?></td>
            <td><?php $b = null; echo $a == $b; ?></td>
            <td><?php $b = "php"; echo $a == $b; ?></td>
         </tr>
         <tr>
            <td style="background-color: #f5f5f5;"><strong>false</strong></td>
            <td><?php $a = false; $b = true; echo $a == $b; ?></td>
            <td><?php $b = false; echo $a == $b; ?></td>
            <td><?php $b = 1; echo $a == $b; ?></td>
            <td><?php $b = 0; echo $a == $b; ?></td>
            <td><?php $b = -1; echo $a == $b; ?></td>
            <td><?php $b = "1"; echo $a == $b; ?></td>
            <td><?php $b = null; echo $a == $b; ?></td>
            <td><?php $b = "php"; echo $a == $b; ?></td>
         </tr>
         <tr>
            <td style="background-color: #f5f5f5;"><strong>1</strong></td>
            <td><?php $a = 1; $b = true; echo $a == $b; ?></td>
            <td><?php $b = false; echo $a == $b; ?></td>
            <td><?php $b = 1; echo $a == $b; ?></td>
            <td><?php $b = 0; echo $a == $b; ?></td>
            <td><?php $b = -1; echo $a == $b; ?></td>
            <td><?php $b = "1"; echo $a == $b; ?></td>
            <td><?php $b = null; echo $a == $b; ?></td>
            <td><?php $b = "php"; echo $a == $b; ?></td>
         </tr>
         <tr>
            <td style="background-color: #f5f5f5;"><strong>0</strong></td>
            <td><?php $a = 0; $b = true; echo $a == $b; ?></td>
            <td><?php $b = false; echo $a == $b; ?></td>
            <td><?php $b = 1; echo $a == $b; ?></td>
            <td><?php $b = 0; echo $a == $b; ?></td>
            <td><?php $b = -1; echo $a == $b; ?></td>
            <td><?php $b = "1"; echo $a == $b; ?></td>
            <td><?php $b = null; echo $a == $b; ?></td>
            <td><?php $b = "php"; echo $a == $b; ?></td>
         </tr>
         <tr>
            <td style="background-color: #f5f5f5;"><strong>-1</strong></td>
            <td><?php $a = -1; $b = true; echo $a == $b; ?></td>
            <td><?php $b = false; echo $a == $b; ?></td>
            <td><?php $b = 1; echo $a == $b; ?></td>
            <td><?php $b = 0; echo $a == $b; ?></td>
            <td><?php $b = -1; echo $a == $b; ?></td>
            <td><?php $b = "1"; echo $a == $b; ?></td>
            <td><?php $b = null; echo $a == $b; ?></td>
            <td><?php $b = "php"; echo $a == $b; ?></td>
         </tr>
         <tr>
            <td style="background-color: #f5f5f5;"><strong>"1"</strong></td>
            <td><?php $a = "1"; $b = true; echo $a == $b; ?></td>
            <td><?php $b = false; echo $a == $b; ?></td>
            <td><?php $b = 1; echo $a == $b; ?></td>
            <td><?php $b = 0; echo $a == $b; ?></td>
            <td><?php $b = -1; echo $a == $b; ?></td>
            <td><?php $b = "1"; echo $a == $b; ?></td>
            <td><?php $b = null; echo $a == $b; ?></td>
            <td><?php $b = "php"; echo $a == $b; ?></td>
         </tr>
         <tr>
            <td style="background-color: #f5f5f5;"><strong>null</strong></td>
            <td><?php $a = null; $b = true; echo $a == $b; ?></td>
            <td><?php $b = false; echo $a == $b; ?></td>
            <td><?php $b = 1; echo $a == $b; ?></td>
            <td><?php $b = 0; echo $a == $b; ?></td>
            <td><?php $b = -1; echo $a == $b; ?></td>
            <td><?php $b = "1"; echo $a == $b; ?></td>
            <td><?php $b = null; echo $a == $b; ?></td>
            <td><?php $b = "php"; echo $a == $b; ?></td>
         </tr>
         <tr>
            <td style="font-size: 16px; white-space: nowrap; background-color: #f5f5f5;"><strong>"php"</strong></td>
            <td><?php $a = "php"; $b = true; echo $a == $b; ?></td>
            <td><?php $b = false; echo $a == $b; ?></td>
            <td><?php $b = 1; echo $a == $b; ?></td>
            <td><?php $b = 0; echo $a == $b; ?></td>
            <td><?php $b = -1; echo $a == $b; ?></td>
            <td><?php $b = "1"; echo $a == $b; ?></td>
            <td><?php $b = null; echo $a == $b; ?></td>
            <td><?php $b = "php"; echo $a == $b; ?></td>
         </tr>
      </tbody>
   </table>


   <h3><strong>Задание 3.&nbsp;</strong>Жёсткое сравнение в PHP</h3>

   <table style="table-layout: fixed; width: 900px; margin: auto;">
      <thead>
         <tr>
            <th width="10px"></th>
            <th width="10px">true</th>
            <th width="10px">false</th>
            <th width="10px">1</th>
            <th width="10px">0</th>
            <th width="10px">-1</th>
            <th width="10px">"1"</th>
            <th width="10px">null</th>
            <th width="10px">"php"</th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td style="background-color: #f5f5f5;"><strong>true</strong></td>
            <td><?php $a = true; $b = true; echo $a === $b; ?></td>
            <td><?php $b = false; echo $a === $b; ?></td>
            <td><?php $b = 1; echo $a === $b; ?></td>
            <td><?php $b = 0; echo $a === $b; ?></td>
            <td><?php $b = -1; echo $a === $b; ?></td>
            <td><?php $b = "1"; echo $a === $b; ?></td>
            <td><?php $b = null; echo $a === $b; ?></td>
            <td><?php $b = "php"; echo $a === $b; ?></td>
         </tr>
         <tr>
            <td style="background-color: #f5f5f5;"><strong>false</strong></td>
            <td><?php $a = false; $b = true; echo $a === $b; ?></td>
            <td><?php $b = false; echo $a === $b; ?></td>
            <td><?php $b = 1; echo $a === $b; ?></td>
            <td><?php $b = 0; echo $a === $b; ?></td>
            <td><?php $b = -1; echo $a === $b; ?></td>
            <td><?php $b = "1"; echo $a === $b; ?></td>
            <td><?php $b = null; echo $a === $b; ?></td>
            <td><?php $b = "php"; echo $a === $b; ?></td>
         </tr>
         <tr>
            <td style="background-color: #f5f5f5;"><strong>1</strong></td>
            <td><?php $a = 1; $b = true; echo $a === $b; ?></td>
            <td><?php $b = false; echo $a === $b; ?></td>
            <td><?php $b = 1; echo $a === $b; ?></td>
            <td><?php $b = 0; echo $a === $b; ?></td>
            <td><?php $b = -1; echo $a === $b; ?></td>
            <td><?php $b = "1"; echo $a === $b; ?></td>
            <td><?php $b = null; echo $a === $b; ?></td>
            <td><?php $b = "php"; echo $a === $b; ?></td>
         </tr>
         <tr>
            <td style="background-color: #f5f5f5;"><strong>0</strong></td>
            <td><?php $a = 0; $b = true; echo $a === $b; ?></td>
            <td><?php $b = false; echo $a === $b; ?></td>
            <td><?php $b = 1; echo $a === $b; ?></td>
            <td><?php $b = 0; echo $a === $b; ?></td>
            <td><?php $b = -1; echo $a === $b; ?></td>
            <td><?php $b = "1"; echo $a === $b; ?></td>
            <td><?php $b = null; echo $a === $b; ?></td>
            <td><?php $b = "php"; echo $a === $b; ?></td>
         </tr>
         <tr>
            <td style="background-color: #f5f5f5;"><strong>-1</strong></td>
            <td><?php $a = -1; $b = true; echo $a === $b; ?></td>
            <td><?php $b = false; echo $a === $b; ?></td>
            <td><?php $b = 1; echo $a === $b; ?></td>
            <td><?php $b = 0; echo $a === $b; ?></td>
            <td><?php $b = -1; echo $a === $b; ?></td>
            <td><?php $b = "1"; echo $a === $b; ?></td>
            <td><?php $b = null; echo $a === $b; ?></td>
            <td><?php $b = "php"; echo $a === $b; ?></td>
         </tr>
         <tr>
            <td style="background-color: #f5f5f5;"><strong>"1"</strong></td>
            <td><?php $a = "1"; $b = true; echo $a === $b; ?></td>
            <td><?php $b = false; echo $a === $b; ?></td>
            <td><?php $b = 1; echo $a === $b; ?></td>
            <td><?php $b = 0; echo $a === $b; ?></td>
            <td><?php $b = -1; echo $a === $b; ?></td>
            <td><?php $b = "1"; echo $a === $b; ?></td>
            <td><?php $b = null; echo $a === $b; ?></td>
            <td><?php $b = "php"; echo $a === $b; ?></td>
         </tr>
         <tr>
            <td style="background-color: #f5f5f5;"><strong>null</strong></td>
            <td><?php $a = null; $b = true; echo $a === $b; ?></td>
            <td><?php $b = false; echo $a === $b; ?></td>
            <td><?php $b = 1; echo $a === $b; ?></td>
            <td><?php $b = 0; echo $a === $b; ?></td>
            <td><?php $b = -1; echo $a === $b; ?></td>
            <td><?php $b = "1"; echo $a === $b; ?></td>
            <td><?php $b = null; echo $a === $b; ?></td>
            <td><?php $b = "php"; echo $a === $b; ?></td>
         </tr>
         <tr>
            <td style="font-size: 16px; white-space: nowrap; background-color: #f5f5f5;"><strong>"php"</strong></td>
            <td><?php $a = "php"; $b = true; echo $a === $b; ?></td>
            <td><?php $b = false; echo $a === $b; ?></td>
            <td><?php $b = 1; echo $a === $b; ?></td>
            <td><?php $b = 0; echo $a === $b; ?></td>
            <td><?php $b = -1; echo $a === $b; ?></td>
            <td><?php $b = "1"; echo $a === $b; ?></td>
            <td><?php $b = null; echo $a === $b; ?></td>
            <td><?php $b = "php"; echo $a === $b; ?></td>
         </tr>
      </tbody>
   </table>

<style>

table {
   width: 100%;
   margin: 20px 0;
   border-collapse: collapse;
   font-size: 16px;
   font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
/*table-layout: auto;
display: table;*/

/*box-sizing: border-box;*/
/*text-indent: initial;*/
/*border-spacing: 2px;*/
/*border-color: gray;*/
}

table td {
   margin: 20px 0;
   padding: 10px;   
   border: 1px solid #c8c8c8;
   
}

thead th {  
   background: #eee;
   font-weight: bold;
}

table th {
  
    padding: 15px 20px;
    text-align: center;
    margin: 20px 0;
    padding: 10px;
    border: 1px solid #c8c8c8;
    font-size: 14px;
}

</style>
</body>
</html>