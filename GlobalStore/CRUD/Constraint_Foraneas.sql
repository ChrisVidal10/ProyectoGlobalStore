alter table `GS`.`ACTOR_PELICULA` 			add  constraint FKACACTOR 				foreign key (FKACTId) 	references `GS`.`ACTOR` 			(`ACTId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;
alter table `GS`.`ACTOR_PELICULA` 			add  constraint FKACCONTENIDO 			foreign key (FKCOId) 	references `GS`.`CONTENIDO` 		(`COId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;

alter table `GS`.`CALIFICACION` 			add  constraint FKCAPERSONA 		    foreign key (FKPERId) 	references `GS`.`PERSONA` 			(`PERId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;
alter table `GS`.`CALIFICACION` 			add  constraint FKCACONTENIDO 	        foreign key (FKCOId) 	references `GS`.`CONTENIDO` 		(`COId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;

alter table `GS`.`COMENTARIO` 				add  constraint FKCOPERSONA 		    foreign key (FKPERId) 	references `GS`.`PERSONA` 			(`PERId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;
alter table `GS`.`COMENTARIO` 				add  constraint FKCOCONTENIDO 	        foreign key (FKCOId) 	references `GS`.`CONTENIDO` 		(`COId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;

alter table `GS`.`CONTENIDO` 				add  constraint FKCODESARROLLADOR 		foreign key (FKDEId) 	references `GS`.`DESARROLLADOR` 	(`DEId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;
alter table `GS`.`CONTENIDO` 				add  constraint FKCODISQUERA 	        foreign key (FKDISQId) 	references `GS`.`DISQUERA` 			(`DISQId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;
alter table `GS`.`CONTENIDO` 				add  constraint FKCOEDITORIAL 		    foreign key (FKEDId) 	references `GS`.`EDITORIAL` 		(`EDId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;

alter table `GS`.`CONTRATO` 				add  constraint FKCONPERSONA 		    foreign key (FKPERId) 	references `GS`.`PERSONA` 			(`PERId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;
alter table `GS`.`CONTRATO` 				add  constraint FKCONCARGO 	        	foreign key (FKCARId) 	references `GS`.`CARGO` 			(`CARId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;

alter table `GS`.`DETALLE_FACTURA` 			add  constraint FKDFFACTURA 		    foreign key (FKFAId) 	references `GS`.`FACTURA` 			(`FAId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;
alter table `GS`.`DETALLE_FACTURA` 			add  constraint FKDFCONTENIDO 	        foreign key (FKCOId) 	references `GS`.`CONTENIDO` 		(`COId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;
alter table `GS`.`DETALLE_FACTURA` 			add  constraint FKDFPROMOCION 		    foreign key (FKPRId) 	references `GS`.`PROMOCION` 		(`PRId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;

alter table `GS`.`DIRECTOR_PELICULA` 		add  constraint FKDPDIRECTOR 		    foreign key (FKDIId) 	references `GS`.`DIRECTOR` 			(`DIId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;
alter table `GS`.`DIRECTOR_PELICULA` 		add  constraint FKDPCONTENIDO 	        foreign key (FKCOId) 	references `GS`.`CONTENIDO` 		(`COId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;

alter table `GS`.`FACTURA` 					add  constraint FKFAPERSONA 		    foreign key (FKPERId) 	references `GS`.`PERSONA` 			(`PERId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;
alter table `GS`.`FACTURA` 					add  constraint FKFATDC 	       		foreign key (FKTDCId) 	references `GS`.`TARJETA_CREDITO` 	(`TDCId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;

alter table `GS`.`GENERO_LIBRO` 			add  constraint FKGLGENEROL 		    foreign key (FKGELId) 	references `GS`.`GENEROL` 			(`GELId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;
alter table `GS`.`GENERO_LIBRO` 			add  constraint FKGLCONTENIDO 	        foreign key (FKCOId) 	references `GS`.`CONTENIDO` 		(`COId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;

alter table `GS`.`GENERO_MUSICA` 			add  constraint FKGMGENEROM 		    foreign key (FKGEMId) 	references `GS`.`GENEROM` 			(`GEMId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;
alter table `GS`.`GENERO_MUSICA` 			add  constraint FKGMCONTENIDO 	        foreign key (FKCOId) 	references `GS`.`CONTENIDO` 		(`COId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;

alter table `GS`.`HISTORIAL` 				add  constraint FKHISTPERSONA 		    foreign key (FKPERId) 	references `GS`.`PERSONA` 			(`PERId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;
alter table `GS`.`HISTORIAL` 				add  constraint FKHISTACCION 	        foreign key (FKACId) 	references `GS`.`ACCION` 			(`ACId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;
alter table `GS`.`HISTORIAL` 				add  constraint FKHISTROL 		    	foreign key (FKROId) 	references `GS`.`ROL` 				(`ROId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;

alter table `GS`.`IMAGEN` 					add  constraint FKIMCONTENIDO 		    foreign key (FKCOId) 	references `GS`.`CONTENIDO` 		(`COId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;

alter table `GS`.`LENG_PEL` 				add  constraint FKLPLENGUAJE 		    foreign key (FKLENId) 	references `GS`.`LENGUAJE` 			(`LENId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;
alter table `GS`.`LENG_PEL` 				add  constraint FKLPCONTENIDO 	        foreign key (FKCOId) 	references `GS`.`CONTENIDO` 		(`COId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;

alter table `GS`.`LIBRO_AUTOR` 				add  constraint FKLALIBRO 		    	foreign key (FKAUId) 	references `GS`.`AUTOR` 			(`AUId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;
alter table `GS`.`LIBRO_AUTOR` 				add  constraint FKLACONTENIDO 	        foreign key (FKCOId) 	references `GS`.`CONTENIDO` 		(`COId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;

alter table `GS`.`LUGAR` 					add  constraint FKLULUGAR 		   		foreign key (FKLUId) 	references `GS`.`LUGAR` 			(`LUId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;

alter table `GS`.`MUSICA_CANTANTE` 			add  constraint FKMCCANTANTE 		    foreign key (FKCANId) 	references `GS`.`CANTANTE` 			(`CANId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;
alter table `GS`.`MUSICA_CANTANTE` 			add  constraint FKMCCONTENIDO 	        foreign key (FKCOId) 	references `GS`.`CONTENIDO` 		(`COId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;

alter table `GS`.`PELICULA_CATEGORIA` 		add  constraint FKPCCATEGORIA 		    foreign key (FKCATId) 	references `GS`.`CATEGORIA` 		(`CATId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;
alter table `GS`.`PELICULA_CATEGORIA` 		add  constraint FKPCCONTENIDO 	        foreign key (FKCOId) 	references `GS`.`CONTENIDO` 		(`COId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;

alter table `GS`.`PROMOCION_CONTENIDO` 		add  constraint FKPRCPROMOCION 		    foreign key (FKPRId) 	references `GS`.`PROMOCION` 		(`PRId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;
alter table `GS`.`PROMOCION_CONTENIDO` 		add  constraint FKPRCCONTENIDO 	        foreign key (FKCOId) 	references `GS`.`CONTENIDO` 		(`COId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;

alter table `GS`.`SO` 						add  constraint FKSOTIPO 		    	foreign key (FKTSOId) 	references `GS`.`TIPO_SO` 			(`TSOId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;

alter table `GS`.`SO_CARACTERISTICA` 		add  constraint FKSCCARACTERISTICA 		foreign key (FKCARAId) 	references `GS`.`CARACTERISTICA` 	(`CARAId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;
alter table `GS`.`SO_CARACTERISTICA` 		add  constraint FKSCSO 	        		foreign key (FKSOId) 	references `GS`.`SO` 				(`SOId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;

alter table `GS`.`SUB_PELICULA` 			add  constraint FKSUBPESUBTITULO 		foreign key (FKSUBId) 	references `GS`.`SUBTITULO` 		(`SUBId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;
alter table `GS`.`SUB_PELICULA` 			add  constraint FKSUBPECONTENIDO 	    foreign key (FKCOId) 	references `GS`.`CONTENIDO` 		(`COId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;

alter table `GS`.`TARJETA_CREDITO` 			add  constraint FKTCBANCO 		    	foreign key (FKBANId) 	references `GS`.`BANCO` 			(`BANId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;
alter table `GS`.`TARJETA_CREDITO` 			add  constraint FKTCTT 	        		foreign key (FKTTId) 	references `GS`.`TIPO_TARJETA` 		(`TTId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;

alter table `GS`.`USUARIO_ROL` 				add  constraint FKUROPERSONA 		    foreign key (FKPERId) 	references `GS`.`PERSONA` 			(`PERId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;
alter table `GS`.`USUARIO_ROL` 				add  constraint FKUROACCION 	        foreign key (FKACId) 	references `GS`.`ACCION` 			(`ACId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;
alter table `GS`.`USUARIO_ROL` 				add  constraint FKUROROL 		    	foreign key (FKROId) 	references `GS`.`ROL` 				(`ROId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;

alter table `GS`.`VERSION` 					add  constraint FKVESO 		    		foreign key (FKSOId) 	references `GS`.`SO` 				(`SOId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;

alter table `GS`.`VERSION_CAR` 				add  constraint FKVCVERSION 		    foreign key (FKVEId) 	references `GS`.`VERSION` 			(`VEId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;
alter table `GS`.`VERSION_CAR` 				add  constraint FKVCCARACTERISTICA 	    foreign key (FKCARAId) 	references `GS`.`CARACTERISTICA` 	(`CARAId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;

alter table `GS`.`VIDEO` 					add  constraint FKVICONTENIDO 		    foreign key (FKCOId) 	references `GS`.`CONTENIDO` 		(`COId`) 	ON UPDATE CASCADE ON DELETE CASCADE ;


