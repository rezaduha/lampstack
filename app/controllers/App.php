<?php

class App extends Controller {

    public function __construct() {
        $this->articleModel = $this->model('ArticleModel');
        $this->topicModel = $this->model('TopicModel');
    }

    public function index() {
        $latestArticle = $this->articleModel->getLatestArticle();
        $articlesPerTopic = $this->topicModel->getArticlesPerTopics();
        $topics = $this->topicModel->getTopics();

        $data = [
            'latestArticle' => $latestArticle,
            'featuredArticles' => $articlesPerTopic,
        ];

        $data['topics'] = $topics;

        $this->view('includes/head', $data);
        $this->view('includes/nav', $data);
        $this->view('index', $data);
    }
}
