--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: insumo; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE insumo (
    cod_insumo character varying(2) NOT NULL,
    nombre_insumo character varying(30),
    cantidad_insumo character varying(100)
);


ALTER TABLE public.insumo OWNER TO postgres;

--
-- Name: insumo_plato; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE insumo_plato (
    cod_insumo character varying(10) NOT NULL,
    cod_plato character varying(10) NOT NULL,
    cant_insumo_utilizado character varying(50)
);


ALTER TABLE public.insumo_plato OWNER TO postgres;

--
-- Name: mesa; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE mesa (
    id_mesa character varying(2) NOT NULL,
    cantmax_mesas character varying(1),
    ubicacion character varying(20)
);


ALTER TABLE public.mesa OWNER TO postgres;

--
-- Name: pedido; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE pedido (
    id_pedido character varying(2) NOT NULL,
    rut_usuario character varying(4),
    tipo_pedido character varying(90),
    id_mesa character varying(2),
    rut_personal character varying(4),
    fecha_pedido date
);


ALTER TABLE public.pedido OWNER TO postgres;

--
-- Name: personal_1; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE personal_1 (
    rut_personal character varying(4) NOT NULL,
    nombre_personal character varying(30),
    telefono_personal character varying(10),
    direccion_personal character varying(50),
    cod_tipo character varying(2),
    cod_turno character varying(2)
);


ALTER TABLE public.personal_1 OWNER TO postgres;

--
-- Name: plato; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE plato (
    cod_plato character varying(2) NOT NULL,
    precio_plato integer,
    tipo_plato character varying(30),
    descripcion_plato character varying(100),
    rut_personal character varying(4)
);


ALTER TABLE public.plato OWNER TO postgres;

--
-- Name: plato_pedido; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE plato_pedido (
    id_pedido character varying(12) NOT NULL,
    cod_plato character varying(10) NOT NULL
);


ALTER TABLE public.plato_pedido OWNER TO postgres;

--
-- Name: proveedor; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE proveedor (
    rut_proveedor character varying(4) NOT NULL,
    nombre_proveedor character varying(30),
    direccion_proveedor character varying(50),
    telefono_proveedor character varying(12),
    mail_proveedor character varying(50)
);


ALTER TABLE public.proveedor OWNER TO postgres;

--
-- Name: proveedor_insumo; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE proveedor_insumo (
    rut_proveedor character varying(4) NOT NULL,
    cod_insumo character varying(2) NOT NULL,
    precio_insumo integer
);


ALTER TABLE public.proveedor_insumo OWNER TO postgres;

--
-- Name: tipo_personal; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tipo_personal (
    cod_tipo character varying(2) NOT NULL,
    descripcion character varying(40)
);


ALTER TABLE public.tipo_personal OWNER TO postgres;

--
-- Name: turno; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE turno (
    cod_turno character varying(2) NOT NULL,
    descripcion character varying(40)
);


ALTER TABLE public.turno OWNER TO postgres;

--
-- Name: usuario; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE usuario (
    rut_usuario character varying(4) NOT NULL,
    nombre_usuario character varying(30),
    direccion_usuario character varying(50),
    telefono_usuario character varying(10),
    tipo_usuario character varying(20),
    fechanac_usuario date,
    cedula_usuario character varying(12),
    clave character varying(15)
);


ALTER TABLE public.usuario OWNER TO postgres;

--
-- Name: venta; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE venta (
    id_venta character varying(2) NOT NULL,
    iva integer,
    total integer,
    fecha_pedido date,
    id_pedido character varying(2)
);


ALTER TABLE public.venta OWNER TO postgres;

