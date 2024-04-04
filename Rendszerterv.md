## 1. Rendszer célja

 A cél egy olyan adminisztrációs rendszer létrehozása, mely számos funkciót biztosít mind az egyetemisták számára, mind az oktatóknak. A funkciók közé tartozik a hiányzások illetve jelenlétek nyomonkövetése, érdemjegyek rögzítése és átlagszámítás, és további adminisztratív feladatok.

## 2. Projektterv

### 2.1 Projektszerepkörök, felelőségek:

- Scrum master: A Scrum folyamat megvalósításáért felelős, biztosítja a csapat hatékony működését.
- Product owner: Az ügyfél vagy ügyfél képviselőjeként a termékért felelős, a csapatnak irányt mutat az ő elképzelései vagy elvárásai felé.
- Üzleti szereplő: Az üzleti igényeket képviseli, biztosítja az üzleti célkitűzések megvalósítását.

### 2.2 Projektmunkások és felelőségek:

- Frontend: A felhasználói felület fejlesztéséért és karbantartásáért felelős.
- Backend: A szerveroldali logika és adatkezelés fejlesztéséért és karbantartásáért felelős.
- Tesztelés: A rendszer teszteléséért és hibajavításért felelős.

### 2.3 Ütemterv:

| Funkció                  | Feladat                                | Prioritás | Becslés (nap) | Aktuális becslés (nap) | Eltelt idő (nap) | Becsült idő (nap) |
|-------------------------|----------------------------------------|-----------|---------------|------------------------|------------------|---------------------|
| Követelmény specifikáció |Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |             
| Funkcionális specifikáció|Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |
|Rendszerterv             |Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |
|Program                  |Képernyőtervek elkészítése              |         2 |             1 |                      1 |                1 |                   1 |
|Program                  |Prototípus elkészítése                  |         3 |             8 |                      8 |                8 |                   8 |
|Program                  |Alapfunkciók elkészítése                |         3 |             8 |                      8 |                8 |                   8 |
|Program                  |Tesztelés                               |         4 |             2 |                      2 |                2 |                   2 |

### 2.4 Mérföldkövek:

- Prototípus átadása: 2024.04.06.

## 3. Üzleti folyamatok modellje

### 3.1 Üzleti szereplők

- Hallgatók
- Oktatók
- Adminisztrátorok

### 3.2 Üzleti folyamatok

- Hallgatók regisztrációja kurzusokra
- Órarend készítése
- Jegyek kiadása és kezelése

## 4. Követelmények

### Funkcionális követelmények

| ID | Megnevezés | Leírás |
| --- | --- | --- |
| K1 | Felhasználói regisztráció | A hallgatók regisztrálni tudnak a rendszerbe. |
| K2 | Képernyőtervek megjelenítése | A rendszer megjeleníti a felhasználói felület tervezett képernyőit. |

### Nemfunkcionális követelmények

| ID | Megnevezés | Leírás |
| --- | --- | --- |
| K4 | Teljesítmény | A rendszernek gyorsan kell válaszolnia még nagy terhelés mellett is. |

### Támogatott eszközök

- Desktop webböngészők (Chrome, Firefox, Safari)
- Mobil webböngészők (Chrome, Safari)

## 5. Funkcionális terv

### 5.1 Rendszerszereplők

- Hallgatók: Felhasználók, akik regisztráltak a rendszerben, és használják annak funkcióit.
- Oktatók: Tanárok vagy oktatók, akik vezetik a jelenléteket és értékelik a hallgatók teljesítményét.
- Adminisztrátorok: Felügyelik és karbantartják a rendszert, kezelik a felhasználói fiókokat és jogosultságokat.

### 5.2 Menühierarchiák

A felhasználók számára különböző menüpontok állnak rendelkezésre a rendszerben, attól függően, hogy milyen szereppel rendelkeznek (pl. hallgató, oktató, adminisztrátor). Például:

- Hallgatók:
  - Jegyek, jelenléti riportok megtekintése
- Oktatók:
  - Hallgatói jegyek értékelése
  - Jelenlét vezetése
- Adminisztrátorok:
  - Felhasználók kezelése (létrehozás, törlés, jogosultságok módosítása)
  - Rendszerbeállítások kezelése

## 6. Fizikai környezet

### Vásárolt softwarekomponensek és külső rendszerek

- Adatbázis szerver: MySQL

### Hardver topológia

- Szerverek: Felhőalapú infrastruktúra vagy dedikált szerverek a rendszer futtatásához.
- Felhasználói eszközök: Asztali és mobil eszközök a felhasználók számára.

### Fizikai alrendszerek

- Webkiszolgáló: A webes alkalmazás kiszolgálása és futtatása.
- Adatbázis szerver: Az adatbázisok tárolása és kezelése.

### Fejlesztő eszközök

- Fejlesztői szoftverek: Visual Studio Code, IntelliJ IDEA, stb.
- Verziókezelő rendszer: Github
- Tesztelő eszközök: Cypress

## 8. Architekturális terv

### Webszerver

A rendszer a Model-View-Controller (MVC) tervezési mintát követi, ahol a modell az adatok kezeléséért felelős, a nézet a felhasználói felületet biztosítja, míg a vezérlő a két közötti kapcsolatot kezeli. A frontend és a backend elkülönülten fut a kliensek és a szerver közötti kommunikációhoz.

