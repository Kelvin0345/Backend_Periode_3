-- Step: 01
-- **************************************************************
-- Doel : Maak een nieuwe database aan met de naam MVC_Basics_2509AB
-- **************************************************************
-- Versie   Datum       Auteur               Omschrijving
-- ******   *****        *****                *************
-- 01       10-02-2026   Kelvin Fillinag       Smartphones
-- **************************************************************


DROP DATABASE IF exists `MVC_Basics_2509AB`;
CREATE DATABASE `MVC_Basics_2509AB`;
USE `MVC_Basics_2509AB`;


-- Step: 02
-- ************************************************************
-- Doel : Maak een nieuwe tabel aan met de naam Smartphones
-- ************************************************************
-- Versie  Datum       Auteur             Omschrijving
-- 01      10-02-2026  Kelvin Filliang    Tabel Smartphones
-- ************************************************************
-- Onderstaande velden toevoegen aan de tabel Smartphones
-- Merk, Model, Prijs, Geheugen, Besturingssysteem,
-- Schermgrootte, Releasedatum, MegaPixels
-- ************************************************************



CREATE TABLE Smartphones
(
    Id               SMALLINT UNSIGNED    NOT NULL AUTO_INCREMENT
   ,Merk             VARCHAR(50)          NOT NULL
   ,Model            VARCHAR(50)          NOT NULL
   ,Prijs            DECIMAL(6,2)         NOT NULL
   ,Geheugen         DECIMAL(4,0)         NOT NULL
   ,Besturingssysteem VARCHAR(25)         NOT NULL
   ,Schermgrootte    DECIMAL(3,2)         NOT NULL
   ,Releasedatum     DATE                 NOT NULL
   ,MegaPixels       DECIMAL(3,0)         NOT NULL
   ,IsActief         BIT                  NOT NULL DEFAULT 1
   ,Opmerking        VARCHAR(255)             NULL DEFAULT NULL
   ,DatumAangemaakt  DATETIME(6)          NOT NULL DEFAULT NOW(6)
   ,DatumGewijzigd   DATETIME(6)          NOT NULL DEFAULT NOW(6)
   ,CONSTRAINT       PK_Smartphones_Id    PRIMARY KEY (Id)
) ENGINE=InnoDB;

-- Step: 05
-- ****************************************************************************************
-- Doel : Vul de tabel Smartphones met gegevens
-- ****************************************************************************************
-- Versie  Datum        Auteur            Omschrijving
-- 01      10-02-2026   Kelvin Filliang   
-- ****************************************************************************************





INSERT INTO Smartphones
(
     Merk
    ,Model
    ,Prijs
    ,Geheugen
    ,Besturingssysteem
    ,Schermgrootte
    ,Releasedatum
    ,MegaPixels
)
VALUES
('Apple', 'iPhone 16 Pro', 1256.56, 64, 'iOs 18', 6.7, '2025-01-19', 50),
('Samsung', 'Galaxy S25 Ultra', 1539, 128, 'Android 15', 6.1, '2025-02-01', 200),
('Google', 'Pixel 9 Pro', 890, 1024, 'Android 15', 6.3, '2024-12-20', 100),
('OnePlus','OnePlus 13 Pro', 999.99, 512, 'Android 15',  6.8, '2025-01-10', 64),
('Xiaomi','Xiaomi 15 Ultra', 1199.00, 1024, 'Android 15',  6.9, '2025-01-25', 200);



-- Step: 04
-- ****************************************************************************************
-- Doel : Maak een nieuwe tabel aan met de naam Sneakers
-- ****************************************************************************************
-- Versie  Datum        Auteur            Omschrijving
-- 01      10-02-2026   Kelvin filliang   Tabel Sneakers
-- ****************************************************************************************
-- Onderstaande velden toevoegen aan de tabel Sneakers
-- Type (Hardloop, Basketbal, Casual), Prijs, Materiaal (Leer, Mesh, Synthetisch),
-- Gewicht, Releasedatum
-- ****************************************************************************************

CREATE TABLE Sneakers
(
   Id              SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT
  ,Merk            VARCHAR(50)        NOT NULL
  ,Model           VARCHAR(50)        NOT NULL
  ,Type            VARCHAR(25)        NOT NULL
  ,Prijs            DECIMAL(6,2)       NOT NULL
  ,Materiaal        VARCHAR(50)        NOT NULL
  ,Gewicht         VARCHAR(50)         not null
  ,Releasedatum     DATE               not NULL   
  ,IsActief        BIT                NOT NULL DEFAULT 1
  ,Opmerking       VARCHAR(255)            NULL DEFAULT NULL
  ,DatumAangemaakt DATETIME(6)        NOT NULL DEFAULT NOW(6)
  ,DatumGewijzigd  DATETIME(6)        NOT NULL DEFAULT NOW(6)
  ,CONSTRAINT PK_Sneakers_Id PRIMARY KEY (Id)
)
ENGINE = InnoDB;

-- Step: 05
-- ****************************************************************************************
-- Doel : Vul de tabel Sneakers met gegevens
-- ****************************************************************************************
-- Versie  Datum        Auteur            Omschrijving
-- 01      10-02-2026   Kelvin Filliang   Vulling Sneakers
-- ****************************************************************************************

INSERT INTO Sneakers
(
   Merk
  ,Model
  ,Type
  ,Prijs           
  ,Materiaal        
  ,Gewicht         
  ,Releasedatum 
)
VALUES
 ('Nike', 'Air Jordan 1', 'Hardloop', 189.99, 'Leer', 420, '1985-09-15')
