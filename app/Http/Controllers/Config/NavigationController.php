<?php
namespace App\Http\Controllers\Config;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\BackendController;
use App\Navigation;
class NavigationController extends BackendController
{
    public function index(){       
        $Categorys = Navigation::where('parent_id', '=', 0)->get();
        foreach ($Categorys as $Category) {   
             $cat = $Category->name;             
             if(count($Category->childs)) {
                foreach ($Category->childs as $arr) {
                    if(count($arr->childs)){
                        $child = $arr->name;  
                        $childs = $arr->childs; 
                        //dd($childs);                 
                    }else{
                        $child2 = $arr->name;
                    }
                }

                }
            }

        return view('backend.config.menus.index',compact('cat','child','childs','child2'));
        //         $Categorys = Navigation::where('parent_id', '=', 0)->get();
        // $tree='<ul id="browser" class="filetree"><li class="tree-view"></li>';
        // foreach ($Categorys as $Category) {
        //      $tree .='<li class="tree-view closed"<a class="tree-name">'.$Category->name.'</a>';
        //      if(count($Category->childs)) {
        //         $tree .=$this->childView($Category);
        //     }
        // }
        // $tree .='<ul>';
        // // return $tree;
        // return view('backend.config.menus.index',compact('tree'));
    }
    public function childView($category){                 
            // foreach ($category->childs as $arr) {
            //     if(count($arr->childs)){
            //     return $arr; 
            //     }

            // }    
            $html ='<ul>';
            foreach ($category->childs as $arr) {
                if(count($arr->childs)){
                $html .='<li class="tree-view closed"><a class="tree-name">'.$arr->name.'</a>';                  
                $html.= $this->childView($arr);
                //dd($this->childView($arr));
                    }else{
                        $html .='<li class="tree-view"><a class="tree-name">'.$arr->name.'</a>';                                 
                        $html .="</li>";
                    }
                                   
            }
            
            $html .="</ul>";
            return $html;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Navigation $navigation)
    {
        return view('backend.config.menus.form', compact('navigation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'url' => 'required',
            'description' => 'min:3'
            ]);
        $input = $request->all();
        $input['parent_id'] = 0;
        $navigations =  Navigation::create($input);
         if(count($navigation->childs)) {
                 $treenavs =$this->childView($navigation);
            }
        return view('backend.config.menus.item', compact('navigations'));
        //return redirect('/backend/navigation-tree-view')->with('message', 'Your data was created successfully!');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }


}
