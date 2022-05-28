<?php

class TopicModel {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getTopics() {
        $this->db->query('SELECT * FROM topics');
        $result = $this->db->resultSet();
        return $result;
    }

    public function getArticlesPerTopics() {
        $this->db->query('SELECT * FROM topics');
        $result = array();
        foreach ($this->db->resultSet() as $topics) {
            $result[$topics->id] = $topics;
            $result[$topics->id]->data = $this->getArticlesPerTopic($topics->id);
        }
        return $result;
    }

    public function getArticlesPerTopic($topicId) {
        $this->db->query('SELECT articles.title, articles.slug as article_slug, articles.image, articles.description, articles.created_at AS article_created, authors.name as author FROM articles INNER JOIN topics ON topics.id = articles.topic_id INNER JOIN authors on authors.id = articles.author_id WHERE articles.topic_id = :topicId ORDER BY article_created DESC LIMIT 6');
        $this->db->bind(':topicId', $topicId);
        $result = $this->db->resultSet();
        return $result;
    }

    public function getArticlesByTopic($topicSlug) {
        $this->db->query('SELECT topics.name, topics.description, articles.title, articles.image, articles.slug, articles.created_at as article_created, authors.name as author FROM topics LEFT JOIN articles ON topics.id = articles.topic_id LEFT JOIN authors on authors.id = articles.author_id WHERE topics.slug = :topicSlug ORDER BY articles.created_at DESC');
        $this->db->bind(':topicSlug', $topicSlug);
        $result = $this->db->resultSet();
        return $result;
    }
}
