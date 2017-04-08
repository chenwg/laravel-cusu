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
    protected $art;
    public function __construct(Article $art){
        $this->art = $art;
    }
    public function index(string $en='suibi'){
        $data = Article::where(['en'=>$en,'is_delete'=>0])->paginate(3);
        return view('home/article/article',['title'=>config('title.titleArr.'.$en),'data'=>$data]);
    }

    public function detail(int $id=0){
        $data = $this->art->getDetail($id);
        event(new Pv($id));
        return view('home/article/article',
        ['title'=>$data['title'],'data'=>$data]);
    }

}
