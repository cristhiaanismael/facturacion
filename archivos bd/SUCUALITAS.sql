-- Creación de la base de datos
CREATE DATABASE sucu_facturacion;
USE sucu_facturacion;

-- 1. Tabla de Sucursales
CREATE TABLE sucursales (
    id_sucursal INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    direccion VARCHAR(200) NOT NULL,
    telefono VARCHAR(20) NOT NULL
);

-- datos sucursales
INSERT INTO sucursales (nombre, direccion, telefono) VALUES
('SUCUALITAS Centro', 'Av. pollo feliz 183, Centro', '5568769802'),
('SUCUALITAS Norte', 'Calle Norte 581, Dubai', '5630187260'),
('SUCUALITAS Sur', 'Boulevard Sur 789, Idci', '5546215424');

-- 2. Tabla de Clientes
CREATE TABLE clientes (
    id_cliente INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    direccion VARCHAR(200),
    telefono VARCHAR(20),
    email VARCHAR(100),
    rfc VARCHAR(20),
    fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP,
    activo BOOLEAN DEFAULT TRUE
);

-- Insertar datos clientes
INSERT INTO clientes (nombre, direccion, telefono, email, rfc, fecha_registro) VALUES
('Juan Pérez', 'Calle Flores 123, Col. Jardines', '5551112233', 'juan@email.com', 'PERJ920101ABC', '2025-06-01 10:00:00'),
('María García', 'Av. Reforma 456, Centro', '5554445566', 'maria@email.com', 'GARM850202DEF', '2025-06-02 11:30:00'),
('Empresa ABC, S.A.', 'Blvd. Industrial 789, Parque Industrial', '5557778899', 'ventas@abc.com', 'ABC850101XYZ', '2025-06-03 09:15:00'),
('Roberto López', 'Calle Pinos 321, Col. Bosque', '5526845789', 'roberto@email.com', 'LORR900303GHI', '2025-06-04 14:20:00'),
('Tienda XYZ', 'Av. Comercial 654, Plaza Mayor', '5552223344', 'contacto@xyz.com', 'XYZ910405JKL', '2025-06-05 16:45:00');

-- 3. Tabla de Productos
CREATE TABLE productos (
    id_producto INT PRIMARY KEY AUTO_INCREMENT,
    codigo VARCHAR(50) UNIQUE,
    descripcion VARCHAR(200) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    existencia DECIMAL(10,2) DEFAULT 0,
    unidad_medida VARCHAR(20),
    iva DECIMAL(5,2) DEFAULT 0.16,
    activo BOOLEAN DEFAULT TRUE
);

-- Insertar datos productos
INSERT INTO productos (codigo, descripcion, precio, existencia, unidad_medida) VALUES
('ALI001', 'Alitas BBQ (6 piezas)', 120.00, 50, 'PORCION'),
('ALI002', 'Alitas Buffalo (6 piezas)', 120.00, 50, 'PORCION'),
('ALI003', 'Alitas Mango Habanero (6 piezas)', 130.00, 40, 'PORCION'),
('ALI004', 'Alitas Teriyaki (6 piezas)', 130.00, 40, 'PORCION'),
('ALI005', 'Alitas Ajo Parmesano (6 piezas)', 140.00, 35, 'PORCION'),
('ALI006', 'Orden de Papas a la Francesa', 50.00, 100, 'PORCION'),
('ALI007', 'Aros de Cebolla', 60.00, 80, 'PORCION'),
('ALI008', 'Refresco 500ml', 25.00, 200, 'PIEZA'),
('ALI009', 'Cerveza Nacional 355ml', 50.00, 150, 'PIEZA'),
('ALI010', 'Agua Mineral 500ml', 20.00, 120, 'PIEZA'),
('ALI011', 'Orden de Bastones de Zanahoria y Apio', 30.00, 60, 'PORCION'),
('ALI012', 'Salsa Extra BBQ', 15.00, 200, 'PIEZA'),
('ALI013', 'Salsa Extra Buffalo', 15.00, 200, 'PIEZA'),
('ALI014', 'Salsa Extra Ranch', 15.00, 200, 'PIEZA'),
('ALI015', 'Combo Alitas + Papas + Refresco', 180.00, 30, 'COMBO');

