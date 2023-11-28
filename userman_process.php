<?php
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

// 사용자 정보 추가
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];

    $sql = "INSERT INTO 사용자 (아이디, 비밀번호, 이름, 주소, 전화번호, 나이, 성별)
            VALUES ('$id', '$password', '$name', '$address', '$phone', '$age', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "사용자가 추가되었습니다.";
        header("Location: userman.php");
        exit();
    } else {
        echo "오류: " . $sql . "<br>" . $conn->error;
    }
}

// MySQL 연결 닫기
$conn->close();
?>
