# php-board

## PHP로 간단한 로그인 및 게시판 폼 만들기

index.php          - 로그인 폼<br>
login_ok.php       - 로그인 성공 시 데이터 처리하는 페이지<br>
logout_ok.php      - 게시판 페이지에서 로그아웃 시 데이터 처리하는 페이지<br>
board.php          - 로그인 성공 시 진입하는 게시판 페이지<br>
lib/css/style.css  - 공통 스타일시트<br>
lib/js/regist.js   - 스크립트<br>
lib/include        - DB(MySQL) 연결 페이지<br>

localhost - PHP & Apache(httpd)<br>
DB - MySQL<br>

## 알고리즘
1. login.php - 로그인 성공 - login_ok.php - board.php - 로그아웃 - logout_ok.php - login.php
2. board.php - 게시판 데이터 카운트 조회 - 게시판 데이터 조회 및 출력 - 게시판 페이지네이션

## Preview
1. Login
<img width="1439" alt="login" src="https://user-images.githubusercontent.com/46413981/153537126-58e08609-2c9c-4266-92d1-904b4b9145f9.png">
2. Board
<img width="1440" alt="board" src="https://user-images.githubusercontent.com/46413981/153538221-496c3585-553b-49fc-b9ba-289c34ece1f2.png">
