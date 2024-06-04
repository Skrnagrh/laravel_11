<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    //    User::create([
    //         'name' => 'sukron',
    //         'username' => 'sukron',
    //         'email' => 'sukron@gmail.com',
    //         'email_verified_at' => now(),
    //         'password' => Hash::make('password'),
    //         'remember_token' => Str::random(10)
    //     ]);

        // Category::create([
        //     'name' => 'Web Design',
        //     'slug' => 'web-design'
        // ]);

        // Post::create([
        //     'title' => 'Judul Artikel 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-artikel-1',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi, adipisci. Aliquam nam similique unde accusamus animi enim harum aliquid culpa quam, eum iure voluptatibus incidunt et facilis consectetur tenetur assumenda ipsum id sed numquam repellendus? Illum neque, velit eligendi nulla impedit voluptas veniam dolorem illo. Tempora exercitationem, quos repellat quia perferendis excepturi reiciendis optio porro velit totam eligendi quasi sapiente odio fugit? Iste odit, accusamus corporis obcaecati, molestias, consequatur repellendus accusantium aliquid eaque odio soluta minima ut maxime rerum. Commodi impedit perferendis numquam! Et repellendus mollitia accusamus harum, delectus libero ut laborum quasi temporibus recusandae accusantium tempore vero quia, nulla voluptas dolor deserunt excepturi nobis, quidem necessitatibus. Dolorum, officiis impedit. Ipsam dolores consequuntur laboriosam, facilis suscipit aliquid sit nam ad nesciunt! Reiciendis, beatae officia! Voluptas at commodi atque earum neque quam fugit repellendus in est optio suscipit voluptatem quos nobis, consequuntur libero. Adipisci, aut quidem inventore sunt dolores repellat doloribus quas nihil earum omnis voluptates cum tempore eligendi quis nobis eum officia dignissimos eius nisi. Perferendis ipsa exercitationem ad voluptatum ipsam ea ullam quibusdam placeat, vitae harum magnam quasi odit saepe aliquam natus molestiae quod veritatis magni esse veniam maiores praesentium? Laborum asperiores fugiat eos consectetur sit iure ullam tempora perspiciatis ratione repudiandae quia corporis modi facere vitae minus voluptas numquam sint quis facilis, ut cumque porro alias. Nisi corporis vel eos. Non incidunt corrupti vel natus nam libero magni dolore sint laudantium sit nostrum, nihil, ut reiciendis nesciunt. Quo eum ratione vero consectetur ullam recusandae ea, vitae pariatur suscipit similique ipsum dignissimos in labore dolorem esse mollitia culpa maiores a neque incidunt accusamus hic perspiciatis. Laudantium id magnam velit voluptatem quasi non voluptatibus ipsa ullam ipsum iste voluptates atque rem corporis dicta, laboriosam odio, omnis facere doloribus a fugit totam suscipit? Recusandae esse qui accusantium maxime molestias impedit? Consectetur quae quas doloremque quis, quidem nisi hic nesciunt, ipsam est, tempore obcaecati ratione. Placeat voluptatibus pariatur enim dolore neque provident cum tenetur veritatis culpa reprehenderit sit, labore commodi quo, natus hic odit. Inventore assumenda aliquid laborum sapiente vero sunt commodi deserunt, eveniet dignissimos quis, temporibus est, voluptates veniam! Blanditiis assumenda nobis neque magni, repudiandae deserunt error explicabo mollitia recusandae magnam quos omnis eaque, ratione doloremque aperiam nihil itaque cupiditate totam enim tempore! Beatae et, delectus esse quos repellat enim sequi debitis recusandae. Consectetur consequuntur dolores aspernatur nemo aliquid, mollitia placeat dolorum officia ratione dolorem inventore eius? Aliquid maiores quam ex quisquam itaque dolor. Dolores repellat quaerat commodi sed quam minima in architecto obcaecati odit unde, voluptates ipsa blanditiis accusamus, laborum vitae? Vero, aliquam blanditiis. Nulla nisi ullam deleniti officia quo quis veniam ipsum ea qui architecto debitis iste est, maiores consequatur reprehenderit modi minus tenetur doloribus, dolorem ducimus tempore ab aliquam! Mollitia eveniet exercitationem sed, dignissimos corporis unde at non a sapiente molestias. Enim, sequi eius in necessitatibus inventore dolores qui, omnis perspiciatis debitis mollitia dicta, fugiat velit! Cupiditate, quisquam eum. In iusto consectetur, similique non magni enim, dolore minus nostrum velit asperiores temporibus adipisci perferendis hic. Quo, quas explicabo.'
        // ]);

        $this->call([
            CategorySeeder::class,
            UserSeeder::class,
        ]);

        Post::factory(10)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}
