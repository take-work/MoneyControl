<html>
  <head>
    <meta charset="UTF-8">
    <title>イベント登録</title>
  </head>
  <body>
    <p>登録するイベント情報を記入してください。</p>

    <table width="1200" border="1" cellspacing="1" cellpadding="8">
      <tbody>
        <tr>
          <th>イベント名</th>
          <th>主催者</th>
          <th>開始年月日</th>
          <th>終了年月日</th>
          <th>準備費用</th>
          <th>スタッフ数</th>
          <th>データの登録</th>
        </tr>

        <form id="formInput" name="formInput" method="post" action="EventComplete.php">
	      <tr>
		    <td align="center">
		      <input name="eventName" type="text" id="eventName" size="20" maxlength="255" />
		    </td>

 		    <td align="center">
		      <input name="host" type="text" id="host" size="20" maxlength="255" />
		    </td>

		    <td align="center">
		      西暦<input name="startYear" type="text" id="startYear" size="8" maxlength="10" />年 &nbsp;
		      <input name="startMonth" type="text" id="startMonth" size="4" maxlength="4" />月 &nbsp;
		      <input name="startDay" type="text" id="startDay" size="4" maxlength="4" />日
		    </td>

		    <td align="center">
		      西暦<input name="endYear" type="text" id="endYear" size="8" maxlength="10" />年 &nbsp;
		      <input name="endMonth" type="text" id="endMonth" size="4" maxlength="4" />月 &nbsp;
		      <input name="endDay" type="text" id="endDay" size="4" maxlength="4" />日
		    </td>

		    <td align="center">
		      <input name="price" type="text" id="price" size="10" maxlength="10" />円
		    </td>

		    <td align="center">
		      <input name="staff" type="text" id="staff" size="5" maxlength="10" />人
		    </td>

            <td align="center">
       	      <input type="submit" value="登録する" />
       	    </td>
       	  </tr>

	    </form>
	  </tbody>
	</table>

    <br>
    <a href="../EventList.php">イベント一覧に戻る</a>
  </body>
</html>
