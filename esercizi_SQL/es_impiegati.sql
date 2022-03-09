CREATE TABLE Impiegati (
	 ID 		smallint primary key,
	 Nome 	char(20) not null,
	 Cognome 	char(30) not null,
	 Residenza 	char(20) default '*** Manca Residenza',
	 Stipendio 	decimal(9,2),
	 Dipartimento char(5) references Dipartimenti(Codice)
   );
   
INSERT INTO Impiegati (ID, Nome, Cognome, Stipendio, Dipartimento)
	VALUES(9831,'Marco','Aranzulla',12000,12);
INSERT INTO Impiegati (ID, Nome, Cognome, Stipendio, Dipartimento)
	VALUES(7411,'Luca','Donnarumma',33000.30,4);
INSERT INTO Impiegati (ID, Nome, Cognome, Stipendio, Dipartimento)
	VALUES(9301,'Bruno','Barbieri',76000.70,8);


CREATE TABLE Dipartimenti (
	 Codice 		char(5),
	 Descrizione 	char(20) not null,
	 Sede 		char(20),
	 Manager 		smallint,
	 Primary Key (Codice),
	 Unique (Descrizione),
	 Foreign Key (Manager) references Impiegati(ID)
		On Delete set null
		On Update cascade
	);

INSERT INTO Impiegati (Codice, Descrizione, Sede, Manager)
	VALUES(8,'magazzino','Milano',9301);
INSERT INTO Impiegati (Codice, Descrizione, Sede, Manager)
	VALUES(4,'marketing','Varese',7411);
INSERT INTO Impiegati (Codice, Descrizione, Sede, Manager)
	VALUES(12,'organizzazione','Milano',9831);
