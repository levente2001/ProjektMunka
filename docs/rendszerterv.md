## Rendszerterv

1. #### A rendszer célja
    Az informatikai rendszerünk célja, hogy a felhasználó, a korábbi megoldásokkal ellentétben, sokkal könnyebben végezze el a munkafolyamatok vezetését. A **Yoshihiro kft.** hagyományos biciklik elektromos biciklivé való átalakításával foglalkozik. A cégnél dolgozó munkatársaknak szüksége van egy bárhonnan elérhető weboldalra, amelyen a munka folyamatokat vezetni tudják, illetve az adott munkafolyamatok állapotát tudják szerkeszteni és új munkafolyamatokat létrehozni a rendszerben. Fontos szempont, hogy a kezelőfelület egyszerű, letisztult legyen. A webes alkalmazásban egyféle szerepkör van, a feladat amire hivatott nem igényel bonyolultabb rétegeket. A felület elérhető minden eszközről, ami képes internet elérésre. Az adatokat amikre szükség van az alkalmazáshoz, a felhasználó eszközén tároljuk.

2. #### Projektterv
    **Projektszerepkörök, felelőségek:**

        Scrum master: Nekem Mindegy csapata

        Product owner: Nekem Mindegy csapata

    **Projektmunkások és felelőségek:**

        Backend munkálatok, Frontend munkálatok: Nekem mindegy csapata

        Feladatuk, a fronted igényes és felhasználóbarát megalkotása, valamint a rendszer funkcióinak létrehozása, és a webes felület zökkenőmentes működésének biztosítása.

    **Ütemterv:**


    |**Funkció / Story**|**Feladat / Task**|
    | :- | :- |
    |Követelmény specifikáció|<p>köv.spec. elkészítése</p><p></p>|
    |Funkcionális specifikáció|funkc.spec elkészítése|
    |Rendszerterv|rendszerterv írása|
    |Funkciók létrehozása|Működőképessé tenni a frontend felületet|
    |Kezelőfelölet Design|Felhasználó barát felület|


3. #### Üzleti folyamatok modellje
    #### Az alábbi modellen, azt láthatjuk ahogyan a működési folyamatok zajlanak a bicikli szervízben. A szervizes kollega kezeli a munkafolyamatok jelenlegi állapotát. A folyamatok nyomon követhetőek a többi munkatárs számára is.
![](model.png)

4. #### Funkcionális Követelmények
        - Munkafolyamatok tárolása
        - Munkafolyamatok állapotának vezetése
        - Webes felületen való elérés mobil és tablet eszközön.

    Nem funkcionális követelmények:

        - A program nem tárol semmilyen felhasználói adatot, csupán a munkafolyamatok állapotát és nevét.


5. #### Funkcionális terv
    #### **Rendszerszereplők**:   Szervizes munkatárs
    **Rendszerhasználati esetek:**

    Szervizes kollega:

        1. Feljegyezheti a legújabb munkafolyamatot a listára
        2. nyomon követheti a munkafolyamatokat
        3. módosíthat a munkafolyamatok jelenlegi állapotán
        4. törölhet munkafolyamatokat


    **Menü-hierarchiák:**

        1. Főmenü
        2. Új munkafolyamat feljegyzése
        3. munkafolyamat stádiumának módosítása
        4. munkafolyamatok listája
        5. munkafolyamat törlése

