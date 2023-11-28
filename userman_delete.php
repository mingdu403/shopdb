<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    // MySQL 연결 설정
    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $dbname = "test_1";

    // MySQL 연결 생성
    $conn = new mysqli($servername, $username, $password, $dbname);

    // 연결 확인
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = $_GET['id'];

    // 사용자 삭제 쿼리
    $sql = "DELETE FROM 사용자 WHERE 아이디 = '$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "사용자가 삭제되었습니다.";
        header("Location: userman.php");
        exit();
    } else {
        echo "오류: " . $sql . "<br>" . $conn->error;
    }

    // MySQL 연결 닫기
    $conn->close();
} else {
    echo "잘못된 접근입니다.";
}
?>
