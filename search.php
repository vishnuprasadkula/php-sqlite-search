# php-sqlite-search
simpe search engine using php and sqlite
 <?php
               $db=new SQLite3("db.sqlite");
$id=$_GET['search'];

$query="SELECT * from protein WHERE row name  LIKE '%$id%' ";

$result=$db->query($query);

while($row=$result->fetchArray()):?>
 
        <tr>
            <!--Each table column is echoed in to a td cell-->
<td><?php echo $row['Virus']; ?></td>
            <td><?php echo $row['row name']; ?></td>
              <td><?php echo $row['row name']; ?></td>
            <td><?php echo $row['row name']; ?></td>
              <td><?php echo $row['row name']; ?></td>
            <td><?php echo $row['row name']; ?></td>
            <td><?php echo $row['row name']; ?></td>
            
        </tr>
        <?php endwhile ?>
    </tbody>
</table>

        


