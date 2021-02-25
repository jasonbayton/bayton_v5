document.getElementById('darktoggle').addEventListener('click', function(event){
  (event.target) ? document.body.setAttribute('data-theme', 'dark') : document.body.removeAttribute('data-theme');
});
