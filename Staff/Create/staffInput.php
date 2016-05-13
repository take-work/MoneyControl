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
		          <input name="experience" type="radio" id="experience1" value="1" /><label for="experience1">経験有</label><br>
              <input name="experience" type="radio" id="experience2" value="2" /><label for="experience2">経験無</label>
		        </td>

       	    <td align="center">
		          <input name="rank" type="radio" id="rank1" value="1" /><label for="rank1">主催</label><br>
              <input name="rank" type="radio" id="rank2" value="2" /><label for="rank2">副主催</label><br>
              <input name="rank" type="radio" id="rank3" value="3" /><label for="rank3">なし</label>
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