-- 4. Tabla de Ventas
CREATE TABLE ventas (
    id_venta INT PRIMARY KEY AUTO_INCREMENT,
    numero_ticket VARCHAR(20) UNIQUE NOT NULL,
    id_sucursal INT NOT NULL,
    id_cliente INT NULL,  
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
    subtotal DECIMAL(10,2) NOT NULL,
    iva DECIMAL(10,2) NOT NULL,
    total DECIMAL(10,2) NOT NULL,
    estado ENUM('PAGADA', 'CANCELADA', 'PENDIENTE') DEFAULT 'PAGADA',
    metodo_pago ENUM('EFECTIVO', 'TARJETA', 'TRANSFERENCIA', 'OTRO'),
    FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente) ON DELETE SET NULL,
    FOREIGN KEY (id_sucursal) REFERENCES sucursales(id_sucursal)
);

-- Insertar datos  ventas 
INSERT INTO ventas (numero_ticket, id_sucursal, id_cliente, fecha, subtotal, iva, total, estado, metodo_pago) VALUES
('TKT-2025-0001', 1, 1, '2025-06-15 14:30:00', 120.00, 19.20, 139.20, 'PAGADA', 'EFECTIVO'),
('TKT-2025-0002', 1, NULL, '2025-06-16 19:45:00', 170.00, 27.20, 197.20, 'PAGADA', 'TARJETA'),
('TKT-2025-0003', 2, 3, '2025-06-17 13:15:00', 250.00, 40.00, 290.00, 'PAGADA', 'EFECTIVO'),
('TKT-2025-0004', 1, NULL, '2025-06-18 20:20:00', 195.00, 31.20, 226.20, 'PAGADA', 'TARJETA'),
('TKT-2025-0005', 3, 4, '2025-06-19 18:30:00', 390.00, 62.40, 452.40, 'PAGADA', 'EFECTIVO'),
('TKT-2025-0006', 2, NULL, '2025-06-20 21:00:00', 140.00, 22.40, 162.40, 'PAGADA', 'EFECTIVO'),
('TKT-2025-0007', 1, 2, '2025-06-21 15:45:00', 170.00, 27.20, 197.20, 'CANCELADA', 'TARJETA'),
('TKT-2025-0008', 2, NULL, '2025-06-22 16:10:00', 25.00, 4.00, 29.00, 'PAGADA', 'EFECTIVO'),
('TKT-2025-0009', 3, 4, '2025-06-23 14:30:00', 280.00, 44.80, 324.80, 'PAGADA', 'TARJETA'),
('TKT-2025-0010', 1, NULL, '2025-06-24 17:30:00', 360.00, 57.60, 417.60, 'PAGADA', 'EFECTIVO');

-- 5. Tabla de Detalles de Venta
CREATE TABLE detalles_venta (
    id_detalle INT PRIMARY KEY AUTO_INCREMENT,
    id_venta INT NOT NULL,
    id_producto INT NOT NULL,
    cantidad DECIMAL(10,2) NOT NULL,
    precio_unitario DECIMAL(10,2) NOT NULL,
    iva DECIMAL(10,2) NOT NULL,
    importe DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (id_venta) REFERENCES ventas(id_venta),
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
);

