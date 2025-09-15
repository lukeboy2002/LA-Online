<?php

namespace App\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoryList extends Component
{
    protected $listeners = [
        'category-created' => 'refreshCategories',
    ];

    public function render()
    {
        //        $categories = Category::withCount('posts')->get();
        $categories = Category::all();

        return view('livewire.categories.category-list', [
            'categories' => $categories,
        ]);
    }
}
