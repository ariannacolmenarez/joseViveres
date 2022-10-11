SET FOREIGN_KEY_CHECKS=0;
SET @usuario_id=1;

SET CHARACTER SET utf8; 
TRUNCATE TABLE abono_movimiento;
INSERT INTO abono_movimiento VALUES("1","64","4","20.00","1");
INSERT INTO abono_movimiento VALUES("2","64","5","27.00","1");
INSERT INTO abono_movimiento VALUES("3","64","14","47.00","1");
INSERT INTO abono_movimiento VALUES("9","62","28","0.00","1");
INSERT INTO abono_movimiento VALUES("10","62","29","0.00","1");
INSERT INTO abono_movimiento VALUES("12","30","32","1.00","1");
INSERT INTO abono_movimiento VALUES("13","30","33","1.00","1");
INSERT INTO abono_movimiento VALUES("18","62","37","6.00","1");
INSERT INTO abono_movimiento VALUES("30","61","48","10.00","1");
INSERT INTO abono_movimiento VALUES("31","61","49","20.00","1");
INSERT INTO abono_movimiento VALUES("36","62","52","2.00","1");
INSERT INTO abono_movimiento VALUES("41","62","55","1.00","1");
INSERT INTO abono_movimiento VALUES("42","62","56","0.50","1");
INSERT INTO abono_movimiento VALUES("43","62","57","0.20","1");
INSERT INTO abono_movimiento VALUES("44","59","58","5.00","1");
INSERT INTO abono_movimiento VALUES("45","60","59","5.00","1");
INSERT INTO abono_movimiento VALUES("46","67","60","20.00","1");
INSERT INTO abono_movimiento VALUES("47","67","61","3.00","1");
INSERT INTO abono_movimiento VALUES("49","67","63","5.00","1");
INSERT INTO abono_movimiento VALUES("50","68","64","10.00","1");
INSERT INTO abono_movimiento VALUES("51","68","65","5.00","1");
INSERT INTO abono_movimiento VALUES("58","60","70","2.00","1");
INSERT INTO abono_movimiento VALUES("59","57","70","3.00","1");
INSERT INTO abono_movimiento VALUES("63","70","73","2.00","1");
INSERT INTO abono_movimiento VALUES("80","72","97","5.00","1");
INSERT INTO abono_movimiento VALUES("81","73","99","3.00","1");



