<html>
  <head>
    <meta charset="UTF-8">
    <title>サークル登録</title>
  </head>
  <body>
    <p>登録するサークル情報を記入してください。</p>
    <form id="formInput" name="formInput" method="post" action="Complete/CircleComplete.php">
      <dl>
        <dt>
		  <label for="circleName">サークル名</label>
		</dt>
		<dd>
		  <input name="ciecleName" type="text" id="ciecleName" maxlength="255" />
		</dd><br />

		<dt>
		  <label for="host">主催者</label>
		</dt>
		<dd>
		  <input name="host" type="text" id="host" maxlength="255" />
		</dd><br />

		<dt>
		  <label for="proceeds">売上金(目標)</label>
		</dt>
		<dd>
		  <input name="proceeds" type="text" id="proceeds" maxlength="10" />円
		</dd>
      </dl><br />

	  <input type="submit" value="登録する" /><br>
	</form>

    <a href="EventList.php">登録されているイベント</a><br>
    <a href="../Money/TotalMoney.php">現在の金額状況</a>
  </body>
</html>
