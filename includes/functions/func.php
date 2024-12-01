<?php
function generateProductCategory($products): string{
    $html = '';
    foreach ($products as $product) {
        $html .= '<div class="product-item">';
        $html .= '<img src="' . $product['image'] . '" alt="' . $product['title'] . '" class="product-image">';
        $html .= '<h3>' . $product['title'] . '</h3>';
        $html .= '<ul class="product-list">';
        foreach ($product['items'] as $item) {
            $html .= '<li><i class="fas fa-fire"></i> ' . $item . '</li>';
        }
        $html .= '</ul>';
        $html .= '<a class="button" href="' . $product['link'] . '">' . $product['btn_name'] . ' <i class="fas fa-arrow-right"></i></a>';
        $html .= '</div>';
    }
    return $html;
}
function generateArticle($articles): string{
    $html = '';
    foreach ($articles as $article) {
        $html .= '<div class="product-item">';
        $html .= '<img src="/images/articles/Info.png" alt="' . $article['title'] . '" class="product-image" 
        style="height:auto;">';
        $html .= '<h3>' . $article['title'] . '</h3>';
        $html .= '<ul class="product-list">';
        foreach ($article['items'] as $item) {
            $html .= '<li><a href="#" class="hover_underline"><i class="fas fa-list"></i> ' . $item . '</a></li>';
        }
        $html .= '</ul>';
        $html .= '</div>';
    }
    return $html;
}

function generateReviews($reviews): string{
    $html = '';
    foreach ($reviews as $review) {
        $html .= '<article class="feedback">';
        $html .= '';
        $html .= '<h3>' . $review['name'] . '</h3>';
        $html .= '<p>' . $review['text'] . '</p>';
        $html .= '<span class="date">' . $review['date'] . '</span>';
        $html .= '</article>';
    }
    return $html;
}