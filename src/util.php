<?php
/* Created by huyvo 11/26/2017*/

function httpPost($url,$params)
{
    $postData = '';
    //create name value pairs seperated by &
    foreach($params as $k => $v)
    {
        $postData .= $k . '='.$v.'&';
    }
    $postData = rtrim($postData, '&');
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_POST, count($postData));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;

}
function curl_login($loginData, $url){
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $loginData,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_COOKIESESSION => true,
        CURLOPT_COOKIEJAR => 'cookie.txt'
    ));
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}


function httpFetchPost($url){
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_COOKIESESSION => true,
        CURLOPT_COOKIEJAR => 'cookie.txt'
    ));
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

interface Table{
    function getHTML();
    function addHeader($label);
    function addData($data);
}
class HTMLTable implements Table{
    private $headers, $columns;
    function __construct(){
        $this->headers = array();
        $this->columns = array();
    }
    function getHTML()
    {
        $html = "<table>";
        // make headers
        $tableHeaders = array();
        $html .= "<tr>";
        foreach ($this->headers as $header){
            $html .= $this->buildTableHeader($header);
        }
        $html .= "</tr>";
        foreach ($this->columns as $column){
            $html .= "<tr>";
            foreach ($this->headers as $header){
                $html .= "<td>".$column[$header]."</td>";
            }
            $html .= "</tr>";
        }
        return $html."</table>";
    }
    private function buildTableRow($labels){
        $html = "<tr>";
        foreach ($labels as $label){
            $html .= $label;
        }
        return $html. "</tr>";
    }
    private function buildTableData($label){
        return "<td>" .$label. "</td>";
    }
    private function buildTableHeader($label){
        return "<th>". strtoupper($label )."</th>";
    }
    public function addHeader($label)
    {
        array_push($this->headers, $label);
        return $this;
    }
    public function setDatas($datas){
        $this->columns = $datas;
        return $this;
    }
    // Data is an array
    public function addData($data)
    {
        array_push($this->columns, $data);
        return $this;
    }
}



?>
