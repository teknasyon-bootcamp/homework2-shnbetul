<?php

/**
 * post.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * > Dikkat: Bu dosya hem direk çalıştırılabilir hem de `posts.php` dosyasında
 * > 1+ kez içe aktarılmış olabilir.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - $id değişkeni yoksa "1" değeri ile tanımlanmalı, daha önceden bu değişken
 * tanımlanmışsa değeri değiştirilmemeli. (Kontrol etmek için `isset`
 * (https://www.php.net/manual/en/function.isset.php) kullanılabilir.)
 * - $id için yapılan işlemin aynısı $title ve $type için de yapılmalı. (İstediğiniz
 * değerleri verebilirsiniz)
 * - Bir sonraki adımda ilgili içerik gösterilmeden önce bir div oluşturulmalı ve
 * bu div $type değerine göre arkaplan rengi almalıdır. (urgent=kırmızı,
 * warning=sarı, normal=arkaplan yok)
 * - `getPostDetails` fonksiyonu tetiklenerek ilgili içeriğin çıktısı gösterilmeli.
 */
$isCheck = true; //çalıştırılamaz dememesi için isCheck true yapıldı

include_once "functions.php"; //functions.php dahil edildi


$id=(isset($key) ? $key:1 ); //$id key olduğu için eger yoksa bir  varsa devam edecek şekilde atama yapıldı $id ye
$title=(isset($post['title'])? $post['title']:"başlık yok"); // $title  $post['title']şeklinde olduğundan  kontrol bu ifade ile yapıldı
$type=(isset($post['type'])? $post['type']:"normal"); // $type $post['type'] şeklinde olduğundan  kontrol bu ifade ile yapıldı
$colors=["urgent"=>"red", "warning"=>"yellow", "normal"=>null];// colors a istenen arka planlar atandı

echo !empty($colors[$type]) ?  "<div style=\"background:".$colors[$type]."\">": null; //eğer  $colors[$type] boş değilse backgrounda  $colors[$type] ı koy dedik

    
getPostDetails( $id, $title ); // yaptığımız atamaları çağırdık
echo !empty($colors[$type]) ?  "</div>":null;// div kapatmak için  yazıldı.




