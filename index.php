<!DOCTYPE html>
<html data-landing_id="2106" data-offer_id="4" data-page_type="landing">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="initial-scale=1" id="viewport">
    <link rel="stylesheet" href="css\app.css">
    <link rel="stylesheet" href="css\common.css">
    <title>Power Shape </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="css\cod_line.css">
    
    
    
    
    <link href="css\css.css" rel="stylesheet">

<script>//INCLUDED IN EACH PRELANDING AND FIRST FORM FILE OF EACH LANDING
function setDoaffVisitorCookie(v)
{
    var d = new Date();
    d.setTime(d.getTime() + 2592000000);
    document.cookie = "doaff_visitor=" + v +"; expires="+ d.toUTCString()+ "; path=/";
}
function fillGet(tmpGet)
{
    //SLASHES
    var items = window.location.pathname.split("/");
    
    if (items.length < 4) {console.log('missing get params'); return {};} 

    tmpGet['affiliate'] = items[2];
    tmpGet['banner'] = items[3];
    //NORMAL GET
    items = window.location.search.substr(1).split("&");
    for (var index = 0; index < items.length; index++) {
            var parts = items[index].split("=");
            tmpGet[parts[0]] = decodeURIComponent(parts[1]);
    }
    return tmpGet;
}

function sendRequest(get)
{
    var affiliate = 'chiragsavaliya57';//REPLACE WITH CONSTANT ON DOWNLOAD
    var banner = '38486';//REPLACE WITH CONSTANT ON DOWNLOAD
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'https://go.doaffiliate.net/at.power-shape.eu/'+affiliate+'/'+banner+'?getVisitor');
    xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    xhr.send();
    xhr.onload = function() {
        if (xhr.status === 200) {
            var json = JSON.parse(xhr.responseText);
            setDoaffVisitorCookie(json.visitor);
        }
        else {
            console.log(xhr.status);
        }
    };
    
}

var get = fillGet({});
typeof get.v !== "undefined" ? setDoaffVisitorCookie(get["v"]) : sendRequest(get);



</script>
<script>//INCLUDED IN EACH FORM FILE OF EACH LANDING
function startLoading()
{
    var html = "<div id='doaffLoading' style='z-index:9999999; position: fixed; top: 200px; left: 50%; background-color: white; padding: 20px; border: 1px solid #444;color: black; margin-left: -150px; margin-top:-30px;height: 60px; width: 300px;font-size: 12'>Loading... Please wait!</div>";
    document.body.innerHTML = document.body.innerHTML + html;
}
function endLoading(){
    document.querySelector("#doaffLoading").remove();
}

document.addEventListener("DOMContentLoaded", function(event) { 
    document.querySelector('#reused_form').onsubmit=function(e)
    {
        e.preventDefault();
        startLoading();

        var data = new FormData(this);

        var parts = ('; ' + document.cookie).split('; doaff_visitor=');
        if (parts.length == 2)
        {
            data.append('v', parts.pop().split(';').shift());
            data.append('jsCodes',1);
            var req = new XMLHttpRequest();
            req.open("POST", 'https://c.doaffiliate.net/at.power-shape.eu/landing/greenthin/apiHandler1.php', true);
            req.onload = function () {
                if (req.status === 200) {
                    var json = JSON.parse(req.responseText);
                    window.location.href = "success.php";
                    console.log(json);
                }
                else
                {
                    endLoading();
                    console.log("ERROR");
                }
            };
            req.send(data);

        }

        return false;
    };    
});


