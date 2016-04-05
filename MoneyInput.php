<?php
  header("Content-Type: text/html; charset=UTF-8");

  require_once(dirname(__FILE__).'/database.php');

  $MyDB = new MyDB;
  $db = $MyDB->dbConnect();

  mysqli_set_charset($db, 'UTF8');

  $recordSet = mysqli_query($db, 'SELECT * FROM Events');
?>

<html>
  <head>
    <meta charset="UTF-8">
    <title>金額登録</title>
  </head>
  <body>
    <p>登録する情報を記入してください。</p>
    <form id="formInput" name="formInput" method="post" action="Complete/MoneyComplete.php">
	  <dl>
		<dt>
		  <label for="UserName">氏名</label>
		</dt>
		<dd>
		  <input name="UserName" type="text" id="UserName" size="20" maxlength="255" />
		</dd><br />

		<dt>
		  <label for="EventName">イベント名</label>
		</dt>
		  <SELECT name="EventName">イベント名
		<?php
		  while ($data = mysqli_fetch_assoc($recordSet)) { ?>
		    <dd>
		      <OPTION value=<?php echo $data['event_name'] ?> name=<?php echo $data['event_name'] ?>><?php echo $data['event_name'] ?></OPTION>
		    </dd>
		<?php } ?>
		  </SELECT>
        <br /><br />

		<dt>
		  <label for="Date">入力日</label>
		</dt>
		<dd>
		  西暦<input name="Year" type="text" id="Year" size="8" maxlength="10" />年 &nbsp;
		  <input name="Month" type="text" id="Month" size="4" maxlength="4" />月 &nbsp;
		  <input name="Day" type="text" id="Day" size="4" maxlength="4" />日
		</dd><br />

		<dt>
		  <label for="Price">集計金額</label>
		</dt>
		<dd>
		  <input name="Price" type="text" id="Price" size="10" maxlength="10" />円
		</dd>
      </dl><br />
	  <input type="submit" value="登録する" /><br>
	</form>

    <a href="EventInput.php">イベントの新規登録</a><br>
    <a href="Lists/TotalMoney.php">現在の金額状況</a><br>
    <a href="Lists/EventList.php">登録されているイベント</a>
  </body>
</html>
