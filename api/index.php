<div id="container"></div>
<script>
fetch('https://15b388af3e1e.ngrok-free.app/')
  .then(res => res.text())
  .then(html => {
    document.getElementById('container').innerHTML = html;
  });
</script>
