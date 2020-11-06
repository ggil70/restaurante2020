--
-- PostgreSQL database dump
--

-- Dumped from database version 12.4 (Ubuntu 12.4-1.pgdg20.04+1)
-- Dumped by pg_dump version 12.4 (Ubuntu 12.4-1.pgdg20.04+1)

-- Started on 2020-11-06 00:18:29 -04

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 213 (class 1259 OID 24949)
-- Name: cf_generica; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.cf_generica (
    id integer NOT NULL,
    nombre character varying(100) NOT NULL,
    tabla character varying(100) NOT NULL,
    activo boolean DEFAULT true NOT NULL,
    id_create integer NOT NULL,
    date_create time without time zone DEFAULT now() NOT NULL,
    id_update integer,
    date_update time without time zone
);


ALTER TABLE public.cf_generica OWNER TO postgres;

--
-- TOC entry 212 (class 1259 OID 24947)
-- Name: cf_generica_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.cf_generica_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.cf_generica_id_seq OWNER TO postgres;

--
-- TOC entry 3100 (class 0 OID 0)
-- Dependencies: 212
-- Name: cf_generica_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.cf_generica_id_seq OWNED BY public.cf_generica.id;


--
-- TOC entry 203 (class 1259 OID 16766)
-- Name: sg_modulo; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.sg_modulo (
    id integer NOT NULL,
    nombre character varying(100) NOT NULL,
    activo boolean DEFAULT true NOT NULL,
    id_create integer NOT NULL,
    date_create time without time zone DEFAULT now() NOT NULL,
    id_update integer,
    date_update time without time zone,
    orden integer DEFAULT 0 NOT NULL,
    icono_fas_fa character varying(100) DEFAULT 'fas fa-exclamation-circle'::character varying,
    url_modulo character varying(100)
);


ALTER TABLE public.sg_modulo OWNER TO postgres;

--
-- TOC entry 202 (class 1259 OID 16764)
-- Name: sg_modulo_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.sg_modulo_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sg_modulo_id_seq OWNER TO postgres;

--
-- TOC entry 3101 (class 0 OID 0)
-- Dependencies: 202
-- Name: sg_modulo_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.sg_modulo_id_seq OWNED BY public.sg_modulo.id;


--
-- TOC entry 207 (class 1259 OID 16789)
-- Name: sg_rol; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.sg_rol (
    id integer NOT NULL,
    nombre character varying(100) NOT NULL,
    activo boolean DEFAULT true NOT NULL,
    id_create integer NOT NULL,
    date_create time without time zone DEFAULT now() NOT NULL,
    id_update integer,
    date_update time without time zone
);


ALTER TABLE public.sg_rol OWNER TO postgres;

--
-- TOC entry 206 (class 1259 OID 16787)
-- Name: sg_rol_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.sg_rol_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sg_rol_id_seq OWNER TO postgres;

--
-- TOC entry 3102 (class 0 OID 0)
-- Dependencies: 206
-- Name: sg_rol_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.sg_rol_id_seq OWNED BY public.sg_rol.id;


--
-- TOC entry 211 (class 1259 OID 16813)
-- Name: sg_rol_modulo; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.sg_rol_modulo (
    id integer NOT NULL,
    id_rol integer NOT NULL,
    id_modulo integer NOT NULL,
    "create" boolean DEFAULT false NOT NULL,
    update boolean DEFAULT false NOT NULL,
    delete boolean DEFAULT false NOT NULL,
    other boolean DEFAULT false NOT NULL,
    activo boolean DEFAULT true NOT NULL,
    id_create integer NOT NULL,
    date_create time without time zone DEFAULT now() NOT NULL,
    id_update integer,
    date_update time without time zone
);


ALTER TABLE public.sg_rol_modulo OWNER TO postgres;

--
-- TOC entry 210 (class 1259 OID 16811)
-- Name: sg_rol_modulo_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.sg_rol_modulo_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sg_rol_modulo_id_seq OWNER TO postgres;

--
-- TOC entry 3103 (class 0 OID 0)
-- Dependencies: 210
-- Name: sg_rol_modulo_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.sg_rol_modulo_id_seq OWNED BY public.sg_rol_modulo.id;


--
-- TOC entry 215 (class 1259 OID 24962)
-- Name: sg_sub_modulo; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.sg_sub_modulo (
    id integer NOT NULL,
    id_modulo integer NOT NULL,
    nombre character varying(100) NOT NULL,
    orden integer DEFAULT 0 NOT NULL,
    url_sub_modulo character varying(100) NOT NULL,
    activo boolean DEFAULT true NOT NULL,
    id_create integer NOT NULL,
    date_create time without time zone DEFAULT now() NOT NULL,
    id_update integer,
    date_update time without time zone
);


ALTER TABLE public.sg_sub_modulo OWNER TO postgres;

--
-- TOC entry 214 (class 1259 OID 24960)
-- Name: sg_sub_modulo_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.sg_sub_modulo_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sg_sub_modulo_id_seq OWNER TO postgres;

