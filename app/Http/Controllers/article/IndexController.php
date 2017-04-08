<?php
declare(strict_types=1);
namespace App\Http\Controllers\Article;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Model\Common\Article;
use App\Events\Pv;
use Illuminate\Http\Request;
final class IndexController extends Controller
{
    public function index(string $en='suibi'){
        $data = Article::where(['en'=>$en,'is_delete'=>0])->paginate(3);
        return view('home/article/article',['title'=>'p','data'=>$data]);
    }

    public function detail(int $id=0){
        $data = Article::join('article_info',function($join){
                $join->on('article.id','=','article_info.aid');
        })->where('article.id',$id)->first();
        event(new Pv($data['id']));
        return view('home/article/article',['title'=>'p','data'=>$data]);
    }

    
}
