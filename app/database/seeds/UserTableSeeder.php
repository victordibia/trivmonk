 <?php
 
class UserTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('users')->delete();
 
        User::create(array(
            'username' => 'denvycom',
			'name' => 'Victor Dibia',
			'email' => 'info@denvycom.com',
            'password' => Hash::make('denvycomindustries')
        ));
 
        User::create(array( 
			'name' => 'victor',
			'email' => 'chuvidi2003@yahoo.com',
            'username' => 'chuvidi2003',
            'password' => Hash::make('vidiarena')
        ));
    }
 
}