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
    $category_id = $_POST["category_id"]; // 사용자가 입력한 카테고리ID
    $category_name = $_POST["category_name"];

    $sql = "INSERT INTO 카테고리 (카테고리ID, 이름) VALUES ('$category_id', '$category_name')";

    if ($conn->query($sql) === TRUE) {
        
    } else {
        echo "오류: " . $sql . "<br>" . $conn->error;
    }
}


// 하위카테고리 추가
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_subcategory'])) {
    $subcategory_name = $_POST["subcategory_name"];
    $subcategory_price = $_POST["subcategory_price"];
    $parent_category_id = $_POST["parent_category_id"];
    $subcategory_id = $_POST["subcategory_id"];

    $sql = "INSERT INTO 하위카테고리 (하위카테고리ID, 이름, 가격, 상위카테고리ID)
        VALUES ('$subcategory_id', '$subcategory_name', '$subcategory_price', '$parent_category_id')";


    if ($conn->query($sql) === TRUE) {
    
    } else {
        echo "오류: " . $sql . "<br>" . $conn->error;
    }
}


// 카테고리 목록 조회 쿼리
$category_query = "SELECT * FROM 카테고리";
$category_result = $conn->query($category_query);

// 하위카테고리 목록 조회 쿼리
$subcategory_query = "SELECT * FROM 하위카테고리";
$subcategory_result = $conn->query($subcategory_query);

// 카테고리 목록을 HTML 테이블로 표시
echo "<h2>카테고리 목록</h2>";
if ($category_result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>카테고리ID</th>
                <th>이름</th>
                <th>삭제</th>
            </tr>";
    while ($row = $category_result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["카테고리ID"] . "</td>
                <td>" . $row["이름"] . "</td>
                <td><a href='category_delete.php?id=" . $row["카테고리ID"] . "'>삭제</a></td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// 하위카테고리 목록을 HTML 테이블로 표시
echo "<h2>하위카테고리 목록</h2>";
if ($subcategory_result->num_rows > 0) {
    $currentCategoryId = null;

    while ($row = $subcategory_result->fetch_assoc()) {
        // 카테고리ID가 변경되면 새로운 테이블 생성
        if ($currentCategoryId !== $row["상위카테고리ID"]) {
            if ($currentCategoryId !== null) {
                echo "</table>"; // 이전 테이블 닫기
            }
            
            echo "<h3>카테고리ID: " . $row["상위카테고리ID"] . "</h3>";
            echo "<table border='1'>
                    <tr>
                        <th>하위카테고리ID</th>
                        <th>이름</th>
                        <th>가격</th>
                        <th>상위카테고리ID</th>
                        <th>삭제</th>
                    </tr>";
            
            $currentCategoryId = $row["상위카테고리ID"];
        }

        echo "<tr>
                <td>" . $row["하위카테고리ID"] . "</td>
                <td>" . $row["이름"] . "</td>
                <td>" . $row["가격"] . "</td>
                <td>" . $row["상위카테고리ID"] . "</td>
                <td><a href='subcategory_delete.php?id=" . $row["하위카테고리ID"] . "'>삭제</a></td>
            </tr>";
    }

    echo "</table>"; // 마지막 테이블 닫기
} else {
    echo "0 results";
}


// MySQL 연결 닫기
$conn->close();
?>

<!-- 카테고리 추가 폼 -->
<h2>카테고리 추가</h2>
<form method="post" action="">
    카테고리ID: <input type="text" name="category_id" required>
    카테고리 이름: <input type="text" name="category_name" required>
    <input type="submit" name="add_category" value="추가">
</form>

<!-- 하위카테고리 추가 폼 -->
<h2>하위카테고리 추가</h2>
<form method="post" action="">
    하위카테고리ID: <input type="text" name="subcategory_id" required>
    하위카테고리 이름: <input type="text" name="subcategory_name" required>
    가격: <input type="text" name="subcategory_price" required>
    상위카테고리ID: <input type="text" name="parent_category_id" required>
    <input type="submit" name="add_subcategory" value="추가">
</form>