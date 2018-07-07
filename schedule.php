    <? include('includes/header.php')?>
<style>
  .bkg{
    background: url(img/fdo_central.jpg) right repeat-y #b42126;
    min-height: 1000px;
    display: table;
    width: 100%;
  }
  .bkg .txt01{
    width: 100%;
    position: relative;
    display:table-cell;
    vertical-align: middle;
  }
  .bkg h1{
    font-family:AspiraBlack,Verdana;
    font-size:18em;
    color:#2d2d2d;
    margin:0px;
    padding:0px;
    display:inline-block;
    line-height: 80%;
    text-align: center;
    letter-spacing: -0.1em;
    width: 100%;
  }
  .bkg h1 span{
    color:#FFF;
  }
  .bkg .txt03{
    font-family: AspiraLight,Verdana;
    font-size: 5em;
    color: #FFF;
    display: inline-block;
    padding: 0 9%;
  }
  .bkg .padd{
    text-align: center;
  }
  .section{
    background: #FFF;
    min-height: 500px;
  }
  section{
    display: block;
    max-width: 1233px;
    width: 85%;
    margin: auto;
    padding-top: 50px;
  }
  section header{
    background: url(img/fdo_enc_sec.jpg) left repeat-y;
    height: 108px;
    display: block;
    max-width: 1233px;
    width: 100%;
    border-radius: 25px;
    text-align: center;
    color:#FFF;
    font-family: AspiraBold,Verdana;
    font-size:5em;
    vertical-align: middle;
    padding-top: 30px;
  }
  section ul{
    list-style: none;
    display: block;
    margin: auto;
    border:0px solid #969696;
    padding:0;
    background: #FFF;
    width: 85%;
    margin-top: -30px;
    -webkit-box-shadow: 2px 9px 18px 4px rgba(150,150,150,0.47);
    -moz-box-shadow: 2px 9px 18px 4px rgba(150,150,150,0.47);
    box-shadow: 2px 9px 18px 4px rgba(150,150,150,0.47);
    border-bottom-left-radius: 40px;
    border-bottom-right-radius: 40px;
    position: relative;
  }
  section li{
    width: 100%;
    background: url('img/fdo_bottom_ofer.jpg') center bottom no-repeat;
  }
  .sinBg{
    background: none !important;
  }
  .cell{
    display: table-cell;
    vertical-align: middle;
  }
  .he02{
    width: 94%;
  }
  .he03{
    max-width: 134px;
    text-align: left;
  }
  .he03 img{
    max-width: 43px;
    width: 90%;
  }
  .tabl{
    display: table;
    width: 100%;
    color:#2d2d2d;
    height: 140px;
  }
  .descrip{
    font-family: Aspira,Verdana;
    font-size: 1.4em;
    color:#2d2d2d;
    line-height: 1.2em;
    position: relative;
  }
  .descrip div{
    position: absolute;
    top: 15px;
    right: 100px;
      -webkit-box-shadow: 2px 9px 18px 4px rgba(150,150,150,0.47);
    -moz-box-shadow: 2px 9px 18px 4px rgba(150,150,150,0.47);
    box-shadow: 2px 9px 18px 4px rgba(150,150,150,0.47);
    width: 280px;
    padding:30px
  }
  .descrip table{
    width: 100%;
  }
  .descrip td{
    height: 50px;
    vertical-align: middle;
    border-bottom: 1px solid #606060;
  }
  .descrip div a{
    width: 265px;
    padding: 10px 0;
    background: #a81d26;
    color:#FFF;
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    margin: auto;
    text-decoration: none;
    margin-top: 40px;
    border-radius: 25px;
  }

  /*************************************/
  .fechas{
    text-align: right;
    padding-right: 20px;
    padding-top: 40px;
  }
  .fechas a,.fechas span{
    font-size:2em;
    text-decoration:none;
    color:#8f1526;
    font-family:Aspira,Verdana;
  }
  .fechas a:hover{
    text-decoration: underline;
  }
  .gral{
    -webkit-box-shadow: 2px 9px 18px 4px rgba(150,150,150,0.47);
    -moz-box-shadow: 2px 9px 18px 4px rgba(150,150,150,0.47);
    box-shadow: 2px 9px 18px 4px rgba(150,150,150,0.47);
    width: 90%;
    margin: auto;
    position: relative;
    background: #FFF;
  }
  .gral td{
    height: 150px;
    border-bottom: 1px solid #dddddd;
  }
  .gral table{
    width: 100%;
  }
  .gral td.txt{
    color:#000;
    font-size: 2.7em;
    font-family:Aspira,Verdana;
  }
  .awe{
    color:#821126;
    font-size:2.5em;
    font-family: AwesomeSolid,Verdana;
  }
  .dvBusc2{
    text-align: left;
    padding-left: 20px;
    font-family:Aspira,Verdana;
    color:#000;
    font-size:2.2em;
    width: 90%;
    margin: auto;
    padding-bottom: 15px;
  }
  .dvBusc2 .buscWho{

  }
  .dvBusc2 .red{
    color:#821126;
    display: inline-block;
    padding-right: 20px;
    background: url(img/fle04.jpg) no-repeat right 5px;
    cursor:pointer
  }
  .txt01 div{
    display: inline-block;
  }
  .he04,.he05{
    font-family: AspiraBlack,Verdana;
    font-size: 2em;
    color:#a91d26;
    padding:0 4%
  }
  .he05{
    font-size: 1em;
    color:#2d2d2d;
    display:inline
  }
  </style>
    <div class="content">
      <div class="bkg">
        <div class="txt01 padd">
          <h1>SCHEDULE</h1>
          <div></div>
        </div>
      </div>
      <div class="section">
        <section>
        <header><img src="img/calen.png" style="vertical-align: text-bottom;padding-right: 15px;" />Sunday 18 FEB</header>
        <ul>
          <li>
            <div class="tabl">
              <span class="he04 cell">11:00 am - 07:00 - pm <span class="he05">Welcome at the airport</span></span>
            </div>
            <div class="tabl descrip">
              The main participants meet for a Special Dinner the evening before the Event. Invite Only. Shuttle Bus from the Hotel NH. Cra 125 #18-55. Pance, Al lado del Restaurante La Patada de la Mula
            </div>
          </li>
          <li>
            <div class="tabl">
              <span class="he01 cell"><img src="img/logo02.jpg" /></span>
              <span class="he02 cell"><span style="color:#99ccff">Diamond</span> sponsor</span>
              <span class="he03 cell"><img src="img/fle01.jpg" /></span>
            </div>
          </li>
          <li>
            <div class="tabl">
              <span class="he01 cell"><img src="img/logo02.jpg" /></span>
              <span class="he02 cell"><span style="color:#aae2e0">Platinum</span> sponsor</span>
              <span class="he03 cell"><img src="img/fle01.jpg" /></span>
            </div>
          </li>
          <li>
            <div class="tabl">
              <span class="he01 cell"><img src="img/logo02.jpg" /></span>
              <span class="he02 cell"><span style="color:#f58800">Gold</span> sponsor</span>
              <span class="he03 cell"><img src="img/fle01.jpg" /></span>
            </div>
          </li>
          <li class="sinBg">
            <div class="tabl">
              <span class="he01 cell"><img src="img/logo02.jpg" /></span>
              <span class="he02 cell"><span style="color:#d16528">Bronze</span> sponsor</span>
              <span class="he03 cell"><img src="img/fle01.jpg" /></span>
            </li>
          </div>
        </ul>
      </section>
      <?
      $arr['Sponsor food and drinks']=array('Pre show Dinner Networking','Water cooling','Coffe breaks','Happy hour Cocktails','Lunch','Dinner','Snack &amp; Candy');
      $arr['Aditional packs &amp; services']=array('Branded Hostesses','Gift bag insertion','Phone charging station','Bathrooms Branding','Tweet Wall',
      'Signage on show Schedules','Main stairs Branding','Video Wall','Cash machine sponsor','Pre contact all attendees Feature');
      $arr['Hospitality packs']=array('Airport transportation','Shuttle bus','Official WiFi Sponsor');
      $arr['Main advertising']=array('Registration &amp; Information Desk','Cockade ribbons','Show wristbands','Show badge','Show bag');
      $arr['Activities &amp; Events']=array('Activity (Chiva Party Bus)','Horseback riding Colombian Style tour','Soccer or Volleyball sexy tournament','Bowling Networking','Casino Networking');
      $arr['Parties']=array('Welcome party','Everyday party','Private N-Style VIP afterparty');
      $arr['Awards']=array('Presenting sponsor','Main sponsorship','Sponsorship');
      foreach($arr as $k=>$v){?>
        <section>
          <header><?=$k?></header>
          <ul>
          <?
          $cant=count($v);$c=1;
          foreach($v as $v2){
            $add=$c==$cant?' class="sinBg"':'';
            ?>
          <li <?=$add?>>
            <div class="tabl">
              <span class="he01 cell"><img src="img/logo02.jpg" /></span>
              <span class="he02 cell"><?=$v2?></span>
              <span class="he03 cell"><img src="img/fle01.jpg" /></span>
            </div>
          </li>
          <? $c++;} ?>
          </ul>
      </section>
      <? } ?>
      </div>
    </div>
    <? include('includes/footer.php')?>