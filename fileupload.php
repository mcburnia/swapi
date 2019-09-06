<?php

require_once 'definitions.php';

class FileUpload {
    
    var $source_file;
    var $target_dir;
    var $target_file;
    var $uploadOk;
    var $imageFileType;
    
    function __construct($fileid)
    {
        // TODO validate the $fileid parameter has been passed during development
        // assert($fileid);
        $this->source_file = $fileid;
        $this->target_dir = VEHICLEPHOTOFOLDER;
        $this->target_file = $this->target_dir . basename($_FILES[$this->source_file]["name"]);
        $this->uploadOk = TRUE;
        $this->imageFileType = strtolower(pathinfo($this->target_file, PATHINFO_EXTENSION));
    }
    
    function is_image()
    {
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"]))
        {
            $check = getimagesize($_FILES[$this->source_file]["tmp_name"]);
            if($check !== FALSE)
            {
                echo "File is an image - " . $check["mime"] . ".";
                // Allow certain file formats
                if( $this->imageFileType != JPG &&
                    $this->imageFileType != PNG &&
                    $this->imageFileType != JPEG &&
                    $this->imageFileType != GIF )
                {
                    echo INVALID_FILE;
                    $this->uploadOk = FALSE;
                }
            }
            else
            {
                echo INVALID_FILE;
                $this->uploadOk = FALSE;
            }
        }
        return $this->uploadOk;
    }
    
    function is_duplicate()
    {
        // Check if file already exists
        if (file_exists($this->target_file))
        {
            echo DUPLICATE_FILE;
            $this->uploadOk = FALSE;
        }
        return $this->uploadOk;
    }
    
    function check_size($filesizeLimit)
    {
        // Check file size
        if ($_FILES[$this->source_file]["size"] > $filesizeLimit)
        {
            echo OVERSIZE_FILE;
            $this->uploadOk = FALSE;
        }
        
    }
    
    function upload()
    {
        // Check if $uploadOk is set to 0 by an error
        if ($this->uploadOk == TRUE)
        {
            if (move_uploaded_file($_FILES[$this->source_file]["tmp_name"], $this->target_file))
            {
                echo "The file ". basename( $_FILES[$this->source_file]["name"]). " has been uploaded.";
            }
            else
            {
                echo ERROR_UPLOADING_FILE;
                $this->uploadOk = FALSE;
            }
        }
    }
    
} // end of class FileUpload

?>