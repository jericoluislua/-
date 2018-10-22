</div>
<?php
/**
 * Created by PhpStorm.
 * User: laffan
 * Date: 8/27/2018
 * Time: 5:40 PM
 */

if(!isset($_SESSION['openfiles'])){

    ?>
    <p class="fileabt">Type in password to gain access to the secured files.</p>

    <form class="form-inline" action="/FILES/checkPassword" method="post">
        <div class="formgroup">
            <label class="control-label" for="password" id="inputpass">Password</label>
            <input id="password" name="password" type="password" placeholder="Password" class="form-control col-md-2" required>
            <input id="btnfile" name="send" type="submit" class="btn" value="Show secured files">
        </div>
    </form>
    <?php
}
else if(isset($_SESSION['openfiles'])){
    ?>
    <div id="rbewerbung" class="row rfilecontainer">
        <h2 class="col containername h2" id="hbewerbung">Bewerbung</h2>

        <div id="rlebenslauf" class="row rcontent">
            <h4 class="filename col-md-6">Lebenslauf</h4>
            <div class="filedetails filedetails-sho col-md-6" align="right">
                <a href="../docs/bewerbung/lebenslauf/lebenslauf_Jerico_Lua.pdf" target="_blank">download</a>
            </div>
        </div>

    </div>
    <div class="row rfilecontainer rfilecontainer-mid" id="rzeugnis">
        <h2 class="col containername h2" id="hzeugnis">Zeugnisse</h2>

        <div class="row rcontent" id="rbwd">
            <h4 class="filename col-md-6">BWD</h4>
            <div class="filedetails filedetails-sho col-md-6" align="right">
                <a href="https://drive.google.com/file/d/1DiKIz4-IpxsUyiw9GjNHRLXg-Fk1aJGS/view?usp=sharing" target="_blank">download</a>
            </div>
        </div>

        <div class="row rcontent" id="rgibb">
            <h4 class="filename col-md-6">gibb</h4>
            <div class="filedetails filedetails-sho col-md-6" align="right">
                <a href="https://drive.google.com/file/d/1CU8VM5zWIvRMs6c_DHADqR2T5w0D3j2t/view?usp=sharing" target="_blank">download</a>
            </div>
        </div>
    </div>

    <div class="row rfilecontainer rfilecontainer-mid" id="ruek">
        <h2 class="col containername h2 huek">ÜKs</h2>

        <div class="row rcontent ruek101">
            <h4 class="filename col-md-6">M101 - Webauftritt erstellen und veröffentlichen</h4>
            <div class="filedetails filedetails-sho">
                <a title="grade + teacher's feedback + daily journal" href="https://drive.google.com/file/d/1NNkqIwfaxWIs4W-uiQnI0TwcO5Mvw-hP/view?usp=sharing" target="_blank">download</a>
            </div>
        </div>

        <div class="row rcontent ruek105">
            <h4 class="filename col-md-6">M105 - Datenbanken mit SQL bearbeiten</h4>
            <div class="filedetails filedetails-sho">
                <a title="grade + teacher's feedback + daily journal" href="https://drive.google.com/file/d/1xSWZO2Kv7Qzcuulb3oxu1LVWS1nHSwqy/view?usp=sharing" target="_blank">download</a>
            </div>
        </div>

        <div class="row rcontent ruek302">
            <h4 class="filename col-md-10">M302 - Fortgeschrittene Funktionen von Office Werkzeuge nutzen</h4>
            <div class="filedetails filedetails-sho">
                <a title="grade" href="https://drive.google.com/file/d/1i25wigXYfThqs_2rFT6skiJQIgYENfnO/view?usp=sharing" target="_blank">download</a>
            </div>
        </div>

        <div class="row rcontent ruek304">
            <h4 class="filename col-md-8">M304 - Einzelplatz-Computer in Betrieb nehmen</h4>
            <div class="filedetails filedetails-sho">
                <a title="grade + teacher's feedback + daily journal" href="https://drive.google.com/file/d/1u7Fn9CH1P89xXfjJ1bKL842U3zGCyIeg/view?usp=sharing" target="_blank">download</a>
            </div>
        </div>

        <div class="row rcontent ruek305">
            <h4 class="filename col-md-10">M305 - Betriebssysteme installieren, konfigurieren und installieren</h4>
            <div class="filedetails filedetails-sho">
                <a title="grade + teacher's feedback + daily journal" href="https://drive.google.com/file/d/185R0EsTI_dHVSPm6sO0CL00NCUZg_0j8/view?usp=sharing" target="_blank">download</a>
            </div>
        </div>

        <div class="row rcontent ruek307">
            <h4 class="filename col-md-8">M307 - Interaktive Webseite mit Formular erstellen</h4>
            <div class="filedetails filedetails-sho">
                <a title="grade + teacher's feedback + daily journal" href="https://drive.google.com/file/d/1o17nfQDPijKFGRUeQeG-4UfhCh3Ogw06/view?usp=sharing" target="_blank">download</a>
            </div>
        </div>

        <div class="row rcontent ruek337">
            <h4 class="filename col-md-6">M337 - Mobile-Applikation realisieren</h4>
            <div class="filedetails filedetails-sho">
                <a title="grade + teacher's feedback + daily journal" href="https://drive.google.com/file/d/1bGs7y_NrxgBSzmK2wP1trtNhdpV69kEp/view?usp=sharing" target="_blank">download</a>
            </div>
        </div>
    </div>

    <div class="row rfilecontainer rfilecontainer-mid" id="rzertifikat">
        <h2 class="col containername h2" id="hzertifikat">Zertifikate</h2>

        <div class="row rfileundercontainer rzertinf">
            <h3 class="col undercontainername h2 hzertinf">Informatik</h3>

            <div class="row rcontent rsap">
                <h4 class="filename col-md-6">Business Process Integration with SAP</h4>
                <div class="filedetails filedetails-lon" align="right">
                    <a title="grade + teacher's feedback + daily journal" href="https://drive.google.com/file/d/1mR9Ia38QfHFA2BPhl6UNA0-vT4YxBJ6m/view?usp=sharing" target="_blank">download</a>
                </div>
            </div>

            <div class="row rcontent rsap-abap">
                <h4 class="filename col-md-6">SAP-Einführung in die ABAP Entwicklung</h4>
                <div class="filedetails filedetails-lon" align="right">
                    <a title="grade + teacher's feedback + daily journal" href="https://drive.google.com/file/d/1Lc8_LdimvG2CA1Wq6C_UTnJjWrRu9_yj/view?usp=sharing" target="_blank">download</a>
                </div>
            </div>
        </div>

        <div class="row rfileundercontainer rzertson">
            <h3 class="col undercontainername h2" id="hzertson">Sonstige</h3>

            <div class="row rcontent" id="rabacus">
                <h4 class="filename col-md-6">Abacus</h4>
                <div class="filedetails filedetails-sho">
                    <a title="grade + teacher's feedback + daily journal" href="https://drive.google.com/file/d/14oNx03Lv-EPEzFUZfpz4qqmQGNPWn0cG/view?usp=sharing" target="_blank">download</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row rfilecontainer rfilecontainer-mid" id="rschlehre">
        <h3 class="col containername h2" id="hschlehre">Schnupperlehre</h3>

        <div class="row rcontent" id="rpentag">
            <h4 class="filename col-md-6">Pentag Informatik AG</h4>
            <div class="filedetails filedetails-sho">
                <a title="certificate + feedback" href="https://drive.google.com/file/d/1oRNm2R8CdhVCnW4oHz-4XImMv37ZZPHO/view?usp=sharing" target="_blank">download</a>
            </div>
        </div>
    </div>
    <script>
        if(document.getElementById("h1files").innerHTML == "F I L E S"){
            document.getElementById("heading").style.marginBottom = "20px";
        }
    </script>
    <?php
}
?>