-- Insertar datos  detalles_venta
INSERT INTO detalles_venta (id_venta, id_producto, cantidad, precio_unitario, iva, importe) VALUES
(1, 1, 1, 120.00, 19.20, 139.20),
(2, 2, 1, 120.00, 19.20, 139.20),
(2, 8, 1, 25.00, 4.00, 29.00),
(2, 12, 1, 15.00, 2.40, 17.40),
(3, 3, 1, 130.00, 20.80, 150.80),
(3, 6, 1, 50.00, 8.00, 58.00),
(3, 8, 2, 25.00, 8.00, 58.00),
(4, 15, 1, 180.00, 28.80, 208.80),
(4, 14, 1, 15.00, 2.40, 17.40),
(5, 1, 2, 120.00, 38.40, 278.40),
(5, 4, 1, 130.00, 20.80, 150.80),
(6, 5, 1, 140.00, 22.40, 162.40),
(7, 2, 1, 120.00, 19.20, 139.20),
(7, 6, 1, 50.00, 8.00, 58.00),
(8, 8, 1, 25.00, 4.00, 29.00),
(9, 1, 1, 120.00, 19.20, 139.20),
(9, 3, 1, 130.00, 20.80, 150.80),
(9, 13, 1, 15.00, 2.40, 17.40),
(10, 15, 2, 180.00, 57.60, 417.60);

-- 6. Tabla de Facturas
CREATE TABLE facturas (
    id_factura INT PRIMARY KEY AUTO_INCREMENT,
    folio VARCHAR(20) UNIQUE NOT NULL,
    id_venta INT NOT NULL,  -- Ahora relacionada directamente con la venta
    fecha_emision DATETIME DEFAULT CURRENT_TIMESTAMP,
    subtotal DECIMAL(10,2) NOT NULL,
    iva DECIMAL(10,2) NOT NULL,
    total DECIMAL(10,2) NOT NULL,
    uuid VARCHAR(36),
    rfc_emisor VARCHAR(13),
    certificado_sat TEXT,
    sello_sat TEXT,
    estado ENUM('VALIDA', 'CANCELADA') DEFAULT 'VALIDA',
    FOREIGN KEY (id_venta) REFERENCES ventas(id_venta)
);

-- Insertar datos  facturas 
INSERT INTO facturas (folio, id_venta, fecha_emision, subtotal, iva, total, uuid, rfc_emisor, estado) VALUES
('FAC-ALI-2025-001', 1, '2025-06-15 14:35:00', 120.00, 19.20, 139.20, 'a1b2c3d4-e5f6-7890-1234-567890abcdef', 'ALI850101XYZ', 'VALIDA'),
('FAC-ALI-2025-002', 2, '2025-06-16 19:50:00', 170.00, 27.20, 197.20, 'b2c3d4e5-f6g7-8901-2345-678901abcdef', 'ALI850101XYZ', 'VALIDA'),
('FAC-ALI-2025-003', 3, '2025-06-17 13:20:00', 250.00, 40.00, 290.00, 'c3d4e5f6-g7h8-9012-3456-789012abcdef', 'ALI850101XYZ', 'VALIDA'),
('FAC-ALI-2025-004', 4, '2025-06-18 20:25:00', 195.00, 31.20, 226.20, 'd4e5f6g7-h8i9-0123-4567-890123abcdef', 'ALI850101XYZ', 'VALIDA'),
('FAC-ALI-2025-005', 5, '2025-06-19 18:35:00', 390.00, 62.40, 452.40, 'e5f6g7h8-i9j0-1234-5678-901234abcdef', 'ALI850101XYZ', 'VALIDA'),
('FAC-ALI-2025-006', 6, '2025-06-20 21:05:00', 140.00, 22.40, 162.40, 'f6g7h8i9-j0k1-2345-6789-012345abcdef', 'ALI850101XYZ', 'VALIDA'),
('FAC-ALI-2025-007', 8, '2025-06-22 16:15:00', 25.00, 4.00, 29.00, 'g7h8i9j0-k1l2-3456-7890-123456abcdef', 'ALI850101XYZ', 'VALIDA'),
('FAC-ALI-2025-008', 9, '2025-06-23 14:35:00', 280.00, 44.80, 324.80, 'h8i9j0k1-l2m3-4567-8901-234567abcdef', 'ALI850101XYZ', 'VALIDA');


ALTER TABLE `ventas` 
DROP COLUMN `fecha`;

ALTER TABLE `sucu_facturacion`.`ventas` 
ADD COLUMN `fecha` DATE NULL AFTER `total`;
