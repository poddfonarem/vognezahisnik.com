<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../functions/func.php';

class GenerateArticleTest extends TestCase
{
    public function testGenerateArticleWithOneItem()
    {
        $articles = [
            [
                'title' => 'Article 1',
                'items' => ['Item 1', 'Item 2']
            ]
        ];

        $expectedHtml = '<div class="product-item">'
            . '<img src="/images/articles/Info.png" alt="Article 1" class="product-image" style="height:auto;">'
            . '<h3>Article 1</h3>'
            . '<ul class="product-list">'
            . '<li><a href="#" class="hover_underline"><i class="fas fa-list"></i> Item 1</a></li>'
            . '<li><a href="#" class="hover_underline"><i class="fas fa-list"></i> Item 2</a></li>'
            . '</ul>'
            . '</div>';

        $this->assertEquals($expectedHtml, generateArticle($articles));
    }

    public function testGenerateArticleWithMultipleArticles()
    {
        $articles = [
            [
                'title' => 'Article 1',
                'items' => ['Item 1', 'Item 2']
            ],
            [
                'title' => 'Article 2',
                'items' => ['Item A', 'Item B']
            ]
        ];

        $expectedHtml = '<div class="product-item">'
            . '<img src="/images/articles/Info.png" alt="Article 1" class="product-image" style="height:auto;">'
            . '<h3>Article 1</h3>'
            . '<ul class="product-list">'
            . '<li><a href="#" class="hover_underline"><i class="fas fa-list"></i> Item 1</a></li>'
            . '<li><a href="#" class="hover_underline"><i class="fas fa-list"></i> Item 2</a></li>'
            . '</ul>'
            . '</div>'
            . '<div class="product-item">'
            . '<img src="/images/articles/Info.png" alt="Article 2" class="product-image" style="height:auto;">'
            . '<h3>Article 2</h3>'
            . '<ul class="product-list">'
            . '<li><a href="#" class="hover_underline"><i class="fas fa-list"></i> Item A</a></li>'
            . '<li><a href="#" class="hover_underline"><i class="fas fa-list"></i> Item B</a></li>'
            . '</ul>'
            . '</div>';

        $this->assertEquals($expectedHtml, generateArticle($articles));
    }

    public function testGenerateArticleWithEmptyItems()
    {
        $articles = [
            [
                'title' => 'Article 1',
                'items' => []
            ]
        ];

        $expectedHtml = '<div class="product-item">'
            . '<img src="/images/articles/Info.png" alt="Article 1" class="product-image" style="height:auto;">'
            . '<h3>Article 1</h3>'
            . '<ul class="product-list"></ul>'
            . '</div>';

        $this->assertEquals($expectedHtml, generateArticle($articles));
    }
}

class GenerateReviewsTest extends TestCase
{
    public function testGenerateReviewsWithOneReview()
    {
        $reviews = [
            [
                'name' => 'John Doe',
                'text' => 'Great product!',
                'date' => '2024-12-01'
            ]
        ];

        $expectedHtml = '<article class="feedback">'
            . '<h3>John Doe</h3>'
            . '<p>Great product!</p>'
            . '<span class="date">2024-12-01</span>'
            . '</article>';

        $this->assertEquals($expectedHtml, generateReviews($reviews));
    }

    public function testGenerateReviewsWithMultipleReviews()
    {
        $reviews = [
            [
                'name' => 'John Doe',
                'text' => 'Great product!',
                'date' => '2024-12-01'
            ],
            [
                'name' => 'Jane Smith',
                'text' => 'Not bad, could be better.',
                'date' => '2024-12-02'
            ]
        ];

        $expectedHtml = '<article class="feedback">'
            . '<h3>John Doe</h3>'
            . '<p>Great product!</p>'
            . '<span class="date">2024-12-01</span>'
            . '</article>'
            . '<article class="feedback">'
            . '<h3>Jane Smith</h3>'
            . '<p>Not bad, could be better.</p>'
            . '<span class="date">2024-12-02</span>'
            . '</article>';

        $this->assertEquals($expectedHtml, generateReviews($reviews));
    }

    public function testGenerateReviewsWithEmptyReviews()
    {
        $reviews = [];

        $expectedHtml = '';

        $this->assertEquals($expectedHtml, generateReviews($reviews));
    }
}