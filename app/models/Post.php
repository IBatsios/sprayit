<?php

class Post {

    private static $dataTable = 'posts';

    public static function checkFields($_title, $_body){
        if ($_title == ""){
            echo 'There must be a title';
            return false;
        } else {
            if ($_body == ""){
                echo "There must be a body";
                return false;
            }
            else return true;
        }
    }

    public static function createPost($_title, $_body) {
        $_userUuid = Post::getUuid();
        $_postUuid = uniqid();
        if (self::checkFields($_title, $_body)){
            if (DatabaseConnector::createPost($_title, $_body, $_userUuid, $_postUuid)){
                return true;
            } else {
                echo "post not created.";
                return false;
            }
        } else {
            return false;
        }
    }

    public static function getUuid() {
        $userId = Session::getField('user_id');
        return DatabaseConnector::getUuid($userId);
    }

    public function getPosts() {
        return DatabaseConnector::getAllPosts();
    }
}