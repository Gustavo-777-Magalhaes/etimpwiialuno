<?php
class Aluno{
    private $gustavomId;
    private $gustavomRm;
    private $gustavomNome;
    private $gustavomEmail;
    private $gustavomCpf;
    private $gustavomPdo;

    public function conectar(){
        $gustavomDns    = "mysql:dbname=EtimPwiiAluno;host=localhost";
        $gustavomDbUser = "root";
        $gustavomDbPass = "";

        try {
            $this->pdo = new PDO($gustavomDns, $gustavomDbUser, $gustavomDbPass);
            return true;
        } catch (\Throwable $gustavomTh) {
            return false;
        }
    }

    public function getId(){
        return $this->id;
    }
    public function getRm(){
        return $this->rm;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getCpf(){
        return $this->cpf;
    }

    public function setRm($gustavomRm){
        $this->rm = $gustavomRm ;
    }
    public function setNome($gustavomNome){
        $this->nome = $gustavomNome ;
    }
    public function setEmail($gustavomEmail){
        $this->email = $gustavomEmail ;
    }
    public function setCpf($gustavomCpf){
        $this->cpf = $gustavomCpf ;
    }

public function cadastrar($gustavomRm, $gustavomNome, $gustavomEmail, $gustavomCpf){
        
        $gustavomSql = "INSERT INTO aluno set rm = :r, nome = :n, email = :e,cpf = :c";
        
        $gustavomSql = $this->pdo->prepare($gustavomSql);

        $gustavomSql-> bindValue(":r", $gustavomRm);
        $gustavomSql-> bindValue(":n", $gustavomNome);
        $gustavomSql-> bindValue(":e", $gustavomEmail);
        $gustavomSql-> bindValue(":c", $gustavomCpf);

        return $gustavomSql->execute();

}





    public function consultar($gustavomEmail){
        $gustavomSql = "SELECT *FROM aluno WHERE email = :e";
        $gustavomSql = $this->pdo->prepare($gustavomSql);
        $gustavomSql-> bindValue(":e", $gustavomEmail);
        $gustavomSql->execute();

        return $gustavomSql->rowCount() > 0;
        
    }


}
