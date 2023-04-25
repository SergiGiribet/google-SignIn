# PROPOSTA INICIAL

## Proposta Projecte 9: Ensenya als profes

Bones, seríem l'Adriá Manero, el Gerard Loriz, en Sergi Giribet i jo, Ferran Garcia, i el nostre projecte es basarà en simular (de manera controlada) un atac de phishing a través de Black Eye, aquest atac de phishing estarà darrere d'un inici de sessió de Google fals creat per nosaltres amb HTML, CSS i JS molt semblant i pràcticament idèntic a l'inici de sessió original. Aquest inici de "sessió de Google" serà necessari per a poder accedir a un formulari de Google, com si fos un treball de recerca, és a dir, que l'usuari es pensarà que per a accedir al formulari haurà d'iniciar sessió, i el que realment fará será enviar-nos al nostre servidor Debian el text que ha introduït en format Excel.

IMPORTANT: Tot aquest procés s'anirà redactant i el resultat final será de manera educativa i sense cap tipus d’intenció que posi en problemes la seguretat i privacitat de ningú.

---

Zphisher, és una eina actualitzada de ShellPhish la qual ens permet fer treballs de Pentesting relacionats a enginyeria social. És una eina de pesca phishing molt completa.

Aquest servidor de phishing estarà allotjat dintre d'una raspberry pi, és a dir, necessitarem alguna manera de poder muntar un servidor dins d'aquesta. El mètode que hem triat ha sigut Ngrok, ja que ens permet fer un pont entre la raspberry pi i internet.


| Contenido | Descripción | Última modificación |
| --------- | ----------- | -------------------|
| Zphisher | Zphisher es una herramienta de phishing automatizada basada en la línea de comandos. Permite a los atacantes crear sitios web de phishing para robar credenciales de inicio de sesión. | 25/04/2023 |
| Plantillas HTML | Las plantillas HTML son archivos predefinidos que contienen el código HTML básico necesario para crear un sitio web. Los usuarios pueden personalizar estas plantillas para adaptarlas a sus necesidades específicas. | 20/05/2023 |
| CSS | CSS (Cascading Style Sheets) es un lenguaje utilizado para describir la presentación visual de un documento HTML o XML. Permite a los usuarios personalizar la apariencia de los elementos de una página web, como el color, la fuente y el tamaño. | 20/05/2023 |
| JavaScript de Google | El JavaScript de Google es un conjunto de herramientas y tecnologías utilizadas para crear aplicaciones web. Permite a los desarrolladores crear aplicaciones web altamente interactivas y dinámicas mediante la manipulación del contenido HTML y CSS en tiempo real. | 20/05/2023 |

| Integrants del grup | Rol |
| --------- | --------- |
| Adria Manero | Idea I desenvolupament  |
| Ferran Garcia | Plantilles css i Html |
| Gerard Loriz | Raspberry pi i programació del servidor |
| Sergi Giribet | Plantilles Css, Html i php |
