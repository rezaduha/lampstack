<?php

class ArticleModel {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getLatestArticle() {
        $this->db->query('SELECT articles.id, title, articles.slug as article_slug, image, articles.created_at, topics.name FROM `articles` INNER JOIN topics ON articles.topic_id = topics.id ORDER BY articles.created_at DESC LIMIT 1');
        $row = $this->db->single();
        return $row;
    }

    public function getArticleBySlug($slug) {
        $this->db->query('SELECT articles.id, title, description, content, image, name as author_name, articles.created_at, articles.updated_at FROM articles INNER JOIN authors ON articles.author_id = authors.id WHERE slug = :slug');
        $this->db->bind(':slug', $slug);
        $row = $this->db->single();
        return $row;
    }
}