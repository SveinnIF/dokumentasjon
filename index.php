<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Documentation for Group 1.</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta name="theme-color" content="#fafafa">

  
<style>
  body{
    margin-left: 15%;
    border: solid gray;
    width: 70%;
  }
  img {
  border: 2px solid #555;
}

  p{
    text-align: justify;
    font-size: large;
    font-family: "Times New Roman";
    margin: 2%;
    color: black;

  }
  h2, h3, h4{
    margin-left: 5%;

  }

  h1{
    text-align: center;


  }
  html {
    color: #222;
    font-size: 1em;
    line-height: 1.4;
  }

  ::-moz-selection {
    background: #b3d4fc;
    text-shadow: none;
  }

  ::selection {
    background: #b3d4fc;
    text-shadow: none;
  }


  hr { 
  display: block;
  margin-top: 0.5em;
  margin-bottom: 0.5em;
  margin-left: auto;
  margin-right: auto;
  border-style: inset;
  border-width: 2px;
} 

</style>
</head>

<body>

  <h1>
    Documentation for Group 1.
  </h1>
  <h2>
    Contact information:
  </h2>
  <p>1- Sveinn Frimannsson:            sveinnif@hiof.no</p>
  <p>3- Fryderyk Andrzej Roszuk:       fryderyk.a.roszuk@hiof.no</p>
  <p>4- Abdulgadir Abdiwali Faarah:    abdulgadir.a.faarah@hiof.no</p>
  <p>5- Stian Michael Magnussen:       stianmag@hiof.no</p>
  
  <h2>How the website was made:</h2>
  <p>* We started with aquiering approval to fork an existing open source project that had some of the basic functionality needed to make the website work.</p>
  <p>* Source code can be found here: <a href='https://github.com/SveinnIF/User-Management-PHP-MYSQL' > GitHub page.</a></p>
  <p>* The server was set up in a similar manor as the <a href='https://www.cloudbooklet.com/how-to-install-lamp-apache-mysql-php-in-ubuntu-20-04/' > LAMP server tutorial</a> though with a few modifications and additions.</p>
  
  <h3>The forgotten password system:</h3>
  <p> It asks for forgotten password if the lecturer has written the wrong
    password once, the lecturer is then prompted to input their mail address after
    which they will get a mail with a custom link that takes them to the reset page where they can input a new password.</p>
  
  <h3>Api system</h3>
  <p>APi stand for Application programming Interface, it's engine under the hood.
    it's what others can't see on front-end. It takes the request and tell the system
    what you want to do and then return the response back to you. The api was created to show information of
    registered student in the course as json file in the back-end. You must write specific student Id number to get full info.
    Id must be written as integer otherwise will not get write info. </p>
  <p>* Api source code can be found here: <a href='https://github.com/SveinnIF/User-Management-PHP-MYSQL' > GitHub page.</a></p>
 
  <h3>Anonymous feedback to lecturer:</h3>
  <p> If a student wishes to send a message to a lecturer but doesn???t want to show his name, he can do so by ticking a box that makes him anonymous by hiding his name from the lecturer.  This is achieved by using the students ID that was assigned to him when he registered his account. </p>

  <p> The code is a simple if statement that checks if the box is ticked or not and it either assigns the students name or ID based on the condition. </p> 
  

  <h1>Steg 2</h1>

<h3>Risk Management Framework</h3>
<p>En RMF er et rammeverk som hjelper ?? holde oversikt over "alle" sikkerhetsutofrdinger, hvordan de kan oppst??, mulige l??sninger og hvor alvorlig de er.</p>
<img src="images/RMF.JPG" alt="Risk Management Framework" style="width:985px;height:292px;">>

<hr>

<h3>Sikkerhetskrav</h3>
<p>Under har vi skrevet noen sikkerhetskrav til systemet, merk at ikke alle disse er implementert. </p>
<h4>Ikke funksjonelle sikkerhetskrav</h4>
<ul>
<li>N??r en bruker registrer seg, m?? input data valideres/sjekkes</li>
<ul>
  <li>Ikke la brukeren skrive ugyldig tegn</li>
  <li>Er bilde gyldig format </li>
  <li>Er e-posten en reel e-post</li>
  <li>Fjerne tegn som ikke er lovlig/skumle</li>
