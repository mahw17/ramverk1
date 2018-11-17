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


##API syntax



För resultatset i JSON-struktur
```text
GET /json/{function}/<value>
```


###IP

Du kan testa att validera en IP och returnera svaret i en JSON-struktur

```text
GET /json/ip/194.103.20.10
```

[Testa IP-adress '194.103.20.10'](json/ip/194.103.20.10)


####Resultat

```json

{
    "data": {
        "ipAddress": "194.103.20.10",
        "valid": true,
        "ipType": "IPV4",
        "hostname": "www.kjell.com"
    },
    "info": {
        "ip": "194.103.20.10",
        "type": "ipv4",
        "continent_code": "EU",
        "continent_name": "Europe",
        "country_code": "SE",
        "country_name": "Sweden",
        "region_code": null,
        "region_name": null,
        "city": null,
        "zip": null,
        "latitude": 59.3247,
        "longitude": 18.056,
        "location": {
            "geoname_id": null,
            "capital": "Stockholm",
            "languages": [
                {
                    "code": "sv",
                    "name": "Swedish",
                    "native": "Svenska"
                }
            ],
            "country_flag": "http://assets.ipstack.com/flags/se.svg",
            "country_flag_emoji": "\ud83c\uddf8\ud83c\uddea",
            "country_flag_emoji_unicode": "U+1F1F8 U+1F1EA",
            "calling_code": "46",
            "is_eu": true
        }
    }
}
```
