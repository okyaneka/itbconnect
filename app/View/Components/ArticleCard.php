<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ArticleCard extends Component
{
    public $article;
    public $href;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($article, $href)
    {
        $this->href = $href;
        $this->article = $article;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.article-card');
    }
}
