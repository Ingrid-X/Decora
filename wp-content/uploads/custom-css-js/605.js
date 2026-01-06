<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function () {

  function applyShopTextStyles() {

    // Verifica que estamos en Shop o categoría de producto
    if (
      document.body.classList.contains("woocommerce-shop") ||
      document.body.classList.contains("tax-product_cat")
    ) {

      
      const shopTopText = document.querySelectorAll(
        ".woocommerce-result-count, .woocommerce-ordering"
      );

      shopTopText.forEach(el => {
        el.style.color = "#f5f5f5"; 
      });

      
      const footerCopyright = document.querySelector(
        ".site-footer .site-info"
      );

      if (footerCopyright) {
        footerCopyright.style.color = "#f5f5f5"; 
      }
    }
  }

  // Aplicar al cargar
  applyShopTextStyles();

  // Re-aplicar cuando WooCommerce actualiza el contenido (categorías, filtros)
  const observer = new MutationObserver(applyShopTextStyles);

  observer.observe(document.body, {
    childList: true,
    subtree: true
  });

});
</script>
<!-- end Simple Custom CSS and JS -->
