 <?php
 
class UserTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('users')->delete();
 
        User::create(array(
            'username' => 'firstuser',
			'name' => 'Bingo Valsti',
			'email' => 'bingo@gmail.com',
            'password' => Hash::make('first_password')
        ));
 
        User::create(array( 
			'name' => 'Herman Gorring',
			'email' => 'herman@gmail.com',
            'username' => 'seconduser',
            'password' => Hash::make('second_password')
        ));
    }
 
}