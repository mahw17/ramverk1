---
title: "Redovisning | Kmom02"

views:
    intro:
        region: subintro
        template: mahw17/intro/subintro
        data:
            intro_mount: Redovisning
            intro_path: KMOM02
---
Redovisning kmom02
=========================

###Vilka tidigare erfarenheter har du av MVC? Använde du någon speciell källa för att läsa på om MVC? Kan du med egna ord förklara någon fördel med kontroller/modell-begreppet, så som du ser på det?
Jag har inga programmeringserfarenheter av MVC. Har dock en gammal ASP.NET bok i bokhyllan där om jag inte  missminner mig begreppet MVC avhandlades.

De artiklar jag läst om MVC är de som var länkade i kursmomentets beskrivning.

Jag  kan väl egentligen bara hålla med om det de fördelar som nämns i artiklarna, separation av kod efter funktion skapar en tydlighet, möjlighet att jobba parallellt och vissa delar (främst modellagret antar jag) blir fristående från den övriga applikationen och på så sätt lättare att återanvända.

###Kom du fram till vad begreppet SOLID innebar och vilka källor använde du? Kan du förklara SOLID på ett par rader med dina egna ord?
Jag har läst igenom de artiklar som det hänvisats till i kursmomement. Som jag uppfattat SOLID är det ett samlingsnamn för fem rikttlinjer inom objektorienterad programmering:

S =>    Klassen ska enbart ha ett syfte.
O =>    Klassen skall kunna kompletteras genom arv men ej ändras.
L =>    Applikationer skall kunna ersätta ett objekt av en viss klass med en underklass utan påverkan.
I =>    Tydliga/avgränsade gränssnitt mot klassen istället för stora omfattande,
D =>    Klasser ska i största mån vara oberoende av andra klasser, eventuella beroende ska hanteras på en  högre nivå och inte inom klassen (t.ex i kontrollern)

###Har du någon erfarenhet av designmönster och kan du nämna och kort förklara några designmönster du hört talas om?
Nej, jag har ingen tidigare erfarenhet av designmönster inom mjukvaruutveckling. Men jag tolkar det så som att det finns en dokumenterad mall hur applikationerna skall vara uppbyggda som sedan skall följas.

När jag tittar på föreläsningen så uppfattar jag att MVC är ett designmönster och det verkar rimligt i och med att det är ett visst upplägg som skall följas. Dock när jag läser den hänvisade Wikipedia artiklen om designmönster nämns inte MVC som ett designmönster utan ett arkitektmönster.

Men i vilket fall, de ända andra designmönster jag har hört talas om är de Mikael pratade om på föreläsningar som alla utom ett var varianter av MVC. Dessa var HMVC som hade en mer hierakisk uppbyggnad, MVA samt MVP. PAC som också nämdes var ett CMS (content management system) mönster.

###Vilket ramverk valde du att studera manualen för och fann du något intressant?
Jag valde att kika lite mer på Laravel av den anledningen att det för tillfället är det mest populära ramverket inom PHP.

Det jag reagerade på var att 'upplägget' MVC inte syntes tydligare i mappstrukturen. Finns till exempel en data och en storage mapp för vad jag antar datalagring. Vad kontrollerna ska ligga var inte heller så tydligt.

Hade inte heller föreställt mig att det var en egen variant av PHP, Blade, med en mängd förkortningar av diverse kommandon som till stora delar användes inom ramverket.

Ett eget kommandradsverktyg Artisan användes också i hög utsträckning för alla möjliga ändamål, så som att automatskapa CRUD-routes till exempel.

Just detta med Blade och Artisan gjorde att jag kände att tröskeln in i ramverksvärlden blev betydligt högre än vad jag tidigare hade trott.

###Vilken är din TIL för detta kmom?
MVC vilket jag visserligen tidigare hört talas om tidigare men aldrig riktigt förstått vad det inneburit har börjat klarna något. Men jag som nybörjare tycker det är jättebra ha få en mall att följa.
