    <? include('includes/header.php')?>
<style>
  .bkg{
    background: url(img/fdo_red01.jpg) right;
    background-repeat: no-repeat;
    background-size: 50% 100%;
    background-color: #2d2d2d;
    min-height: 1100px;
    display: table;
  }
  .bkg .txt01{
    width: 49%;
    position: relative;
    display:table-cell;
    vertical-align: top;
    padding-top: 20em;
  }
  .bkg h1{
    font-family:AspiraBlack,Verdana;
    font-size:30em;
    color:#a01b26;
    margin:0px;
    padding:0px;
    display:inline-block;
    line-height: 80%;
    text-align: left;
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
    text-align: left;
    padding-left: 6em;
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
  .he01{
    width: 22%;
    max-width: 278px;
    text-align: center;
  }
  .he01 img{
    max-width: 167px;
    width: 90%;
  }
  .he02{
    width: 72%;
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
    display: table;
    width: 100%;
    font-family: AspiraBold,Verdana;
    font-size:3.9em;
    color:#2d2d2d;
    height: 140px;
  }
  .descrip{
    font-family: AspiraLight,Verdana;
    font-size: 2em;
    color:#606060;
    padding-left: 70px;
    padding-bottom: 35px;
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
  </style>
    <div class="content">
      <div class="bkg">
        <div class="txt01 padd">
          <h1>WHO<br /><span>IS</span><br />COM<br />MING<br /></h1>
        </div>
        <div class="txt01">
          <span class="txt03">
            Below is an overview of who is
             coming to LALEXPO. You can
             already start networking with
             them as soon as you register!
            Start setting up your business
            meetings right now!
          </span>
        </div>
      </div>
      <div class="section">
        <div class="fechas">
          <a href="#">Lalexpo 2017 Attendees List</a><span> / </span><a href="#">Lalexpo 2017 Attendees List</a>
        </div>
        <div class="dvBusc2">
          <span>Sort by:</span>
          <span class="red">Alphabetical</span>
          <!--<input type="text" class="buscWho" />-->
        </div>
        <div class="gral">
          <table cellpadding="0" cellspacing="0">
          <? for($i=1;$i<=15;$i++){?>
            <tr>
              <td style="width:10%;text-align:center">
                <img src="img/fle03.jpg" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/bandera.jpg" />
              </td>
              <td class="txt" style="width:34%">Pablo Perez</td>
              <td class="txt" style="width:27%">Company name</td>
              <td class="txt" style="width:22%; text-align:center">Organizer</td>
              <td><span class="awe">envelope</span></td>
            </tr>
            <? } ?>
          </table>
        </div>
      </div>
    </div>
    <? include('includes/footer.php')?>