<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function () {

  function applyCopyrightColor() {
    document.querySelectorAll('.site-footer .site-info').forEach(container => {
      container.childNodes.forEach(node => {
        if (node.nodeType === Node.TEXT_NODE && node.textContent.trim() !== '') {
          node.parentNode.style.setProperty('color', '#f5f5f5', 'important');
        }
      });
    });
  }

  applyCopyrightColor();

  const observer = new MutationObserver(() => {
    applyCopyrightColor();
  });

  observer.observe(document.body, {
    childList: true,
    subtree: true
  });

});


</script>
<!-- end Simple Custom CSS and JS -->
