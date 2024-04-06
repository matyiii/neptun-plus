# Követelmény specifikáció

## 1. Áttekintés
A projekt célja egy olyan rendszer megvalósítása, amely az adminisztrációs folyamatokat modernizálja. Funkciói jelenlét és hiányzás követés, érdemjegyek vezetése és tanulmányi átlagok automatikus kalkulációja.

## 2. A jelenlegi helyzet leírása
Jelenleg a jelenlét, hiányzás és érdemjegyek vezetése papír alapon történik, amely az intézmény részéről már nem tekinthető modern és elfogadott megoldásnak. Az intézmény elköteleződött a papírmentes jövő mellett, így minden papír alapon történő adatkezelést a digitális megoldásokra szeretné lecserélni.

## 3. Vágyálomrendszer
Egyszerű, könnyen kezelhető weboldal létrehozása, amely a jelenlegi papír alapú adminisztrációs folyamatot fogja leváltani. A felületet csak regisztrált személyek érhetik el.
A rendszer lehetőséget fog nyújtani a tanulók jelenlétének rögzítésére és hiányzások követésére is. Hiányzás esetén igazolások leadására szintén lehetőség lesz. Fontos funkció lesz még az érdemjegyek regisztrációja és a tanulmányi átlagok automatikus kalkulációja. Ebből következik, hogy tanegységek rögzítésére is alkalmas lesz a kész produktum.

## 4. Jelenlegi üzleti folyamatok modellje
- Hallgatók regisztrációja kurzusokra
- Órarend készítése
- Jegyek kiadása és kezelése

## 5. Igényelt üzleti folyamatok modellje
- Hallgatók regisztrációja kurzusokra
- Órarend készítése
- Jegyek kiadása és kezelése

## 6. Követelménylista
ID: K1  
Modul: Jogosultság  
Név: Bejelentkezési felület Leírás: E-mail és jelszó segítségével a felhasználó bejelentkezik

ID: K2
Modul: Jogosultság
Név: Jogosultsági szintek
Leírás: Admin: Felhasználók kezelése (létrehozás, törlés, jogosultságok módosítása)Rendszerbeállítások kezelése; Oktató: Érdemjegyek vezetése és jelenlétek vezetése; Jegyek és jelenléti riport megtekintése

ID: K3
Modul: Oktatói adminisztráció
Név: Érdemjegy rögzítés
Leírás: Az oktatók a diákokhoz tudnak rögzíteni érdemjegyeket

ID: K4
Modul: Oktatói adminisztráció
Név: Hiányzás rögzítés
Leírás: Az oktatók a diákokhoz tudnak rögzíteni jelenléti státuszt

ID: K5
Modul: Oktatói adminisztráció
Név: Hiányzás rögzítés
Leírás: Az oktatók a diákokhoz tudnak rögzíteni jelenléti státuszt

ID: K6
Modul: Hallgatói adminisztráció
Név: Igazolás leadás
Leírás: A hallgatók igazolást tudnak leadni

ID: K7
Modul: Riport
Név: Tanulmányi átlagok megtekintése
Leírás: A tanulmányi átlag megtekintésére ad lehetőséget

## 7. Fogalomtár
Authentikáció: Jogosultság ellenőrzés a rendszerhez való hozzáféréshez.

Regisztráció: A felhasználói fiók létrehozása (neptun kód, email, jelszó) alapján.

Bejelentkezés: A már regisztrált felhasználó beléphet a rendszerbe (neptun kód és jelszó).

Diák: Regisztrált felhasználó akinek a jogosultsága diákra lett állítva.

Oktató: Regisztrált felhasználó akinek a jogosultsága oktatóra lett állítva.

Hiányzások rögzítése: A tanuló vagy oktató rögzíti a hiányzást egy adott óráról.

Hiányzások igazolása: Az oktató  igazolja a tanuló hiányzásait.

Jegy: Adott órához tartozó adott diáknak az értékelései, oktató által kerül rögzítésre.

Jelenlét nyilvántartás: Adott tárgy adott óráin mely diákok vettek illetve nem vettek részt, oktató rögzíti.

SQL: Adatbázisok kezelésére és lekérdezésére szolgál. Segítségével lehet adatokat beilleszteni, módosítani, lekérdezni és törölni.

PHP: Szerveroldali programozási nyelv, amelyet általában webes alkalmazások fejlesztésére használnak. PHP segítségével dinamikus webalkalmazásokat lehet készíteni, amelyek interaktívak és az adatbázisokkal is kommunikálhatnak.

Laravel: A Laravel egy nyílt forráskódú, PHP alapú webes alkalmazás-keretrendszer. Számos kényelmes funkciót és eszközt kínál, amelyek megkönnyítik a fejlesztők számára az új funkciók hozzáadását, az adatbázis-kezelést, a felhasználókezelést, a hibakezelést