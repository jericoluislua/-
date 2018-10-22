                <hr>
                <footer id="footer">
<!--                  <p>Copyright MVC Framework from BBC
                  <br/>
                  <a href="mailto:jericoluislua@yahoo.com.ph" title="jericoluislua@yahoo.com.ph"><img src="/images/iconset-1/email-logo.svg" class="flogo"/></a>-->
                    <h3 id="hfooter">Contact</h3>
                    <h5>E-Mail: <a href="mailto:jerico.lua@bwdbern.ch" title="jerico.lua@bwdbern.ch">jerico.lua@bwdbern.ch</a></h5>
                    <a href="https://github.com/jericoluislua" title="Most of my school projects are in here."><img src="/images/iconset-1/github-logo.svg" class="flogo"/></a>
<!--                      <a href="https://www.instagram.com/jclt_nogitsune/" title="My personal instagram account" target="_blank"><img src="/images/iconset-1/ig-new.png" class="flogo"/></a>
                 <a href="https://www.facebook.com/jericoluislua/" title="My personal facebook account" target="_blank"><img src="/images/iconset-1/fb-logo.svg" class="flogo"/></a>
                  <a href="https://www.youtube.com/jericoluislua/" target="_blank"><img src="/images/iconset-1/yt-logo.svg" class="flogo"/></a>-->
                    <a href="https://www.youtube.com/jericoluislua/" title="Gaming/Unboxing videos"><img src="/images/iconset-1/yt-logo.svg" class="flogo"/></a>



                  </p>
                </footer>
            </div>
        </div>
        <script>
            var contindex = document.getElementById("index").style;
            var contbg = document.getElementById("bgindex");
            var contbgstyle = document.getElementById("bgindex").style;
            var btnwelcomestyle = document.getElementById("btnwelcome").style;
            var pos2 = 321;
            contindex.bottom = "383px";

            function openIndex() {
                btnwelcomestyle.disabled = true;
                var pos = 0;
                var blur = 0;
                var finalbtnwelcome;
                var mtop = contindex.height;
                var id = setInterval(frame, 1);
                function frame() {
                    if (pos == 321) {
                        clearInterval(id);
                        contindex.display = "block";
                        contindex.marginTop = "20px";
                        contindex.bottom = "0px";
                        btnwelcomestyle.display = "none";
                        btnwelcomestyle.disabled = true;

                    } else {
                        pos++;
                        mtop++;
                        blur++
                        pos2--;
                        contindex.bottom = pos2 + "px";
//                opacity--;
                        contindex.display = "block";
                        console.log(contindex.height);
                        btnwelcomestyle.top = pos + 'px';
                        contbgstyle.transition = "2s";
                        //contbgstyle.filter = "blur(2px)";
                        //contbgstyle.transform = "scale(1.01)";
                        btnwelcomestyle.disabled = true;
                    }
                    btnwelcomestyle.margin = "0"; //if removed, it will look like a bumping animation
                    finalbtnwelcome = contindex.bottom;
                    console.log(finalbtnwelcome);

                }
                if(btnwelcomestyle.top === '321px'){
                    btnwelcomestyle.display = "none";
                }

            }

            var h1hobbylength = document.getElementById("h1hobby").length;
            if((h1hobbylength = 19 || h1hobbylength > 19) && window.matchMedia("(max-device-width: 700px)").matches){
                document.getElementById("heading").style.marginBottom = "10px";
            }

        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>