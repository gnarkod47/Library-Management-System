<?php
    function get_user_count(){
        $user_count = 0;
        $connection = mysqli_connect("localhost","root","appu1234");
        $db = mysqli_select_db($connection,"lms");
        $query = "select count(*) as user_count from users";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
            $user_count = $row['user_count'];
        }
        return $user_count;
    }
    function get_book_count(){
        $book_count = 0;
        $connection = mysqli_connect("localhost","root","appu1234");
        $db = mysqli_select_db($connection,"lms");
        $query = "select count(*) as book_count from book";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
            $book_count = $row['book_count'];
        }
        return $book_count;
    }
    function get_issue_book_count(){
        $issue_book_count = 0;
        $connection = mysqli_connect("localhost","root","appu1234");
        $db = mysqli_select_db($connection,"lms");
        $query = "select count(*) as issue_book_count from issued_books";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
            $issue_book_count = $row['issue_book_count'];
        }
        return $issue_book_count;
    }

    function get_auth_count(){
        $auth_count = 0;
        $connection = mysqli_connect("localhost","root","appu1234");
        $db = mysqli_select_db($connection,"lms");
        $query = "select count(*) as author_count from authors";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
            $auth_count = $row["author_count"];
        }
        return $auth_count;
    }
    function get_category_count(){
        $category_count = 0;
        $connection = mysqli_connect("localhost","root","appu1234");
        $db = mysqli_select_db($connection,"lms");
        $query = "select count(*) as category_count from category";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
            $category_count = $row["category_count"];
        }
        return $category_count;
    }
?>