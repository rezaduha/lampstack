<?php

class Article extends Controller {
    
    public function __construct() {
        $this->parsedown = $this->library('Parsedown');
        $this->articleModel = $this->model('ArticleModel');
        $this->topicModel = $this->model('TopicModel');
    }

    public function index($slug) {
        $articleBySlug = $this->articleModel->getArticleBySlug($slug);
        $topics = $this->topicModel->getTopics();

        $articleContent = $this->parsedown->text($articleBySlug->content);

        $data = [
            'title' => $articleBySlug->title,
            'description' => $articleBySlug->description,
            'created_at' => $articleBySlug->created_at,
            'updated_at' => $articleBySlug->updated_at,
            'author' => $articleBySlug->author_name,
            'hero' => $articleBySlug->image,
            'content' => $articleContent,
            'metaTitle' => $articleBySlug->title,
            'metaDesc' => $articleBySlug->description
        ];

        $data['topics'] = $topics;

        $this->view('includes/head', $data);
        $this->view('includes/nav', $data);
        $this->view('article/index', $data);
        $this->view('includes/footer');
        $this->view('includes/script');
    }
}
