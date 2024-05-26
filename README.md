Belajar Laravel 11

1. Intro
2. Instalasi
3. Struktur Folder
4. Blade Templating Engine
5. Blade Component
6. View Data
7. Model
8. Database
9. Eloquent ORM
10. Model Factories
11. Eloquent Relationship

App\Models\Post::create([
'title' => 'Misteri di Balik Gunung Fuji',
'author' => 'Akira Kurosawa',
'slug' => 'misteri-di-balik-gunung-fuji',
'body' => 'Gunung Fuji, dengan puncaknya yang megah dan bersalju, telah menjadi simbol kebesaran alam di Jepang. Namun, di balik keindahan itu, terdapat banyak misteri yang belum terungkap. Beberapa pendaki melaporkan pengalaman mistis saat mendaki, seperti suara-suara aneh dan penampakan makhluk tak dikenal.

Selain cerita-cerita mistis, Gunung Fuji juga menyimpan rahasia geologis. Aktivitas vulkanik yang terjadi ribuan tahun lalu membentuk struktur gunung ini, dan para ilmuwan terus mempelajari pola erupsi untuk memprediksi letusan di masa depan. Sejarah letusan gunung ini juga memberikan wawasan tentang bagaimana lingkungan sekitar telah berubah seiring waktu.

Masyarakat lokal memiliki legenda tentang dewa-dewa yang menghuni Gunung Fuji. Salah satu legenda terkenal adalah tentang dewi Konohanasakuya-hime yang diyakini tinggal di puncak gunung. Kisah-kisah ini menambah daya tarik dan misteri Gunung Fuji, menjadikannya lebih dari sekadar destinasi wisata alam, tetapi juga tempat penuh cerita dan keajaiban.'
]);

App\Models\Post::create([
'title' => 'Sejarah Panjang Candi Borobudur',
'author' => 'Siti Nurhaliza',
'slug' => 'sejarah-panjang-candi-borobudur',
'body' => 'Candi Borobudur, sebagai salah satu peninggalan sejarah terbesar di dunia, memiliki sejarah yang panjang dan kaya. Dibangun pada abad ke-9 oleh dinasti Syailendra, candi ini merupakan salah satu situs Buddhis terbesar di dunia. Desain candi yang berbentuk mandala mencerminkan alam semesta dalam pandangan Buddhis.

Selama berabad-abad, Candi Borobudur sempat terlupakan dan tertutup oleh abu vulkanik serta vegetasi. Baru pada abad ke-19, candi ini ditemukan kembali oleh Sir Thomas Stamford Raffles yang saat itu menjabat sebagai gubernur Jawa. Sejak saat itu, berbagai upaya restorasi dilakukan untuk memulihkan keindahan dan kejayaannya.

Setiap relief di dinding Candi Borobudur menceritakan berbagai kisah dari ajaran Buddha, mulai dari kelahiran Siddhartha Gautama hingga perjalanan spiritual menuju pencerahan. Candi ini tidak hanya menjadi tempat ibadah, tetapi juga pusat pembelajaran bagi umat Buddha di seluruh dunia. Keindahan arsitekturnya yang megah dan detail reliefnya membuat Borobudur menjadi salah satu keajaiban dunia yang patut dikunjungi.'
]);

App\Models\Post::create([
'title' => 'Petualangan di Hutan Amazon',
'author' => 'Carlos Santana',
'slug' => 'petualangan-di-hutan-amazon',
'body' => 'Hutan Amazon, dengan keanekaragaman hayati yang luar biasa, menawarkan petualangan yang tak terlupakan bagi para penjelajah. Dalam perjalanan menjelajahi hutan ini, kita bisa menemukan berbagai spesies hewan dan tumbuhan yang tidak ditemukan di tempat lain di dunia. Dari burung-burung eksotis hingga serangga berwarna-warni, setiap sudut hutan ini penuh dengan kehidupan.

Namun, petualangan di Hutan Amazon bukan tanpa tantangan. Cuaca yang lembab dan medan yang sulit dapat menjadi ujian bagi siapa saja yang berani menjelajahinya. Selain itu, ancaman dari binatang buas seperti jaguar dan anaconda selalu mengintai. Oleh karena itu, persiapan yang matang dan pengetahuan tentang lingkungan sekitar sangat penting untuk keselamatan.

Selain keindahan alamnya, Hutan Amazon juga merupakan rumah bagi berbagai suku asli yang telah hidup di sana selama ribuan tahun. Mempelajari budaya dan tradisi mereka memberikan perspektif baru tentang cara hidup yang selaras dengan alam. Interaksi dengan suku-suku ini memberikan pengalaman yang mendalam dan memperkaya petualangan di Hutan Amazon.'
]);

