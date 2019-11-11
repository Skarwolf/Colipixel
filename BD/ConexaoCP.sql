Create Database CP;
Drop Database CP;
Use CP;

select * from usuario;

use CP;
Create Table Personagem(
Id_Personagem int primary key not null auto_increment,
Personagem Varchar(50)
);

Create Table Ranking(
Id_Ranking int primary key not null auto_increment unique,
Pontos Int
);

Select * From usuario;

Create Table usuario(
usuario_id int primary key not null auto_increment,
usuario Varchar(45) unique not null,
senha Varchar(32) not null, 
email Varchar(150) not null unique, 
nome Varchar(100) not null,
data_cadastro datetime not null
);

Alter Table Ranking add Id_PersoUser int;
Alter Table Ranking add Id_Usuario int;

Alter Table Ranking 
add foreign key (Id_PersoUser)
references Personagem(Id_Personagem);

select * from usuario;
Alter Table Ranking 
add foreign key (usuario_id)
references usuario(Id_usuario);

INSERT INTO Personagem (Personagem)VALUES 
("Caubói"),
("Riki");

INSERT INTO Ranking (Pontos)VALUES
(2500),
(3500),
(4500),
(5500),
(6500);

Select * From Ranking;
Select * From usuario;
Select * From Personagem;

select usuario.nome, Personagem.Personagem
from usuario join Personagem 
on Personagem.Id_Personagem = usuario.Id_PersoUser;


UPDATE `cp`.`usuario` SET `Id_PersoUser` = '1', `Id_RankUser` = '1' WHERE (`usuario_id` = '1');
INSERT INTO usuario (Id_PersoUser, Id_RankUser)VALUES 
(1,1);