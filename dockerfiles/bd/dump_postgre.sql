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
-- Name: clientes; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE clientes (
    id integer NOT NULL,
    nome_razao character varying NOT NULL,
    cpf_cnpj character varying NOT NULL,
    email character varying NOT NULL,
    senha character varying NOT NULL,
    telefone character varying NOT NULL,
    celular character varying,
    cep character varying(8) NOT NULL,
    endereco character varying NOT NULL,
    bairro character varying NOT NULL,
    cidade character varying NOT NULL,
    estado character varying NOT NULL
);


ALTER TABLE public.clientes OWNER TO postgres;

--
-- Name: clientes_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE clientes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.clientes_id_seq OWNER TO postgres;

--
-- Name: clientes_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE clientes_id_seq OWNED BY clientes.id;


--
-- Name: encomendas; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE encomendas (
    id integer NOT NULL,
    fun_id integer NOT NULL,
    cli_id integer NOT NULL,
    l_pac integer NOT NULL,
    a_pac integer NOT NULL,
    p_pac integer NOT NULL,
    ori_cep character varying(8) DEFAULT NULL::character varying,
    ori_endereco character varying(255) NOT NULL,
    ori_bairro character varying(100) NOT NULL,
    ori_cidade character varying(100) NOT NULL,
    ori_estado character varying(2) NOT NULL,
    dst_nome character varying(255) NOT NULL,
    dst_cep character varying(8) NOT NULL,
    dst_endereco character varying(255) NOT NULL,
    dst_bairro character varying(100) NOT NULL,
    dst_cidade character varying(100) NOT NULL,
    dst_estado character varying(2) NOT NULL,
    distancia double precision NOT NULL,
    tip_id integer NOT NULL,
    mot_id integer,
    data_coleta date,
    data_prevista date,
    data_entrega date,
    transito integer DEFAULT 0,
    entregue integer DEFAULT 0,
    coleta integer DEFAULT 0,
    seguro integer DEFAULT 0
);


ALTER TABLE public.encomendas OWNER TO postgres;

--
-- Name: encomendas_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE encomendas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.encomendas_id_seq OWNER TO postgres;

--
-- Name: encomendas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE encomendas_id_seq OWNED BY encomendas.id;


--
-- Name: fale_conosco; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE fale_conosco (
    id integer NOT NULL,
    nome character varying NOT NULL,
    assunto character varying NOT NULL,
    mensagem text NOT NULL,
    email character varying(60) NOT NULL
);


ALTER TABLE public.fale_conosco OWNER TO postgres;

--
-- Name: fale_conosco_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE fale_conosco_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.fale_conosco_id_seq OWNER TO postgres;

--
-- Name: fale_conosco_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE fale_conosco_id_seq OWNED BY fale_conosco.id;


--
-- Name: funcionarios; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE funcionarios (
    id integer NOT NULL,
    prf_id integer NOT NULL,
    nome character varying NOT NULL,
    email character varying NOT NULL,
    senha character varying NOT NULL
);


ALTER TABLE public.funcionarios OWNER TO postgres;

--
-- Name: funcionarios_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE funcionarios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.funcionarios_id_seq OWNER TO postgres;

--
-- Name: funcionarios_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE funcionarios_id_seq OWNED BY funcionarios.id;


--
-- Name: paginas; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE paginas (
    id integer NOT NULL,
    url character varying(30) NOT NULL,
    label character varying(30) NOT NULL
);


ALTER TABLE public.paginas OWNER TO postgres;

--
-- Name: paginas_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE paginas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.paginas_id_seq OWNER TO postgres;

--
-- Name: paginas_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE paginas_id_seq OWNED BY paginas.id;


--
-- Name: perfis; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE perfis (
    id integer NOT NULL,
    nome character varying(255) NOT NULL
);


ALTER TABLE public.perfis OWNER TO postgres;

--
-- Name: perfis_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE perfis_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.perfis_id_seq OWNER TO postgres;

--
-- Name: perfis_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE perfis_id_seq OWNED BY perfis.id;


