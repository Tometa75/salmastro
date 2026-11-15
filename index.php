<?php
include ('baseline.php');
include_once ('classi/salmastro.php');

$param=array();

//i parametri del link vengono accettati solo se validi (vedi mainFunc::param_today e param_config)
if (isset($_REQUEST['today'])) $param['today']=mainFunc::param_today($_REQUEST['today']);
$param['config']=mainFunc::param_config($_REQUEST);

$sal=new Salmastro($param);
$sal->build();

?>
<!DOCTYPE html>
<html lang="it">

<html>

<head>
   <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
   <meta name="viewport" content="width=device-width, initial-scale=1.0" >
   <script type="text/javascript" src="core/calendario/calnav.js?v=<?php echo time(); ?>"></script>
   <script type="text/javascript" src="jquery-1.10.2.js"></script>
   <script type="text/javascript" src="code.js?v=<?php echo time(); ?>"></script>
   <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" >
   <link rel="stylesheet" href="core/calendario/calnav.css?v=<?php echo time(); ?>" >
</head>

<body>

    <div id="salmain" style="" >

        <?php
            $sal->draw();
        ?>

    </div>

</body>

</html>