## 1. Rendszer célja

A rendszer célja egy olyan adminisztrációs és oktatási platform létrehozása, mely számos funkciót biztosít mind az egyetemisták számára, mind az oktatóknak és adminisztrátoroknak. A fő célok közé tartozik:

- Hallgatói adminisztráció: Lehetővé teszi a hallgatók számára, hogy regisztráljanak kurzusokra, nyomon kövessék az órarendjüket és értékeléseiket, valamint hozzáférjenek az oktatói visszajelzésekhez.

- Oktatási támogatás: Segíti az oktatókat az órák jelenléti nyilvántartásában, érdemjegyek rögzítésében és hallgatói teljesítményük értékelésében.

- Adminisztratív feladatok kezelése: Adminisztrátoroknak lehetővé teszi a felhasználói fiókok és jogosultságok kezelését, valamint a rendszer konfigurációjának és beállításainak felügyeletét.

Ezen célok megvalósítása révén a rendszer hozzájárul az oktatási folyamat hatékonyságának növeléséhez, a hallgatók és oktatók közötti kommunikáció javításához, valamint az adminisztratív teher csökkentéséhez az egyetemi közösség számára.

## 2. Projektterv

### 2.1 Projektszerepkörök, felelőségek:

- Scrum master: A Scrum folyamat megvalósításáért felelős, biztosítja a csapat hatékony működését.| Mezőfi Máté
- Product owner: Az ügyfél vagy ügyfél képviselőjeként a termékért felelős, a csapatnak irányt mutat az ő elképzelései vagy elvárásai felé. | Bagoly Gábor
- Üzleti szereplő: Az üzleti igényeket képviseli, biztosítja az üzleti célkitűzések megvalósítását. | Barna Péter

### 2.2 Projektmunkások és felelőségek:

- Frontend: A felhasználói felület fejlesztéséért és karbantartásáért felelős. | Nagy Tamás, Apjok Alex
- Backend: A szerveroldali logika és adatkezelés fejlesztéséért és karbantartásáért felelős. | Mezőfi Máté
- Tesztelés: A rendszer teszteléséért és hibajavításért felelős. | Barna Péter

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

- Prototípus átadása: A prototípus teljes körű funkcióinak átadása és bemutatása a megrendelőnek és érintett feleknek a visszajelzések és további fejlesztési igények gyűjtése érdekében. (2024.04.06.)

- Fő funkciók elkészítése: A rendszer alapvető funkcióinak, mint például a felhasználói regisztráció, bejelentkezés, órarend készítés, jegyek rögzítése és kezelése, teljes körű kifejlesztése és működésre kész állapotba hozása. (2024.06.01)

- Tesztelés és hibajavítás: A teljes rendszer alapos tesztelése különböző környezetekben és felhasználói esetekben, valamint a felfedezett hibák javítása és a stabilitás biztosítása. (2024.06.01)

- Bemutatás és átadás: A kész rendszer bemutatása és átadása a megrendelőnek és érintett feleknek, valamint a dokumentáció teljes körű elkészítése és átadása. (2024.06.01)

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
| K3 | Bejelentkezés | Regisztrált felhasználók bejelentkezhetnek a rendszerbe. |
| K4 | Jelszókezelés | A felhasználók jelszavukat meg tudják változtatni, illetve vissza tudják állítani elfelejtett jelszó esetén. |
| K5 | Jegyek kezelése | Oktatók jegyeket tudnak adni és módosítani a hallgatóknak. |
| K6 | Jelenlétek nyilvántartása | Oktatók nyilvántarthatják a hallgatók jelenlétét órákon. |
| K7 | Felhasználói jogosultságok kezelése | Adminisztrátorok felhasználói jogosultságokat tudnak kezelni (pl. új felhasználó létrehozása, jogosultságok módosítása, felhasználó törlése). |

### Nemfunkcionális követelmények

| ID | Megnevezés | Leírás |
| --- | --- | --- |
| K8 | Teljesítmény | A rendszernek gyorsan kell válaszolnia még nagy terhelés mellett is. |
| K9 | Felhasználóbarát felület | Az alkalmazásnak egy intuitív, könnyen kezelhető felhasználói felülettel kell rendelkeznie. |
| K10 | Letisztult design | Az alkalmazásnak szép és letisztult designnal kell rendelkeznie, amely könnyen értelmezhető és esztétikus. |
| K11 | Megbízhatóság | Az alkalmazásnak stabilnak és megbízhatónak kell lennie, minimálisra csökkentve a leállások és hibák előfordulását. |
| K12 | Teljesítmény | Az alkalmazásnak gyorsan kell működnie, a felhasználók számára gyors válaszidővel. |
| K13 | Skálázhatóság | Az alkalmazásnak képesnek kell lennie a könnyű horizontális és vertikális skálázhatóságra, hogy növekedés esetén is hatékonyan működjön. |
| K14 | Biztonság | Az alkalmazásnak biztonságosnak kell lennie, megfelelő adatvédelmi intézkedésekkel, például jelszóvédelemmel és hitelesítési mechanizmusokkal. | 

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

