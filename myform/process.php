<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    // 在這裡添加代碼將數據插入到資料庫中
    // 你需要先連接到資料庫，然後使用SQL INSERT語句插入數據

    // 例子（請替換為你的資料庫連接信息）
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydatabase";

    // 創建連接
    $conn = new mysqli($servername, $username, $password, $dbname);

    // 檢查連接
    if ($conn->connect_error) {
        die("連接失敗：" . $conn->connect_error);
    }

    // 插入數據
    $sql = "INSERT INTO mytable (name, email) VALUES ('$name', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "數據插入成功";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // 關閉連接
    $conn->close();
}
?>
