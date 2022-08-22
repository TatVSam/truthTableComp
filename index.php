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

   <h3><strong>Выводы о сравнении в PHP</h3>

   <ol>
      <li>При гибком сравнении в <em>PHP</em> происходит преобразование типов:
      <ol>
         <li>При сравнении строк, содержащих числа, или при сравнении строки с числом оператор <span class="monospace">==</span> пытается преобразовать строки в числа, поэтому равенство <span class="monospace">"1" == 1</span> верно.</li>
         <li>При сравнении <span class="monospace"><strong>null</strong></span> и <span class="monospace"><strong>string</strong></span> 
         <span class="monospace"><strong>null</strong></span> преобразуется в пустую строку.</li>
         <li>При сравнении <span class="monospace"><strong>bool</strong></span> или <span class="monospace"><strong>null</strong></span> с другими типами 
         (кроме <span class="monospace"><strong>string</strong></span> для <span class="monospace"><strong>null</strong></span>) происходит преобразование второго операнда в тип 
         <span class="monospace"><strong>bool</strong></span>. 
            При этом в <span class="monospace"><strong>false</strong></span> переводятся <em>пустая строка</em>, <span class="monospace"><strong>null</strong></span>, 
            <span class="monospace"><strong>0</strong></span> и <span class="monospace"><strong>"0"</strong></span>.
            Всё, что не <span class="monospace"><strong>false</strong></span>, становится <span class="monospace"><strong>true</strong></span>, поэтому равенства <span class="monospace">true == -1</span>
            и <span class="monospace">true == "php"</span> верны.</li>
      </ol>
      </li>
      <li>При жёстком сравнении оба операнда равны тогда и только тогда, когда их типы совпадают, а значения равны.</li>
   </ol>
 
<style>

ol li{
   font: normal 16px "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
   margin-top: 10px;
   
}

.monospace {
   font-family: monospace;
}

table {
   width: 100%;
   margin: 20px 0;
   border-collapse: collapse;
   font-size: 16px;
   font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
}

table td {
   margin: 20px 0;
   padding: 10px;   
   border: 1px solid #c8c8c8;
   
}


table th {
    background: #eee;
    font-weight: bold;
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