TRUNCATE TABLE abonos;
INSERT INTO abonos VALUES("1","ghjghj","5.00","2","0000-00-00");
INSERT INTO abonos VALUES("2","ghjghj","4.00","2","0000-00-00");
INSERT INTO abonos VALUES("3","ghjghj","2.00","3","0000-00-00");
INSERT INTO abonos VALUES("4","dfgdfg","23.00","2","0000-00-00");
INSERT INTO abonos VALUES("5","dfsdf","50.00","2","0000-00-00");
INSERT INTO abonos VALUES("6","dffg","50.00","4","0000-00-00");
INSERT INTO abonos VALUES("7","ghjghj","20.00","2","0000-00-00");
INSERT INTO abonos VALUES("8","ghjghj","20.00","2","0000-00-00");
INSERT INTO abonos VALUES("9","rtytt","5.00","2","0000-00-00");
INSERT INTO abonos VALUES("10","abono 1","5.00","2","0000-00-00");
INSERT INTO abonos VALUES("11","abono2","5.00","2","0000-00-00");
INSERT INTO abonos VALUES("12","abono 3","5.00","3","0000-00-00");
INSERT INTO abonos VALUES("13","abono 3","2.00","3","0000-00-00");
INSERT INTO abonos VALUES("14","abono 3","2.00","3","0000-00-00");
INSERT INTO abonos VALUES("15","abono 5","5.00","2","0000-00-00");
INSERT INTO abonos VALUES("16","abono 6","5.00","2","0000-00-00");
INSERT INTO abonos VALUES("17","abono 7","5.00","2","0000-00-00");
INSERT INTO abonos VALUES("18","abono 8","5.00","3","0000-00-00");
INSERT INTO abonos VALUES("19","abono 10","5.00","2","0000-00-00");
INSERT INTO abonos VALUES("20","abono 3","5.00","2","0000-00-00");
INSERT INTO abonos VALUES("21","abono 3","5.00","2","0000-00-00");
INSERT INTO abonos VALUES("22","abono ","5.00","2","0000-00-00");
INSERT INTO abonos VALUES("28","abono 3","5.00","1","0000-00-00");
INSERT INTO abonos VALUES("29","abono 3","5.00","2","0000-00-00");
INSERT INTO abonos VALUES("30","abono ","5.00","2","0000-00-00");
INSERT INTO abonos VALUES("32","abono ","6.00","2","0000-00-00");
INSERT INTO abonos VALUES("33","abono ","6.00","2","0000-00-00");
INSERT INTO abonos VALUES("37","abono ","5.00","4","0000-00-00");
INSERT INTO abonos VALUES("42","abono ","7.00","2","0000-00-00");
INSERT INTO abonos VALUES("43","abono 3","7.00","2","0000-00-00");
INSERT INTO abonos VALUES("44","abono 3","7.00","2","0000-00-00");
INSERT INTO abonos VALUES("45","abono 3","7.00","2","0000-00-00");
INSERT INTO abonos VALUES("48","abono 3","10.00","1","0000-00-00");
INSERT INTO abonos VALUES("49","abono 3","10.00","1","0000-00-00");
INSERT INTO abonos VALUES("52","abono ","2.00","2","0000-00-00");
INSERT INTO abonos VALUES("55","ABO","1.00","3","0000-00-00");
INSERT INTO abonos VALUES("56","abono ","0.50","2","0000-00-00");
INSERT INTO abonos VALUES("57","abono ","0.20","2","0000-00-00");
INSERT INTO abonos VALUES("58","abono ","5.00","2","0000-00-00");
INSERT INTO abonos VALUES("59","abono ","5.00","2","0000-00-00");
INSERT INTO abonos VALUES("60","abono ","20.00","2","0000-00-00");
INSERT INTO abonos VALUES("61","abono ","3.00","3","0000-00-00");
INSERT INTO abonos VALUES("63","abono","5.00","3","0000-00-00");
INSERT INTO abonos VALUES("64","abono ","10.00","2","0000-00-00");
INSERT INTO abonos VALUES("65","abono ","5.00","2","0000-00-00");
INSERT INTO abonos VALUES("70","abono ","5.00","2","2022-10-01");
INSERT INTO abonos VALUES("73","abono ","2.00","2","2022-10-01");
INSERT INTO abonos VALUES("81","abono ","13.00","2","2022-10-01");
INSERT INTO abonos VALUES("82","abono ","13.00","2","2022-10-02");
INSERT INTO abonos VALUES("83","abono ","13.00","2","2022-10-02");
INSERT INTO abonos VALUES("84","abono ","13.00","2","2022-10-02");
INSERT INTO abonos VALUES("85","abono ","13.00","2","2022-10-02");
INSERT INTO abonos VALUES("86","abono ","13.00","2","2022-10-02");
INSERT INTO abonos VALUES("87","abono ","13.00","2","2022-10-02");
INSERT INTO abonos VALUES("88","abono ","23.00","2","2022-10-02");
INSERT INTO abonos VALUES("89","abono ","23.00","2","2022-10-02");
INSERT INTO abonos VALUES("90","abono ","23.00","2","2022-10-02");
INSERT INTO abonos VALUES("91","abono ","23.00","2","2022-10-02");
INSERT INTO abonos VALUES("92","abono ","23.00","2","2022-10-02");
INSERT INTO abonos VALUES("93","abono ","23.00","2","2022-10-02");
INSERT INTO abonos VALUES("97","abono ","5.00","2","2022-10-03");
INSERT INTO abonos VALUES("99","abono ","3.00","2","2022-10-03");