### Adatbázis rendszer

Az adatok tárolására a MySQL adatbázis rendszert használjuk. Az adatbázis séma relációs adatmodellt követ, amelyben az entitások közötti kapcsolatokat kulcsok segítségével valósítjuk meg.

### A program elérése, kezelése

A felhasználók a webes alkalmazáson keresztül érhetik el a rendszert, amely elérhető lesz asztali és mobil webböngészőkben. Az adminisztrátorok speciális jogosultságokkal rendelkeznek a rendszer kezeléséhez.

### 9. Adatbázis terv

Az adatbázis terv a rendszer által tárolt adatok struktúráját írja le, beleértve az adattáblák struktúráját, azok közötti kapcsolatokat és az attribútumokat. Például:

1. **users:**
   - id: INTEGER (elsődleges kulcs)
   - neptun_code: VARCHAR (egyedi)
   - role_id: INTEGER (idegen kulcs, hivatkozik a roles tábla id oszlopára)
   - password: VARCHAR (hashelt jelszó)
   - email: VARCHAR (egyedi)
   - created_at: TIMESTAMP

2. **roles:**
   - id: INTEGER (elsődleges kulcs)
   - name: VARCHAR (szerep neve, pl. "oktató", "diák")

3. **subjects:**
   - id: INTEGER (elsődleges kulcs)
   - name: VARCHAR (egyedi, tantárgy neve)
   - code: VARCHAR (egyedi, tantárgy kódja)

4. **courses:**
   - id: INTEGER (elsődleges kulcs)
   - subject_id: INTEGER (idegen kulcs, hivatkozik a subjects tábla id oszlopára)
   - code: VARCHAR (kurzuskód, pl. "A", "B", stb.)
   - type: ENUM (ea vagy gy, azaz előadás vagy gyakorlat)

5. **user_courses:**
   - id: INTEGER (elsődleges kulcs)
   - user_id: INTEGER (idegen kulcs, hivatkozik a users tábla id oszlopára)
   - course_id: INTEGER (idegen kulcs, hivatkozik a courses tábla id oszlopára)

6. **classes:**
   - id: INTEGER (elsődleges kulcs)
   - course_id: INTEGER (idegen kulcs, hivatkozik a courses tábla id oszlopára)
   - date: TIMESTAMP (óra dátuma)

7. **attendances:**
   - id: INTEGER (elsődleges kulcs)
   - user_id: INTEGER (idegen kulcs, hivatkozik a users tábla id oszlopára)
   - class_id: INTEGER (idegen kulcs, hivatkozik a classes tábla id oszlopára)
   - present: BOOLEAN (jelenlét, jelen volt vagy sem)
   - excuse_submitted: BOOLEAN (igazolás leadva vagy sem)

8. **grades:**
   - id: INTEGER (elsődleges kulcs)
   - user_id: INTEGER (idegen kulcs, hivatkozik a users tábla id oszlopára)
   - course_id: INTEGER (idegen kulcs, hivatkozik a courses tábla id oszlopára)
   - grade: INTEGER (jegy értéke)

### 10. Implementációs terv

Az implementációs terv részletezi a fejlesztési folyamatot, beleértve a programozási nyelveket, keretrendszereket és egyéb eszközöket, amelyeket a fejlesztőcsapat használni fog. Például:

- **Frontend fejlesztés:**
  - Programozási nyelv: HTML, CSS, Bootstrap
  - Keretrendszer: Laravell
  - Fejlesztőeszköz: Visual Studio Code

- **Backend fejlesztés:**
  - Programozási nyelv: PHP
  - Webes keretrendszer: Laravell
  - Adatbázis: MySQL
  - Fejlesztőeszköz: Visual Studio Code

### 11. Tesztterv

#### Tesztelési célok

A tesztelés célja a rendszer funkcionalitásának, teljesítményének és biztonságának ellenőrzése.

#### Tesztelési folyamat

- Egységtesztelés: A különböző komponensek egységtesztelése, hogy megbizonyosodjunk róluk a megfelelő működésről.
- Funkcionális tesztelés: A rendszer különböző funkcióinak tesztelése, hogy ellenőrizzük, hogy megfelelnek-e a követelményeknek.
- Teljesítménytesztelés: A rendszer teljesítményének mérése különböző terhelési szinteken.
- Biztonsági tesztelés: A rendszer biztonságának ellenőrzése különböző tesztekkel, például penetrációs tesztekkel.

#### Tesztesetek

A tesztterv részeként létrehozott tesztesetek részletesen leírják a tesztelendő szcenáriókat, az elvárt eredményeket és a tesztvégrehajtás lépéseit.

### 12. Telepítési terv

A telepítési terv részletezi a rendszer telepítésének folyamatát a különböző környezetekben. Például:

**Fizikai telepítési terv:**
- A rendszer telepítése a szerverekre vagy felhőalapú infrastruktúrára.
- A szükséges szoftverek és függőségek telepítése.

**Szoftver telepítési terv:**
- Az alkalmazás elérhetősége és telepítése az ügyfelek számára.
- Az alkalmazás frissítési folyamata és verziókezelése.

### 13. Karbantartási terv

Fontos ellenőrizni:

- Rendszeres biztonsági mentések készítése az adatokról.
- Rendszerfrissítések telepítése és karbantartása.



