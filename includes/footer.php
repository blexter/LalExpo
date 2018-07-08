<nav>
  <a href="index.php" <?=setAct('index.php')?>>Home</a>
  <a href="#">Be our sponsor</a>
  <a href="who.php" <?=setAct('who.php')?>>Who is coming</a>
  <a href="schedule.php" <?=setAct('schedule.php')?>>Schedule</a>
  <a href="#">Gallery</a>
  <a href="#">Social</a>
  <a href="#">Awards</a>
  <a href="#">Info</a>
</nav>
<div class="section10">
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
            <textarea></textarea><br />
            <center style="display:inline-block;padding: 14px 0;width: 100%;"><a class="botLink submit">Submit</a></center>
          </div>
          <div class="cell">
            <div class="tits right">
              <div class="_subtit">LALEXPO INTERNATIONAL<br />
              Cali - Colombia</div>
              <div class="derr">
                <div style="animation-delay: .1s">
                  <span>Phone</span>
                  <p>Us:<br />
                  +1 347 568 0230</p>
                </div>
                <div style="animation-delay: .2s">
                  <span>Phone</span>
                  <p>Colombia:<br />
                  +57 316 306 7417 / +57 2 380 97 03</p>
                </div>
                <div style="animation-delay: .3s">
                  <span>Envelope</span>
                  <p>info@lalexpo.com</p>
                </div>
                <div style="animation-delay: .4s">
                  <span class="brands">Skype</span>
                  <p>Lalexpo</p>
                </div>
              </div>
              <div class="log"><img src="img/logow.png" alt="LALEXPO" style="animation-delay: 1s" /></div>
            </div>
          </div>
        </div>
      </div>
    <footer>
      <div class="celda01">
        <img src="img/logow.png" alt="LALEXPO" />
      </div>
      <div class="celda02">
      </div>
    </footer>
  </div>
  <div id="login" class="login"></div>
  <form class="preLogin" id="preLogin" onsubmit="return login()">
    <div class="login-content">
      <span class="close" onclick="closeForm()">&times;</span>
      <div class="log_encabezado">
        <img src="img/logow.png" alt="LALEXPO" />
      </div>
      <div class="contentBorder">
        <div class="log_tit">Log in</div>
        <div class="log_descrip">Be part of the biggest and most exciting adult<br />
    business Event in Latin America</div>
        <div id="log_leyenda" class="log_descrip"></div>
        <div class="log_textImp">Email</div>
        <input type="email" name="user" required="" />
        <div class="log_textImp">Password</div>
        <input type="password" name="pass" required="" />
        <div class="log_textImp">Forgot your password?</div>
        <div class="login_botones">
          <a class="botLink" onclick="$('#preLogin .hiddSub').click()">Log In</a>
          <input type="submit" class="hiddSub" />
          <br />
          <a class="botLink" onclick="closeForm()">Cancel</a>
        </div>
      </div>
    </div>
  </form>
  <form class="preLogin" id="preRegistrer" onsubmit="return registro()">
    <div class="login-content">
      <span class="close" onclick="closeForm()">&times;</span>
      <div class="log_encabezado">
        <img src="img/registerBy.jpg" />
      </div>
      <div class="contentBorder">
        <div class="log_tit">Register</div>
        <div class="log_descrip">Be part of the biggest and most exciting adult<br />
business Event in Latin America</div>
        <div class="tb">
          <div class="tbCell padd_">
            <div class="log_textImp">Name:</div>
            <input type="text" />
          </div>
          <div class="tbCell">
            <div class="log_textImp">Surname:</div>
            <input type="text" />
          </div>
        </div>
        <div class="log_textImp">Email:</div>
        <input type="text" />
        <div class="log_textImp">Confirm Email:</div>
        <input type="text" />
        <div class="log_textImp">Password:</div>
        <input type="password" />
        <div class="log_textImp">Confirm Password:</div>
        <input type="password" />
        <div class="log_textImp">ID or Passport:</div>
        <input type="text" />
        <div class="log_textImp">Gender:</div>
        <input type="text" />
        <div class="log_textImp">Country:</div>
        <input type="text" />
        <div class="log_textImp">State:</div>
        <input type="text" />
        <div class="log_textImp">Lenguage:</div>
        <input type="text" />
        <div class="log_textImp">Phone:</div>
        <input type="text" />
        <div class="log_textImp">Category:</div>
        <input type="text" />
        <div class="login_botones">
          <a class="botLink" onclick="$('#preRegistrer .hiddSub').click()">Registrer</a>
          <input type="submit" class="hiddSub" />
        </div>
      </div>
    </div>
  </form>
</body>
</html>