TRUNCATE TABLE bitacora;
INSERT INTO bitacora VALUES("1","2022-10-04","Modificacion de la categoria : \"PESCADO\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("4","2022-10-04","EL \"cliente\" => \"paola colmenarez\" se mofifico","Personas","4");
INSERT INTO bitacora VALUES("5","2022-10-04","EL \"cliente\" => \"JOSE DAZA\" se mofifico","Personas","4");
INSERT INTO bitacora VALUES("6","2022-10-04","EL \"proveedor\" => \"SANTIAGO\" se mofifico","Personas","4");
INSERT INTO bitacora VALUES("7","2022-10-04","Registro de Abono de por","Abonos","4");
INSERT INTO bitacora VALUES("8","2022-10-04","Registro de Abono Realizado \"3.00\" ","Abonos","4");
INSERT INTO bitacora VALUES("9","2022-10-04","Registro de nuevo movimiento en el balance por: \"COMPRA DE PRODUCTOS E INSUMOS\" por \"6.00\" y fue \"PA","Balance","4");
INSERT INTO bitacora VALUES("10","2022-10-04","Registro de nueva categoria : \"helados\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("11","2022-10-04","Registro de nueva categoria : \"sdfsdf\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("12","2022-10-04","Registro de nueva categoria : \"sdfsf\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("13","2022-10-04","Registro de nueva categoria : \"sdfsdf\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("14","2022-10-04","Registro de nueva categoria : \"sdfwe\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("15","2022-10-04","Registro de nueva categoria : \"sdfsdgf\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("16","2022-10-04","Registro de nueva categoria : \"jhbjh\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("17","2022-10-04","Registro de nueva categoria : \"sdfsf\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("18","2022-10-04","Registro de nueva categoria : \"sdfsf\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("19","2022-10-04","Registro de nueva categoria : \"sdfsf\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("20","2022-10-04","Registro de nueva categoria : \"sdfsf\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("21","2022-10-04","Registro de nueva categoria : \"sdfsf\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("22","2022-10-04","Registro de nueva categoria : \"sdfsf\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("23","2022-10-04","Registro de nueva categoria : \"sdfsf\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("24","2022-10-04","Modificacion de la categoria : \"sdfsdf\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("25","2022-10-04","Modificacion de la categoria : \"sdfsf\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("26","2022-10-04","Modificacion de la categoria : \"sdfsdf\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("27","2022-10-04","Modificacion de la categoria : \"sdfwe\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("28","2022-10-04","Modificacion de la categoria : \"sdfsdgf\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("29","2022-10-04","Modificacion de la categoria : \"jhbjh\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("30","2022-10-04","Modificacion de la categoria : \"sdfsf\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("31","2022-10-04","Modificacion de la categoria : \"sdfsf\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("32","2022-10-04","Modificacion de la categoria : \"sdfsf\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("33","2022-10-04","Modificacion de la categoria : \"sdfsf\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("34","2022-10-04","Modificacion de la categoria : \"sdfsf\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("35","2022-10-04","Modificacion de la categoria : \"sdfsf\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("36","2022-10-04","Modificacion de la categoria : \"sdfsf\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("37","2022-10-04","Modificacion de la categoria : \"electronica\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("38","2022-10-04","EL producto: \"salsa\" fue modificado","Productos","4");
INSERT INTO bitacora VALUES("39","2022-10-04","EL producto: \"kepchut\" fue modificado","Productos","4");
INSERT INTO bitacora VALUES("40","2022-10-04","EL producto: \"frutas\" fue modificado","Productos","4");
INSERT INTO bitacora VALUES("41","2022-10-04","Registro de nueva categoria : \"sdfsf\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("42","2022-10-04","Modificacion de la categoria : \"Verduras\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("43","2022-10-04","Modificacion de la categoria : \"sdfsf\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("44","2022-10-04","EL producto: \"computadora\" fue modificado","Productos","4");
INSERT INTO bitacora VALUES("45","2022-10-04","Registro de nuevo movimiento en el balance por: \"COMPRA DE PRODUCTOS E INSUMOS\" por \"23.00\" y fue \"A","Balance","4");
INSERT INTO bitacora VALUES("46","2022-10-04","Registro de nuevo movimiento en el balance por: \"SERVICIOS PÚBLICOS\" por \"23.00\" y fue \"A CREDITO\"","Balance","4");
INSERT INTO bitacora VALUES("47","2022-10-04","Modificacion de la categoria : \"fruta\"","Categoria Productos","4");
INSERT INTO bitacora VALUES("48","2022-10-04","Modificacion de la categoria : \"frutas\"","Categoria Productos","4");



TRUNCATE TABLE cat_producto;
INSERT INTO cat_producto VALUES("1","viveres","0");
INSERT INTO cat_producto VALUES("2","charcuteria","0");
INSERT INTO cat_producto VALUES("3","limpieza","0");
INSERT INTO cat_producto VALUES("4","Verduras","1");
INSERT INTO cat_producto VALUES("5","frutas","1");
INSERT INTO cat_producto VALUES("6","charcuteria","1");
INSERT INTO cat_producto VALUES("7","confiteria","1");
INSERT INTO cat_producto VALUES("8","bebidas","1");
INSERT INTO cat_producto VALUES("9","electronica","1");
INSERT INTO cat_producto VALUES("10","PESCADO","1");
INSERT INTO cat_producto VALUES("11","jugueteria","1");
INSERT INTO cat_producto VALUES("12","CARNES","1");
INSERT INTO cat_producto VALUES("13","POLLO","1");
INSERT INTO cat_producto VALUES("14","helados","1");
INSERT INTO cat_producto VALUES("15","sdfsdf","0");
INSERT INTO cat_producto VALUES("16","sdfsf","0");
INSERT INTO cat_producto VALUES("17","sdfsdf","0");
INSERT INTO cat_producto VALUES("18","sdfwe","0");
INSERT INTO cat_producto VALUES("19","sdfsdgf","0");
INSERT INTO cat_producto VALUES("20","jhbjh","0");
INSERT INTO cat_producto VALUES("21","sdfsf","0");
INSERT INTO cat_producto VALUES("22","sdfsf","0");
INSERT INTO cat_producto VALUES("23","sdfsf","0");
INSERT INTO cat_producto VALUES("24","sdfsf","0");
INSERT INTO cat_producto VALUES("25","sdfsf","0");
INSERT INTO cat_producto VALUES("26","sdfsf","0");
INSERT INTO cat_producto VALUES("27","sdfsf","0");
INSERT INTO cat_producto VALUES("28","sdfsf","0");



