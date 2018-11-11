---
title: "Redovisning | Kmom01"

views:
    intro:
        region: subintro
        template: mahw17/intro/subintro
        data:
            intro_mount: Redovisning
            intro_path: KMOM01
---
Redovisning kmom01
=========================

###Gör din egen kunskapsinventering baserat på PHP The Right Way, berätta om dina styrkor och svagheter som du vill förstärka under det kommande året.
De flesta av rubrikerna har jag iaf hört talas om och det känns ju skönt. De ämnesområde som är helt obekant för mig är Virtualization och Caching,
sedan finns det underområden som även är okända, till exempel PHEAR och PaaS.

Det område jag känner mig mest bekväm inom är databashanteringen. I övrigt känner jag ett behov att utöka mina kunskaper inom samtliga områden.

Efter årskurs två skulle jag vilja känna att jag vet hur en professionell webbplats är uppbyggd. Då tänker jag mig att det är viktigt att fördjupa sig
speciellt inom ramverksprogrammeringen, objektprogrammeringen, pakethantering och 'dependency injection'. Modulerna med felhantering, säkerhet, testning
och dokumentation känns också så om en naturlig del i en professionell webbplats.

Jag skulle egentligen även vilja lära mig mer inom själva infrastrukturen, hur hänger vanligtvis utvecklingsmiljö och produktionsmiljö ihop. Hur är en typisk
infrastruktur uppbyggd?

###Vilket blev resultatet från din mini-undersökning om vilka ramverk som för närvarande är mest populära inom PHP (ange källa var du fann informationen)?
I denna uppgift granskade jag sedan tidigare gjorde undersökningar från [Coderseye](https://coderseye.com/best-php-frameworks-for-web-developers/),
[Amarinfotech](https://www.amarinfotech.com/best-php-frameworks-list.html) samt [ValueCoders](https://www.valuecoders.com/blog/technology-and-apps/top-popular-php-frameworks-web-dev/).

Samtliga undersökningar var eniga i att Laravel var det enskilt största PHP-ramverket 2018. De två efterföljande var Symfony samt CodeIgniter, dessa
är i princip lika stora och växlade om att ha andra placeringen.

Laravels trendkurvan är den som lutar mest uppåt medan övrigas har planat ut. Varför just Laravel är så populärt kan jag tyvärr inte svara på men en kommentar
som är ofta återkommande är att det finns ett högt säkerhetstänkande i Laravel som inte är lika omfattande i övriga ramverk. Sedan kan jag även tänka mig
att utvecklare väljer det för stunden mest populära ramverket.


###Berätta om din syn/erfarenhet generellt kring communities och specifikt communities inom opensource och programmeringsdomänen.
Min egna erfarenhet av communities är att man emellanåt kommer i kontakt med dessa då man letar efter svar till ett aktuellt
problem man står inför. Jag är aldrig aktiv i dessa grupper eller försöker hjälpa andra i nöd, jag skriver heller aldrig egna inlägg
eller frågor utan söker enbart efter redan ställda frågot med svar.

Dock anser jag det är imponerande att människor är villiga att lägga så mycket tid på att dels hjälpa varandra och även all tid
på att vidareutveckla antingen programmeringspråken i sig (PHP community) men även i alla opensource projekt som finns.


###Vad tror du om begreppet “en ramverkslös värld” som framfördes i videon?
Så som jag förstod det är idén att istället för att installera ett komplett ramverk enbart ladda hem de erfoderliga moduler
som utvecklaren har behov utav. Ur optimeringssynpunkt
(storleksmässigt och hastighetsmässigt) måste detta sättet vara att föredra.

Nackdelen som jag ser det är dels att veta vilka moduler som finns tillgängliga och till vilket ändamål. Det andra är strukturen på
webbplatsen, installeras en helt ramverk, antar jag, att strukturen, det vill säga hur de olika delarna organiseras, kommer per automatik.
Detta borde underlätta för andra utvecklare att förstå vart saker och ting är placerade.

###Hur gick det att komma igång med din redovisa-sida?
Jag har lagt extremt mycket tid på att integrera en extern designmall in i ramverket, denna krävde en helt annan layout än den som finns
tillgänglig i grundutförandet av Anax. Detta tog betydligt längre tid än jag beräknat men å andra sidan känns det som jag
har fått en bra första introduktion hur de berörda moduler fungerar och interagerar med varandra. Fick även hämta upp två klasser från Content-modulen
och modifiera dessa för att få navbaren att bli aktiverad samt att få sidomenyn i verktygsavsnittet att fungera.

###Några funderingar kring arbetet med din kontroller?
Hängde till en början inte med på hur jag skulle injecta DI in i mina kontrollerklasser. Men till slut förstod jag
att routern hjälpte mig med detta i samband med att ramverket bootstrapades. De klasser som jag sedan hade lagt bredvid
kontrollerklassen fick istället manuellt inject DI i samband med använding. Allt detta var väldigt konfunderande i början
och det tog lång tid att förstå,

###Vilken är din TIL för detta kmom?
Användande av kontrollerklasser och ramverkstjänster har jag visserligen kommit i kontakt med i föregående kurs 'OOPHP',
men jag känner ändå att jag i detta inledande kursmoment fått en helt annan insikt och det är jätteroligt!