</script>
</head>
<span id="warning-container"></span>
<body class="page_home page_cod lang_de" cz-shortcut-listen="true">
<div class="page_wrapper">
    <div class="warning_block">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="warning">
                            <p><span>ACHTUNG: </span>Wegen der großen Medienaufmerksamkeit haben wir nur noch einen begrenzten Lagerbestand. Nach dem Stand vom <i class="date"></i> sind nur noch <i class="date">52</i> Artikel verfügbar. </p>
                            <div class="close"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="greeting">
        <div class="wrapper">
            <div class="container">
                <div class="greeting_top">
                    <div class="greeting_logo_image"><img src="img\logo.png" alt=""></div>
                    <p class="greeting_logo_text">Rückkehr von der in ihrer Jugend formschöne Abbildung mit Power Shape</p>
                </div>
                <div class="greeting_bottom">
                    <div class="greeting_title">Eine neue sichere Methode zur Gewichtsabnahme in jedem Alter
                    </div>
                    <div class="greeting_list">
                        <div class="greeting_list_image_bg"><img class="hide_on_mobile" src="img\greeting_bg.png" alt=""><img class="show_on_mobile" src="img\greeting_bg_mobile.png" alt=""></div>
                        <div class="greeting_list_image"><img src="img\product_final.png" alt=""></div>
                        <div class="greeting_list_wrap">
                            <p class="greeting_subtitle">Ohne Diät, und ohne Übungen</p>
                            <ul class="greeting_ul">
                                <li class="greeting_text">die Größe Ihrer Taille verringern</li>
                                <li class="greeting_text">Effektiv Fett verbrennen</li>
                                <li class="greeting_text">Den hunger unterdrücken</li>
                                <li class="greeting_text">metabolische Prozesse<br>verbessern</li>
                            </ul>
                        </div>
                        <a class="button_submit" href="#form">
                            <button class="submit_form scroll_to_button" type="submit"><span>Jetzt bestellen</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section medical">
        <div class="wrapper">
            <div class="container">
                <div class="medical_title"> Die medizinische Statistik zeigt, dass die beliebten
                    <span>Fettverbrennung  </span>Techniken sind wirklich schädlich für den Körper!
                </div>
                <div class="medical_list">
                    <div class="medical_item_container">
                        <div class="spoiler-title opened"><span class="open">Körperliche Übungen</span><span class="close">Körperliche Übungen</span></div>
                        <div class="spoiler-body open_spoiler">
                            <div class="medical_item">
                                <div class="medical_image"><img src="img\medical_image-1.jpg" alt=""></div>
                                <div class="medical_right">
                                    <p class="medical_caption">Körperliche Übungen</p>
                                    <p class="medical_text">Unser Körper ist ein interessanter Mechanismus, der nicht schnellen Änderungen zulässt, weil der sie sich als Bedrohung ansieht. </p>
                                    <p class="medical_subtitle">Nach den Angaben der European Medical Association, etwa 50% der Erwachsenen <span>nicht Gewicht auch nach umfangreichen körperlichen Übungen verlieren.</span>
                                    </p>
                                </div>
                            </div>
                            <p class="medical_text">Sie neigen zu Muskeln unterhalb der Fettdepots, die nur mehr Druck auf das Herz-Kreislauf-System ausüben.</p>
                        </div>
                    </div>
                    <div class="medical_item_container">
                        <div class="spoiler-title closed"><span class="open">Operationen</span><span class="close">Operationen</span>
                        </div>
                        <div class="spoiler-body">
                            <div class="medical_item">
                                <div class="medical_image"><img src="img\medical_image-2.jpg" alt=""></div>
                                <div class="medical_right">
                                    <p class="medical_caption">Operationen</p>
                                    <p class="medical_text">Liposuktion ist die populärste chirurgische Methode, die Ihr Problem lösen sollte.  Sie hat aber nut </p>
                                    <p class="medical_subtitle">in 90% der Fälle sind es nur temporäre Lösung.</p>
                                    <p class="medical_text">Es bedeutet, daß Ihr Fett wird schließlich zurück, weil ihr
                                        Körper verlangt es!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="medical_item_container">
                        <div class="spoiler-title closed"><span class="open">Diäten</span><span class="close">Diäten</span></div>
                        <div class="spoiler-body">
                            <div class="medical_item">
                                <div class="medical_image"><img src="img\medical_image-3.jpg" alt=""></div>
                                <div class="medical_right">
                                    <p class="medical_caption">Diäten</p>
                                    <p class="medical_text">Wenn Sie  aufhören zu essen , die gleiche Menge der Nahrung, die Sie gewohnt sind, gefällt es Ihrem Körper nicht. Deshalb wird es saugen Sie jedes Stück Nahrung und speichern Sie es als fettdepots Egal welche Diät Sie wählen.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="dominates">
        <div class="wrapper">
            <div class="container">
                <div class="dominates_title">Warum ist <span>Power Shape viel effektiver als </span>andere Methoden zum Abnehmen?</div>
                <div class="dominates_list">
                    <div class="dominates_item">
                        <div class="dominates_image"><img src="img\dominates_image-1.jpg" alt=""></div>
                        <div class="dominates_bottom">
                            <div class="dominates_caption">Power Shape wurde in Kooperation mit dem Verband der Europäischen Ernährung Gesellschaften entwickelt.
                            </div>
                            <div class="dominates_text">Der entscheidende Faktor der Fettverbrennung Prozesse wurde die Unterdrückung des Hungergefühls. Daher Power Shape ist die effektivste Methode des Abnehmens
                            </div>
                        </div>
                    </div>
                    <div class="dominates_item">
                        <div class="dominates_image"><img src="img\dominates_image-2.jpg" alt=""></div>
                        <div class="dominates_bottom">
                            <div class="dominates_caption">Power Shape hilft auch bei psychischen Problemen, die mit Übergewicht zu tun haben.
                            </div>
                            <div class="dominates_text"> Wie bekannt, dass die Menschen, die Diät halten, sehr oft stressig depressiv, aggressiv und gereizt sind, weil sie ständig Hungergefühl haben. Power Shape unterdrückt das Hungergefühl. Auf diese Weise können Sie alle negativen psychologischen Faktoren bei Abnahme beseitigen.
                            </div>
                        </div>
                    </div>
                    <div class="dominates_item">
                        <div class="dominates_image"><img src="img\dominates_image-3.jpg" alt=""></div>
                        <div class="dominates_bottom">
                            <div class="dominates_caption">Power Shape entfernt Kohlehydrate und Fette aus der Verdauung, die ihren Körper keine andere Wahl geben, als seine eigenen Fettreserven brennen zu lassen.
                            </div>
                            <div class="dominates_text"> Außerdem verfügt das Produkt über eine Vielzahl von Vorteilen.
                            </div>
                            <ul class="domination_ul">
                                <li class="domination_li">Hilft Stress zu überwinden</li>
                                <li class="domination_li">Entgiftet den Körper</li>
                                <li class="domination_li">verbessert den allgemeinen Zustand</li>
                                <li class="domination_li">Aktivierung der Fettverbrennung Prozesse</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <a class="button_submit show_on_mobile" href="#form">
                    <button class="submit_form" type="submit"><span>Jetzt bestellen</span></button>
                </a>
                <div class="approved_left show_on_mobile">
                    <div class="approved_title"><span>Power Shape wurde von der </span>Föderation der Europäischen Ernährungswissenschaftlern getestet
                    </div>
                    <p class="approved_text">Mehr als 1000 Männer und Frauen haben an den klinischen Studiender Föderation der europäischen Ernährungswissenschaftlern teilgenommen. Es gab zwei Gruppen von Teilnehmern. Eine Gruppe verwendete Power Shape, während die andere Gruppe ein anderes Produkt.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="approved">
        <div class="wrapper">
            <div class="container">
                <div class="approved_left hide_on_mobile">
                    <div class="approved_title"><span>Power Shape wurde von der </span>Föderation der Europäischen Ernährungswissenschaftlern getestet
                    </div>
                    <p class="approved_text">Mehr als 1000 Männer und Frauen haben an den klinischen Studiender Föderation der europäischen Ernährungswissenschaftlern teilgenommen. Es gab zwei Gruppen von Teilnehmern. Eine Gruppe verwendete Power Shape, während die andere Gruppe ein anderes Produkt.</p>
                </div>
                <div class="approved_graph">
                    <div class="approved_graph_item">
                        <div class="approved_graph_left">
                            <p class="approved_text">Sofort nach <span>der Anwendung</span></p>
                        </div>
                        <div class="approved_graph_right">
                            <div class="approved_graph_top">
                                <p class="approved_slim">Power Shape</p>
                                <p class="approved_slim_procent">99%</p>
                            </div>
                            <div class="approved_graph_bottom">
                                <p class="approved_comp">Wettbewerber</p>
                                <p class="approved_comp_procent">20%</p>
                            </div>
                        </div>
                    </div>
                    <div class="approved_graph_item">
                        <div class="approved_graph_left">
                            <p class="approved_text">Fehlen von Nebenwirkungen </p>
                        </div>
                        <div class="approved_graph_right">
                            <div class="approved_graph_top">
                                <p class="approved_slim">Power Shape</p>
                                <p class="approved_slim_procent">100%</p>
                            </div>
                            <div class="approved_graph_bottom">
                                <p class="approved_comp">Wettbewerber</p>
                                <p class="approved_comp_procent">25%</p>
                            </div>
                        </div>
                    </div>
                    <div class="approved_graph_item">
                        <div class="approved_graph_left">
                            <p class="approved_text">Aktivierung der Fettverbrennung </p>
                        </div>
                        <div class="approved_graph_right">
                            <div class="approved_graph_top">
                                <p class="approved_slim">Power Shape</p>
                                <p class="approved_slim_procent">94%</p>
                            </div>
                            <div class="approved_graph_bottom">
                                <p class="approved_comp">Wettbewerber</p>
                                <p class="approved_comp_procent">30%</p>
                            </div>
                        </div>
                    </div>
                    <div class="approved_graph_item">
                        <div class="approved_graph_left">
                            <p class="approved_text">Unterdrückung von Hunger <span>nach 4 Monaten Programm </span></p>
                        </div>
                        <div class="approved_graph_right">
                            <div class="approved_graph_top">
                                <p class="approved_slim">Power Shape</p>
                                <p class="approved_slim_procent">98%</p>
                            </div>
                            <div class="approved_graph_bottom">
                                <p class="approved_comp">Wettbewerber</p>
                                <p class="approved_comp_procent">30%</p>
                            </div>
                        </div>
                    </div>
                    <div class="approved_graph_item">
                        <div class="approved_graph_left">
                            <p class="approved_text">Entgiftet Körper </p>
                        </div>
                        <div class="approved_graph_right">
                            <div class="approved_graph_top">
                                <p class="approved_slim">Power Shape</p>
                                <p class="approved_slim_procent">80%</p>
                            </div>
                            <div class="approved_graph_bottom">
                                <p class="approved_comp">Wettbewerber</p>
                                <p class="approved_comp_procent">32%</p>
                            </div>
                        </div>
                    </div>
                    <div class="approved_num">
                        <p class="approved_number">0</p>
                        <p class="approved_number">20</p>
                        <p class="approved_number">40</p>
                        <p class="approved_number">60</p>
                        <p class="approved_number">80</p>
                        <p class="approved_number">100</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="effect">
        <div class="wrapper">
            <div class="container">
                <div class="effect_text"><span>Die fettverbrennende Wirkung  </span>mit klinisch zugelassener Methode aktivieren!
                </div>
                <a class="button_submit" href="#form">
                    <button class="submit_form scroll_to_button" type="submit"><span>Jetzt bestellen</span></button>
                </a>
            </div>
        </div>
    </section>
    <section class="expert">
        <div class="wrapper">
            <div class="container">
                <div class="title">Warum Jeder 2 <strong>medizinische Experte Power Shape </strong>als revolutionierte Art und Weise der Fettverbrennung <strong>empfiehlt</strong>!
                </div>
                <div class="subtitle show_on_mobile">Im Laufe der Jahre sammelte ich verschiedene Methoden, die meinen Patienten helfen konnten. Power Shape ist bestimmt Nummer 1!
                </div>
                <div class="expert_photo">
                    <div class="expert_image"></div>
                    <div class="expert_name">Prof. Dr. Viktoria Schiller</div>
                    <div class="expert_status">Ernährungswissenschaftlerin, 25 Jahre der Berufspraxis.
                    </div>
                    <div class="expert_sign"></div>
                </div>
                <div class="expert_text">
                    <div class="subtitle hide_on_mobile">Im Laufe der Jahre sammelte ich verschiedene Methoden, die meinen Patienten helfen konnten. Power Shape ist bestimmt Nummer 1!
                    </div>
                    <p class="text">Power Shape ist eine neue und sichere Methode <span>der Abnahme.</span> Power Shape blockiert effektiv die Aufnahme Fette und Kohlenhydrate in ihrem Körper. </p>
                    <p class="text">Power Shape hat keine Nebenwirkungen und das macht es zu einer perfekten Methode der Abnahme für Menschen, die Probleme mit der Gesundheit haben, Frauen nach der Stillzeit, Frauen in den Wechseljahren, die Patienten nach der Operation und Menschen mit genetischen Problemen.</p>
                    <p class="text">Eines der wichtigsten Elemente des Produkts ist Garcinia Cambogia. Es bildet ein <span>Gel im Magen verhindert, dass externe Kohlehydrate und Fette aus.</span> Also, ihr Körper hat keine andere Wahl als ihre eigenen Fettdepots zu verwenden. Das ist, wie sie Fett schnell und sogar verlieren ohne Änderung ihrer Diät.</p>
                </div>
                <div class="expert_example">
                    <div class="example">
                        <div class="number">1</div>
                        <div class="text">Nehmen Sie eine Kapsel vor dem Essen</div>
                    </div>
                    <div class="example">
                        <div class="number">2</div>
                        <div class="text">Power Shape bildet ein Gel im Magen und es für Fette und Kohlenhydrate monitor
                        </div>
                    </div>
                    <div class="example">
                        <div class="number">3</div>
                        <div class="text">Power Shape interagiert mit Kohlenhydrate und Fette und blockiert ihre Verdauung
                        </div>
                    </div>
                    <div class="example">
                        <div class="number">4</div>
                        <div class="text">Power Shape bindet Kohlenhydrate und Fette und sieht sie aus ihrem Körper</div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </section>
    <section class="efforts">
        <div class="wrapper">
            <div class="container">
                <div class="title">Fett verbrennt von Woche zu Woche ohne <span>Anstrengungen!</span></div>
                <div class="efforts_container">
                    <div class="efforts_slider">
                        <div class="item" aria-hidden="false">
                            <div class="image"><img src="img\efforts_image-1.png" alt=""></div>
                            <div class="kilos">bis <span>5</span>kg</div>
                            <div class="weeks">1-2 Woche</div>
                        </div>
                        <div class="item" aria-hidden="true">
                            <div class="image"><img src="img\efforts_image-2.png" alt=""></div>
                            <div class="kilos">bis <span>8</span>kg</div>
                            <div class="weeks">3-4 Woche</div>
                        </div>
                        <div class="item" aria-hidden="true">
                            <div class="image"><img src="img\efforts_image-3.png" alt=""></div>
                            <div class="kilos">bis <span>14</span>kg</div>
                            <div class="weeks">7-8 Woche</div>
                        </div>
                        <div class="item" aria-hidden="true">
                            <div class="image"><img src="img\efforts_image-4.png" alt=""></div>
                            <div class="kilos">bis <span>30</span>kg</div>
                            <div class="weeks">15-16 Woche</div>
                        </div>
                    </div>
                </div>
                <div class="efforts_mobile_text">
                    <div class="mobile_item">
                        <div class="kilos">bis <span>5</span>kg</div>
                        <div class="weeks">1-2 Woche</div>
                    </div>
                    <div class="mobile_item">
                        <div class="kilos">bis <span>8</span>kg</div>
                        <div class="weeks">3-4 Woche</div>
                    </div>
                    <div class="mobile_item">
                        <div class="kilos">bis <span>14</span>kg</div>
                        <div class="weeks">7-8 Woche</div>
                    </div>
                    <div class="mobile_item">
                        <div class="kilos">bis <span>30</span>kg</div>
                        <div class="weeks">15-16 Woche</div>
                    </div>
                </div>
                <a class="button_submit" href="#form">
                    <button class="submit_form scroll_to_button" type="submit"><span>Jetzt bestellen</span></button>
                </a>
            </div>
        </div>
    </section>
    <section class="ingridients">
        <div class="wrapper">
            <div class="container">
                <div class="title"><strong>Einzigartige Konsistenz der Elemente </strong>die Sie brennen Fett hilft ohne
                    Diäten
                </div>
                <div class="subtitle">Warum Power Shape steht gegenüber anderen Konkurrenten? Das Geheimnis liegt in der
                    einzigartigen Konsistenz der Komponenten.
                </div>
                <div class="product_part">
                    <div class="product"><img src="img\product_consist.png" alt=""></div>
                    <div class="bottom_part hide_on_mobile">
                        <div class="product_title">Die einzigartige Konsistenz der Zutaten Effektiv Arbeiten für Ihre
                            Traum Körper!
                        </div>
                        <a class="button_submit" href="#form">
                            <button class="submit_form" type="submit"><span>Jetzt bestellen</span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="text_part">
                    <div class="text_item">
                        <div class="text_title">Garcinia Cambogia</div>
                        <div class="text">Verbrennt weißes und braunes Fett, reduziert Fettpolster und hilft, eine
                            schlanke und straffe Figur zu bekommen.
                        </div>
                    </div>
                    <div class="text_item">
                        <div class="text_title">Braunalge Ascophyllum nodosum</div>
                        <div class="text">Stimuliert den Stoffwechsel auf zellulärer Ebene.
                        </div>
                    </div>
                    <div class="text_item">
                        <div class="text_title">Guarana-Samen</div>
                        <div class="text">Verringern den Appetit ohne physische und psychologische Beschwerden.
                        </div>
                    </div>
                    <div class="text_item">
                        <div class="text_title">Acai-Beeren</div>
                        <div class="text">ist eine reiche Quelle von starken natürlichen Antioxidantien.
                        </div>
                    </div>
                    <div class="text_item">
                        <div class="text_title">Grünteeblätter</div>
                        <div class="text">ist reich an Antioxidantien, verhindern das Auftreten von Dehnungsstreifen.
                        </div>
                    </div>
                    <div class="bottom_part show_on_mobile">
                        <div class="product_title">Die einzigartige Konsistenz der Zutaten Effektiv Arbeiten für Ihre
                            Traum Körper!
                        </div>
                        <a class="button_submit" href="#form">
                            <button class="submit_form" type="submit"><span>Jetzt bestellen</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews">
        <div class="wrapper">
            <div class="container">
                <div class="title">Die Kommentare unserer Kunden</div>
                <div class="slaider_container">
                    <div class="bx-wrapper" style="max-width: 100%;">
                        <div class="bx-viewport" aria-live="polite">
                            <div class="slaider_reviews">
                                <div class="review" aria-hidden="false">
                                    <div class="top_part">
                                        <div class="name">Mulvaine, 28 Jahre alt</div>
                                        <div class="email">mul*****@gmail.com</div>
                                    </div>
                                    <div class="img"><img src="img\image_review-1.png" alt=""></div>
                                    <div class="diff">
                                        <div class="before">Vorher: 79 kg</div>
                                        <div class="after">Nachher: 69 kg</div>
                                    </div>
                                    <div class="title_review">Ich bin stolz auf sich selbst!</div>
                                    <div class="text">Nach fünf Jahren der Ehe habe ich bedeutend zugenommen. Ich habe viele Methoden und Diäten probiert, und nur Power Shape hat mir geholfen. Ich verlor über 10 Kilo mit Power Shape und ich bin stolz auf meine Ergebnisse!
                                    </div>
                                </div>
                                <div class="review" style="float: left; list-style: none; position: relative; width: 790px;" aria-hidden="true">
                                    <div class="top_part">
                                        <div class="name">Helene, 45 Jahre alt</div>
                                        <div class="email">h234****@gmx.com</div>
                                    </div>
                                    <div class="img"><img src="img\image_review-2.png" alt=""></div>
                                    <div class="diff">
                                        <div class="before">Vorher: 90 kg</div>
                                        <div class="after">Nachher: 70 kg</div>
                                    </div>
                                    <div class="title_review">Die Wahl meines Arztes</div>
                                    <div class="text">Nach der Menopause fing ich an, zuzunehmen. Leider kann ich nicht traditionelle medizinische Pillen verwenden, weil Sie meine Gesundheit aufgrund der verschiedenen Nebenwirkungen dieser Medikamente beeinflussen können. Power Shape ist die Wahl meines Arztes, da es überhaupt keine Nebenwirkungen guibt. Ich habe 20 Kilo in 4 Monaten abgenommen. Es war fantastisch!
                                    </div>
                                </div>
                                <div class="review" style="float: left; list-style: none; position: relative; width: 790px;" aria-hidden="true">
                                    <div class="top_part">
                                        <div class="name">Emma, 25 Jahre alt</div>
                                        <div class="email">em****@gmail.com</div>
                                    </div>
                                    <div class="img"><img src="img\image_review-3.png" alt=""></div>
                                    <div class="diff">
                                        <div class="before">Vorher: 55 kg</div>
                                        <div class="after">Nachher: 50 kg</div>
                                    </div>
                                    <div class="title_review">Gute Ergänzung zu meinem Training cycle</div>
                                    <div class="text">Ich verwendete Power Shape als Teil meiner Training cycle. Ich habe 5 Kilo in einer Woche abgenommen. Wunderbar!
                                    </div>
                                </div>
                                <div class="review" style="float: left; list-style: none; position: relative; width: 790px;" aria-hidden="true">
                                    <div class="top_part">
                                        <div class="name">Verena, 35 Jahre alt</div>
                                        <div class="email">ve*****@gmx.com</div>
                                    </div>
                                    <div class="img"><img src="img\image_review-4.png" alt=""></div>
                                    <div class="diff">
                                        <div class="before">Vorher: 105 kg</div>
                                        <div class="after">Nachher: 90 kg</div>
                                    </div>
                                    <div class="title_review">Ich kann daran einfach nicht glauben, das sind meine Ergebnisse!!
                                    </div>
                                    <div class="text">Ich habe über 100 Kilo gewogen. Das bei der Körpergröße von 168 cm. Als ich mit Power Shape angefangen habe, begann mein Fett zu schmelzen. Ich kann einfach nicht glauben, dass das meine Ergebnisse sind!!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="delivery">
        <div class="wrapper">
            <div class="container">
                <div class="left_part">
                    <div class="title">Wie man Power Shape bestellen kann</div>
                    <div class="order_items">
                        <div class="order_item">
                            <div class="image"><img src="img\image_order_1.png" alt=""></div>
                            <div class="text">
                                <p class="subtitle">Füllen Sie das untenstehende Bestellformular aus </p><span>Ihr Name und Ihre Telefonnummer </span>
                            </div>
                        </div>
                        <div class="order_item">
                            <div class="image"><img src="img\image_order_2.png" alt=""></div>
                            <div class="text">
                                <p class="subtitle">Bestätigen Sie die Lieferadresse, den Typ und das Datum </p><span>Der Manager ruft Sie gleich an</span>
                            </div>
                        </div>
                        <div class="order_item">
                            <div class="image"><img src="img\image_order_3.png" alt=""></div>
                            <div class="text">
                                <p class="subtitle">Erhalt der Ware und Bezahlung </p><span>Zahlen Sie beim Erhalten</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right_part">
                    <div class="image"><img src="img\image_delivery.png" alt=""></div>
                    <div class="subtitle">Lieferung in ganz Europa!</div>
                    <ul class="list">
                        <li>Sie erhalten Ihren Power Shape innerhalb von 2-3 Arbeitstagen nach dem Bestellen.</li>
                        <li>Bezahlen Sie dem Kurier!</li>
                    </ul>
                    <div class="items">
                        <div class="icon"></div>
                        <div class="icon"></div>
                        <div class="icon"></div>
                        <div class="icon"></div>
                        <div class="icon"></div>
                        <div class="icon"></div>
                    </div>
                    <a class="button_submit show_on_mobile" href="#form">
                        <button class="submit_form" type="submit"><span>Jetzt bestellen</span></button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="faq">
        <div class="wrapper">
            <div class="container">
                <div class="title_area">
                    <div class="title">FAQ</div>
                    <div class="line"></div>
                </div>
                <div class="question">
                    <div class="subtitle">Was ist Power Shape?</div>
                    <div class="text">Es ist ein Produkt, das Ihnen helfen kann, schnell und effektiv abzunehmen
                    </div>
                </div>
                <div class="question">
                    <div class="subtitle">Wie funktioniert Power Shape?</div>
                    <div class="text">Das Konzept der Power Shape ist ganz einfach. Garcinia extract erleichtert Fette aufteilen. Gleichzeitig deckt der Ihr Magen mit Gel. Somit wird verhindert, dass Kohlehydrate und Fette aus aufnehmen und Ihr Körper werden keine Wahl haben, aber Ihre inneren, die Fettdepots zu verbrennen.
                    </div>
                </div>
                <div class="question">
                    <div class="subtitle">Wie kann ich Power Shape einnehmen und wie lange?</div>
                    <div class="text">Es ist ganz einfach, Sie sollten nur eines dieser Programme durchmachen</div>
                    <div class="program_list">
                        <div class="program">
                            <div class="image"></div>
                            <div class="program_content">
                                <div class="top_part">
                                    <div class="up_to"> bis <br>10 kg</div>
                                    <div class="program_name">
                                        <div class="program_title">Programm Starter</div>
                                        <div class="program_dur">1 Monat</div>
                                    </div>
                                </div>
                                <div class="bottom_part">
                                    <div class="bottom_title">Wenn Sie 10 kg Gewicht verlieren möchten</div>
                                    <ul class="bottom_list">
                                        <li>Nehmen Power Shape täglich dreimal</li>
                                        <li>Das Gewicht verbrennt in sich selbst</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="program">
                            <div class="image"></div>
                            <div class="program_content">
                                <div class="top_part">
                                    <div class="up_to"> bis <br>30 kg</div>
                                    <div class="program_name">
                                        <div class="program_title">Programm Fortgeschritten</div>
                                        <div class="program_dur">4 Monate</div>
                                    </div>
                                </div>
                                <div class="bottom_part">
                                    <div class="bottom_title">Wenn Sie 30 kg abnehmen und für die ganze Saison schlank sein möchten.
                                    </div>
                                    <ul class="bottom_list">
                                        <li>Nehmen Power Shape täglich dreimal</li>
                                        <li>Spaziergang mindestens 2 km pro Tag</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="final">
        <div class="wrapper">
            <div class="container">
                <div class="left_part">
                    <div class="title"><span>Power Shape: </span>Einfachste Weg schlank zu sein, ohne Lebensstil ändern zu müssen
                    </div>
                    <ul class="list">
                        <li>Aktiviert die Fettverbrennung</li>
                        <li>Fördert die rationelle Stoffwechsel</li>
                        <li>Entgiftet den Körper</li>
                        <li>Tötet Essattacken</li>
                    </ul>
                    <div class="items">
                        <div class="icon"></div>
                        <div class="icon"></div>
                        <div class="icon"></div>
                    </div>
                    <div class="product"><img src="img\product_final.png" alt=""></div>
                </div>
                <div class="form_part">
                    <div class="form_box" id="form">
                        <div id="scroll_to_form"></div>
                        <div class="top_part">
                            <div class="discount_label">-<span class="price_land_discount wv_discount">50</span>%</div>
                            <div class="arrow_price">
                                <div class="old_price">
                                    <div class="desc">Verkauf:</div>
                                    <div class="value"><span><span class="price_land_s4 wv_old-price"><?=($_SESSION['price']*2)?></span> <span class="price_land_curr wv_currency">Euro</span></span></div>
                                </div>
                                <div class="new_price">
                                    <div class="value">
                                        <div class="new_price_count"><span class="price_land_s1 wv_new-price"><?=$_SESSION['price']?></span>
                                            <span class="price_land_curr wv_currency">Euro</span>
                                            <div class="label_new"><span>Neu!</span></div>
                                        </div>
                                        <div class="box">
                                            <p><span class="plus">+</span><span class="free">SCHNELLE </span><span class="regular">LIEFERUNG</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bottom_part">
                            <div class="timer is-countdown">
                            </div>
                            <div class="form_title">Bestellen Sie mit <span><span class="price_land_discount wv_discount">50</span>% Rabatt! </span>
                            </div>
                            <form class="form wv_order-form" role="form" id="reused_form" method="post" name="form">

                                

                                <div class="field name">
                                    <input type="text" name="fio" placeholder="Dein Name" class="wv_name" required="required">
                                </div>
                                <div class="field phone">
                                    <input type="tel" name="phone" placeholder="Telefonnummer" class="wv_phone" required="required">
                                </div>
                                <input type="text" name="utm_source" hidden value="<?=((isset($_GET['utm_source'])) ? $_GET['utm_source'] : '')?>" />
                                        <input type="text" name="utm_medium" hidden value="<?=((isset($_GET['utm_medium'])) ? $_GET['utm_medium'] : '')?>" />
                                        <input type="text" name="utm_term" hidden value="<?=((isset($_GET['utm_term'])) ? $_GET['utm_term'] : '')?>" />
                                        <input type="text" name="utm_content" hidden value="<?=((isset($_GET['utm_content'])) ? $_GET['utm_content'] : '')?>" />
                                        <input type="text" name="utm_campaign" hidden value="<?=((isset($_GET['utm_campaign'])) ? $_GET['utm_campaign'] : '')?>" />
                                        <input type="text" name="ip" hidden value="<?=$_SERVER['REMOTE_ADDR']?>"/>
                                        <input type="text" name="timezone" hidden class="timezoneInput" value="Europe/Riga"/>
                                        <input type="text" name="goods[goodID]" hidden value="103675"/>
                                        <input type="text" name="goods[quantity]" hidden value="1"/>
                                        <input type="text" name="goods[price]" hidden value="1"/>
                                        <input type="text" name="referer" hidden value=""/>
                                        <input type="text" name="additional4" hidden value="Landing"/>
                                        
                                <div class="button_submit">
                                    <button class="submit_form" type="submit">
                                        <span>Jetzt bestellen</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="wrapper">
            <div class="footer_image"><img src="img\logo.png" alt=""></div>
            <div class="container">
                <p>Beim klicken “Bestellen” stimmen Sie der Verarbeitung der Personendaten zu</p>
            </div>
        </div>
    </footer>

    <div class="fixed_upsell">
        <div class="upsell_wrapper">
            <div class="price_container">
                <div class="old_price"><span class="price_land_s4 wv_old-price"><?=($_SESSION['price']*2)?></span> <span class="price_land_curr wv_currency">Euro</span>
                </div>
                <div class="price"><span class="price_land_s1 wv_new-price"><?=$_SESSION['price']?></span> <span class="price_land_curr wv_currency">Euro</span></div>
            </div>
            <div class="product_discount_mobile">
                -<span class="price_land_discount wv_currency">50</span><span>%</span>
            </div>
            <div class="product_discount"><i>Bis zu </i><span class="price_land_discount wv_currency">50</span><span class="procent"> % <span> Rabatt</span></span><span class="transform">!</span></div>
            <div class="timer2"><span>Angebotsdauer läuft ab</span><strong class="is-countdown" id="timer2"></strong>
            </div>
            <div class="cart_button"><a href="#form">Jetzt
                bestellen</a></div>
        </div>
    </div>
</div>




</body>
</html>