TRUNCATE TABLE concepto_movimiento;
INSERT INTO concepto_movimiento VALUES("1","VENTA","1");
INSERT INTO concepto_movimiento VALUES("2","SERVICIOS PÚBLICOS","1");
INSERT INTO concepto_movimiento VALUES("3","COMPRA DE PRODUCTOS E INSUMOS","1");
INSERT INTO concepto_movimiento VALUES("4","ARRIENDO","1");
INSERT INTO concepto_movimiento VALUES("5","NÓMINA","1");
INSERT INTO concepto_movimiento VALUES("6","GASTOS ADMINISTRATIVOS","1");
INSERT INTO concepto_movimiento VALUES("7","MERCADEO Y PUBLICIDAD","1");
INSERT INTO concepto_movimiento VALUES("8","TRANSPORTES, DOMICILIOS, LOGISTICA","1");
INSERT INTO concepto_movimiento VALUES("9","MANTENIMIENTO Y REPARACIONES","1");
INSERT INTO concepto_movimiento VALUES("10","MUEBLES, EQUIPOS Y MAQUINARÍA","1");
INSERT INTO concepto_movimiento VALUES("11","OTROS","1");



TRUNCATE TABLE detalles_movimientos;
INSERT INTO detalles_movimientos VALUES("1","9.00","2","1","5","4");
INSERT INTO detalles_movimientos VALUES("15","15.00","1","1","24","2");
INSERT INTO detalles_movimientos VALUES("16","50.00","1","1","41","3");
INSERT INTO detalles_movimientos VALUES("17","10.50","1","1","41","1");
INSERT INTO detalles_movimientos VALUES("18","10.80","1","1","41","5");
INSERT INTO detalles_movimientos VALUES("19","50.00","2","1","42","3");
INSERT INTO detalles_movimientos VALUES("20","50.00","2","1","43","3");
INSERT INTO detalles_movimientos VALUES("21","50.00","1","1","44","3");
INSERT INTO detalles_movimientos VALUES("22","50.00","1","1","45","3");
INSERT INTO detalles_movimientos VALUES("23","10.80","1","1","51","5");
INSERT INTO detalles_movimientos VALUES("24","10.80","1","1","52","5");
INSERT INTO detalles_movimientos VALUES("25","7.00","1","1","53","11");
INSERT INTO detalles_movimientos VALUES("26","7.00","1","1","54","11");
INSERT INTO detalles_movimientos VALUES("27","10.80","1","1","55","5");
INSERT INTO detalles_movimientos VALUES("28","10.80","1","1","56","5");
INSERT INTO detalles_movimientos VALUES("29","50.00","1","1","57","3");
INSERT INTO detalles_movimientos VALUES("30","15.00","1","1","58","2");
INSERT INTO detalles_movimientos VALUES("31","10.80","1","1","59","5");
INSERT INTO detalles_movimientos VALUES("32","7.00","1","1","60","11");
INSERT INTO detalles_movimientos VALUES("33","9.66","1","1","66","8");
INSERT INTO detalles_movimientos VALUES("34","6.20","1","1","70","9");
INSERT INTO detalles_movimientos VALUES("35","8.00","1","1","71","18");
INSERT INTO detalles_movimientos VALUES("36","9.20","1","1","74","10");
INSERT INTO detalles_movimientos VALUES("37","8.00","1","1","75","18");



TRUNCATE TABLE metodo_pago;
INSERT INTO metodo_pago VALUES("1","EFECTIVO");
INSERT INTO metodo_pago VALUES("2","TARJETA");
INSERT INTO metodo_pago VALUES("3","TRANSFERENCIA");
INSERT INTO metodo_pago VALUES("4","DOLARES");



