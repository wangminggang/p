<?php
1.把下面的字符转换为 HTML 实体 
$str = 'I love "PHP".';
echo htmlspecialchars($str);
echo htmlentities($str); 

2.把下面的 HTML 实体转换为字符
$str = "This is some <b>bold</b> text.";
echo htmlspecialchars_decode($str)

3.从以下字符串中去除 HTML 和 PHP 标记
$text = '<p>Test paragraph.</p><a href="#fragment">Other text</a>';
echo strip_tags($text);


4.计算以下字符串的 MD5 散列值（加密）
$str = "Shanghai";
echo md5($str);

5.将以下一维数组的值转化为字符串
$array  = array( 'lastname' ,  'email' ,  'phone' );
$comma_separated  =  implode ( "," ,  $array );
echo  $comma_separated ;

6.使用一个字符串分割另一个字符串
$str = 'one,two,three,four';
print_r(explode(',',$str));


7.用以下变量完成正则替换函数。
$str = '元旦和圣诞你怎么想,做项目呗元旦和圣诞你怎么想,做项目呗元旦和圣诞你怎么想,做项目呗元旦和圣诞你怎么想,做项目呗元旦和圣诞你怎么想,做项目呗.';
$preg = '/[\x{4e00}-\x{9fa5}]/u';
$rep = '<b style="color:red;">***</b>';

preg_replace($preg, $rep, $str) ;


8.截取以下字符串，最终显示'bcd'效果
$str ='abcdef';
echo substr("abcdef", 1, 3); 

9.用'---'填充以下字符串的右侧，到 10 个字符的新长度：
$input  =  "Alien" ;
echo  str_pad ( $input,10,'---' );

10.删除字符串两端的空格或其他预定义字符(\r\n 回车，换行)
$str = "\r\nHello World!\r\n";
echo trim($str);
11.将以下一维数组的值分割为字符串
$array  = array( 'lastname' ,  'email' ,  'phone' );
$comma_separated  =  implode (',',$array );
echo  $comma_separated ;

12.查找以下字符串'php'在另一字符串中第一次出现的位置
$str='You love php, I love php too!';
echo strpos($str,'php');

13.查找以下字符串'@'首次出现，并返回字符串的剩余部分
$email   =  'name@example.com' ;
$domain  =  strstr ( $email ,'@' );
echo  $domain ; 

14.把字符串 "Hello world!" 中的字符 "world" 替换为 "Shanghai"：
echo str_replace("world","Shanghai","Hello world!");



将字符串，按照正则表达式匹配的内容进行分割，以数组的形式返回数据。
preg_split()
字符串转为大写
strtoupper()
反转字符串
strrev()
解析 URL，返回其组成部分
parse_url()
随机打乱一个字符串
str_shuffle()
函数返回字符串的长度，以字符计。
strlen() 
函数用于检索字符串内指定的字符或文本
strpos()
执行正则表达式匹配的函数
preg_match()
返回一个字符串在另一个字符串中最后一次出现位置开始到末尾的字符串
strrchr()
替换字符串中某串为另一个字符串
substr_replace()

1.只能输入1个数字
表达式 /^\d$ /

2.只能输入n个数字 
表达式 /^\d{n}$/    

3.只能输入至少n个数字 
表达式 /^\d{n,}$/  

4.只能输入m到n个数字
表达式 /^\d{m,n}$/  

5.只能输入m到n区间数字 
表达式 /^[m-n]$/ 


6.以字母开头，长度在6~18之间,包含字符、数字和下划线。
/^[a-zA-Z]\w{5,17}$/


