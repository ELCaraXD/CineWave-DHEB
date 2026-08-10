/* Lógico_1: */

CREATE DATABASE CineDHEB;
USE CineDHEB;

CREATE TABLE usuario (
    nome VARCHAR(100) PRIMARY KEY,
    senha VARCHAR(100),
    id INTEGER
);

CREATE TABLE filmes (
    nome VARCHAR(120) PRIMARY KEY,
    categoria VARCHAR(100),
    elenco VARCHAR(250),
    lancamento DATE,
    direcao VARCHAR(100),
    avaliacao DECIMAL(10,2)
);

CREATE TABLE compra (
    n_venda INTEGER PRIMARY KEY,
    nome_usuario VARCHAR(100),
    valor DECIMAL(10,2),
    datahora DATE,
    filmes INTEGER,
    forma_pagamento VARCHAR(100),
    fk_usuario_nome VARCHAR(100)
);

CREATE TABLE carrinho (
    id_carrinho INTEGER PRIMARY KEY,
    qtd_filmes INTEGER,
    valor_carrinho DECIMAL(10,2)
);

CREATE TABLE pertencem_a__filmes_compra_carrinho (
    fk_filmes_nome VARCHAR(120),
    fk_compra_n_venda INTEGER,
    fk_carrinho_id_carrinho INTEGER
);

CREATE TABLE compoem_o (
    fk_filmes_nome VARCHAR(120),
    fk_carrinho_id_carrinho INTEGER
);
 
ALTER TABLE compra ADD CONSTRAINT FK_compra_2
    FOREIGN KEY (fk_usuario_nome)
    REFERENCES usuario (nome)
    ON DELETE CASCADE;
 
ALTER TABLE pertencem_a__filmes_compra_carrinho ADD CONSTRAINT FK_pertencem_a__filmes_compra_carrinho_1
    FOREIGN KEY (fk_filmes_nome)
    REFERENCES filmes (nome)
    ON DELETE NO ACTION;
 
ALTER TABLE pertencem_a__filmes_compra_carrinho ADD CONSTRAINT FK_pertencem_a__filmes_compra_carrinho_2
    FOREIGN KEY (fk_compra_n_venda)
    REFERENCES compra (n_venda)
    ON DELETE NO ACTION;
 
ALTER TABLE pertencem_a__filmes_compra_carrinho ADD CONSTRAINT FK_pertencem_a__filmes_compra_carrinho_3
    FOREIGN KEY (fk_carrinho_id_carrinho)
    REFERENCES carrinho (id_carrinho)
    ON DELETE RESTRICT;
 
ALTER TABLE compoem_o ADD CONSTRAINT FK_compoem_o_1
    FOREIGN KEY (fk_filmes_nome)
    REFERENCES filmes (nome)
    ON DELETE SET NULL;
 
ALTER TABLE compoem_o ADD CONSTRAINT FK_compoem_o_2
    FOREIGN KEY (fk_carrinho_id_carrinho)
    REFERENCES carrinho (id_carrinho)
    ON DELETE SET NULL;