App\Models\Post::create([
'title' => 'Rahasia di Balik Laut Dalam',
'author' => 'Jacques Cousteau',
'slug' => 'rahasia-di-balik-laut-dalam',
'body' => 'Laut dalam selalu menjadi misteri besar bagi manusia. Kedalamannya yang gelap dan tekanan yang tinggi membuat eksplorasi menjadi sangat sulit. Namun, berkat kemajuan teknologi, kita kini mulai mengungkap sebagian kecil dari rahasia yang tersembunyi di bawah permukaan laut. Makhluk-makhluk aneh seperti ikan angler dan ubur-ubur bioluminesen memberikan gambaran tentang kehidupan yang bisa bertahan di kondisi ekstrem.

Ekosistem laut dalam sangat unik dan berbeda dari ekosistem di permukaan. Tanpa sinar matahari, banyak makhluk di laut dalam mengandalkan kemosintesis untuk mendapatkan energi. Proses ini memungkinkan mereka untuk hidup di dekat ventilasi hidrotermal yang mengeluarkan mineral dan gas dari perut bumi. Studi tentang ekosistem ini dapat memberikan wawasan baru tentang kemungkinan kehidupan di planet lain dengan kondisi serupa.

Penelitian laut dalam juga membantu kita memahami lebih baik tentang perubahan iklim dan dampaknya terhadap lautan. Laut dalam berperan penting dalam menyerap karbon dioksida dan mengatur suhu bumi. Dengan mempelajari proses-proses ini, kita dapat mengembangkan strategi untuk menjaga kesehatan laut dan mengurangi dampak perubahan iklim.'
]);

App\Models\Post::create([
'title' => 'Eksplorasi Antariksa: Dari Bulan ke Mars',
'author' => 'Neil Armstrong',
'slug' => 'eksplorasi-antariksa-dari-bulan-ke-mars',
'body' => 'Eksplorasi antariksa telah mengalami perkembangan pesat sejak manusia pertama kali menginjakkan kaki di Bulan pada tahun 1969. Misi Apollo 11 yang dipimpin oleh Neil Armstrong membuka jalan bagi penjelajahan ruang angkasa lebih lanjut. Kini, perhatian manusia beralih ke Mars, planet merah yang menawarkan tantangan baru bagi para ilmuwan dan insinyur.

Penelitian Mars telah dimulai dengan pengiriman rover seperti Curiosity dan Perseverance yang bertugas mengumpulkan data tentang permukaan dan atmosfer Mars. Temuan seperti jejak-jejak air purba dan mineral yang mengindikasikan adanya kehidupan mikroba di masa lalu membuat Mars menjadi target utama untuk misi eksplorasi manusia berikutnya. NASA dan SpaceX sedang mengembangkan teknologi untuk memungkinkan misi berawak ke Mars dalam beberapa dekade mendatang.

Eksplorasi Mars bukan hanya tentang mencari kehidupan, tetapi juga tentang memahami sejarah tata surya kita dan mencari kemungkinan tempat tinggal baru bagi manusia. Dengan tantangan seperti radiasi kosmik dan kebutuhan akan sumber daya, misi ke Mars akan menguji batas kemampuan manusia dan teknologi. Keberhasilan dalam misi ini dapat membuka era baru dalam sejarah eksplorasi antariksa.'
]);
