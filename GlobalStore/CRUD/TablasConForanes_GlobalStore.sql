create schema  	`GS`;

create table `GS`.`ACCION` (
    ACId int(20) not null,
    ACDescripcion varchar(20) not null,
    primary key (ACId)
);
create table `GS`.`ACTOR` (
    ACTId int(20) not null,
    ACTNombre varchar(20) not null,
    primary key (ACTId)
);
create table `GS`.`ACTOR_PELICULA` (
    FKACTId int(20) not null,
    FKCOId int(20) not null,
    primary key (FKACTId , FKCOId)
);
create table `GS`.`AUTOR` (
    AUId int(20) not null,
    AUNombre varchar(20) not null,
    primary key (AUId)
);

create table `GS`.`BANCO` (
    BANId int(20) not null,
    BANNombre varchar(20) not null,
    primary key (BANId)
);
create table `GS`.`CALIFICACION` (
    CALId int(20) not null,
    CALValor varchar(20) not null,
    CALFecha date not null,
    CALHora time not null,
    FKPERId int(20) not null,
    FKCOId int(20) not null,
    primary key (CALId)
);
create table `GS`.`CANTANTE` (
    CANId int(20) not null,
    CANNombre varchar(20) not null,
    primary key (CANId)
);
create table `GS`.`CARACTERISTICA` (
    CARAId int(20) not null,
    CARANombre varchar(100) not null,
    primary key (CARAId)
);
create table `GS`.`CARGO` (
    CARId int(20) not null,
    CARNombre varchar(20) not null,
    CARSalario float(20) not null,
    primary key (CARId)
);
create table `GS`.`CATEGORIA` (
    CATId int(20) not null,
    CATNombre varchar(20) not null,
    primary key (CATId)
);
create table `GS`.`COMENTARIO` (
    COMId int(20) not null,
    COMDescripcion varchar(20) not null,
    COMFecha date not null,
    COMHora time not null,
    FKPERId int(20) not null,
    FKCOId int(20) not null,
    primary key (COMId)
);
create table `GS`.`CONTENIDO` (
    COId int(20) not null,
    COFechaRegistro date not null,
	CONombre varchar(100) not null,
    COCosto float(20) not null,
    COVecesValorada int(20) not null,
    COVecesDescagada int(20) not null,
    COTipo int(1) not null, #1 APP, 2 PELICULA, 3 MUSICA, 4 LIBRO#
    CAPDescripcion varchar(500),
    CAPUltimaActualizacion date,
    CAPTamaño int(200),
    CAPVersionActual varchar(200),
    CAPVersionSO varchar(200),
    CAPClasificacion varchar(200),
    FKDEId int(200),
    CPEFechaEstreno date,
    CPEDescripcion varchar(500),
    CPEDuracion varchar(50),
    CMUFechaProduccion date,
    CMUNumeroCanciones int(20),
    CMUFormato varchar(50),
	FKDISQId int(20),
    CLBReseña varchar(200),
    CLBFechaPublicacion date,
    CLBDescripcion varchar(50),
    CLBCantidadPaginas int(200),
    CLBCodigoISBN varchar(50),
    FKEDId int(20),
    primary key (COId)
);
create table `GS`.`CONTRATO` (
    CONId int(20) not null,
    CONFechaI date not null,
    CONFechaF date not null,
	CONCausa varchar (200)not null,
	FKPERId int(20)not null,
	FKCARId int(20)not null,
	primary key (CONId)
);
create table `GS`.`DESARROLLADOR` (
    DEId int(20) not null,
	DENombre varchar(20) not null,
	DECorreo varchar(20) not null, 
	DEWebSite varchar(20) not null,
	DETipo int(1) not null, #1 EMPRESA, 2 PERSONA#
	primary key (DEId)
);
create table `GS`.`DETALLE_FACTURA` (
    FKFAId int(20)not null,
	FKCOId int(20)not null,
	FKPRId int(20),
	primary key (FKFAId,FKCOId)
);
create table `GS`.`DIRECTOR` (
    DIId int(20)not null,
	DINombre varchar (20)not null,
	primary key (DIId)
);
create table `GS`.`DIRECTOR_PELICULA` (
    FKDIId int(20)not null,
	FKCOId int(20)not null,
	primary key (FKDIId,FKCOId)
);
create table `GS`.`DISQUERA` (
    DISQId int(20)not null,
	DISQNombre varchar(20)not null,
	primary key (DISQId)
);
create table `GS`.`EDITORIAL` (
    EDId int(20)not null,
	EDNombre varchar(20)not null,
	primary key (EDId)
);
create table `GS`.`FACTURA` (
    FAId int(20)not null,
	FAFechaE date not null,
	FAMontoTotal float(20) not null,
	FKPERId int(20)not null,
	FKTDCId int(20)not null,
	primary key (FAId)
);
	create table `GS`.`GENEROL` (
    GELId int(20)not null,
	GELNombre varchar(20) not null,
	primary key (GELId)
);
create table `GS`.`GENEROM` (
    GEMId int(20)not null,
	GEMNombre varchar(20) not null,
	primary key (GEMId)
);
create table `GS`.`GENERO_LIBRO` (
    FKGELId int(20)not null,
	FKCOId int(20)not null,
	primary key (FKGELId,FKCOId)
);
create table `GS`.`GENERO_MUSICA` (
    FKGEMId int(20)not null,
	FKCOId int(20)not null,
	primary key (FKGEMId,FKCOId)
);

