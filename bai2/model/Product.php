<?php
class Product extends BaseModel
{
    protected $tableName = 'products';
    public static function listProductInCategories($id)
    {
        $model = new static;
        $sqlBuilder = "SELECT * FROM $model->tableName WHERE cate_id=$id";
        $stmt = $model->conn->prepare($sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));
        return $result;
    }
}
