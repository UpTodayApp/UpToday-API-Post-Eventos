CREATE TABLE usuario (
  id int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(20),
  contrasenia varchar(255),
  correo varchar(255),
  nacimiento date,
  estado varchar(100),
  pais varchar(20),
  ciudad varchar(20),
  biografia varchar(20),
  redes varchar(20),
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  deleted_at datetime DEFAULT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE post (
  id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  contenido varchar(255), 
  fecha date, 
  megusta varchar(4), 
  ubicacion varchar(255),
  etiquetas varchar(30),
  usuario_id int(11) DEFAULT NULL,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  deleted_at datetime DEFAULT NULL,
  FOREIGN KEY (usuario_id) REFERENCES usuario(id)
);

CREATE TABLE comentario (
  id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  contenido varchar(255), 
  fecha date, 
  megusta varchar(4),
  post_id int(6) UNSIGNED,
  usuario_id int(11),
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  deleted_at datetime DEFAULT NULL,
  FOREIGN KEY (post_id) REFERENCES post(id),
  FOREIGN KEY (usuario_id) REFERENCES usuario(id)
);

CREATE TABLE megusta (
  id int(11) NOT NULL AUTO_INCREMENT,
  usuario_id int(11) DEFAULT NULL,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  deleted_at datetime DEFAULT NULL,
  comentario_id int(6) UNSIGNED,
  post_id int(6) UNSIGNED,
  FOREIGN KEY (comentario_id) REFERENCES Comentario(id),
  FOREIGN KEY (post_id) REFERENCES post(id),
  FOREIGN KEY (usuario_id) REFERENCES usuario(id),
  PRIMARY KEY (id)
);

CREATE TABLE evento (
  id int(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  nombre varchar(255),
  participan int(6), 
  detalles varchar(255), 
  fecha date, 
  ubicacion varchar(184), 
  etiquetas varchar(30),
  usuario_id int,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  deleted_at datetime DEFAULT NULL,
  FOREIGN KEY (usuario_id) REFERENCES usuario(id)
);

create table grupo (
id int(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nombre varchar(50), 
descripcion varchar(255), 
foto varchar(50),
created_at datetime DEFAULT NULL,
updated_at datetime DEFAULT NULL,
deleted_at datetime DEFAULT NULL
);

 CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
);


INSERT INTO `users`(id, name, email, email_verified_at, password,  remember_token, created_at, updated_at) VALUES (1,'usuario','usuario@usuario.com',NULL,'$2y$10$om5sEc.3.Gi9Uf6S9NU0DeY7u6rJO9YQDud3L9rC46TtD/ON35/6G',NULL,'2024-08-13 02:25:25','2024-08-13 02:25:25');