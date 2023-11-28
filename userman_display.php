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

// 사용자 정보 조회 쿼리
$sql = "SELECT * FROM 사용자";
$result = $conn->query($sql);

// 사용자 정보를 HTML 테이블로 표시
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>아이디</th>
                <th>이름</th>
                <th>주소</th>
                <th>전화번호</th>
                <th>나이</th>
                <th>성별</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["아이디"] . "</td>
                <td>" . $row["이름"] . "</td>
                <td>" . $row["주소"] . "</td>
                <td>" . $row["전화번호"] . "</td>
                <td>" . $row["나이"] . "</td>
                <td>" . $row["성별"] . "</td>
                <td><a href='userman_delete.php?id=" . $row["아이디"] . "'>삭제</a></td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// MySQL 연결 닫기
$conn->close();
?>