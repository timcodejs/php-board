<?php
    session_start();
    include './lib/include/sql_conn.php';

    $userid = $_POST['userid'];
    $userpw = $_POST['userpw'];

    $sql = "select useridx, userid, username, userphone, useremail, userhobby from tb_user where userid='$userid' and userpw=md5('$userpw')";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    $flag = isset($data['userid']) ? $userid : '';

    if($flag != '') {
        $_SESSION['userid'] = $userid;
        $_SESSION['useridx'] = $data['useridx'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['useremail'] = $data['useremail'];
        $_SESSION['userphone'] = $data['userphone'];
        $_SESSION['userhobby'] = $data['userhobby'];
        echo "<script> alert('{$data['username']}님 환영합니다!'); location.href='./board.php'; </script>";
    } else {
        echo "<script>alert('로그인에 실패하셨습니다. 아이디와 비밀번호를 확인해주세요.'); history.back();</script>";
    }
?>