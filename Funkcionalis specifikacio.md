# Funkcionális specifikáció
## 1. Jelenlegi helyzet leírása
Jelenleg a Neptun rendszer a leggyakoribb és legelterjedtebb adminisztrációs eszköz az oktatási intézményekben. Azonban hiányosságai vannak, különösen az adminisztrációs folyamatok digitalizációja terén.

## 2. Vágyálomrendszer leírása
Egy könnyen kezelhető, modern webalkalmazás létrehozása a Neptun rendszer kiegészítéseként. Az új rendszernek lehetővé kell tennie a jelenlegi papír alapú adminisztrációs folyamatok digitalizálását. Fontos, hogy csak regisztrált felhasználók férhessenek hozzá a felülethez. A rendszer alapvető funkcionalitásai között szerepel a tanulók jelenlétének rögzítése, hiányzások követése, hiányzások igazolásának lehetősége, érdemjegyek regisztrálása és a tanulmányi átlagok automatikus kalkulációja.

## 3. Jelenlegi üzleti folyamatok modellje
- Hallgatók regisztrációja kurzusokra
- Órarend készítése
- Jegyek kiadása és kezelése

## 4. Igényelt üzleti folyamatok modellje
- Hallgatók regisztrációja kurzusokra
- Órarend készítése
- Jegyek kiadása és kezelése

## 5. Követelménylista
| ID | Megnevezés | Leírás |
| --- | --- | --- |
| K1 | Felhasználói regisztráció | A hallgatók regisztrálni tudnak a rendszerbe. |
| K2 | Képernyőtervek megjelenítése | A rendszer megjeleníti a felhasználói felület tervezett képernyőit. |
| K3 | Bejelentkezés | Regisztrált felhasználók bejelentkezhetnek a rendszerbe. |
| K4 | Jelszókezelés | A felhasználók jelszavukat meg tudják változtatni, illetve vissza tudják állítani elfelejtett jelszó esetén. |
| K5 | Jegyek kezelése | Oktatók jegyeket tudnak adni és módosítani a hallgatóknak. |
| K6 | Jelenlétek nyilvántartása | Oktatók nyilvántarthatják a hallgatók jelenlétét órákon. |
| K7 | Felhasználói jogosultságok kezelése | Adminisztrátorok felhasználói jogosultságokat tudnak kezelni (pl. új felhasználó létrehozása, jogosultságok módosítása, felhasználó törlése). |

## 6. Használati esetek
- Felhasználó regisztrációja és bejelentkezése
- Hiányzások rögzítése és igazolása
- Érdemjegyek rögzítése
- Tanulmányi átlagok kiszámítása
- Tanegységek rögzítése és kezelése

## 7. Megfeleltetés, hogyan fedik le a használati eseteket a követelményeket
| Használati eset |	Követelmény |
| Felhasználó regisztrációja és bejelentkezése | K1, K3 |
| Hiányzások rögzítése és igazolása	| K6 |
| Érdemjegyek rögzítése	| K5 |
| Tanulmányi átlagok kiszámítása | - |
| Tanegységek rögzítése és kezelése	| - |

## 8. Képernyőtervek

![képnév](gitlink ahol a kép van)

## 9. Forgatókönyvek
Hiányzások rögzítése és igazolása:
Hiányzások rögzítése:

Szereplők: Tanuló, Oktató
Előfeltételek: A tanulók és oktatók be vannak jelentkezve a rendszerbe.
Folyamat (tanuló):
A tanuló belép a profiljába.
Megtekinti a hiányzásokat és választ egy órát, amelyen hiányzott.
Rögzíti a hiányzást.
Folyamat (oktató):
Az oktató belép a profiljába.
Megnyitja az óralistát és kijelöli az órát, amelyen hiányzás történt.
Rögzíti a hiányzást.
Kimenet: Sikeres hiányzás rögzítése.
Hiányzások igazolása:

Szereplők: Oktató
Előfeltételek: Az oktató be van jelentkezve a rendszerbe.
Folyamat:
Az oktató belép a profiljába.
Megtekinti a hiányzásokat és választ egy hiányzást, amelyet igazolni szeretne.
Igazolja a hiányzást.
Kimenet: Sikeres hiányzás igazolása.

## 10. Funkció - követelmény megfeleltetése
| Id | Követelmény | Funkció |
| K1 | Felhasználói regisztráció | Felhasználók regisztrálása a rendszerbe |
| K2 | Képernyőtervek megjelenítése | A rendszer megjeleníti a felhasználói felület tervezett képernyőit |
| K3 | Bejelentkezés | Regisztrált felhasználók bejelentkezése a rendszerbe |
| K4 | Jelszókezelés | Felhasználók jelszavának módosítása és visszaállítása |
| K5 | Jegyek kezelése | Oktatók jegyeket adhatnak és módosíthatnak hallgatóknak |
| K6 | Jelenlétek nyilvántartása | Oktatók nyilvántarthatják a hallgatók jelenlétét |
| K7 | Felhasználói jogosultságok kezelése | Adminisztrátorok felhasználói jogosultságokat kezelhetnek |

## 11 Fogalomszótár
