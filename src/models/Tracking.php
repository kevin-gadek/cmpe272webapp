<?php
/**
 * Created by PhpStorm.
 * User: huyvo
 * Date: 11/30/17
 * Time: 9:27 PM
 */

class Tracking
{

    static function fetchTopFive($pdo){

        try {
            $sql = "select product_id, count(_id) as instance
                    from tracking
                    group by product_id
                    order by instance desc
                    limit 5";

            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        }catch (PDOException $e) {

            return null;
        }
    }

}