</ul>
<li>N??r en bruker skriver en melding, m?? dataen bli validert/sjekket</li>
<ul>
  <li>Ikke noen ugyldig/skumle tegn </li>
  <li>Spesialtegn m?? ??escapes?? </li>
  <li>Maks antall tegn  	</li>
</ul>
<li>Om en foresp??rsel til serveren tar mer enn 1 minutt, avslutt forbindelsen.</li>
<li>Applikasjonen skal bruke ??bcrypt?? metoden for hashing av passord</li>
<li>Hver bruker skal ha et tilfeldig generert og unikt nummer knyttet til seg. </li>
<li>Systemet/Applikasjonen skal ikke noe default passord (admin/passord)</li>
</ul>

<h4>Funksjonelle sikkerhetskrav</h4>
<h5>Foreleser</h5>
<ul>
<li>Foreleser m?? v??re logget inn for ?? lese meldinger fra student. </li>
<li>Foreleser m?? v??re logget inn for ?? svare p?? meldinger fra student. </li>
<li>For at foreleser skal bytte passord m?? ha kjenne til det gamle passordet. </li>
<li>Ved glemt passord m?? foreleser oppgi sin e-post adresse. </li>
<h5>Student</h5>
<li>Student m?? v??re logget inn for ?? sende meldinger til foreleser. </li>
<li>Student m?? v??re logget inn for ?? lese meldinger fra foreleser. </li>
<h5>Gjest</h5>
<li>Gjesten m?? skrive inn et firesifret emne kode for ?? se meldinger og svar for valgt emne. </li>
<li>Gjesten m?? skrive inn et firesifret emne kode for ?? gi svar p?? meldinger fra studenter.</li>
</ul>

<hr>

<h3>Abuse cases </h3>
<p><i>Merk at ikke alle disse er implementert.</i></p>
<ul>
<li>En angriper benytter seg av brute force for ?? finne riktig emne kode og for tilgang til alle kommentarer.</li>
<li>Angriperen f??r tak i kildekoden og finner svakheter i systemet. </li>
<li>En angriper automatiserer registrering av bruker, ved ?? fylle opp databasen gj??r han systemet tregt/ubrukelig (Dos)</li>
<li>En angriper ??injecter?? kode p?? nettsiden (XSS), f??r tak i din sesjons id som han benytter for ?? logge seg in som ??deg?? </li>
<li>En angriper sletter ??bruker?? tabellen i databasen ved bruk av SQL injection. </li>
<li>En bruker misbruker API-et og henter ut mer informasjon en han egentlig skal ha tilgang til. </li>
<li>En angriper benytter seg av verkt??y som henter ut opplysninger om serveren, s?? bruker han den informasjonen for ?? finne svakheter. </li>
<li>Brute forcing SSH passord, SSH er nesten alltid p?? port 22 og det er mange automatiske verkt??y som sikter seg inn p?? dette.</li>
</ul>

<hr>

<h3>Code review </h3>
<p>Code review ble gjort kontinuerlig med PHP Intelephense i Visual Studio Code og manuelt med PHPStan.</p>
<p>Det ble funnet 7 error med PHPStan p?? level 0.</p>
<img src="images/codeReview1.JPG" alt="Inputvalidering av bilde" style="max-width: 80%;">
<p>De errorene ble fikset.</p>
<img src="images/codeReview2.jpg" alt="Inputvalidering av bilde" style="max-width: 80%;">
<p>Kj??rte deretter level 9 og fant 160 error, men flertallet var ??Variable $dbh might not be defined.?? og mange error med if-statements. </p>
<p>$dbh variabelen blir definert i config-filen, s?? det var ikke et problem. Variabler i andre lignende errorer blir definert i isset GET funksjoner.</p>
<p>If-statement errorene handlet alltid om at ??noe?? is always true, som ikke stemmer. </p>
<p>Errorer man ikke forsto seg p?? og ikke fikk fikset var ??Variable $studentId in isset() always exists and is not nullable.?? og ??Parameter #1 $name of function setcookie expects string, string|false given.??.</p>
<p>Resten av errorene handlet om at htmlentities ble brukt for INT verdier og ble fikset.</p>
<p>Ble til slutt 154 errorer, der 149 handlet om if-statements og variabler som kanskje ikke er definert.</p>