--
-- TOC entry 3104 (class 0 OID 0)
-- Dependencies: 214
-- Name: sg_sub_modulo_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.sg_sub_modulo_id_seq OWNED BY public.sg_sub_modulo.id;


--
-- TOC entry 205 (class 1259 OID 16776)
-- Name: sg_usuario; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.sg_usuario (
    id integer NOT NULL,
    login character varying(100) NOT NULL,
    password character varying(100) NOT NULL,
    nombre character varying(100) NOT NULL,
    apellido character varying(100) NOT NULL,
    id_rol integer NOT NULL,
    email character varying(200),
    activo boolean DEFAULT true NOT NULL,
    id_create integer NOT NULL,
    date_create time without time zone DEFAULT now() NOT NULL,
    id_update integer,
    date_update time without time zone
);


ALTER TABLE public.sg_usuario OWNER TO postgres;

--
-- TOC entry 204 (class 1259 OID 16774)
-- Name: sg_usuario_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.sg_usuario_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sg_usuario_id_seq OWNER TO postgres;

--
-- TOC entry 3105 (class 0 OID 0)
-- Dependencies: 204
-- Name: sg_usuario_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.sg_usuario_id_seq OWNED BY public.sg_usuario.id;


--
-- TOC entry 209 (class 1259 OID 16799)
-- Name: sg_usuario_modulo; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.sg_usuario_modulo (
    id integer NOT NULL,
    id_usuario integer NOT NULL,
    id_modulo integer NOT NULL,
    "create" boolean DEFAULT false NOT NULL,
    update boolean DEFAULT false NOT NULL,
    delete boolean DEFAULT false NOT NULL,
    read boolean DEFAULT false NOT NULL,
    activo boolean DEFAULT true NOT NULL,
    id_create integer NOT NULL,
    date_create time without time zone DEFAULT now() NOT NULL,
    id_update integer,
    date_update time without time zone
);


ALTER TABLE public.sg_usuario_modulo OWNER TO postgres;

--
-- TOC entry 208 (class 1259 OID 16797)
-- Name: sg_usuario_modulo_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.sg_usuario_modulo_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sg_usuario_modulo_id_seq OWNER TO postgres;

--
-- TOC entry 3106 (class 0 OID 0)
-- Dependencies: 208
-- Name: sg_usuario_modulo_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.sg_usuario_modulo_id_seq OWNED BY public.sg_usuario_modulo.id;


--
-- TOC entry 2934 (class 2604 OID 24952)
-- Name: cf_generica id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.cf_generica ALTER COLUMN id SET DEFAULT nextval('public.cf_generica_id_seq'::regclass);


--
-- TOC entry 2909 (class 2604 OID 16769)
-- Name: sg_modulo id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sg_modulo ALTER COLUMN id SET DEFAULT nextval('public.sg_modulo_id_seq'::regclass);


--
-- TOC entry 2917 (class 2604 OID 16792)
-- Name: sg_rol id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sg_rol ALTER COLUMN id SET DEFAULT nextval('public.sg_rol_id_seq'::regclass);


--
-- TOC entry 2927 (class 2604 OID 16816)
-- Name: sg_rol_modulo id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sg_rol_modulo ALTER COLUMN id SET DEFAULT nextval('public.sg_rol_modulo_id_seq'::regclass);


--
-- TOC entry 2937 (class 2604 OID 24965)
-- Name: sg_sub_modulo id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sg_sub_modulo ALTER COLUMN id SET DEFAULT nextval('public.sg_sub_modulo_id_seq'::regclass);


--
-- TOC entry 2914 (class 2604 OID 16779)
-- Name: sg_usuario id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sg_usuario ALTER COLUMN id SET DEFAULT nextval('public.sg_usuario_id_seq'::regclass);


--
-- TOC entry 2920 (class 2604 OID 16802)
-- Name: sg_usuario_modulo id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sg_usuario_modulo ALTER COLUMN id SET DEFAULT nextval('public.sg_usuario_modulo_id_seq'::regclass);


--
-- TOC entry 3092 (class 0 OID 24949)
-- Dependencies: 213
-- Data for Name: cf_generica; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.cf_generica (id, nombre, tabla, activo, id_create, date_create, id_update, date_update) FROM stdin;
2	ROLES DEL SISTEMA	sg_rol	t	1	21:28:41.220127	\N	\N
\.


--
-- TOC entry 3082 (class 0 OID 16766)
-- Dependencies: 203
-- Data for Name: sg_modulo; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.sg_modulo (id, nombre, activo, id_create, date_create, id_update, date_update, orden, icono_fas_fa, url_modulo) FROM stdin;
2	CONFIGURACION SISTEMA	t	1	09:42:15.565218	\N	\N	1	fas fa-user-cog	\N
3	ADMINISTRACION SISTEMA	t	1	11:16:18.195407	\N	\N	2	fas fa-chalkboard-teacher	\N
4	SEGURIDAD DEL SISTEMA	f	1	14:48:26.870943	\N	\N	3	fas fa-user-lock	\N
\.


