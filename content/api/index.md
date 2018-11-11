---
title: "API | Ramverk1"

views:
    intro:
        region: subintro
        template: mahw17/intro/subintro
        data:
            intro_mount: Ramverk1
            intro_path: API
---

API
===========================================


API syntax
-------------------------------------------


För resultatset i JSON-struktur
```text
GET /json/{function}/<value>
```


Testa
-------------------------------------------

Du kan testa att validera en IP och returnera svaret i en JSON-struktur

```text
GET /json/ip/194.103.20.10
```

[Testa IP-adress '194.103.20.10'](json/ip/194.103.20.10)


Resultat
-------------------------------------------

```json

{
    "data": {
        "ip": "194.103.20.10",
        "valid": true,
        "ip_type": "IPV4",
        "hostname": "www.kjell.com"
    }
}
```
