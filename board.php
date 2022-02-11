<?php
    session_start();
    include './lib/include/sql_conn.php';
    $username = $_SESSION['username'];

    $sql = "select count(boardidx) total from tb_board";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    $total = $data['total'];

    $pageCount = 10;
    $start = 0;
    $page = 1;

    if(isset($_GET['page'])) {
        $page = $_GET['page'];
        $start = ($page - 1) * $pageCount;
    }

    $sql = "select boardidx, boardtitle, userid, boardhit, boardlike, boardregdate from tb_board order by boardidx desc limit $start, $pageCount";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./lib/css/style.css">
</head>
<body>
    <div id="wrap" class="board_wrap">
        <div>
            <h2>Board Form</h2>
            <p class="total_cnt">전체 글 개수 : <?=$total?></p>
            <table border="1" width="800">
                <tr>
                    <th>번호</th>
                    <th>제목</th>
                    <th>글쓴이</th>
                    <th>조회수</th>
                    <th>좋아요</th>
                    <th>날짜</th>
                </tr>
<?php
    while($data = mysqli_fetch_array($result)) {
        $boardidx = $data['boardidx'];
        $boardtitle = $data['boardtitle'];
        $userid = $data['userid'];
        $boardhit = $data['boardhit'];
        $boardlike = $data['boardlike'];
        $boardregdate = $data['boardregdate'];
        
        $sql = "select count(*) as count from tb_reply where boardidx=$boardidx";
        $rep_result = mysqli_query($conn, $sql);
        $rep_data = mysqli_fetch_array($rep_result);
        $rep_cnt = $rep_data['count'];
?>
    <tr>
        <td><?=$boardidx?></td>
        <td><a href="./detail.php?page=<?=$page?>&boardidx=<?=$boardidx?>"><?=$boardtitle?></a> - [<?=$rep_cnt?>]</td>
        <td><?=$userid?></td>
        <td><?=$boardhit?></td>
        <td><?=$boardlike?></td>
        <td><?=$boardregdate?></td>
    </tr>
<?php
    }
?>
    <tr>
        <td colspan="6" align="center">
<?php
    $endPage = ceil($total/$pageCount);
        for ($i=1; $i<=$endPage; $i++) {
            if($page == $i) {
                echo "[".$i."]";
            } else {
                echo "<a href='./board.php?page=$i'>"."[".$i."]"."</a>";
            }
        }
?>
        </td>
    </tr>
            </table>
            <p class="write_btn"><a href="./write.php">글쓰기</a></p>
            <p class="logout_btn"><?=$username?>님<a href="./logout_ok.php">로그아웃</a></p>
        </div>
    </div>
</body>
</html>