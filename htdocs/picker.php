<?php
class toolchains {
  private $table;

  private function insert($target, $host, $packager, $multilib, $pthread, $link, $gcc, $crt){
    $this->table[] = array("host" => $host, "target" => $target, "packager" => $packager, "multilib" => $multilib, "pthread" => $pthread, "native" => ($host === $target) ? "Yes" : "No", "gcc_version" => $gcc, "head_version" => $crt,
    "URL" => '<a href="' . $link . '">DOWNLOAD</a>');
  }

  function __construct(){
    $this->insert("x86_64-w64-mingw32", "i686-pc-mingw32",
      "autobuilds", "No", "None", "https://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win64/Automated%20Builds/", "4.6.x", "v2");
    $this->insert("i686-w64-mingw32", "i686-pc-mingw32",
      "autobuilds", "No", "None", "https://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win32/Automated%20Builds/", "4.6.x", "v2");
    $this->insert("i686-w64-mingw32", "i686-w64-mingw32",
      "Rubenvb", "No", "winpthreads", "https://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win32/Personal%20Builds/rubenvb/", "4.6.x", "v2");
    $this->insert("x86_64-w64-mingw32", "x86_64-w64-mingw32",
      "Rubenvb", "No", "winpthreads", "https://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win64/Personal%20Builds/rubenvb/", "4.6.x", "v2");
    $this->insert("i686-w64-mingw32", "i686-w64-mingw32",
      "Ozkan", "No", "pthreads-win32", "https://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win32/Personal%20Builds/sezero_4.5_20111101/", "4.5.x", "v2");
  }

  function print_html_tr(){
    $ret = "";
    foreach($this->table as $line){
      $ret .= sprintf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>\n",
               $line["host"],$line["target"],$line["packager"],$line["multilib"],
               $line["pthread"],$line["native"],$line["gcc_version"],$line["head_version"],$line["URL"]);
    }
    return $ret;
  }
}

