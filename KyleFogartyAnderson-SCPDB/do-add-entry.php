<?php
    require_once( "db-connect.php" );
    include("common-top.php");
    include("nav.php"); 
    include("common-bottom.php");

    // Get the form data
    $itemnumber  = $_POST['itemnumber'];
    $objectclass  = $_POST['objectclass'];
    
    $header1  = $_POST['header1'];
    $content1 = addslashes($_POST['content1']);

    $header2  = $_POST['header2'];
    $content2 = addslashes($_POST['content2']);

    $header3  = $_POST['header3'];
    $content3 = addslashes($_POST['content3']);

    $header4  = $_POST['header4'];
    $content4 = addslashes($_POST['content4']);

    $header5  = $_POST['header5'];
    $content5 = addslashes($_POST['content5']);

    $header6  = $_POST['header6'];
    $content6 = addslashes($_POST['content6']);

    $header7  = $_POST['header7'];
    $content7 = addslashes($_POST['content7']);

    $header8  = $_POST['header8'];
    $content8 = addslashes($_POST['content8']);

    $header9  = $_POST['header9'];
    $content9 = addslashes($_POST['content9']);

    $header10  = $_POST['header10'];
    $content10 = addslashes($_POST['content10']);

    $statement = "INSERT INTO data (item_no, object_class, header_1, content_1, 
                                    
                                    header_2,
                                    content_2,
                                    
                                    header_3,
                                    content_3,
                                    
                                    header_4,
                                    content_4,
                                    
                                    header_5,
                                    content_5,
                                    
                                    header_6,
                                    content_6,
                                    
                                    header_7,
                                    content_7,
                                    
                                    header_8,
                                    content_8,
                                    
                                    header_9,
                                    content_9,
                                    
                                    header_10,
                                    content_10) 
                    VALUES(                         
                                    '$itemnumber', 
                                    '$objectclass',

                                    '$header1',
                                    '$content1',
                                    
                                    '$header2',
                                    '$content2',
                                
                                    '$header3',
                                    '$content3',
                                
                                    '$header4',
                                    '$content4',
                                
                                    '$header5',
                                    '$content5',
                                
                                    '$header6',
                                    '$content6',
                                
                                    '$header7',
                                    '$content7',
                                
                                    '$header8',
                                    '$content8',
                                
                                    '$header9',
                                    '$content9',
                                
                                    '$header10',
                                    '$content10')";
    mysqli_query($link, $statement);

    print('<div style="width:100%; background-color: gray; text-align:center;" ><h2> Data added</h2>
    <a style="color:white;"  href = "index.php"> Back to Index </a>
    </div>');
   
       
?>
    

