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

// 카테고리 추가
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_category'])) {
    $category_name = $_POST["category_name"];

    $sql = "INSERT INTO 카테고리 (이름) VALUES ('$category_name')";

    if ($conn->query($sql) === TRUE) {
        echo "카테고리가 추가되었습니다.";
    } else {
        echo "오류: " . $sql . "<br>" . $conn->error;
    }
}

// 하위카테고리 추가
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_subcategory'])) {
    $subcategory_name = $_POST["subcategory_name"];
    $subcategory_price = $_POST["subcategory_price"];
    $parent_category_id = $_POST["parent_category_id"];

    $sql = "INSERT INTO 하위카테고리 (이름, 가격, 상위카테고리ID)
            VALUES ('$subcategory_name', '$subcategory_price', '$parent_category_id')";

    if ($conn->query($sql) === TRUE) {
        echo "하위카테고리가 추가되었습니다.";
    } else {
        echo "오류: " . $sql . "<br>" . $conn->error;
    }
}

// MySQL 연결 닫기
$conn->close();
?>
