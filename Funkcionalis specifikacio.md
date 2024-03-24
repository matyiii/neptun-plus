# Neptun+ Funkcionális Specifikáció

## Bevezetés
A Neptun+ egy kiegészítő modul a meglévő Neptun tanulmányi rendszerhez, amely további funkciókat biztosít a hallgatók és az oktatók számára.

## Funkciók

### Jelenlét vezetés
A rendszer lehetővé teszi az oktatók számára, hogy nyomon kövessék a hallgatók jelenlétét az órákon. Az oktatók bejelölhetik a jelenlévő hallgatókat, és a rendszer automatikusan frissíti a jelenléti adatokat.

### Hiányzás követés
A rendszer nyomon követi a hallgatók hiányzásait, és lehetőséget biztosít a hiányzások igazolására. A hallgatók feltölthetik az igazolásokat, amelyeket az oktatók jóváhagyhatnak vagy elutasíthatnak.

### Átlagszámolás
A rendszer automatikusan kiszámítja a hallgatók átlagjegyét az összes rögzített jegy alapján. Az átlagjegyeket a hallgatók profilján jeleníti meg.

## Technológia
A Neptun+ PHP/Laravel keretrendszerben készül, MySQL adatbázis használatával. A rendszer biztonságos és skálázható, és integrálódik a meglévő Neptun rendszerrel.

## Felhasználói interakciók
A rendszer egyszerű és intuitív felhasználói felületet biztosít, amely lehetővé teszi a hallgatók és az oktatók számára, hogy könnyen hozzáférjenek és kezeljék a rendszer funkcióit.

## Rendszerkövetelmények
A rendszer működéséhez szükséges a PHP és a MySQL szerver, valamint a Laravel keretrendszer. A rendszer kompatibilis a legtöbb modern böngészővel, és optimalizált a mobil eszközök számára.


# Neptun+ Rendszer Architektúra

## Backend Architektúra

### Adatbázis
A rendszer MySQL adatbázist használ az adatok tárolására. Az adatbázisban tároljuk a hallgatók, oktatók, kurzusok, jegyek, jelenléti adatok és hiányzások adatait.

### Szerver
A rendszer PHP/Laravel keretrendszerben készül, amely biztosítja a backend logikát. A szerver fogadja a kliens kéréseit, feldolgozza azokat, és válaszol a kliensnek.

### API
A rendszer RESTful API-t használ a kliens és a szerver közötti kommunikációhoz. Az API-n keresztül a kliens lekérheti és módosíthatja az adatokat az adatbázisban.

## Frontend Architektúra

### Kliens
A kliens a felhasználói felület, amely lehetővé teszi a felhasználók számára, hogy interakcióba lépjenek a rendszerrel. A kliens kommunikál a szerverrel az API-n keresztül.

### Felhasználói felület
A felhasználói felület egyszerű és intuitív, és lehetővé teszi a felhasználók számára, hogy könnyen hozzáférjenek és kezeljék a rendszer funkcióit.

## Biztonság
A rendszer biztonsági intézkedéseket tartalmaz, mint például az adatok titkosítása, a hitelesítés és az engedélyezés, hogy megvédje a felhasználói adatokat és a rendszer integritását.


# Felhasználói Esetek

## Jelenlét vezetés
- **Oktató**: Bejelöli a jelenlévő hallgatókat az órán.
- **Hallgató**: Megtekintheti a jelenléti adatait.

## Hiányzás követés
- **Hallgató**: Feltölti a hiányzás igazolását.
- **Oktató**: Megtekinti és jóváhagyja vagy elutasítja a hiányzás igazolását.

## Átlagszámolás
- **Hallgató**: Megtekinti az átlagjegyét.


Hallgató: 
  |
  |---> Jelenlét megtekintése
  |
  |---> Hiányzás igazolás feltöltése
  |
  |---> Átlagjegy megtekintése

Oktató:
  |
  |---> Jelenlévő hallgatók bejelölése
  |
  |---> Hiányzás igazolás jóváhagyása/elutasítása
  

# Felhasználói Történetek

## Jelenlét vezetés
- **Oktató**: Mint oktató, szeretném bejelölni a jelenlévő hallgatókat az órán, hogy nyomon követhessem a hallgatók részvételét.

## Hiányzás követés
- **Hallgató**: Mint hallgató, szeretném feltölteni a hiányzásom igazolását, hogy igazoljam a hiányzásomat.
- **Oktató**: Mint oktató, szeretném megtekinteni és jóváhagyni vagy elutasítani a hallgatók hiányzás igazolásait, hogy ellenőrizhessem a hiányzásokat.

## Átlagszámolás
- **Hallgató**: Mint hallgató, szeretném megtekinteni az átlagjegyemet, hogy lássam a tanulmányi előrehaladásomat.


# Felhasználói Felület Tervek

## Főoldal
A főoldalon a hallgatók és az oktatók bejelentkezhetnek a rendszerbe. A bejelentkezés után a felhasználókat átirányítjuk a megfelelő kezdőlapra.

## Hallgatói Kezdőlap
A hallgatói kezdőlapon a hallgatók megtekinthetik a jelenléti adataikat, hiányzásaikat, jegyeiket és átlagjegyüket. Ezen az oldalon a hallgatók feltölthetik a hiányzás igazolásaikat is.

## Oktatói Kezdőlap
Az oktatói kezdőlapon az oktatók bejelölhetik a jelenlévő hallgatókat, megtekinthetik és jóváhagyhatják vagy elutasíthatják a hiányzás igazolásokat, és rögzíthetik a hallgatók jegyeit.

## Navigációs Menü
A navigációs menüben a felhasználók gyorsan hozzáférhetnek a rendszer különböző funkcióihoz. A navigációs menü tartalmazza a "Jelenlét", "Hiányzások", "Jegyek" és "Átlag" menüpontokat.
