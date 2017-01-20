<?php

/**
 * Copyright
 */
class ProductActiveRecord extends Product
{
    public function save(Connection $connection)
    {
        if($this->id){
            die('Nie zapisujemy dwa razy');
        }
        $sql = sprintf(
            "INSERT INTO product VALUES(null, '%s', '%s', %s, %s)",
            $this->name,
            null,
            $this->price->getPrice(),
            $this->quantity->getQuantity()
        );

        $connection->query($sql);
        $this->id = $connection->getLastId();
    }
    
    public function update(Connection $connection)
    {
        if (!$this->id) {
            die('Najpierw zapisz obiekt');
        }

        $sql = sprintf(
            "UPDATE product SET name='%s', price='%s', quantity='%s' WHERE id='%s'",
            $this->name,
            $this->price->getPrice(),
            $this->quantity->getQuantity(),
            $this->id
        );

        $connection->query($sql);
    }

    
}

