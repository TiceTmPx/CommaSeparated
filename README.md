# CommaSeparated
This function could be useful in scenarios where traditional Eloquent relationships are not applicable, and you need to manually handle the relationship using raw SQL queries with a comma-separated values approach
# Install
```
composer require ticetmp/comma-separated:"^1"
```

if you store data in database like this

![image](https://github.com/TiceTmPx/CommaSeparated/assets/134601957/98dbc769-a7ab-4e6a-bfa8-750a87110174)

and you need to get data like this, without extra joining target table

![image](https://github.com/TiceTmPx/CommaSeparated/assets/134601957/70b5d4de-f0a4-458e-b61c-66639c66e898)

this library can help you

## Usage

use
```html
use TiceTmP\GetSubQuery;
```

you need to send five parameter
- $masterTable: This primary table name

- $relationTable: This variable represents the name of the table that holds the related data.

- $relationFieldName: It specifies the field in the relation table that is used for establishing the relationship.

- $idsField: This parameter denotes the field in the primary table, that contains comma-separated values referencing the related records.

- $resultFieldName: It is the alias or name given to the result of the subquery.

example query
```html
$data = YouModel::query()
    ->addSelect(
        DB::raw(
            GetSubQuery::getRelationWithCommaSeparated($masterTable, $relationTable, $relationFieldName, $idsField, $resultFieldName)
        )
    );
```

return text like this to DB::raw()
```
(SELECT  GROUP_CONCAT(b.test3 ORDER BY b.id)
FROM    test1 a
        INNER JOIN test2 b
            ON FIND_IN_SET(b.id, a.test4) > 0
WHERE  a.id = test1.id
GROUP   BY a.id) as test5
```

Certainly! The provided library, implemented through the getRelationWithCommaSeparated function, is designed to address scenarios where you need to retrieve related data from multiple tables without resorting to complex table joins in Laravel Eloquent or ORM (Object-Relational Mapping). This approach minimizes the workload on the database and simplifies the data manipulation process.

This function employs a subquery using SQL to fetch related data from the {{$relationTable}}, which is the table containing the desired information. Instead of using traditional table joins, this method streamlines the process and helps avoid the complexities associated with joining two tables simultaneously. This can result in improved database performance and reduced code complexity.

By utilizing comma-separated values in the {{$idsField}} to store related data, the code achieves a reduction in both code complexity and SQL commands, as there is no need for extensive table joining. This can contribute to a lighter workload on the database.

It's important to note that while using comma-separated values for storing related data can simplify code and SQL queries, it may not always be the best choice. Especially in cases where there is a large volume of data or when more flexibility is needed in searching and managing data, careful consideration should be given to the trade-offs associated with this approach.

Enjoy.