--
-- Data for Name: insumo; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO insumo VALUES ('02', 'POLLO', '50 Libras');
INSERT INTO insumo VALUES ('03', 'Bebidas Hipinto', '1O Canastas Pina:
10 Canastas Kola:
10 Canastas Manzana : ');
INSERT INTO insumo VALUES ('04', 'Cerveza', '20 Canastas Light:
20 Canastas Poker:
20 Canastas Reds:');
INSERT INTO insumo VALUES ('05', 'Frutas', '10 Manzanas:
20 Pinas:
30 Naranjas:
50 Limones: ');
INSERT INTO insumo VALUES ('88', 'sdfasfd', 'safdf');
INSERT INTO insumo VALUES ('01', 'CARNE', '20');


--
-- Data for Name: insumo_plato; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO insumo_plato VALUES ('03', '03', '5 litros');
INSERT INTO insumo_plato VALUES ('01', '04', '5Libras');


--
-- Data for Name: mesa; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO mesa VALUES ('02', '3', 'SectorA');
INSERT INTO mesa VALUES ('09', '7', 'SectorB');
INSERT INTO mesa VALUES ('03', '4', 'SectorA');
INSERT INTO mesa VALUES ('10', '2', 'SectorB');
INSERT INTO mesa VALUES ('01', '5', 'SectorC');


--
-- Data for Name: pedido; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO pedido VALUES ('15', '0000', 'sencillo', '03', '1002', '2014-10-10');
INSERT INTO pedido VALUES ('80', '0000', 'grande', '03', '1002', '2014-10-20');


--
-- Data for Name: personal_1; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO personal_1 VALUES ('1003', 'ANDREA', '6878484', 'NIZA', '04', '01');
INSERT INTO personal_1 VALUES ('1004', 'RAMIRO', '632125', 'COAVICONSA', '03', '02');
INSERT INTO personal_1 VALUES ('1005', 'RAFAEL', '6984515', 'NIZA', '05', '02');
INSERT INTO personal_1 VALUES ('1002', 'PEDRO ALBERTO', '5373789', 'Limoncito florida', '02', '01');


--
-- Data for Name: plato; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO plato VALUES ('02', 30000, 'Grande(2 personas)', 'Pechuga a la plancha(Ensalada,papas a la francesa)', '1002');
INSERT INTO plato VALUES ('03', 150000, 'Empresarial(8-10 personas)', 'Picada mixta paisa', '1002');
INSERT INTO plato VALUES ('05', 10000, 'Almuerzo sencillo(1 persona)', 'Almuerzo de la casa(Depende Del Dia)', '1002');
INSERT INTO plato VALUES ('01', 156000, 'pequeno', 'Carne', '1002');
INSERT INTO plato VALUES ('04', 15000, 'Pequeno', 'Carne', '1002');


--
-- Data for Name: plato_pedido; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- Data for Name: proveedor; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO proveedor VALUES ('2002', 'MERCASUR', 'Asturias', '6549878', 'mercasur@hotmail.com');
INSERT INTO proveedor VALUES ('2003', 'HIPINTO', 'Salle', '6548541', 'Hipinto@hotmail.com');
INSERT INTO proveedor VALUES ('2004', 'Cerveza', 'BOGOTA', '6325415', 'cerveza@hotmail.com');
INSERT INTO proveedor VALUES ('2005', 'Frutas Frescas ABC', 'Centro', '6944564', 'frutasABC@hotmail.com');
INSERT INTO proveedor VALUES ('2001', 'CARNES.a', 'CABECERAa', '6362154a', 'Canesbbca@hotmail.com');


--
-- Data for Name: proveedor_insumo; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO proveedor_insumo VALUES ('2003', '03', 95000);
INSERT INTO proveedor_insumo VALUES ('2004', '04', 280000);
INSERT INTO proveedor_insumo VALUES ('2005', '05', 100000);
INSERT INTO proveedor_insumo VALUES ('2002', '02', 54000);


--
-- Data for Name: tipo_personal; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO tipo_personal VALUES ('01', 'Mesero');
INSERT INTO tipo_personal VALUES ('02', 'Cocineros ');
INSERT INTO tipo_personal VALUES ('03', 'Mensajero ');
INSERT INTO tipo_personal VALUES ('04', 'Administrador ');
INSERT INTO tipo_personal VALUES ('05', 'JEFE');


--
-- Data for Name: turno; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO turno VALUES ('01', 'Horario Diurno');
INSERT INTO turno VALUES ('02', 'Horario Nocturno');


--
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO usuario VALUES ('2202', 'JERSON', 'PAYADOR', '636001', 'programador', '1996-04-02', '456423132', '123456');
INSERT INTO usuario VALUES ('2201', 'RAFAEL', 'NIZA', '6360000', 'administrador', '1993-06-03', '1098738764', '123456');
INSERT INTO usuario VALUES ('0000', 'CLIENTE SIN REGISTRO', 'AL FORNO RESTAURANTE', '000000000', 'sin registro', '2014-08-30', '0000000000', '');
INSERT INTO usuario VALUES ('2205', 'JOSE DAVID', 'NIZA', '636001', 'cliente', '2005-06-07', '498745614', '123456');
INSERT INTO usuario VALUES ('2210', 'JULIAN', 'SAN', '636003', 'cliente', '1991-11-09', '878676', '123456');
INSERT INTO usuario VALUES ('2010', 'elkin alfredo', 'zapamanga', '31564897', 'cliente', '2014-09-06', '10987384', '123456');
INSERT INTO usuario VALUES ('2160', 'fhjfghjf', 'fgjhfg', '24354', 'cliente', '2014-09-06', '56346545', '453634');


--
-- Data for Name: venta; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO venta VALUES ('02', 1000, 80000, '2014-10-10', '80');
INSERT INTO venta VALUES ('01', 2000, 60000, '2015-10-10', '15');


--
-- Name: insumo_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY insumo
    ADD CONSTRAINT insumo_pkey PRIMARY KEY (cod_insumo);


--
-- Name: insumo_plato_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY insumo_plato
    ADD CONSTRAINT insumo_plato_pkey PRIMARY KEY (cod_insumo, cod_plato);


--
-- Name: mesa_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY mesa
    ADD CONSTRAINT mesa_pkey PRIMARY KEY (id_mesa);


--
-- Name: pedido_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY pedido
    ADD CONSTRAINT pedido_pkey PRIMARY KEY (id_pedido);


--
-- Name: personal_1_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY personal_1
    ADD CONSTRAINT personal_1_pkey PRIMARY KEY (rut_personal);


--
-- Name: plato_pedido_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY plato_pedido
    ADD CONSTRAINT plato_pedido_pkey PRIMARY KEY (id_pedido, cod_plato);


--
-- Name: plato_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY plato
    ADD CONSTRAINT plato_pkey PRIMARY KEY (cod_plato);


--
-- Name: proveedor_insumo_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY proveedor_insumo
    ADD CONSTRAINT proveedor_insumo_pkey PRIMARY KEY (rut_proveedor, cod_insumo);


--
-- Name: proveedor_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY proveedor
    ADD CONSTRAINT proveedor_pkey PRIMARY KEY (rut_proveedor);


--
-- Name: tipo_personal_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tipo_personal
    ADD CONSTRAINT tipo_personal_pkey PRIMARY KEY (cod_tipo);


--
-- Name: turno_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY turno
    ADD CONSTRAINT turno_pkey PRIMARY KEY (cod_turno);


--
-- Name: usuario_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (rut_usuario);


--
-- Name: venta_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY venta
    ADD CONSTRAINT venta_pkey PRIMARY KEY (id_venta);


--
-- Name: insumo_plato_cod_insumo_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY insumo_plato
    ADD CONSTRAINT insumo_plato_cod_insumo_fkey FOREIGN KEY (cod_insumo) REFERENCES insumo(cod_insumo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: insumo_plato_cod_plato_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY insumo_plato
    ADD CONSTRAINT insumo_plato_cod_plato_fkey FOREIGN KEY (cod_plato) REFERENCES plato(cod_plato) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: pedido_id_mesa_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY pedido
    ADD CONSTRAINT pedido_id_mesa_fkey FOREIGN KEY (id_mesa) REFERENCES mesa(id_mesa) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: pedido_rut_personal_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY pedido
    ADD CONSTRAINT pedido_rut_personal_fkey FOREIGN KEY (rut_personal) REFERENCES personal_1(rut_personal) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: pedido_rut_usuario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY pedido
    ADD CONSTRAINT pedido_rut_usuario_fkey FOREIGN KEY (rut_usuario) REFERENCES usuario(rut_usuario) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: personal_1_cod_tipo_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY personal_1
    ADD CONSTRAINT personal_1_cod_tipo_fkey FOREIGN KEY (cod_tipo) REFERENCES tipo_personal(cod_tipo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: personal_1_cod_turno_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY personal_1
    ADD CONSTRAINT personal_1_cod_turno_fkey FOREIGN KEY (cod_turno) REFERENCES turno(cod_turno) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: plato_pedido_cod_plato_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY plato_pedido
    ADD CONSTRAINT plato_pedido_cod_plato_fkey FOREIGN KEY (cod_plato) REFERENCES plato(cod_plato) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: plato_pedido_id_pedido_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY plato_pedido
    ADD CONSTRAINT plato_pedido_id_pedido_fkey FOREIGN KEY (id_pedido) REFERENCES pedido(id_pedido) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: plato_rut_personal_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY plato
    ADD CONSTRAINT plato_rut_personal_fkey FOREIGN KEY (rut_personal) REFERENCES personal_1(rut_personal) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: proveedor_insumo_cod_insumo_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY proveedor_insumo
    ADD CONSTRAINT proveedor_insumo_cod_insumo_fkey FOREIGN KEY (cod_insumo) REFERENCES insumo(cod_insumo) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: proveedor_insumo_rut_proveedor_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY proveedor_insumo
    ADD CONSTRAINT proveedor_insumo_rut_proveedor_fkey FOREIGN KEY (rut_proveedor) REFERENCES proveedor(rut_proveedor) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: venta_id_pedido_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY venta
    ADD CONSTRAINT venta_id_pedido_fkey FOREIGN KEY (id_pedido) REFERENCES pedido(id_pedido) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

