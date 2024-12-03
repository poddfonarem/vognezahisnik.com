<?php
function generateProductCategory(array $products): string{
    $html = '';
    foreach ($products as $product) {
        $html .= '<div class="product-item">';
        $html .= '<img src="' . htmlspecialchars($product['image']) . '" alt="" class="product-image">';
        $html .= '<h3>' . htmlspecialchars($product['title']) . '</h3>';
        $html .= '<ul class="product-list">';
        foreach ($product['items'] as $item) {
            $html .= '<li><i class="fas fa-fire"></i> ' . htmlspecialchars($item) . '</li>';
        }
        $html .= '</ul>';
        $html .= '<a class="button" href="' . htmlspecialchars($product['link']) . '">' . htmlspecialchars($product['btn_name']) . ' <i class="fas fa-arrow-right"></i></a>';
        $html .= '</div>';
    }
    return $html;
}
function generateArticle(array $articles): string{
    $html = '';
    foreach ($articles as $article) {
        $html .= '<div class="product-item">';
        $html .= '<img src="/images/articles/Info.png" alt="' . htmlspecialchars($article['title']) . '" class="product-image" 
        style="height:auto;">';
        $html .= '<h3>' . htmlspecialchars($article['title']) . '</h3>';
        $html .= '<ul class="product-list">';
        foreach ($article['items'] as $item) {
            $html .= '<li><a href="#" class="hover_underline"><i class="fas fa-list"></i> ' . htmlspecialchars($item) . '</a></li>';
        }
        $html .= '</ul>';
        $html .= '</div>';
    }
    return $html;
}

function generateReviews(array $reviews): string{
    $html = '';
    foreach ($reviews as $review) {
        $html .= '<article class="feedback">';
        $html .= '';
        $html .= '<h3>' . htmlspecialchars($review['name']) . '</h3>';
        $html .= '<p>' . htmlspecialchars($review['text']) . '</p>';
        $html .= '<span class="date">' . htmlspecialchars($review['date']) . '</span>';
        $html .= '</article>';
    }
    return $html;
}