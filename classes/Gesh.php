<?php

class Gesh
{
    private static function parse($text, $language)
    {
        if(!$language)
            $language = "none";
        $geshi = new GeSHi($text, $language);
        $geshi->set_header_type(GESHI_HEADER_NONE);
        return $geshi->parse_code();
    }
    
    public static function save($text, $language)
    {
        $text = $language."\n".$text;
        $hash = sha1($language.$text);
        global $baseDir;
        $dir = $baseDir."cache/code/";
        file_put_contents($dir.$hash, $text);
        return $hash;
    }
    
    public static function get($hash)
    {
        global $baseDir;
        $dir = $baseDir."cache/code/";
        $get = file_get_contents($dir.$hash);
        $t = explode("\n", $get);
        $type = $t[0];
        unset($t[0]);
        $text = implode("\n", $t);
       
        return self::parse(stripslashes($text), $type);
    }
}