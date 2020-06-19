<?php require_once 'includes/header.php'; ?>

            <div class="img-header1">
                <div class="nadpis-podstranka container">
                    <h1>Zakúpenie <font style="color:gold">VIP</font> pre Slovenskú Republiku</h1>
                </div>
            </div>

  <div class="container">
    <div class="row">
<?php
$a = $_GET[a];
?> 

<p>&nbsp;</p>
<div class="col-sm-12"> 
<h4>Tebou zadaný nick: <font style="color:#0066ff"><strong><?php echo $a ?></strong></font></h4>
<p>&nbsp;</p>
</div> 

<div class="col-sm-6"> 
<h3 class="cosmic"><font style="color:#0066ff">VIP</font></h3>

<p>Tvar SMS: <font style="color:#0099ff">csmc 2 s185066 <?php echo $a ?></font></p> 
<p>Na číslo: <font style="color:#0099ff">8877</font></p> 
<hr>
<p>Server: <font style="color:#00b300">Survival</font></p> 
<hr>
<p>Trvanie: <font style="color:#ff1a1a">40dní</font></p> 
<p>Cena: <font style="color:#ff1a1a">2€</font></p> 

</div> 


<div class="col-sm-6"> 
<div class="panel-heading"><h3 class="cosmic"><font style="color:#0066ff">VIP+</font></h3></div>

<p>Tvar SMS: <font style="color:#0099ff">csmc 4 s185066 <?php echo $a ?></font></p> 
<p>Na číslo: <font style="color:#0099ff">8877</font></p> 
<hr>
<p>Server: <font style="color:#00b300">Survival</font></p> 
<hr>
<p>Trvanie: <font style="color:#ff1a1a">40dní</font></p> 
<p>Cena: <font style="color:#ff1a1a">4€</font></p> 

</div>
</div>
</div>

<p>&nbsp;</p>

  <div class="img-header2">
      <div class="container">
        <p><h3>Podmienky platby</h3></p>
        <div class="row">
              <p>
                <li style="color:red">Odoslaním SMS vyjadrujete súhlas s nižšie uvedeními podmienkami.</li>
                <li>Pred odoslaním SMS si poriadne prekontrolujte text sms, za zle odoslanu SMS portál <?php echo $sitename ?> neručí!</li>
                <li>Po odoslaní sms sa zriekate práva na vrátenie peňazí.</li>
                <li>Po odoslaní sms je na majitelovy portálu <?php echo $sitename ?> ako s peniazmi bude hospodáriť, nemáte nárok rozhodovať ako sa s penizmi bude narábať!</li>
              </p>
            </div>
        </div>
    </div>

</div> 
</div>

<?php require_once 'includes/footer.php'; ?>