,('Adidas', 'Yeezy Boost 350', 'Basketbal', 229.99, 'Mesh', 340, '2015-06-27')
,('New Balance', 'Pixel 9 Pro', 'Casual', 149.99, 'Synthetisch', 360, '2023-10-04')
,('Trico', 'New Age', 'Casual', 89.99, 'Synthetisch', 390, '2022-05-12')
,('Overlord', 'Tristar 6', 'Hardloop', 119.99, 'Mesh', 310, '2021-08-20')
,('Horka', 'Skyward', 'Hardloop', 99.99, 'Mesh', 320, '2020-03-18')
,('Nike', 'Air Max 90', 'Casual', 159.99, 'Leer', 400, '1990-03-26')
,('Adidas', 'Gazelle', 'Casual', 109.99, 'Leer', 350, '1968-07-01');

-- Step: 06
-- ************************************************************************************
-- Doel : Maak een nieuwe tabel aan met de naam Horloges
-- ************************************************************************************
-- Versie      Datum          Auteur               Omschrijving
-- ****** ***** ****** ************
-- 01          11-02-2026     Arjan de Ruijter     Tabel Horloges
-- ************************************************************************************
-- Onderstaande velden toevoegen aan de tabel Horloges
-- Materiaal (Goud, Diamant, RVS), Gewicht, Releasedatum, Waterdichtheid(m), Type (Analoog, Digitaal),
-- Uniek kenmerk
-- ************************************************************************************

CREATE TABLE Horloges
(
   Id                SMALLINT         UNSIGNED   NOT NULL       AUTO_INCREMENT
  ,Merk              VARCHAR(50)                 NOT NULL
  ,Model             VARCHAR(50)                 NOT NULL
  ,Prijs             DECIMAL(6,0)                NOT NULL
  ,Materiaal         VARCHAR(50)                 NOT NULL
  ,Gewicht           VARCHAR(50)                 NOT NULL
  ,Releasedatum       DATE                        NOT NULL
  ,Waterdichtheid     SMALLINT       UNSIGNED     NOT NULL  
  ,HorlogeType       VARCHAR(50)                  NOT NULL  
  ,IsActief          BIT                         NOT NULL       DEFAULT 1
  ,Opmerking         VARCHAR(255)                NULL           DEFAULT NULL
  ,DatumAangemaakt   DATETIME(6)                 NOT NULL       DEFAULT NOW(6)
  ,DatumGewijzigd    DATETIME(6)                 NOT NULL       DEFAULT NOW(6)
  ,CONSTRAINT        PK_Horloges_Id   PRIMARY KEY               (Id)
) ENGINE=InnoDB;

-- Step: 07
-- ************************************************************************************
-- Doel : Vul de tabel Horloges met gegevens
-- ************************************************************************************
-- Versie      Datum          Auteur               Omschrijving
-- ****** ***** ****** ************
-- 01          11-02-2026     Arjan de Ruijter     Vulling Horloges
-- ************************************************************************************

INSERT INTO Horloges
(
     Merk
    ,Model
    ,Prijs
    ,Materiaal
    ,Gewicht
    ,Releasedatum
    ,Waterdichtheid
    ,HorlogeType
)
VALUES
 ('Rolex', 'Daytona 126500LN', 19800, 'RVS', '155 gram', '2023-03-27', 100, 'Analoog')
,('Omega', 'Speedmaster Moonwatch Professional', 8500, 'RVS', '134 gram', '2021-01-05', 50, 'Analoog')
,('Vacheron Constantin', 'Overseas Perpetual Calendar Ultra-Thin', 98000, 'Goud', '120 gram', '2020-04-15', 50, 'Analoog')
,('Jaeger-LeCoultre', 'Reverso Tribute Duoface', 17000, 'Goud', '85 gram', '2021-06-10', 30, 'Analoog')
,('Cartier', 'Tank Louis Diamond Edition', 35000, 'Diamant', '95 gram', '2022-11-20', 30, 'Analoog')
,('Casio', 'G-Shock Mudmaster', 850, 'RVS', '106 gram', '2023-08-12', 200, 'Digitaal')
,('Patek Philippe', 'Nautilus 5711', 125000, 'RVS', '115 gram', '2018-05-30', 120, 'Analoog')
,('Garmin', 'Fenix 7X Pro', 950, 'RVS', '89 gram', '2023-05-31', 100, 'Digitaal');


-- -- 

-- CREATE TABLE Zangeressen

--  Id                SMALLINT         UNSIGNED   NOT NULL       AUTO_INCREMENT
--   ,Artiest naam              VARCHAR(50)                 NOT NULL
--   ,Model             VARCHAR(50)                 NOT NULL
--   ,Prijs             DECIMAL(6,0)                NOT NULL
--   ,Materiaal         VARCHAR(50)                 NOT NULL
--   ,Gewicht           VARCHAR(50)                 NOT NULL
--   ,Releasedatum       DATE                        NOT NULL
--   ,Waterdichtheid     SMALLINT       UNSIGNED     NOT NULL  
--   ,HorlogeType       VARCHAR(50)                  NOT NULL  
--   ,IsActief          BIT                         NOT NULL       DEFAULT 1
--   ,Opmerking         VARCHAR(255)                NULL           DEFAULT NULL
--   ,DatumAangemaakt   DATETIME(6)                 NOT NULL       DEFAULT NOW(6)
--   ,DatumGewijzigd    DATETIME(6)                 NOT NULL       DEFAULT NOW(6)
--   ,CONSTRAINT        PK_Horloges_Id   PRIMARY KEY               (Id)