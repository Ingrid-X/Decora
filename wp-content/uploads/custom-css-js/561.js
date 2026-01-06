<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">

document.addEventListener("DOMContentLoaded", function () {

  // Verificamos que estamos en la página Shop
  if (document.body.classList.contains('woocommerce-shop')) {

    const pages = document.querySelectorAll(
      '.woocommerce-pagination .page-numbers'
    );

    pages.forEach(function(page) {
      page.style.color = '#ffffff';          // color del número
      page.style.backgroundColor = '#8b5e3c'; // fondo
      page.style.padding = '8px 12px';
      page.style.borderRadius = '4px';
      page.style.margin = '0 4px';
      page.style.textDecoration = 'none';
    });

    // Página activa
    const current = document.querySelector(
      '.woocommerce-pagination .page-numbers.current'
    );

    if (current) {
      current.style.backgroundColor = '#c49a6c';
      current.style.color = '#000000';
      current.style.fontWeight = '600';
    }
  }
});

</script>
<!-- end Simple Custom CSS and JS -->
