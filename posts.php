<?php

/**
 * posts.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - functions.php içerisinde oluşturacağınız `getRandomPostCount` fonksiyonunuza min
 * ve max değerleri gönderip bu fonksiyondan rastgele bir tam sayı elde etmeniz
 * gerekiyor. (min ve max için istediğiniz değerleri seçebilirsiniz. Random bir
 * tam sayı elde etmek için `rand` (https://www.php.net/manual/en/function.rand.php)
 * fonksiyonunu kullanabilirsiniz.)
 *
 * - Elde ettiğiniz bu sayıyı da kullanarak `getLatestPosts` fonksiyonunu
 * çalıştırmalısınız. Bu fonksiyondan aldığınız diziyi kullanarak `post.php` betik
 * dosyasını döngü içinde dahil etmeli ve her yazı için detayları göstermelisiniz.
 */

 $isCheck = true;  // ifadesini yazdım ki functions.php çalışınca doğrudan erişemezsiniz yazısı çıkmasın
 include 'functions.php';  //functions.php dahil edildi
  
  $x=getRandomPostCount(3,100); //  getRandomPostCount fonksiyonu çağırılıp random sayı elde edilip $x e atandı
  

   $posts=getLatestPosts($x); // $posts a random sayı elde ederek fonsiyonun çalışması istenmişti o yüzden atama yapıldı
   
   foreach($posts as $key => $post){
       include 'post.php';        // post.php dahil edildi her random sayı için 
   }