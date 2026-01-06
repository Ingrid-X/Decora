<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function () {

  if (!document.body.classList.contains('woocommerce-shop')) return;

  document
    .querySelectorAll('.site-footer .site-info p, .site-footer .site-info span')
    .forEach(el => {
      el.style.color = "#f5f5f5";
    });

});
</script>
<!-- end Simple Custom CSS and JS -->
