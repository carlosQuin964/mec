create table if not exists 'usuario_netosolis' {
	'id' int(11) not null primary key AUTO_INCREMENT ,
	'nombre' varchar(100) not null,
	'email' varcgar(100) not null UNIQUE KEY,
	'password' varchar(100) NOT NULL
	'id_confirmacion' varchar(100) NOT NULL,
	'status' int(1) NOT NULL
} ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT0=1;