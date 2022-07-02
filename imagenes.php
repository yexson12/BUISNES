<?php
require 'proyecto/productos/productos.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Foody - Organic Food Website Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

  <!--WHATSAPP-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status"></div>
  </div>
  <!-- Spinner End -->


  <!-- Navbar Start -->
  <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
      <div class="col-lg-6 px-5 text-start">
        <small><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
        <small class="ms-4"><i class="fa fa-envelope me-2"></i>info@example.com</small>
      </div>
      <div class="col-lg-6 px-5 text-end">
        <small>Follow us:</small>
        <a class="text-body ms-3" href=""><i class="fab fa-facebook-f"></i></a>
        <a class="text-body ms-3" href=""><i class="fab fa-twitter"></i></a>
        <a class="text-body ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
        <a class="text-body ms-3" href=""><i class="fab fa-instagram"></i></a>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
      <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
        <h1 class="fw-bold text-primary m-0">F<span class="text-secondary">oo</span>dy</h1>
      </a>
      <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
          <a href="index.html" class="nav-item nav-link active">Home</a>
          <a href="about.html" class="nav-item nav-link">About Us</a>
          <a href="product.html" class="nav-item nav-link">Products</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
            <div class="dropdown-menu m-0">
              <a href="blog.html" class="dropdown-item">Blog Grid</a>
              <a href="feature.html" class="dropdown-item">Our Features</a>
              <a href="testimonial.html" class="dropdown-item">Testimonial</a>
              <a href="404.html" class="dropdown-item">404 Page</a>
            </div>
          </div>
          <a href="contact.html" class="nav-item nav-link">Contact Us</a>
          <a href="login1/php/cerrar_sesion.php" class="nav-item nav-link active">CERRAR SECCION</a>
        </div>
        <div class="d-none d-lg-flex ms-2">
          <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
            <small class="fa fa-search text-body"></small>
          </a>
          <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
            <small class="fa fa-user text-body"></small>
          </a>
          <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
            <small class="fa fa-shopping-bag text-body"></small>
          </a>
        </div>
      </div>
    </nav>
  </div>
  <!-- Navbar End -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-0 gx-5 align-items-end">
        <div class="col-lg-6">
          <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-3">Our Products</h1>
            <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
          </div>
        </div>
        <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
          <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
            <li class="nav-item me-2">
              <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill" href="#tab-1">Vegetable</a>
            </li>
            <li class="nav-item me-2">
              <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">Fruits </a>
            </li>
            <li class="nav-item me-0">
              <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-3">Fresh</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="tab-content lizana">
        <div id="tab-1" class="tab-pane fade show p-0 active">
          <div class="row g-4 michi">
          <?php foreach ($listaEmpleados as $empleado) { ?>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp perro" data-wow-delay="0.1s">
         
              <div class="product-item">
                <div class="position-relative bg-light overflow-hidden">
                  <img class="img-fluid w-100" src="proyecto/productos/Imagenes/<?php echo $empleado['Foto']; ?>" alt="<?php echo $empleado['Foto']; ?>" alt="">
                  <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                </div>
                <div class="text-center p-4 Boton-F">
                  <a class="d-block h5 mb-2" href=""><?php echo $empleado['Nombre']; ?></a>
                  <span class="text-primary me-1"><?php echo $empleado['precio']; ?></span>
                  <span class="text-body text-decoration-line-through"><?php echo $empleado['stock']; ?></span>
                </div>
                <div class="d-flex border-top Boton-F">
                  <small class="w-50 text-center border-end py-2">
                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>View detail</a>
                  </small>
                  <small class="w-50 text-center py-2">
                    <a class="text-body" href="login1/php/validar.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Add to cart</a>
                  </small>
                </div>

                <div class="add-to-cart">
                  <a href="login1/php/validar.php">
                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>AÑADIR</button>
                  </a>
                </div>
              </div>
            </div>
            


           

            <?php } ?>
            <style>
              .product-item {
                border: solid 2px rgb(0, 17, 255);
              }

              .michi {
                border: solid 2px rgb(0, 255, 140);
              }

              .verde {}
            </style>


            <div class="col-12  wow fadeInUp verde" data-wow-delay="0.1s">
              <a class="btn btn-primary rounded-pill py-3 px-5" href="">VENDO PRODUCTOS</a>
            </div>
          </div>
        </div>
        
           
      
            
        
        </div>
      </div>
    </div>
  </div>
  <!-- Product End -->
 
  <div class="container ">
    <div class="contenedor_productos">
      <form action="" method="post" enctype="multipart/form-data">
        <!-- Modal -->
        <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Productos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-row">
                  <input type="hidden" required name="txtId" placeholder="" id="txtId" require="" value="<?php echo $txtId; ?>">

                  <div class="form-group  col-md-4">
                    <label for="Nombre">Nombre:</label>
                    <input type="text" style="background-color:#dee2e4;color:black;" class="form-control <?php echo (isset($error['Nombre'])) ? "is-invalid" : ""; ?>" required name="Nombre" placeholder="" id="Nombre" require="" value="<?php echo $Nombre; ?>">
                    <div class="invalid-feedback">
                      <?php echo (isset($error['Nombre'])) ? $error['Nombre'] : ""; ?>"
                    </div>
                    <br>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="descripcion">Descripcion:</label>
                    <input type="text" style="background-color:#dee2e4;color:black;" class="form-control <?php echo (isset($error['descripcion'])) ? "is-invalid" : ""; ?>" required name="descripcion" placeholder="" id="descripcion" require="" value="<?php echo $descripcion; ?>">
                    <div class="invalid-feedback">
                      <?php echo (isset($error['descripcion'])) ? $error['descripcion'] : ""; ?>
                    </div>
                    <br>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="precio">Precio:</label>
                    <input type="number" style="background-color:#dee2e4;color:black;" class="form-control <?php echo (isset($error['precio'])) ? "is-invalid" : ""; ?>" required name="precio" placeholder="" id="precio" require="" value="<?php echo $precio; ?>">
                    <div class="invalid-feedback">
                      <?php echo (isset($error['precio'])) ? $error['precio'] : ""; ?>
                    </div>
                    <br>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="stock">stock:</label>
                    <input type="number" style="background-color:#dee2e4;color:black;" class="form-control <?php echo (isset($error['stock'])) ? "is-invalid" : ""; ?>" required name="stock" placeholder="stock" id="stock" require="" value="<?php echo $stock; ?>">
                    <div class="invalid-feedback">
                      <?php echo (isset($error['stock'])) ? $error['stock'] : ""; ?>
                    </div>
                    <br>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="txtFoto">Foto:</label>
                    <?php if ($txtFoto != "") {  ?>
                      <br>
                      <img class="img-thumbnail rounded mx-auto d-block" width="100px" src="productos/Imagenes/<?php echo $txtFoto; ?>" alt="">
                    <?php } ?>
                    <input type="file" style="background-color:#dee2e4;color:black;" class="form-control" accept="image/*" name="txtFoto" placeholder="" id="txtFoto" require="" value="<?php echo $txtFoto; ?>">
                    <br>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button value="btnAgregar" <?php echo $accionAgregar; ?> class="btn btn-success" type="submit" name="accion">Agregar</button>
                <button value="btnModificar" <?php echo $accionModificar; ?> class="btn btn-warning" type="submit" name="accion">Modificar</button>
                <button value="btnEliminar" onClick="return Confirmar('Desea eliminar el empleado?');" <?php echo $accionEliminar; ?> class="btn btn-danger" type="submit" name="accion">Eliminar</button>
                <button value="btnCancelar" <?php echo $accionCancelar; ?> class="btn btn-primary" type="submit" name="accion">Cancelar</button>
              </div>
            </div>
          </div>
        </div>
        <br /><br />
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#miModal">
          Agregar Registro +
        </button>
      </form>
      <br /><br />
      <div class="row row_cabecera">
        <table class="table table-hover table-bordered text-center">

          <!-- <tbody> -->

          <?php foreach ($listaEmpleados as $empleado) { ?>

            <tr>
              <td><img class="img-thumbnail" width="100px" src="proyecto/productos/Imagenes/<?php echo $empleado['Foto']; ?>" alt="<?php echo $empleado['Foto']; ?>"></td>
              <td><?php echo $empleado['Nombre']; ?></td>
              <td><?php echo $empleado['descripcion']; ?></td>
              <td><?php echo $empleado['precio']; ?></td>
              <td><?php echo $empleado['stock']; ?></td>

              <td>
                <form action="" method="post">
                  <input type="hidden" name="txtId" value="<?php echo $empleado['Id']; ?>">
                  <input type="submit" class="btn btn-info" value="Seleccionar" name="accion">
                  <button value="btnEliminar" onClick="return Confirmar('Desea eliminar el empleado?');" class="btn btn-danger" type="submit" name="accion">Eliminar</button>
                </form>
              </td>
            </tr>

          <?php } ?>

          <!-- </tbody> -->
        </table>
      </div>
      <?php if ($mostrarModal) {  ?>
        <script>
          $('#miModal').modal('show');
        </script>
      <?php } ?>
      <script>
        function Confirmar(Mensaje) {
          return (confirm(Mensaje)) ? true : false;
        }
      </script>
    </div>
  <!-- Footer Start -->
  <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-3 col-md-6">
          <h1 class="fw-bold text-primary mb-4">F<span class="text-secondary">oo</span>dy</h1>
          <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem
            sit clita</p>
          <div class="d-flex pt-2">
            <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
            <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
            <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4 class="text-light mb-4">Address</h4>
          <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
          <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
          <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4 class="text-light mb-4">Quick Links</h4>
          <a class="btn btn-link" href="">About Us</a>
          <a class="btn btn-link" href="">Contact Us</a>
          <a class="btn btn-link" href="">Our Services</a>
          <a class="btn btn-link" href="">Terms & Condition</a>
          <a class="btn btn-link" href="">Support</a>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4 class="text-light mb-4">Newsletter</h4>
          <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
          <div class="position-relative mx-auto" style="max-width: 400px;">
            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            &copy; <a href="#">Your Site Name</a>, All Right Reserved.
          </div>
          <div class="col-md-6 text-center text-md-end">
            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer End -->


  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
  <!--WASSAPP-->


  <a href="https://wa.me/987854371?text=Me%20gustaría%20Tener%20Mas%20Informacion" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
</body>

</html>