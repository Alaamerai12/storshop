<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){

        return view('products/create',['categories'=>Category::all()]);
      
       }


       public function index(){
        $products= product::latest();
        $category_id=request('category_id');
         $products->when($category_id,function($q)use($category_id){
            $q->where('category_id',$category_id);
         });
         return view('products/index',['products'=>$products->paginate(3),'categories'=>Category::all()]);

       }   
       public function store(){
        request()->validate($this->rules());
    
        $imagepath=request()->file('image')->store('public');
        $product=new product;
        $product->image=str_replace('public/', '',$imagepath);
      
        
        $product->name=request('name');
        $product->price=request('price');
        $product->description=request('description');
      
    
        $product->category_id=request('category');
        $product->save();
        return redirect('/products');
       }
       public function show($id){
        return view('products/in',['product'=>product::with('category')->find($id)]);

       }
       public function edit($id){
        return view('products/edit',['categories'=>Category::all(),
        'product'=>product::find($id)]
    );

       }


       public function update($id){
    
        $product=product::find($id);
        if(request()->file('image'))
        {   
            $newimagepath=request()->file('image')->store('public');
        $product->image=str_replace('public/', '',$newimagepath);
    
        }
        else{
            
            $product->image=$product->image;
        }
       
        $product->name=request('name');
        $product->price=request('price');
        $product->description=request('description');
      
    
        $product->category_id=request('category');
        $product->save();
        return redirect('/products');
     }
     public function destroy($id){
        product::find($id)->delete();
        return redirect('/products');
       }
       public function search(Request $request){
       $request->validate([
        'q'=>'required'
       ]);
       $q=$request->q;
      
       $filteredproduct=product::where('name','like','%'.$q.'%')->paginate(3);
     
      if($filteredproduct){
        return view('products/index')->with(['products'=>$filteredproduct,'categories'=>Category::all()]);
      }
       }
       private function rules(){
        return[
            'name'=>'required',
            'price'=>'required',
            'image'=>'required|image',
            'category'=>'required' 
        ];
       }
}
