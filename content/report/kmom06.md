---
title: "Redovisning | Kmom06"

views:
    intro:
        region: subintro
        template: mahw17/intro/subintro
        data:
            intro_mount: Redovisning
            intro_path: KMOM06
---
Redovisning kmom06
=========================


###Hur är din syn på modulen anax/htmlform och det koncept som modulen försöker lösa?
I större projekt ser jag fördelen med att ha mallar för att skapa olika typer av formulär.
Det skapar ett standardiserat arbetssätt.

###Kan du hitta liknande lösningar när du tittar på andra ramverk?
Jag har även i detta kursmoment valt att kolla på Laravel. Det finns ett paket [html](https://packagist.org/packages/laravelcollective/html) som till
och med Laravel version 4.x har varit en del i 'grundversionen' av Laravel, dock har man i senare versioner valt att bryta ut detta och hantera
paketet separat. [Why are Form and HTML helpers deprecated in Laravel 5.x?](https://stackoverflow.com/questions/35695949/why-are-form-and-html-helpers-deprecated-in-laravel-5-x)

Anledning är om jag förstått det hela rätt har utvecklarna vill hålla ramverket så lätt som möjligt.

Verkar som om modulen kan hjälpa oss att skapa olika html-objekt kopplade till formulär. Dock kan jag inte hitta att det skulle
finnas kompletta mallar på formulär så som login formuläret i anax/htmlform.

###Berätta om din syn på Active record och liknande upplägg, ser du fördelar och nackdelar?
Absolut ser jag fördelar med detta, det blir ett standardiserat arbetssätt gentemot databaserna.
Arbetsättet borde bli mer och mer intressant ju fler utvecklare som jobbar i samma projekt eller
där många databastabeller nyttjas.

Jag håller med mos att nackdelen är ju att vi kommer längre och längre bort från 'grundkoden', dvs
sql-skripten i och med dessa extra lager. Varje ramverk har ju sitt unika lager så arbetssättet blir ju inte så
standardiserat om man ska jobba mot olika ramverk.

###När du undersökte andra ramverk, fann du motsvarigheter till Active Record och hur såg de ut?
Laravel har en komponent, [eloquent](https://laravel.com/docs/5.7/eloquent), som funktionsmässigt
verkar likna Anaxs motsvarigheter, dvs ett annat standardiserat gränssnitt mot databaserna.

Dock är ju själva syntaxen olik Anax och inte helt lätt att förstå,

###Vad tror du om begreppet scaffolding, ser du för- och nackdelar med konceptet?
Som jag uppfattar scaffolding är det ett script som kopierar erfoderliga filer för att kunna integrera en färdig modul.
I detta kursmoment var det även en input när vi scaffoldade Book och User klasserna där vi angav namespace och klassnamn, med denna information
uppdaterades även filerna iom scaffoldingen.

###Hittade du motsvarighet till scaffolding i andra ramverk du tittade på?
Det var svårt att hitta information om scaffolding i Laravel. Det som finns handlar om [frontend scaffolding](https://laravel.com/docs/5.7/frontend#introduction).
Detta verkar handla mest om att implementera designelement från Bootstrap och Vue.

Kanske används ett annat begrepp, till exempel finns det ett kommando 'make' i laravels cli 'artisan' ([instruktionsvideo](https://laracasts.com/lessons/faster-workflow-with-generators)).
Som hjälper dig att skapa kontrollers, databasrelaterade funktioner (migration) osv.

###Hur kan man jobba med enhetstestning när man scaffoldat fram en CRUD likt Book, vill du utvecklar några tankar kring det?
Om man inte gör några ändringar som bör påverka funktionaliteten känns det ju onödigt att skriva egna tester på scaffoldad kod.
En av anledningarna till att scaffolda måste ju vara att koden man importerar är av bra kvalitet. Om man däremot till exempel
utökar befintliga klassmetoder måste ju rimligtvis nya tester skrivas för just dessa.

###Vilken är din TIL för detta kmom?
Just ORM-delen att kunna hantera databasfrågor som ett object med metoder verkar vara väldigt smidigt arbetssätt.
