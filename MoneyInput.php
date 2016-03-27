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
		  <label for="IventName">イベント名</label>
		</dt>
		<dd>
		  <input name="IventName" type="text" id="IventName" size="20" maxlength="255" />
		</dd><br />

		<dt>
		  <label for="Day">日付</label>
		</dt>
		<dd>
		  <input name="Day" type="text" id="Day" size="2" maxlength="255" />月 &nbsp;
		  <input name="Day" type="text" id="Day" size="2" maxlength="255" />日
		</dd><br />

		<dt>
		  <label for="price">集計金額</label>
		</dt>
		<dd>
		  <input name="price" type="text" id="price" size="10" maxlength="10" />円
		</dd>
      </dl><br />
	  <input type="submit" value="登録する" />
	</form>
  </body>
</html>
