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
insert into `GS`.`DISQUERA`(DISQId,DISQNombre) values (1,'Universal');
insert into `GS`.`DISQUERA`(DISQId,DISQNombre) values (2,'Sony BMG');
insert into `GS`.`DISQUERA`(DISQId,DISQNombre) values (3,'Interscope');
insert into `GS`.`DISQUERA`(DISQId,DISQNombre) values (4,'EMI');
insert into `GS`.`DISQUERA`(DISQId,DISQNombre) values (5,'Warner');
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
#inserts de PERSONA
insert into `GS`.`PERSONA`(PERId,PERCedula,PERPnombre,PERPapellido,PERSnombre,PERSapellido,PERRif,PERFecha_nacimiento,PERTelefono,PERCorreo,PERTipo,PEMStatus,PEMNivelEducativo,PEMGrupoSanguineo,PECLEdoCivil,PCLFechaRegistro,PUSUsername,PUSContrasena) values (1,19692957,'Alberto','Reveron','Jose','Granados','J-19692957-0',19/03/91,'04123694087','betoreveron@gmail.com',2,null,5,1,1,07/12/10,'betoreveron',12345);
insert into `GS`.`PERSONA`(PERId,PERCedula,PERPnombre,PERPapellido,PERSnombre,PERSapellido,PERRif,PERFecha_nacimiento,PERTelefono,PERCorreo,PERTipo,PEMStatus,PEMNivelEducativo,PEMGrupoSanguineo,PECLEdoCivil,PCLFechaRegistro,PUSUsername,PUSContrasena) values (2,611314,'Marina','Granados',' Sofia','Morales','J-6113314-0',10/038/64,'04125581078','marinag@gmail.com',2,null,5,2,2,01/12/12,'marinag',0608);
insert into `GS`.`PERSONA`(PERId,PERCedula,PERPnombre,PERPapellido,PERSnombre,PERSapellido,PERRif,PERFecha_nacimiento,PERTelefono,PERCorreo,PERTipo,PEMStatus,PEMNivelEducativo,PEMGrupoSanguineo,PECLEdoCivil,PCLFechaRegistro,PUSUsername,PUSContrasena) values (3,5605897,'Alberto','Reveron','Jose','Rivero','J-5605897-0',09/12/60,'04127140078','ajreveronr@hotmail.com',1,2,5,4,2,12/10/14,'ajreveronr',12345);
insert into `GS`.`PERSONA`(PERId,PERCedula,PERPnombre,PERPapellido,PERSnombre,PERSapellido,PERRif,PERFecha_nacimiento,PERTelefono,PERCorreo,PERTipo,PEMStatus,PEMNivelEducativo,PEMGrupoSanguineo,PECLEdoCivil,PCLFechaRegistro,PUSUsername,PUSContrasena) values (4,23645996,'Cristian','Reveron','Alberto','Granados','J-23645996-0',20/09/95,'04123665749','cristrgx@hotamail.com',1,1,3,3,4,11/12/14,'cristrx',95874);
insert into `GS`.`PERSONA`(PERId,PERCedula,PERPnombre,PERPapellido,PERSnombre,PERSapellido,PERRif,PERFecha_nacimiento,PERTelefono,PERCorreo,PERTipo,PEMStatus,PEMNivelEducativo,PEMGrupoSanguineo,PECLEdoCivil,PCLFechaRegistro,PUSUsername,PUSContrasena) values (5,12645874,'Juan','Mata','Jose','Sanchez','J-12645874-0',03/05/84,'04241235746','jmata13@gmail.com','empleado',null,'secundaria','4','casado',19/03/14,'jmata13',25784);
#inserts de PROMOCION
insert into `GS`.`PROMOCION`(PRId,PRNombre,PRFechaI,PRFechaF,PRValor,PREstado,PRDescripcion,PRCondiciones) values (1,'Becazo',07/12/14,24/12/14,154.99,1,'esta promocion se aplica a cualquier libro','tienes que estar registrado en el sistema');
insert into `GS`.`PROMOCION`(PRId,PRNombre,PRFechaI,PRFechaF,PRValor,PREstado,PRDescripcion,PRCondiciones) values (2,'Guamazo',02/05/14,02/07/14,154.99,2,'descarga dos aplicaciones por el precio de una','debes poseer un sistema opertativo Windows');
insert into `GS`.`PROMOCION`(PRId,PRNombre,PRFechaI,PRFechaF,PRValor,PREstado,PRDescripcion,PRCondiciones) values (3,'Promocion Navideña',24/12/14,31/12/14,200.00,1,'descarga cuatro libros del mismo genero','debes tener 1 año registado en el sistema');
insert into `GS`.`PROMOCION`(PRId,PRNombre,PRFechaI,PRFechaF,PRValor,PREstado,PRDescripcion,PRCondiciones) values (4,'Vive la Musica',02/05/14,02/06/14,250.00,2,'descarga dos CDS de tu artista favorito','debes ser mayor de 15 años y estar registrado');
insert into `GS`.`PROMOCION`(PRId,PRNombre,PRFechaI,PRFechaF,PRValor,PREstado,PRDescripcion,PRCondiciones) values (5,'Movie Fan',02/12/14,02/01/15,450.55,1,'puedes descargar 5 peliculas de accion a mitad cada una','las peliculas tienen que ser del mismo año');
#inserts de ROL
insert into `GS`.`ROL`(ROId,RODescripcion) values (1,'Administrador');
insert into `GS`.`ROL`(ROId,RODescripcion) values (2,'Administrador Financiero');
insert into `GS`.`ROL`(ROId,RODescripcion) values (3,'Coordinador Seguridad Web');
insert into `GS`.`ROL`(ROId,RODescripcion) values (4,'Coordinador Ventas');
insert into `GS`.`ROL`(ROId,RODescripcion) values (5,'Diseñador Web');	
#inserts de SUBTITULO
insert into `GS`.`SUBTITULO`(SUBId,SUBNombre) values (1, 'español');
insert into `GS`.`SUBTITULO`(SUBId,SUBNombre) values (2, 'frances');
insert into `GS`.`SUBTITULO`(SUBId,SUBNombre) values (3, 'portugues');
insert into `GS`.`SUBTITULO`(SUBId,SUBNombre) values (4, 'ingles');
insert into `GS`.`SUBTITULO`(SUBId,SUBNombre) values (5, 'chino');
#inserts de TIPO_SO
insert into `GS`.`TIPO_SO` (TSOId,TSONombre) values (1,'Cerrado');
insert into `GS`.`TIPO_SO` (TSOId,TSONombre) values (2,'Cerrado');
insert into `GS`.`TIPO_SO` (TSOId,TSONombre) values (3,'Abierto');
insert into `GS`.`TIPO_SO` (TSOId,TSONombre) values (4,'Cerrado');
insert into `GS`.`TIPO_SO` (TSOId,TSONombre) values (5,'Abierto');
#inserts de TIPO_TARJETA
insert into `GS`.`TIPO_TARJETA` (TTId,TTNombre) values (1,'VISA');
insert into `GS`.`TIPO_TARJETA` (TTId,TTNombre) values (2,'MASTERCARD');
insert into `GS`.`TIPO_TARJETA` (TTId,TTNombre) values (3,'AMERICAN EXPRESS');
insert into `GS`.`TIPO_TARJETA` (TTId,TTNombre) values (4,'PayPal');
insert into `GS`.`TIPO_TARJETA` (TTId,TTNombre) values (5,'MAESTRO');
#inserts de CONTENIDO
insert into `GS`.`CONTENIDO` (COId,COFechaRegistro,CONombre,COCosto,COVecesValorada,COVecesDescagada,COTipo,CAPDescripcion,CAPUltimaActualizacion,CAPTamaño,CAPVersionActual,CAPVersionSO,CAPClasificacion,FKDEId,CPEFechaEstreno,CPEDescripcion,CPEDuracion,CMUFechaProduccion,CMUNumeroCanciones,CMUFormato,FKDISQId,CLBReseña,CLBFechaPublicacion,CLBDescripcion,CLBCantidadPaginas,CLBCodigoISBN,FKEDId) values (1,14/06/12,'Candy Crush',10.99,10,5,1,'Descarga gratis Candy Crush y disfruta de mas de 140 niveles y nuevos modos de juego',11/11/14,15,'1.2.04','Windows 8','25',1,NULL,NULL,NULL,NULL,NULL,NULL,2,NULL,NULL,NULL,NULL,NULL,3);
insert into `GS`.`CONTENIDO` (COId,COFechaRegistro,CONombre,COCosto,COVecesValorada,COVecesDescagada,COTipo,CAPDescripcion,CAPUltimaActualizacion,CAPTamaño,CAPVersionActual,CAPVersionSO,CAPClasificacion,FKDEId,CPEFechaEstreno,CPEDescripcion,CPEDuracion,CMUFechaProduccion,CMUNumeroCanciones,CMUFormato,FKDISQId,CLBReseña,CLBFechaPublicacion,CLBDescripcion,CLBCantidadPaginas,CLBCodigoISBN,FKEDId) values (2,13/05/14,'La Prision',30.99,12,9,2,NULL,NULL,NULL,NULL,NULL,NULL,2,14/02/15,'La CIA contrata a un famoso escapista para liberar un ex-agente cautivo en una prision de alta seguridad','1 hora y media',NULL,NULL,NULL,3,NULL,NULL,NULL,NULL,NULL,3);
insert into `GS`.`CONTENIDO` (COId,COFechaRegistro,CONombre,COCosto,COVecesValorada,COVecesDescagada,COTipo,CAPDescripcion,CAPUltimaActualizacion,CAPTamaño,CAPVersionActual,CAPVersionSO,CAPClasificacion,FKDEId,CPEFechaEstreno,CPEDescripcion,CPEDuracion,CMUFechaProduccion,CMUNumeroCanciones,CMUFormato,FKDISQId,CLBReseña,CLBFechaPublicacion,CLBDescripcion,CLBCantidadPaginas,CLBCodigoISBN,FKEDId) values (3,13/05/14,'Los Asesinos',20.99,10,15,2,NULL,NULL,NULL,NULL,NULL,NULL,3,14/02/15,'Un grupo de asesinos de elite se unen para acabar con una amenaza en comun','1:15:45',NULL,NULL,NULL,3,NULL,NULL,NULL,NULL,NULL,3);
insert into `GS`.`CONTENIDO` (COId,COFechaRegistro,CONombre,COCosto,COVecesValorada,COVecesDescagada,COTipo,CAPDescripcion,CAPUltimaActualizacion,CAPTamaño,CAPVersionActual,CAPVersionSO,CAPClasificacion,FKDEId,CPEFechaEstreno,CPEDescripcion,CPEDuracion,CMUFechaProduccion,CMUNumeroCanciones,CMUFormato,FKDISQId,CLBReseña,CLBFechaPublicacion,CLBDescripcion,CLBCantidadPaginas,CLBCodigoISBN,FKEDId) values (4,24/05/14,'Juan Luis Guerra y su 440',0.99,14,19,3,NULL,NULL,NULL,NULL,NULL,NULL,4,NULL,NULL,NULL,10/10/14,13,'MP3',5,NULL,NULL,NULL,NULL,NULL,4);
insert into `GS`.`CONTENIDO` (COId,COFechaRegistro,CONombre,COCosto,COVecesValorada,COVecesDescagada,COTipo,CAPDescripcion,CAPUltimaActualizacion,CAPTamaño,CAPVersionActual,CAPVersionSO,CAPClasificacion,FKDEId,CPEFechaEstreno,CPEDescripcion,CPEDuracion,CMUFechaProduccion,CMUNumeroCanciones,CMUFormato,FKDISQId,CLBReseña,CLBFechaPublicacion,CLBDescripcion,CLBCantidadPaginas,CLBCodigoISBN,FKEDId) values (5,24/05/14,'Novedades de ficcion',10.99,11,08,4,'Enterate de las ultimas noticias sin ningun tipo de censura',NULL,NULL,NULL,NULL,NULL,5,NULL,NULL,NULL,NULL,NULL,NULL,4,'Un gran secreto rodea una familia misteriosa y con un pasado oscuro',04/05/13,'Un libro que no podras dejar de leer',14,'ISBN:114788',3);
#inserts de ACTOR_PELICULA
insert into `GS`.`ACTOR_PELICULA` (FKACTId,FKCOId) values (1,5);
insert into `GS`.`ACTOR_PELICULA` (FKACTId,FKCOId) values (2,1);
insert into `GS`.`ACTOR_PELICULA` (FKACTId,FKCOId) values (2,2);
insert into `GS`.`ACTOR_PELICULA` (FKACTId,FKCOId) values (3,5);
insert into `GS`.`ACTOR_PELICULA` (FKACTId,FKCOId) values (5,3);
#inserts de CALIFICACION
insert into `GS`.`CALIFICACION` (CALId,CALValor,CALFecha,CALHora,FKPERId,FKCOId) values (1,'20','07/01/14','07:20:00',1,2);
insert into `GS`.`CALIFICACION` (CALId,CALValor,CALFecha,CALHora,FKPERId,FKCOId) values (2,'10','14/03/14','12:20:00',2,5);
insert into `GS`.`CALIFICACION` (CALId,CALValor,CALFecha,CALHora,FKPERId,FKCOId) values (3,'11','08/08/14','08:25:00',5,4);
insert into `GS`.`CALIFICACION` (CALId,CALValor,CALFecha,CALHora,FKPERId,FKCOId) values (4,'7','12/11/13','12:55:00',1,3);
insert into `GS`.`CALIFICACION` (CALId,CALValor,CALFecha,CALHora,FKPERId,FKCOId) values (5,'4','07/09/12','04:45:00',4,2); 
#inserts de COMENTARIO
insert into `GS`.`COMENTARIO` (COMId,COMDescripcion,COMFecha,COMHora,FKPERId,FKCOId) values (1,'No me gusta la app','14/05/14','08:25:00',1,2);
insert into `GS`.`COMENTARIO` (COMId,COMDescripcion,COMFecha,COMHora,FKPERId,FKCOId) values (2,'Muy ineficiente','17/02/14','09:55:00',2,4);
insert into `GS`.`COMENTARIO` (COMId,COMDescripcion,COMFecha,COMHora,FKPERId,FKCOId) values (3,'Muy bueno pero lo malo es la publicidad','05/08/14','10:45:00',3,1);
insert into `GS`.`COMENTARIO` (COMId,COMDescripcion,COMFecha,COMHora,FKPERId,FKCOId) values (4,'Cuando entro a la app me pide un numero de TDC','07/09/14','11:05:00',4,5);
insert into `GS`.`COMENTARIO` (COMId,COMDescripcion,COMFecha,COMHora,FKPERId,FKCOId) values (5,'No me deja descargar el contenido','22/03/13','03:25:00',5,5);
#inserts de CONTRATO
insert into `GS`.`CONTRATO` (CONId,CONFechaI,CONFechaF,CONCausa,FKPERId,FKCARId) values (1,'10/10/14','10/10/16','Necesitamos personal administrativo',1,2);
insert into `GS`.`CONTRATO` (CONId,CONFechaI,CONFechaF,CONCausa,FKPERId,FKCARId) values (2,'04/07/14','10/10/17','Necesitamos personal administrativo',2,4);
insert into `GS`.`CONTRATO` (CONId,CONFechaI,CONFechaF,CONCausa,FKPERId,FKCARId) values (3,'07/12/14','10/10/15','Necesitamos personal administrativo',5,2);
insert into `GS`.`CONTRATO` (CONId,CONFechaI,CONFechaF,CONCausa,FKPERId,FKCARId) values (4,'27/11/14','10/10/18','Necesitamos personal administrativo',3,1);
insert into `GS`.`CONTRATO` (CONId,CONFechaI,CONFechaF,CONCausa,FKPERId,FKCARId) values (5,'29/08/14','10/10/19','Necesitamos personal administrativo',4,1);
#inserts de DIRECTOR_PELICULA
insert into `GS`.`DIRECTOR_PELICULA` (FKDIId,FKCOId) values (1,2);
insert into `GS`.`DIRECTOR_PELICULA` (FKDIId,FKCOId) values (5,4);
insert into `GS`.`DIRECTOR_PELICULA` (FKDIId,FKCOId) values (3,3);
insert into `GS`.`DIRECTOR_PELICULA` (FKDIId,FKCOId) values (2,5);
insert into `GS`.`DIRECTOR_PELICULA` (FKDIId,FKCOId) values (4,1);
#inserts de GENERO_LIBRO
insert into `GS`.`GENERO_LIBRO` (FKGELId,FKCOId) values (1,2);
insert into `GS`.`GENERO_LIBRO` (FKGELId,FKCOId) values (5,3);
insert into `GS`.`GENERO_LIBRO` (FKGELId,FKCOId) values (3,5);
insert into `GS`.`GENERO_LIBRO` (FKGELId,FKCOId) values (4,1);
insert into `GS`.`GENERO_LIBRO` (FKGELId,FKCOId) values (5,5);
#inserts de GENERO_MUSICA
insert into `GS`.`GENERO_MUSICA` (FKGEMId,FKCOId) values (3,4);
insert into `GS`.`GENERO_MUSICA` (FKGEMId,FKCOId) values (4,2);
insert into `GS`.`GENERO_MUSICA` (FKGEMId,FKCOId) values (3,1);
insert into `GS`.`GENERO_MUSICA` (FKGEMId,FKCOId) values (3,5);
insert into `GS`.`GENERO_MUSICA` (FKGEMId,FKCOId) values (2,2);
#inserts de HISTORIAL
insert into `GS`.`HISTORIAL` (HISTId,HISTFechaI,HISTFechaF,HISTTipo,FKPERid,FKACId,FKROId) values (1,'07/12/14',NULL,1,5,4,3);
insert into `GS`.`HISTORIAL` (HISTId,HISTFechaI,HISTFechaF,HISTTipo,FKPERid,FKACId,FKROId) values (2,'12/12/14',NULL,2,4,1,2);
insert into `GS`.`HISTORIAL` (HISTId,HISTFechaI,HISTFechaF,HISTTipo,FKPERid,FKACId,FKROId) values (3,'12/12/12',NULL,2,1,4,3);
insert into `GS`.`HISTORIAL` (HISTId,HISTFechaI,HISTFechaF,HISTTipo,FKPERid,FKACId,FKROId) values (4,'10/09/13',NULL,3,5,1,3);
insert into `GS`.`HISTORIAL` (HISTId,HISTFechaI,HISTFechaF,HISTTipo,FKPERid,FKACId,FKROId) values (5,'05/02/14',NULL,3,2,4,4);
#inserts de IMAGEN
insert into `GS`.`IMAGEN` (IMId,IMNombre,FKCOId) values (1,'appimage.jpg',1);
insert into `GS`.`IMAGEN` (IMId,IMNombre,FKCOId) values (2,'musicnote.jpg',2);
insert into `GS`.`IMAGEN` (IMId,IMNombre,FKCOId) values (3,'books124343.jpg',2);
insert into `GS`.`IMAGEN` (IMId,IMNombre,FKCOId) values (4,'movieswallpaper.jpg',4);
insert into `GS`.`IMAGEN` (IMId,IMNombre,FKCOId) values (5,'apimag.jpg',5);
#inserts de LENG_PEL
insert into `GS`.`LENG_PEL` (FKLENId,FKCOId) values (1,3);
insert into `GS`.`LENG_PEL` (FKLENId,FKCOId) values (5,2);
insert into `GS`.`LENG_PEL` (FKLENId,FKCOId) values (4,4);
insert into `GS`.`LENG_PEL` (FKLENId,FKCOId) values (3,3);
insert into `GS`.`LENG_PEL` (FKLENId,FKCOId) values (2,1);
#inserts de LIBRO_AUTOR
insert into `GS`.`LIBRO_AUTOR` (FKAUId,FKCOId) values (1,5);
insert into `GS`.`LIBRO_AUTOR` (FKAUId,FKCOId) values (4,2);
insert into `GS`.`LIBRO_AUTOR` (FKAUId,FKCOId) values (3,3);
insert into `GS`.`LIBRO_AUTOR` (FKAUId,FKCOId) values (2,4);
insert into `GS`.`LIBRO_AUTOR` (FKAUId,FKCOId) values (5,1);

