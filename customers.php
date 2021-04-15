<?php include 'config.php';?>
<div class="white-text" id="customers" >
<div class="container" style="color:black;">
<div class="row">
<h3 style="font-weight: bold;text-align: center;">All Customers</h3>
<table class="responsive-table">
<thead>
<?php        
$output = '';
$search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "SELECT * FROM customers";
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
  
echo  "<thead>";
$output = '   <th>A/c No</th>
              <th>A/c Holder Name</th>
              <th>Current Balaance</th>
          
        </thead>       
         </tr>
 ';

?>                
<tbody>        
<?php
 echo $output;
 while ($row1=$result->fetch_assoc()) {
  echo"<tr>"?> 
  <?php
      echo "<td>"; echo $row1['c_id']; echo "</td>";
      echo "<td>"; echo $row1['c_name']; echo "</td>";
      echo "<td>"; echo $row1['avl_bal']; echo "</td>";
      echo "</tr>";
  }
echo"</div>";
}
else
{
 echo "<h1><center>Sorry, We Couldn't Find Any Results";
}

?>
</tr>
</table>
</div>
</body>
</html>
