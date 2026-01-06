<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function () {

  if (!document.body.classList.contains('woocommerce-shop')) return;

  const resultCount = document.querySelector('.woocommerce-result-count');
  if (resultCount) {
    resultCount.style.color = '#ffffff';
    resultCount.style.background = 'rgba(0,0,0,0.4)';
    resultCount.style.padding = '8px 12px';
    resultCount.style.borderRadius = '4px';
  }

  const ordering = document.querySelector('.woocommerce-ordering select');
  if (ordering) {
    ordering.style.color = '#ffffff';
    ordering.style.borderColor = '#ffffff';
    ordering.style.backgroundColor = 'transparent';
  }

});

</script>
<!-- end Simple Custom CSS and JS -->