## 7. Architekturális terv

### Webszerver

A rendszer a Model-View-Controller (MVC) tervezési mintát követi, ahol a modell az adatok kezeléséért felelős, a nézet a felhasználói felületet biztosítja, míg a vezérlő a két közötti kapcsolatot kezeli. A frontend és a backend elkülönülten fut a kliensek és a szerver közötti kommunikációhoz.

### Adatbázis rendszer

Az adatok tárolására a MySQL adatbázis rendszert használjuk alapértelmezetten. Az adatbázis séma relációs adatmodellt követ, amelyben az entitások közötti kapcsolatokat kulcsok segítségével valósítjuk meg. A rendszer lehetőséget biztosít másik adatbázisrendszerek, mint például PostgreSQL vagy SQLite, használatára is, mivel a keretrendszer támogatja ezeket a lehetőségeket.

### A program elérése, kezelése

A felhasználók a webes alkalmazáson keresztül érhetik el a rendszert, amely elérhető lesz asztali és mobil webböngészőkben. Az adminisztrátorok speciális jogosultságokkal rendelkeznek a rendszer kezeléséhez.

### 8. Adatbázis terv

Az adatbázis terv a rendszer által tárolt adatok struktúráját írja le, beleértve az adattáblák struktúráját, azok közötti kapcsolatokat és az attribútumokat. Például:

1. **users:**
   - id: INTEGER (elsődleges kulcs)
   - neptun_code: VARCHAR (egyedi)
   - role_id: INTEGER (idegen kulcs, hivatkozik a roles tábla id oszlopára)
   - password: VARCHAR (hashelt jelszó)
   - email: VARCHAR (egyedi)
   - created_at: TIMESTAMP
   - updated_at: TIMESTAMP

2. **roles:**
   - id: INTEGER (elsődleges kulcs)
   - name: VARCHAR (szerep neve, pl. "oktató", "diák")

3. **subjects:**
   - id: INTEGER (elsődleges kulcs)
   - name: VARCHAR (tantárgy neve)
   - code: VARCHAR (egyedi, tantárgy kódja)
   - type: VARCHAR (előadás vagy gyakorlat)
   - created_at: TIMESTAMP
   - updated_at: TIMESTAMP

4. **courses:**
   - id: INTEGER (elsődleges kulcs)
   - subject_id: INTEGER (idegen kulcs, hivatkozik a subjects tábla id oszlopára)
   - code: VARCHAR (kurzuskód, pl. "A", "B", stb.)
   - created_at: TIMESTAMP
   - updated_at: TIMESTAMP

5. **user_courses:**
   - id: INTEGER (elsődleges kulcs)
   - user_id: INTEGER (idegen kulcs, hivatkozik a users tábla id oszlopára)
   - course_id: INTEGER (idegen kulcs, hivatkozik a courses tábla id oszlopára)

6. **course_classes:**
   - id: INTEGER (elsődleges kulcs)
   - course_id: INTEGER (idegen kulcs, hivatkozik a courses tábla id oszlopára)
   - class_date: TIMESTAMP (óra dátuma)
   - created_at: TIMESTAMP
   - updated_at: TIMESTAMP

7. **attendances:**
   - id: INTEGER (elsődleges kulcs)
   - user_id: INTEGER (idegen kulcs, hivatkozik a users tábla id oszlopára)
   - class_id: INTEGER (idegen kulcs, hivatkozik a classes tábla id oszlopára)
   - present: BOOLEAN (jelenlét, jelen volt vagy sem)
   - excuse_submitted: BOOLEAN (igazolás leadva vagy sem)
   - created_at: TIMESTAMP
   - updated_at: TIMESTAMP

8. **grades:**
   - id: INTEGER (elsődleges kulcs)
   - user_id: INTEGER (idegen kulcs, hivatkozik a users tábla id oszlopára)
   - course_id: INTEGER (idegen kulcs, hivatkozik a courses tábla id oszlopára)
   - grade: INTEGER (jegy értéke)
   - created_at: TIMESTAMP
   - updated_at: TIMESTAMP

### 9. Implementációs terv

Az implementációs terv részletezi a fejlesztési folyamatot, beleértve a programozási nyelveket, keretrendszereket és egyéb eszközöket, amelyeket a fejlesztőcsapat használni fog. Például:

- **Frontend fejlesztés:**
  - Programozási nyelv: HTML, CSS, Bootstrap
  - Keretrendszer: Laravel
  - Fejlesztőeszköz: Visual Studio Code

- **Backend fejlesztés:**
  - Programozási nyelv: PHP
  - Webes keretrendszer: Laravel
  - Adatbázis: MySQL
  - Fejlesztőeszköz: Visual Studio Code

### 10. Tesztterv

#### Tesztelési célok

A tesztelés célja a rendszer funkcionalitásának, teljesítményének és biztonságának ellenőrzése.

