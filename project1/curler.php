<?php
namespace SB\Marketplace\Vault;
class Curler
{
    /* private vars */
    private $objCURL;
    private $HTTPheaders;
    private $HTTPURL;
    private $HTTPmethod;
    private $data;
    private $CURLoptions = array(
        CURLOPT_RETURNTRANSFER => true,
        // return web page

        CURLOPT_HEADER => false,
        // don't return headers

        CURLOPT_FOLLOWLOCATION => true,
        // follow redirects

        CURLOPT_ENCODING => "",
        // handle all encodings

        CURLOPT_AUTOREFERER => true,
        // set referer on redirect

        CURLOPT_CONNECTTIMEOUT => 120,
        // timeout on connect

        CURLOPT_TIMEOUT => 120,
        // timeout on response

        CURLOPT_MAXREDIRS => 10,
        // stop after 10 redirects

        CURLOPT_SSL_VERIFYPEER => false // Disabled SSL Cert checks IMPLEMENT VERIFICATION!!!
    );
    /* properties */
    /*constructors */
    public function __construct()
    {
        $this->objCURL = curl_init();
        curl_setopt_array($this->objCURL, $this->CURLoptions);
    }
    public function __destruct()
    {
        curl_close($this->objCURL);
    }
    /* property magic methods */
    public function __set($prop, $val)
    {
        return $this->$prop = $val;
    }



    public function __get($prop)
    {

        return $this->$prop;

    }



    public function formatData($strData = '')
    {

        if ($strData == '') {

            return json_encode($this->data);

        } else {

            return json_encode($strData);

        }
        ;

    }



    public function setAuth($strUser, $strPass)
    {

        curl_setopt($this->objCURL, CURLOPT_USERPWD, $strUser . ":" . $strPass);

    }



    /* methods */



    public function send_message($blnFormatData = false)
    {

        if ($blnFormatData) {

            $this->data = $this->formatData($this->data);

        }

        curl_setopt($this->objCURL, CURLOPT_HTTPHEADER, $this->HTTPheaders);

        //var_dump($this->HTTPheaders);

        switch ($this->HTTPmethod) {

            case "POST":

                curl_setopt($this->objCURL, CURLOPT_POST, 1);

                curl_setopt($this->objCURL, CURLOPT_POSTFIELDS, $this->data);

                break;

            case "PUT":

                curl_setopt($this->objCURL, CURLOPT_PUT, 1);

                curl_setopt($this->objCURL, CURLOPT_POSTFIELDS, $this->data);

                break;

            case "DELETE":

                curl_setopt($this->objCURL, CURLOPT_CUSTOMREQUEST, "DELETE");

                $this->HTTPURL = sprintf("%s/%s", $this->HTTPURL, $this->data);

                break;

            case "PATCH":

                curl_setopt($this->objCURL, CURLOPT_CUSTOMREQUEST, "PATCH");

                curl_setopt($this->objCURL, CURLOPT_POSTFIELDS, $this->data);

                break;

            case "GET":

                //needed for barcode

                $this->data = http_build_query($this->data);

                //$this->HTTPURL = $this->HTTPURL.$this->data;

                //needed for barcode

                $this->HTTPURL = $this->HTTPURL . '?' . $this->data;

                break;

            default:

                $this->HTTPURL = sprintf("%s/%s", $this->HTTPURL, $this->data);

        }
        ;



        curl_setopt($this->objCURL, CURLOPT_URL, $this->HTTPURL);



        $result = curl_exec($this->objCURL);

        $httpcode = curl_getinfo($this->objCURL, CURLINFO_HTTP_CODE);



        return $result;

    }

}

?>