<hr>

<h3>Risikoanalyse av arkitekturen</h3>
<ol>
<li>Hva skal ikke skje?</li>
<li>Hvordan kan det skje?</li>
<li>Har det blitt hindret det?</li>
<li>Om ikke, hvordan hindrer vi det?</li>
<li>Rapportere funn</li>
</ol>
<p>Sikkerhetskravene, abuse cases og RMF-en forteller oss om ting vi vil at ikke skal skje i prosjektet, alts?? mulig angrep eller misbruk av systemet. Disse fortelle ogs?? hvordan mulig angrep kan se ut. </p>
<p>I kapitlet ??Endringer?? g??r vi over hvordan vi har hindret prosjektet med tanke p?? noen av disse sikkerhetsutfordringene, i tillegg til angrepene andre gruppene gjorde mot oss</p>

<hr>

<h3>Risk based security test </h3>
<p>Under har vi utf??rt noen tester basert p?? sikkerhetskrav og abuse cases. Disse gjorde vi manuelt, og gjennom ??GUI??. Til vanlig ville disse bli gjort med programmer som for eksempel PHPUnit, men dette hadde vi ikke tid til ?? l??re.  </p>
<p>P?? bildet under kan man se at jeg pr??vde ?? laste opp et .bin fil. Inputvalideringen sjekket filtypen og mottok ikke filen, da denne m?? v??re en JPG-fil. </p>
<img src="images/inputvalidering bilde.JPG" alt="Inputvalidering av bilde" style="max-width: 80%;">
<p>Bildet under viser et fors??k p?? SQL-injection, inputvalidering gj??r at fors??ket mislykkes. </p>
<img src="images/inputvalidering SQL injection.JPG" alt="Inputvalidering SQL" style="max-width: 80%;">
<p>Fors??k p?? XSS, ikke mulig ?? injecte kode p?? grunn av validering. </p>
<img src="images/inputvalidering melding XSS.JPG" alt="Inputvalidering SQL" style="max-width: 80%;">


<hr>

<h3>Endringer (sikkerhet)</h3>

<h4>Lagrede prosedyrer</h4>
<p>For de fleste sp??rringene i koden ble det lagd lagrede prosedyrer. 
Det var noen steder det oppsto problemer som gjorde at funksjonene p?? nettsiden ikke fungerte, s?? det mangler noen steder. For eksempel s?? mangler det ??n lagret prosedyre p?? alle change-password sidene.
</p>
<p>Lagrede prosedyrer ble hovedsakelig lagt til for ?? forhindre SQL-injections.</p>
<p>Prepared statements var allerede lagt til fra steg 1, s?? det er n?? stored procedures + prepared statements.</p>

<h4>Inputvalidering</h4>
<p>Det ble laget inputvalidering ved bruk av RegEX alle steder der det blir gjort input.
Sider der det er mer enn ??n input ble det kodet slik at for hver riktig input blir det lagt til f.eks. ??Name?? til en variabel ved riktig bruk av tegn for navn. Denne variabelen blir sjekket om den er fullstendig, alts?? at alle inputs er riktige med en if-test, bare om if-testen er true, sendes informasjonen til databasen.
</p>

<h4>Ett svar per melding</h4>
<p>Dette skulle egentlig blitt gjort i steg 1, men vi fant ikke en l??sning p?? det, men vi kom frem til en l??sning n??.</p>
<p>Det ble lagt til en ny kolonne i tabellen ??feedback?? som ble kalt ??answered??, med verdien 0 eller 1 og som bare kan inneholde ett tall, INT(1).</p>
<p>ID-en p?? den feedback-meldingen det blir trykka reply p?? blir sendt med lenken og s?? GET-a p?? sendreply-siden. </p>
<p>N??r forelesern trykker send, s?? blir ??answered??-verdien p?? den feedback-meldingen med den GET-a ID-en oppdatert til 1.</p>
<p>Da forsvinner reply knappen p?? den meldingen ved bruk av en if-test p?? feedback-lecturers siden som sjekker verdien p?? ??answered??, reply-knappen blir bare vist om verdien er 0. </p>

