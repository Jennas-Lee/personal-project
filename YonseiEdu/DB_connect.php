<?php
/*********************************************************
	필수 입력 항목
	$user_id : directsend 로그인 아이디
	$api_key : directsend에서 발급된 인증키
	$DB_SERVER : 디비 서버 아이피
	$USERNAME : 디비 아이디
	$PASSWORD : 디비 비밀번호
	$DB_NAME : 디비명
*********************************************************/

//directsend 에서 POST로 다음의 데이터를 전달함
if(!isset($_POST['key']) || $_POST['key'] == ''){
    echo "[Error] none validate key";
	exit;
}else{
	$key = $_POST['key'];
}

if(!isset($_POST['mode']) || $_POST['mode'] == ''){
    echo "[Error] none validate mode";
	exit;
}else{
	//mode = list or count
	$mode = $_POST['mode'];
}

/*** 아래 내용을 입력하여 주시기바랍니다. ***/

$user_id	= "ysm9007";
$api_key	= "QF48VeSeCdO8X1L";

$DB_SERVER = '15.164.172.2';
$USERNAME = `DB_connect`;
$PASSWORD = `37LmrYOZzCH7`;
$DB_NAME = `YONSEIEDU_DB`;

/***********************************/

$auth_key = hash("sha256", $user_id.$api_key);

if ($auth_key == $key) {
    if ($mode == "list") {
		showMemberList();
    } else if ($mode == "count") {
		showMemberCount();
    } else {
		echo "[Error] No Parameter!";
		exit;
    }
} else {
    echo "[Error] Match thd key_code!";
		exit;
}

function dbconn() {
	global $DB_SERVER, $USERNAME, $PASSWORD, $DB_NAME;

	if (!($dbconn = @mysql_connect($DB_SERVER, $USERNAME, $PASSWORD))) {
		echo("Database connect Failed.");
		exit;
	}

	mysql_select_db($DB_NAME, $dbconn);
	return $dbconn;
}

function showMemberList() {
    /****************************************************************
      - DB에 맞게 쿼리를 수정하시고, DB에 연결하여 리스트를 가져옵니다.
      - email정보를 가지고 있는 필드가 가장 먼저 표현되어야 합니다.
      - 필드와 필드 사이는 ','로 구분하며, 라인은 '<br>'로 구분합니다.
	  - note1 필드는 비고 항목으로 선택사항입니다. 하지만 규격상 필드명은 필요하니 빈값으로 넣어주세요.
	  - note2 필드는 비고 항목으로 선택사항입니다. 하지만 규격상 필드명은 필요하니 빈값으로 넣어주세요.
	  - note3 필드는 비고 항목으로 선택사항입니다. 하지만 규격상 필드명은 필요하니 빈값으로 넣어주세요.
	  - note4 필드는 비고 항목으로 선택사항입니다. 하지만 규격상 필드명은 필요하니 빈값으로 넣어주세요.
	  - note5 필드는 비고 항목으로 선택사항입니다. 하지만 규격상 필드명은 필요하니 빈값으로 넣어주세요.
     ***************************************************************/
	$conn = dbconn();

	if(!mysql_set_charset("utf8", $conn)){
			mysql_set_charset("utf8", $conn);
	}else if(!mysql_set_charset("euckr", $conn)){
			mysql_set_charset("euckr", $conn);
	}

	$query = "SELECT DISTINCT `parnum` AS `mobile`, `name` FROM `STUDENT_TB` WHERE `parnum` IS NOT NULL";
	$result = mysql_query($query, $conn);

	echo "email,name,mobile,note1\r\n";

	while ($row = mysql_fetch_array($result)) {
		echo ",".$row["name"].",".$row["mobile"].",,,,,\r\n";
	}

	if ($conn) {
		mysql_close($conn);
	}
}

function showMemberCount() {
    $conn = dbconn();

	/********************************************************************
    - DB에 연결하여 리스트 수를 가져옵니다.
    - 이때는 고객사의 비즈니스 로직에 맞게 데이터를 단일 테이블에 정리 후 본 페이지를 통해서는 해당 단일 테이블에서 값을 가져올 수 있어야 합니다.
    - directsend 측의 응답 대기 시간은 15초 입니다.
  ********************************************************************/
	$query = "SELECT count(DISTINCT `parnum`) FROM `STUDENT_TB`";
		$result = mysql_query($query, $conn);
		echo(mysql_result($result, 0, 0));

		if ($conn) {
			mysql_close($conn);
		}

}

?>
