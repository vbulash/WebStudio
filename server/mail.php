<!DOCTYPE HTML>
<HEAD>
    <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
</HEAD>
<BODY>
    <?php
    $name = trim( filter_input( INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS ) );
    $email = filter_input( INPUT_POST, 'email' );
    $message = filter_input( INPUT_POST, 'message' );
    $customer = sprintf( "\"%s\" <%s>", $name, $email );

    $referer = filter_input( INPUT_SERVER, 'HTTP_REFERER' );
    // TODO: Вставить реального получателя почты с сайта
    $headers = "From: $customer\r\n";
    if( !mail( "vbulash@yandex.ru", "Обращение с сайта", $message, $headers ) ) {
        $referer .= "?error_code=204";
    }
    header( "Location: $referer" );
    ?>
</BODY>