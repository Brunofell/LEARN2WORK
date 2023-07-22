CREATE DATABASE l2w;
##
USE l2w;
CREATE TABLE usuarios (
  id INT AUTO_INCREMENT,
  nome VARCHAR(150),
  email VARCHAR(150),
  senha VARCHAR(150),
  cpf VARCHAR(11),
  numTel VARCHAR(11),
  data_nascimento DATE,
  foto_perfil longblob,
  PRIMARY KEY (id)
);
###
USE l2w;
CREATE TABLE video (
  id INT AUTO_INCREMENT,
  titulo VARCHAR(400),
  descricao VARCHAR(400),
  nome_arquivo VARCHAR(400),
  PRIMARY KEY (id)
);
###
USE l2w;
CREATE TABLE historico (
  id INT AUTO_INCREMENT,
  user_id INT,
  video_titulo int VARCHAR(400),
  video_url VARCHAR(400),
  PRIMARY KEY (id)
);
####
USE l2w;
CREATE TABLE avaliacao (
  id_user int,
  nota int
);
#####
USE l2w;
create table adm(
  id INT AUTO_INCREMENT,
  nome VARCHAR(150),
  email VARCHAR(150),
  senha VARCHAR(150),
  PRIMARY KEY (id)
);

