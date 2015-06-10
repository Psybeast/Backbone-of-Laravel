<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Backbone-ofLaravel</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/lcdfal.css">
</head>
<body>
<header class="header">
    <div class="headerpic"><a href="index.php"><img align="middle" src="css/img/logo.png"/></a></div>
</header>
<main>
    <section class="productLineSelector"></section>
    <section class="defoView"></section>
</main>


<!-- TEMPLATES ----------------------------------------------------->
<script type="text/template" id="plineTemplate">
    <img src="<%= pPic %>"/>
    <p class="pLineName"><%= pLine %></p>
</script>
<!--Main page tabs template-->
<script type="text/template" id="tabsTemplate">
    <div id="tabok" style="height:65px; width: 100%;">
        <ul class="fourtab">
            <li class="activeTab" id="tab_1"><a href="1400">Áttekintés</a></li>
            <li id="tab_2"><a href="1100">Termékcsalád</a></li>
            <li id="tab_3"><a href="1617">Signage megoldások</a></li>
            <li id="tab_4"><a href="570">Elérhetőségek</a></li>
        </ul>
    </div>
</script>

<script type="text/template" id="defoTemplate">
    <div class="contentbg">
        <!-- TABS -->
        <!--
        <div id="tabok" style="height:65px; width: 100%;">
            <ul class="fourtab">
                <li class="activeTab" id="tab_1"><a href="1400">Áttekintés</a></li>
                <li id="tab_2"><a href="1100">Termékcsalád</a></li>
                <li id="tab_3"><a href="1617">Signage megoldások</a></li>
                <li id="tab_4"><a href="570">Elérhetőségek</a></li>
            </ul>
        </div>
        -->


        <!-- ÁTTEKINTÉS TAB -->
        <div id="tab_1" class="tabs" style="">
            <div id="tab1Header" class="tabfej">
                <img id="signagelogo" src="css/img/SignageSolution_logo.png"/>

                <h1 id="tab1title"> Signage megoldások az alkalmazások széles köréhez</h1>
            </div>
            <div id="intro">
                <div id="introblokk">
                    <h2 id="t1introtitle" class="cimsor"> Érje el a megfelelő hatást</h2>

                    <p id="t1introtxt" class="tabszoveg">Bármilyen üzlettel is foglalkozik, érdemes professzionális
                        hatást kelteni.
                        Ezért ha signage megoldásokban gondolkodik, bizonyára a legjobbat szeretné választani.
                        Üdvözöljük a Philips
                        signage megoldások világában! Vezető technológiák felhasználásával kifejlesztettük a legátfogóbb
                        kijelzőválasztékot, hogy az Ön vállalata a megfelelő benyomást tudja kelteni. Akár kifinomultabb
                        kijelzőre
                        van szüksége, akár kisebb költségvetésből dolgozik, létezik az Ön számára megfelelő Philips
                        signage megoldás.
                    </p>
                    <img id=t1introsarok src="css/img/introsarkok.png"/>
                </div>
            </div>
            <div id="termekoverview">
                <div id="termekblokk">
                    <img id="t1portfolioimg" src="css/img/eline.png"/>

                    <h2 id="t1portfoliotitle"> Termékválaszték áttekintése</h2>

                    <p id="t1portfoliotxt" class="tabszoveg">Mivel az egyik legátfogóbb termékválasztékot nyújtjuk,
                        termékeink a
                        piacon található legjobb nyilvános signage és nyilvános információs kijelző termékek között
                        találhatók. </p>

                    <p id="t1portfoliotxt" class="tabszoveg">A több felhasználós érintő funkcióval rendelkező
                        költséghatékony
                        kijelzőktől kezdve, a szemüveg nélküli 3D kijelzőkön át a különféle lenyűgöző keret nélküli
                        videofalakig
                        szinte minden megtalálható a termékkínálatunkban. Ezenkívül a nap 24 órájában megbízhatóan
                        működő, a
                        legmodernebb technológiát alkalmazó csúcsminőségű kijelzők biztosítása iránti elkötelezettségünk
                        figyelmet
                        érdemel.</p>

                </div>
            </div>
            <div id="signagemegoldasok">
                <div id="signageblokk">
                    <h2 id="t1signagetitle"> Signage megoldások</h2>

                    <p id="t1signagetxt" class="tabszoveg">A Philips signage megoldások rugalmas működést és jobb
                        szervizelhetőséget
                        nyújtanak a rendszerintegrátorok és megoldás szolgáltatók számára. Az egyedülálló funkciók a
                        teljesítményt
                        teljesen új szintre emelik, hiszen a legjobb képminőséget és a legnagyobb megbízhatóságot
                        nyújtják, még a
                        hét minden napján napi 24 órában történő működtetés esetén is. Vegye szemügyre közelebbről, mit
                        nyújthatnak
                        Önnek a Philips signage megoldások.</p>
                    <img id="t1signageimg" src="css/img/solution-img.png"/>
        </div>
            </div>
        </div>
        <!-- TERMÉKCSALÁD TAB -->
        <div id="tab_2" class="tabs" style="display:none;">
            <div id="tab2fejlec">
                <div id="tab1Header" class="tabfej">
                    <img id="signagelogo" src="css/img/SignageSolution_logo.png"/>

                    <h1 id="tab1title"> Fedezze fel a Philips signage megoldások világát</h1>
                </div>
                <div id="termekseries">
                    <ul id="seriesTabs">
                        <li id="detailtab1" class="seriesTabs activeTermekTab"><img src="css/img/tab_q_series.jpg"
                                                                                    style="z-index:400;"/>

                            <h2 class="t2seriestitles">Q-Line sorozat</h2></li>
                        <li id="detailtab2" class="seriesTabs"><img src="css/img/tab_eline_series.jpg"
                                                                    style="z-index:400;"/>

                            <h2 class="t2seriestitles">E-Line sorozat</h2></li>
                        <li id="detailtab3" class="seriesTabs"><img src="css/img/tab_vline_series.jpg"
                                                                    style="z-index:400;"/>

                            <h2 class="t2seriestitles">V-Line sorozat</h2></li>
                        <li id="detailtab4" class="seriesTabs"><img src="css/img/tab_videowall_series.jpg"
                                                                    style="width:159px; z-index:400;"/>

                            <h2 class="t2seriestitles">Videofal sorozat</h2></li>
                        <li id="detailtab5" class="seriesTabs" style="z-index:500; position: relative;"><img
                                src="css/img/tab_3d_series.gif"
                                style="z-index:500; width:191px; background-size:cover;">

                            <h2 class="t2seriestitles">3D kijelző sorozat</h2></li>
                        <li id="detailtab6" class="seriesTabs"><img src="css/img/tab_multitouch_series.jpg"
                                                                    style="width:166px; height: 449px; border-right: 1px solid #aaa;"/>

                            <h2 class="t2seriestitles">Multi-Touch sorozat</h2></li>
                    </ul>
                </div>
            </div>
            <!-- TERMÉKLEÍRÁSOK -->
            <div id="detailwrapper">
                <div class="detailtab activeDetail" id="detailtab1" style="z-index:350;">
                    <div class="detailtab_black" id="tab1black">
                        <div class="detail_left_top">
                            <h1 class="detailh1">Q-line. Alapvető signage megoldások</h1>

                            <h3 class="detailh3">Elérhető árú signage felbecsülhetetlen teljesítménnyel</h3>

                            <p class="detailp">A Q-line megoldások tökéletesek a mindennapi használathoz – különösen a
                                napi
                                szinten 16 órás működtetéshez. Az alapvető signage megoldásokhoz tervezve - pl.
                                várótermek,
                                sportközpontok és gyorséttermek tereibe. A LED-es szegély-háttérvilágítás technológiájú
                                kijelzők
                                átlagosan 40%-kal kevesebb energiát igényelnek, mint a CCFL technológiájúak, így az
                                energiaszámlája is csökkenni fog.</p>
                        </div>
                        <div class="detail_right_top">
                            <img class="detailimg" id="detailtab1pic" src="css/img/q_seriesdetailpic.png"/>
                        </div>
                    </div>
                    <div class="detailtab_white" id="tab1white">
                        <div class="detail_left_bot">
                            <h3 class="detailh3">Fő funkciók</h3>
                            <ul class="detailul">
                                <li class="detailli">A Edge LED technológia természetes színt és vékony kivitelt
                                    biztosít
                                </li>
                                <li class="detailli">Kis súlyú és egyszerűen telepíthető</li>
                                <li class="detailli">Egyszerű signage lejátszás USB-ről</li>
                                <li class="detailli">40%-kal kevesebb energiafelhasználás a CCFL technológiához képest
                                </li>
                                <li class="detailli">50 000 óra várható panel-élettartam (MTBF)</li>
                    </ul>
                </div>
                        <div class="detail_right_bot">
                        </div>
            </div>
                </div>
                <div class="detailtab" id="detailtab2" style="z-index:355;">
                    <div class="odddetailtab_black" id="tab2black">
                        <div class="odddetail_left_top">
                            <img class="detailimg" id="detailtab2pic" src="css/img/eline_series.png"/>
                </div>
                        <div class="odddetail_right_top">
                            <h1 class="detailh1">E-line. Professzionális signage megoldások</h1>

                            <h3 class="detailh3">Kelts életre az üzleti üzeneteit</h3>

                            <p class="detailp">Keltse életre marketingüzeneteit a lenyűgöző képtisztaságú E-line
                                megoldásokkal.
                                A hét minden napján 24 órás folyamatos működtetésre tervezve. A tekintetet magára vonó
                                és
                                fenntartható kialakítás tökéletesen illik bármilyen kiskereskedelmi környezetbe. Sőt, az
                                E-line
                                segítségével csökkentheti a teljes tulajdonlási költségét (TCO), és növelheti az
                                üzleti eredményeit (ROI).</p>
                </div>
                    </div>
                    <div class="odddetailtab_white" id="tab2white">
                        <div class="odddetail_left_bot">
                        </div>
                        <div class="odddetail_right_bot">
                            <h3 class="detailh3">Fő funkciók</h3>
                            <ul class="detailul">
                                <li class="detailli">Szünet nélküli („24/7-es”) működésre tervezve</li>
                                <li class="detailli">Maximális rugalmasság a Smart Insert segítségével</li>
                                <li class="detailli">Alacsony fenntartási költségek</li>
                                <li class="detailli">Smart Power a környezetbarát teljesítményért</li>
                                <li class="detailli">Továbbfejlesztett intelligens vezérlőkezelés</li>
                                <li class="detailli">A fényerő automatikusan a fényviszonyokhoz igazodik</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="detailtab" id="detailtab3" style="z-index:360;">
                    <div class="detailtab_black" id="tab3black">
                        <div class="detail_left_top">
                            <h1 class="detailh1">V-line. Csúcskategóriás signage megoldás</h1>

                            <h3 class="detailh3">A Wow! faktorral ellátott kijelzők</h3>

                            <p class="detailp">A legnagyobb igényeket támasztó környezetekben számít a teljesítmény.
                                Szükség van
                                egy olyan kijelzőre, ami felkelti az emberek figyelmét. A lenyűgöző képminőség és a
                                kifinomult,
                                vékony, kis súlyú kialakítás ideális megoldás lehet a közlekedési és vállalati
                                környezetekben a
                                hatékony és professzionális üzenetközvetítés érdekében.</p>
                </div>
                        <div class="detail_right_top">
                            <img class="detailimg" id="detailtab3pic" src="css/img/vline_series.png"/>
                        </div>
                    </div>
                    <div class="detailtab_white" id="tab3white">
                        <div class="detail_left_bot">
                            <h3 class="detailh3">Fő funkciók</h3>
                            <ul class="detailul">
                                <li class="detailli">Csúcskategóriás Edge LED-panel teljesítmény</li>
                                <li class="detailli">Csillogásvédelemmel ellátott, nagy fényerejű kijelző megoldás</li>
                                <li class="detailli">Keskeny kivitel a stílusos megjelenésért</li>
                                <li class="detailli">OPS csatlakozóaljzat a hálózatok integrálásának folytonosságáért
                                </li>
                                <li class="detailli">Továbbfejlesztett intelligens vezérlőkezelés</li>
                                <li class="detailli">Egyszerű signage lejátszás USB-ről</li>
                            </ul>
                        </div>
                        <div class="detail_right_bot">
                        </div>
                    </div>
                </div>
                <div class="detailtab" id="detailtab4" style="z-index:365;">
                    <div class="detailtab_black" id="tab4black">
                        <div class="detail_left_top">
                            <h1 class="detailh1">Videofal megoldás</h1>

                            <h3 class="detailh3">Késztesse megállásra úton lévő ügyfeleit</h3>

                            <p class="detailp">Legyen merész, stílusos, érezze az energiát. A gyakorlatilag bármilyen
                                videofal
                                rendszerhez használható Philips keret nélküli kijelzői segítségével üzenete hallhatóan
                                és
                                tisztán jut el a célközönséghez. Továbbfejlesztett megoldások egész sora gondoskodik a
                                gyorsabb
                                beállításról, az egyszerűbb karbantartásról és a kiemelkedő teljesítményről. Ráadásul a
                                szemüveg
                                nélküli 3D és multi-user touch videofal megoldások terén a Philips technológiai úttörő
                                szerepet
                                játszik.</p>
                </div>
                        <div class="detail_right_top">
                            <img class="detailimg" id="detailtab4pic" src="css/img/videowall_seriespic.png"/>
                        </div>
                    </div>
                    <div class="detailtab_white" id="tab4white">
                        <div class="detail_left_bot">
                            <h3 class="detailh3">Fő funkciók</h3>
                            <ul class="detailul">
                                <li class="detailli">Ultra vékony keretkialakítás az egybefüggő videofal megoldásokért
                                </li>
                                <li class="detailli">Mátrix funkció a gyors összeállításért</li>
                                <li class="detailli">Továbbfejlesztett színkalibráció</li>
                                <li class="detailli">Intelligens vezérlés a videofal teljes szabályozhatóságáért</li>
                                <li class="detailli">Szegélykidolgozás és összerendezés-beállítás</li>
                            </ul>
                        </div>
                        <div class="detail_right_bot">
                        </div>
                    </div>
                </div>
                <div class="detailtab" id="detailtab5" style="z-index:370;">
                    <div class="odddetailtab_black" id="tab5black">
                        <div class="odddetail_left_top">
                            <img class="detailimg" id="detailtab5pic" src="css/img/3d_series.png"/>
                        </div>
                        <div class="odddetail_right_top">
                            <h1 class="detailh1">Szemüveg nélküli 3D megoldás</h1>

                            <h3 class="detailh3">Egyszerűbb 3D: NINCS szükség szemüvegre</h3>

                            <p class="detailp" id="tab5p">Adjon új dimenziót a professzionális prezentációihoz, és
                                nyűgözze le
                                a közönségét a Philips szemüveg nélküli 3D kijelzőivel. A forradalmi lentikuláris
                                technológiának
                                köszönhetően nincs szükség szemüvegre a 3D hatás eléréséhez. Mindent összevetve teljesen
                                új és
                                sokkal élvezetesebb élményt nyújt a szemlélők számára a múzeumokban, kiemelt központi
                                üzletekben
                                és értékesítési reklámkörnyezetekben.</p>
                </div>
                    </div>
                    <div class="odddetailtab_white" id="tab5white">
                        <div class="odddetail_left_bot">
                        </div>
                        <div class="odddetail_right_bot">
                            <h3 class="detailh3">Fő funkciók</h3>
                            <ul class="detailul">
                                <li class="detailli">Nincs szükség speciális 3D szemüvegre</li>
                                <li class="detailli">Az autosztereoszkopikus lentikuláris technológia új dimenziókat
                                    nyit a
                                    prezentációk terén
                                </li>
                                <li class="detailli">Különleges 3D kijelző minőség 150°-os megtekintési szöggel</li>
                                <li class="detailli">Beépített renderelő mag a kép mélységérzetének teljes
                                    szabályozásához
                                </li>
                                <li class="detailli">Egyszerre több felhasználós élmény</li>
                                <li class="detailli">Teljes fényerő, teljes kontraszt, valódi színek megjelenítése</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="detailtab" id="detailtab6" style="z-index:375;">
                    <div class="detailtab_black" id="tab6black">
                        <div class="detail_left_top">
                            <h1 class="detailh1">Multi-Touch megoldás</h1>

                            <h3 class="detailh3">Kommunikáljon az ügyfeleivel többet, mint valaha</h3>

                            <p class="detailp" id="tab6detailp">Élvezze a világ legnagyobb érintőfunkciós megoldásainak
                                választékának lenyűgöző funkcióit. A még nagyobb rugalmassághoz és optimális
                                teljesítményhez
                                kiváló működőképesség társul, hogy tökéletes legyen a felhasználókkal való kommunikáció.
                                Számtalan lehetőséget biztosít az oktatási, kiskereskedelmi és vállalati környezetekben.
                                2, 6,
                                vagy 32 egyidejű érintőpont közül választhat, így új szintre emelheti a célközönséggel
                                való
                                interakciót.</p>
                </div>
                        <div class="detail_right_top">
                            <img class="detailimg" id="detailtab6pic" src="css/img/multitouch.png"/>
                        </div>
            </div>
                    <div class="detailtab_white" id="tab6white">
                        <div class="detail_left_bot">
                            <h3 class="detailh3">Fő funkciók</h3>
                            <ul class="detailul" id="tab6ul">
                                <li class="detailli">Kiváló interaktív kommunikáció a célközönséggel a Multi-Touch
                                    termékek
                                    legszélesebb választékának segítségével
                                </li>
                                <li class="detailli">Optikai, kapacitív, vagy infravörös multi-touch technológia</li>
                                <li class="detailli">2, 6, vagy 32 egyidejű érintőpont közötti választási lehetőség</li>
                                <li class="detailli">Smart Power az energiatakarékosságért</li>
                                <li class="detailli">Kompatibilis az Omnitapps rendszerekkel az abszolút testre szabható
                                    multi-touch csomagért
                                </li>
                            </ul>
                        </div>
                        <div class="detail_right_bot">
                        </div>
                    </div>
        </div>
            </div>
        </div>
        <div id="tab_3" class="tabs" style="display:none;">
            <div id="tab3wrapper">
                <div id="tab3Header" class="tabfej">
                    <img id="signagelogo" src="css/img/SignageSolution_logo.png"/>

                    <h1 id="tab1title"> Signage megoldások az alkalmazások széles köréhez</h1>
                </div>
                <div id="1stwrapper" class="solutionWrapper">
                    <div class="tab3left">
                        <img src="css/img/solution_thumb_touch.jpg"/>

                        <h3 class="detailh3">Interaktív megoldások</h3>

                        <p class="detailp tab3p">A több érintőpontos kijelzők új lehetőségeket nyitnak az interaktív
                            POS/POI
                            marketing programok számára. Precíz technológia, magas szintű interaktív kommunikáció a
                            közönséggel
                            és lebilincselő hatás. Tekintse meg az interaktív megoldásaink előnyeiről szóló videót.</p>
                        <img src="css/img/solution_thumb_appitupp.jpg"/>

                        <h3 class="detailh3">ALKALMAZZAazALKALMAZÁST!</h3>

                        <p class="detailp tab3p">Az Androidok világa most már elérhető a kijelzőjén. Bővítse
                            lehetőségeit a
                            dinamikus tartalommal, ami optimálisabbá teszi a tárolást, magával ragadja az ügyfeleit, és
                            igazi
                            lenyűgöző élményt nyújt.</p>
                    </div>
                    <div class="tab3right">
                        <img src="css/img/solution_thumb_videowall.jpg"/>

                        <h3 class="detailh3">Videofal megoldások</h3>

                        <p class="detailp tab3p">Nyűgözze le, és ragadja magával a közönségét az ultravékony keretű
                            megoldásokkal. A belső zoom funkció külső, drága felszerelés nélkül teszi lehetővé a
                            videofal
                            mátrix egyszerű megvalósítását. Tekintse meg a videofal megoldásaink előnyeiről szóló
                            videót.</p>
                    </div>
                </div>
                <div id="2ndwrapper" class="solutionWrapper">
                    <div class="tab3left">
                        <img src="css/img/solution_thumb_smartinsert.jpg"/>

                        <h3 class="detailh3">Smart Insert megoldás</h3>

                        <p class="detailp tab3p" id="tab3lastplacer">A professzionális számítógépek a legtöbb nyilvános
                            signage
                            installáció szerves részei. Méretük gyakran hozzáadódik a kijelző mélységéhez, és
                            használatuk
                            sokszor kábelrengeteggel jár. Ezért megalkottuk ezt a kijelzőt, amelynek a hátsó
                            burkolatában
                            található egy Smart insert rekesz, amelybe egy professzionális kis méretű számítógép
                            ideálisan
                            behelyezhető. Ezen felül a kábelkezelési rendszer nagyszerű megoldást kínál a kábelek
                            rendben
                            tartására és professzionális elrendezésére.</p>
                    </div>
                    <div class="tab3right">
                        <img src="css/img/solution_thumb_ops.jpg"/>

                        <h3 class="detailh3">OPS (Open Pluggable Specification) csatlakozóaljzat</h3>

                        <p class="detailp tab3p">A digitális signage piac számára kifejlesztett OPS (Open Pluggable
                            Specification,
                            nyílt csatlakozószabvány) csatlakozóaljzaton keresztül a médialejátszó módosítása vagy
                            frissítése
                            gyerekjáték. Egyszerűen csatlakoztassa médialejátszóját a kijelzőhöz, és már el is készült!
                            Az OPS
                            mind az alapszintű, mind a közép- vagy csúcskategóriás médialejátszókkal kompatibilis, így
                            hosszú
                            távon hozzájárul a fenntartási költségek csökkentéséhez.</p>
            </div>
        </div>
            </div>
        </div>
        <div id="tab_4" class="tabs" style="display:none;">
            <div id="tab4Header" class="tabfej">
                <img id="signagelogo" src="css/img/SignageSolution_logo.png"/>

                <h1 id="tab4title"> Az Ön helyi partnere</h1>

                <p id="tab4headertext"> Vegye fel a kapcsolatot a Philips nyilvános signage helyi partnerével, vagy a
                    Philips képviselőjével.
    </div>
            <div id="mapholder">
                <iframe id="embedmap"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2700.3924738652!2d18.917231299999997!3d47.404285400000006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741e113c017a533%3A0xc63476fee76144ac!2sFac%C3%A9lia+utca+47!5e0!3m2!1shu!2s!4v1400579415066"
                        width="400" height="300" frameborder="0" style="border:1px solid #eee;"></iframe>
            </div>
            <table id="contactTable">
                <tr>
                    <th id="contactth">Elérhetőségeink</th>
                </tr>
                <tr>
                    <td class="tableleft">Címünk:</td>
                    <td>2030 Érd, Facélia utca 47/A</td>
                </tr>
                <tr>
                    <td class="tableleft">Telefon/Fax:</td>
                    <td>(+36)23-520-124</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>(+36)23-520-125</td>
                </tr>
                <tr>
                    <td class="tableleft">Központi E-mail cím:</td>
                    <td><a href="mailto:info@amara.hu" target="_blank"> info@amara.hu</a></td>
                </tr>
                <tr>
                    <td class="tableleft">Adószám:</td>
                    <td>11740054-2-42</td>
                </tr>
                <tr>
                    <td class="tableleft">Cégjegyzékszám:</td>
                    <td>01-09-932513</td>
                </tr>
                <tr>
                    <td class="tableleft">Bankszámlaszám:</td>
                    <td>HUF: 11600006-00000000-39687063</td>
                </tr>
                <tr>
                    <td class="tableleft">IBAN:</td>
                    <td>HUF: HU77 1160 0006 0000 0000 3968 7063</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>EUR: HU21 1160 0006 0000 0000 4317 6676</td>
                </tr>
                <tr>
                    <td class="tableleft">Bank:</td>
                    <td>Erste Bank Hungary Nyrt.</td>
                </tr>
                <tr>
                    <td class="tableleft">SWIFT:</td>
                    <td>GIBAHUHB</td>
                </tr>
            </table>
        </div>
    </div>
