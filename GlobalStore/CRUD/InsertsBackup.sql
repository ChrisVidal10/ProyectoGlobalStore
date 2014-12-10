#insert de ACCION
insert into `GS`.`ACCION`(ACId,ACDescripcion) values (1,'Borrar');
insert into `GS`.`ACCION`(ACId,ACDescripcion) values (2,'Actualizar');
insert into `GS`.`ACCION`(ACId,ACDescripcion) values (3,'Modificar');
insert into `GS`.`ACCION`(ACId,ACDescripcion) values (4,'Agregar');
insert into `GS`.`ACCION`(ACId,ACDescripcion) values (5,'Inicio Sesion');
insert into `GS`.`ACCION`(ACId,ACDescripcion) values (6,'Consultar');
# insert de ACTOR
insert into `GS`.`ACTOR`(ACTId,ACTNombre) values (1,'Charlotte Gainsbourg');
insert into `GS`.`ACTOR`(ACTId,ACTNombre) values (2,'Stellan Skarsgård');
insert into `GS`.`ACTOR`(ACTId,ACTNombre) values (3,'Stacy Martin');
insert into `GS`.`ACTOR`(ACTId,ACTNombre) values (4,'Greg Kinnear');
insert into `GS`.`ACTOR`(ACTId,ACTNombre) values (5,'Kelly Reilly');
#inserts de AUTOR
insert into `GS`.`AUTOR`(AUId,AUNombre) values (1,'Dolores Redondo');
insert into `GS`.`AUTOR`(AUId,AUNombre) values (2,'Patrick Rothfuss');
insert into `GS`.`AUTOR`(AUId,AUNombre) values (3,'Silvia Day');
insert into `GS`.`AUTOR`(AUId,AUNombre) values (4,'Ken Follet');
insert into `GS`.`AUTOR`(AUId,AUNombre) values (5,'Suzanne Collins');
#inserts de BANCO
insert into `GS`.`BANCO`(BANId,BANNombre) values (1,'BANCO DE VENEZUELA');
insert into `GS`.`BANCO`(BANId,BANNombre) values (2,'MERCANTIL');
insert into `GS`.`BANCO`(BANId,BANNombre) values (3,'BANESCO');
insert into `GS`.`BANCO`(BANId,BANNombre) values (4,'BANCARIBE');
insert into `GS`.`BANCO`(BANId,BANNombre) values (5,'BOD');
#inserts de CANTANTE
insert into `GS`.`CANTANTE`(CANId,CANNombre) values (1,'David Guetta');
insert into `GS`.`CANTANTE`(CANId,CANNombre) values (2,'Hardwell');
insert into `GS`.`CANTANTE`(CANId,CANNombre) values (3,'AC/DC');
insert into `GS`.`CANTANTE`(CANId,CANNombre) values (4,'Nirvana');
insert into `GS`.`CANTANTE`(CANId,CANNombre) values (5,'Juan Luis Guerra');
#inserts de CARACTERISTICA
insert into `GS`.`CARACTERISTICA`(CARAId,CARANombre) values (1,'Basado en Debian GNU/Linux');
insert into `GS`.`CARACTERISTICA`(CARAId,CARANombre) values (2,'Multilenguaje');
insert into `GS`.`CARACTERISTICA`(CARAId,CARANombre) values (3,'Disponible para Intel y AMD64');
insert into `GS`.`CARACTERISTICA`(CARAId,CARANombre) values (4,'Browser Mozila Firefox');
insert into `GS`.`CARACTERISTICA`(CARAId,CARANombre) values (5,'Browser Internet Explorer');
# insert de CARGO
insert into `GS`.`CARGO`(CARId,CARNombre,CARSalario) values (1,'Presidente',75000.00);
insert into `GS`.`CARGO`(CARId,CARNombre,CARSalario) values (2,'Vice-Presidente',60000.00);
insert into `GS`.`CARGO`(CARId,CARNombre,CARSalario) values (3,'Gerente',55000.00);
insert into `GS`.`CARGO`(CARId,CARNombre,CARSalario) values (4,'Empleado_1',30000.00);
insert into `GS`.`CARGO`(CARId,CARNombre,CARSalario) values (5,'Empleado_2',25000.00);
# insert de CATEGORIA
insert into `GS`.`CATEGORIA`(CATId,CATNombre) values (1,'Accion');
insert into `GS`.`CATEGORIA`(CATId,CATNombre) values (2,'Familiar');
insert into `GS`.`CATEGORIA`(CATId,CATNombre) values (3,'Drama');
insert into `GS`.`CATEGORIA`(CATId,CATNombre) values (4,'Comedia');
insert into `GS`.`CATEGORIA`(CATId,CATNombre) values (5,'Terror');
#inserts de DESARROLLADOR
insert into `GS`.`DESARROLLADOR`(DEId,DENombre,DECorreo,DEWebSite,DETipo) values (1,'King','king@gmail.com','king.com',1);
insert into `GS`.`DESARROLLADOR`(DEId,DENombre,DECorreo,DEWebSite,DETipo) values (2,'Oliver Becerra','dolartoday@gmail.com','DolarToday.com',2);
insert into `GS`.`DESARROLLADOR`(DEId,DENombre,DECorreo,DEWebSite,DETipo) values (3,'Instagram, Inc','instagram@gmail.com','Instagram.com',1);
insert into `GS`.`DESARROLLADOR`(DEId,DENombre,DECorreo,DEWebSite,DETipo) values (4,'Microsoft','windows@microsoft.com','microsoft.com',1);
insert into `GS`.`DESARROLLADOR`(DEId,DENombre,DECorreo,DEWebSite,DETipo) values (5,'Blackberry Limited','bbmsn@blackberry.com','blackberry.com',1);
# insert de DIRECTOR
insert into `GS`.`DIRECTOR`(DIId,DINombre) values (1,'Lars von Trier');
insert into `GS`.`DIRECTOR`(DIId,DINombre) values (2,'Randall Wallace');
insert into `GS`.`DIRECTOR`(DIId,DINombre) values (3,'Brian Percival');
insert into `GS`.`DIRECTOR`(DIId,DINombre) values (4,'James Gray');
insert into `GS`.`DIRECTOR`(DIId,DINombre) values (5,'Denis Villeneuve');
#inserts de DISQUERA
insert into `GS`.`DISQUERA`(DIId,DINombre) values (1,'Universal');
insert into `GS`.`DISQUERA`(DIId,DINombre) values (2,'Sony BMG');
insert into `GS`.`DISQUERA`(DIId,DINombre) values (3,'Interscope');
insert into `GS`.`DISQUERA`(DIId,DINombre) values (4,'EMI');
insert into `GS`.`DISQUERA`(DIId,DINombre) values (5,'Warner');
#inserts de EDITORIAL
insert into `GS`.`EDITORIAL`(EDId,EDNombre) values (1,'Mc Graw Hill');
insert into `GS`.`EDITORIAL`(EDId,EDNombre) values (2,'Noriega');
insert into `GS`.`EDITORIAL`(EDId,EDNombre) values (3,'Larousse');
insert into `GS`.`EDITORIAL`(EDId,EDNombre) values (4,'Santillana');
insert into `GS`.`EDITORIAL`(EDId,EDNombre) values (5,'Edit Planeta');
#inserts de GENEROL
insert into `GS`.`GENEROL`(GELId,GELNombre) values (1,'Pop');
insert into `GS`.`GENEROL`(GELId,GELNombre) values (2,'Rock');
insert into `GS`.`GENEROL`(GELId,GELNombre) values (3,'EDM');
insert into `GS`.`GENEROL`(GELId,GELNombre) values (4,'House');
insert into `GS`.`GENEROL`(GELId,GELNombre) values (5,'Jazz');
#inserts de GENEROM
insert into `GS`.`GENEROM`(GEMId,GEMNombre) values (1,'Novela');
insert into `GS`.`GENEROM`(GEMId,GEMNombre) values (2,'Cocina');
insert into `GS`.`GENEROM`(GEMId,GEMNombre) values (3,'Cuento');
insert into `GS`.`GENEROM`(GEMId,GEMNombre) values (4,'Biografia');
insert into `GS`.`GENEROM`(GEMId,GEMNombre) values (5,'Literatura');
#inserts de LENGUAJE
insert into `GS`.`LENGUAJE`(LENId,LENNombre) values (1,'Ingles');
insert into `GS`.`LENGUAJE`(LENId,LENNombre) values (2,'Español');
insert into `GS`.`LENGUAJE`(LENId,LENNombre) values (3,'Frances');
insert into `GS`.`LENGUAJE`(LENId,LENNombre) values (4,'Aleman');
insert into `GS`.`LENGUAJE`(LENId,LENNombre) values (5,'Italiano');
