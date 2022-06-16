<?php
$connection = mysqli_connect("localhost","root","","maliha");
$query = "SELECT * FROM complain";
$query_run = mysqli_query($connection,$query);

$conn= mysqli_connect('localhost','root','','maliha');
if(mysqli_connect_error())
{
    echo "Failed to Connect to Database".mysqli_connect_error();
}

header('Content-type: application/vnd-ms-excel');
$filename = "feedback_data.xls";
header("Content-Disposition:attachment;filename= feedback_data.xls");
?>


<table style="text-align: center; margin:2% auto;" class="table table-bordered" id="dataTable" width="40%%" cellspacing="0">
    <caption style="text-decoration: underline;font-size: 4rem;color: #6F1E51;font-weight: bold;margin-bottom: 2%">FEEDBACK</caption>
    <thead>
    <tr style="font-size: 3rem;font-weight: bold;color: #6F1E51;">
        <th style="padding:0 90px">ID</th>
        <th style="padding:0 90px">NAME</th>
        <th style="padding:0 90px">EMAIL</th>
        <th style="padding:0 90px">PHONE</th>
        <th style="padding:0 90px">FEEDBACK</th>
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
                <td ><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['feedback']; ?></td>

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
