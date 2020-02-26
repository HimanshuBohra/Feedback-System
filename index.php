<?php
    include "connection.php";
?>
<!DOCTYPE html>
<html>
    <select name="course" id="course" onClick="myfunc()">
        <?php
            $sql="select * from Course";
            $result=mysqli_query($con,$sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<option value=".$row['course_name']."> ".$row['course_name']."</option>";
                }
            }
        ?>
    </select>
    <script>
    function myfunc(){
       var a = document.getElementById("course").value;
        alert(a);
    }
    </script>
</html>