CREATE DATABASE papelera;

USE papelera;

CREATE TABLE usuarios(
id              int(255) auto_increment not null,
nombre          varchar(100) not null,
apellidos       varchar(255),
password        varchar(255) not null,
empresa    		varchar(255) not null,
cuit			varchar(255),
email           varchar(255) not null,
telefono    	varchar(255) not null,
direcCalle  	varchar(255),
direcAltura  	varchar(255),
piso 		 	int(255),
depto 		 	varchar(255),
esquina1		varchar(255),
esquina2		varchar(255),
rol             varchar(20),
imagen          varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)  
)ENGINE=InnoDb;

INSERT INTO usuarios VALUES(NULL, 'Sacha', 'Barragan', 'contrasena', 'Voyager Web Design', 
	NULL, 'voyagerwebdesign@gmail.com', '2236633492', null, null, null, null, null, null,  'admin', null);

CREATE TABLE categorias(
id              int(255) auto_increment not null,
nombre          varchar(100) not null,
CONSTRAINT pk_categorias PRIMARY KEY(id) 
)ENGINE=InnoDb;

INSERT INTO categorias VALUES(null, 'Hortalizas');
INSERT INTO categorias VALUES(null, 'Verduras');
INSERT INTO categorias VALUES(null, 'Frutas');
INSERT INTO categorias VALUES(null, 'Verdes');

CREATE TABLE productos(
id              int(255) auto_increment not null,
categoria_id    int(255) not null,
nombre          varchar(100) not null,
descripcion     text,
precio          float(100,2) not null,
ventaPo			varchar(255) not null,
stock           int(255) not null,
oferta          varchar(2),
fecha           date not null,
imagen          varchar(255),
CONSTRAINT pk_categorias PRIMARY KEY(id),
CONSTRAINT fk_producto_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDb;


CREATE TABLE pedidos(
id              int(255) auto_increment not null,
usuario_id      int(255) not null,
provincia       varchar(100) not null,
localidad       varchar(100) not null,
direccion       varchar(255) not null,
coste           float(200,2) not null,
estado          varchar(20) not null,
fecha           date,
hora            time,
CONSTRAINT pk_pedidos PRIMARY KEY(id),
CONSTRAINT fk_pedido_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDb;

CREATE TABLE lineas_pedidos(
id              int(255) auto_increment not null,
pedido_id       int(255) not null,
producto_id     int(255) not null,
unidades        int(255) not null,
CONSTRAINT pk_lineas_pedidos PRIMARY KEY(id),
CONSTRAINT fk_linea_pedido FOREIGN KEY(pedido_id) REFERENCES pedidos(id),
CONSTRAINT fk_linea_producto FOREIGN KEY(producto_id) REFERENCES productos(id)
)ENGINE=InnoDb;