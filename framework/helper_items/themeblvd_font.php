<?php
/**
 *
 * ThemeBlvd WordPress Theme Framework
 * Fonts
 *
 * This function displays selected fonts
 * for the theme.
 *
 * @author  Jason Bobich
 *
 */

function themeblvd_font($headers, $body){

    //Font stack list
    $fontStacks = array(
        "arial" => 'Arial, "Helvetica Neue", Helvetica, sans-serif',
        "baskerville" => 'Baskerville, "Times New Roman", Times, serif',
        "cambria" => 'Cambria, Georgia, Times, "Times New Roman", serif',
        "century-gothic" => '"Century Gothic", "Apple Gothic", sans-serif',
        "consolas" => 'Consolas, "Lucida Console", Monaco, monospace',
        "copperplate-light" => '"Copperplate Light", "Copperplate Gothic Light", serif',
        "courier-new" => '"Courier New", Courier, monospace',
        "franklin" => '"Franklin Gothic Medium", "Arial Narrow Bold", Arial, sans-serif',
        "futura" => 'Futura, "Century Gothic", AppleGothic, sans-serif',
        "garamond" => 'Garamond, "Hoefler Text", Times New Roman, Times, serif',
        "geneva" => 'Geneva, "Lucida Sans", "Lucida Grande", "Lucida Sans Unicode", Verdana, sans-serif',
        "georgia" => 'Georgia, Palatino," Palatino Linotype", Times, "Times New Roman", serif',
        "gill-sans" => '"Gill Sans", Calibri, "Trebuchet MS", sans-serif',
        "helvetica" => '"Helvetica Neue", Arial, Helvetica, sans-serif',
        "impact" => 'Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif',
        "lucida" => '"Lucida Sans", "Lucida Grande", "Lucida Sans Unicode", sans-serif',
        "palatino" => 'Palatino, "Palatino Linotype", Georgia, Times, "Times New Roman", serif',
        "tahoma" => 'Tahoma, Geneva, Verdana',
        "times" => 'Times, "Times New Roman", Georgia, serif',
        "trebuchet" => '"Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande"," Lucida Sans", Arial, sans-serif',
        "verdana" => 'Verdana, Geneva, Tahoma, sans-serif'
    );

    //Body font
    $bodyFont = $fontStacks[$body];

    //Header font
    if($headers == 'none') {

        //Set equal to body font
        $headerFont = $bodyFont;

    } else {

        //Format header Google font name
        $headerFont = $headers;
        $headerFontInclude = str_replace(' ', '+', $headers);
        
    }

    ?>
    <?php if($headerFont != $bodyFont) : ?>
    <link href="http://fonts.googleapis.com/css?family=<?php echo $headerFontInclude; ?>&subset=latin" rel="stylesheet" type="text/css">
    <?php endif; ?>
    
    <style type="text/css">
    body { font-family: <?php echo $bodyFont; ?>; }
    h1, h2, h3, h4, h5, h6 { font-family: '<?php echo $headerFont; ?>'; }
    </style>
<?php
}
?>