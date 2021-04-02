# usuyuki_blog_theme_2021_spring_main

## docker による wordpress のローカル環境です。

## docker 参考

https://goworkship.com/magazine/wordpress-docker/

## php.ini のやつ

https://blog.blue.wirednet.jp/2020/05/01/402/docker-compose%E3%82%92%E4%BD%BF%E3%81%A3%E3%81%A6wordpress%E3%82%92%E5%85%AC%E9%96%8B%E3%81%99%E3%82%8B/
https://web-memo-s.hatenablog.com/entry/2019/02/21/182815

```
docker-compose up -d
```

```
docker-compose down
```

くじらの中に入る。

```
docker exec -i -t usuyuki_blog_theme_2021_spring_wordpress_1 bash
```

でるときは exit

php.ini を編集

```
/usr/local/etc/php/php.ini-production
```