--
-- TOC entry 3086 (class 0 OID 16789)
-- Dependencies: 207
-- Data for Name: sg_rol; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.sg_rol (id, nombre, activo, id_create, date_create, id_update, date_update) FROM stdin;
1	ADMINISTRADOR	t	1	20:39:21.561708	\N	\N
\.


--
-- TOC entry 3090 (class 0 OID 16813)
-- Dependencies: 211
-- Data for Name: sg_rol_modulo; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.sg_rol_modulo (id, id_rol, id_modulo, "create", update, delete, other, activo, id_create, date_create, id_update, date_update) FROM stdin;
\.


--
-- TOC entry 3094 (class 0 OID 24962)
-- Dependencies: 215
-- Data for Name: sg_sub_modulo; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.sg_sub_modulo (id, id_modulo, nombre, orden, url_sub_modulo, activo, id_create, date_create, id_update, date_update) FROM stdin;
2	4	DEFINIR USUARIO	1	por definir	t	1	14:52:05.876449	\N	\N
3	4	DEFINIR ROL	2	POR DEFINIR	t	1	14:53:29.366706	\N	\N
4	2	TABLAS GENERICAS	1	tablaGenerica	t	1	14:56:04.54913	\N	\N
5	4	DEFINIR MODULO	2	modulo	t	1	16:40:49.977722	\N	\N
\.


--
-- TOC entry 3084 (class 0 OID 16776)
-- Dependencies: 205
-- Data for Name: sg_usuario; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.sg_usuario (id, login, password, nombre, apellido, id_rol, email, activo, id_create, date_create, id_update, date_update) FROM stdin;
\.


--
-- TOC entry 3088 (class 0 OID 16799)
-- Dependencies: 209
-- Data for Name: sg_usuario_modulo; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.sg_usuario_modulo (id, id_usuario, id_modulo, "create", update, delete, read, activo, id_create, date_create, id_update, date_update) FROM stdin;
2	1	2	t	t	f	t	t	1	10:37:09.421741	\N	\N
4	1	3	t	f	t	t	t	1	11:17:18.127686	\N	\N
6	1	4	f	f	f	t	t	1	14:49:25.646979	\N	\N
\.


--
-- TOC entry 3107 (class 0 OID 0)
-- Dependencies: 212
-- Name: cf_generica_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.cf_generica_id_seq', 2, true);


--
-- TOC entry 3108 (class 0 OID 0)
-- Dependencies: 202
-- Name: sg_modulo_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.sg_modulo_id_seq', 4, true);


--
-- TOC entry 3109 (class 0 OID 0)
-- Dependencies: 206
-- Name: sg_rol_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.sg_rol_id_seq', 1, true);


--
-- TOC entry 3110 (class 0 OID 0)
-- Dependencies: 210
-- Name: sg_rol_modulo_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.sg_rol_modulo_id_seq', 1, false);


--
-- TOC entry 3111 (class 0 OID 0)
-- Dependencies: 214
-- Name: sg_sub_modulo_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.sg_sub_modulo_id_seq', 5, true);


--
-- TOC entry 3112 (class 0 OID 0)
-- Dependencies: 204
-- Name: sg_usuario_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.sg_usuario_id_seq', 1, false);


--
-- TOC entry 3113 (class 0 OID 0)
-- Dependencies: 208
-- Name: sg_usuario_modulo_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.sg_usuario_modulo_id_seq', 6, true);


--
-- TOC entry 2952 (class 2606 OID 24956)
-- Name: cf_generica cf_generica_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.cf_generica
    ADD CONSTRAINT cf_generica_pkey PRIMARY KEY (id);


--
-- TOC entry 2942 (class 2606 OID 16771)
-- Name: sg_modulo modulo_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sg_modulo
    ADD CONSTRAINT modulo_pkey PRIMARY KEY (id);


--
-- TOC entry 2946 (class 2606 OID 16796)
-- Name: sg_rol rol_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sg_rol
    ADD CONSTRAINT rol_pkey PRIMARY KEY (id);


--
-- TOC entry 2950 (class 2606 OID 16821)
-- Name: sg_rol_modulo sg_rol_modulo_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sg_rol_modulo
    ADD CONSTRAINT sg_rol_modulo_pkey PRIMARY KEY (id);


--
-- TOC entry 2954 (class 2606 OID 24969)
-- Name: sg_sub_modulo sg_sub_modulo_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sg_sub_modulo
    ADD CONSTRAINT sg_sub_modulo_pkey PRIMARY KEY (id);


--
-- TOC entry 2948 (class 2606 OID 16810)
-- Name: sg_usuario_modulo sg_usuario_modulo_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sg_usuario_modulo
    ADD CONSTRAINT sg_usuario_modulo_pkey PRIMARY KEY (id);


--
-- TOC entry 2944 (class 2606 OID 16786)
-- Name: sg_usuario usuario_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sg_usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (id);


-- Completed on 2020-11-06 00:18:29 -04

--
-- PostgreSQL database dump complete
--

