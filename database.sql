DROP DATABASE IF EXISTS CONCESSIONARIA;

CREATE DATABASE CONCESSIONARIA;
USE CONCESSIONARIA;



CREATE TABLE UTENTE(
ID INTEGER PRIMARY KEY AUTO_INCREMENT,
USERNAME VARCHAR(255) NOT NULL UNIQUE,
PASSWORD VARCHAR(255) NOT NULL,
EMAIL VARCHAR(255) NOT NULL UNIQUE,
NOME VARCHAR(255) NOT NULL,
COGNOME VARCHAR(255) NOT NULL
)Engine='InnoDB';


CREATE TABLE VEICOLO(
ID INTEGER PRIMARY KEY , 
TITOLO VARCHAR(255) NOT NULL,
PREZZO INTEGER,
DESCRIZIONE NVARCHAR(4000),
IMMAGINE NVARCHAR(4000)
)Engine='InnoDB';


CREATE TABLE PREFERITI(
UTENTE VARCHAR(255),
VEICOLO INTEGER NOT NULL,
INDEX IDX_UTENTE(UTENTE),
INDEX IDX_VEICOLO(VEICOLO),
FOREIGN KEY(UTENTE) REFERENCES UTENTE(USERNAME) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY(VEICOLO)REFERENCES VEICOLO(ID) ON DELETE CASCADE ON UPDATE CASCADE
/*PRIMARY KEY (UTENTE,VEICOLO)*/
)Engine='InnoDB';

/*
CREATE TABLE MESSAGGIO(
ID INTEGER PRIMARY KEY AUTO_INCREMENT,
UTENTE INTEGER NOT NULL,
TIME TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
TESTO VARCHAR(255),
INDEX IDX_UTENTE(UTENTE),
FOREIGN KEY(UTENTE) REFERENCES UTENTE(ID) ON DELETE CASCADE ON UPDATE CASCADE
)Engine='InnoDB';
*/


CREATE TABLE COOKIES(
ID INTEGER PRIMARY KEY AUTO_INCREMENT,
HASH VARCHAR(255) NOT NULL,
UTENTE INTEGER NOT NULL,
EXPIRES BIGINT NOT NULL,
FOREIGN KEY(UTENTE) REFERENCES UTENTE(ID) ON DELETE CASCADE ON UPDATE CASCADE 
)Engine='InnoDB';



/*
insert into utente(username, password, email, nome, cognome) values('anto', 'anto', 'anto@', 'antonio', 'giacca');
INSERT INTO preferiti(utente, veicolo) values('anto', '3');
 select * from preferiti;
select * from utente;
select * from veicolo;
insert into veicolo(id_veicolo, modello, prezzo, descrizione, immagine) values('3', 'ciao', '3.000', 'Ha una linea da piccola multispazio, con volumi squadrati e profili tondeggianti che le danno un aspetto “muscoloso” utili i profili laterali in plastica che proteggono la vernice dai piccoli urti. Nata per la città, dove trae vantaggio dalla lunghezza di appena 365 cm, dalla buona visibilità e dallo sterzo particolarmente leggero da azionare, la Fiat Panda è abbastanza a suo agio anche nei percorsi extraurbani.' ,'https://www.ansa.it/webimages/img_620x438/2020/10/26/b2396822f2b62ba2a5410e13b801f460.jpg') ; 
DELETE FROM preferiti WHERE utente='anto' AND veicolo='003';
select * FROM veicolo WHERE veicolo='4';

SELECT v.titolo, v.immagine, v.descrizione, v.prezzo, v.id FROM veicolo v join preferiti p on v.id=p.veicolo where utente='antoniogi';*/