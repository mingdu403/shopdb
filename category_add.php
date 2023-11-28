<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
    $name = $_POST['name'];

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

    // 카테고리 추가 쿼리
    $add_query = "INSERT INTO 카테고리 (이름) VALUES ('$name')";
    
    if ($conn->query($add_query) === TRUE) {
        header("Location: category_management.php");
        exit(); // 리다이렉트 이후에 코드가 실행되지 않도록 종료
    } else {
        echo "추가 중 오류 발생: " . $conn->error;
    }

    // MySQL 연결 닫기
    $conn->close();
} else {
    echo "잘못된 접근입니다.";
}
?>
