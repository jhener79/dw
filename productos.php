<?php
    $db_host="localhost";
    $db_nombre="libreria";
    $db_usuario="root";
    $db_contraseña="root";
    
    $conexion=mysqli_connect($db_host,$db_usuario,$db_contraseña,$db_nombre);
    if(mysqli_connect_errno()){
      
      echo "Fallo al conectaR DB, avise a su administrador";
      exit();
      
      }
      mysqli_set_charset($conexion, "utf8");

?>

<?php
$busca="";
$busca=$_POST['search_query'];
mysql_connect("localhost", "root", "root");
mysql_select_db("libreria");
if ($busca!="") {
  $busqueda=mysql_query("SELECT * FROM productos WHERE usuario LIKE '%".$busca."%'");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Ecommerce Libreria</title>
  <meta charset="UTF-8">
  <meta name="description" content="Tienda en linea libreria">
  <link rel="stylesheet" type="text/css" href="css/theme.css">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
  <link type="text/css" rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/productos.js"></script>
</head>

<body id="home" class="crafted">
  <div class="page">
    <div class="header">
      <div class="TopMenu">
        <div class="inner">
          <ul style="display:">
            <li>hola mundo</li>
            <li class="acctOptions">
                <span class="name">
                "Hola"
                  <a href="#">Usuario</a>
                </span>
                <span class="loginOut">
                  <a href="#">Sign in</a>
                  <span> / </span>
                  <a href="#">Crear Cuenta</a>
                </span>
            </li>
            <li>hola mundo</li>
            </ul>
        </div>
      </div>
      <div id="Header">
      <div class="inner">
        <div class="logoUSPWrap">
          <div class="header-logo">
            <div id="LogoContainer">
              <h1>
                <a href="#">
                  <span class="Logo1stWord">Crafted</span>
                </a>
              </h1>
            </div>
          </div>
          <ul class="usp">
            <li>
              <span class="circle">
                <i class="fa fa-truck"></i>
              </span>
              <p>
                <span class="title">Envío Gratuito</span>
                <span class="desc">en ordenes Q100+</span>
              </p>
            </li>
            <li>
              <span class="circle">
                <i class="fa fa-phone"></i>
              </span>
              <p>
                <span class="title">Solo llámenos</span>
                <span class="desc">(502) 2432-2567</span>
              </p>
            </li>
          </ul>
        </div>
      </div>
    <div class="PageMenu">
      <div class="inner">
        <div class="searchDesktop">
          <div id="SearchForm" class="cf" style="display: block;">
            <form action="productos.php" method="post" onsubmit="return">
              <label for="search_query">Buscar</label>
              <input type="text" name="search_query" id="search_query" class="Textbox autobox default" value="" autocomplete="off" placeholder="Search ">
              <input type="submit" class="Button" value="Search" name="Search" title="Search">
            </form>
          </div>
        </div>
        <div class="CategoryList" id="SideCategoryList">
          <h3>Categorias</h3>
          <div class="BlockContent">
            <div class="SideCategoryListFlyout">
              <ul class="sf-menu sf-horizontal sf-js-enabled">
                <li class>
                  <a href="#">Libros</a>
                </li>
                <li class>
                  <a href="#">Cuadernos</a>
                </li>
                <li class>
                  <a href="#">Material de Oficina</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    <div class="main">
      <div class="inner">
        <div class="featuredProducts">
          <div class="productSlide">
            <div class="prods-cnt">
                  <div id="list" class="list "></div>
                  <div id="grid" class="grid"></div>
                  <div class="clear"></div>
                      <?php
                      while ($muestra=mysql_fetch_array($busqueda)) {
                      echo "<div class='prod-box shadow'>";
                      echo "<img src=".$muestra['img'].">";
                      echo "<div class='buy-ico'></div>";
                      echo "<h3>";
                      echo "<a>".$muestra["descripcion"]."</a>";
                      echo "</h3>";
                      echo "<div class='price-cnt'>";
                      echo "<div class='price old'>Q25.00</div>";
                      echo "<div class='price'>".$muestra['precio']."</div>";
                      echo "</div>";
                      echo "<p>".$muestra['descripcion']."</p>";
                      echo "</div>";
                      }
                      ?><!-- end product box prod-box -->
              </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
</body>


