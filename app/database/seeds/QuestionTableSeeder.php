 <?php
 
class QuestionTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('questions')->delete();
		DB::table('category')->delete();
		DB::table('subcategory')->delete();
 
        Question::create(array(
            'content' => 'Who was the first man to walk on the moon',
			'optiona' => 'Lance Armstrong',
			'user_id' => 1 ,
			'optionb' => 'Aldrin Albright',
			'optionc' => 'Neil Armstrong',
			'optiond' => 'Orwil Wright',
			'optione' => 'Wilbur Wright',
			'correct' => 'c',
			'categoryid' => 1,
			'subcategoryid' => 1,
			'explanation' => 'He was the first',
			'link' => 'http://en.wikipedia.org/wiki/Neil_Armstrong',  
        ));
		
		Question::create(array(
            'content' => 'Who won the 1996 Olympics Soccer Competition',
			'optiona' => 'Cameroun',
			'user_id' => 1 ,
			'optionb' => 'Nigeria',
			'optionc' => 'Brazil',
			'optiond' => 'Germany',
			'optione' => 'Spain',
			'correct' => 'b',
			'categoryid' => 1,
			'subcategoryid' => 1,
			'explanation' => 'He was the first',
			'link' => 'http://en.wikipedia.org/wiki/Neil_Armstrong',  
        ));
		
		Category::create(array(
            'title' => 'Sports',
        ));
		Category::create(array(
            'title' => 'History',
        ));
		Category::create(array(
            'title' => 'Science',
        ));
		Category::create(array(
            'title' => 'Reality Shows',
        ));
		
		Subcategory::create(array(
            'title' => 'Hockey',
        ));
		Subcategory::create(array(
            'title' => 'Physics',
        ));
		Subcategory::create(array(
            'title' => 'Nigerian History',
        ));
		Subcategory::create(array(
            'title' => 'Camerounian History',
        ));
		Subcategory::create(array(
            'title' => 'English Premiere League',
        ));
  
    }
 
}