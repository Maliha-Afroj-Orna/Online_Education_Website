<?php
$connection = mysqli_connect("localhost","root","","maliha");
$query = "SELECT * FROM user";
$query_run = mysqli_query($connection,$query);

$conn= mysqli_connect('localhost','root','','maliha');
if(mysqli_connect_error())
{
    echo "Failed to Connect to Database".mysqli_connect_error();
}

header('Content-type: application/vnd-ms-excel');
$filename = "user_data.xls";
header("Content-Disposition:attachment;filename= user_data.xls");
?>


<table style="text-align: center; margin:2% auto" class="table table-bordered" id="dataTable" width="40%%" cellspacing="0">
    <caption style="text-decoration: underline;font-size: 4rem;color: #6F1E51;font-weight: bold;margin-bottom: 2%">USER</caption>
    <thead>
    <tr style="font-size: 3rem;font-weight: bold;color: #6F1E51">
        <th style="padding:0 130px">ID</th>
        <th style="padding:0 130px">NAME</th>
        <th style="padding:0 130px">EMAIL</th>
        <th style="padding:0 130px">PASSWORD</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if(mysqli_num_rows($query_run)>0)
    {
        while($row = mysqli_fetch_assoc($query_run))
        {
            ?>



            <tr style="font-size: 2rem;">
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
            </tr>

            <?php
        }
    }
    else{
        echo "No Record Found";
    }
    ?>

    </tbody>
</table>
