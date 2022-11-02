USE sucos_vendas;

SELECT * FROM TABELA_DE_CLIENTES;

SELECT CPF AS IDENTIFICADOR, NOME AS CLIENTE FROM tabela_de_clientes;

##CONSULTAS

SELECT * FROM tabela_de_produtos WHERE SABOR = 'MANGA'
OR TAMANHO = '470 ml';

SELECT * FROM tabela_de_produtos WHERE SABOR = 'MANGA'
AND TAMANHO = '470 ml';

SELECT * FROM tabela_de_produtos WHERE NOT (SABOR = 'MANGA'
AND TAMANHO = '470 ml');

SELECT * FROM tabela_de_produtos WHERE NOT (SABOR = 'MANGA'
OR TAMANHO = '470 ml');

SELECT * FROM tabela_de_produtos WHERE SABOR = 'MANGA'
AND NOT (TAMANHO = '470 ml');

SELECT * FROM tabela_de_produtos WHERE sabor IN ('Laranja', 'Manga');

SELECT * FROM tabela_de_clientes WHERE cidade IN ('São Paulo', 'Rio de Janeiro')
AND (idade >= 19 AND idade <= 24);

SELECT * FROM tabela_de_clientes WHERE cidade IN ('São Paulo', 'Rio de Janeiro')
AND idade >= 18 
AND bairro in ('Tijuca', 'Jardins', 'Inhauma');

##LIKE

SELECT * FROM tabela_de_produtos WHERE sabor LIKE '%Maçã%';

SELECT * FROM tabela_de_clientes WHERE NOME LIKE '%Mattos';