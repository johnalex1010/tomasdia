	/*
	========================================================
	CREACIÓN DE LA BASE DATOS DE TOMAS NOTICIAS
	========================================================
	*/
	/*SE CREA LA BD.
	Si es por CPANEL, simplemente se quita esta linea*/
	/*CREATE DATABASE IF NOT EXISTS tomasnoticas;
	USE tomasnoticas;
	*/
	/*FIN BD*/

	/*CREACION DE TABLAS*/

		/*--Tabla Permisos de usuario*/
		CREATE TABLE t_permiso (
			id_permiso int NOT NULL AUTO_INCREMENT,
			permiso varchar(30) NOT NULL,
			c int NOT NULL,
			r int NOT NULL,
			u int NOT NULL,
			d int NOT NULL,
			PRIMARY KEY (id_permiso)
		);


		/*--Tablas de  usuarios */
		CREATE TABLE t_usuario(
			id_usuario int NOT NULL AUTO_INCREMENT,
			usuario varchar(30) NOT NULL UNIQUE,
			password varchar(80) NOT NULL,
			nombres varchar(50) NOT NULL,
			email varchar(60) NOT NULL,
			activo int NOT NULL,
			id_permiso int NOT NULL, /*Es FOREIGN KEY de la tabla t_permiso*/
			PRIMARY KEY (id_usuario),
			FOREIGN KEY (id_permiso) REFERENCES t_permiso(id_permiso)
		);

		/*--Tablas de t_tn*/
		CREATE TABLE t_tn(
			id_tn int NOT NULL AUTO_INCREMENT,
			edicion int NOT NULL UNIQUE,
			fecha DATE, /*Guarda fecha y hora*/
			titulo varchar(250) NOT NULL,
			parrafo TEXT NOT NULL,
			link TEXT NOT NULL,
			imagen varchar(20) DEFAULT NULL,
			id_usuario int NOT NULL, /*Es FOREIGN KEY de la tabla t_usuario*/
			PRIMARY KEY (id_tn),
			FOREIGN KEY (id_usuario) REFERENCES t_usuario(id_usuario)
		);


	/*INSERT A LAS TABLAS*/

		/*--t_permiso*/
		INSERT INTO t_permiso VALUES
		(1, "Super administrador", 1 , 1 , 1, 1),
		(2, "Administrador", 1, 1 , 1 , 0),
		(3, "Colaborador", 0 , 1 , 1, 0),
		(4, "No Valido", 0 , 0 , 0, 0);

		/*--t_usuario*/
		INSERT INTO t_usuario VALUES
		(1, "tomas", "$2y$10$trO3LKxG/sDiUq7h60PXy.TB4w1spNz97xsBnc8FS6oQp1sWmECVK", "Super Administrador", "system",  1, 1), /*T0mas$TN*/
		(2, "johnf", "$2y$10$ujgF9L4/QxE6aQc5f/OA.OI2SpoksZUCh5DqtSavj5yUz7/LLvzM2", "John Alexander Fandiño", "prof.sopweb@usantotomas.edu.co", 1, 1);

		INSERT INTO t_tn VALUES
	(1, 240, "2020-01-16", "GESTOR CULTURAL TOMASINO RECIBE PREMIO DE LA SECRETARÍA DISTRITAL DE CULTURA, RECREACIÓN Y DEPORTE", "El Coordinador del Área de Cultura del Departamento de Promoción y Bienestar Institucional, Juan Carlos Grisales Castaño, recibió el Premio al Trabajo Destacado de Gestores Culturales, otorgado por la Secretaría Distrital de Cultura, Recreación y Deporte. Es el primer reconocimiento de este tipo que el Instituto Distrital de las Artes (IDARTES) y la Alcaldía Mayor de Bogotá mediante la Resolución 1893 del 25 de noviembre del 2019 concede a los artistas dedicados a la gestión del sector cultural en la capital del país.", "https://www.usta.edu.co/index.php/tomas-noticias/comunidad-tomasina/item/5463-gestor-cultural-tomasino-recibe-premio-de-la-secretaria-distrital-de-cultura-recreacion-y-deporte", "ED240.jpg", 2),
	(2, 241, "2020-01-17", "PABLO GIOVANNI GUERRERO OSPINA, NUEVO DECANO DE LA FACULTAD DE PSICOLOGÍA", "Mediante resolución n.º 96 del 20 de diciembre de 2019, el Rector General de la Universidad Santo Tomás, fray José Gabriel MESA ANGULO, O.P., nombró a Pablo Giovanni Guerrero Ospina como nuevo Decano de la Facultad de Psicología para un primer periodo estatutario.", "https://www.usta.edu.co/index.php/tomas-noticias/comunidad-tomasina/item/5480-pablo-giovanni-guerrero-ospina-nuevo-decano-de-la-facultad-de-psicologia", "ED241.jpg", 2),
	(3, 242, "2020-01-22", "FRAY ÉRICO JUAN MACCHI CÉSPEDES, O.P., NUEVO DECANO DE LA DIVISIÓN DE INGENIERÍAS", "En la tarde del pasado lunes 20 enero, en el marco de la realización del Consejo Asesor, se llevó a cabo la primera posesión en 2020 de dos nuevos directivos en USTA Bogotá; se trata del nuevo Decano de la División de Ingenierías, fray Érico Juan MACCHI CÉSPEDES, O.P.; y del nuevo Decano de la Facultad de Psicología, Pablo Giovanni Guerrero Ospina.", "https://www.usta.edu.co/indexhttps://www.usta.edu.co/index.php/tomas-noticias/comunidad-tomasina/item/5484-fray-erico-juan-macchi-cespedes-o-p-nuevo-decano-de-la-division-de-ingenierias.php/tomas-noticias/comunidad-tomasina/item/5484-fray-erico-juan-macchi-cespedes-o-p-nuevo-decano-de-la-division-de", "ED242.jpg", 2),
	(4, 243, "2020-01-28", "GUILLERMO OLARTE PÁEZ, NUEVO DIRECTOR DEL DEPARTAMENTO DE COMUNICACIONES", "El pasado lunes 27 de enero Guillermo Olarte Páez asumió el cargo de Director del Departamento de Comunicaciones de la Sede Principal – Bogotá en la Universidad Santo Tomás.", "https://www.usta.edu.co/index.php/tomas-noticias/comunidad-tomasina/item/5486-guillermo-olarte-paez-nuevo-director-del-departamento-de-comunicaciones", "ED243.jpg", 2),
	(5, 244, "2020-02-10", "CON EVANGELIZACIÓN Y CULTURA LOS TOMASINOS COMPARTIERON SONRISAS EN CAMPO DOS", "En el marco del Mes de la Misión Universitaria, liderado por la Dirección Nacional de Evangelización y Cultura, del 15 al 25 de diciembre de 2019 un grupo de 29 Agentes de Cambio, entre estudiantes y administrativos, visitó la Parroquia de Campo Dos, Norte de Santander, con el objetivo de apoyar a la comunidad gracias a las donaciones realizadas por la familia tomasina durante el tiempo de la Novena de Aguinaldos.", "https://www.usta.edu.co/index.php/tomas-noticias/evangelizaci%C3%B3n-y-cultura/item/5496-con-evangelizacion-y-cultura-los-tomasinos-compartieron-sonrisas-en-campo-dos", "ED244.jpg", 2),
	(6, 245, "2020-02-21", "NUEVOS DIRECTIVOS SE POSESIONAN EN LA SEDE PRINCIPAL", "En la tarde del pasado 20 de febrero el Rector General de la Universidad, fray José Gabriel MESA ANGULO, O.P., posesionó en ceremonia solemne a siete nuevos directivos de la Sede Principal. Se trata de los decanos de las facultades de Diseño Gráfico, Ingeniería Civil, Educación, y Ciencias y Tecnologías; y de los directores de los  departamentos de Comunicaciones y Presupuesto, junto con la nueva directora de la Oficina de Apoyo a Egresados.", "https://www.usta.edu.co/index.php/tomas-noticias/comunidad-tomasina/item/5510-nuevos-directivos-se-posesionan-en-la-sede-principal", "ED245.jpg", 2),
	(7, 246, "2020-02-26", "ALEXANDER SELLAMÉN GARZÓN, NUEVO DIRECTOR DE LAS MAESTRÍAS EN CIENCIAS ECONÓMICAS Y EN SALUD PÚBLICA", "En días pasados se realizó el nombramiento del economista tomasino Alexander Sellamén Garzón como el nuevo director de las maestrías en Ciencias Económicas y en Salud Pública, adscritas a la Facultad de Economía. Sellamén es Magíster en Gobierno y Políticas Públicas de la Universidad Externado de Colombia en conjunto con Columbia University in the City of New York - SIPA (School of International and Public Affairs); y con estudios de Doctorado en Estudios Sociales en la Universidad Externado de Colombia.", "https://www.usta.edu.co/index.php/tomas-noticias/comunidad-tomasina/item/5517-alexander-sellamen-garzon-nuevo-director-de-las-maestrias-en-ciencias-economicas-y-en-salud-publica", "ED246.jpg", 2),
	(8, 247, "2020-02-27", "EN 2020 #VIVESANTOTO440", "Los 440 años de la Institución se deben celebrar por lo alto y el Departamento de Promoción y Bienestar Institucional está preparado para este gran evento. El jueves 20 de febrero se llevó a cabo en USTA Colombia el lanzamiento oficial de la campaña #ViveSantoto440, una forma joven de festejar en comunidad el regocijo de continuar brindando formación integral a los profesionales del país.", "https://www.usta.edu.co/index.php/tomas-noticias/momento-tomasino/item/5518-en-2020-vivesantoto440", "ED247.jpg", 2),
	(9, 248, "2020-02-28", "CUARESMA: TIEMPO DE DECISIONES", "“Hoy es tiempo para reflexionar, para mirar nuestra vida, para tomar decisiones sobre lo que realizamos continuamente (…) Les invitamos a todos a vivir este tiempo con esperanza. Recordemos que es tiempo de reconciliación, con la propia realidad de la vida, con aquellos que nos rodean y con Dios”, fray Cristian Mauricio LÓPEZ MARULANDA, O.P., Director Nacional de Evangelización y Cultura.", "https://www.usta.edu.co/index.php/tomas-noticias/evangelizaci%C3%B3n-y-cultura/item/5520-cuaresma-tiempo-de-decisiones", "ED248.jpg", 2);