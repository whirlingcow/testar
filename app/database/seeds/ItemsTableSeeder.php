<?php 

class ItemsTableSeeder extends Seeder {
	public function run() {

		DB::table('items')->delete();

		$items = array(
			array(
				'owner_id' => 1,
				'name' => 'Pick up shit',
				'done' => 'false'
				),
			array(
				'owner_id' => 1,
				'name' => 'Throw shit',
				'done' => 'false'
				),
			array(
				'owner_id' => 1,
				'name' => 'Run',
				'done' => 'false'
				)
			);

		DB::table('items')->insert($items);
	}
}