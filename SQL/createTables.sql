CREATE TABLE USUARIO
(
  USERNAME VARCHAR(16) NOT NULL PRIMARY KEY,
  NIFDNI VARCHAR(10),
  NOMBRE VARCHAR(30) NOT NULL,
  APELLIDOS VARCHAR(40) NOT NULL,
  TELEFONO NUMERIC(12),
  EMAIL VARCHAR(20),
  PASSWORD VARCHAR(10)
);

CREATE TABLE CLIENTE
(
  IDCLIENTE NUMERIC(6) NOT NULL PRIMARY KEY,
  NIFDNI VARCHAR(10),
  NOMBRE VARCHAR(30) NOT NULL,
  APELLIDOS VARCHAR(30) NOT NULL,
  TELEFONO NUMERIC(12),
  EMAIL VARCHAR(30)
);

CREATE TABLE FACTURA
(
  IDFACTURA NUMERIC(6) NOT NULL PRIMARY KEY,
  PRECIO NUMERIC(10) NOT NULL,
  FECHASALIDA DATE NOT NULL,
  IDCLIENTE NUMERIC(6) NOT NULL,
    FOREIGN KEY( IDCLIENTE ) REFERENCES CLIENTE ( IDCLIENTE )
);

CREATE TABLE ARTICULO
(
  ETIQUETA NUMERIC(6) NOT NULL PRIMARY KEY,
  FECHAENTRADA DATE NOT NULL,
  IDFACTURA NUMERIC(6) NOT NULL,
    FOREIGN KEY( IDFACTURA ) REFERENCES FACTURA ( IDFACTURA )
);

CREATE TABLE ESPACIOALMACENAMIENTO
(
  IDUBICACION NUMERIC(6) NOT NULL PRIMARY KEY,
  ESTANTERIA NUMERIC(2) NOT NULL,
  CAJON NUMERIC(2) NOT NULL
);

CREATE TABLE ESTADOMOVILROTO
(
  ESTADO SMALLINT NOT NULL PRIMARY KEY,
  NOMBREESTADOMOVIL VARCHAR(10) NOT NULL
);

CREATE TABLE MOVILROTO
(
  ETIQUETA NUMERIC(6) NOT NULL PRIMARY KEY,
  DESCRIPCION VARCHAR(50),
  ESTADO SMALLINT NOT NULL,
  IDUBICACION NUMERIC(6),
    FOREIGN KEY( ETIQUETA ) REFERENCES ARTICULO ( ETIQUETA ),
    FOREIGN KEY( ESTADO ) REFERENCES ESTADOMOVILROTO ( ESTADO ),
    FOREIGN KEY( IDUBICACION ) REFERENCES ESPACIOALMACENAMIENTO ( IDUBICACION )
);

CREATE TABLE MISCELANEA
(
  ETIQUETA NUMERIC(6) NOT NULL PRIMARY KEY,
  INFORMACION VARCHAR(100) NOT NULL,
    FOREIGN KEY( ETIQUETA ) REFERENCES ARTICULO ( ETIQUETA )
);

CREATE TABLE TIPOCOMPONENTE
(
  TIPO SMALLINT NOT NULL PRIMARY KEY,
  NOMBRETIPOCOMPONENTE VARCHAR(20) NOT NULL
);

CREATE TABLE DESCRIPCIONCOMPONENTE
(
  IDDESCRIPCION NUMERIC(6) NOT NULL PRIMARY KEY,
  TIPO SMALLINT NOT NULL,
  MARCA VARCHAR(10) NOT NULL,
  MODELO VARCHAR(10) NOT NULL,
  CARACTERISTICAS VARCHAR(50) NOT NULL,
    FOREIGN KEY( TIPO ) REFERENCES TIPOCOMPONENTE ( TIPO )
);

CREATE TABLE ESTADOCOMPONENTE
(
  ESTADO SMALLINT NOT NULL PRIMARY KEY,
  NOMBREESTADOCOMPONENTE VARCHAR(10) NOT NULL
);

CREATE TABLE COMPONENTE
(
  ETIQUETA NUMERIC(6) NOT NULL PRIMARY KEY,
  ESTADO SMALLINT NOT NULL,
  IDDESCRIPCION NUMERIC(6) NOT NULL,
  ETIQUETAMOVIL NUMERIC(6),
  IDUBICACION NUMERIC(6),
    FOREIGN KEY( ETIQUETA ) REFERENCES ARTICULO ( ETIQUETA ),
    FOREIGN KEY( ESTADO ) REFERENCES ESTADOCOMPONENTE ( ESTADO ),
    FOREIGN KEY( IDDESCRIPCION ) REFERENCES DESCRIPCIONCOMPONENTE ( IDDESCRIPCION ),
    FOREIGN KEY( ETIQUETAMOVIL ) REFERENCES MOVILROTO ( ETIQUETA ),
    FOREIGN KEY( IDUBICACION ) REFERENCES ESPACIOALMACENAMIENTO ( IDUBICACION )
);
