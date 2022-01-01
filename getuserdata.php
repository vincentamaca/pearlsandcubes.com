<?php
    require ("admin/db_connect.php");

    function getUserData($id)
    {
        $array = array();
        $sql = mysqli_query("SELECT * FROM `user_info` WHERE `user_id`=".$id);
        while($row = mysql_fecth_assoc($sql))
        {
            $array['user_id'] = $row['user_id'];
            $array['first_name'] = $row['first_name'];
            $array['last_name'] = $row['last_name'];
            $array['email'] = $row['email'];
            $array['mobile'] = $row['mobile'];
            $array['address'] = $row['address'];
        }
        return $array;
    }
    function getId($username)
    {
        $sql = mysql_query("SELECT `id` FROM 'user_info` WHERE `first_name` =".$username."'");
        while($row = myqsl_fecth_assoc($sql))
        {
            return $row['user_id'];
        }
    }
?>