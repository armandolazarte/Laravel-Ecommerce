<?php namespace App\Product\Repositories;

interface ProductRepositoryInterface {


	public function all($columns = array('*'));

    public function newInstance(array $attributes = array());

    public function paginate($perPage = 9);

    public function create(array $attributes);

    public function find($id);

	public function findByURL($url);

    public function updateWithIdAndInput($id, array $input);

    public function destroy($id);

}

