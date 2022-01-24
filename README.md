# php-regist

## PHP로 간단한 로그인 및 회원가입 폼 만들기

index.php          - 로그인 폼<br>
regist.php         - 회원가입 폼<br>
main.php           - 로그인 성공 시 진입하는 메인 폼<br>
changepw.php       - 비밀번호 변경 폼<br>
login_ok.php       - 로그인 성공 시 데이터 처리하는 페이지<br>
regist_ok.php      - 회원가입 성공 시 데이터 처리하는 페이지<br>
logout_ok.php      - 메인 페이지에서 로그아웃 시 데이터 처리하는 페이지<br>
changepw_ok.php    - 비밀번호 변경 시 데이터 처리하는 페이지<br>
lib/css/style.css  - 공통 스타일시트<br>
lib/js/regist.js   - 회원가입 폼 유효성 검사(validation check)<br>
lib/js/changepw.js - 비밀번호 변경 폼 유효성 검사(validation check)<br>
lib/include        - DB(MySQL) 연결 페이지<br>

localhost - Apache(httpd)<br>
DB - MySQL<br>

## 알고리즘
1. index.php - 로그인 성공 - login_ok.php - main.php - 로그아웃 - logout_ok.php - index.php
2. index.php - 로그인 성공 - login_ok.php - main.php - setTimeout 5분 - 로그아웃 - logout_ok.php - index.php
3. index.php - 로그인 실패 - index.php
4. index.php - 회원가입(sign up) - regist.php - 유효성 검사/회원가입 성공 - regist_ok.php - index.php
5. index.php - 비밀번호 변경(forget password) - changepw.php - 유효성 검사/비밀번호 변경 성공 - changepw_ok.php - index.php

