<?php
/**
 * Created by PhpStorm.
 * User: huyvo
 * Date: 11/30/17
 * Time: 9:27 PM
 */

class Tracking
{
    //top 5 most visited
    static function fetchTopFiveMostVisited($pdo){

        try {
            $sql = "select product_id, count(_id) as instance
                    from Tracking
                    group by product_id
                    order by instance desc
                    limit 5";

            $stmt = $pdo->prepare($sql);

            $stmt->execute();
            return $stmt->fetchAll();
        }catch (PDOException $e) {

            return null;
        }
    }

    static function fetchTopFiveMostVisitedInEachCompany($pdo, $company_id){
        try {
            $sql = "select product_id, count(_id) as instance
                    from Tracking
                    where compmay_id = :company_id
                    group by product_id
                    order by instance desc
                    limit 5";

            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':company_id',$company_id);
            $stmt->execute();

            return $stmt->fetchAll();
        }catch (PDOException $e) {
            return null;
        }
    }

    static function fetchTopFiveBestReview($pdo){
        try {
            $sql = "select product_id,sum(review)/count(_id) as avg_review
                    from Tracking
                    group by product_id
                    order by avg_review desc
                    limit 5";

            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll();
        }catch (PDOException $e) {
            return null;
        }
    }

    static function fetchTopFiveBestReviewInEachCompany($pdo, $company_id){
        try {
            $sql = "select product_id,sum(review)/count(_id) as avg_review
                    from Tracking
                    where company_id = :company_id
                    group by product_id
                    order by avg_review desc
                    limit 5";

            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':company_id',$company_id);
            $stmt->execute();

            return $stmt->fetchAll();
        }catch (PDOException $e) {
            return null;
        }
    }

}