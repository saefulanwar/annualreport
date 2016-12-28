<?php
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Navigation;
class MenuController extends Controller
{
    public function treeView(){       
        $navigations = Navigation::where('parent_id', '=', 0)->get();
        $tree='<ul id="browser" class="filetree"><li class="tree-view"></li>';
        foreach ($navigations as $navigation) {
             $tree .='<li class="tree-view closed"<a class="tree-name">'.$navigation->name.'</a>';
             if(count($navigation->childs)) {
                $tree .=$this->childView($navigation);
            }
        }
        $tree .='<ul>';
        // return $tree;
        return view('backend.config.menus.index',compact('tree'));
    }
    public function childView($navigation){                 
            $html ='<ul>';
            foreach ($navigation->childs as $arr) {
                if(count($arr->childs)){
                $html .='<li class="tree-view closed"><a class="tree-name">'.$arr->name.'</a>';                  
                        $html.= $this->childView($arr);
                    }else{
                        $html .='<li class="tree-view"><a class="tree-name">'.$arr->name.'</a>';                                 
                        $html .="</li>";
                    }
                                   
            }
            
            $html .="</ul>";
            return $html;
    }    
}
