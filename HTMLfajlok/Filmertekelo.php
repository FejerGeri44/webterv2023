<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Filmek</title>
    <link rel="stylesheet" href="../public/CSSfajlok/altalanos.css">
    <link rel="icon" href="../public/favicon.webp">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="body">


<div class="navbar">
    <ul>
        <li><a href="Quiz.php">Quiz</a></li>
        <li><a class="active" href="#">Filmek</a></li>
        <li><a href="Chat.php">Chat</a></li>
    </ul>
</div>
<div class="container"><br>
    <p class="title">Filmek</p>
</div>
<hr><hr>

<table>
    <tr>
        <td>
            <img src="../Képek/hitler_career.jpg" alt="Hitler: Egy karrier története">
        </td>
        <td>
            <img src="../Képek/hitler_szinesben.jpg" alt="Hitler Színesben">
        </td>
        <td>
            <img src="../Képek/downfall.jpg" alt="Downfall">
        </td>
    </tr>
    <tr>
        <td>
            <div>
                <?php
                    for ($i=0; $i<5;$i++){
                        echo "<span class='glyphicon glyphicon-star-empty film-rating-stars Hitler_career-rating-".($i+1)."'></span>";
                    }
                ?>
            </div>
        </td>
        <td>

        </td>
        <td>

        </td>
    </tr>
    <tr>
        <td colspan="3">
            <h3>Film tartalma</h3>
        </td>
    </tr>
    <tr>
        <td>
            <p>
                Az alább látható filmet először 1981-ben mutatták be Németországban és rögtön nagy vitákat váltott ki, mivel szakított az addig megszokott klisékkel és megpróbált egy tárgyilagosabb képet adni Hitler élettörténetéről. Természetesen ezen film kísérőszövege is negatív fényben állítja be az egykori német vezért és kancellárt, de mindent egybevetve nagyon hasznos információkkal szolgál Hitler megítéléséhez. Legfőbb erőssége, hogy a kitűnően összevágott eredeti filmfelvételek mellett sok filmrészletet láthatunk Hitler legjelentősebb beszédeiről - ezek ismerete nélkül szinte lehetetlen megismerni az egykori Führer sikereinek titkát, amelyeket javarészt zseniális szónoki képességeinek köszönhetett. Bár a film elkészítése óta immár három évtized elmúlt, még mindig ezt a dokumentumfilmet tekinthetjük az egyik legjobb összeállításnak, amit Hitler életéről a második világháború után készítettek.
            </p>
        </td>
        <td>
            <p>
                A film eddig nem látott eredeti színes filmfelvételeket mutat be, amelyeket tíz év kutatómunkájával gyűjtöttek össze a világ különböző archívumaiból. Az egyedülálló felvételek mellett korabeli tanúk levelei, naplói és személyes beszámolói hallhatók: fasiszták és antifasiszták, áldozatok és elkövetők, zsidók és nem zsidók, katonák és civilek mondják el a gondolataikat, és Hitler maga is megszólal. A 'Hitler színesben' eddig soha nem látott módon ábrázolja Hitler véres és gonosz Harmadik Birodalmának felemelkedését és bukását.
            </p>
        </td>
        <td>
            <p>
                Berlin, 1945 április. Egy nép a bukására vár. A főváros utcáin kegyetlen harcok folynak. A Birodalom helyzete a Vörös Hadsereg előrenyomulásával egyre reménytelenebbé válik. A folyamatos bombázások állandó rettegésben és életveszélyben tartják a város elkeseredett lakosságát. Hitler hűséges tábornokaival és néhány hívével elsáncolta magát a vezetőségi bunkerben. Miközben az utcákon kétségbeesett jelenetek játszódnak le, Hitler a Harmadik Birodalom teljes pusztulását a bunker falai között éli át. Jóllehet Berlint már lehetetlen tartani, a Führer mégis tiltakozik a búvóhely elhagyása ellen - Albert Speer építészhez hasonlóan a színpadon akar lenni, amikor legördül a függöny. Minthogy szívvel-lélekkel vesztes népe mellett áll, a színről való tragikus lelépését tervezi a mélyen a föld alatt húzódó bunker-rendszerben. Már csak néhány órája maradt, mielőtt közös öngyilkosságuk előtt feleségül veszi Eva Braunt. A vég elkerülhetetlenül közeleg, Hitler mindent az utolsó részletig kidolgoz: miután ő és szeretője meghalt, holttestüket a birodalmi kancellária udvarában fogják elégetni, nehogy a tetemük ellenséges kézre jusson. Az oroszok feltétel nélküli megadást követelnek, ezért hűséges hívei közül, vezetőjük példáját követve, többen is az önkéntes halált választják a rájuk váró kínkeserves meghurcoltatás helyett. A magát szintén a bunkerben meghúzó Magda Goebbels megmérgezi mind a hat gyermekét, majd férjével együtt véget vet életének. Röviddel ezután Hitler személyi titkárnőjének, a végsőkig kitartó Traudl Jungénak és még néhányaknak az utolsó pillanatban sikerül kimenekülnie a bunkerből, és átjutnak az oroszok ostromgyűrűjén...
            </p>
        </td>
    </tr>
</table>
<form action="Profil.php" method="post">
    <div class="button">
        <input type="submit" value="Vissza a profilra">
    </div>
    <script>
        $(document).ready(function (){
           $(".film-rating-stars").click(function (event){
               var classes = event.target.className.split(" ");
               var number = classes[3].split("-")[2];
               console.log("ajax.call");
               jQuery.ajax({
                   url:"../Ajax/ratings.php",
                   type:"post",
                   data: {name:"filcim", num:number},
                   success:function (res){
                       if(res === "success"){
                           for(var i=0; i<number;i++) {
                               document.getElementsByClassName("Hitler_career-rating-" + i)[0].className.replace("-empty", "");
                           }
                       }else{
                           alert(res);
                       }
                   }
               });
           });
        });
    </script>
</body>
</html>