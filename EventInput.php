<html>
  <head>
    <meta charset="UTF-8">
    <title>イベント登録</title>
  </head>
  <body>
    <p>登録するイベント情報を記入してください。</p>
    <form id="formInput" name="formInput" method="post" action="Complete/EventComplete.php">
	  <dl>
		<dt>
		  <label for="eventName">イベント名</label>
		</dt>
		<dd>
		  <input name="eventName" type="text" id="eventName" size="20" maxlength="255" />
		</dd><br />

		<dt>
		  <label for="host">主催者</label>
		</dt>
		<dd>
		  <input name="host" type="text" id="host" size="20" maxlength="255" />
		</dd><br />

		<dt>
		  <label for="date">開始日</label>
		</dt>
		<dd>
		  西暦<input name="startYear" type="text" id="startYear" size="8" maxlength="10" />年 &nbsp;
		  <input name="startMonth" type="text" id="startMonth" size="4" maxlength="4" />月 &nbsp;
		  <input name="startDay" type="text" id="startDay" size="4" maxlength="4" />日
		</dd><br />

		<dt>
		  <label for="Date">終了日</label>
		</dt>
		<dd>
		  西暦<input name="endYear" type="text" id="endYear" size="8" maxlength="10" />年 &nbsp;
		  <input name="endMonth" type="text" id="endMonth" size="4" maxlength="4" />月 &nbsp;
		  <input name="endDay" type="text" id="endDay" size="4" maxlength="4" />日
		</dd><br />

		<dt>
		  <label for="price">準備費用</label>
		</dt>
		<dd>
		  <input name="price" type="text" id="price" size="10" maxlength="10" />円
		</dd><br />

		<dt>
		  <label for="staff">スタッフ数</label>
		</dt>
		<dd>
		  <input name="staff" type="text" id="staff" size="5" maxlength="10" />人
		</dd><br />

		<dt>
		  <label for="circle">参加サークル数</label>
		</dt>
		<dd>
		  <input name="circle" type="text" id="circle" size="5" maxlength="10" />
		</dd>
      </dl><br />

	  <input type="submit" value="登録する" /><br>
	</form>

    <a href="MoneyInput.php">金額情報の入力</a><br>
    <a href="Lists/TotalMoney.php">現在の金額状況</a><br>
    <a href="Lists/EventList.php">登録されているイベント</a>
  </body>
</html>
