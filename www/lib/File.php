<?php
/**
 * Class File
 */
class File
{

    /**
     * @param string $path
     */
    public function dataGridJson($path = "./ftp/")
    {
        foreach (new DirectoryIterator($path) as $fn) {
            $fileName = $fn->getFilename();
            $info = new SplFileInfo($fileName);
            if ('json' == $info->getExtension()) {
                $handle = @fopen($path . $fileName, "r");
                if ($handle) {
                    while (($buffer = fgets($handle, 4096)) !== false) {
                        echo $buffer;
                    }
                    if (!feof($handle)) {
                        exit("Error: fgets() \n");
                    }
                    fclose($handle);
                }
                echo ',';
            }
        }
    }

    /**
     * @param string $path
     * @return array
     */
    public function dataArray($path = "./ftp/") :array
    {
         // TODO ::  масив из папки ftp  *.json
         return [
                  'nameSender'  => 'full name',
                  'NameRecipient' => 'ФИО получателя',
                  'DeliveryAddress' =>  'Адрес доставки',
                  'NameContentsPoisoning' => 'наименование содержимого отравления'
         ];
    }

}