</script>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/underscore-min.js"></script>
<script src="js/backbone-min.js"></script>
<script src="js/templates.js"></script>
<script src="js/main.js"></script>
<script src="js/code.js"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/Gill_Sans_Alt_One_WGL_All.font.js" type="text/javascript"></script>
<script src="js/Gill_Sans_Alt_One_WGL_Light_All.font.js" type="text/javascript"></script>
<script> new App.Views.App;
    Cufon.replace('h1,h2');
    Cufon.replace('h1,h3');
    Cufon.replace('h3');
    Cufon.replace('th');
    /*  Cufon.replace('a');*/

    $(document).ready(function () {
        //TABOK Váltása
        $('ul.fourtab li').click(function (e) {
            e.preventDefault();
            if ($(this).not('.activeTab')) {
                var selected = $(this);
                var selectedID = selected.attr('id');
                var aktivID = $('li.activeTab').attr('id');
                $('div#' + aktivID).fadeOut(100);
                $('li.activeTab').removeClass('activeTab');
                $(selected).addClass('activeTab');

                var tabHeight = $(selected).find('a').attr('href');
                $('div.contentbg').css('height', tabHeight);
                $('div#' + selectedID).fadeIn(500);
            } else {         //ha aktív ne csinálj semmit
            }
        });
    });
</script>
</body>
</html>
