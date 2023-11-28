<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

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

    // 하위카테고리 삭제 쿼리
    $delete_query = "DELETE FROM 하위카테고리 WHERE 하위카테고리ID = '$id'";
    
    if ($conn->query($delete_query) === TRUE) {
        header("Location: category_management.php");
        exit(); // 리다이렉트 이후에 코드가 실행되지 않도록 종료
    } else {
        echo "삭제 중 오류 발생: " . $conn->error;
    }

    // MySQL 연결 닫기
    $conn->close();
} else {
    echo "잘못된 접근입니다.";
}
?>
