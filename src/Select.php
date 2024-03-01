<?php
namespace TiceTmP\CommaSeparated;
require __DIR__.'/../../vendor/autoload.php';
class getQuery {
    static public function getRelationWithCommaSeparated($masterTable,$relationTable, $relationFieldName, $idsField, $resultFieldName){
        if (empty($masterTable) || empty($relationTable) || empty($relationFieldName) || empty($idsField) || empty($resultFieldName)) 
            throw new \Exception('All parameters are required');
        return "(SELECT  GROUP_CONCAT(b.$relationFieldName ORDER BY b.id)
                                FROM    $masterTable a
                                        INNER JOIN $relationTable b
                                            ON FIND_IN_SET(b.id, a.$idsField) > 0
                                WHERE  a.id = $masterTable.id
                                GROUP   BY a.id) as $resultFieldName";
    }
}