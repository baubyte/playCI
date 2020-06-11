<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
class Home extends BaseController
{
	public function index()
	{
		$userModel = new UserModel($db);
		/**Para Buscar por ID por Ejemplo */
		//$users = $userModel->find([1,2]);
		/**ParaBuscar Todos */
		//$users = $userModel->findAll();
		/**Para Buscar con Filtros */
		//$users = $userModel->where('name','baubyte')->findAll();
		/**Para Buscar por limites el Primer Valor es desde donde y el Segundo el Hasta */
		//$users = $userModel->findAll(1,2);
		/**Para Mostrar con los Borrados */
		$users = $userModel->withDeleted()->findAll();
		/**Para Mostrar los Borrados */
		//$users = $userModel->onlyDeleted()->findAll();

		/**Datos Para los INSERT y UPDATE */
		/*$data=[
			'name'=>"TEST 1",
			'email'=>"test1@gmail.com"
		];*/
		/**INSERT */
		//$userModel->insert($data);
		/**UPDATE */
		//$userModel->update(5,$data);
		/**UPDATE MULTIPLE */
		//$userModel->update([6,7],$data);
		/**UPDATE con WHERE */
		/*$userModel->whereIn('id',[8])
		->set(['name'=>'test'])
		->update();*/
		/**SAVE si encuentra el ID hace un UPDATE caso Contrario hace unn INSERT */
		$data=[
			//'id'=>7,
			'name'=>"TEST 2",
			'email'=>"test2@gmail.com"
		];
		if($userModel->save($data)===false)
		{
			var_dump($userModel->errors());
		}
		/**SOFT Para DELETE */
		//$userModel->delete(8);
		/**Para DELETE Multiple */
		//$userModel->delete([9,10]);
		/**SOFT DELETE con WHERE */
		//$userModel->where('id',11)->delete();
		/**Purgando DELETE Elimina Completamente*/
		//$userModel->purgeDeleted();
		
		$users = array('users'=>$users);
		return view('estructura/header').view('estructura/body',$users);
	}

	//--------------------------------------------------------------------

}
