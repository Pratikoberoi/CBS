DELIMITER $$

CREATE TRIGGER dummy_agent_maxrow
BEFORE INSERT
ON dummy_agent
FOR EACH ROW
BEGIN
  SELECT COUNT(*) INTO @cnt FROM dummy_agent;
  IF @cnt >= 20 THEN
    CALL sth(); -- raise an error
  END IF;
END
$$

DELIMITER ;