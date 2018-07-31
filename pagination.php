<?php
$con=mysqli_connect("localhost", "admin", "admin", "tss4");


$rec_per_page = 100;




$que1="SELECT COUNT(*) AS total FROM cities";
$res1= mysqli_query($con, $que1);
$data1=mysqli_fetch_assoc($res1);
$total_rec = $data1['total']; // 

$pages = $total_rec/$rec_per_page; // 
$pages = ceil($pages); // 

if(isset($_GET['page_no']))
{
    $a = $_GET['page_no']; // 12
    $b= $a-1;
    $c = $b*$rec_per_page;

    $que = "SELECT * FROM cities LIMIT $c, $rec_per_page";
}
else
{
    $que = "SELECT * FROM cities LIMIT $rec_per_page";
}




$res = mysqli_query($con, $que);








?>
<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <style>
    #box{
        width : 600px;
        height : auto;
        min-height : 300px;
        padding : 10px;
        background-color : #1450AD;
        margin : 10px auto;
        text-align: center;
    }
    #box table{
        border-collapse : collapse;
        width: 500px;
    }
    #box table tr td, th{
        border : 1px solid #FFF;
        color : #FFF;
        
    }
    a{
        text-decoration: none;
        border : 1px solid #FFF;
        padding: 5px;
        color: #FFF;
        display: inline-block;
    }
    a:hover{
        background-color: #FFF;
        color: #000;
    }
    .active{
        background-color: #FFF !important;
        color: #000 !important;   
    }
    </style>
</head>
<body>
<div id="box">
    <?php
    for($i=1; $i<=$pages; $i++)
    { 
        if($a==$i)
        {

            ?>
            <a class="active" href="pagination.php?page_no=<?php echo $i; ?>"><?php echo $i; ?></a>

        <?php
        }
        else
        {
            ?>
                <a href="pagination.php?page_no=<?php echo $i; ?>"><?php echo $i; ?></a>

            <?php   
        }
    }
    ?>





    <Hr />
    <table align="center">
        <tr>
            <th>S.No.</th>
            <th>City Name</th>
            <th>State Name</th>
        </tr>
        <?php
        while($data=mysqli_fetch_assoc($res))
        { ?>
            <tr>
                <td><?php echo $data['city_id'];?></td>
                <td><?php echo $data['city_name']; ?></td>
                <td><?php echo $data['state_name']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>    
</body>
</html>