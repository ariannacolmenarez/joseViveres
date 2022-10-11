-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2022 a las 21:02:13
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `joseviveresbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abonos`
--

CREATE TABLE `abonos` (
  `id` int(11) NOT NULL,
  `concepto` varchar(255) DEFAULT NULL,
  `valor` decimal(11,2) NOT NULL,
  `id_metodo_pago` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Disparadores `abonos`
--
DELIMITER $$
CREATE TRIGGER `insertbitacora` AFTER INSERT ON `abonos` FOR EACH ROW BEGIN 
	SET @id_mov := (SELECT id_movimiento FROM abono_movimiento WHERE id_abono = NEW.id);
    SET @id_persona := (SELECT id_persona FROM movimientos WHERE id = @id_mov);
    SET @nombreP := (SELECT nombre FROM persona WHERE id = @id_persona);
    
     INSERT INTO bitacora (fecha,modulo,accion,id_usuario) VALUES (NOW(), "Abonos", CONCAT('Registro de Abono Realizado "',NEW.valor,'" '),@usuario_id); 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abono_movimiento`
--

CREATE TABLE `abono_movimiento` (
  `id` int(11) NOT NULL,
  `id_movimiento` int(11) NOT NULL,
  `id_abono` int(11) NOT NULL,
  `monto` decimal(11,2) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `accion` varchar(100) NOT NULL,
  `modulo` varchar(100) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id`, `fecha`, `accion`, `modulo`, `id_usuario`) VALUES
