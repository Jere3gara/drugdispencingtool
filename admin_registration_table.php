<?php
session_start();
$pageTitle = "Admins Table";
include 'inc/header-admin.php';
?>

<div class="table">
    <table>
        <tr>
            <th>Admin ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Email address</th>
            <th>Phone number</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "drugdispensingtool");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT Admin_ID, fname, lname, DOB, gender, email, phone from Admin_table";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["Admin_ID"] . "</td><td>" . $row["fname"] . "</td><td>" . $row["lname"] . "</td><td>" . $row["DOB"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 result";
        }
        ?>
    </table>
    <a href="edit_admin_table.php"><button type="button">Edit data</button></a>
</div>
<script src="user_homepage.js"></script>
<?php
include 'inc/footer.php';
?>