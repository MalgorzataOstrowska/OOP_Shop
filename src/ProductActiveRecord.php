<?php

/**
 * Copyright
 */
class ProductActiveRecord extends Product
{
    public function save(Connection $connection)
    {
        $sql = sprintf(
            "INSERT INTO product VALUES(null, '%s', '%s', %s)",
            $this->name,
            null,
            $this->price->getPrice()
        );

        die($sql);
    }

}