TRUNCATE TABLE movimientos;
INSERT INTO movimientos VALUES("5","","28.00","2022-09-02","00:00:00","PAGADA","0","1","1","15");
INSERT INTO movimientos VALUES("6","","59.00","2022-09-16","00:00:00","PAGADA","0","1","1","0");
INSERT INTO movimientos VALUES("7","","28.00","2022-09-08","00:00:00","PAGADA","0","1","1","0");
INSERT INTO movimientos VALUES("24","","15.00","2022-09-23","00:00:00","PAGADA","0","1","1","11");
INSERT INTO movimientos VALUES("25","compra pollo","12.00","2022-09-24","00:00:00","PAGADA","1","3","3","0");
INSERT INTO movimientos VALUES("26","paola","13.00","2022-09-24","10:03:00","PAGADA","1","5","3","0");
INSERT INTO movimientos VALUES("27","mariana","1.00","2022-09-24","10:05:00","PAGADA","1","5","3","0");
INSERT INTO movimientos VALUES("28","arianna","12.00","2022-09-24","10:07:00","PAGADA","0","4","3","0");
INSERT INTO movimientos VALUES("29","qweqwe","1.00","2022-09-24","10:08:00","PAGADA","1","3","4","0");
INSERT INTO movimientos VALUES("30","asdasd","4.00","2022-09-20","10:11:00","A CREDITO","1","3","3","0");
INSERT INTO movimientos VALUES("31","maria dueda","12.00","2022-09-24","10:33:00","PAGADA","1","3","3","0");
INSERT INTO movimientos VALUES("32","asddq","1.00","2022-09-24","10:51:00","PAGADA","1","3","3","0");
INSERT INTO movimientos VALUES("33","ari","3.00","2022-09-24","10:53:00","PAGADA","1","3","3","0");
INSERT INTO movimientos VALUES("34","ori","5.00","2022-09-24","10:53:00","PAGADA","1","2","3","0");
INSERT INTO movimientos VALUES("35","paolita","23.00","2022-09-24","10:55:00","PAGADA","1","3","3","0");
INSERT INTO movimientos VALUES("36","mariana","3.00","2022-09-24","11:07:00","PAGADA","1","3","3","0");
INSERT INTO movimientos VALUES("37","qweqwe","2.00","2022-09-24","11:14:00","PAGADA","1","3","3","0");
INSERT INTO movimientos VALUES("38","mariana","2.00","2022-09-24","11:15:00","PAGADA","1","3","3","0");
INSERT INTO movimientos VALUES("39","qqqqq","2.00","2022-09-24","11:19:00","PAGADA","1","3","3","0");
INSERT INTO movimientos VALUES("40","paolita","12.00","2022-09-24","11:27:00","PAGADA","1","3","3","3");
INSERT INTO movimientos VALUES("41","","71.30","2022-09-24","12:33:00","pagada","1","1","3","0");
INSERT INTO movimientos VALUES("42","","100.00","2022-09-24","18:03:00","pagada","0","1","4","0");
INSERT INTO movimientos VALUES("43","","100.00","2022-09-24","15:02:00","pagada","1","1","2","0");
INSERT INTO movimientos VALUES("44","","50.00","2022-09-24","22:28:00","PAGADA","1","1","1","0");
INSERT INTO movimientos VALUES("45","","50.00","2022-09-25","20:28:00","PAGADA","1","1","2","11");
INSERT INTO movimientos VALUES("46","GASTO PRUEBA","122.00","2022-08-30","21:50:00","PAGADA","1","3","3","8");
INSERT INTO movimientos VALUES("49","pago servicio luz","10.00","2022-09-22","08:30:00","A CREDITO","0","2","0","1");
INSERT INTO movimientos VALUES("51","","10.80","2022-09-27","12:37:00","A CREDITO","0","1","1","15");
INSERT INTO movimientos VALUES("52","","10.80","2022-09-27","12:38:00","A CREDITO","0","1","1","15");
INSERT INTO movimientos VALUES("53","","7.00","2022-09-27","12:47:00","PAGADA","1","1","1","15");
INSERT INTO movimientos VALUES("54","","7.00","2022-09-27","12:58:00","PAGADA","1","1","1","15");
INSERT INTO movimientos VALUES("55","","10.80","2022-09-27","13:13:00","PAGADA","1","1","1","0");
INSERT INTO movimientos VALUES("56","","10.80","2022-09-27","13:24:00","PAGADO","1","1","1","15");
INSERT INTO movimientos VALUES("57","","50.00","2022-09-27","13:24:00","A CREDITO","1","1","1","15");
INSERT INTO movimientos VALUES("58","","15.00","2022-09-27","13:36:00","PAGADA","1","1","1","11");
INSERT INTO movimientos VALUES("59","","10.80","2022-09-27","13:38:00","PAGADO","1","1","1","11");
INSERT INTO movimientos VALUES("60","","7.00","2022-09-27","13:38:00","PAGADO","1","1","1","11");
INSERT INTO movimientos VALUES("61","compra verduras","23.00","2022-09-27","13:57:00","PAGADO","1","4","1","8");
INSERT INTO movimientos VALUES("62","compra viveres","10.00","2022-09-27","13:58:00","A CREDITO","0","7","1","8");
INSERT INTO movimientos VALUES("63","compra pollo","50.00","2022-09-27","14:01:00","PAGADA","1","3","1","8");
INSERT INTO movimientos VALUES("64","compra pollo","50.00","2022-09-27","14:01:00","PAGADO","1","3","1","8");
INSERT INTO movimientos VALUES("66","","9.66","2022-09-28","00:54:00","PAGADO","1","1","1","15");
INSERT INTO movimientos VALUES("67","luz negocio","30.00","2022-09-28","11:49:00","PAGADO","1","2","3","8");
INSERT INTO movimientos VALUES("68","mesa planchar","30.00","2022-09-28","14:51:00","PAGADO","1","10","3","3");
INSERT INTO movimientos VALUES("69","compra viveres","6.00","2022-09-30","16:47:00","PAGADO","1","3","2","8");
INSERT INTO movimientos VALUES("70","","6.20","2022-10-01","13:42:00","A CREDITO","1","1","2","11");
INSERT INTO movimientos VALUES("71","","8.00","2022-10-01","13:47:00","PAGADO","1","1","3","11");
INSERT INTO movimientos VALUES("72","mesa planchar","10.00","2022-10-01","14:05:00","A CREDITO","1","5","2","8");
INSERT INTO movimientos VALUES("73","jugos","23.00","2022-09-02","14:17:00","A CREDITO","1","2","2","8");
INSERT INTO movimientos VALUES("74","","9.20","2022-10-03","09:19:00","PAGADA","0","1","2","");
INSERT INTO movimientos VALUES("75","","8.00","2022-10-03","09:23:00","PAGADA","0","1","2","");
INSERT INTO movimientos VALUES("76","compra de materiales de limpieza","6.00","2022-10-03","16:25:00","PAGADA","0","3","2","");
INSERT INTO movimientos VALUES("77","","23.00","2022-10-04","21:54:00","A CREDITO","1","3","1","");
INSERT INTO movimientos VALUES("78","","23.00","2022-10-04","21:55:00","A CREDITO","1","2","1","");



