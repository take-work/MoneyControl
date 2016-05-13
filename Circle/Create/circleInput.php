<html>
  <head>
    <meta charset="UTF-8">
    <title>サークル登録</title>
  </head>
  <body>
    <p>登録するサークル情報を記入してください。</p>

    <table width="800" border="1" cellspacing="1" cellpadding="8">
      <tbody>
        <tr>
          <th>サークル名</th>
          <th>代表者</th>
          <th>売上</th>
          <th>データの登録</th>
        </tr>

        <form id="formInput" name="formInput" method="post" action="circleComplete.php">
          <tr>
	   	    <td align="center">
		      <input name="circleName" type="text" id="circleName" maxlength="255" />
		    </td>

		    <td align="center">
		      <input name="host" type="text" id="host" maxlength="255" />
		    </td>

		    <td align="center">
		      <input name="proceeds" type="text" id="proceeds" maxlength="10" />円
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
    <a href="../circleList?actin=confirm&id=<?=htmlspecialchars($_GET['id'])?>">サークル一覧に戻る</a><br>
    <a href="../../Event/EventList.php">イベント一覧に戻る</a>
  </body>
</html>