class crt_trunk {
  private $table;
  function thead (){
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
        <head>
                <meta http-equiv="content-type" content="text/html; charset=utf-8" />
                <title>Downloading mingw-w64 - File picker</title>
                <link type="text/css" href="css/smoothness/jquery-ui-1.8.18.custom.css" rel="stylesheet" />	
                <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
                <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
                <script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
                <!-- Plagarized from http://www.datatables.net/release-datatables/examples/api/multi_filter_select.html -->
                <script type="text/javascript">
                $(document).ready(function() {
    var oTable = $('#toolchains').dataTable( {
        "bJQueryUI": true,
        "aoColumns": [
          null,
          null,
          null,
          null,
          null,
          null,
          null,
          null,
          { "bSearchable": false }
        ]
    } );
    $("tfoot th").each( function ( i ) {
        var patt1 = new RegExp("DOWNLOAD");
        if(patt1.test(oTable.fnGetColumnData(i))) return;
        this.innerHTML = fnCreateSelect( oTable.fnGetColumnData(i) );
        $('select', this).change( function () {
            oTable.fnFilter( $(this).val(), i );
        } );
    } );
} );
(function($) {
$.fn.dataTableExt.oApi.fnGetColumnData = function ( oSettings, iColumn, bUnique, bFiltered, bIgnoreEmpty ) {
    if ( typeof iColumn == "undefined" ) return new Array();
    if ( typeof bUnique == "undefined" ) bUnique = true;
    if ( typeof bFiltered == "undefined" ) bFiltered = true;
    if ( typeof bIgnoreEmpty == "undefined" ) bIgnoreEmpty = true;
    var aiRows;
    if (bFiltered == true) aiRows = oSettings.aiDisplay;
    else aiRows = oSettings.aiDisplayMaster;
    var asResultData = new Array();
    for (var i=0,c=aiRows.length; i<c; i++) {
        iRow = aiRows[i];
        var aData = this.fnGetData(iRow);
        var sValue = aData[iColumn];
        if (bIgnoreEmpty == true && sValue.length == 0) continue;
        else if (bUnique == true && jQuery.inArray(sValue, asResultData) > -1) continue;
        else asResultData.push(sValue);
    }
    return asResultData;
}}(jQuery));
 
 
function fnCreateSelect( aData )
{
    var r='<select><option value=""></option>', i, iLen=aData.length;
    for ( i=0 ; i<iLen ; i++ )
    {
        r += '<option value="'+aData[i]+'">'+aData[i]+'</option>';
    }
    return r+'</select>';
}
 
 
/*s() {
    var oTable = $('#toolchains').dataTable( {
        "bProcessing": true,
        "bServerSide": true,
        "sAjaxSource": "http://mingw-w64.sourceforge.net/toolchains.php",
        "oLanguage": { "sSearch": "Search all columns:"}
                            } );
     
    $("tfoot th").each( function ( i ) {
        this.innerHTML = fnCreateSelect( oTable.fnGetColumnData(i) );
        $('select', this).change( function () {
            oTable.fnFilter( $(this).val(), i );
        } );
    } );
};*/
                </script>
  <style type="text/css">
  CAPTION.VERSION
  {
     background-color:white;
     color:black;
     border-style:solid;
     border-width:2px;
     border-color:black;
  }

  TABLE.VERSION
  { 
     font-family:arial;
     font-size:10pt;
     background-color:white;
     width:500px;
     border-style:solid;
     border-color:black;
     border-width:2px;
  }

  TH.VERSION
  {
     font-size:10pt;
     background-color:white;
     color:black;
     border-style:solid;
     border-color:black;
     border-width:2px;
  }


  TR.VERSION
  { 
  }

  TD.VERSION
  {  
     font-size:10pt;
     background-color:white;
     color:black;
     border-style:solid;
     border-width:1px;
     text-align:center;
  }
</style>
        </head>
<body>

<table cellpadding="0" cellspacing="0" border="0" class="display" id="toolchains">
        <thead>
                <tr>
                        <th>Target</th>
                        <th>Host</th>
                        <th>Packager</th>
                        <th>Multilib</th>
                        <th>Pthreads</th>
                        <th>Native</th>
                        <th>GCC Version</th>
                        <th>CRT/Header version</th>
                        <th>Link</th>
                </tr>
        </thead>
        <tbody>
                <?php $t = new toolchains(); echo $t->print_html_tr(); ?>
        </tbody>
        <tfoot>
                <tr>
                        <th>Target</th>
                        <th>Host</th>
                        <th>Packager</th>
                        <th>Multilib</th>
                        <th>Pthreads</th>
                        <th>Native</th>
                        <th>GCC Version</th>
                        <th>CRT/Header version</th>
                        <th>Link</th>
                </tr>
        </tfoot>
</table>
<hr>

<table cellpadding="0" cellspacing="0" border="0" class="VERSION" id="VERSION">
    <thead><tr class="VERSION">
        <th class="VERSION">Feature</th>
        <th class="VERSION">mingw.org</th>
        <th class="VERSION">V1</th>
        <th class="VERSION">V2</th>
        <th class="VERSION">V3 (trunk)</th>
    </tr></thead>
    <tbody>
    <tr class="VERSION">
    <td class="VERSION">Minimum GCC version</td>
    <td class="VERSION">4.4.x</td>
    <td class="VERSION">4.5.1</td>
    <td class="VERSION">4.5.1</td>
    <td class="VERSION">4.6.0</td>
    </tr>

    <tr class="VERSION">
    <td class="VERSION">Win32 Support</td>
    <td class="VERSION">Yes</td>
    <td class="VERSION">Yes</td>
    <td class="VERSION">Yes</td>
    <td class="VERSION">Yes</td>
    </tr>

    <tr class="VERSION">
    <td class="VERSION">Win64 Support</td>
    <td class="VERSION">No</td>
    <td class="VERSION">Yes</td>
    <td class="VERSION">Yes</td>
    <td class="VERSION">Yes</td>
    </tr>

    <tr class="VERSION">
    <td class="VERSION">Minimum Target OS</td>
    <td class="VERSION">Windows 9X/NT4</td>
    <td class="VERSION">Windows XP SP2</td>
    <td class="VERSION">Windows XP SP2</td>
    <td class="VERSION">Windows XP SP2</td>
    </tr>

    <tr class="VERSION"><td class="VERSION">Unicode Entry Points</td>
    <td class="VERSION">No</td>
    <td class="VERSION">Yes</td>
    <td class="VERSION">Yes</td>
    <td class="VERSION">Yes</td></tr>

    <tr class="VERSION"><td class="VERSION">DLL Delayed Loader</td>
    <td class="VERSION">No</td>
    <td class="VERSION">No</td>
    <td class="VERSION">Yes</td>
    <td class="VERSION">Yes</td></tr>

    <tr class="VERSION"><td class="VERSION">Driver Development Kit</td>
    <td class="VERSION">Yes</td>
    <td class="VERSION">Yes (From Wine)</td>
    <td class="VERSION">Yes (From Wine)</td>
    <td class="VERSION">Yes (From Wine)</td></tr>

    <tr class="VERSION"><td class="VERSION">DirectX Development Kit</td>
    <td class="VERSION">Incomplete</td>
    <td class="VERSION">Yes (From ReactOS)</td>
    <td class="VERSION">Yes (From ReactOS)</td>
    <td class="VERSION">Yes (From ReactOS)</td></tr>

    <tr class="VERSION">
    <td class="VERSION">Multilib capability</td>
    <td class="VERSION">No</td>
    <td class="VERSION">No</td>
    <td class="VERSION">Yes</td>
    <td class="VERSION">Yes</td>
    </tr>

    <tr class="VERSION"><td class="VERSION">POSIX style Large File System</td>
    <td class="VERSION">No</td>
    <td class="VERSION">No</td>
    <td class="VERSION">Yes</td>
    <td class="VERSION">Yes</td></tr>
    
    <tr class="VERSION"><td class="VERSION">C99 Math</td>
    <td class="VERSION">Incomplete</td>
    <td class="VERSION">Incomplete</td>
    <td class="VERSION">Yes</td>
    <td class="VERSION">Yes, Improved</td></tr>

    <tr class="VERSION"><td class="VERSION">C99 Printf</td>
    <td class="VERSION">Incomplete</td>
    <td class="VERSION">Incomplete</td>
    <td class="VERSION">Yes</td>
    <td class="VERSION">Yes, including wide variants</td></tr>

    <tr class="VERSION"><td class="VERSION">C99 Scanf</td>
    <td class="VERSION">Incomplete</td>
    <td class="VERSION">Incomplete</td>
    <td class="VERSION">Yes</td>
    <td class="VERSION">Yes, including wide variants</td></tr>

    <tr class="VERSION"><td class="VERSION">C1X Secure STDIO</td>
    <td class="VERSION">No</td>
    <td class="VERSION">Incomplete, requires Vista</td>
    <td class="VERSION">Incomplete, requires Vista</td>
    <td class="VERSION">Incomplete, requires Vista</td></tr>
    </tbody>
    <tfoot><tr class="VERSION">
        <th class="VERSION">Feature</th>
        <th class="VERSION">V1</th>
        <th class="VERSION">V2</th>
        <th class="VERSION">V3 (trunk)</th>
    </tr></tfoot>
    <caption>CRT and Headers version comparison</caption>
</table>

</body>
</html>

