<html>
  <head>
    <meta charset="UTF-8">
    <title>スタッフ登録</title>
  </head>
  <body>
    <p>追加するスタッフの情報を記入してください。</p>

    <table width="1200" border="1" cellspacing="1" cellpadding="8">
      <tbody>
        <tr>
          <th>氏名(HN)</th>
          <th>担当 / 持ち場</th>
          <th>メールアドレス</th>
          <th>電話番号</th>
          <th>Twitter</th>
          <th>経験</th>
          <th>役職</th>
          <th>データの登録</th>
        </tr>

        <form id="formInput" name="formInput" method="post" action="staffComplete.php">
          <tr>
       	    <td align="center">
		          <input name="staffName" type="text" id="staffName" maxlength="255" />
		        </td>

   	   	    <td align="center">
    		      <input name="position" type="text" id="position" maxlength="255" />
		        </td>

	   	      <td align="center">
		          <input name="mail" type="text" id="mail" maxlength="255" />
		        </td>

    		    <td align="center">
		          <input name="tel" type="text" id="tel" maxlength="255" />
		        </td>

    		    <td align="center">
		          <input name="twitter" type="text" id="twitter" maxlength="255" />
		        </td>

    	   	  <td align="center">
		          <input name="experience" type="radio" id="experience" value="1" />経験有<br>
              <input name="experience" type="radio" id="experience" value="2" />経験無
		        </td>

       	    <td align="center">
		          <input name="rank" type="radio" id="rank" value="1" />主催<br>
              <input name="rank" type="radio" id="rank" value="2" />副主催<br>
              <input name="rank" type="radio" id="rank" value="3" />その他
		        </td>

            <td align="center">
              <input type="hidden" name="id" value="<?=htmlspecialchars($_GET['id'])?>"></input>
              <input type="submit" value="登録する" />
            </td>
  	      </tr>
	      </form>

	    </tbody>
	  </table>

    <br>
    <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">スタッフ一覧に戻る</a><br>
    <a href="../../Event/EventList.php">イベント一覧に戻る</a>
  </body>
</html>
