<?php

class MainController extends \BaseController {

	public function index()
	{
		$vips = DB::table('restaurants')
			->select('restaurants.name', 'restaurants.type','restaurants.id')
			->where('vip','=','1')
			->take(8)
			->get();
		return View::make('home.index')->with('vips', $vips);
	}

	public function add()
	{
		return View::make('home.add');
	}

	public function insert()
	{
				$username = Input::get('username');
				$name = Input::get('name');
				$phone = Input::get('phone');
				$email = Input::get('email');
				$type = Input::get('type');
				$adress = Input::get('adress');
				$info= Input::get('info');

				$data = array(
					'username'=> $username,
					'phone'=> $phone,
					'name'=> $name,
					'email'=> $email,
					'type'=> $type,
					'adress'=> $adress,
					'info'=> $info
				);

		Mail::send('mails.send', $data, function($message){
			$message->to('geoallmenus@gmail.com', 'lasha monaselidze')->subject('შეკვეთა');
		});

		return 'წარმატებით გაიგზავნა';

	}



	public function search()
	{
		$get_search = DB::table('restaurants')

			->select('restaurants.name', 'restaurants.type','restaurants.id');
		if(Input::has('adress')) {
			$adress = Input::get('adress');
			$adress_db = implode(',', $adress);
			$get_search->whereIn('restaurants.adress', array($adress_db));
		}

		if(Input::has('type')) {
			$type = Input::get('type');
			$type_db = implode(',', $type);
			$get_search->whereIn('restaurants.type', array($type_db));
		}

		/*if(Input::has('adress')) {
			$adress = Input::get('adress');
			$adress_db = implode(',', $adress);
			$get_search->whereIn('restaurants.adress', array($adress_db));
		}*/


						$get_search= $get_search->paginate(24);
		return View::make('home.searched')->with('get_search' , $get_search);
	}

	public function single($id)
	{
		$get_search = DB::table('restaurants')
			//->join('products', 'restaurants.id', '=', 'products.resto_id')
			//->join('pictures', 'restaurants.id' , '=' , 'pictures.resto_id')
			->select('name', 'type','id','adress','phone','info')
		->where('restaurants.id',$id)->first();
		$get_cat = DB::table('products')
			->join('category','products.cat_id', '=','category.id')
			->select('category.id')
			->where('products.resto_id', '=', $id)
			->orderBy('category.id','asc')
			->take(1)
			->get();

		return View::make('home.single',array('get_cat' => $get_cat))->with('get_search',$get_search);

	}

	public function menu($id,$cat_id)
	{

			$db = DB::table('products')
				->join('category', 'products.cat_id', '=' , 'category.id')
				->select('category.name','category.id')->where('products.resto_id' , '=', $id)
				->where('category.id', '>=', $cat_id)
				->orderBy('category.id', 'asc')
				->distinct()
				->take(1)
				->get();

		$category = DB::table('products')
			->join('category', 'products.cat_id', '=' , 'category.id')
			->select('category.name','category.id')->where('products.resto_id' , '=', $id)
			->get();
			$get_final = DB::table('category')
				->select('id')
				->orderBy('id','desc')
				->take(1)
				->get();

		$prod = DB::table('products')
			->join('category', 'products.cat_id', '=' , 'category.id')
			->select('products.name','products.price','products.id')
			->where('products.resto_id' , '=', $id);
			foreach($db as $cat) {
				$prod = $prod->where('products.cat_id', '=', $cat->id);
									}
			$prod = $prod->get();



		return View::make('home.menu')->with('db',$db)->with('prod', $prod)->with('get_final',$get_final)->with('category',$category);

	}

	public function postindex()
	{

		if(Input::has('submit'))
		{

			$product = Input::get('product');
			$price = floatval(Input::get('price'));
			$id = strval(Input::get('id'));
			$qty = 0;
			Cart::add(array('id' => $id,'name'=> $product, 'qty'=> 1, 'price' => $price));
			$total = 0.0;
			$content = Cart::content();
			foreach($content as $row)
			{
				$total = $total + $row->price;
			}

			/*echo Input::get('id');
			echo Input::get('product');
			echo Input::get('price');*/
			return Redirect::back()->with('total', $total);


		}
		else{ return "no";}
	}
}
