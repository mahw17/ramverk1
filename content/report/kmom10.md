---
title: "Redovisning | Kmom10"

views:
    intro:
        region: subintro
        template: mahw17/intro/subintro
        data:
            intro_mount: Redovisning
            intro_path: KMOM10
---
Redovisning kmom10
=========================

###Krav 1, 2, 3: Grunden
Jag har valt att göra forumet 'Allt-Om-Vältar'.

Vilken besökare som helst har möjlighet att se samtliga frågor, svar och kommentarer men för att kunna
skriva egna inlägg krävs det att besökaren skapat ett eget konto och loggat in.

Applikationens meny har 5 val:

* **Hem** - Första sida som visar de tre senaste frågorna, de tre taggarna med flest underliggande frågor samt vilka användare som är mest aktiva.
* **Frågor** - Listar alla ställda frågor och vem som ställt frågan.
* **Taggar** - Samlar alla taggar och dess underliggande frågor på en sida.
* **Om** - Allmän sida om skaparen av applikationen, teknisk uppbyggnad av webbplatsen och länk till applikationens GitHub sida.
* **Användare** - Där besökaren kan se samtliga användare, skapa konto, logga in på konto, logga ut på konto eller uppdatera sitt egna konto.

Det finns två vyer för att visa unika objekt.
Dels en för en unik fråga där vyn samlar ihop information om frågan och eventuella svar/kommentarer.
Det finns också en vy som samlar ihop information om vilka frågor och svar en användare har genererat.

Applikationen finns som ett eget repo på GitHub och är kopplad till Travis och Scrutinizer.

###Krav 5: Användare (optionell)
Som extrauppgift har jag lagt till en ranking på användaren.

Rankingen handlar om hur aktiv användaren är på sidan och får poäng enligt:

* 3 rankingpoäng per svar
* 2 rankingpoäng för ställd fråga
* 1 rankingpoäng för en kommentar

###Allmänt stycke om projektet
Jag har mycket lättare att jobba med ett projekt om jag ser en egen nytta med och tyvärr gjorde
jag inte det med detta projekt. Ville av den anledning bara stöka av det och börja med förberedelserna
till det kommande exjobbet. Började därför direkt att koda och tänkte att det inte skulle vara speciellt svårt
att fixa grundläggande kraven.. men där hade jag lite fel. Många saker hänger ihop med varandra och det var lite svårt
att vet i vilken ände man skulle börja.

Därför backade jag några steg och började med penna och papper rita upp de olika vyerna och dess förhållande till varandra.
Sedan byggde jag upp vyerna och använde hårdkodad data i exemplen.

Först därefter började jag med själva logiken och databaserna och bytte kontinuerligt ut min hårdkodade data till den dynamiska datan.

Men som sagt inget projekt som jag brann speciellt mycket för och jag tyckte det var lite enformigt med all formulär och formulärhantering.
Det tog betydligt längre tid än jag trodde trots att jag inte direkt fastnade i något specifik problem särskilt länge. Men det var ju inte supersvårt att klara de grundläggande kraven i alla fall. Hoppas jag ;-)

###Allmänt stycke om kursen
Känns bra att jag mer och mer börja förstå hur en applikation kan/bör byggas upp i sin helhet. Att med hjälp av en moduler eller ett ramverk skapa en struktur där var sak har sin plats och där var sak kan ha sina egna tester. Detta känns proffsigt.

I kursen har vi pratat om olika koncept eller designmönster som ger den övergripande strukturen på applikationen. Därefter har vi skapat egna 'frikopplade' moduler som stödjer strukturen vi valt. Vi har också använt ramverkstjänster i vår applikation för att dels få ett standardiserat arbetssätt men även gör att vi använder oss av beprövad redan testad kod.

Mitt exjobb kommer till stor del handla om att gör en en grund till en webapplikation där de viktigaste aspekterna är att ha en kodbas som är lätt att underhålla och lätt att bygga ut och det känns som jag kommer ha stor nytta av det jag har lärt mig i just denna kurs.

Något jag tycker är lite synd är att vi i de inledande kursmomenten la mycket krut på enhetstest men när vi skulle validera packeten i Travis/Scrutinizer fick jag lov att ta bort de flesta befintliga testerna då jag inte kunde köra tester som krävde åtkomst till databasen. Så där finns det en förbättringspotential som jag ser det, även projektuppgiften skulle nog vara något bredare så det är lite lättare att välja något som passar studenten bättre.

Jag ger kursen betyg 8/10 främst att det känns som vi tog ett stort steg mot hur det görs i verkligheten och skulle således rekommendera kursen för andra.
