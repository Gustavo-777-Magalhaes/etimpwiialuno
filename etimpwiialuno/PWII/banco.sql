drop etimpwiiAluno
    CREATE DATABASE etimpwiiAluno;
    USE etimpwiialuno;
    CREATE TABLE aluno(
        id int primary key auto_increment,
        rm int,
        nome varchar(100),
        email varchar(150),
        cpf varchar (14),
        senha varchar  (32)
    );
    