create table `GS`.`HISTORIAL` (
   
	HISTId int (20)not null,
	HISTFechaI date not null,
	HISTFechaF date,
	HISTTipo   int (1)not null,       #1 SESION, 2 ACCION, 3 MODROLL#
	FKPERid int (20),
	FKACId int (20),
	FKROId int (20),
	primary key (HISTId)
);
create table `GS`.`IMAGEN` (
    IMId int(20)not null,
	IMNombre varchar(20)not null,
	FKCOId int (20)not null,
	primary key (IMId)
);
create table `GS`.`LENGUAJE` (
    LENId int(20)not null,
	LENNombre varchar(20)not null,
	primary key (LENId)
);
create table `GS`.`LENG_PEL` (
    FKLENId int(20)not null,
	FKCOId int(20)not null,
	primary key (FKLENId,FKCOId)
);
create table `GS`.`LIBRO_AUTOR` (
    FKAUId int(20)not null,
	FKCOId int(20)not null,
	primary key (FKAUId,FKCOId)
);
create table 	`GS` . `LUGAR`
(
LUId 				int		(20)  not null, 
LUTipo 				int 	(3)   not null,
LUNombre     		varchar (100) not null,
LUCodigo_Postal 	varchar (100) not null,
FKLUId				int 	(20)  ,
primary key (LUId)
);
create table `GS`.`MUSICA_CANTANTE` (
    FKCANId int(20)not null,
	FKCOId int(20)not null,
	primary key (FKCANId,FKCOId)
);
create table `GS`.`PELICULA_CATEGORIA` (
    FKCATId int(20)not null,
	FKCOId int(20)not null,
	primary key (FKCATId,FKCOId)
);
create table 	`GS` . `PERSONA`
(
PERId 					int		(20) not null, 
PERCedula 					int		(20) not null,
PERPnombre 				varchar	(20) not null,
PERPapellido 			varchar	(20) not null,
PERSnombre 				varchar (20) ,
PERSapellido 			varchar (20) ,
PERRif					varchar (20) ,
PERFecha_nacimiento		date		 not null,
PERTelefono				varchar(20),
PERCorreo				varchar(50)not null,
PERTipo					int		(1)  not null, #1 EMPLEADO, 2 CLIENTE#
PEMNivelEducativo	    int(1), #1 NA, 2 PRIMARIA, 3 SECUNDARIA, 4 TECNICO, 5 LICENCIADO, 6 POSTGRADO#
PEMGrupoSanguineo	    int(1), #1 A, 2 B , 3 AB, 4 O
PECLEdoCivil            int(1), #1 SOLTERO, 2 CASADO, 3 DIVORCIADO, 4 VIUDO#
PCLFechaRegistro        date,
PUSUsername varchar (20) not null, 
PUSContrasena varchar (20) not null,	
primary key (PERId)
);
create table `GS`.`PROMOCION` (
    PRId int(20)not null,
	PRNombre varchar(20)not null,
	PRFechaI date not null,
	PRFechaF date not null,
	PRValor  float(20) not null,
	PREstado int (1) not null, #1 ACTIVO, 2 INACTIVO#
	PRDescripcion varchar (100) not null,
	PRCondiciones varchar (100) not null,
	primary key (PRId)
);
create table `GS`.`PROMOCION_CONTENIDO` (
    FKPRId int(20)not null,
	FKCOId int(20)not null,
	primary key (FKPRId,FKCOId)
);
create table `GS`.`ROL` (
    ROId int(20)not null,
	RODescripcion varchar(20)not null,
	primary key (ROId)
);
create table `GS`.`SO` (
    SOId int(20)not null,
	SOFechaLanzamiento date not null,
	FKTSOId int(20)not null,
	primary key (SOId)
);
create table `GS`.`SO_APLICACION` (
    FKSOId int(20)not null,
	FKCOId int(20)not null,
	primary key (FKSOId,FKCOId)
);
create table `GS`.`SO_CARACTERISTICA` (
    FKSOId int(20)not null,
	FKCARAId int(20)not null,
	primary key (FKSOId,FKCARAId)
);
create table `GS`.`SUBTITULO` (
    SUBId int(20)not null,
	SUBNombre varchar(20) not null,
	primary key (SUBId)
);
create table `GS`.`SUB_PELICULA` (
    FKSUBId int(20)not null,
	FKCOId int(20)not null,
	primary key (FKSUBId,FKCOId)
);
create table `GS`.`TARJETA_CREDITO` (
    TDCId int(20)not null,
	TDCNombreImpreso varchar(20) not null,
	TDCFechaV date not null,
	TDCStatus int(1) not null, #1 ACTIVO, 2 INACTIVO#
	TDCNumeroTarjeta varchar (20) not null,
	FKBANId int(20)not null,
	FKTTId int(20)not null,
	primary key (TDCId)
);
create table `GS`.`TIPO_SO` (
    TSOId int(20)not null,
	TSONombre varchar(20) not null,
	primary key (TSOId)
);
create table `GS`.`TIPO_TARJETA` (
    TTId int(20)not null,
	TTNombre varchar(20) not null,
	primary key (TTId)
);
create table 	`GS` . `USUARIO_ROL`
(
USROId 				int		(20) 	not null, 
USROHistorial 		varchar (100) 	not null,
FKPERId 			int		(20) 	not null,
FKACId 				int		(20) 	not null, 
FKROId 				int		(20) 	not null, 
primary key (USROId)
);
create table `GS`.`VERSION` (
    VEId int(20)not null,
	VENombre varchar(20) not null,
	VEFechaDistribucion date not null,
	FKSOId int (20) not null,
	primary key (VEId)
);
create table `GS`.`VERSION_CAR` (
    FKVEId int(20)not null,
	FKCARAId int(20)not null,
	primary key (FKVEId,FKCARAId)
);
create table `GS`.`VIDEO` (
    VIDId int(20)not null,
	VIDNombre varchar(200) not null,
	FKCOId int (20) not null,
	primary key (VIDId)
);