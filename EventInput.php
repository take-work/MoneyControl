<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <p>登録するイベント情報を記入してください。</p>
    <form id="formInput" name="formInput" method="post" action="TotalMoney.php">
	  <dl>
		<dt>
		  <label for="Host">主催者</label>
		</dt>
		<dd>
		  <input name="Host" type="text" id="Host" size="20" maxlength="255" />
		</dd><br />

		<dt>
		  <label for="EventName">イベント名</label>
		</dt>
		<dd>
		  <input name="EventName" type="text" id="EventName" size="20" maxlength="255" />
		</dd><br />

		<dt>
		  <label for="Date">開催日</label>
		</dt>
		<dd>
		  西暦<input name="Year" type="text" id="Year" size="8" maxlength="10" />年 &nbsp;
		  <input name="Month" type="text" id="Month" size="2" maxlength="4" />月 &nbsp;
		  <input name="Day" type="text" id="Day" size="2" maxlength="4" />日
		</dd><br />

		<dt>
		  <label for="Price">準備費用</label>
		</dt>
		<dd>
		  <input name="Price" type="text" id="Price" size="10" maxlength="10" />円
		</dd><br />

		<dt>
		  <label for="Staff">スタッフ数</label>
		</dt>
		<dd>
		  <input name="Staff" type="text" id="Staff" size="10" maxlength="10" />人
		</dd><br />

		<dt>
		  <label for="Circle">参加サークル数</label>
		</dt>
		<dd>
		  <input name="Circle" type="text" id="Circle" size="10" maxlength="10" />
		</dd>
      </dl><br />

	  <input type="submit" value="登録する" /><br>
	</form>
    <a href="Confirm.php">現在の状況</a>
  </body>
</html>
