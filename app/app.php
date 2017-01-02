<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });

    $app->get("/about", function() use ($app) {
        $title = "Testing";
        $imgurl = "/assets/img/tech3.jpg";
        $content = "blahblahblah";
        return $app['twig']->render('three-col-subpage.html.twig', array('title' => $title, 'imgurl' => $imgurl, 'content' => $content));
    });

    $app->get("/ceomessage", function() use ($app) {
        $title = "Testing";
        $imgurl = "/assets/img/tech3.jpg";
        $content = "blahblahblah";
        return $app['twig']->render('three-col-subpage.html.twig', array('title' => $title, 'imgurl' => $imgurl, 'content' => $content));
    });

    $app->get("/services", function() use ($app) {
        $title = "Testing";
        $imgurl = "/assets/img/tech3.jpg";
        $content = "blahblahblah";
        return $app['twig']->render('three-col-subpage.html.twig', array('title' => $title, 'imgurl' => $imgurl, 'content' => $content));
    });

    $app->get("/glovebox", function() use ($app) {
        $title = "Testing";
        $imgurl = "/assets/img/tech3.jpg";
        $content = "blahblahblah";
        return $app['twig']->render('three-col-subpage.html.twig', array('title' => $title, 'imgurl' => $imgurl, 'content' => $content));
    });

    $app->get("/parylene", function() use ($app) {
        $title = "Testing";
        $imgurl = "/assets/img/tech3.jpg";
        $content = "blahblahblah";
        return $app['twig']->render('three-col-subpage.html.twig', array('title' => $title, 'imgurl' => $imgurl, 'content' => $content));
    });

    $app->get("/plasma", function() use ($app) {
        $title = "Testing";
        $imgurl = "/assets/img/tech3.jpg";
        $content = "blahblahblah";
        return $app['twig']->render('three-col-subpage.html.twig', array('title' => $title, 'imgurl' => $imgurl, 'content' => $content));
    });

    $app->get("/sputteringsystem", function() use ($app) {
        $title = "Testing";
        $imgurl = "/assets/img/tech3.jpg";
        $content = "blahblahblah";
        return $app['twig']->render('three-col-subpage.html.twig', array('title' => $title, 'imgurl' => $imgurl, 'content' => $content));
    });

    $app->get("/ascenter", function() use ($app) {
        $title = "Testing";
        $content = "blahblahblah";
        return $app['twig']->render('three-col-subpage.html.twig', array('title' => $title, 'content' => $content));
    });

    $app->get("/contact", function() use ($app) {
        return $app['twig']->render('contact.html.twig');
    });

    return $app;
?>
