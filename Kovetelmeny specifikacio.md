# Követelmény specifikáció

## 1. Áttekintés
A projekt célja egy olyan iskolai rendszer megvalósítása, amely az adminisztrációs folyamatokat modernizálja. Funkciói jelenlét és hiányzás követés, érdemjegyek vezetése és tanulmányi átlagok automatikus kalkulációja.

## 2. A jelenlegi helyzet leírása
Az iskola adminisztrációs folyamatai még papír alapon történnek, amely az intézmény részéről már nem tekinthető modern és elfogadott megoldásnak. Az intézmény elköteleződött a papírmentes jövő mellett, így minden papír alapon történő adatkezelést digitális megoldásokra szeretné lecserélni.

## 3. Vágyálomrendszer
Egyszerű, könnyen kezelhető weboldal létrehozása, amely a jelenlegi papír alapú adminisztrációs folyamatot fogja leváltani. A felületet csak regisztrált személyek érhetik el.
A rendszer lehetőséget fog nyújtani a tanulók jelenlétének rögzítésére és hiányzások követésére is. Hiányzás esetén igazolások leadására szintén lehetőség lesz. Fontos funkció lesz még az érdemjegyek rögzítése és a tanulmányi átlagok automatikus kalkulációja. Ebből következik, hogy tanegységek rögzítésére is alkalmas lesz a kész produktum.

## 4. Jelenlegi üzleti folyamatok modellje
Az intézmény a következő folyamatait szeretné lecserélni:
- Hallgatói regisztráció
- Kurzus regisztráció és órarend készítés
- Érdemjey rögzítés
- Jelenlétkövetés
- Hiányzások igazolásának tárolása

Ezek a folyamatok még papír alapon működnek. Már elavultnak számítanak és az intézménynek sok idejébe és energiájába telik, hogy ezeket megfelelően és kezeljék.

## 5. Igényelt üzleti folyamatok modellje

A 4. pontban már feltűntetet üzleti folyamatok maradnak, viszont ezeket digitális alapon működő megoldásra szeretné lecserélni.

Üzleti folyamatok:
- Hallgatói regisztráció
- Kurzus regisztráció és órarend készítés
- Érdemjey rögzítés
- Jelenlétkövetés
- Hiányzások igazolásának tárolása

Bejelentkezés után a felhasználó jogosultság alapján lesz képes elérni a különböző funkciókat, amelyre jogosult.


## 6. Követelménylista

| **ID** |        **Modul**        |               **Név**               |                                                                                                 **Leírás**                                                                                                |
|:------:|:-----------------------:|:-----------------------------------:|:---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------:|
| K1     | Regisztráció            | Regisztrációs felület               | A felhasználó e-mail és jelszó segítségével tud regisztrálni a rendszerbe                                                                                                                                 |
| K2     | Bejelentkezés           | Bejelentkezési felület              | A regisztrált felhasználó e-mail cím és jelszó segítségével tud bejelentkezni                                                                                                                             |
| K3     | Jogosultság             | Jogosultsági szintek                | Adminisztrátorok: - Felhasználók kezelése (létrehozás, törlés, módosítás)  Oktatók: - Érdemjegyek rögzítése - Jelenlét rögzítés  Hallgatók: - Jegyek, jelenléti riportok megtekintése                     |
| K4     | Rendszer adminisztráció | Felhasználók kezelése               | Admin jogosultsággal rendelkező felhasználók a következő funkciókat tudját megvalósítani: -Új felhasználók rögzítése -A már meglévő felhasználók adatainak módosítása -Meglévő felhasználó törlése        |
| K5     | Oktató                  | Érdemjegy rögzítés                  | Az oktatók képesek lesznek a tanulók érdemjegyeit rögzíteni a rendszerben. Érdemjegyek a következő értékek lehetnek: 1; 2; 3; 4; 5                                                                        |
| K6     | Oktató                  | Jelenlét rögzítés                   | Az oktatók a tanulók jelenléti státuszait fogják tudni rögzíteni.  Jelenléti státusz értékei: -Jelen volt: (Ha a tanuló az adott órán részt vett.) -Hiányzott: (Ha a tanuló nem vett részt az adott órán) |
| K7     | Hallgató                | Igazolás leadás                     | A hallgató igazolást fog tudni leadni azokra az órákra, amelyeken nem vett részt.                                                                                                                         |
| K8     | Riport                  | Érdemjegyek és átlagok megtekintése | Az érdemjegyeket és tanulmányi átlagokat tudja megtekinteni a felhasználó.                                                                                                                                |

## 7. Fogalomtár
Authentikáció: Jogosultság ellenőrzés a rendszerhez való hozzáféréshez.

Regisztráció: A felhasználói fiók létrehozása (neptun kód, email, jelszó) alapján.

Bejelentkezés: A már regisztrált felhasználó beléphet a rendszerbe (neptun kód és jelszó).

Diák: Regisztrált felhasználó akinek a jogosultsága diákra lett állítva.

Oktató: Regisztrált felhasználó akinek a jogosultsága oktatóra lett állítva.

Admin: Regisztrált felhasználó, akinek a jogosultsága adminra lett álltíva. Ezzel a jogosultsággal az összes funkciót eléri és módisításokat tud eszközölni.

Hiányzások rögzítése: A tanuló vagy oktató rögzíti a hiányzást egy adott óráról.

Hiányzások igazolása: Az oktató  igazolja a tanuló hiányzásait.

Érdemjegy: Adott órához tartozó adott diáknak az értékelései, oktató által kerül rögzítésre.

Jelenlét nyilvántartás: Adott tárgy adott óráin mely diákok vettek illetve nem vettek részt, oktató rögzíti.

SQL: Adatbázisok kezelésére és lekérdezésére szolgál. Segítségével lehet adatokat beilleszteni, módosítani, lekérdezni és törölni.

PHP: Szerveroldali programozási nyelv, amelyet általában webes alkalmazások fejlesztésére használnak. PHP segítségével dinamikus webalkalmazásokat lehet készíteni, amelyek interaktívak és az adatbázisokkal is kommunikálhatnak.

Laravel: A Laravel egy nyílt forráskódú, PHP alapú webes alkalmazás-keretrendszer. Számos kényelmes funkciót és eszközt kínál, amelyek megkönnyítik a fejlesztők számára az új funkciók hozzáadását, az adatbázis-kezelést, a felhasználókezelést, a hibakezelést