<h4>Passord</h4>
<p>I starten av prosjektet var passordene hashet med md5. Dette gjorde det enkelt ?? knekke passordene dersom de kom p?? avveie. For ?? gj??re systemet sikrere droppet vi ??md5?? for ??bcrypt??. Dette er en sikrere hashing algoritme ettersom det ogs?? inkluderer et ??salt??. Dette er en tilfeldig verdi som blir generert n??r passordet blir kryptert for f??rste gang, denne verdien blir da lagt sammen med hashen. 
<br>
For ?? f?? til dette brukte vi ??password_hash()?? funksjonen som finnes i PHP, denne generer hashen og saltet samtidig. For ?? verifisere passordene brukte vi funksjonen ??password_verify()??
</p>

<h4>StudentID</h4>
<p>Under registrering blir hver student tildelt et unikt nummer (en ID), da vi f??rst startet prosjektet var dette nummeret tildelt av databasen (auto increment). Dette skapte fort sikkerhetsproblemer ettersom for hver ny student var nummeret bare ??kt med 1. StudentID var alts?? et l??penummer.   Dette gjorde det alts?? mulig for potensielle angripere ?? hente ut data om alle studenter ved ?? ??kj??re?? gjennom alle nummerene. 
<br>
For ?? l??se dette benyttet vi oss av PHP funksjonen ??uniqid()?? som oppretter en unik ID basert p?? tiden n??r ID-en blir opprettet. 
</p>

<h4>Logging </h4>
<p>Ved hjelp av Monolog og graylogger har vi lagt til logging p?? serveren. I de forskjellige filene har vi skrevet enkle logg meldinger som forteller for eksempel om noen har opprettet en bruker eller byttet passord</p>

<hr>
<h3>MySQL</h3>
<p>Vi utf??rte MySQL secure installation, det er et script som kommer med mysql for ?? gj??re den sikrere, f??rst setter vi at vi skal ha sterke passord ogs?? bytter vi passord. Deretter fjerner vi den annonyme brukeren, fjerner testdatabasen og reloader privliges tab. </p>

<hr>
<h3>Server Konfigurasjon</h3>
<p>Dette er det som ble gjort i apache config filen, er mye forskjellige greier og alt ble puttet p?? samme config fil for ?? spare tid
Er selvf??lgelig mye mer som kunne bli gjort her, men dette var noe av det vi oppfattet som mest kritisk.
</p>


