<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <p>登録する情報を記入してください。</p>
    <form id="formInput" name="formInput" method="post" action="TotalMoney.php">
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
		<dd>
		  <input name="EventName" type="text" id="EventName" size="20" maxlength="255" />
		</dd><br />

		<dt>
		  <label for="Date">日付</label>
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
    <a href="Confirm.php">現在の金額状況</a><br>
    <a href="EventInput.php">イベントの新規登録</a><br>
    <a href="EventList.php">登録されているイベント</a>
  </body>
</html>
