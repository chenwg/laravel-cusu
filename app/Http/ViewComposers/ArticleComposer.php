<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Model\Common\Cate;
class ArticleComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $cate;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(Cate $cate)
    {
        // Dependencies automatically resolved by service container...
        $this->cate = $cate;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('cate', $this->getCate());
    }

    private function getCate(){
        $cate = $this->cate->where('is_delete',0)->get()->toArray();
        $cateArray = [];
        foreach($cate as $k=>$v){
            $cateArray[$v['id']] = $v;
        }
        $cateTree = [];
        foreach($cateArray as $v){
            if(isset($cateArray[$v['pid']])){
                $cateArray[$v['pid']]['children'][] = &$cateArray[$v['id']];
            }else{
                $cateTree[] = &$cateArray[$v['id']];
            }
        }
        return $cateTree;
    }
}