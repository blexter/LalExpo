    <? include('includes/header.php')?>
<link rel="stylesheet" href="css/general.old.css" />
<style>
  .bkg{
    position: relative;
    vertical-align: top;
    padding-top: 14em;
    text-align: center;
  }
  .bkg .txt01{
    color: #b12128;
    font-family: AspiraBold,verdana;
    font-size: 5.3em;
    display: inline-block;
    max-width: 950px;
    width: 80%;
    margin: auto;
  }
  .bkg .txt01 img{
    width: 100%;
  }
  .bkg .txt01 span{
    display: block;
    padding-top:35px
  }
  .cell{
    display: table-cell;
    width: 49%;
    vertical-align:top
  }
  .section01{
    display: table;
    background-image: url(img/fdo_sec_home01.jpg);
    background-size: cover;
    background-position:top center;
    height: 932px;
    width: 100%;
    margin-top: -110px;
  }
  .der01{
    font-family: AspiraBlack, Verdana;
    font-size:3.2em;
    color:#FFF;
    margin-top: 280px;
    padding: 0 4%;
  }
  .der02{
    font-family: AspiraMediumIt, Verdana;
    font-size:6em;
    color:#FFF;
    margin-top:45px;
    text-align:center
  }
  .der03{
    font-family: Aspira, Verdana;
    font-size:3em;
    color:#FFF;
    padding: 0 4%;
    margin-top:55px
  }
  .izq01{
    font-family: Aspira, Verdana;
    font-size: 2.7em;
    color: #FFF;
    padding: 0 0 35px 30px;
    padding-bottom: 35px;
    background-image: url(img/elip.png);
    background-repeat: no-repeat;
    background-position: 0px 4px;
  }
  .section01 .prim{
    margin-top: 280px;
  }
  .section01 .cent{
    text-align: center;
  }
  .pre{
    display: inline-block;
    margin: auto;
    text-align: left;
    width: 75%;
    padding-left: 25%;
  }
  .section01 a, .botLink{
    display: inline-block;
    background: url(img/fdo_bot.png) right center repeat-y #b22127;
    color: #FFF;
    font-family: AwesomeBrands, Verdana;
    font-size: 2.7em;
    padding: 20px 44px;
    text-align: center;
    text-decoration: none;
    border-radius: 30px;
  }
  .section02{
    min-height: 578px;
    background: #FFF;
  }
  .section02 header,.section04 header{
    text-align: center;
  }
  .section02 h1{
    display: inline-block;
    color:#2d2d2d;
    font-size: 5.3em;
    font-family: AspiraBold,Verdana;
    background: url(img/rayatit.jpg) bottom center no-repeat;
    padding-bottom: 20px;
  }
  .section02 .gale,.section04 .gale{
    margin-top: 105px;
    text-align: center;
    position: relative;
    padding: 0 200px;
    overflow: hidden;
    height: 190px;
  }
  .section02 .fleg01,.section04 .fleg01{
    position: absolute;
    left:20px;
    bottom: 70px;
  }
  .section02 .fleg02,.section04 .fleg02{
    position: absolute;
    right:20px;
    bottom: 70px;
  }
  .section02 a,.section04 a{
    margin: 0 40px;
  }
  .section03{
    background-image: url(img/fdo_sec_home03.jpg);
    background-position: center top;
    background-size: cover;
    min-height: 520px;
    display: table;
    width: 100%;
  }
  .section03 .sp{
    width: 40%;
    display: table-cell;
    text-align: center;
    color:#FFF;
    vertical-align: top;
  }
  .section03 h1{
    font-size: 4em;
    font-family: AspiraBlack,Verdana;
    background-image: url(img/fdo_otro.jpg);
    background-position: bottom center;
    background-repeat: no-repeat;
    margin:0;
    padding:45px 0 25px 0
  }
  .section03 p{
    font-size: 2.5em;
    font-family: AspiraMediumIt,Verdana;
    margin-top: 15px;
    text-align: left;
    padding-left: 17%;
  }
  .section03 a{
    text-decoration:none;
    color:#9d223d;
    font-size:2.3em;
    font-family: AspiraBold,Verdana;
    background:#fefefe;
    padding:20px 75px;
    cursor:pointer;
    border-radius: 30px;
    display: inline-block;
    margin: auto;
    margin-top: 30px;
  }
  .section03 .spons{
    background-image: url(img/ciculo.png);
    width: 310px;
    height: 310px;
    background-repeat: no-repeat;
    background-size: cover;
    display: inline-block;
    margin-top: 50px;
  }
  .section03 .spons div{
    font-family: AspiraHeavyIt,Verdana;
    text-align: center;
  }
  .section03 .spons .dv1{
    font-size:12.3em;
    margin-top: 100px;
    line-height: 100px;
  }
  .section03 .spons .dv2{
    font-size:3em;
  }
  .section03 .txtUlt{
    font-family: AspiraHeavyIt,Verdana;
    text-align: center;
    font-size:4em;
    margin-top: 35px;
  }
  .section04{
    min-height: 575px;
    background: #b12128;
  }
  .section04 h1{
    display: inline-block;
    color:#FFF;
    font-size: 5.3em;
    font-family: AspiraBold,Verdana;
    background: url(img/rayatit2.jpg) bottom center no-repeat;
    padding-bottom: 20px;
  }
  .section05{
    background-image: url(img/fdo_sec_home05.jpg);
    background-position: center top;
    background-size: cover;
    height: 149px;
    display: table;
    width: 100%;
  }
  .section05 div{
    display: table-cell;
    width: 33%;
    vertical-align: middle;
    text-align: center;
  }
  .inpBusc01{
    max-width:400px;
    height: 60px;
    width: 100%;
    background: #FFF;
    border-radius: 30px;
    padding:0 40px;
    font-size: 2.2em;
    font-family: Aspira,Verdana;
    color:#383838
  }
  .inpBusc01:focus{
    outline: none;
  }
  .section05 span{
    color:#FFF;
    font-size: 4.3em;
    font-family: Aspira,Verdana;
  }
  .section05 .submit{
    font-family: AspiraBold,Verdana;
    cursor:pointer
  }
  .section10{
    background-image: url(img/fdo_contact.jpg);
    background-position: center top;
    background-size: cover;
    height: 1004px;
  }
  .section10 h1{
    display: inline-block;
    color:#FFF;
    font-size: 5.3em;
    font-family: AspiraBold,Verdana;
    background: url(img/rayatit.jpg) bottom center no-repeat;
    padding-bottom: 20px;
  }
  .section10 header{
    text-align: center;
    padding-top: 95px;
  }
  .section10 .cell span{
    color:#707070;
    font-size:2.3em;
    font-family: AspiraMedium,Verdana;
    display: block;
    margin: 48px 0 25px 85px;
  }
  .section10 .cell input[type=text],.section10 .cell textarea{
    margin-left: 85px;
    background: none;
    border:0px solid;
    border-bottom: 2px solid #393a44;
    font-size:1.8em;
    max-width: 421px;
    width: 100%;
    font-family: AspiraMedium,Verdana;
    color:#FFF;
  }
  .section10 .cell textarea{
    height: 136px;
    border-bottom: 2px solid #b12128;
    background: #0b0b13;
  }

  .section10 .cell input[type=text]{
    outline: none;
  }
  .section10 .cell .tits{
    display: inline-block;
    font-family: Aspira,Verdana;
    color: #FFF;
    vertical-align: top;
    text-align: left;
  }
  .section10 .pre2{
    display: table;
    width: 100%;
  }
  .section10 .derr{
    margin-top: 55px;
  }
  .section10 .derr div{
    display: block;
    padding-top: 0px;
    padding-bottom: 20px;
  }
  .section10 .derr div span{
    font-family: AwesomeSolid,Verdana;
    font-size: 3.2em;
    color: #FFF;
    padding-right: 1em;
    display: inline;
    margin: auto;

  }
  .section10 ._subtit{
    font-size: 3.7em;
    font-family: AspiraBold,Verdana;
    margin-top: 50px;
  }
  .section10 .derr div p{
    display: inline-block;
    font-size: 2.5em;
  }
  .section10 .log{
    text-align:center;
    margin-top:70px
  }
  .section10 .log img{
    max-width: 413px;
    width: 100%;
  }
  .section12 h1{
    color:#ad1f26;
  }
  .section12 .gale01{
    min-height: 300px;
    background: url('img/fdo_ult.png') right repeat-y #b42126;
    text-align: center;
    white-space: nowrap;
    overflow: hidden;
  }
  .section12 .gale01 img{
    display: inline-block;
    margin: 3%;
  }
  .section13 header{
    background: #ad1f26;
    text-align: center;
    padding: 30px 0;
  }
  .section13 header h1{
    margin: 0;
    color:#FFF;
    font-size: 5.3em;
    font-family: AspiraBold,Verdana;
  }
  .section13 .cont01{
    padding-top: 88px;
    text-align: center;
    margin: auto;
    width: 80%;
    background: #FFF;
    position: relative;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
  }
  .section13 .dv01{
    color:#ad1f26;
    font-size: 5.3em;
    font-family: AspiraBold,Verdana;
    text-align: center;
    margin-top: 85px;
  }
  .section13 .dv02{
    color:#595959;
    font-size:3.7em;
    font-family: AspiraBold,Verdana;
    text-align: center;
  }
  .section13 .dv03 img{
    display: inline-block;
    margin: 2%;
  }
  </style>
    <div class="content">
      <div class="bkg">
        <div class="txt01">Presenting Sponsor<span><img src="img/livejasmin.png" alt="liveJASMIN" /></span></div>
      </div>
      <section class="section01">
        <div class="cell">

          <div class="der01">
            Attend the First, Biggest and most important Adult Industry Event of
          </div>
          <div class="der02">
            Latin-America
          </div>
          <div class="der03">
            The Definitive B2B Adult show of Central and South America. Come on over to the ONLY show in South America. Meet a total New market and be part of the ONLY Adult trade Show in the world that brings together in one place Adult Entertainment Professionals with over 600 Models and Webcam
          </div>
        </div>
        <div class="cell cent">
          <div class="pre">
            <div class="izq01 prim">1,300 Industry Profesionals</div>
            <div class="izq01">An unexploited new Market</div>
            <div class="izq01">Companies ready for business</div>
            <div class="izq01">Hundreds of Deals closed</div>
            <div class="izq01">An opportunity to expand</div>
            <div class="izq01">Big workshops and seminars</div>
            <div class="izq01">Best networking and Parties</div>
          </div>
          <a href="#">Register now</a>
        </div>
      </section>
      <section class="section02">
        <header>
          <h1><img src="img/star_red.jpg" /> Crown Sponsors <img src="img/star_red.jpg" /></h1>
        </header>
        <div class="gale">
          <img src="img/fleg01.jpg" class="fleg01" />
          <a href="#"><img src="img/promociona.old.jpg" /></a>
          <a href="#"><img src="img/promociona.old.jpg" /></a>
          <a href="#"><img src="img/promociona.old.jpg" /></a>
          <img src="img/fleg02.jpg" class="fleg02" />
        </div>
      </section>
      <section class="section03">
        <div class="sp">
          <header><h1>Sponsorship opportunity</h1></header>
          <p><img src="img/fleblanc.png" /> Promote y our brand</p>
          <p><img src="img/fleblanc.png" /> Show of your company</p>
          <p><img src="img/fleblanc.png" /> Make new contacts</p>
          <p><img src="img/fleblanc.png" /> Meet your latam partners</p>
          <p><img src="img/fleblanc.png" /> Strengthen relationships</p>
          <p><img src="img/fleblanc.png" /> Create a new market</p>
          <a href="#">Be our sponsor</a>
        </div>
        <div class="sp" style="width: auto;padding-left: 20%;">
          <div class="spons">
            <div class="dv1">75</div>
            <div class="dv2">Sponsors</div>
          </div>
          <div class="txtUlt">Ready for business</div>
        </div>
      </section>
      <section class="section04">
        <header>
          <h1>Diamond Sponsors</h1>
        </header>
        <div class="gale">
          <img src="img/fleg03.jpg" class="fleg01" />
          <a href="#"><img src="img/promociona2.old.jpg" /></a>
          <a href="#"><img src="img/promociona2.old.jpg" /></a>
          <a href="#"><img src="img/promociona2.old.jpg" /></a>
          <img src="img/fleg04.jpg" class="fleg02" />
        </div>
      </section>
      <section class="section05">
        <div>
          <span>Sign up for newsletter</span>
        </div>
        <div>
          <input type="text" class="inpBusc01" placeholder="Enter a valid email address..." />
        </div>
        <div>
          <a class="botLink submit">Submit</a>
        </div>
      </section>
      <section class="section06 section02">
        <header>
          <h1>Platinum Sponsors</h1>
        </header>
        <div class="gale">
          <img src="img/fleg01.jpg" class="fleg01" />
          <a href="#"><img src="img/promociona.old.jpg" /></a>
          <a href="#"><img src="img/promociona.old.jpg" /></a>
          <a href="#"><img src="img/promociona.old.jpg" /></a>
          <img src="img/fleg02.jpg" class="fleg02" />
        </div>
      </section>
      <section class="section07">
        <img src="img/bannertemp.jpg" style="width: 100%;" />
      </section>
      <section class="section08 section04">
        <header>
          <h1>Gold Sponsors</h1>
        </header>
        <div class="gale">
          <img src="img/fleg03.jpg" class="fleg01" />
          <a href="#"><img src="img/promociona2.old.jpg" /></a>
          <a href="#"><img src="img/promociona2.old.jpg" /></a>
          <a href="#"><img src="img/promociona2.old.jpg" /></a>
          <img src="img/fleg04.jpg" class="fleg02" />
        </div>
      </section>
      <section class="section09 section02">
        <header>
          <h1>Bronze Sponsors</h1>
        </header>
        <div class="gale">
          <img src="img/fleg01.jpg" class="fleg01" />
          <a href="#"><img src="img/promociona.old.jpg" /></a>
          <a href="#"><img src="img/promociona.old.jpg" /></a>
          <a href="#"><img src="img/promociona.old.jpg" /></a>
          <img src="img/fleg02.jpg" class="fleg02" />
        </div>
      </section>
      <section class="section10">
        <header>
          <h1>Lets get in touch!</h1>
        </header>
        <div class="pre2">
          <div class="cell">
            <span>Name (Required)</span>
            <input type="text" />
            <span>Your email (Required)</span>
            <input type="text" />
            <span>Subject</span>
            <input type="text" />
            <span>Do you have a comment?</span>
            <textarea></textarea>
          </div>
          <div class="cell">
            <div class="tits right">
              <div class="_subtit">LALEXPO INTERNATIONAL<br />
              Cali - Colombia</div>
              <div class="derr">
                <div>
                  <span>Phone</span>
                  <p>Us:<br />
                  +1 347 568 0230</p>
                </div>
                <div>
                  <span>Phone</span>
                  <p>Colombia:<br />
                  +57 316 306 7417 / +57 2 380 97 03</p>
                </div>
                <div>
                  <span>Envelope</span>
                  <p>info@lalexpo.com</p>
                </div>
                <div>
                  <span class="brands">Skype</span>
                  <p>Lalexpo</p>
                </div>
              </div>
              <div class="log"><img src="img/logow.png" alt="LALEXPO" /></div>
            </div>
          </div>
        </div>
      </section>
      <section class="section11">
        <img src="img/bannertemp2.jpg" style="width: 100%;" />
      </section>
      <section class="section02 section12">
        <header>
          <h1>Brought you by organizers:</h1>
        </header>
        <div class="gale01">
          <img src="img/spon01.jpg" />
          <img src="img/spon02.png" />
          <img src="img/spon03.png" />
        </div>
      </section>
      <section class="section13">
        <header>
          <h1>Media Partner</h1>
        </header>
        <div class="cont01">
          <img src="img/xbiz.jpg" />
          <div class="dv01">Media Sponsors</div>
          <div class="dv02">great companies covering and promoting our event</div>
          <div class="dv03">
            <img src="img/promociona.old.jpg" />
            <img src="img/promociona.old.jpg" />
            <img src="img/promociona.old.jpg" />
            <img src="img/promociona.old.jpg" />
            <img src="img/promociona.old.jpg" />
            <img src="img/promociona.old.jpg" />
          </div>
        </div>
      </section>
    </div>
    <? include('includes/footer.php')?>