#inserts de LUGAR
insert into `GS`.`LUGAR` (LUId,LUTipo,LUNombre,LUCodigo_Postal,FKLUId) values (1,1,'Venezuela','1010',null);
insert into `GS`.`LUGAR` (LUId,LUTipo,LUNombre,LUCodigo_Postal,FKLUId) values (2,2,'Caracas','1010',1);
insert into `GS`.`LUGAR` (LUId,LUTipo,LUNombre,LUCodigo_Postal,FKLUId) values (3,3,'El Paraiso','1020',2);
insert into `GS`.`LUGAR` (LUId,LUTipo,LUNombre,LUCodigo_Postal,FKLUId) values (4,3,'Chacao','1090',2);
insert into `GS`.`LUGAR` (LUId,LUTipo,LUNombre,LUCodigo_Postal,FKLUId) values (5,3,'El Hatillo','1050',2);

#inserts de MUSICA_CANTANTE
insert into `GS`.`MUSICA_CANTANTE` (FKCANId,FKCOId) values (1,2);
insert into `GS`.`MUSICA_CANTANTE` (FKCANId,FKCOId) values (2,4);
insert into `GS`.`MUSICA_CANTANTE` (FKCANId,FKCOId) values (3,1);
insert into `GS`.`MUSICA_CANTANTE` (FKCANId,FKCOId) values (5,1);
insert into `GS`.`MUSICA_CANTANTE` (FKCANId,FKCOId) values (4,4);
#inserts de PELICULA_CATEGORIA
insert into `GS`.`PELICULA_CATEGORIA` (FKCATId,FKCOId) values (3,5);
insert into `GS`.`PELICULA_CATEGORIA` (FKCATId,FKCOId) values (1,4);
insert into `GS`.`PELICULA_CATEGORIA` (FKCATId,FKCOId) values (3,2);
insert into `GS`.`PELICULA_CATEGORIA` (FKCATId,FKCOId) values (4,4);
insert into `GS`.`PELICULA_CATEGORIA` (FKCATId,FKCOId) values (2,5);
#inserts de PROMOCION_CONTENIDO
insert into `GS`.`PROMOCION_CONTENIDO` (FKPRId,FKCOId) values (5,4);
insert into `GS`.`PROMOCION_CONTENIDO` (FKPRId,FKCOId) values (5,5);
insert into `GS`.`PROMOCION_CONTENIDO` (FKPRId,FKCOId) values (3,3);
insert into `GS`.`PROMOCION_CONTENIDO` (FKPRId,FKCOId) values (1,2);
insert into `GS`.`PROMOCION_CONTENIDO` (FKPRId,FKCOId) values (2,1);
#inserts de SO
insert into `GS`.`SO` (SOId,SONombre,SOFechaLanzamiento,FKTSOId) values (1,'Windows xp','10/01/15',1);
insert into `GS`.`SO` (SOId,SONombre,SOFechaLanzamiento,FKTSOId) values (2,'Windows 8','11/03/15',2);
insert into `GS`.`SO` (SOId,SONombre,SOFechaLanzamiento,FKTSOId) values (3,'Firefox OS','15/02/15',4);
insert into `GS`.`SO` (SOId,SONombre,SOFechaLanzamiento,FKTSOId) values (4,'Mac IOS','04/09/15',3);
insert into `GS`.`SO` (SOId,SONombre,SOFechaLanzamiento,FKTSOId) values (5,'Ubuntu','05/10/15',5);
#inserts de SO_APLICACION
insert into `GS`.`SO_APLICACION` (FKSOId,FKCOId) values (3,5);
insert into `GS`.`SO_APLICACION` (FKSOId,FKCOId) values (3,3);
insert into `GS`.`SO_APLICACION` (FKSOId,FKCOId) values (2,2);
insert into `GS`.`SO_APLICACION` (FKSOId,FKCOId) values (4,1);
insert into `GS`.`SO_APLICACION` (FKSOId,FKCOId) values (1,4);
#inserts de SO_CARACTERISTICA
insert into `GS`.`SO_CARACTERISTICA` (FKSOId,FKCARAId) values (1,3);
insert into `GS`.`SO_CARACTERISTICA` (FKSOId,FKCARAId) values (3,5);
insert into `GS`.`SO_CARACTERISTICA` (FKSOId,FKCARAId) values (4,4);
insert into `GS`.`SO_CARACTERISTICA` (FKSOId,FKCARAId) values (5,4);
insert into `GS`.`SO_CARACTERISTICA` (FKSOId,FKCARAId) values (2,1);
#inserts de SUB_PELICULA
insert into `GS`.`SUB_PELICULA` (FKSUBId,FKCOId) values (1,4);
insert into `GS`.`SUB_PELICULA` (FKSUBId,FKCOId) values (2,4);
insert into `GS`.`SUB_PELICULA` (FKSUBId,FKCOId) values (3,3);
insert into `GS`.`SUB_PELICULA` (FKSUBId,FKCOId) values (5,1);
insert into `GS`.`SUB_PELICULA` (FKSUBId,FKCOId) values (4,2);
#inserts de TARJETA_CREDITO
insert into `GS`.`TARJETA_CREDITO` (TDCId,TDCNombreImpreso,TDCFechaV,TDCStatus,TDCNumeroTarjeta,FKBANId,FKTTId) values (1,'ALBERTO J REVERON G','01/08/2015',1,'454503142547',2,4);
insert into `GS`.`TARJETA_CREDITO` (TDCId,TDCNombreImpreso,TDCFechaV,TDCStatus,TDCNumeroTarjeta,FKBANId,FKTTId) values (2,'CHRISTIAN VIDAL','01/11/2017',2,'40487456985',1,5);
insert into `GS`.`TARJETA_CREDITO` (TDCId,TDCNombreImpreso,TDCFechaV,TDCStatus,TDCNumeroTarjeta,FKBANId,FKTTId) values (3,'ALBERTO J REVERON G','01/01/2015',2,'454012356478',5,3);
insert into `GS`.`TARJETA_CREDITO` (TDCId,TDCNombreImpreso,TDCFechaV,TDCStatus,TDCNumeroTarjeta,FKBANId,FKTTId) values (4,'ALBERTO J REVERON G','01/04/14',1,'454503142547',4,1);
insert into `GS`.`TARJETA_CREDITO` (TDCId,TDCNombreImpreso,TDCFechaV,TDCStatus,TDCNumeroTarjeta,FKBANId,FKTTId) values (5,'ALBERTO J REVERON G','01/10/19',2,'404012349874',2,1);
#inserts de FACTURA
insert into `GS`.`FACTURA` (FAId,FAFechaE,FAMontoTotal,FKPERId,FKTDCId) values (1,'12/12/14',50.99,4,3);
insert into `GS`.`FACTURA` (FAId,FAFechaE,FAMontoTotal,FKPERId,FKTDCId) values (2,'05/01/13',32.55,3,2);
insert into `GS`.`FACTURA` (FAId,FAFechaE,FAMontoTotal,FKPERId,FKTDCId) values (3,'14/02/14',100.99,5,5);
insert into `GS`.`FACTURA` (FAId,FAFechaE,FAMontoTotal,FKPERId,FKTDCId) values (4,'06/06/13',87.99,2,4);
insert into `GS`.`FACTURA` (FAId,FAFechaE,FAMontoTotal,FKPERId,FKTDCId) values (5,'09/11/14',50.94,3,1);
#iniserts de DETALLE_FACTURA
insert into `GS`.`DETALLE_FACTURA` (FKFAId,FKCOId,FKPRId) values (1,2,3);
insert into `GS`.`DETALLE_FACTURA` (FKFAId,FKCOId,FKPRId) values (2,2,1);
insert into `GS`.`DETALLE_FACTURA` (FKFAId,FKCOId,FKPRId) values (3,3,4);
insert into `GS`.`DETALLE_FACTURA` (FKFAId,FKCOId,FKPRId) values (4,1,2);
insert into `GS`.`DETALLE_FACTURA` (FKFAId,FKCOId,FKPRId) values (5,5,1);
#inserts de USUARIO_ROL
insert into `GS`.`USUARIO_ROL` (USROId,USROHistorial,FKPERId,FKACId,FKROId) values (1,'Cambio su contrasena hace 5 dias',2,3,4);
insert into `GS`.`USUARIO_ROL` (USROId,USROHistorial,FKPERId,FKACId,FKROId) values (2,'Inicio sesion',2,3,4);
insert into `GS`.`USUARIO_ROL` (USROId,USROHistorial,FKPERId,FKACId,FKROId) values (3,'Cambio su contrasena hace 10 dias',2,3,4);
insert into `GS`.`USUARIO_ROL` (USROId,USROHistorial,FKPERId,FKACId,FKROId) values (4,'Modifico contenido',2,3,4);
insert into `GS`.`USUARIO_ROL` (USROId,USROHistorial,FKPERId,FKACId,FKROId) values (5,'Inicio sesion',2,3,4);
#inserts de VERSION
insert into `GS`.`VERSION` (VEId,VENombre,VEFechaDistribucion,FKSOId) values (1,'Windows 8.1.2','24/12/14',4);
insert into `GS`.`VERSION` (VEId,VENombre,VEFechaDistribucion,FKSOId) values (2,'Android 4.4.0','24/12/15',5);
insert into `GS`.`VERSION` (VEId,VENombre,VEFechaDistribucion,FKSOId) values (3,'Windows 8.1.2','10/01/15',1);
insert into `GS`.`VERSION` (VEId,VENombre,VEFechaDistribucion,FKSOId) values (4,'Windows 8.1.2','13/09/17',3);
insert into `GS`.`VERSION` (VEId,VENombre,VEFechaDistribucion,FKSOId) values (5,'Windows 8.1.2','15/04/15',2);
#inserts de VERSION_CAR
insert into `GS`.`VERSION_CAR` (FKVEId,FKCARAId) values (4,3);
insert into `GS`.`VERSION_CAR` (FKVEId,FKCARAId) values (2,5);
insert into `GS`.`VERSION_CAR` (FKVEId,FKCARAId) values (3,2);
insert into `GS`.`VERSION_CAR` (FKVEId,FKCARAId) values (5,5);
insert into `GS`.`VERSION_CAR` (FKVEId,FKCARAId) values (1,3);
#insert de VIDEO
insert into `GS`.`VIDEO` (VIDId,VIDNombre,FKCOId) values (1,'appvideo.MOV',4);
insert into `GS`.`VIDEO` (VIDId,VIDNombre,FKCOId) values (2,'spain.real.com',4);
insert into `GS`.`VIDEO` (VIDId,VIDNombre,FKCOId) values (3,'musicmpeg',1);
insert into `GS`.`VIDEO` (VIDId,VIDNombre,FKCOId) values (4,'www.youtube.com/watch?v=2',3);
insert into `GS`.`VIDEO` (VIDId,VIDNombre,FKCOId) values (5,'www.youtube.com/watch?=324',5);



















































