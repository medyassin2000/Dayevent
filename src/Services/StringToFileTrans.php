<?php
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\HttpFoundation\File\File;

class StringToFileTrans implements DataTransformerInterface
{
    private $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function transform($value)
    {
        return $value;
    }

    public function reverseTransform($value)
    {
        if (empty($value)) {
            return null;
        }

        $file = new File($this->path . '/' . $value);

        return $file;
    }
}
