<?php


namespace Laracrypt\Hasher;


class MD5Hasher
{
    public function make($value, array $options = [])
    {
//        $salt = isset($options['salt']) ? $options['salt'] : '';
        $salt = $options['salt'] ?? '';
        return hash('md5', $value . $salt);
    }

    public function check($value, $hashValue, array $options = [])
    {
        $salt = $options['salt'] ?? '';
        return hash('md5', $value . $salt) === $hashValue;
    }
}
