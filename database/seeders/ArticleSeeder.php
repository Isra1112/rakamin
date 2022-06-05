<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::factory()->create([
            'title' => 'Sport Title',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur molestie euismod lorem, sit amet tincidunt lectus dignissim non. Phasellus a rutrum lacus, non scelerisque nibh. Donec aliquet nulla a vehicula blandit. Nunc pretium tincidunt justo sed elementum. Nam diam lorem, condimentum a ligula eu, varius posuere quam. Sed pulvinar nulla vel lobortis posuere. Suspendisse ac rutrum diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum lectus id velit mattis rutrum. Duis leo turpis, placerat sed hendrerit non, tristique ac odio. Nullam ornare mollis nunc quis lacinia.

            Ut condimentum maximus turpis sed mollis. Vivamus non lobortis mauris. Nullam pulvinar arcu nulla, sit amet hendrerit diam ornare non. Sed sed orci id massa blandit posuere. Etiam tincidunt facilisis urna, nec mollis diam dignissim at. Donec a ex ac turpis maximus pretium quis in elit. Nam dapibus blandit turpis. Pellentesque eu erat risus. Donec non nisl venenatis sapien fermentum placerat. Nulla laoreet et orci pulvinar pulvinar. Proin et elit cursus, accumsan urna ut, finibus lacus. Proin rhoncus, justo eu condimentum condimentum, massa augue condimentum eros, quis tincidunt sapien nisl sit amet risus. Nullam lorem tortor, hendrerit nec enim at, fermentum hendrerit dui. Nulla nec nulla tincidunt, facilisis nulla et, interdum elit. Aliquam tincidunt sed dolor et laoreet.',
            'image' => 'https://i.postimg.cc/njbH202Q/sport.jpg',
            'user_id' => 1,
            'category_id' => 1,
        ]);

        Article::factory()->create([
            'title' => 'Politic Title',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur molestie euismod lorem, sit amet tincidunt lectus dignissim non. Phasellus a rutrum lacus, non scelerisque nibh. Donec aliquet nulla a vehicula blandit. Nunc pretium tincidunt justo sed elementum. Nam diam lorem, condimentum a ligula eu, varius posuere quam. Sed pulvinar nulla vel lobortis posuere. Suspendisse ac rutrum diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum lectus id velit mattis rutrum. Duis leo turpis, placerat sed hendrerit non, tristique ac odio. Nullam ornare mollis nunc quis lacinia.

            Ut condimentum maximus turpis sed mollis. Vivamus non lobortis mauris. Nullam pulvinar arcu nulla, sit amet hendrerit diam ornare non. Sed sed orci id massa blandit posuere. Etiam tincidunt facilisis urna, nec mollis diam dignissim at. Donec a ex ac turpis maximus pretium quis in elit. Nam dapibus blandit turpis. Pellentesque eu erat risus. Donec non nisl venenatis sapien fermentum placerat. Nulla laoreet et orci pulvinar pulvinar. Proin et elit cursus, accumsan urna ut, finibus lacus. Proin rhoncus, justo eu condimentum condimentum, massa augue condimentum eros, quis tincidunt sapien nisl sit amet risus. Nullam lorem tortor, hendrerit nec enim at, fermentum hendrerit dui. Nulla nec nulla tincidunt, facilisis nulla et, interdum elit. Aliquam tincidunt sed dolor et laoreet.',
            'image' => 'https://i.postimg.cc/VrqzVnZZ/politic.jpg',
            'user_id' => 2,
            'category_id' => 2,
        ]);

        Article::factory()->create([
            'title' => 'Music Title',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur molestie euismod lorem, sit amet tincidunt lectus dignissim non. Phasellus a rutrum lacus, non scelerisque nibh. Donec aliquet nulla a vehicula blandit. Nunc pretium tincidunt justo sed elementum. Nam diam lorem, condimentum a ligula eu, varius posuere quam. Sed pulvinar nulla vel lobortis posuere. Suspendisse ac rutrum diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum lectus id velit mattis rutrum. Duis leo turpis, placerat sed hendrerit non, tristique ac odio. Nullam ornare mollis nunc quis lacinia.

            Ut condimentum maximus turpis sed mollis. Vivamus non lobortis mauris. Nullam pulvinar arcu nulla, sit amet hendrerit diam ornare non. Sed sed orci id massa blandit posuere. Etiam tincidunt facilisis urna, nec mollis diam dignissim at. Donec a ex ac turpis maximus pretium quis in elit. Nam dapibus blandit turpis. Pellentesque eu erat risus. Donec non nisl venenatis sapien fermentum placerat. Nulla laoreet et orci pulvinar pulvinar. Proin et elit cursus, accumsan urna ut, finibus lacus. Proin rhoncus, justo eu condimentum condimentum, massa augue condimentum eros, quis tincidunt sapien nisl sit amet risus. Nullam lorem tortor, hendrerit nec enim at, fermentum hendrerit dui. Nulla nec nulla tincidunt, facilisis nulla et, interdum elit. Aliquam tincidunt sed dolor et laoreet.',
            'image' => 'https://i.postimg.cc/0z45M8Jn/music.jpg',
            'user_id' => 3,
            'category_id' => 3,
        ]);

        Article::factory()->create([
            'title' => 'Technology Title',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur molestie euismod lorem, sit amet tincidunt lectus dignissim non. Phasellus a rutrum lacus, non scelerisque nibh. Donec aliquet nulla a vehicula blandit. Nunc pretium tincidunt justo sed elementum. Nam diam lorem, condimentum a ligula eu, varius posuere quam. Sed pulvinar nulla vel lobortis posuere. Suspendisse ac rutrum diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum lectus id velit mattis rutrum. Duis leo turpis, placerat sed hendrerit non, tristique ac odio. Nullam ornare mollis nunc quis lacinia.

            Ut condimentum maximus turpis sed mollis. Vivamus non lobortis mauris. Nullam pulvinar arcu nulla, sit amet hendrerit diam ornare non. Sed sed orci id massa blandit posuere. Etiam tincidunt facilisis urna, nec mollis diam dignissim at. Donec a ex ac turpis maximus pretium quis in elit. Nam dapibus blandit turpis. Pellentesque eu erat risus. Donec non nisl venenatis sapien fermentum placerat. Nulla laoreet et orci pulvinar pulvinar. Proin et elit cursus, accumsan urna ut, finibus lacus. Proin rhoncus, justo eu condimentum condimentum, massa augue condimentum eros, quis tincidunt sapien nisl sit amet risus. Nullam lorem tortor, hendrerit nec enim at, fermentum hendrerit dui. Nulla nec nulla tincidunt, facilisis nulla et, interdum elit. Aliquam tincidunt sed dolor et laoreet.',
            'image' => 'https://i.postimg.cc/ykv8Kh1w/tech.jpg',
            'user_id' => 4,
            'category_id' => 4,
        ]);

        Article::factory()->create([
            'title' => 'Health Title',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur molestie euismod lorem, sit amet tincidunt lectus dignissim non. Phasellus a rutrum lacus, non scelerisque nibh. Donec aliquet nulla a vehicula blandit. Nunc pretium tincidunt justo sed elementum. Nam diam lorem, condimentum a ligula eu, varius posuere quam. Sed pulvinar nulla vel lobortis posuere. Suspendisse ac rutrum diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum lectus id velit mattis rutrum. Duis leo turpis, placerat sed hendrerit non, tristique ac odio. Nullam ornare mollis nunc quis lacinia.

            Ut condimentum maximus turpis sed mollis. Vivamus non lobortis mauris. Nullam pulvinar arcu nulla, sit amet hendrerit diam ornare non. Sed sed orci id massa blandit posuere. Etiam tincidunt facilisis urna, nec mollis diam dignissim at. Donec a ex ac turpis maximus pretium quis in elit. Nam dapibus blandit turpis. Pellentesque eu erat risus. Donec non nisl venenatis sapien fermentum placerat. Nulla laoreet et orci pulvinar pulvinar. Proin et elit cursus, accumsan urna ut, finibus lacus. Proin rhoncus, justo eu condimentum condimentum, massa augue condimentum eros, quis tincidunt sapien nisl sit amet risus. Nullam lorem tortor, hendrerit nec enim at, fermentum hendrerit dui. Nulla nec nulla tincidunt, facilisis nulla et, interdum elit. Aliquam tincidunt sed dolor et laoreet.',
            'image' => 'https://i.postimg.cc/p9nWKgfH/health.jpg',
            'user_id' => 5,
            'category_id' => 5,
        ]);

        Article::factory()->create([
            'title' => 'Economic Title',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur molestie euismod lorem, sit amet tincidunt lectus dignissim non. Phasellus a rutrum lacus, non scelerisque nibh. Donec aliquet nulla a vehicula blandit. Nunc pretium tincidunt justo sed elementum. Nam diam lorem, condimentum a ligula eu, varius posuere quam. Sed pulvinar nulla vel lobortis posuere. Suspendisse ac rutrum diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec bibendum lectus id velit mattis rutrum. Duis leo turpis, placerat sed hendrerit non, tristique ac odio. Nullam ornare mollis nunc quis lacinia.

            Ut condimentum maximus turpis sed mollis. Vivamus non lobortis mauris. Nullam pulvinar arcu nulla, sit amet hendrerit diam ornare non. Sed sed orci id massa blandit posuere. Etiam tincidunt facilisis urna, nec mollis diam dignissim at. Donec a ex ac turpis maximus pretium quis in elit. Nam dapibus blandit turpis. Pellentesque eu erat risus. Donec non nisl venenatis sapien fermentum placerat. Nulla laoreet et orci pulvinar pulvinar. Proin et elit cursus, accumsan urna ut, finibus lacus. Proin rhoncus, justo eu condimentum condimentum, massa augue condimentum eros, quis tincidunt sapien nisl sit amet risus. Nullam lorem tortor, hendrerit nec enim at, fermentum hendrerit dui. Nulla nec nulla tincidunt, facilisis nulla et, interdum elit. Aliquam tincidunt sed dolor et laoreet.',
            'image' => 'https://i.postimg.cc/Js04zytt/economi.png',
            'user_id' => 6,
            'category_id' => 6,
        ]);
    }
}