<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>#gj&oslash;r at serveren blir behandlet som om den er i produksjon, alts&aring; ikke en test server.</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>ServerTokens Prod</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>ServerSignature Off</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>FileETag None</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>TraceEnable off</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>Header edit Set-Cookie ^(.*)$ $1;HttpOnly;Secure</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>Header always append X-Frame-Options SAMEORIGIN</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>Header set X-XSS-Protection &quot;1; mode=block&quot;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>Header set Content-Security-Policy &quot;default-src&apos;self&apos;;&quot;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>Header set X-content-type-options &quot;nosniff&quot;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>#Header set X-Permitted-Cross-Domain-Policiesmaster-only;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>Header set Referrer-Policy &apos;strict-origin&apos;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>Header set feature-policy &quot;autoplay&apos;none&apos;; camera&apos;none&apos;&quot;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span><br><span style='font-family:"Times New Roman",serif;'>#Denne fikk vi ikke til &aring; fungere av en eller annen grunn, men meningen med denne er &aring; gj&oslash;re at gamle http protokoller ikke kan bli brukt</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>#RewriteEngine On</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>#RewriteCond %{THE_REQUEST} !HTTP/1.1$</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>#RewriteRule .*-[F]</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&lt;Directory /var/www/&gt;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; Options -Indexes -ExecCGI -FollowSymLinks</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; AllowOverride None</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; Require all granted</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &lt;LimitExcept GET POST HEAD&gt;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; deny from all</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &lt;/LimitExcept&gt;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&lt;/Directory&gt;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>#denne delen ble ikke skrevet inn i config filen men passer best her fordi under er HTTPS koden</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>sudo openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/testserver-selfsigned.key -out /etc/ssl/certs/testserver-selfsigned.crt&nbsp;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp;#dette blir puttet i conf filen, denne sier at serfiktatene som ble skrevet med koden over skal bli brukt som basis for HTTPS.</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&lt;VirtualHost *:443&gt;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>SSLEngine on</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>SSLCertificateFile &quot;/etc/ssl/certs/testserver-selfsigned.crt&quot;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>SSLCertificateKeyFile &quot;/etc/ssl/private/testserver-selfsigned.key&quot;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>ServerAdmin sveinnif@hiof.no</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>158.39.188.201</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>DocumentRoot /var/www/html</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>ErrorLog ${APACHE_LOG_DIR}/error.log</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>CustomLog ${APACHE_LOG_DIR}/access.log combined</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&lt;/VirtualHost&gt;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp;#denne sier at all HTTP-trafikk skal bli redirected til HTTPS-trafikk</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&lt;VirtualHost *:80&gt;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>Redirect permanent / https://158.39.188.201/</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>ServerName 158.39.188.201</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>DocumentRoot &quot;/var/www/html&quot;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&lt;/VirtualHost&gt;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>#for at ingen kommer inn p&aring; noe som har en . forran, som for eksempel .git</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&lt;Directorymatch &quot;^/.*/\.&quot;&gt;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp; &nbsp;Order &apos;deny,allow&apos;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp; &nbsp;Deny from all</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&lt;/Directorymatch&gt;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>#gj&oslash;r at json filer ikke er tilgjenelige gjennom serveren, dette kan skape problemer senere hvis det er &oslash;nskelig at denne funktionaliteten skal v&aelig;re p&aring; plass.</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&lt;Directorymatch &quot;^/.*/*.json&quot;&gt;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp; &nbsp;Order &apos;deny,allow&apos;</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&nbsp; &nbsp;Deny from all</span></p>
<p style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;line-height:150%;font-size:15px;font-family:"Calibri",sans-serif;'><span style='font-family:"Times New Roman",serif;'>&lt;/Directorymatch&gt;</span></p>

<hr>
<h3>Det vi ikke rakk ?? gj??re</h3>
<p>Lage ett nytt API med JWT. 
API er jo det hackere sikter seg mest inn p?? og vi vet at det er lett ?? bruke v??rt API til ?? skrape til seg all bruker info ved ?? iterere gjennom alle bruker ID-er.
Vi var i gang med ?? lage ett JWT system men droppet det n??r vi fant ut at vi ikke klarte ?? lage det samtidig med ?? f?? nettsiden til ?? fungere.
</p>
<p>Sette opp flere config filer for apache.</p>
<p>Konfigurere PHP</p>
<p>Som for eksempel denne statuskoden: header("HTTP/1.0 404 Not Found");</p>
<p>Sette flere security headers</p>
<p>Kunne ha satt opp Content-Security-Policy, den bringer mye konfigurasjon.</p>
<p>Siden nettsiden ikke trenger ?? bli brukt i noen iframes kunne denne funktionaliteten bli skrudd av. Da hadde det ikke v??rt n??dvendig ?? tenke p?? sandboxing eller lignende.</p>
<p>Burde kanskje sette phpsessionid cookie til samesite=strickt med tankte p?? at google vil bytte default.</p>
<p>Siden er fortsatt litt s??rbar for XSS og CSRF.</p>
<p>Tokens kunne bli brukt til ?? midigere CSRF, hvis vi hadde tid hadde vi laget et JWT system.</p>
<p>Tabnabbing er fortsatt fult mulig.</p>
<p>Multi-factor-authentication er noe som stopper veldig mange angrep som vi ikke har tid til ?? implemintere, ikke spesielt vanskelig, bare composer inn fra v??r gode venn PHPGansta.</p>



</body>

</html>