#### Tesztelési folyamat

- Egységtesztelés: A különböző komponensek egységtesztelése, hogy megbizonyosodjunk róluk a megfelelő működésről.
- Funkcionális tesztelés: A rendszer különböző funkcióinak tesztelése, hogy ellenőrizzük, hogy megfelelnek-e a követelményeknek.
- Teljesítménytesztelés: A rendszer teljesítményének mérése különböző terhelési szinteken.
- Biztonsági tesztelés: A rendszer biztonságának ellenőrzése különböző tesztekkel, például penetrációs tesztekkel.
- Automatizált felületesztelés: Az alkalmazás felhasználói felületének automatizált tesztelése, például Cypress vagy Selenium segítségével.

#### Tesztesetek

A tesztterv részeként létrehozott tesztesetek részletesen leírják a tesztelendő szcenáriókat, az elvárt eredményeket és a tesztvégrehajtás lépéseit.

### 11. Telepítési terv

A telepítési terv részletezi a rendszer telepítésének folyamatát a különböző környezetekben. Például:

#### Fizikai telepítési terv:

1. A rendszer telepítése a szerverekre vagy felhőalapú infrastruktúrára:
   - A szükséges hardveres követelmények ellenőrzése és biztosítása.
   - Telepítési médium előkészítése és telepítési folyamat indítása.
   - Rendszerkonfiguráció beállítása és inicializálása.

2. A szükséges szoftverek és függőségek telepítése:
   - Operációs rendszer frissítése és konfigurálása.
   - Szükséges szoftverek (pl. adatbázis szerver, webkiszolgáló) telepítése és konfigurálása.
   - Függőségek feloldása és szükséges konfigurációk végrehajtása.

#### Szoftver telepítési terv:

1. Az alkalmazás elérhetősége és telepítése az ügyfelek számára:
   - Telepítési folyamat dokumentálása és publikálása.
   - Telepítési csomag előkészítése és letöltési lehetőségek biztosítása.
   - Telepítési utasítások megadása és felhasználói dokumentáció elkészítése.

2. Az alkalmazás frissítési folyamata és verziókezelése:
   - Verziókövetés és verziókezelési rendszer beállítása.
   - Frissítési folyamat dokumentálása és kommunikáció a felhasználók felé.
   - Frissítési csomagok elkészítése és tesztelése.

#### Telepítési folyamat:

1. A telepítési csomag letöltése a hivatalos forrásból.
2. A telepítési folyamat elindítása és az alkalmazás telepítésének kezdeti lépései végrehajtása.
3. A telepítőprogram által kérdezett konfigurációs beállítások megadása és elfogadása.
4. A telepítési folyamat végére érés és a rendszer inicializálása.
5. A telepítés sikeres befejezése és az alkalmazás elérhetővé válása a felhasználók számára.

### 12. Karbantartási terv

A karbantartási terv célja a rendszer hosszú távú működésének biztosítása és annak megfelelő állapotban tartása. A következő tevékenységeket tartalmazza:

1. Rendszeres biztonsági mentékek készítése az adatokról:
   - Automatizált mentési folyamat beállítása az adatbázisról és a rendszer konfigurációs állományairól.
   - Rendszeres időközönkénti biztonsági mentések készítése és tárolása.
   - Mentési folyamatok rendszeres ellenőrzése és tesztelése a helyes működés érdekében.

2. Rendszerfrissítések telepítése és karbantartása:
   - Rendszerkomponensek és függőségek frissítésének monitorozása és tervezése.
   - Rendszeres frissítések telepítése biztonsági hibák, teljesítményproblémák vagy új funkciók bevezetése céljából.
   - Frissítési folyamatok dokumentálása és nyomon követése.

3. Felhasználói visszajelzések gyűjtése és figyelembevétele a továbbfejlesztés során:
   - Felhasználói visszajelzési csatornák biztosítása, például felhasználói támogatási rendszer vagy visszajelzési űrlap.
   - Beérkező visszajelzések rendszeres monitorozása és értékelése.
   - Fontos felhasználói igények és javaslatok beépítése a rendszer fejlesztési tervébe és prioritásokba.

4. Teljesítményfigyelés és optimalizálás:
   - Rendszeres teljesítménymérés és monitorozás a teljesítményproblémák azonosítása érdekében.
   - Teljesítményproblémák kezelése, például adatbázis-indexek létrehozása, lekérdezésoptimalizálás vagy infrastruktúra skálázása.

5. Hiba- és problémajavítás:
   - Bejelentett hibák és problémák nyomon követése és dokumentálása.
   - Hiba- és problémajavítási folyamat beállítása és végrehajtása, beleértve a hibajegyek kezelését és tesztelését.
   - Sürgős hibák azonnali kezelése, ideiglenes megoldások biztosítása és hosszú távú javítások tervezése.

A karbantartási terv folyamatosan frissül és adaptálódik a rendszer működése során felmerülő új igények és kihívások alapján.


