<?php 
    $hostname = "localhost";    
    $user = "root";
    $pass = "";
    $database = "prakweb_daily_list";
    $conn = mysqli_connect($hostname,$user,$pass,$database);
    
    function showDailyList($query){
        global $conn;
        $result = mysqli_query($conn,$query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row ; // mengambil satu dataset sebagai array
        }
        return $rows;
    }
    function insertDailyList($data){
        global $conn;
        $user_id = $_SESSION['id'];
        $status = htmlspecialchars($data["status"]);
        $activity_name = htmlspecialchars($data["activity_name"]);
        $date = htmlspecialchars($data["date"]);
        $category = htmlspecialchars($data["category"]);

        $query = "INSERT INTO daily_list
            VALUES
            ('',$user_id,'$status','$activity_name','$date','$category')
            ";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
    }
    function updateDailyList($data){
        global $conn;
        $id = $data["id"];
        $user_id = $data["user_id"];
        $status = htmlspecialchars($data["status"]);
        $activity_name = htmlspecialchars($data["activity_name"]);
        $date = htmlspecialchars($data["date"]);
        $category = htmlspecialchars($data["category"]);

        $query = "UPDATE daily_list SET
                status = '$status',
                activity_name = '$activity_name',
                date = '$date',
                category = '$category'
                WHERE id='$id' AND user_id= '$user_id'
            ";
        mysqli_query($conn,$query);
        $check = mysqli_affected_rows($conn);
        var_dump($check);

        return mysqli_affected_rows($conn);
    }
    function insertUserAccount($data){
        session_start();
        global $conn;
        $email = htmlspecialchars($data["email"]);
        $username = htmlspecialchars(strtolower(stripslashes($data["username"])));
        $birth_date = htmlspecialchars($data["birth_date"]);
        $country = htmlspecialchars($data["country"]);
        $password = mysqli_real_escape_string($conn,htmlspecialchars($data["password"]));
        $valpassword = mysqli_real_escape_string($conn,htmlspecialchars($data["valpassword"]));
        
        $query_user = mysqli_query($conn,"SELECT username FROM user_account WHERE username='$username'");
        $query_email = mysqli_query($conn,"SELECT username FROM user_account WHERE username='$email'");

        if(mysqli_fetch_assoc($query_user)){
            echo"
                <script>
                    alert('The username already exist');
                </script>
            ";
            return false;
        }else if(mysqli_fetch_assoc($query_email)){
            echo"
                <script>
                    alert('The email already exist');
                </script>
            ";
            return false;
        }
        
        if($valpassword !== $password){
            echo "
                <script>
                    alert('No Matching Password');
                </script>
            ";
            return false;
        }

        $password = password_hash($password,PASSWORD_DEFAULT);
        $_SESSION['signup'] = true;
        $_SESSION['username'] = $username;
        $query = "INSERT INTO user_account
            VALUES
            ('','$email','$username','$birth_date','$country','$password')
            ";
        mysqli_query($conn,$query);
        $query = "SELECT id FROM user_account WHERE username = '$username'";
        $result = mysqli_query($conn,$query);
        $user_id = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $user_id["id"];

        return mysqli_affected_rows($conn);
    }

    function loginUser($data){
        global $conn;

        $username = $data["username"];
        $password = $data["password"];

        $checkUser = "SELECT username FROM user_account WHERE username=$username";
        $result = mysqli_query($conn,$checkUser);  

        $row = mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result) === 1){
            if(password_verify($password,$row["password"])){
                return true;
            }
        }
        return false;
    }
?>