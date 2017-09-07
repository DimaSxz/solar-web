<?php
$bday=explode(".",$player['bday']);
echo"<center><table class='infoblock2' cellspacing=0 cellpadding=0 border=0><tr><td class='left_top'></div></td><td class='center_top'></td><td class='right_top'></td></tr><tr><td class='left_middle'></td><td class='center_middle' style='width: 800px;'>";
echo'<fieldset>
  <legend><b>Информация Персонажа</b></legend>
  <img src="//image.oldnever.ru/signs/totems/'.$player['thotem'].'.gif" width="120" height="120" align="right" border="0" hspace="10" />
  <form action="main.php?mselect=5" method="post">
    <table cellpadding="5" cellspacing="0" border="0" width="100%">
      <tr>
        <td><table cellpadding="0" cellspacing="0" border="0" width="100%">
          <tr>
            <td><font class="freemain"><b><font color="#336699">Ваше имя:</font></b></font></td>
            <td><input type="text" name="newname" size="30" class="LogintextBox4" maxlength="50" value="'.$player['name'].'" />
              <font class="freetxt"><font color="#cc0000"> * </font></font></td>
          </tr>
          <tr>
            <td><font class="freemain"><b><font color="#336699">Дата рождения: </font></b></font></td>
            <td>
              <select name="select" disabled="disabled" class="LogintextBox6">
                <option>'.$bday[0].'</option>
              </select>
              <select name="select" disabled="disabled" class="LogintextBox6">
                <option>'.$bday[1].'</option>
              </select>
              <select name="select" disabled="disabled" class="LogintextBox6">
                <option>'.$bday[2].'</option>
              </select></td>
          </tr>
          <tr>
            <td colspan="2"><font class="freetxt">Большая просьба указывать реальные имя и дату рождения.<br />
              Эти данные Вам могут пригодится для восстановления героя.<br />
              <br />
            </font></td>
          </tr>
          <tr>
            <td><font class="freemain"><b><font color="#336699">Страна: </font></b></font></td>
            <td><input type="text" name="newcountry" size="30" class="LogintextBox4" maxlength="50" value="'.$player['country'].'" />
              <font class="freetxt"><font color="#cc0000"> * </font></font></td>
          </tr>
          <tr>
            <td><font class="freemain"><b><font color="#336699">Город: </font></b></font></td>
            <td><input type="text" name="newcity" size="30" class="LogintextBox4" maxlength="50" value="'.$player['city'].'" />
              <font class="freetxt"><font color="#cc0000"> * </font></font></td>
          </tr>
          <tr>
            <td colspan="2"><font class="freetxt">Также требуется указывать реальные данные. Они могут Вам пригодится для восстановления героя, для адаптации игры к Вашему региону, и не вызвать подозрений у представителей власти о Вашем местоположении.<br />
              <br />
            </font></td>
          </tr>
          <tr>
            <td><font class="freemain"><b><font color="#336699">Номер ICQ: </font></b></font></td>
            <td><input type="text" name="newicq" size="30" class="LogintextBox4" maxlength="50" value="'.$player['icq'].'" /></td>
          </tr>
          <tr>
            <td><font class="freemain"><b><font color="#336699">URL: </font></b></font></td>
            <td><input type="text" name="url" size="30" class="LogintextBox4" maxlength="40" value="'.$player['url'].'" /></td>
          </tr>
          <tr>
            <td colspan="2"><font class="freetxt">Этот пункт не обязателен для заполнения. Это закрытая информация для других участников игры и служит только для оперативной связи администрации GameLE.Ru с Вами.<br />
              <br />
            </font></td>
          </tr>
          <tr>
            <td><font class="freemain"><b><font color="#336699">Дополнительно: </font></b></font></td>
            <td><textarea class="LogintextBox6" cols="61" rows="10" name="newaddon">'.$player['addon'].'</textarea></td>
          </tr>
          <tr>
            <td colspan="2"><font class="freetxt">Дополнительная информация о Вас (закрытая информация). Администрация рекомендует заносить сюда информацию, которая может оправдать Вас перед представителями власти (игра с одного клуба, сестра, брат, локальная сеть и так далее). Максимальная длина сообщения - 800 символов.<br />
              <br />
            </font></td>
          </tr>
          <tr>
            <td><font class="freemain"><b><font color="#336699">О себе: </font></b></font></td>
            <td><textarea class="LogintextBox6" cols="61" rows="10" name="newabout">'.deCodes($player["about"]).'</textarea></td>
          </tr>
          <tr>
            <td colspan="2"><font class="freetxt">Информация, доступная для других участников игры. Максимальная длина сообщения - 800 символов.<br />
              <br />
            </font></td>
          </tr>
          <tr>
            <td colspan="2"><input type="submit" class="lbut" value="Сохранить" border="0" />
              <input type="hidden" name="post_id" value="49" />
              <input type="hidden" name="act" value="5" />
              <input type="hidden" name="de" value="800" />
              <input type="hidden" name="vcode" value="'.scode().'" /></td>
          </tr>
        </table></td>
      </tr>
    </table>
  </form>
</fieldset>
';
echo"</div></td><td class='right_middle'></td></tr><tr><td class='left_bot'></td><td class='center_bot'></td><td class='right_bot'></td></tr></table>";
?>