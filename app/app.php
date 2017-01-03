<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });

    $app->get("/about", function() use ($app) {
        $title = "About";
        $submenus = array(
          'About Us' => '/about',
          'Message from CEO' => '/ceomessage',
        );
        $imgurl = "/assets/img/tech3.jpg";
        $content = "Cow taleggio boursin. Parmesan cheeseburger goat stinking bishop pecorino parmesan bocconcini cheese on toast. Dolcelatte blue castello fromage frais queso red leicester cauliflower cheese caerphilly danish fontina. Boursin smelly cheese cottage cheese stilton cheese on toast port-salut cheese triangles say cheese. Cheese and biscuits emmental camembert de normandie feta cheese and biscuits everyone loves blue castello croque monsieur. Emmental mascarpone cut the cheese smelly cheese the big cheese taleggio port-salut who moved my cheese. Red leicester st. agur blue cheese paneer halloumi cheeseburger everyone loves cream cheese stilton. Who moved my cheese brie taleggio jarlsberg manchego everyone loves cheddar cut the cheese. Manchego cheeseburger cheese slices camembert de normandie cheeseburger pepper jack parmesan fondue. When the cheese comes out everybody's happy airedale melted cheese macaroni cheese blue castello gouda manchego monterey jack. The big cheese mascarpone babybel camembert de normandie cream cheese roquefort red leicester babybel. Cheese strings mascarpone bavarian bergkase cheeseburger cottage cheese.";
        return $app['twig']->render('three-col-subpage.html.twig', array('title' => $title, 'imgurl' => $imgurl, 'content' => $content, 'submenus' => $submenus));
    });

    $app->get("/ceomessage", function() use ($app) {
        $title = "Message from CEO";
        $imgurl = "/assets/img/tech3.jpg";
        $content = "Cow taleggio boursin. Parmesan cheeseburger goat stinking bishop pecorino parmesan bocconcini cheese on toast. Dolcelatte blue castello fromage frais queso red leicester cauliflower cheese caerphilly danish fontina. Boursin smelly cheese cottage cheese stilton cheese on toast port-salut cheese triangles say cheese. Cheese and biscuits emmental camembert de normandie feta cheese and biscuits everyone loves blue castello croque monsieur. Emmental mascarpone cut the cheese smelly cheese the big cheese taleggio port-salut who moved my cheese. Red leicester st. agur blue cheese paneer halloumi cheeseburger everyone loves cream cheese stilton. Who moved my cheese brie taleggio jarlsberg manchego everyone loves cheddar cut the cheese. Manchego cheeseburger cheese slices camembert de normandie cheeseburger pepper jack parmesan fondue. When the cheese comes out everybody's happy airedale melted cheese macaroni cheese blue castello gouda manchego monterey jack. The big cheese mascarpone babybel camembert de normandie cream cheese roquefort red leicester babybel. Cheese strings mascarpone bavarian bergkase cheeseburger cottage cheese.";
        $submenus = array(
          'About Us' => '/about',
          'Message from CEO' => '/ceomessage',
        );

        return $app['twig']->render('three-col-subpage.html.twig', array('title' => $title, 'imgurl' => $imgurl, 'content' => $content, 'submenus' => $submenus));
    });

    $app->get("/services", function() use ($app) {
        $title = "Services";
        $imgurl = "/assets/img/tech3.jpg";
        $content = "Cow taleggio boursin. Parmesan cheeseburger goat stinking bishop pecorino parmesan bocconcini cheese on toast. Dolcelatte blue castello fromage frais queso red leicester cauliflower cheese caerphilly danish fontina. Boursin smelly cheese cottage cheese stilton cheese on toast port-salut cheese triangles say cheese. Cheese and biscuits emmental camembert de normandie feta cheese and biscuits everyone loves blue castello croque monsieur. Emmental mascarpone cut the cheese smelly cheese the big cheese taleggio port-salut who moved my cheese. Red leicester st. agur blue cheese paneer halloumi cheeseburger everyone loves cream cheese stilton. Who moved my cheese brie taleggio jarlsberg manchego everyone loves cheddar cut the cheese. Manchego cheeseburger cheese slices camembert de normandie cheeseburger pepper jack parmesan fondue. When the cheese comes out everybody's happy airedale melted cheese macaroni cheese blue castello gouda manchego monterey jack. The big cheese mascarpone babybel camembert de normandie cream cheese roquefort red leicester babybel. Cheese strings mascarpone bavarian bergkase cheeseburger cottage cheese.";
        $submenus = array(
          'Services' => '/services',
          'Glove Box' => '/glovebox',
          'Parylene' => '/parylene',
          'Plasma' => '/plasma',
          'Sputtering System' => '/sputteringsystem'
        );

        return $app['twig']->render('three-col-subpage.html.twig', array('title' => $title, 'imgurl' => $imgurl, 'content' => $content, 'submenus' => $submenus));
    });

    $app->get("/glovebox", function() use ($app) {
        $title = "Glove Box";
        $imgurl = "/assets/img/tech1.jpg";
        $content = "Cow taleggio boursin. Parmesan cheeseburger goat stinking bishop pecorino parmesan bocconcini cheese on toast. Dolcelatte blue castello fromage frais queso red leicester cauliflower cheese caerphilly danish fontina. Boursin smelly cheese cottage cheese stilton cheese on toast port-salut cheese triangles say cheese. Cheese and biscuits emmental camembert de normandie feta cheese and biscuits everyone loves blue castello croque monsieur. Emmental mascarpone cut the cheese smelly cheese the big cheese taleggio port-salut who moved my cheese. Red leicester st. agur blue cheese paneer halloumi cheeseburger everyone loves cream cheese stilton. Who moved my cheese brie taleggio jarlsberg manchego everyone loves cheddar cut the cheese. Manchego cheeseburger cheese slices camembert de normandie cheeseburger pepper jack parmesan fondue. When the cheese comes out everybody's happy airedale melted cheese macaroni cheese blue castello gouda manchego monterey jack. The big cheese mascarpone babybel camembert de normandie cream cheese roquefort red leicester babybel. Cheese strings mascarpone bavarian bergkase cheeseburger cottage cheese.";
        $submenus = array(
          'Services' => '/services',
          'Glove Box' => '/glovebox',
          'Parylene' => '/parylene',
          'Plasma' => '/plasma',
          'Sputtering System' => '/sputteringsystem'
        );

        return $app['twig']->render('three-col-subpage.html.twig', array('title' => $title, 'imgurl' => $imgurl, 'content' => $content, 'submenus' => $submenus));
    });

    $app->get("/parylene", function() use ($app) {
        $title = "Parylene";
        $imgurl = "/assets/img/tech2.jpg";
        $content = "Cow taleggio boursin. Parmesan cheeseburger goat stinking bishop pecorino parmesan bocconcini cheese on toast. Dolcelatte blue castello fromage frais queso red leicester cauliflower cheese caerphilly danish fontina. Boursin smelly cheese cottage cheese stilton cheese on toast port-salut cheese triangles say cheese. Cheese and biscuits emmental camembert de normandie feta cheese and biscuits everyone loves blue castello croque monsieur. Emmental mascarpone cut the cheese smelly cheese the big cheese taleggio port-salut who moved my cheese. Red leicester st. agur blue cheese paneer halloumi cheeseburger everyone loves cream cheese stilton. Who moved my cheese brie taleggio jarlsberg manchego everyone loves cheddar cut the cheese. Manchego cheeseburger cheese slices camembert de normandie cheeseburger pepper jack parmesan fondue. When the cheese comes out everybody's happy airedale melted cheese macaroni cheese blue castello gouda manchego monterey jack. The big cheese mascarpone babybel camembert de normandie cream cheese roquefort red leicester babybel. Cheese strings mascarpone bavarian bergkase cheeseburger cottage cheese.";
        $submenus = array(
          'Services' => '/services',
          'Glove Box' => '/glovebox',
          'Parylene' => '/parylene',
          'Plasma' => '/plasma',
          'Sputtering System' => '/sputteringsystem'
        );

        return $app['twig']->render('three-col-subpage.html.twig', array('title' => $title, 'imgurl' => $imgurl, 'content' => $content, 'submenus' => $submenus));
    });

    $app->get("/plasma", function() use ($app) {
        $title = "Plasma";
        $imgurl = "/assets/img/tech3.jpg";
        $content = "Cow taleggio boursin. Parmesan cheeseburger goat stinking bishop pecorino parmesan bocconcini cheese on toast. Dolcelatte blue castello fromage frais queso red leicester cauliflower cheese caerphilly danish fontina. Boursin smelly cheese cottage cheese stilton cheese on toast port-salut cheese triangles say cheese. Cheese and biscuits emmental camembert de normandie feta cheese and biscuits everyone loves blue castello croque monsieur. Emmental mascarpone cut the cheese smelly cheese the big cheese taleggio port-salut who moved my cheese. Red leicester st. agur blue cheese paneer halloumi cheeseburger everyone loves cream cheese stilton. Who moved my cheese brie taleggio jarlsberg manchego everyone loves cheddar cut the cheese. Manchego cheeseburger cheese slices camembert de normandie cheeseburger pepper jack parmesan fondue. When the cheese comes out everybody's happy airedale melted cheese macaroni cheese blue castello gouda manchego monterey jack. The big cheese mascarpone babybel camembert de normandie cream cheese roquefort red leicester babybel. Cheese strings mascarpone bavarian bergkase cheeseburger cottage cheese.";
        $submenus = array(
          'Services' => '/services',
          'Glove Box' => '/glovebox',
          'Parylene' => '/parylene',
          'Plasma' => '/plasma',
          'Sputtering System' => '/sputteringsystem'
        );

        return $app['twig']->render('three-col-subpage.html.twig', array('title' => $title, 'imgurl' => $imgurl, 'content' => $content, 'submenus' => $submenus));
    });

    $app->get("/sputteringsystem", function() use ($app) {
        $title = "Sputtering System";
        $imgurl = "/assets/img/tech4.jpg";
        $content = "Cow taleggio boursin. Parmesan cheeseburger goat stinking bishop pecorino parmesan bocconcini cheese on toast. Dolcelatte blue castello fromage frais queso red leicester cauliflower cheese caerphilly danish fontina. Boursin smelly cheese cottage cheese stilton cheese on toast port-salut cheese triangles say cheese. Cheese and biscuits emmental camembert de normandie feta cheese and biscuits everyone loves blue castello croque monsieur. Emmental mascarpone cut the cheese smelly cheese the big cheese taleggio port-salut who moved my cheese. Red leicester st. agur blue cheese paneer halloumi cheeseburger everyone loves cream cheese stilton. Who moved my cheese brie taleggio jarlsberg manchego everyone loves cheddar cut the cheese. Manchego cheeseburger cheese slices camembert de normandie cheeseburger pepper jack parmesan fondue. When the cheese comes out everybody's happy airedale melted cheese macaroni cheese blue castello gouda manchego monterey jack. The big cheese mascarpone babybel camembert de normandie cream cheese roquefort red leicester babybel. Cheese strings mascarpone bavarian bergkase cheeseburger cottage cheese.";
        $submenus = array(
          'Services' => '/services',
          'Glove Box' => '/glovebox',
          'Parylene' => '/parylene',
          'Plasma' => '/plasma',
          'Sputtering System' => '/sputteringsystem'
        );

        return $app['twig']->render('three-col-subpage.html.twig', array('title' => $title, 'imgurl' => $imgurl, 'content' => $content, 'submenus' => $submenus));
    });

    $app->get("/ascenter", function() use ($app) {
        $title = "A/S Center";
        $content = "Cow taleggio boursin. Parmesan cheeseburger goat stinking bishop pecorino parmesan bocconcini cheese on toast. Dolcelatte blue castello fromage frais queso red leicester cauliflower cheese caerphilly danish fontina. Boursin smelly cheese cottage cheese stilton cheese on toast port-salut cheese triangles say cheese. Cheese and biscuits emmental camembert de normandie feta cheese and biscuits everyone loves blue castello croque monsieur. Emmental mascarpone cut the cheese smelly cheese the big cheese taleggio port-salut who moved my cheese. Red leicester st. agur blue cheese paneer halloumi cheeseburger everyone loves cream cheese stilton. Who moved my cheese brie taleggio jarlsberg manchego everyone loves cheddar cut the cheese. Manchego cheeseburger cheese slices camembert de normandie cheeseburger pepper jack parmesan fondue. When the cheese comes out everybody's happy airedale melted cheese macaroni cheese blue castello gouda manchego monterey jack. The big cheese mascarpone babybel camembert de normandie cream cheese roquefort red leicester babybel. Cheese strings mascarpone bavarian bergkase cheeseburger cottage cheese.";
        return $app['twig']->render('three-col-subpage.html.twig', array('title' => $title, 'content' => $content));
    });

    $app->get("/contact", function() use ($app) {
        return $app['twig']->render('contact.html.twig');
    });

    return $app;
?>
