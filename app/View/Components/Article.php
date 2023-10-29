<?php

namespace App\View\Components;

use Illuminate\View\Component;
use \App\Models\Article as ArticleModel;
class Article extends Component
{

    public ArticleModel $article;

    public function mount()
    {

    }

    public function render()
    {
        // TODO: Implement render() method.
    }

    public function save()
    {

        $post = ArticleModel::create($this->article);
        return redirect()->to('/articles')->with('status','Post created!');
    }


}
