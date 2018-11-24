---
title: "Redovisning | Kmom03"

views:
    intro:
        region: subintro
        template: mahw17/intro/subintro
        data:
            intro_mount: Redovisning
            intro_path: KMOM03
---
Redovisning kmom03
=========================


###Hur känns det att jobba med begreppen kring $di?
Detta börjar kännas helt okej. För mig handlar det mest om en variabel som samlar ihop
ramverketstjänster och gör de mer lättillgängliga var jag än befinner mig.

Lazy loading gör ju också att det känns med bekvämt att 'förbereda' tjänster i $di
utan att man belastar systemet i onödan då tjänsterna inte initieras förrän ett verkligt behov finns.

Förstår dock att initiering av alla tjänster som 'hålls' av $di även 'bygger upp' webbplatsen
så egentligen är väl begreppen $di mer än bara en service container.

###Ge din egna korta förklaring, ett kort stycke, om dependency injection, service locator och lazy loading. Berätta gärna vilka källor du använde för att lära dig om begreppen.
När det gäller dependency injection handlar det, så som jag förstår det, om att undvika att bygga in beroenden till andra resurser. Istället skall dessa beroende injeceras in i klassen antingen vid initieringen alternativt via en separat setup- eller konfigurationsfunktion.

Just 'service locator' har jag lite svårt att greppa men om jag ska försöka förklara det handlar det om att en klass har ett beroende till en resurs. När klassen har ett behov av resursen går man alltid via 'servie locator' och 'ber' om resursen. 'Service locatorn' har således till uppgift att hålla redan på vart alla resuser finns.

Gällande lazy loading är det som jag skrev tidigare ett sätt att informera $di att en tjänst finns tillgänglig och om den behövs även hur tjänsten skall initieras.

Jag har hämtat all information utifrån de artiklar som är länkade i kursmomentet.

###Berätta hur andra ramverk (minst 1) använder sig av koncept som liknar $di. Liknar det “vårt” sätt?
Jag har kollat på Laravel. Principerna är väl föga förvånade desamma, däremot skiljer det ju en del hur tjänsterna läggs till i 'service providern'.

I dokumenationen beskrivs olika typer av ['bindings'](https://laravel.com/docs/5.7/container#binding) för att koppla på tjänserna.

* Simple Bindings       => Normal koppling
* Binding A Singleton   => En ny unik instans kopplas
* Binding Instances     => En befintlig instans kopplas
* Binding Primitives    => En kopplad klass som ej klarar sig med beroende utan behöver faktiskt värden för att instansieras.

Det finns även färdiga metoder som kan kopplas på dina klasser (antar som interface/trait) för att integrera $di och på så sätt få åtkomst till samtliga ramverkstjänster. Detta är ju samma tillvägagångssätt som vi har i Anax-ramverket.


###Berätta lite om hur du löste uppgiften, till exempel vilka klasser du gjorde, om du gjorde refaktoring på äldre klasser och vad du valde att lägga i $di.
Jag hade i föregående kursmoment lagt in klassen Ip i $di, denna klassen kompletterade jag även med en funktion som validerade lägeskoordinater som hämtas baserat på inmatad ip-adress. Jag kompletterade även ramverketstjänster med Weather-klassen som hämtar antingen prognosdata eller väderhistorik baserat på lägeskoordinater samt en metod för att validera lägeskoordinater.

Det finns även en IpController- och WeatherControllerklass som jag inte valt att lägga in i ramverkets tjänster. Meningen med dessa är ju 'bara' att de ska samla ihop information från diverse resuser och retunera ett svar. Ip- och Weatherklasserna däremot ska kunna användas av exempelvis flera controllers (och gör så redan då även json-controller använder sig av klasserna) och då känns det mer meningsfullt att lägga in dem i $di.

Jag gjorde även en separat curl-klass som jag inte har lagt upp i $di, men som kanske borde ligga där då den är relativt frekvent använd.

Tidigare har jag använt mig utan file_get_contents för API-anropen men i samband med att jag ville göra parallella anrop för att hämta väderhistoriken gick jag över till curl då jag kan använda mig utav metoden curl_multi_add_handle. Detta var den ändå refaktoring jag gjorde på befintlig kod.


###Har du någon reflektion kring hur det är att jobba med externa tjänster (ipvalidering, kartor, väder)?
Väldigt enkelt att få det att fungera. Nu har vi ju bara använt GET och hämtat värden men om jag inte missminner mig från webapp-kursen så var inte det heller speciellt svårt att använda POST/DELETE för att editera data..

Det blir väldigt 'rena' och tydliga gränssnitt mot datan med hjälp av API:n. Hur är det i professionella webbapplikationer separerar man 'ofta' modellagret (backend) mot den övriga webbapplikationen med ett API även fast man kontrollerar datan på båda sidorna?   

Jag märker dock att jag måste bli bättre på javascript då jag har en del problem med att få igång de få funktioner jag använder.

###Vilken är din TIL för detta kmom?
Jag har fått en bättre förståelse för $di och hur tjänster integreras in i denna.
