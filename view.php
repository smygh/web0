<!DOCTYPE HTML>

<html>

<head>
  <title>Untitled</title>
</head>

<body>

  <?php
    $connect=new PDO('mysql:host=localhost;dbname=test','root','');
   $r=$connect->prepare('select * from user');
   $r->execute();
    $row=$r->fetchAll(PDO::FETCH_ASSOC);


  ?>
 <table>
  <tr>
   <th>ردیف</th>
   <th>نام کاریری</th>
   <th>رمز</th>
   <th>عکس</th>
   <th>&nbsp;</th>
   <th>&nbsp;</th>
  </tr>

  <?php

     foreach($row as $v){
          ?>



  <tr>
     <td><?php echo $v['id']  ?></td>
     <td><?php echo $v['username']  ?></td>
     <td><?php echo $v['password']  ?></td>
     <td><?php echo $v['pic']  ?></td>
      <td><a href="">ویرایش</a></td>

      <td> <?php echo "<a href='del.php?id=".$v["id"]."'>حذف</a>  " ?>  </td>

  </tr>
  <?php   }?>
 </table>










</body>

</html>