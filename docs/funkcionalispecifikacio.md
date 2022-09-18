# Funkcionális specifikáció


## 6. Használati esetek
	A rendszerben csak és kizárólag a cég dolgozói léphetnek be.  Az egyszerű felhasználók nem hozhatnak létre új munkákat, csak és kizárólag módosíthatják a munkák állapotát. Az ADMIN felhasználó az egyszerű alkalmazottak jogain felül új munkákat tudd felvenni a rendszerben és törölni tudd már meglévő munkákat. Az ADMIN felhasználó feladata a rendszer tökéletes működése, illetve az elvégzendő munkák folyamatos dokumentálása a rendszerben. Az ADMIN felhasználónak hozzá kell férnie az összes felhasználó adataihoz, illetve képesnek kell lennie az adatok módosítására, úgymint jelszó, felhasználónév. Ezen felül az új munkatársak felvételét a rendszerbe, illetve a munkatársak törlését a rendszerből is az ADMIN felhasználónak kell végezni. Továbbá üzeneteket képes küldeni minden felhasználónak.

## 7. Megfeleltetés
Reszponzív webdízáj a szoftvernek ki kell elégítenie a következő pontokat mobilon is elérhetőnek és használhatónak kell lennie, ezen felül letisztultnak és mindenki számára érthetőnek kell lennie.  A szoftvernek alacsony tárhely igényűnek kell lennie, illetve alacsony hardware igényűnek. Az új munkalisták felvétele az ADMIN felhasználónak is egyszerűnek és gyorsan kivitelezhetőnek kell lennie. A munkalapok státuszának irányítása egyszerű legyen. A szoftver könnyen legyen kezelhető és tanulható mindenki számára.

## 8. Képernyőterv
    Az alábbi képeken a képernyő kinézetének a vázát láthatjuk.
![](index.png)
![](login.png)
![](main.png)


## 9.  Forgatókönyv
Szereplők: Futási időben egy ADMIN felhasználó, illetve több egyszerű nem ADMIN felhasználó (munkatársak) használja a rendszert. Az szoftver kezdőlapján semmi lényeges nem történik, innen tovább ugarhatunk a bejelentkezési oldalra ahonnan vissza tudunk ugrani a kezdőlapra vagy bejelentkezhetünk. Regisztráció külön nincs lehetőségünk, mivel ezt az ADMIN felhasználó intézi minden új munkatárs esetén. Bejelentkezés után új munkalistákat csak az ADMIN felhasználó tud létrehozni, viszont szerkeszteni bármelyik felhasználó tudja a munkákat, ez azt jelenti, hogy a munkák státuszát tudják változtatni. Minden oldalról visszatudunk lépni a kezdőlapra, illetve a bejelentkezési képernyőre. 
