SELECT * FROM viagem;
SELECT * FROM tipo_veiculo;
SELECT * FROM veiculo;

/* inner join entre veiculo e tipo veiculo */
select * FROM
veiculo AS v
JOIN tipo_veiculo AS tipo  on tipo_veiculo_idtipo_veiculo = idtipo_veiculo;

/*Selecionar veiculos especificos */
select * FROM
veiculo AS v
JOIN tipo_veiculo AS tipo  on tipo_veiculo_idtipo_veiculo = idtipo_veiculo
WHERE tipo_veiculo = "saveiro";

/* teste 1 */
select * FROM
viagem  AS vi
JOIN veiculo AS vei on vi.tipo_veiculo_idtipo_veiculo = vei.id_veiculo;

/* teste 2*/
select * FROM
viagem  AS vi
INNER JOIN veiculo AS vei on vi.veiculo_id_veiculo = vei.id_veiculo;



/* funcionando query veiculo + viagem */
select * FROM
veiculo AS v
JOIN viagem AS vi  on v.id_veiculo = vi.veiculo_id_veiculo;


/* funcionando query veiculo + viagem + ultima viagem */
select  max(data_chegada),data_chegada,data_saida,motorista,km_chegada,km_saida,
hora_chegada,hora_saida,placa_veiculo,veiculo_id_veiculo,veiculo_id_veiculo, vi.tipo_veiculo_idtipo_veiculo
FROM
veiculo AS v
JOIN viagem AS vi  on v.id_veiculo = vi.veiculo_id_veiculo
where placa_veiculo = "JQE7537"
group by data_chegada,data_saida,motorista,km_chegada,km_saida,
hora_chegada,hora_saida,placa_veiculo,veiculo_id_veiculo,vi.tipo_veiculo_idtipo_veiculo
;

/*consulta de placa */
select * FROM
veiculo AS v
JOIN tipo_veiculo AS tipo  on tipo_veiculo_idtipo_veiculo = idtipo_veiculo
 where placa_veiculo like "%m%";

