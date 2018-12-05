---
title: "Redovisning | Kmom05"

views:
    intro:
        region: subintro
        template: mahw17/intro/subintro
        data:
            intro_mount: Redovisning
            intro_path: KMOM05
---
Redovisning kmom05
=========================


###Berätta om arbetet med din CI-kedja, vilka verktyg valde du och hur gick det att integrera med dem?
Jag har valt att integrera Travis och Scrutinizer. Det har inte gått så smidigt denna gången utan jag har lagt den mesta tiden
på att att försöka kryptera och dekryptera mina API-nycklar i Travis utan att ha lyckats. Detta har varit fruktansvärt
frustrerande.

Efter kommunicerat med mos på chatten gjorde jag om de enhetstest som krävde API-nycklar och kunde på så
sätt få byggnationen att fungera. Istället för att få ett verkligt svar från API-tjänsterna använde jag mig av att dessa
returnerar null när en giltig API-nyckel saknas.

Om jag bara tänkt på detta från början hade det varit ett väldigt enkelt kursmoment, men som det blev nu la jag nog
ändå mina 20timmar på det.

(När jag upptäckte att Laravel körde circleCI testade jag även denna tjänst, tycker dock den är väldigt lik
Travis i och med att den främst förmedlar att byggnationen gått bra.)

###Vilken extern tjänst uppskattade du mest, eller har du förslag på ytterligare externa tjänster att använda?
Det känns ju som att Scrutinizer ger mig mest feedback och är den jag uppskattade mest.

Travis kör visserligen mina enhetstest och validerar att allt har gått bra men förutom detta får jag inte ut så mycket av det.
Scrutinizer däremot visualiserar min kodtäckning samt listar olika brister och graderar dem.

###Vilken kodkvalitet säger verktygen i din CI-kedja att du har, håller du med?
Travis ger mig egentligen bar ett okej att min kod validerat och säger inte så mycket mer än det.

Scrutinizer ger mig betyget 9.82, vilket egentligen får mig att undra hur den beräknar detta värde.
Tror ju inte min kod är speciellt bra med tanke på att jag ser mig själv som en nybörjare på området
med en icke så optimerad kod.

Att få till en hög kodtäckning är ju relativt lätt, i och med problemen med API-nycklarna gick den dock
ner från 100% till 95%. Sedan vet jag inte vad mätetalet säger om kvaliten på koden egentligen.

###Gjorde du några förbättringar på din modul i detta kmom, isåfall vad?
Ja, några mindre justeringar gjorde jag baserat på rapporten från Scrutinizer.

En del handlade om att jag angett felaktig typ på inkommande parametrar och på det retunerade datan.

###Vilket ramverk undersökte du och hur hanterar det ramverket sin CI-kedja, vilka verktyg används?
Jag har återigen kollat på Laravel och dess dokumentation av [CI](https://laravel.com/docs/5.7/dusk#continuous-integration).

För hela testförfarande hänvisas man till en egen modul [Laravel Dusk](https://laravel.com/docs/5.7/dusk) dock verkar
detta innefatta 'Browser testing'. Förutom detta finns information att [PHPUnit](https://laravel.com/docs/5.7/testing) installeras med Laravel och dess konfigurationsfil, phpunit.xml,
inkluderas automatiskt när ramverket installeras. Via dusk kan dock CI-tjänsterna Travis, Heroku, Codeship och CircleCI användas för att köra och analysera testerna/koden.

###Fann du någon nivå på kodtäckning och kodkvalitet för ramverket och dess moduler?
På Travis CI hittade jag [laravel](https://travis-ci.org/laravel) kan inte säga att alla deras paket valideras via Travis men en hel del i alla fall..

På circleCI hittade jag inte att några 'verkliga' paket validerades däremot fanns det en laravel [demosida](https://circleci.com/gh/CircleCI-Public/circleci-demo-php-laravel).

###Vilken är din TIL för detta kmom?
Att inte försöka få in 'hemlig' information i Travis!

Sedan visste jag inte att dessa CI-tjänster
existerade innan detta kursmoment och ser absolut fördelen med att ha dessa integrerade i mitt
uppdateringsflöde.