TRUNCATE TABLE notificaciones;
INSERT INTO notificaciones VALUES("1","refrescos ","stock de los refrescos en 0","0","2022-10-03 21:24:32");
INSERT INTO notificaciones VALUES("2","kepchut","El producto tiene poco stock, hay \"1\" unidades disponibles\"","0","2022-10-04 02:48:01");
INSERT INTO notificaciones VALUES("3","frutas","El producto tiene poco stock, hay \"3\" unidades disponibles\"","1","2022-10-04 00:14:45");
INSERT INTO notificaciones VALUES("4","ARIANNA tiene una dueda atrasada","la deuda es del 2022-09-02 por 23.00 bs","1","2022-10-04 00:14:41");
INSERT INTO notificaciones VALUES("6","salsa","El producto tiene poco stock, hay \"1\" unidades disponibles\"","1","2022-10-04 07:21:10");
INSERT INTO notificaciones VALUES("7","kepchut","El producto tiene poco stock, hay \"2\" unidades disponibles\"","1","2022-10-04 08:01:55");
INSERT INTO notificaciones VALUES("8","computadora","El producto tiene poco stock, hay \"2\" unidades disponibles\"","0","2022-10-04 10:03:07");



TRUNCATE TABLE permisos;
INSERT INTO permisos VALUES("1","Consultar Balance","1");
INSERT INTO permisos VALUES("2","Modificar Balance","1");
INSERT INTO permisos VALUES("3","Crear Balance","1");
INSERT INTO permisos VALUES("4","Eliminar Balance","1");
INSERT INTO permisos VALUES("5","Consultar Inventario","1");
INSERT INTO permisos VALUES("6","Modificar Inventario","");
INSERT INTO permisos VALUES("7","Crear Inventario","1");
INSERT INTO permisos VALUES("8","Eliminar Inventario","1");
INSERT INTO permisos VALUES("9","Consultar Deudas","1");
INSERT INTO permisos VALUES("10","Modificar Deudas","1");
INSERT INTO permisos VALUES("11","Crear Deudas","1");
INSERT INTO permisos VALUES("12","Eliminar Deudas","1");
INSERT INTO permisos VALUES("13","Consultar Proveedores","1");
INSERT INTO permisos VALUES("14","Modificar Proveedores","1");
INSERT INTO permisos VALUES("15","Crear Proveedores","1");
INSERT INTO permisos VALUES("16","Eliminar Proveedores","1");
INSERT INTO permisos VALUES("17","Consultar Clientes","1");
INSERT INTO permisos VALUES("18","Modificar Clientes","1");
INSERT INTO permisos VALUES("19","Crear Clientes","1");
INSERT INTO permisos VALUES("20","Eliminar Clientes","1");
INSERT INTO permisos VALUES("21","Consultar Usuarios","1");
INSERT INTO permisos VALUES("22","Modificar Usuarios","1");
INSERT INTO permisos VALUES("23","Crear Usuarios","");
INSERT INTO permisos VALUES("24","Eliminar Usuarios","1");
INSERT INTO permisos VALUES("25","Consultar Estadisticas","1");
INSERT INTO permisos VALUES("26","Consultar Reportes Balance","1");
INSERT INTO permisos VALUES("27","Consultar Reportes Inventario","1");
INSERT INTO permisos VALUES("28","Consultar Reportes Deudas","1");
INSERT INTO permisos VALUES("29","Crear Respaldo Base Datos","1");
INSERT INTO permisos VALUES("30","Modificar Base Datos","1");
INSERT INTO permisos VALUES("31","Consultar Roles","1");
INSERT INTO permisos VALUES("32","Modificar Roles","1");
INSERT INTO permisos VALUES("33","Crear Roles","1");
INSERT INTO permisos VALUES("34","Eliminar Roles","1");
INSERT INTO permisos VALUES("35","Crear Permisos","1");
INSERT INTO permisos VALUES("36","Consultar Reportes Bitacora","1");



