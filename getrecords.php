<?php 

include 'db_connect.php';

$limit = (intval($_GET['limit']) != 0 ) ? $_GET['limit'] : 10;
$offset = (intval($_GET['offset']) != 0 ) ? $_GET['offset'] : 0;

$sql = "SELECT * FROM student_info WHERE id ORDER BY id ASC LIMIT $limit OFFSET $offset";

if ($con) {
            $result = mysqli_query($con,$sql);
            $row = mysqli_num_rows($result);
            if ($row) { # If Data Exist Then Showing in Table
                
                # Creating Array Dynamically From Database
                while ($row =mysqli_fetch_assoc($result)) {
                    $data[] = $row;
                }

                ?>
                        <table class="table table-striped">
                            <tr class="text-center head_table">
                                <td width="5%" class="text-center">#</td>
                                <td width="55%">Name</td>
                                <td width="20%">Roll</td>
                                <td width="10%">Edit</td>
                                <td width="10%">Delete</td>
                            </tr>
    <?php $i = 0; foreach ($data as $key) { $i++; ?>
                            <tr>
    <td width="5%" class="text-center"><?php echo $i; ?></td>
    <td width="55%"><?php echo $key['name']; ?></td>
    <td width="20%"><?php echo $key['roll']; ?></td>
    <td width="10%" class="text-center"><a href="update.php?id=<?php echo $key['id'] ?>"><button type="button" class="btn btn-primary">Edit / View</button></a></td>
    <td width="10%" class="text-center"><a href="delete.php?id=<?php echo $key['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
                            </tr>
    <?php } ?>

                        </table>
                <?php
            }
        } else {
            echo "<p class='bg-danger text-center padding-12'>Connection Failed Please Check Connection.</p>";
        }
?>