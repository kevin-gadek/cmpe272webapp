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
            $sql = "select product_real_id , count(_id) as instance 
                    from (
                    select _id,product_id+company_id*10 as product_real_id 
                    from Tracking 
                    ) as innerTable
                    group by product_real_id
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
            $sql = "select product_real_id , count(_id) as instance 
                    from (
                    select _id,product_id+company_id*10 as product_real_id 
                    from Tracking 
                    where company_id = :company_id
                    ) as innerTable
                    group by product_real_id
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
            $sql = "select product_real_id , sum(review)/count(_id) as avg_review 
                    from (
                    select _id,review,product_id+company_id*10 as product_real_id 
                    from Tracking 
                    ) as innerTable
                    group by product_real_id
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
            $sql = "select product_real_id , sum(review)/count(_id) as avg_review 
                    from (
                    select _id,review,product_id+company_id*10 as product_real_id 
                    from Tracking 
                    where company_id = :company_id
                    ) as innerTable
                    group by product_real_id
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
    static function insertData($pdo,$company_id,$index, $user_id){
        try {
            echo $company_id." :".$index." ".$user_id;
            $timenow = time();
            $sql = "INSERT INTO Tracking(user_id,product_id,company_id,date_created) 
                    VALUES (?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            /*
            $stmt->bindValue(':user_id',$user_id);
            $stmt->bindValue(':index',$index);
            $stmt->bindValue(':company_id',$company_id);
//            $stmt->bindValue(':timenow', $timenow);
            */
            $stmt->execute(array($user_id, $index, $company_id,$timenow));

            return ;
        }catch (PDOException $e) {
            return null;
        }
    }

}