TRUNCATE TABLE persona;
INSERT INTO persona VALUES("1","DISTRIBUIDORA ","12020332-7","RIF","04265223434","LMIIO","0","1");
INSERT INTO persona VALUES("2","LOS PALAZUELOS","123123123","RIF","3234234234","MARIA RAMONES","0","1");
INSERT INTO persona VALUES("3","SANTIAGO","9618003","CI","21312312","","1","1");
INSERT INTO persona VALUES("4","ARIANNA","27629581","CI","04267346011","","0","1");
INSERT INTO persona VALUES("5","MARIANA","26049081","CI","04267346009","MARIANA FEAS","0","1");
INSERT INTO persona VALUES("6","JOSE","9618003","CI","04269554422","SASASA","0","1");
INSERT INTO persona VALUES("7","MARIA","","","04125115","","1","1");
INSERT INTO persona VALUES("8","ARIANNA","27629581","CI","04267346011","","1","1");
INSERT INTO persona VALUES("9","mariana","","","04121523434","","1","1");
INSERT INTO persona VALUES("10","JOSEF","","1","6546546","","0","2");
INSERT INTO persona VALUES("11","JOSE DAZA","454656","2","234112323","asdasdasda","1","2");
INSERT INTO persona VALUES("12","JOSE FERNANDO","","","56456456","","1","1");
INSERT INTO persona VALUES("13","JUAN","","","04126523435","SDFDFDS","0","2");
INSERT INTO persona VALUES("14","ROSA","","","041252","","0","2");
INSERT INTO persona VALUES("15","paola colmenarez","2545258","1","04251541552","asdasdasd","1","2");



TRUNCATE TABLE productos;
INSERT INTO productos VALUES("1","harina","1","harina doña emilia 1kg","8.00","10.50","","1","0");
INSERT INTO productos VALUES("2","arroz mary","0","arroz mary 1kg","9.00","15.00","","1","0");
INSERT INTO productos VALUES("3","azucar montalban","0","azucar refinada","9.00","50.00","","1","0");
INSERT INTO productos VALUES("4","caraotas","0","caraotas negras","7.00","9.20","","1","0");
INSERT INTO productos VALUES("5","mortadela","0","mortadela ebenecer","9.20","10.80","","1","0");
INSERT INTO productos VALUES("6","refresco","6","","8.00","10.50","assets/images/productos/Desert.jpg","1","0");
INSERT INTO productos VALUES("7","queso","5","","7.00","9.20","","0","0");
INSERT INTO productos VALUES("8","harina de trigo","2","doña maria","8.00","9.66","","1","0");
INSERT INTO productos VALUES("9","mayonesa","3","","3.50","6.20","","1","0");
INSERT INTO productos VALUES("10","kepchut","2","","6.80","9.20","","1","0");
INSERT INTO productos VALUES("11","MEDUSA","1","","5.00","7.00","assets/images/productos/Koala.jpg","1","0");
INSERT INTO productos VALUES("12","FAROS","4","","3.00","4.00","","1","0");
INSERT INTO productos VALUES("13","sadfsdf","6","sdfsdf","7.00","8.00","","0","0");
INSERT INTO productos VALUES("14","juhiu","6","jnkj","8.00","9.00","","0","0");
INSERT INTO productos VALUES("15","jhkjhkj","5","","8.00","9.00","","0","0");
INSERT INTO productos VALUES("16","asd","5","","6.00","7.00","","0","0");
INSERT INTO productos VALUES("17","wqeqwe","7","","8.00","9.00","","0","0");
INSERT INTO productos VALUES("18","frutas","4","","6.00","8.00","","1","0");
INSERT INTO productos VALUES("19","mantequilla","1","","3.00","5.50","assets/images/productos/marketmp.png","1","0");
INSERT INTO productos VALUES("20","computadora","2","","20.00","25.00","assets/images/productos/BASE.png","1","");
INSERT INTO productos VALUES("21","salsa","1","","3.00","4.00","assets/images/productos/user.png","1","");
INSERT INTO productos VALUES("22","aceite","1","","12.00","15.00","assets/images/productos/user.png","1","0");



