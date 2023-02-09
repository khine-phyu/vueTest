<?php status_header(200); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php
    $TEMPLATE_URI = get_template_directory_uri();
    $TEMPLATE_RELATIVE_PATH = parse_url($TEMPLATE_URI, PHP_URL_PATH);
    ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo $TEMPLATE_RELATIVE_PATH; ?>/dist/assets/main.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>