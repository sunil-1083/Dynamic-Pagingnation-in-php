<?php
include('../connection.php');

$table="register";
$limit=2;

            $query = "SELECT * FROM $table";
            $result=$conn->query($query);
            $rows=mysqli_num_rows($result);
            $count=ceil($rows/$limit);
            
        if(isset($_GET['page']))
        {
            $value= $_GET['page'];

            if($value=!is_numeric($value)||$value==is_float($value))
            {
                echo "Please Enter Integer value";
                die;
            }

        }


        if(isset($_GET['page']))
        {
            if($_GET['page']>$count||$_GET['page']<1){?>
                <h2><center><?php echo "Page Number Does't Exist!";?></center></h2>
<?php       die; } 
        }

    if(empty($_GET['page']))
    {
        $start=0;

    }else

    {
        $pages=$_GET['page'];
        $end=$pages*$limit;
        $start=$end-$limit;
    }

        $query = "SELECT * FROM $table limit $start,$limit";
        $result=$conn->query($query);
        $rows=$result->num_rows;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,th,td
        {
            border: 1px solid black;
        }
    </style>
</head>
<body><center>
    <table>
                <tr>
                    <th>Sr.No.</th>
                    <th>Name</th>
                    <th>father_name</th>
                    <th>mother_name</th>
                    <th>Numbers</th>
                    <th>Gmails</th>
                    <th>Password</th>
                </tr>
                <tr>
                        <?php if($rows>0)
                        {
                                while($row=mysqli_fetch_assoc($result))
                                {?>
                                    <td><?php echo $row['id'];?></td>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['father_name'];?></td>
                                    <td><?php echo $row['mother_name'];?></td>
                                    <td><?php echo $row['number'];?></td>
                                    <td><?php echo $row['gmail'];?></td>
                                    <td><?php echo $row['password'];?></td>
                </tr>
            <?php               } 
                         }?>
    </table>
<?php
            $query = "SELECT * FROM $table";
            $result=$conn->query($query);
            $rows=mysqli_num_rows($result);
            $count=ceil($rows/$limit);

            $page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
                  
            if (ceil($rows/$limit) > 0)
            {?>
                    <ul>
                                <?php if($page > 1){?>
                            <li>
                                        <a href="http://localhost/pagingnation/server/view.php?page=<?php echo $page-1 ?>">Preveiw</a>
                                <?php } ?>
                            
                                <?php if($page > 2){ ?>
                                        <a href="http://localhost/pagingnation/server/view.php?page=1">1</a>...
                                <?php } ?>                               
                        
                                <?php if($page-1 > 0){?>
                                        <a href="http://localhost/pagingnation/server/view.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a>
                                <?php } ?>
                            
                                        <a href="http://localhost/pagingnation/server/view.php?page=<?php echo $page ?>"><?php echo $page ?></a>
                            
                                <?php if($page+1 < ceil($rows / $limit)+1){?>
                                        <a href="http://localhost/pagingnation/server/view.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a>
                                <?php } ?>

                                <?php if($page+2 < ceil($rows / $limit)+1){ ?>
                                        <a href="http://localhost/pagingnation/server/view.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a>
                                <?php }?>
                            
                                <?php if($page < ceil($rows / $limit)-2){?>
                                    ...<a href="http://localhost/pagingnation/server/view.php?page=<?php echo ceil($rows / $limit) ?>"><?php echo ceil($rows / $limit) ?></a>
                                <?php } ?>
                            
                                <?php if($page < ceil($rows / $limit)){?>
                                        <a href="http://localhost/pagingnation/server/view.php?page=<?php echo $page+1 ?>">Next</a>

                            </li>
                        <?php } ?>
                    </ul>
     <?php }  ?>

<br>
   
            <a href="http://localhost/pagingnation/server/register.php">Add</a>
            <a href="http://localhost/pagingnation/server/view.php">View</a>

</center>
</form>

</body>
</html>