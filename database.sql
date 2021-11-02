/*---------------------------------------*/
/*---------------------------------------*/
	CREATE TABLE web_paginas(
		id_pag INT PRIMARY KEY AUTO_INCREMENT,
		nombre VARCHAR(250) NULL DEFAULT NULL,
		banner VARCHAR(950) NULL DEFAULT NULL,
		url VARCHAR(350) NULL DEFAULT NULL,
		decrip_corta TEXT NULL DEFAULT NULL,
		created_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
		id_created INT NULL DEFAULT 1,
		updated_at DATETIME NULL DEFAULT NULL,
		id_updated INT NULL DEFAULT 0,
		drop_at DATETIME NULL DEFAULT NULL,
		id_drop INT NULL DEFAULT 0,
		status INT(1) NULL DEFAULT 1
	);
/*---------------------------------------*/
	CREATE TABLE web_sections(
		id_sec INT PRIMARY KEY AUTO_INCREMENT,
		id_pag INT NOT NULL,
		nombre VARCHAR(250) NULL DEFAULT NULL,
		titulo_1 VARCHAR(250) NULL DEFAULT NULL,
		titulo_2 VARCHAR(250) NULL DEFAULT NULL,
		titulo_3 VARCHAR(250) NULL DEFAULT NULL,
		titulo_4 VARCHAR(250) NULL DEFAULT NULL,
		subtitulo_1 VARCHAR(250) NULL DEFAULT NULL,
		subtitulo_2 VARCHAR(250) NULL DEFAULT NULL,
		subtitulo_3 VARCHAR(250) NULL DEFAULT NULL,
		subtitulo_4 VARCHAR(250) NULL DEFAULT NULL,
		imagen_1 VARCHAR(950) NULL DEFAULT NULL,
		imagen_2 VARCHAR(950) NULL DEFAULT NULL,
		imagen_3 VARCHAR(950) NULL DEFAULT NULL,
		imagen_4 VARCHAR(950) NULL DEFAULT NULL,
		texto_1 TEXT NULL DEFAULT NULL,
		texto_2 TEXT NULL DEFAULT NULL,
		texto_3 TEXT NULL DEFAULT NULL,
		texto_4 TEXT NULL DEFAULT NULL,
		txt_boton_1 VARCHAR(250) NULL DEFAULT NULL,
		txt_boton_2 VARCHAR(250) NULL DEFAULT NULL,
		txt_boton_3 VARCHAR(250) NULL DEFAULT NULL,
		txt_boton_4 VARCHAR(250) NULL DEFAULT NULL,
		url_1 VARCHAR(250) NULL DEFAULT NULL,
		url_2 VARCHAR(250) NULL DEFAULT NULL,
		url_3 VARCHAR(250) NULL DEFAULT NULL,
		url_4 VARCHAR(250) NULL DEFAULT NULL,
		position INT NULL DEFAULT 1,
		id_created INT NULL DEFAULT 1,
		created_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
		updated_at DATETIME NULL DEFAULT NULL,
		id_updated INT NULL DEFAULT 0,
		drop_at DATETIME NULL DEFAULT NULL,
		id_drop INT NULL DEFAULT 0,
		status INT(1) NULL DEFAULT 1,
		FOREIGN KEY (id_pag) REFERENCES web_paginas(id_pag)
	);
/*----------------que es administrable------------------*/
	CREATE TABLE web_menu(
		id_wm INT PRIMARY KEY AUTO_INCREMENT,
		id_pag INT NOT NULL,
		position INT NULL DEFAULT 1,
		created_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
		id_created INT NULL DEFAULT 1,
		updated_at DATETIME NULL DEFAULT NULL,
		id_updated INT NULL DEFAULT 0,
		drop_at DATETIME NULL DEFAULT NULL,
		id_drop INT NULL DEFAULT 0,
		status INT(1) NULL DEFAULT 1,
		FOREIGN KEY (id_pag) REFERENCES web_paginas(id_pag)
	);
/*---------------------------------------*/
/*---------------------------------------*/
/*---------------------------------------*/
/*---------------------------------------*/
/*---------------------------------------*/
/*---------------------------------------*/
/*---------------------------------------*/
/*---------------------------------------*/
/*---------------------------------------*/
/*---------------------------------------*/
/*---------------------------------------*/
/*---------------------------------------*/
/*---------------------------------------*/
/*---------------------------------------*/
/*---------------------------------------*/
/*---------------------------------------*/
/*---------------------------------------*/
/*---------------------------------------*/
/*---------------------------------------*/
/*---------------------------------------*/
/*---------------------------------------*/
/*---------------------------------------*/
/*---------------------------------------*/