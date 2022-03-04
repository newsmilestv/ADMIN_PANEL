<?php 

namespace App\Models;

class Article extends Model
{
    public const TABLE = 'news';

    public $id;
    public $content;
    public $author;

    /**
     * Функция возвращает $num последних записей из таблицы
     * @param $num $integer
     * @return array
     */
    public static function findLastArticle(int $num) : array
    {
        return array_reverse(array_slice(static::findAll(), -$num));
    }
}