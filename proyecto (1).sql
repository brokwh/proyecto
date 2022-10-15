SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE categoria (
  ID int(16) NOT NULL,
  nombre varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE cat_pro (
  idCat int(16) NOT NULL,
  idPro int(16) NOT NULL,
  nombre varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE cliente (
  id int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE clie_ord (
  idOrd int(16) NOT NULL,
  idCLiente int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE clie_res (
  idRes int(16) NOT NULL,
  idCLiente int(16) NOT NULL,
  cedula int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE estacion (
  id int(16) NOT NULL,
  nombre varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE estadopago (
  id int(16) NOT NULL,
  nombre int(16) NOT NULL,
  estadoMetodo tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE menu (
  id int(16) NOT NULL,
  nombre varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  estadoMenu tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE mesa (
  id int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE metodopago (
  id int(16) NOT NULL,
  nombre varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  estadoMetodo tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE orden (
  id int(16) NOT NULL,
  precioTotal int(16) NOT NULL,
  fechaHora date NOT NULL,
  numeroMesa int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE ord_mesa (
  idMesa int(16) NOT NULL,
  idOrden int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE pago (
  id int(16) NOT NULL,
  estadoPago tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE pago_metodo (
  idPago int(16) NOT NULL,
  idMetodoP int(16) NOT NULL,
  nombreMetodo varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE pago_ord (
  idPago int(16) NOT NULL,
  idOrden int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE pertenece (
  idMenu int(16) NOT NULL,
  idProduc int(16) NOT NULL,
  nombreProducto varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE producto (
  id int(16) NOT NULL,
  nombre varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  tipo varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  precio int(16) NOT NULL,
  celiaco tinyint(1) NOT NULL DEFAULT 0,
  vegano tinyint(1) NOT NULL DEFAULT 0,
  vegetariano tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE pro_ord (
  idPro int(16) NOT NULL,
  idOrden int(16) NOT NULL,
  descripcion varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  cantidadProductos varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE realiza (
  idEst int(16) NOT NULL,
  idProduc int(16) NOT NULL,
  nombreProducto varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE reserva (
  cedula int(8) NOT NULL,
  ID int(15) NOT NULL,
  telefonoCliente int(16) NOT NULL,
  fechaHora date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE res_mesa (
  idMesa int(16) NOT NULL,
  idRes int(16) NOT NULL,
  cedula int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE res_ord (
  cedula int(16) NOT NULL,
  idRes int(16) NOT NULL,
  idOrd int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE usuarios (
  id int(16) NOT NULL,
  tipo varchar(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  pass varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  pin varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE categoria
  ADD PRIMARY KEY (ID);

ALTER TABLE cat_pro
  ADD KEY FK_idCat (idCat),
  ADD KEY FK_idPro (idPro),
  ADD KEY FK_nombrePro (nombre) USING BTREE;

ALTER TABLE cliente
  ADD PRIMARY KEY (id);

ALTER TABLE clie_ord
  ADD KEY idOrd (idOrd,idCLiente),
  ADD KEY idCLiente (idCLiente);

ALTER TABLE clie_res
  ADD KEY idRes (idRes,idCLiente,cedula),
  ADD KEY cedula (cedula),
  ADD KEY idCLiente (idCLiente);

ALTER TABLE estacion
  ADD PRIMARY KEY (id);

ALTER TABLE estadopago
  ADD PRIMARY KEY (id);

ALTER TABLE menu
  ADD PRIMARY KEY (id);

ALTER TABLE mesa
  ADD PRIMARY KEY (id);

ALTER TABLE metodopago
  ADD PRIMARY KEY (id,nombre),
  ADD KEY nombre (nombre);

ALTER TABLE orden
  ADD PRIMARY KEY (id);

ALTER TABLE ord_mesa
  ADD KEY idMesa (idMesa,idOrden),
  ADD KEY idOrden (idOrden);

ALTER TABLE pago
  ADD PRIMARY KEY (id);

ALTER TABLE pago_metodo
  ADD KEY idPago (idPago,idMetodoP,nombreMetodo),
  ADD KEY idMetodoP (idMetodoP),
  ADD KEY nombreMetodo (nombreMetodo) USING BTREE;

ALTER TABLE pago_ord
  ADD KEY idPago (idPago,idOrden),
  ADD KEY idOrden (idOrden);

ALTER TABLE pertenece
  ADD KEY idMenu (idMenu,idProduc,nombreProducto),
  ADD KEY idProduc (idProduc);

ALTER TABLE producto
  ADD PRIMARY KEY (id,nombre),
  ADD KEY nombre (nombre);

ALTER TABLE pro_ord
  ADD KEY idPro (idPro,idOrden),
  ADD KEY idOrden (idOrden);

ALTER TABLE realiza
  ADD KEY idEst (idEst,idProduc,nombreProducto),
  ADD KEY idProduc (idProduc);

ALTER TABLE reserva
  ADD PRIMARY KEY (ID,cedula),
  ADD KEY cedula (cedula);

ALTER TABLE res_mesa
  ADD KEY idRes (idRes,idMesa,cedula),
  ADD KEY idMesa (idMesa),
  ADD KEY cedula (cedula);

ALTER TABLE res_ord
  ADD KEY cedula (cedula,idRes,idOrd),
  ADD KEY idRes (idRes),
  ADD KEY idOrd (idOrd);

ALTER TABLE usuarios
  ADD PRIMARY KEY (id);


ALTER TABLE cliente
  MODIFY id int(16) NOT NULL AUTO_INCREMENT;

ALTER TABLE estacion
  MODIFY id int(16) NOT NULL AUTO_INCREMENT;

ALTER TABLE estadopago
  MODIFY id int(16) NOT NULL AUTO_INCREMENT;

ALTER TABLE menu
  MODIFY id int(16) NOT NULL AUTO_INCREMENT;

ALTER TABLE mesa
  MODIFY id int(16) NOT NULL AUTO_INCREMENT;

ALTER TABLE metodopago
  MODIFY id int(16) NOT NULL AUTO_INCREMENT;

ALTER TABLE orden
  MODIFY id int(16) NOT NULL AUTO_INCREMENT;

ALTER TABLE pago
  MODIFY id int(16) NOT NULL AUTO_INCREMENT;

ALTER TABLE producto
  MODIFY id int(16) NOT NULL AUTO_INCREMENT;

ALTER TABLE reserva
  MODIFY ID int(15) NOT NULL AUTO_INCREMENT;

ALTER TABLE usuarios
  MODIFY id int(16) NOT NULL AUTO_INCREMENT;


ALTER TABLE cat_pro
  ADD CONSTRAINT FK_Cat_id FOREIGN KEY (idCat) REFERENCES categoria (ID) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT FK_Pro_id FOREIGN KEY (idPro) REFERENCES producto (id) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT cat_pro_ibfk_1 FOREIGN KEY (nombre) REFERENCES producto (nombre) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE clie_ord
  ADD CONSTRAINT clie_ord_ibfk_1 FOREIGN KEY (idOrd) REFERENCES orden (id) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT clie_ord_ibfk_2 FOREIGN KEY (idCLiente) REFERENCES `cliente` (id) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE clie_res
  ADD CONSTRAINT clie_res_ibfk_1 FOREIGN KEY (cedula) REFERENCES reserva (cedula) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT clie_res_ibfk_2 FOREIGN KEY (idCLiente) REFERENCES `cliente` (id) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT clie_res_ibfk_3 FOREIGN KEY (idRes) REFERENCES reserva (ID) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE pago_metodo
  ADD CONSTRAINT pago_metodo_ibfk_1 FOREIGN KEY (idPago) REFERENCES pago (id) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT pago_metodo_ibfk_2 FOREIGN KEY (idMetodoP) REFERENCES metodopago (id) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT pago_metodo_ibfk_3 FOREIGN KEY (nombreMetodo) REFERENCES metodopago (nombre) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE pertenece
  ADD CONSTRAINT pertenece_ibfk_1 FOREIGN KEY (idMenu) REFERENCES menu (id) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT pertenece_ibfk_2 FOREIGN KEY (idProduc) REFERENCES producto (id) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE pro_ord
  ADD CONSTRAINT pro_ord_ibfk_1 FOREIGN KEY (idPro) REFERENCES producto (id) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT pro_ord_ibfk_2 FOREIGN KEY (idOrden) REFERENCES orden (id) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE realiza
  ADD CONSTRAINT realiza_ibfk_1 FOREIGN KEY (idEst) REFERENCES estacion (id) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT realiza_ibfk_2 FOREIGN KEY (idProduc) REFERENCES producto (id) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE res_mesa
  ADD CONSTRAINT res_mesa_ibfk_1 FOREIGN KEY (idMesa) REFERENCES mesa (id) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT res_mesa_ibfk_2 FOREIGN KEY (idRes) REFERENCES reserva (ID) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT res_mesa_ibfk_3 FOREIGN KEY (cedula) REFERENCES reserva (cedula) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE res_ord
  ADD CONSTRAINT res_ord_ibfk_1 FOREIGN KEY (cedula) REFERENCES reserva (cedula) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT res_ord_ibfk_2 FOREIGN KEY (idRes) REFERENCES reserva (ID) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT res_ord_ibfk_3 FOREIGN KEY (idOrd) REFERENCES orden (id) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
