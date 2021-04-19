<?php

include 'config.php';
$result = mysqli_query($conn, "SELECT * FROM guestbook");
echo "<table border=2px><tr><th>View Guestbook || <a href='form.php'>Sign Guestbook</a></th></tr>";
while ($row = mysqli_fetch_array($result)) {
    echo "<tr><td>" . $row['GuestID'] . "</td></tr>"
    . "<tr><td>" . $row['Name'] . "</td></tr>"
    . "<tr><td>" . $row['Email'] . "</td></tr>"
    . "<tr><td>" . $row['Comment'] . "</td></tr>"
    . "<td>" . $row['DateTime'] . "</td></tr>"
    . "<tr><td> </td></tr>";
}
echo "</table>";
?>