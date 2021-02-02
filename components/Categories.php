<?php namespace OFFLINE\Mall\Components;

use Cms\Classes\Theme;
use Cms\Classes\Page;
use Lang;
use URL;

use OFFLINE\Mall\Models\GeneralSettings;
use OFFLINE\Mall\Models\Category as CategoryModel;


class Categories extends MallComponent
{

    public function componentDetails()
    {
        return [
            'name'        => 'offline.mall::lang.components.categories.details.name',
            'description' => 'offline.mall::lang.components.categories.details.description'
        ];
    }

    public $categories;
    public $categoryPage;
    public $showCount;

    public function defineProperties()
    {
        return [
            'showCount' => [
                'title'       => 'offline.mall::lang.components.categories.show_count.title',
                'description' => 'offline.mall::lang.components.categories.show_count.description',
                'type'        => 'checkbox',
                'default'     => false
            ],
        ];
    }


    public function onRun()
    {
        // Page links        
        $this->setVar('categoryPage', GeneralSettings::get('category_page'));

        $this->categories = $this->loadCategories();
        $this->categories->showCount = $this->property('showCount');
        $this->setVar('categories', $this->categories);
    }

    protected function loadCategories()
    {
        $categories = CategoryModel::get();
        
        // Add a "url" helper attribute for linking to each item
        $categories->each(function($category) {

            //$slug = $category->slug;            
            $slug = $this->getParentSlug($category);
            
            $params = [
                'id'   => $category->id,
                'slug' => $slug, //$category->slug,
            ];
            $category->url = $this->controller->pageUrl($this->categoryPage, $params);

        });

        return $categories;
    }

    protected function getParentSlug($category)
    {
        $parent = $category->parent()->first();
        
        if ($parent) {
            $slug = $this->getParentSlug($parent) .'/'. $category->slug;
            return $slug;
        }
        return $category->slug;
    }

}
