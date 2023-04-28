# Projecte 9: ZPhisher + Google Sign In HTML Template
### Autors: Ferran Garcia, Adrià Manero, Sergi Giribet, Gerard Loriz
---
## INDEX

- [ABOUT](adri.md#about)
- [EXPLICACIÓ TECNICA](adri.md#explicació-tecnica)
- [PARAULES CLAU](adri.md#paraules-clau)
- [REQUISITS PREVIS](adri.md#requisits-previs)
- [EL NOSTRE SET-UP](adri.md#el-nostre-set-up)
- [TUTORIAL INSTAL·LACIÓ](adri.md#tutorial-installació)
- [VIDEO EXEMPLE](adri.md#video-exemple)
- [DISCLAIMER](adri.md#disclaimer)

---

## ABOUT

L’objectiu d’aquest projecte es comprometre la seguretat d’alguns comptes de correus corporatius dels alumnes de l’escola Ginebró a través d’un atac de phishing simulant una enquesta per un treball de recerca.

La finalitat d'això es mostrar que en qualsevol sistema, el punt més feble es el factor humà. En el mon de la ciberseguretat es necessita ser un expert en molts camps tècnics, però també és molt important entendre i “resoldre” a les persones. Això ho podem fer a traves de l'enginyeria social i la psicologia. 

Aquests son alguns dels conceptes i skills que volem ensenyar als professors en aquest projecte.

---
## ![Logo zphisher](./media/zphisher.png)
---



## EXPLICACIÓ TECNICA

El atac de phishing que volem realitzar es basa en enviar un correu a les nostres víctimes on els hi demanem si podem omplir una enquesta de Google per el nostre treball de recerca. En el mateix correu estarà adjunt el link a aquesta enquesta, quan la víctima accedeix al link será dirigida a una pantalla on li demana que es registri amb el seu compte de Google, introduint així el seu correu i la contrasenya. Un cop ho fà automaticament es redirigit a una enquesta sobre la seguretat informatica en el dia a dia de les persones. En aquest punt nosaltres hem obtingut el correu i la contrasenya d'accés al compte de correu del alumne. El que ha succeït es el següent:

Primer de tot nosaltres (els atacants) tenim montat un servidor local en una Raspberry Pi amb Zphisher instal·lat. Hem modificat els arxius interns del programa per poder utilizar la nostre propia plantilla per realitzar el phishing. Aquesta plantilla l'hem dissenyat previament amb HTML, CSS, JS i PHP per que sigui el més similar al Sign In de Google. Al iniciar el programa, aquest ens demana quina plantilla volem utilitzar i quin servidor de sortida volem utilitzar. Aquí és on cloudflare entra en joc. Aquesta eina el que fa es crear un servidor a internet temporal amb un pont al nostre servidor local, això el que fa és que qualsevol persona desde qualsevol lloc pot accedir al nostre servidor, on la plantilla està allotjada.

Zphisher junt amb cloudflare ens permet crear un link amb un text personalitzat (enmascarem el link original) per que sigui el més similar al que sería un link de Sign In de Google.

Un cop aquest link esta generat només ens queda esperar a que alguna victima caigui en el phishing. Aquí és quan enviem aquest link adjunt al correu abans mencionat. A partir d’aquest moment el programa registra la IP de qualsevol dispositiu que accedeixi al link. I si la victima introdueix les seves dades, aquestes s’envien mitjançant el mètode POST de PHP a un arxiu .txt al servidor. 

Tant les IP’s com les dades de les víctimes es guarden el arxius amb extensió .dat (referint-se a que son datos) i es mostren per pantalla, en qüestió de segons.

--- 

## PARAULES CLAU

|Tecnologia|Descripció|Links|
|----|----|----|
|Zphisher|Zphisher és una eina de phishing de codi obert que es pot utilitzar per realitzar atacs de phishing. Amb Zphisher, els usuaris poden crear plantilles personalitzades de phishing i enviar-les a les seves víctimes a través de correu electrònic o altres canals de comunicació. Quan les víctimes segueixen el link del correu electrònic i entren les seves dades en la pàgina de phishing, Zphisher registra aquestes dades i les envia a l'atacant.|https://github.com/htr-tech/zphisher|
|HTML|HTML és l'acrònim de HyperText Markup Language, i és el llenguatge estàndard per a la creació de pàgines web. Es tracta d'un llenguatge de marcatge que permet als desenvolupadors web estructurar i formatar el contingut d'una pàgina web mitjançant etiquetes i atributs. HTML serveix per crear pàgines web amb diferents elements, com text, imatges, enllaços, vídeos, formularis, taules, entre d'altres. A través d'HTML, els desenvolupadors poden estructurar el contingut de les pàgines web perquè sigui coherent i fàcil de llegir pels usuaris.|https://developer.mozilla.org/es/docs/Web/HTML|
|CSS|CSS (Cascading Style Sheets) és un llenguatge de disseny utilitzat per als llocs web. CSS serveix per a definir l'aparença i la disposició dels elements d'una pàgina web, com ara colors, fonts, mides, espais, efectes i posicions. Mitjançant CSS, els desenvolupadors web poden separar la presentació del contingut de la pàgina, per així obtenir un disseny més net i mantenible. CSS també permet als desenvolupadors aplicar estils de forma consistents a través de múltiples pàgines web, i adaptar el disseny per a diferents dispositius i resolucions d' pantalla.|https://developer.mozilla.org/es/docs/Web/CSS|
|JavaScript|JavaScript és un llenguatge de programació de scripts que s'executa al costat del codi HTML i CSS en una pàgina web. Amb JavaScript, els desenvolupadors poden crear efectes interactius i dinàmics en les pàgines web, com ara animacions, formularis interactius, efectes de transició, efectes de paral·laxi i molts altres. A més, JavaScript permet als desenvolupadors accedir als elements de la pàgina web i manipular-los, com ara canviar el contingut, estils i comportaments, i també permet la comunicació amb servidors per a actualitzar la pàgina sense necessitat de refrescar-la.|https://developer.mozilla.org/es/docs/Web/JavaScript|
|PHP|PHP és un llenguatge de programació del costat del servidor, utilitzat per crear aplicacions web dinàmiques i interactives. Amb PHP, els desenvolupadors poden generar contingut personalitzat basat en les dades dels usuaris i interactuar amb les bases de dades per a crear llocs web més dinàmics i interactius. A més, PHP es pot integrar amb HTML, CSS i altres tecnologies web per a crear pàgines web de manera eficient i escalable. Així mateix, PHP és un llenguatge de codi obert, el que significa que és gratuït i hi ha una gran quantitat de comunitat i recursos disponibles per a ajudar als desenvolupadors a aprendre i resoldre problemes.|https://www.php.net/manual/es/intro-whatis.php|
|BASH|Bash és un intèrpret de comandes o shell que s'utilitza en sistemes operatius UNIX i similars. És un llenguatge de programació de scripts que s'utilitza per a automatitzar tasques en el sistema operatiu i per a la gestió de fitxers i processos en la línia de comandes. Bash també és utilitzat per a la programació de tasques d'administració de sistemes i per a la creació de scripts d'instal·lació de software. A més, Bash és un llenguatge de codi obert i està disponible en la majoria dels sistemes operatius, la qual cosa el fa molt versàtil i ampliament utilitzat en entorns de desenvolupament i administració de sistemes.|https://www.gnu.org/software/bash/|
|CloudFlare|Cloudflare és una plataforma de serveis de CDN (Content Delivery Network), seguretat web i DNS (Domain Name System) que proporciona una gran varietat d'eines per a la millora del rendiment i la seguretat del lloc web. Cloudflare ofereix als desenvolupadors web una xarxa global de servidors que permeten la distribució de contingut de manera més ràpida i eficient, reduint el temps de càrrega de la pàgina i millorant l'experiència de l'usuari final. A més, Cloudflare també proporciona funcions de seguretat web, com ara protecció DDoS, filtres de spam i seguretat DNS per prevenir atacs cibernètics i altres amenaces a la seguretat del lloc web. En general, Cloudflare ajuda a millorar el rendiment i la seguretat del lloc web, cosa que pot resultar en una millora de la reputació en línia, la visibilitat i el tràfic web.|https://www.cloudflare.com/es-es/|
|Mètode Post|El mètode POST és un dels dos mètodes principals que PHP utilitza per enviar i rebre dades a través d'un formulari HTML. Amb el mètode POST, les dades s'envien al servidor de manera que no són visibles a la barra d'adreces del navegador. Els formularis que utilitzen el mètode POST són útils per enviar informació sensible, com ara contrasenyes o dades bancàries, ja que les dades no es mostren a la URL i, per tant, són menys exposades a possibles atacs maliciosos.|https://www.ediciones-eni.com/open/mediabook.aspx?idR=5d0125b40185394961e43668f8a17235|
|Raspberry Pi|Raspberry Pi és un petit ordinador de placa única que es pot utilitzar per a diversos propòsits, des de projectes educatius fins a aplicacions domèstiques i industrials. És una plataforma de codi obert i de baix cost que està dissenyada per ser programable i personalitzable segons les necessitats de l'usuari. Les Raspberry Pi són populars perquè ofereixen una gran varietat de funcionalitats i són accessibles per a persones amb diferents nivells d'experiència en informàtica.|https://www.raspberrypi.com/|
|Node.js|Node.js és un entorn d'execució de codi obert i multiplataforma que permet als desenvolupadors d'aplicacions web utilitzar JavaScript tant en el costat del client com en el del servidor. Això significa que els desenvolupadors poden utilitzar les mateixes habilitats de programació per crear tant la part del client com la del servidor d'una aplicació web. Node.js també ofereix un model d'entrada/sortida no bloquejant que el fa ideal per a aplicacions web en temps real que han de gestionar molts clients al mateix temps.|https://nodejs.org/es/about|

---

## REQUISITS PREVIS

Els requisits per executar aquest projecte son els següents:

- Algun SO compatible amb Node.js i que estigui basat en Linux
- Node.js: versió 10.0 o superior
- Navegador web: Qualsevol navegador amb sortida a internet.
- Servidor: Qualsevol dispositiu electronic. PC, Laptop, Raspberry Pi, etc…
- Coneixements bàsics sobre: HTML, CSS, JS i scripting en BASH.

---

## EL NOSTRE SET-UP 

El nostre Setup es una Raspberry Pi 4 Model B amb el Raspberry Pi OS (Que està basat en debian) amb els programes necessaris per fer la instal·lació: Git, Nano, Curl, etc…)

---

## TUTORIAL INSTAL·LACIÓ

---

## VIDEO EXEMPLE

![Video exemple](./media/exemplemp4.mp4)

---

## DISCLAIMER

El software de phishing és una eina que simula pàgines web legítimes per obtenir informació personal dels usuaris. Malgrat això, els creadors afirmen que la seva intenció no és perjudicar els usuaris, sinó per demostrar la vulnerabilitat de les pàgines web i promoure la seguretat informàtica.
El projecte ha estat desenvolupat amb l'objectiu de proporcionar als estudiants i als professionals de la seguretat informàtica una eina per comprendre les vulnerabilitats dels sistemes informàtics i les tècniques que poden utilitzar els hackers per accedir a informació confidencial.
No ens fem responsables del posibles usos inadequats que se li puguin donar a aquesta eina.

![Rickroll](./media/roll.gif)

---





