---
title: "Redovisning | Kmom04"

views:
    intro:
        region: subintro
        template: mahw17/intro/subintro
        data:
            intro_mount: Redovisning
            intro_path: KMOM04
---
Redovisning kmom04
=========================


###Hur gick arbetet med att lyfta ut koden ur redovisa-sidan och placera i en egen modul, några svårigheter, utmaningar eller annat värt att nämna?
Överlag var det lite krångligare än vad jag först trodde. Främst var det att få enhetstesterna att fungera i den egna modulen som tog mest tid att lösa, jag fick kontinuerligt
lägga till fler och fler anax-moduler till min test-$di och om modulerna inte fanns tillgänglig i anax-lite installationen fick jag hämta hem paket efter paket. Jag fixade ett paket och det resulterade i ett annat fel osv.. Med facit i hand skulle jag tagit den större anax installationen 'anax-ramverk1-me' direkt i min testmiljö men jag trodde att jag kunde minimera behovet av tjänster.

Det var i princip bara kontroller-klassen som var bökig att testa. En kontrollerklass (iaf min) blir ju rätt unik beroende på hur användaren vill använda modulen så egentligen
kanske bara kontrollen skulle erbjuda ett api och något exempel på annan tillämpning?

###Gick det bra att publicera på Packagist och ta emot uppdateringar från GitHub?
Detta gick jättelätt, följde anvisningarna och hade inga problem med att få det att fungera.

###Fungerade det smidigt att åter installera modulen i din redovisa-sida med composer, kunde du följa din egen installationsmanual?
Samma sak här, gick förvånansvärt smärtfritt.

###Hur väl lyckas du enhetstesta din modul och hur mycket kodtäckning fick du med?
När väl alla bekymmer med att kunna köra mina tester överhuvudtaget löst sig passerade alla testerna precis
som i tidigare kursmoment och jag nådde 100% kodtäckning.

###Några reflektioner över skillnaden med och utan modul?
Det känns skönt att verkligen separera sin kod och hålla isär de olika delarna.
Däremot tycker jag att en modul som inte är fristående känns lite meckig att underhålla, till exempel
krävs det att en stor utvecklingsmiljö installeras och hålls uppdaterad enbart för att kunna göra enhetstester.
Så jag hade nog bara gjort fristående paket om jag tänkt att modulen skulle spridas och användas i andra applikationer.

###Vilket ramverk undersökte du och hur hanterar det ramverket paketering, moduler och versionshantering?
Jag har återigen titta på Laravel och dess syn på [pakethantering](https://laravel.com/docs/5.7/packages#introduction). De hänvisar
till composer för att importera 'externa' paket så som vi har gjort i detta kursmoment. För Laravel specifika paket som hanterar till exempel
routes, kontrollers eller vyer hänvisar det till att dessa (så som även i Anax) bör läggas till i service containern.

Kan inte hitta någon officiell dokumentation om vilken 'standard' som är den rekommenderade versionshanteringen. Jag har dock kolla på några olika
repon som finns på GitHub under [laravel](https://github.com/laravel) och samtliga verkar följa den semantiska versionshanteringen.


###Vilken är din TIL för detta kmom?
Mycket bättre förståelse för vad composer är och hur det används, detta gör att jag även fått
en bättre förståelse för hur andra pakethanterare såsom npm fungerar.
