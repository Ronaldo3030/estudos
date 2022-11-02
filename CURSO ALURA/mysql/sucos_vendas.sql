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

##DISTINCT
SELECT EMBALAGEM, TAMANHO FROM tabela_de_produtos;
SELECT DISTINCT EMBALAGEM, TAMANHO FROM tabela_de_produtos;
SELECT DISTINCT EMBALAGEM, TAMANHO FROM tabela_de_produtos WHERE SABOR = 'Laranja';
SELECT DISTINCT BAIRRO FROM tabela_de_clientes WHERE CIDADE = 'Rio de Janeiro';

##LIMIT
SELECT * FROM tabela_de_produtos;
SELECT * FROM tabela_de_produtos LIMIT 5;
SELECT * FROM tabela_de_produtos LIMIT 2, 3;
SELECT * FROM notas_fiscais;
SELECT * FROM notas_fiscais WHERE DATA_VENDA = '2017-01-01' LIMIT 10;

##ORDER BY
SELECT * FROM tabela_de_produtos;
SELECT * FROM tabela_de_produtos ORDER BY PRECO_DE_LISTA;
SELECT * FROM tabela_de_produtos ORDER BY PRECO_DE_LISTA DESC;
SELECT * FROM tabela_de_produtos ORDER BY NOME_DO_PRODUTO;
SELECT * FROM tabela_de_produtos ORDER BY EMBALAGEM, NOME_DO_PRODUTO;
SELECT * FROM tabela_de_produtos ORDER BY NOME_DO_PRODUTO, EMBALAGEM;
SELECT * FROM tabela_de_produtos ORDER BY NOME_DO_PRODUTO DESC, EMBALAGEM ASC;

SELECT * FROM tabela_de_produtos WHERE NOME_DO_PRODUTO = 'Linha Refrescante - 1 Litro - Morango/Limão';
SELECT * FROM itens_notas_fiscais WHERE codigo_do_produto = '1101035' ORDER BY QUANTIDADE DESC;

##GROUP BY
SELECT * FROM tabela_de_clientes;
SELECT ESTADO, LIMITE_DE_CREDITO FROM tabela_de_clientes;
SELECT ESTADO, SUM(LIMITE_DE_CREDITO) AS LIMITE_TOTAL FROM tabela_de_clientes GROUP BY ESTADO;
SELECT ESTADO, COUNT(LIMITE_DE_CREDITO) AS LIMITE_TOTAL FROM tabela_de_clientes GROUP BY ESTADO;
SELECT EMBALAGEM, PRECO_DE_LISTA FROM tabela_de_produtos;
SELECT EMBALAGEM, MAX(PRECO_DE_LISTA) AS MAIOR_PRECO FROM tabela_de_produtos GROUP BY EMBALAGEM;

SELECT * FROM itens_notas_fiscais;
SELECT CODIGO_DO_PRODUTO, MAX(QUANTIDADE) AS ITENS_DE_VENDA FROM itens_notas_fiscais WHERE CODIGO_DO_PRODUTO = 1101035;
SELECT COUNT(*) FROM itens_notas_fiscais WHERE codigo_do_produto = '1101035' AND QUANTIDADE = 99;