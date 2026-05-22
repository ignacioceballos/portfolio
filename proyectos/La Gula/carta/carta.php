<?php
// Iniciar sesión solo si no hay ninguna activa
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Carta-La Gula</title>
    <link rel="stylesheet" href="carta.css" />
  </head>
  <body>
    <!--HEADER-->
    <header class="main-header">
      <div class="logo">
        <a href="/index.php"
          ><img src="/imagenes/logo.png" alt="Home" />
        </a>
        <div class="texto-logo">
          <h1>Carta Gourmet</h1>
          <p>La Gula</p>
        </div>
      </div>

    <nav class="nav-bar">
    <a href="/index.php#historia">Historia</a>
          <?php
if (!empty($_SESSION["usuario"]) && isset($_SESSION["usuario"]["nombre"])) {
    echo '<a href="/perfil/perfil.php">Perfil</a>';
    echo '<a href="/ofertas/ofertaindex.php">Ofertas</a>';
    echo '<a href="/reseñas/reseñas.php">Reseñas</a>';
    echo '<a href="/reserva/reservas.php">Reserva</a>';
    echo '<a href="/carritodecompras/carritodecompraslindo.php">Carrito</a>';
} else {
    echo '<a href="/iniciosesion/iniciosesion.php">Iniciar Sesión</a>';
    
}
?> 
  </nav>
    </header>

    <main class="menu">
      <!--ENTRADAS-->
      <section class="menu-section">
        <h2>Entradas</h2>
        <div class="menu-item">
          <h3>Empanadas Criollas</h3>
          <p>Una especialidad de la casa, con masa suave y relleno abundante</p>
          <span>$3.000</span>
        </div>
        <div class="menu-item">
          <h3>Mini Provoleta</h3>
          <p>Un fresco queso, reconfortante para cualquier paladar</p>
          <span>$4.000</span>
        </div>
        <div class="menu-item">
          <h3>Mini Picada</h3>
          <p>
            Una pequeña picada para entrar en calor, pan casero, salame, jamón,
            y queso, con aceitunas incluídas
          </p>
          <span>$7.000</span>
        </div>
        <div class="menu-item">
          <h3>Porción de Rabas</h3>
          <p>
            Aros de calamar, envueltos en pan refinado con huevo, acompañados de
            limón cortado en rodajas
          </p>
          <span>$5.000</span>
        </div>
        <div class="menu-item">
          <h3>Papas con Cheddar y panceta</h3>
          <p>
            Papas fritas ahogadas en delicioso queso Cheddar, con panceta y
            cebolla de verdeo
          </p>
          <span>$6.000</span>
        </div>
      </section>
      <!--CARNES-->
      <section class="menu-section">
        <h2>Carnes</h2>
        <div class="menu-item">
          <h3>Filet Mignon</h3>
          <p>Carne premium con puré de papas trufado</p>
          <span>$30.000</span>
        </div>
        <div class="menu-item">
          <h3>Salmón a la Plancha</h3>
          <p>Servido con vegetales al vapor y salsa cítrica</p>
          <span>$27.000</span>
        </div>
        <div class="menu-item">
          <h3>Entrecot a la Francesa</h3>
          <p>
            Crema amostazada al chardonnay y hongos en guarnición de papas
            gratinadas
          </p>
          <span>$35.500</span>
        </div>
        <div class="menu-item">
          <h3>Lomo al Champignon</h3>
          <p>
            Lomo delicioso, marinado en una salsa de champignones de cosecha y
            acompañado de papas Noisette
          </p>
          <span>$20.000</span>
        </div>
        <div class="menu-item">
          <h3>Chivito Braseado con Papas Rústicas</h3>
          <p>Paleta de chivito braseado y, vegetales de nuestra cosecha</p>
          <span>$42.000</span>
        </div>
      </section>
      <!--PASTAS-->
      <section class="menu-section">
        <h2>Pastas</h2>
        <div class="menu-item">
          <h3>Crepés de Mariscos</h3>
          <p>Crepés envueltos en queso parmesano</p>
          <span>$20.000</span>
        </div>
        <div class="menu-item">
          <h3>Ñoquis de Papa</h3>
          <p>Ñoquis de papa marinados en queso refinado</p>
          <span>$20.000</span>
        </div>
        <div class="menu-item">
          <h3>Sorrentinos Di Mare</h3>
          <p>Frutos del Mar de primer nivel</p>
          <span>$25.000</span>
        </div>
        <div class="menu-item">
          <h3>Tallarines</h3>
          <p>Pasta de primerisima calidad, incluye queso rallado</p>
          <span>$18.000</span>
        </div>
        <div class="menu-item">
          <h3>Ravioles</h3>
          <p>Ravioles de carne y verdura</p>
          <span>$23.400</span>
        </div>
      </section>
      <!--MINUTAS-->
      <section class="menu-section">
        <h2>Minutas</h2>
        <div class="menu-item">
          <h3>Milanesas de Ternera</h3>
          <p>Milanesas de tierna carne de primera</p>
          <span>$20.000</span>
        </div>
        <div class="menu-item">
          <h3>Milanesa Napolitana</h3>
          <p>Milanesa de ternera con queso y jamón por encima</p>
          <span>$22.000</span>
        </div>
        <div class="menu-item">
          <h3>Suprema de Pollo</h3>
          <p>Suprema de deliciosa pechuga de pollo</p>
          <span>$19.000</span>
        </div>
        <div class="menu-item">
          <h3>Suprema al Roquefort</h3>
          <p>Suprema con roquefort derretido por encima</p>
          <span>$22.000</span>
        </div>
      </section>
      <!--GUARNICIONES-->
      <section class="menu-section">
        <h2>Guarniciones</h2>
        <div class="menu-item">
          <h3>Puré de Papa</h3>
          <p>
            Papas hervidas pisadas y mezcladas en aceite de oliva y sal, con una
            terminación salada y suave
          </p>
          <span>$1.800</span>
        </div>
        <div class="menu-item">
          <h3>Brócoli al Vapor con Salsa de Limón</h3>
          <p>
            Floretes de brócoli frescos al vapor, terminados con manteca de
            limón y ralladura cítrica.
          </p>
          <span>$2.100</span>
        </div>
        <div class="menu-item">
          <h3>Arroz Pilaf con Almendras</h3>
          <p>
            Arroz aromatizado con especias suaves, salteado con manteca y
            almendras tostadas.
          </p>
          <span>$2.300</span>
        </div>
        <div class="menu-item">
          <h3>Vegetales Grillados al Balsámico</h3>
          <p>
            Zucchini, berenjena, morrón y cebolla caramelizados a la plancha con
            reducción de aceto balsámico.
          </p>
          <span>$2.400</span>
        </div>
        <div class="menu-item">
          <h3>Gratinado de Choclo y Queso</h3>
          <p>
            Dulce de maíz tierno gratinado con queso parmesano y un toque de
            nuez moscada.
          </p>
          <span>$2.600</span>
        </div>
        <div class="menu-item">
          <h3>Papas Rústicas al Romero</h3>
          <p>
            Papas cortadas en gajos, horneadas con romero fresco, ajo y aceite
            de oliva.
          </p>
          <span>$2.200</span>
        </div>
      </section>
      <!--ENSALADAS-->
      <section class="menu-section">
        <h2>Ensaladas</h2>
        <div class="menu-item">
          <h3>Ensalada Mediterránea</h3>
          <p>
            Mezcla fresca de hojas verdes, tomate cherry, aceitunas negras,
            queso feta y aderezo de oliva extra virgen con orégano.
          </p>
          <span>$3.200</span>
        </div>
        <div class="menu-item">
          <h3>Ensalada Verde & Avocado</h3>
          <p>
            Base de rúcula y espinaca fresca, láminas de palta, pepino y
            semillas de sésamo. Aliño de limón y aceite de oliva.
          </p>
          <span>$3.600</span>
        </div>
        <div class="menu-item">
          <h3>Ensalada Caprese Clásica</h3>
          <p>
            Rodajas de tomate reliquia, mozzarella fresca de búfala, hojas de
            albahaca y reducción de aceto balsámico.
          </p>
          <span>$3.400</span>
        </div>
        <div class="menu-item">
          <h3>Ensalada Tropical Gourmet</h3>
          <p>
            Mix de verdes, cubos de mango, pollo grillado, nueces caramelizadas
            y aderezo de yogur con curry suave.
          </p>
          <span>$3.800</span>
        </div>
        <div class="menu-item">
          <h3>Ensalada César Premium</h3>
          <p>
            Lechuga romana fresca, crutones artesanales, lascas de parmesano y
            pechuga de pollo grillada, con aderezo César casero.
          </p>
          <span>$3.900</span>
        </div>
      </section>
      <!--BEBIDAS SIN ALCOHOL-->
      <section class="menu-section">
        <h2>Bebidas sin Alcohol</h2>
        <div class="menu-item">
          <h3>Agua Mineral</h3>
          <p>Agua fresca con gas o sin gas</p>
          <span>$3.000</span>
        </div>
        <div class="menu-item">
          <h3>Gaseosa</h3>
          <p>Gaseosa de la línea Coca-Cola, Sprite, Fanta, o Coca-Cola</p>
          <span>$4.000</span>
        </div>
        <div class="menu-item">
          <h3>Agua Saborizada</h3>
          <p>
            Saborizada de la línea Aquarius, naranja, pomelo, pomelo rosado,
            manzana o pera
          </p>
          <span>$3.500</span>
        </div>
        <div class="menu-item">
          <h3>Jugos</h3>
          <p>Vaso de jugo exprimido a elección, naranja o pomelo</p>
          <span>$5.000</span>
        </div>
        <div class="menu-item">
          <h3>Limonada</h3>
          <p>Jarra de limonada con hielo, agua fresca, menta y jengibre</p>
          <span>$10.000</span>
        </div>
      </section>
      <!--BEBIDAS-->
      <section class="menu-section">
        <h2>Bebidas</h2>
        <div class="menu-item">
          <h3>Gancia</h3>
          <p>Gancia con Limón</p>
          <span>$9.000</span>
        </div>
        <div class="menu-item">
          <h3>Gin Tonic</h3>
          <p>Agua tónica con Gin de primera calidad</p>
          <span>$10.000</span>
        </div>
        <div class="menu-item">
          <h3>Campari</h3>
          <p>Campari de gran sabor con naranja</p>
          <span>$9.500</span>
        </div>
        <div class="menu-item">
          <h3>Fernet</h3>
          <p>Fernet con Coca-Cola</p>
          <span>$9.000</span>
        </div>
        <div class="menu-item">
          <h3>Whisky</h3>
          <p>Whisky a las rocas</p>
          <span>$10.000</span>
        </div>
        <div class="menu-item">
          <h3>Champagne</h3>
          <p>Botella de champagne</p>
          <span>$15.000</span>
        </div>
        <div class="menu-item">
          <h3>Vinos Tintos</h3>
          <p>Vinos tintos (Malbec, Cabernet)</p>
          <span>$20.000</span>
        </div>
        <div class="menu-item">
          <h3>Vinos Blancos</h3>
          <p>Vinos blancos (Chardonnay, Sauvignon Blanc)</p>
          <span>$20.000</span>
        </div>
      </section>
      <!--POSTRES-->
      <section class="menu-section">
        <h2>Postres</h2>
        <div class="menu-item">
          <h3>Tarta de Chocolate</h3>
          <p>Chocolate oscuro con frutos rojos</p>
          <span>$15.000</span>
        </div>
        <div class="menu-item">
          <h3>Cheesecake Clásico</h3>
          <p>Con coulis de frutilla</p>
          <span>$14.000</span>
        </div>
        <div class="menu-item">
          <h3>Bocha de Helado</h3>
          <p>Bola de helado de chocolate, limón o frutilla</p>
          <span>$10.000</span>
        </div>
        <div class="menu-item">
          <h3>Tiramisú</h3>
          <p>
            Fina capa de vainilla con deliciosa crema chantilly por encima, con
            cacao esparcido
          </p>
          <span>$20.000</span>
        </div>
        <div class="menu-item">
          <h3>Panqueques</h3>
          <p>Panqueques con dulce de leche y salsa de chocolate</p>
          <span>$10.000</span>
        </div>
        <div class="menu-item">
          <h3>Copa Tentación</h3>
          <p>Helado de vainilla, irish cream, marroc y crema chantilly</p>
          <span>$13.000</span>
        </div>
        <div class="menu-item">
          <h3>Flan Casero</h3>
          <p>
            Un delicioso flan casero con crema, caramelo o dulce de leche por
            encima
          </p>
          <span>$10.000</span>
        </div>
      </section>
      <section class="menu-section">
        <h2>Salsas</h2>
        <div class="menu-item">
          <h3>Salsa Blanca (Bechamel)</h3>
          <p>
            Clásica y cremosa, elaborada con manteca, harina y leche fresca.
            Ideal para pastas rellenas y gratinados.
          </p>
          <span>$2.000</span>
        </div>
        <div class="menu-item">
          <h3>Salsa Rosa</h3>
          <p>
            Delicada mezcla de salsa de tomate y crema fresca, con un toque de
            oliva extra virgen. Suave y equilibrada.
          </p>
          <span>$2.200</span>
        </div>
        <div class="menu-item">
          <h3>Salsa Bolognesa</h3>
          <p>
            Tradicional receta italiana con carne vacuna y cerdo, cocida
            lentamente en salsa de tomate y vino tinto.
          </p>
          <span>$2.800</span>
        </div>
        <div class="menu-item">
          <h3>Salsa de Tomates Heirloom y Albahaca</h3>
          <p>
            Tomates reliquia cocidos a fuego lento con hojas frescas de albahaca
            y un toque de ajo confitado.
          </p>
          <span>$2.400</span>
        </div>
        <div class="menu-item">
          <h3>Salsa de Hongos Porcini y Trufa</h3>
          <p>
            Cremosa combinación de hongos de estación y aceite de trufa negra,
            de aroma intenso y sabor profundo.
          </p>
          <span>$3.600</span>
        </div>
        <div class="menu-item">
          <h3>Salsa de Ajíes Ahumados</h3>
          <p>
            Base de pimientos y ajíes secos ahumados en leña, con un toque de
            oliva extra virgen. Picante elegante y persistente.
          </p>
          <span>$2.500</span>
        </div>
        <div class="menu-item">
          <h3>Chutney de Mango y Jengibre</h3>
          <p>
            Dulce, especiado y ligeramente picante. Acompaña a la perfección
            quesos suaves, carnes blancas o tablas gourmet.
          </p>
          <span>$2.800</span>
        </div>
        <div class="menu-item">
          <h3>Salsa Satay de Maní y Coco</h3>
          <p>
            Clásico del sudeste asiático: crema de maní tostado con leche de
            coco, soja y especias aromáticas.
          </p>
          <span>$3.100</span>
        </div>
      </section>
    </main>

    <!--FOOTER-->
    <footer class="main-footer">
      <div class="footer-content">
        <div class="footer-section">
          <h3>Redes Sociales</h3>
          <div class="redes-sociales">
            <p>📸 Instagram: @LaGulaRestaurant</p>
            <p>📘 Facebook: Restaurante La Gula</p>
            <p>🐦 Twitter: @LaGulaRestaurant</p>
          </div>
        </div>

        <div class="footer-section">
          <h3>Contacto</h3>
          <p>Correo: lagula@restaurante.com</p>
          <p>Teléfono: +34 123 456 789</p>
        </div>

        <div class="footer-section">
          <h3>Ubicación</h3>
          <p>La Falda, Cordoba</p>
          <p>Calle Sabores 123</p>
        </div>
      </div>

      <div class="footer-bottom">
        <p>&copy; 2025 La Gula. Todos los derechos reservados.</p>
      </div>
    </footer>
  </body>
</html>
