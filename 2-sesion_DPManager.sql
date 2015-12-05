
SELECT COUNT(*) FROM tabla WHERE nombre LIKE '%i%' ;

SELECT * FROM tabla ORDER BY nombre ASC;

SELECT nombre, paterno, CONCAT_WS(',', nombre, paterno) AS completo FROM tabla ORDER BY nombre ASC

UPDATE tabla SET nombre = 'H?ctor',paterno = 'H?rnandez',materno = 'Rivera' WHERE id_cliente = 3;

-- BuildDatos Only Record JSON Type

SELECT 
-- group_concat(nombre, ' ', paterno) 
CONCAT("{\"success\":true,\"total\":\"",(SELECT COUNT(*) FROM tabla WHERE nombre = 'Super' ),"\",", "\"rows\":[",GROUP_CONCAT(CONCAT("{"),CONCAT("\"nombre\":\"",nombre,"\","),CONCAT("\"paterno\":\"",paterno,"\","),CONCAT("\"materno\":\"",materno,"\""),CONCAT("}")), "]}") AS json
FROM tabla WHERE nombre = 'Super';

SELECT CONCAT("{\"success\":true,\"total\":\"",(SELECT COUNT(*) FROM tabla WHERE nombre = 'Super' ),"\",", "\"rows\":[",GROUP_CONCAT(CONCAT("{"),CONCAT("\"nombre\":\"",nombre,"\","),CONCAT("\"paterno\":\"",paterno,"\","),CONCAT("\"materno\":\"",materno,"\""),CONCAT("}")), "]}") AS json FROM tabla WHERE nombre = 'Super';

SELECT CONCAT("{\"success\":true,\"total\":\"",(SELECT COUNT(*) FROM tabla WHERE  nombre = 'Super' ),"\",", "\"rows\":[",GROUP_CONCAT(CONCAT("{"),CONCAT("\"id_cliente\":\"",id_cliente,"\","),CONCAT("\"nombre\":\"",nombre,"\","),CONCAT("\"paterno\":\"",paterno,"\","),CONCAT("\"materno\":\"",materno,"\""),CONCAT("}")), "]}") AS json FROM tabla WHERE  nombre = 'Super';

SELECT CONCAT("[",GROUP_CONCAT(CONCAT("{"),CONCAT("\"id_cliente\":\"",id_cliente,"\","),CONCAT("\"nombre\":\"",nombre,"\","),CONCAT("\"paterno\":\"",paterno,"\","),CONCAT("\"materno\":\"",materno,"\""),CONCAT("}")), "]") AS json FROM tabla;

SELECT CONCAT("{\"success\":true,\"total\":\"",(SELECT COUNT(*) FROM tabla),"\",", "\"rows\":[",GROUP_CONCAT(CONCAT("{"),CONCAT("\"id_cliente\":\"",id_cliente,"\","),CONCAT("\"nombre\":\"",nombre,"\","),CONCAT("\"paterno\":\"",paterno,"\","),CONCAT("\"materno\":\"",materno,"\""),CONCAT("}")), "]}") AS json FROM tabla;

SELECT CONCAT("{\"success\":true,\"total\":\"",(SELECT COUNT(*) FROM tabla WHERE 1),"\",", "\"rows\":[",GROUP_CONCAT(CONCAT("{"),CONCAT("\"nombre\":\"",nombre,"\","),CONCAT("\"paterno\":\"",paterno,"\","),CONCAT("\"materno\":\"",materno,"\""),CONCAT("}")), "]}") AS json FROM tabla WHERE 1;

SELECT CONCAT("{\"success\":true,\"total\":\"",(SELECT COUNT(*) FROM tabla WHERE 1),"\",", "\"rows\":[",GROUP_CONCAT(CONCAT("{"),CONCAT("\"nombre\":\"",nombre,"\","),CONCAT("\"paterno\":\"",paterno,"\","),CONCAT("\"materno\":\"",IFNULL(materno, '-'),"\""),CONCAT("}")), "]}") AS json FROM tabla WHERE 1;

SELECT CONCAT("{\"success\":true,\"total\":\"",(SELECT COUNT(*) FROM tabla WHERE 1),"\",", "\"rows\":[",GROUP_CONCAT(CONCAT("{"),CONCAT("\"nombre\":\"",CONCAT('*', nombre),"\","),CONCAT("\"paterno\":\"",paterno,"\","),CONCAT("\"materno\":\"",IFNULL(materno, '-'),"\""),CONCAT("}")), "]}") AS json FROM tabla WHERE 1;

SELECT CONCAT_WS('', LOWER(SUBSTRING(nombre, 1, 1)), UCASE(SUBSTRING(nombre, 2))) FROM tabla;

SELECT CONCAT("{\"success\":true,\"total\":\"",(SELECT COUNT(*) FROM tabla WHERE 1),"\",", "\"rows\":[",GROUP_CONCAT(CONCAT("{"),CONCAT("\"nombre\":\"",CONCAT('*', nombre),"\","),CONCAT("\"paterno\":\"",CONCAT_WS('', LOWER(SUBSTRING(paterno, 1, 1)), UCASE(SUBSTRING(paterno, 2))),"\","),CONCAT("\"materno\":\"",IFNULL(materno, '-'),"\""),CONCAT("}")), "]}") AS json FROM tabla WHERE 1;

SELECT CONCAT("{\"success\":true,\"total\":\"",(SELECT COUNT(*) FROM tabla WHERE 1),"\",", "\"rows\":[",GROUP_CONCAT(CONCAT("{"),CONCAT("\"nombre\":\"",CONCAT('*', nombre),"\","),CONCAT("\"paterno\":\"",CONCAT_WS('', LOWER(SUBSTRING(paterno, 1, 1)), UCASE(SUBSTRING(paterno, 2))),"\","),CONCAT("\"materno\":\"",IFNULL(materno, '-'),"\","),CONCAT("\"campo\":\"",CONCAT_WS(' ', nombre, paterno),"\""),CONCAT("}")), "]}") AS json FROM tabla WHERE 1;

SELECT CONCAT("[",GROUP_CONCAT(CONCAT("{"),CONCAT("\"nombre\":\"",CONCAT('*', nombre),"\","),CONCAT("\"paterno\":\"",CONCAT_WS('', LOWER(SUBSTRING(paterno, 1, 1)), UCASE(SUBSTRING(paterno, 2))),"\","),CONCAT("\"materno\":\"",IFNULL(materno, '-'),"\","),CONCAT("\"campo\":\"",CONCAT_WS(' ', nombre, paterno),"\""),CONCAT("}")), "]") AS json FROM tabla WHERE 1;

SELECT CONCAT("[",GROUP_CONCAT("[",CONCAT("\"",CONCAT('*', nombre),"\","),CONCAT("\"",CONCAT_WS('', LOWER(SUBSTRING(paterno, 1, 1)), UCASE(SUBSTRING(paterno, 2))),"\","),CONCAT("\"",IFNULL(materno, '-'),"\","),CONCAT("\"",CONCAT_WS(' ', nombre, paterno),"\""),"]"), "]") AS json FROM tabla WHERE 1;