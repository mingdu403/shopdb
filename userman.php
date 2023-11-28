<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원 관리</title>
</head>

<body>
    <h1>회원 관리</h1>

    <!-- 사용자 정보 입력 폼 -->
    <h2>새로운 사용자 추가</h2>
    <form action="userman_process.php" method="post">
        아이디: <input type="text" name="id" required><br>
        비밀번호: <input type="password" name="password" required><br>
        이름: <input type="text" name="name" required><br>
        주소: <input type="text" name="address"><br>
        전화번호: <input type="text" name="phone" required><br>
        나이: <input type="number" name="age" required><br>
        성별: <input type="text" name="gender"><br>
        <input type="submit" value="추가">
    </form>

    <!-- 사용자 정보 표시 -->
    <h2>회원 목록</h2>

    <?php include("userman_display.php"); ?>
</body>

</html>