(49, '2022-10-04', 'Registro de nueva categoria : \"viveres\"', 'Categoria Productos', 1),
(50, '2022-10-04', 'Registro de nueva categoria : \"charcuteria\"', 'Categoria Productos', 1),
(51, '2022-10-04', 'Registro de nueva categoria : \"limpieza\"', 'Categoria Productos', 1),
(52, '2022-10-04', 'Registro de nueva categoria : \"Verduras\"', 'Categoria Productos', 1),
(53, '2022-10-04', 'Registro de nueva categoria : \"frutas\"', 'Categoria Productos', 1),
(54, '2022-10-04', 'Registro de nueva categoria : \"charcuteria\"', 'Categoria Productos', 1),
(55, '2022-10-04', 'Registro de nueva categoria : \"confiteria\"', 'Categoria Productos', 1),
(56, '2022-10-04', 'Registro de nueva categoria : \"bebidas\"', 'Categoria Productos', 1),
(57, '2022-10-04', 'Registro de nueva categoria : \"electronica\"', 'Categoria Productos', 1),
(58, '2022-10-04', 'Registro de nueva categoria : \"PESCADO\"', 'Categoria Productos', 1),
(59, '2022-10-04', 'Registro de nueva categoria : \"jugueteria\"', 'Categoria Productos', 1),
(60, '2022-10-04', 'Registro de nueva categoria : \"CARNES\"', 'Categoria Productos', 1),
(61, '2022-10-04', 'Registro de nueva categoria : \"POLLO\"', 'Categoria Productos', 1),
(62, '2022-10-04', 'Registro de nueva categoria : \"helados\"', 'Categoria Productos', 1),
(63, '2022-10-04', 'Registro de nueva categoria : \"sdfsdf\"', 'Categoria Productos', 1),
(64, '2022-10-04', 'Registro de nueva categoria : \"sdfsf\"', 'Categoria Productos', 1),
(65, '2022-10-04', 'Registro de nueva categoria : \"sdfsdf\"', 'Categoria Productos', 1),
(66, '2022-10-04', 'Registro de nueva categoria : \"sdfwe\"', 'Categoria Productos', 1),
(67, '2022-10-04', 'Registro de nueva categoria : \"sdfsdgf\"', 'Categoria Productos', 1),
(68, '2022-10-04', 'Registro de nueva categoria : \"jhbjh\"', 'Categoria Productos', 1),
(69, '2022-10-04', 'Registro de nueva categoria : \"sdfsf\"', 'Categoria Productos', 1),
(70, '2022-10-04', 'Registro de nueva categoria : \"sdfsf\"', 'Categoria Productos', 1),
(71, '2022-10-04', 'Registro de nueva categoria : \"sdfsf\"', 'Categoria Productos', 1),
(72, '2022-10-04', 'Registro de nueva categoria : \"sdfsf\"', 'Categoria Productos', 1),
(73, '2022-10-04', 'Registro de nueva categoria : \"sdfsf\"', 'Categoria Productos', 1),
(74, '2022-10-04', 'Registro de nueva categoria : \"sdfsf\"', 'Categoria Productos', 1),
(75, '2022-10-04', 'Registro de nueva categoria : \"sdfsf\"', 'Categoria Productos', 1),
(76, '2022-10-04', 'Registro de nueva categoria : \"sdfsf\"', 'Categoria Productos', 1),
(77, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"VENTA\" por \"28.00\" y fue \"PAGADA\"', 'Balance', 1),
(78, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"VENTA\" por \"59.00\" y fue \"PAGADA\"', 'Balance', 1),
(79, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"VENTA\" por \"28.00\" y fue \"PAGADA\"', 'Balance', 1),
(80, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"VENTA\" por \"15.00\" y fue \"PAGADA\"', 'Balance', 1),
(81, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"COMPRA DE PRODUCTOS E INSUMOS\" por \"12.00\" y fue \"P', 'Balance', 1),
(82, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"NÓMINA\" por \"13.00\" y fue \"PAGADA\"', 'Balance', 1),
(83, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"NÓMINA\" por \"1.00\" y fue \"PAGADA\"', 'Balance', 1),
(84, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"ARRIENDO\" por \"12.00\" y fue \"PAGADA\"', 'Balance', 1),
(85, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"COMPRA DE PRODUCTOS E INSUMOS\" por \"1.00\" y fue \"PA', 'Balance', 1),
(86, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"COMPRA DE PRODUCTOS E INSUMOS\" por \"4.00\" y fue \"A ', 'Balance', 1),
(87, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"COMPRA DE PRODUCTOS E INSUMOS\" por \"12.00\" y fue \"P', 'Balance', 1),
(88, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"COMPRA DE PRODUCTOS E INSUMOS\" por \"1.00\" y fue \"PA', 'Balance', 1),
(89, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"COMPRA DE PRODUCTOS E INSUMOS\" por \"3.00\" y fue \"PA', 'Balance', 1),
(90, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"SERVICIOS PÚBLICOS\" por \"5.00\" y fue \"PAGADA\"', 'Balance', 1),
(91, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"COMPRA DE PRODUCTOS E INSUMOS\" por \"23.00\" y fue \"P', 'Balance', 1),
(92, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"COMPRA DE PRODUCTOS E INSUMOS\" por \"3.00\" y fue \"PA', 'Balance', 1),
(93, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"COMPRA DE PRODUCTOS E INSUMOS\" por \"2.00\" y fue \"PA', 'Balance', 1),
(94, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"COMPRA DE PRODUCTOS E INSUMOS\" por \"2.00\" y fue \"PA', 'Balance', 1),
(95, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"COMPRA DE PRODUCTOS E INSUMOS\" por \"2.00\" y fue \"PA', 'Balance', 1),
(96, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"COMPRA DE PRODUCTOS E INSUMOS\" por \"12.00\" y fue \"P', 'Balance', 1),
(97, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"VENTA\" por \"71.30\" y fue \"pagada\"', 'Balance', 1),
(98, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"VENTA\" por \"100.00\" y fue \"pagada\"', 'Balance', 1),
(99, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"VENTA\" por \"100.00\" y fue \"pagada\"', 'Balance', 1),
(100, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"VENTA\" por \"50.00\" y fue \"PAGADA\"', 'Balance', 1),
(101, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"VENTA\" por \"50.00\" y fue \"PAGADA\"', 'Balance', 1),
(102, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"COMPRA DE PRODUCTOS E INSUMOS\" por \"122.00\" y fue \"', 'Balance', 1),
(103, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"SERVICIOS PÚBLICOS\" por \"10.00\" y fue \"A CREDITO\"', 'Balance', 1),
(104, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"VENTA\" por \"10.80\" y fue \"A CREDITO\"', 'Balance', 1),
(105, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"VENTA\" por \"10.80\" y fue \"A CREDITO\"', 'Balance', 1),
(106, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"VENTA\" por \"7.00\" y fue \"PAGADA\"', 'Balance', 1),
(107, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"VENTA\" por \"7.00\" y fue \"PAGADA\"', 'Balance', 1),
(108, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"VENTA\" por \"10.80\" y fue \"PAGADA\"', 'Balance', 1),
(109, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"VENTA\" por \"10.80\" y fue \"PAGADO\"', 'Balance', 1),
(110, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"VENTA\" por \"50.00\" y fue \"A CREDITO\"', 'Balance', 1),
(111, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"VENTA\" por \"15.00\" y fue \"PAGADA\"', 'Balance', 1),
(112, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"VENTA\" por \"10.80\" y fue \"PAGADO\"', 'Balance', 1),
(113, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"VENTA\" por \"7.00\" y fue \"PAGADO\"', 'Balance', 1),
(114, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"ARRIENDO\" por \"23.00\" y fue \"PAGADO\"', 'Balance', 1),
(115, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"MERCADEO Y PUBLICIDAD\" por \"10.00\" y fue \"A CREDITO', 'Balance', 1),
(116, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"COMPRA DE PRODUCTOS E INSUMOS\" por \"50.00\" y fue \"P', 'Balance', 1),
(117, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"COMPRA DE PRODUCTOS E INSUMOS\" por \"50.00\" y fue \"P', 'Balance', 1),
(118, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"VENTA\" por \"9.66\" y fue \"PAGADO\"', 'Balance', 1),
(119, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"SERVICIOS PÚBLICOS\" por \"30.00\" y fue \"PAGADO\"', 'Balance', 1),
(120, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"MUEBLES, EQUIPOS Y MAQUINARÍA\" por \"30.00\" y fue \"P', 'Balance', 1),
(121, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"COMPRA DE PRODUCTOS E INSUMOS\" por \"6.00\" y fue \"PA', 'Balance', 1),
(122, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"VENTA\" por \"6.20\" y fue \"A CREDITO\"', 'Balance', 1),
(123, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"VENTA\" por \"8.00\" y fue \"PAGADO\"', 'Balance', 1),
(124, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"NÓMINA\" por \"10.00\" y fue \"A CREDITO\"', 'Balance', 1),
(125, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"SERVICIOS PÚBLICOS\" por \"23.00\" y fue \"A CREDITO\"', 'Balance', 1),
(126, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"VENTA\" por \"9.20\" y fue \"PAGADA\"', 'Balance', 1),
(127, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"VENTA\" por \"8.00\" y fue \"PAGADA\"', 'Balance', 1),
(128, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"COMPRA DE PRODUCTOS E INSUMOS\" por \"6.00\" y fue \"PA', 'Balance', 1),
(129, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"COMPRA DE PRODUCTOS E INSUMOS\" por \"23.00\" y fue \"A', 'Balance', 1),
(130, '2022-10-04', 'Registro de nuevo movimiento en el balance por: \"SERVICIOS PÚBLICOS\" por \"23.00\" y fue \"A CREDITO\"', 'Balance', 1),
(131, '2022-10-04', 'Nuevo Registro del : \"proveedor\" =>  \"DISTRIBUIDORA \"', 'Personas', 1),
(132, '2022-10-04', 'Nuevo Registro del : \"proveedor\" =>  \"LOS PALAZUELOS\"', 'Personas', 1),
(133, '2022-10-04', 'Nuevo Registro del : \"proveedor\" =>  \"SANTIAGO\"', 'Personas', 1),
(134, '2022-10-04', 'Nuevo Registro del : \"proveedor\" =>  \"ARIANNA\"', 'Personas', 1),
(135, '2022-10-04', 'Nuevo Registro del : \"proveedor\" =>  \"MARIANA\"', 'Personas', 1),
(136, '2022-10-04', 'Nuevo Registro del : \"proveedor\" =>  \"JOSE\"', 'Personas', 1),
(137, '2022-10-04', 'Nuevo Registro del : \"proveedor\" =>  \"MARIA\"', 'Personas', 1),
(138, '2022-10-04', 'Nuevo Registro del : \"proveedor\" =>  \"ARIANNA\"', 'Personas', 1),
(139, '2022-10-04', 'Nuevo Registro del : \"proveedor\" =>  \"mariana\"', 'Personas', 1),
(140, '2022-10-04', 'Nuevo Registro del : \"cliente\" =>  \"JOSEF\"', 'Personas', 1),
(141, '2022-10-04', 'Nuevo Registro del : \"cliente\" =>  \"JOSE DAZA\"', 'Personas', 1),
(142, '2022-10-04', 'Nuevo Registro del : \"proveedor\" =>  \"JOSE FERNANDO\"', 'Personas', 1),
(143, '2022-10-04', 'Nuevo Registro del : \"cliente\" =>  \"JUAN\"', 'Personas', 1),
(144, '2022-10-04', 'Nuevo Registro del : \"cliente\" =>  \"ROSA\"', 'Personas', 1),
(145, '2022-10-04', 'Nuevo Registro del : \"cliente\" =>  \"paola colmenarez\"', 'Personas', 1),
(146, '2022-10-04', 'Registro de un nuevo Producto : \"harina\"', 'Productos', 1),
(147, '2022-10-04', 'Registro de un nuevo Producto : \"arroz mary\"', 'Productos', 1),
(148, '2022-10-04', 'Registro de un nuevo Producto : \"azucar montalban\"', 'Productos', 1),
(149, '2022-10-04', 'Registro de un nuevo Producto : \"caraotas\"', 'Productos', 1),
(150, '2022-10-04', 'Registro de un nuevo Producto : \"mortadela\"', 'Productos', 1),
(151, '2022-10-04', 'Registro de un nuevo Producto : \"refresco\"', 'Productos', 1),
(152, '2022-10-04', 'Registro de un nuevo Producto : \"queso\"', 'Productos', 1),
(153, '2022-10-04', 'Registro de un nuevo Producto : \"harina de trigo\"', 'Productos', 1),
(154, '2022-10-04', 'Registro de un nuevo Producto : \"mayonesa\"', 'Productos', 1),
(155, '2022-10-04', 'Registro de un nuevo Producto : \"kepchut\"', 'Productos', 1),
(156, '2022-10-04', 'Registro de un nuevo Producto : \"MEDUSA\"', 'Productos', 1),
(157, '2022-10-04', 'Registro de un nuevo Producto : \"FAROS\"', 'Productos', 1),
(158, '2022-10-04', 'Registro de un nuevo Producto : \"sadfsdf\"', 'Productos', 1),
(159, '2022-10-04', 'Registro de un nuevo Producto : \"juhiu\"', 'Productos', 1),
(160, '2022-10-04', 'Registro de un nuevo Producto : \"jhkjhkj\"', 'Productos', 1),
(161, '2022-10-04', 'Registro de un nuevo Producto : \"asd\"', 'Productos', 1),
(162, '2022-10-04', 'Registro de un nuevo Producto : \"wqeqwe\"', 'Productos', 1),
(163, '2022-10-04', 'Registro de un nuevo Producto : \"frutas\"', 'Productos', 1),
(164, '2022-10-04', 'Registro de un nuevo Producto : \"mantequilla\"', 'Productos', 1),
(165, '2022-10-04', 'Registro de un nuevo Producto : \"computadora\"', 'Productos', 1),
(166, '2022-10-04', 'Registro de un nuevo Producto : \"salsa\"', 'Productos', 1),
(167, '2022-10-04', 'Registro de un nuevo Producto : \"aceite\"', 'Productos', 1),
(168, '2022-10-04', 'Registro de un nuevo rol : \"vendedor\"', 'Roles', 1),
(169, '2022-10-04', 'Registro de un nuevo rol : \"gerente\"', 'Roles', 1),
(170, '2022-10-04', 'Registro de un nuevo rol : \"superusuario\"', 'Roles', 1),
(171, '2022-10-04', 'Registro de un nuevo usuario : \"ariann\"', 'Usuarios', 1),
(172, '2022-10-04', 'Registro de un nuevo usuario : \"PAOLSA\"', 'Usuarios', 1),
(173, '2022-10-04', 'Registro de un nuevo usuario : \"arianna\"', 'Usuarios', 1),
(174, '2022-10-04', 'Registro de un nuevo usuario : \"paola\"', 'Usuarios', 1),
(248, '2022-10-10', 'El usuario : \"SUPERUSUARIO\" fue modificado', 'Usuarios', 3),
(249, '2022-10-10', 'El usuario : \"SUPERUSUARIO\" fue modificado', 'Usuarios', 3),
(250, '2022-10-10', 'El usuario : \"ARIANNA\" fue modificado', 'Usuarios', 3),
(251, '2022-10-11', 'Registro de nuevo movimiento en el balance por: \"VENTA\" por \"15.75\" y fue \"PAGADA\"', 'Balance', 1),
(252, '2022-10-11', 'EL producto: \"refresco\" fue modificado', 'Productos', 1),
(253, '2022-10-11', 'EL producto: \"harina\" fue modificado', 'Productos', 1),
(254, '2022-10-11', 'Registro de nuevo movimiento en el balance por: \"COMPRA DE PRODUCTOS E INSUMOS\" por \"6.00\" y fue \"PA', 'Balance', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_producto`
--

CREATE TABLE `cat_producto` (
  `id` int(11) NOT NULL,
  `categoria` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` varchar(25) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Disparadores `cat_producto`
--
DELIMITER $$
CREATE TRIGGER `INSERTAbono` AFTER INSERT ON `cat_producto` FOR EACH ROW INSERT INTO bitacora(id_usuario, modulo, accion,fecha) 
    VALUES (@usuario_id,"Categoria Productos",CONCAT('Registro de nueva categoria : "',NEW.categoria,'"'),NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `UPDATECat` AFTER UPDATE ON `cat_producto` FOR EACH ROW INSERT INTO bitacora(id_usuario, modulo, accion,fecha) VALUES (@usuario_id,"Categoria Productos",CONCAT('Modificacion de la categoria : "',NEW.categoria,'"'),NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concepto_movimiento`
--

CREATE TABLE `concepto_movimiento` (
  `id` int(11) NOT NULL,
  `categoria` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` varchar(25) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `concepto_movimiento`
--

INSERT INTO `concepto_movimiento` (`id`, `categoria`, `estado`) VALUES
(1, 'VENTA', '1'),
(2, 'SERVICIOS PÚBLICOS', '1'),
(3, 'COMPRA DE PRODUCTOS E INSUMOS', '1'),
(4, 'ARRIENDO', '1'),
(5, 'NÓMINA', '1'),
(6, 'GASTOS ADMINISTRATIVOS', '1'),
(7, 'MERCADEO Y PUBLICIDAD', '1'),
(8, 'TRANSPORTES, DOMICILIOS, LOGISTICA', '1'),
(9, 'MANTENIMIENTO Y REPARACIONES', '1'),
(10, 'MUEBLES, EQUIPOS Y MAQUINARÍA', '1'),
(11, 'OTROS', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_movimientos`
--

CREATE TABLE `detalles_movimientos` (
  `id` int(11) NOT NULL,
  `precio` decimal(11,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `estado` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `id_movimientos` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodo_pago`
--

CREATE TABLE `metodo_pago` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `metodo_pago`
--

INSERT INTO `metodo_pago` (`id`, `nombre`) VALUES
(1, 'EFECTIVO'),
(2, 'TARJETA'),
(3, 'TRANSFERENCIA'),
(4, 'DOLARES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

CREATE TABLE `movimientos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `total` decimal(11,2) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `estado_movimiento` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `id_concepto_movimiento` int(11) NOT NULL,
  `id_metodo_pago` int(11) DEFAULT NULL,
  `id_persona` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Disparadores `movimientos`
--
DELIMITER $$
CREATE TRIGGER `INSERTMov` AFTER INSERT ON `movimientos` FOR EACH ROW BEGIN 
    SET @nombremov = (SELECT categoria FROM concepto_movimiento WHERE id = NEW.id_concepto_movimiento);
    
     INSERT INTO bitacora (fecha,modulo,accion,id_usuario) VALUES (NOW(), "Balance", CONCAT('Registro de nuevo movimiento en el balance por: "',@nombremov,'" por "',NEW.total,'" y fue "',NEW.estado_movimiento,'"'),@usuario_id); 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE `notificaciones` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `mensaje` varchar(250) NOT NULL,
  `estado` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` varchar(25) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `nombre`, `estado`) VALUES
(1, 'Consultar Balance', '1'),
(2, 'Modificar Balance', '1'),
(3, 'Crear Balance', '1'),
(4, 'Eliminar Balance', '1'),
(5, 'Consultar Inventario', '1'),
(6, 'Modificar Inventario', ''),
(7, 'Crear Inventario', '1'),
(8, 'Eliminar Inventario', '1'),
(9, 'Consultar Deudas', '1'),
(10, 'Modificar Deudas', '1'),
(11, 'Crear Deudas', '1'),
(12, 'Eliminar Deudas', '1'),
(13, 'Consultar Proveedores', '1'),
(14, 'Modificar Proveedores', '1'),
(15, 'Crear Proveedores', '1'),
(16, 'Eliminar Proveedores', '1'),
(17, 'Consultar Clientes', '1'),
(18, 'Modificar Clientes', '1'),
(19, 'Crear Clientes', '1'),
(20, 'Eliminar Clientes', '1'),
(21, 'Consultar Usuarios', '1'),
(22, 'Modificar Usuarios', '1'),
(23, 'Crear Usuarios', ''),
(24, 'Eliminar Usuarios', '1'),
(25, 'Consultar Estadisticas', '1'),
(26, 'Consultar Reportes Balance', '1'),
(27, 'Consultar Reportes Inventario', '1'),
(28, 'Consultar Reportes Deudas', '1'),
(29, 'Crear Respaldo Base Datos', '1'),
(30, 'Modificar Base Datos', '1'),
(31, 'Consultar Roles', '1'),
(32, 'Modificar Roles', '1'),
(33, 'Crear Roles', '1'),
(34, 'Eliminar Roles', '1'),
(35, 'Crear Permisos', '1'),
(36, 'Consultar Reportes Bitacora', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `nro_doc` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tipo_doc` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `comentario` text COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `id_tipo_persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Disparadores `persona`
--
DELIMITER $$
CREATE TRIGGER `INSERTPersona` AFTER INSERT ON `persona` FOR EACH ROW BEGIN 
SET @tipo = (SELECT nombre FROM tipo_persona WHERE id = NEW.id_tipo_persona);
INSERT INTO bitacora(id_usuario, modulo, accion,fecha) 
    VALUES (@usuario_id,"Personas",CONCAT('Nuevo Registro del : "',@tipo,'" =>  "',NEW.nombre,'"'),NOW());
    END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `UPDATEPersona` AFTER UPDATE ON `persona` FOR EACH ROW BEGIN SET @tipo = (SELECT nombre FROM tipo_persona WHERE id = NEW.id_tipo_persona); INSERT INTO bitacora(id_usuario, modulo, accion,fecha) VALUES (@usuario_id,"Personas",CONCAT('EL "',@tipo,'" => "',NEW.nombre,'" se mofifico'),NOW()); END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `precio_costo` decimal(11,2) NOT NULL,
  `precio_venta` decimal(11,2) NOT NULL,
  `url_img` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `id_categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Disparadores `productos`
--
DELIMITER $$
CREATE TRIGGER `INSERTProd` AFTER INSERT ON `productos` FOR EACH ROW INSERT INTO bitacora(id_usuario, modulo, accion,fecha) 
    VALUES (@usuario_id,"Productos",CONCAT('Registro de un nuevo Producto : "',NEW.nombre,'"'),NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `UPDATEProv` AFTER UPDATE ON `productos` FOR EACH ROW INSERT INTO bitacora(id_usuario, modulo, accion,fecha) 
    VALUES (@usuario_id,"Productos",CONCAT('EL producto: "',NEW.nombre,'" fue modificado'),NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertnotificaciones` AFTER UPDATE ON `productos` FOR EACH ROW BEGIN 
   IF(new.cantidad <= 3) THEN 
        INSERT INTO notificaciones (titulo,mensaje,estado) VALUES (new.nombre, CONCAT('El producto tiene poco stock, hay "', new.cantidad, '" unidades disponibles"'),"1"); 
   END IF; 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `estado` varchar(25) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `nombre`, `descripcion`, `estado`) VALUES
(1, 'vendedor', 'ejecuta las ventas', '1'),
(3, 'superusuario', 'tiene todos los permisos', '1');

--
-- Disparadores `rol`
--
DELIMITER $$
CREATE TRIGGER `INSERTRol` AFTER INSERT ON `rol` FOR EACH ROW INSERT INTO bitacora(id_usuario, modulo, accion,fecha) 
    VALUES (@usuario_id,"Roles",CONCAT('Registro de un nuevo rol : "',NEW.nombre,'"'),NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `UPDATERol` AFTER UPDATE ON `rol` FOR EACH ROW INSERT INTO bitacora(id_usuario, modulo, accion,fecha) 
    VALUES (@usuario_id,"Roles",CONCAT('El rol : "',NEW.nombre,'" fue modificado'),NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_permiso`
--

CREATE TABLE `rol_permiso` (
  `id` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_permiso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `rol_permiso`
--

INSERT INTO `rol_permiso` (`id`, `id_rol`, `id_permiso`) VALUES
(38, 3, 1),
(39, 3, 3),
(40, 3, 4),
(41, 3, 5),
(42, 3, 6),
(43, 3, 7),
(44, 3, 8),
(45, 3, 9),
(46, 3, 10),
(47, 3, 11),
(48, 3, 12),
(49, 3, 13),
(50, 3, 14),
(51, 3, 15),
(52, 3, 16),
(53, 3, 17),
(54, 3, 18),
(55, 3, 19),
(56, 3, 20),
(57, 3, 21),
(58, 3, 22),
(59, 3, 23),
(60, 3, 24),
(61, 3, 25),
(62, 3, 26),
(63, 3, 27),
(64, 3, 28),
(65, 3, 29),
(66, 3, 30),
(67, 3, 31),
(68, 3, 32),
(69, 3, 33),
(70, 3, 34),
(71, 3, 35),
(72, 3, 36),
(73, 1, 36);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_persona`
--

CREATE TABLE `tipo_persona` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipo_persona`
--

INSERT INTO `tipo_persona` (`id`, `nombre`) VALUES
(1, 'proveedor'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `contraseña` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `contraseña`, `estado`, `id_rol`) VALUES
(1, 'SUPERUSUARIO', 'ezcolmenarjose@gmail.com', 'OVNRMjlzWkNQamp4SHVpSzNwYW5lZz09', '1', 3),
(3, 'ARIANNA', 'aripaocol@gmail.com', 'OVNRMjlzWkNQamp4SHVpSzNwYW5lZz09', '1', 3),
(18, 'FABIANA', 'fabianal@gmaul.com', 'OVNRMjlzWkNQamp4SHVpSzNwYW5lZz09', '1', 1);

--
-- Disparadores `usuarios`
--
DELIMITER $$
CREATE TRIGGER `INSERTUsuarios` AFTER INSERT ON `usuarios` FOR EACH ROW INSERT INTO bitacora(id_usuario, modulo, accion,fecha) 
    VALUES (@usuario_id,"Usuarios",CONCAT('Registro de un nuevo usuario : "',NEW.nombre,'"'),NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `UPDATEUsuario` AFTER UPDATE ON `usuarios` FOR EACH ROW IF @usuario_id != NULL THEN BEGIN
INSERT INTO bitacora(id_usuario, modulo, accion,fecha) 
    VALUES (@usuario_id,"Usuarios",CONCAT('El usuario : "',NEW.nombre,'" fue modificado'),NOW());
END; END IF
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abonos`
--
ALTER TABLE `abonos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_metodo_pago` (`id_metodo_pago`);

--
-- Indices de la tabla `abono_movimiento`
--
ALTER TABLE `abono_movimiento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_movimiento` (`id_movimiento`),
  ADD KEY `id_abono` (`id_abono`);

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `cat_producto`
--
ALTER TABLE `cat_producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `concepto_movimiento`
--
ALTER TABLE `concepto_movimiento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalles_movimientos`
--
ALTER TABLE `detalles_movimientos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_movimientos` (`id_movimientos`) USING BTREE;

--
-- Indices de la tabla `metodo_pago`
--
ALTER TABLE `metodo_pago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_metodo_pago` (`id_metodo_pago`),
  ADD KEY `id_persona` (`id_persona`),
  ADD KEY `id_concepto_movimiento` (`id_concepto_movimiento`) USING BTREE;

--
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipo_persona` (`id_tipo_persona`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol_permiso`
--
ALTER TABLE `rol_permiso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rol` (`id_rol`),
  ADD KEY `id_permiso` (`id_permiso`);

--
-- Indices de la tabla `tipo_persona`
--
ALTER TABLE `tipo_persona`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abonos`
--
ALTER TABLE `abonos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT de la tabla `abono_movimiento`
--
ALTER TABLE `abono_movimiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT de la tabla `cat_producto`
--
ALTER TABLE `cat_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `concepto_movimiento`
--
ALTER TABLE `concepto_movimiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `detalles_movimientos`
--
ALTER TABLE `detalles_movimientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `metodo_pago`
--
ALTER TABLE `metodo_pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `rol_permiso`
--
ALTER TABLE `rol_permiso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `tipo_persona`
--
ALTER TABLE `tipo_persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `abonos`
--
ALTER TABLE `abonos`
  ADD CONSTRAINT `abonos_ibfk_2` FOREIGN KEY (`id_metodo_pago`) REFERENCES `metodo_pago` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD CONSTRAINT `bitacora_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
