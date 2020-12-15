<?php


class Factory
{
    /**
     * @param string $writer_name
     * @return WriterInterface
     * @throws Exception
     */
    public static function getWriter(string $writer_name):WriterInterface{


        if(!class_exists($writer_name)){
            throw new Exception("Non valid writer");
        }
        return new $writer_name();
    }
}