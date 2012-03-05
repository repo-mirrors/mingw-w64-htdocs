<?php
class toolchains {
  private $table;

  private function insert($target, $host, $packager, $multilib, $pthread, $link){
    $this->table[] = array("host" => $host, "target" => $target, "packager" => $packager, "multilib" => $multilib, "pthread" => $pthread, "native" => ($host === $target) ? "Yes" : "No",
    "URL" => '<a href="' . $link . '">DOWNLOAD</a>');
  }

  function __construct(){
    $this->insert("x86_64-w64-mingw32", "i686-pc-mingw32",
      "autobuilds", "No", "None", "https://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win64/Automated%20Builds/");
    $this->insert("i686-w64-mingw32", "i686-pc-mingw32",
      "autobuilds", "No", "None", "https://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win32/Automated%20Builds/");
    $this->insert("x86_64-w64-mingw32", "x86_64-w64-mingw32",
      "Rubenvb", "No", "winpthreads", "https://sourceforge.net/projects/mingw-w64/files/Toolchains%20targetting%20Win64/Personal%20Builds/rubenvb/");
  }

  function print_html_tr(){
    $ret = "";
    foreach($this->table as $line){
      $ret .= sprintf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>\n",
               $line["host"],$line["target"],$line["packager"],$line["multilib"],
               $line["pthread"],$line["native"],$line["URL"]);
    }
    return $ret;
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
          { "bSearchable": false }
        ]
    } );
    $("thead th").each( function ( i ) {
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
                        <th>Link</th>
                </tr>
        </tfoot>
</table>

</body>
</html>