TRUNCATE TABLE rol;
INSERT INTO rol VALUES("1","vendedor","ejecuta las ventas","1");
INSERT INTO rol VALUES("2","gerente","permisos de gerente","0");
INSERT INTO rol VALUES("3","superusuario","tiene todos los permisos","1");



TRUNCATE TABLE rol_permiso;
INSERT INTO rol_permiso VALUES("38","3","1");
INSERT INTO rol_permiso VALUES("39","3","3");
INSERT INTO rol_permiso VALUES("40","3","4");
INSERT INTO rol_permiso VALUES("41","3","5");
INSERT INTO rol_permiso VALUES("42","3","6");
INSERT INTO rol_permiso VALUES("43","3","7");
INSERT INTO rol_permiso VALUES("44","3","8");
INSERT INTO rol_permiso VALUES("45","3","9");
INSERT INTO rol_permiso VALUES("46","3","10");
INSERT INTO rol_permiso VALUES("47","3","11");
INSERT INTO rol_permiso VALUES("48","3","12");
INSERT INTO rol_permiso VALUES("49","3","13");
INSERT INTO rol_permiso VALUES("50","3","14");
INSERT INTO rol_permiso VALUES("51","3","15");
INSERT INTO rol_permiso VALUES("52","3","16");
INSERT INTO rol_permiso VALUES("53","3","17");
INSERT INTO rol_permiso VALUES("54","3","18");
INSERT INTO rol_permiso VALUES("55","3","19");
INSERT INTO rol_permiso VALUES("56","3","20");
INSERT INTO rol_permiso VALUES("57","3","21");
INSERT INTO rol_permiso VALUES("58","3","22");
INSERT INTO rol_permiso VALUES("59","3","23");
INSERT INTO rol_permiso VALUES("60","3","24");
INSERT INTO rol_permiso VALUES("61","3","25");
INSERT INTO rol_permiso VALUES("62","3","26");
INSERT INTO rol_permiso VALUES("63","3","27");
INSERT INTO rol_permiso VALUES("64","3","28");
INSERT INTO rol_permiso VALUES("65","3","29");
INSERT INTO rol_permiso VALUES("66","3","30");
INSERT INTO rol_permiso VALUES("67","3","31");
INSERT INTO rol_permiso VALUES("68","3","32");
INSERT INTO rol_permiso VALUES("69","3","33");
INSERT INTO rol_permiso VALUES("70","3","34");
INSERT INTO rol_permiso VALUES("71","3","35");
INSERT INTO rol_permiso VALUES("72","3","36");
INSERT INTO rol_permiso VALUES("73","1","36");



TRUNCATE TABLE tipo_persona;
INSERT INTO tipo_persona VALUES("1","proveedor");
INSERT INTO tipo_persona VALUES("2","cliente");



TRUNCATE TABLE usuarios;
INSERT INTO usuarios VALUES("1","ariann","ezcolmenarjose@gmail.com","F95AF4","1","1");
INSERT INTO usuarios VALUES("2","PAOLSA","ASDASD@ASDASD.COM","QWEQWEQWE","1","1");
INSERT INTO usuarios VALUES("3","arianna","aripaocol@gmail.com","","1","3");
INSERT INTO usuarios VALUES("4","paola","paola@gmail.com","123456","1","3");



SET FOREIGN_KEY_CHECKS=1;
DELETE FROM bitacora WHERE fecha > "2022-10-04 21:33:03";