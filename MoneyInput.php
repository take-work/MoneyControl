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
		  <label for="Day">日付</label>
		</dt>
		<dd>
		  <input name="Day" type="text" id="Day" size="2" maxlength="255" />月 &nbsp;
		  <input name="Day" type="text" id="Day" size="2" maxlength="255" />日
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
    <a href="Confirm.php">現在の状況</a>
  </body>
</html>