--
-- Name: tipos_encomenda; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE tipos_encomenda (
    id integer NOT NULL,
    nome character varying NOT NULL,
    valor_km double precision NOT NULL,
    prazo_maximo integer NOT NULL
);


ALTER TABLE public.tipos_encomenda OWNER TO postgres;

--
-- Name: tipos_encomenda_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tipos_encomenda_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tipos_encomenda_id_seq OWNER TO postgres;

--
-- Name: tipos_encomenda_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tipos_encomenda_id_seq OWNED BY tipos_encomenda.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY clientes ALTER COLUMN id SET DEFAULT nextval('clientes_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY encomendas ALTER COLUMN id SET DEFAULT nextval('encomendas_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY fale_conosco ALTER COLUMN id SET DEFAULT nextval('fale_conosco_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY funcionarios ALTER COLUMN id SET DEFAULT nextval('funcionarios_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY paginas ALTER COLUMN id SET DEFAULT nextval('paginas_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY perfis ALTER COLUMN id SET DEFAULT nextval('perfis_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tipos_encomenda ALTER COLUMN id SET DEFAULT nextval('tipos_encomenda_id_seq'::regclass);


--
-- Data for Name: clientes; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY clientes (id, nome_razao, cpf_cnpj, email, senha, telefone, celular, cep, endereco, bairro, cidade, estado) FROM stdin;
1	DHL Logi­stica ltda	09830583205	contato@dhl.com	123456	4350984508	94894859	89899998	Rua dos Transportes, 99	Jardim Caminhão	São Paulo	SP
4	hkjhjk	hkjhjk	46546	123	4	564	654	6546	54	564	564
5	hkjhkj	hhkjhkj	hkjhkj	123	hkjhjk	hkjh	hkjhkj	jkhjk	hjk	hjkhkj	kjhjkh
\.


--
-- Name: clientes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('clientes_id_seq', 5, true);


--
-- Data for Name: encomendas; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY encomendas (id, fun_id, cli_id, l_pac, a_pac, p_pac, ori_cep, ori_endereco, ori_bairro, ori_cidade, ori_estado, dst_nome, dst_cep, dst_endereco, dst_bairro, dst_cidade, dst_estado, distancia, tip_id, mot_id, data_coleta, data_prevista, data_entrega, transito, entregue, coleta, seguro) FROM stdin;
8	1	1	102	205	50	05331020	Rua Parnamirim, 110	Jaguarão	São Paulo	SP	Kleber Calegario Batista	05330011	Rua Alarico Franco Caiubi, 549	Jaguarão	São Paulo	SP	100	1	3	2011-10-18	\N	\N	0	0	0	0
9	1	1	102	205	50	05331020	Rua Parnamirim, 110	Jaguarão	São Paulo	SP	Kleber Calegario Batista	05330011	Rua Alarico Franco Caiubi, 549	Jaguarão	São Paulo	SP	100	1	3	2011-10-18	\N	\N	0	0	0	0
10	1	1	102	205	50	05331020	Rua Parnamirim, 110	Jaguarão	São Paulo	SP	Kleber Calegario Batista	05330011	Rua Alarico Franco Caiubi, 549	Jaguarão	São Paulo	SP	100	1	3	2011-10-18	\N	\N	0	0	0	0
11	1	1	102	205	50	05331020	Rua Parnamirim, 110	Jaguarão	São Paulo	SP	Kleber Calegario Batista	05330011	Rua Alarico Franco Caiubi, 549	Jaguarão	São Paulo	SP	100	1	3	2011-10-18	\N	\N	0	0	0	0
12	1	1	102	205	50	05331020	Rua Parnamirim, 110	Jaguarão	São Paulo	SP	Kleber Calegario Batista	05330011	Rua Alarico Franco Caiubi, 549	Jaguarão	São Paulo	SP	100	1	3	2011-10-18	\N	\N	0	0	0	0
13	1	1	102	205	50	05331020	Rua Parnamirim, 110	Jaguarão	São Paulo	SP	Kleber Calegario Batista	05330011	Rua Alarico Franco Caiubi, 549	Jaguarão	São Paulo	SP	100	1	3	2011-10-18	\N	\N	0	0	0	0
14	1	1	102	205	50	05331020	Rua Parnamirim, 110	Jaguarão	São Paulo	SP	Kleber Calegario Batista	05330011	Rua Alarico Franco Caiubi, 549	Jaguarão	São Paulo	SP	100	1	3	2011-10-18	\N	\N	0	0	0	0
\.


--
-- Name: encomendas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('encomendas_id_seq', 14, true);


--
-- Data for Name: fale_conosco; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY fale_conosco (id, nome, assunto, mensagem, email) FROM stdin;
1	Armando Silva	Duvida de Frete	Qual o valor do frete para teste	armando.silva@gmail.com
\.


--
-- Name: fale_conosco_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('fale_conosco_id_seq', 11, true);


--
-- Data for Name: funcionarios; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY funcionarios (id, prf_id, nome, email, senha) FROM stdin;
2	1	Fulano	fulano@dexter.com	123456
3	2	João	joao@dexter.com	123456
4	1	Denis	dpr001@gmail.com	123
5	2	jhkjhkj	hkjhjk	kjhkjhk
1	1	Admin	admin@dexter.com	012
8   1   Samuel  samuel@4linux.com.br   0000
10  2   Obiwan  obiwan@4linux.com.br   1111
\.


--
-- Name: funcionarios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('funcionarios_id_seq', 5, true);


--
-- Data for Name: paginas; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY paginas (id, url, label) FROM stdin;
1	index.php	Início
2	cadastro.php	Cadastre-se
3	faleconosco.php	Fale Conosco
4	sobre.php	Sobre
\.


--
-- Name: paginas_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('paginas_id_seq', 4, true);


--
-- Data for Name: perfis; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY perfis (id, nome) FROM stdin;
1	administrador
2	motorista
\.


--
-- Name: perfis_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('perfis_id_seq', 2, true);


--
-- Data for Name: tipos_encomenda; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY tipos_encomenda (id, nome, valor_km, prazo_maximo) FROM stdin;
1	Expressa	1	2
3	Motoboy	2	1
4	PAC	2	3
\.


--
-- Name: tipos_encomenda_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tipos_encomenda_id_seq', 4, true);


--
-- Name: clientes_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY clientes
    ADD CONSTRAINT clientes_pkey PRIMARY KEY (id);


--
-- Name: encomendas_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY encomendas
    ADD CONSTRAINT encomendas_pkey PRIMARY KEY (id);


--
-- Name: fale_conosco_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY fale_conosco
    ADD CONSTRAINT fale_conosco_pkey PRIMARY KEY (id);


--
-- Name: funcionarios_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY funcionarios
    ADD CONSTRAINT funcionarios_pkey PRIMARY KEY (id);


--
-- Name: perfis_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY perfis
    ADD CONSTRAINT perfis_pkey PRIMARY KEY (id);


--
-- Name: tipos_encomenda_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY tipos_encomenda
    ADD CONSTRAINT tipos_encomenda_pkey PRIMARY KEY (id);


--
-- Name: encomendas_cli_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY encomendas
    ADD CONSTRAINT encomendas_cli_id_fkey FOREIGN KEY (cli_id) REFERENCES clientes(id) ON DELETE CASCADE;


--
-- Name: encomendas_fun_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY encomendas
    ADD CONSTRAINT encomendas_fun_id_fkey FOREIGN KEY (fun_id) REFERENCES funcionarios(id) ON DELETE CASCADE;


--
-- Name: encomendas_mot_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY encomendas
    ADD CONSTRAINT encomendas_mot_id_fkey FOREIGN KEY (mot_id) REFERENCES funcionarios(id) ON DELETE CASCADE;


--
-- Name: encomendas_tip_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY encomendas
    ADD CONSTRAINT encomendas_tip_id_fkey FOREIGN KEY (tip_id) REFERENCES tipos_encomenda(id) ON DELETE CASCADE;


--
-- Name: funcionarios_prf_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY funcionarios
    ADD CONSTRAINT funcionarios_prf_id_fkey FOREIGN KEY (prf_id) REFERENCES perfis(id) ON UPDATE CASCADE;


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

